<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    //

    public function showRegister()
    {
        return view("register");
    }

    public function showLogin()
    {
        return view("login");
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            "email"    => "required|email|unique:users,email",
            "name"     => "required|min:3",
            "password" => "required|min:8",
        ]);

        $hashedPassword = password_hash($data["password"], PASSWORD_DEFAULT);

        $user = User::create([
            "email"    => $data["email"],
            "name"     => $data["name"],
            "password" => $hashedPassword,

        ]);

        Auth::login($user);

        return redirect("/");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email"    => "required|email",
            "password" => "required",

        ]);

        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {
            return redirect("/");
        }

        return redirect("/users/login");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect("/users/login");
    }
}
