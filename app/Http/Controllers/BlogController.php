<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //

    public function showBlog()
    {
        return view("addblog");
    }

    public function addBlog(Request $request)
    {
        $data = $request->validate([
            "title"   => "required|string",
            "content" => "sometimes|nullable|string",
            "photo"   => "sometimes|nullable",
        ]);

        $user = Auth::user();

        $blog = Blog::create([
            "title"    => $data["title"],
            "content"  => $data["content"] ?? null,
            "photo"    => $data["photo"] ?? null,
            "user_id"  => $user->id,
            "username" => $user->name,
        ]);

        return redirect("/");
    }

    public function getAllBlogs()
    {
        $blogs = Blog::all();

        return view("index", compact("blogs"));

    }

    public function getMyBlogs()
    {
        $user_id = session("user_id");

        $blogs = Blog::where("user_id", $user_id)->first();

        return $blogs;
    }
}
