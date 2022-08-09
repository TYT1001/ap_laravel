<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $posts = Post::paginate('5');

        return view('home',compact('posts'));
    }
}
