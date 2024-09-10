<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        $query = User::with('images');

        $query->orderByDesc('is_user_admin')
              ->orderBy('id', $direction)
              ->orderBy('last_name', $direction)
              ->orderBy('first_name', $direction);

        if ($showNew) { $query->where('created_at', '>=', now()->subDay()); }
        if ($showEdited) { $query ->where('updated_at', '>=', now()->subDay())
                              ->where('created_at', '<', now()->subDay()); }
        $users = $query->paginate(5);
        return view('Admin/User/User-List', [ 'sort' => $sort, 'users' => $users, 'showNew' => $showNew, 'showEdited' => $showEdited]);
    }
    public function index_admin() { return view('Layouts/Layout_Admin'); }
    public function index_user() { return view('Layouts/Layout_User');}
    public function index_login_user() { return view('Layouts/Layout_Login'); }
    public function index_user_infor() { return view( 'Users/User-Infor'); }

    //Thêm - Sửa - Xoá
    public function create_user() {  return view('Admin/User/User-Plus');}

    public function store(StoreUsersRequest $request)
    {
        try{
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            $user->birthday = $request->birthday;
            $user->address = $request->address;
            $user->is_user_admin = 1;
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
        return view('Admin/User/User-Edit', compact('user'));
    }
    public function update(UpdateUsersRequest $request, User $user)
    {
       try{
        if (!$user->is_user_admin) {
            return redirect()->route('admin.user.edit')->with('error1-update-user', 'Bạn chỉ có thể chỉnh sửa được tài khoản Admin');
        }
        $validated = $request->validated();
        $user->update($validated);
        return redirect()->route('admin.user.edit', $user->id )->with('success-update-user', 'Chỉnh sửa tài khoản admin thành công ! ');
       }catch(\Exception $e){
        Log::error('Lỗi khi chỉnh sửa tài khoản : ' . $e->getMessage());
        return redirect()->route('admin.user.edit')->with('error-update-user', 'Chỉnh sửa tài khoản không thành công');
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
