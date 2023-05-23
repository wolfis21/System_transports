<?php

namespace App\Http\Controllers\Auth\Users_op;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $guard = 'users_op';
    protected $table = 'users_ops';

    public function showLoginForm()
    {
        return view('auth.users_op.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if ($this->guard()->attempt($credentials)) {
            $user = $this->guard()->user();
           /*  dd($user->type_service_id); // Depuración: Verificar el valor de type_services_id */
            if ($user->type_service_id == 1) {
                return redirect()->intended('/dashboard-admin-bus');
            } elseif ($user->type_service_id == 2) {
                return redirect()->intended('/dashboard-admin-pistero');
            }
        }

        return redirect()->back()->withInput()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function username()
    {
        return 'email';
    }
    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['deleted_at' => null]);
    }

    protected function guard()
    {
        return Auth::guard('users_op');
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request);

        return $this->guard()->attempt(
            $credentials,
            $request->filled('remember')
        );
    }
}
