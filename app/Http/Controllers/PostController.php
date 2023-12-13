<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // 여기에 게시글 목록을 가져오는 로직을 작성합니다.
        $posts = Post::all();

        // 가져온 게시글 목록을 뷰에 전달합니다.
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if (auth()->check()) {
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
            ]);

            return redirect()->route('posts.index')->with('success', '게시글이 성공적으로 작성되었습니다.');
        }

        return redirect()->route('login')->with('error', '로그인 후 게시글을 작성할 수 있습니다.');
    }
    
    public function destroy(Post $post)
    {
        // 해당 게시물 삭제 로직
        $post->delete();

        return redirect()->route('posts.index')->with('success', '게시물이 삭제되었습니다.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 게시글 수정 처리
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show', $post->id)
            ->with('success', '게시글이 성공적으로 수정되었습니다.');
    }

}