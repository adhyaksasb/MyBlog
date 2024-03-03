<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::whereHas('posts', function ($query) {
            $query->published();
        })->take(10)->get();

        return view('blog.posts.index', compact('categories'));
    }
}
