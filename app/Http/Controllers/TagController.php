<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $category = Category::where('slug', $slug)->firstOrFail();


        $posts = $category->posts()
            ->where('is_published', true)
            ->orderBy('id', 'desc')
            ->paginate(5);


        $categories = Category::all();

        $tags = Tag::all();


        return view('tag', [
            'tag' => $tag,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
