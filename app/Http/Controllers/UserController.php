<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function getUser(): View
    {
        // return "Anand Kumar";
        return view("user.index");
    }

    function GetUserName($name)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response->json();
        // dd($response->json());
        // return "Name is $name";
        return view("userName.index", compact('name', 'posts'));
    }

    public function getPostDetails($name, $id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");
        $post = $response->json();

        // Return the view with the post details
        return view('userName.singleUserDetails', compact('post', 'name'));
    }
}
