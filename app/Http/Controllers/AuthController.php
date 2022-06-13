<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string",],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"]
        ]);

        $user = \App\Models\User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if ($user) {
            auth("web")->login($user);
        }
        return redirect(route("home"));
    }
}
