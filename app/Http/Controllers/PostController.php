<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('is_published', true)->where('slug', $slug)->firstOrFail();

        $post_tags = $post->tags;

        $categories = Category::all();

        $tags = Tag::all();


        return view('post', [

            'post' => $post,
            'post_tags' => $post_tags,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
