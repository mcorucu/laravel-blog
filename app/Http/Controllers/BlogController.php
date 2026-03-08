<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        $featuredPost = Post::published()->latest()->first();
        $latestPosts = Post::published()->where('id', '!=', $featuredPost?->id)->latest()->take(6)->get();
        $categories = Category::with(['posts' => fn($q) => $q->published()->latest()])->get();

        return view('home', compact('featuredPost', 'latestPosts', 'categories'));
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->published()->latest()->paginate(9);
        return view('category', compact('category', 'posts'));
    }

    public function post($slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::published()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return view('post', compact('post', 'relatedPosts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
