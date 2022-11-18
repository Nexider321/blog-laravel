<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Wamania\Snowball\StemmerFactory;
class PostController extends Controller
{
    public function show($slug)
    {
        //get the requested post, if it is published
        $post = Post::where('is_published', true)->where('slug', $slug)->firstOrFail();

        //get all the tags for this post
        $post_tags = $post->tags;

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //return the data to the corresponding view
        return view('post', [
            'post' => $post,
            'post_tags' => $post_tags,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function search(Request $request)
    {
        $stemmer = StemmerFactory::create('en');


        $key = $request->input('query');

        $stem = $stemmer->stem($key);
        echo $stem;
        $posts = Post::where('title', 'like', "%{$stem}%")
        ->orderBy('id', 'desc')
        ->paginate(1);

        $categories = Category::all();

        $tags = Tag::all();

        return view('search', [
            'stem' => $stem,
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
