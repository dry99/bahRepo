<?php
    namespace App\Http\Controllers\expense;
    use App\AccountUser;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Auth\LoginController as BaseLoginController;
    use Illuminate\Support\Facades\Auth;
class LoginController extends BaseLoginController
{
    protected $redirectTo = 'expanse/home';
    public function __construct()
    {
    $this->middleware('guest:account')->except(['showLoginForm','myLogout']);
    }
    public function showLoginForm()
    {
    return view('expanse.auth.login.login');
    }
    public function username()
    {
    return 'username';
    }
    protected function guard()
    {
    return Auth::guard('account');
    }
    public function myLogout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect(‘expanse/login’);
    }
}