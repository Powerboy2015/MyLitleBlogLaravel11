<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function Index(Request $request): View
    {
        $recentBlogs = Post::paginate(5);
        return view('welcome', ['posts' => $recentBlogs]);
    }

    public function Read($id): View
    {
        $post = Post::find($id);
        $comments = $post->getComments;
        return view('blog.post', ['postData' => $post, 'comments' => $comments]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        request()->validate([
            'postText' => ['required', 'min:30'],
            'postTitle' => ['required', 'min:5'],
        ]);

        Post::create([
            'authorId' => Auth::user()->id,
            'postText' => request('postText'),
            'postTitle' => request('postTitle'),
        ]);

        return redirect('/blog');
    }
}
