<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.custom_login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        /**$request->authenticate();'**/
        $request->validate([
            'email' => 'required | string | max:50 ',
            'password' => 'required | string max:50' ,
        ]);

        /*if(!Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
            throw ValidationException::withMessages(['login_error' => 'ログインに失敗しました。もう一度試してください。']);
        }*/

        $request->session()->regenerate();

        return redirect()->intended('/furniture');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
