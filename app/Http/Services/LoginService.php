<?php


namespace App\Http\Services;


class LoginService
{
    function checkLogin($request) {
        $email = $request->email;
        $password = $request->password;

        if ($email == "admin@gmail.com" && $password == "1234") {
            session()->put('role', 1);
            session()->put('isLogin', true);
            return redirect('home');
        } else if ($email == "user@gmail.com" && $password == "1234") {
            session()->put('isLogin', true);
            return redirect('home');
        } else {
            session()->flash('login_error', 'Tai khoan sai');
            return redirect()->route('login.showFormLogin');
        }
    }
}
