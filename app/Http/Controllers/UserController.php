<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

class UserController extends Controller
{
    public function index_user_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);
        $search = $request->query('search', '');
        $query = User::with('images');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('last_name', 'LIKE', "%{$search}%")
                  ->orWhere('first_name', 'LIKE', "%{$search}%")
                  ->orWhereRaw("CONCAT(first_name, ' ', last_name) LIKE ?", ["%{$search}%"]);
            });
        }

        $query->orderByDesc('is_user_admin')
              ->orderBy('id', $direction)
              ->orderBy('last_name', $direction)
              ->orderBy('first_name', $direction);

        if ($showNew) { $query->where('created_at', '>=', now()->subDay()); }
        if ($showEdited) { $query ->where('updated_at', '>=', now()->subDay())
                              ->where('created_at', '<', now()->subDay()); }
        $users = $query->paginate(5);
        return view('Admin/User/User-List', [ 'sort' => $sort, 'users' => $users, 'showNew' => $showNew, 'showEdited' => $showEdited , 'search'=>$search]);
    }
    public function index_admin() { return view('Layouts/Layout_Admin'); }
    public function index_user()
    {
        $categories = Category::with(['children', 'images', 'parent'])->get();
        return view('Layouts/Layout_User',['categories'=>$categories]);

    }
    public function index_login_user() { return view('Layouts/Layout_Login'); }
    public function index_user_infor() { return view( 'Users/User-Infor'); }



     /* Hình Ảnh */
     protected function fixImage(User $user, Request $request)
     {
         if ($request->hasFile('path')) {
             $file = $request->file('path');
             $filename = time() . '_' . $file->getClientOriginalName();
             $filePath = $file->storeAs('/img/User/', $filename, 'public');
         }
         else {
             $filePath = '/img/NoImage/NO-IMAGE.jpg';
         }
         $oldImage = Image::where('UserID', operator: $user->id)->first();
         if ($oldImage) {
             Storage::disk('public')->delete(str_replace('/img/User/', '', $oldImage->path));
             $oldImage->delete();
         }
         Image::create([
             'UserID' => $user->id,
             'path' => Storage::url($filePath),
         ]);
         return true;
     }
     /* Hình Ảnh */
    //Thêm - Sửa - Xoá
    public function create_user() {  return view('Admin/User/User-Plus');}

    public function store(StoreUsersRequest $request)
    {
        try{
            $user = User::create([
                'first_name' =>$request->first_name,
                'last_name' => $request->last_name,
                'email'=> $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'address' => $request->address,
                'is_user_admin' => 1
            ]);
            $this->fixImage( $user, $request);
            $user->save();
            return redirect()->route('admin.user.plus')->with('success-store-user', 'Thêm tài khoản  thành công !');
        } catch(\Exception $e){
            Log::error('Lỗi khi thêm tài khoản : ' . $e->getMessage());
            return redirect()->route('admin.user.plus')->with('error-store-user', 'Thêm tài khoản không thành công');
        }
    }
    public function edit_user($id) {

        $user = User::findOrFail($id);
        if(!$user -> is_user_admin) {
            return redirect()->route('admin.user.list')->with('error-edit','Bạn chỉ có thể chỉnh sửa được tài khoản Admin');
        }
        $user->load('images');
        return view('Admin/User/User-Edit', compact('user'));
    }
    public function update(UpdateUsersRequest $request, User $user)
    {
       try{
        $validate = $request->validated();
        $user->fill($validate);
        $this->fixImage($user, $request);
        $user->save();

        return redirect()->route('admin.user.edit', $user->id )->with('success-update-user', 'Chỉnh sửa tài khoản admin thành công ! ');
       }catch(\Exception $e){
        Log::error('Lỗi khi chỉnh sửa tài khoản : ' . $e->getMessage());
        return redirect()->route('admin.user.edit',$user->id)->with('error-update-user', 'Chỉnh sửa tài khoản không thành công');
       }
    }

    public function destroy(User $user)
    {
        try
        {
            if (!$user->is_user_admin)
                {
                   return redirect()->route('admin.user.list')->with('delete-user-destroy-user', 'Chỉ có thể xóa tài khoản admin.');
                }

            $adminCount = User::where('is_user_admin', 1)->count();
            if ($adminCount <= 1)
                {
                    return redirect()->route('admin.user.list')->with('delete-admin-destroy-user', 'Không thể xóa admin cuối cùng.');
                }
            $user->delete();
            return redirect()->route('admin.user.list')->with('success-destroy-user', 'Xóa tài khoản admin thành công !');
        }
        catch (\Exception $e)
        {
            Log::error('Lỗi khi xóa tài khoản admin: ' . $e->getMessage());
            return redirect()->route('admin.user.list')->with('error-destroy-user', 'Xóa tài khoản admin không thành công!');
        }
    }
    //Thêm - Sửa - Xoá
    //Đăng nhập và đăng ký
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->is_user_admin  == 0) {
                return redirect()->intended('/User-Infor')->with('success', 'Đăng nhập thành công !');
            }
            return redirect()->intended('/Layouts/Layout_Admin')->with('success', 'Đăng nhập thành công !');
        };


        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác !',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $isAdmin = Auth::user() && Auth::user()->is_user_admin == 1;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($isAdmin) {
            return redirect('/Layouts/Layout_Admin')->with('failure', 'Đăng xuất thành công !');
        } else {
            return redirect('/User-Infor')->with('failure', 'Đăng xuất thành công !');
        }
    }
    //Đăng nhập và đăng ký


}
