<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q', '');

        if (empty($query)) {
            return response()->json([]);
        }

        $posts = Post::where('title', 'like', "%{$query}%")
            ->orWhere('excerpt', 'like', "%{$query}%")
            ->orWhere('body', 'like', "%{$query}%")
            ->published()
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($post) {
                return [
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'excerpt' => \Illuminate\Support\Str::limit($post->excerpt, 60),
                    'category' => $post->category->name ?? 'Uncategorized',
                    'image' => $post->featured_image ? \Illuminate\Support\Facades\Storage::url($post->featured_image) : null,
                ];
            });

        return response()->json($posts);
    }
}
