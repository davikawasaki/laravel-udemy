<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller {
    public function show($slug)
    {
        // Query loader: slash is used to access the global library context
        // $post = \DB::table('posts')->where('slug', $slug)->first();

        // Using Eloquent: leverages model connectors directly with Classes implementations
        $post = Post::where('slug', $slug)->firstOrFail();

        // dd($post);  // dump

        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blog post!',
        //     'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        // ];
    
        // if (!array_key_exists($post, $posts)) {
        //     abort(404, 'Sorry, that post was not found.');
        // }
    
        return view('post', [
            // 'post' => $posts[$post] ?? 'Nothing here yet.'
            'post' => $post
        ]);
    }
}