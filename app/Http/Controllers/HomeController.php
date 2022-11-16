<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Home;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function show()
    {

        $posts = Post::where('is_published', true)->orderBy('id', 'desc')->paginate(1);


        $categories = Category::all();

        $tags = Tag::all();


        return view('home', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);

    }

}
