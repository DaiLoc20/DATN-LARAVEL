<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index_user_admin()
    {
       $admin = User::where('is_user_admin',1)
       ->with('Images')
       ->paginate(5,['*'],'admin_page');

       $user  = User::where('is_user_admin',0)
       ->with('Images')
       ->paginate(5,['*'],'user_page');
        return view('Admin/User/User-List',compact('admin','user'));
    }
    public function index_admin() { return view('Layouts/Layout_Admin'); }
    public function index_user() { return view('Layouts/Layout_User');}
    public function index_login_user() { return view('Layouts/Layout_Login'); }
    public function index_user_infor() { return view( 'Users/User-Infor'); }
    public function store(Request $request)
    {
        //
    }

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
    public function show(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
