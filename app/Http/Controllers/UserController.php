<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            "name"     => "required||min:3",
            "email"    => "required|email|unique:users,email",
            "password" => "required|min:8",
        ]);

        $hashedPassword = password_hash($data["password"], PASSWORD_DEFAULT);

        $user = User::create([
            "name"     => $data["name"],
            "email"    => $data["email"],
            "password" => $hashedPassword,
        ]);

        session([
            "user_id" => $user->id,
            "name"    => $data["name"],
        ]);

        return redirect("/");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email"    => "required|email",
            "password" => "required",
        ]);

        $user = User::where("email", $data["email"])->first();

        if (! $user || ! password_verify($data["password"], $user->password)) {
            return back()->with("error", "Invalid Credentials");
        }

        $isMatch = password_verify($data["password"], $user->password);

        if (! $isMatch) {
            return back()->with("error", "Invalid Credentials ");
        }

        session([
            "user_id" => $user->id,
            "name"    => $user->name,
        ]);

        return redirect("/");
    }
}