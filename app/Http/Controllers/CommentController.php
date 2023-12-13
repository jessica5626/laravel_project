<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required',
        ]);
    
        // 사용자가 댓글을 생성하기 전에 인증되어 있는지 확인
        if (auth()->check()) {
            Comment::create([
                'user_id' => auth()->id(),
                'post_id' => $post->id,
                'content' => $request->input('content'),
            ]);
    
            return back()->with('success', '댓글이 작성되었습니다.');
        } else {
            return back()->with('error', '댓글을 작성하려면 로그인이 필요합니다.');
        }
    }
    
    public function update(Request $request, Post $post, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment->update([
            'content' => $request->input('content'),
        ]);

        return back()->with('success', '댓글이 수정되었습니다.');
    }
    
    public function destroy(Post $post, Comment $comment)
    {
        // 여기에서 삭제 로직을 구현합니다.
        $comment->delete();

        return back()->with('success', '댓글이 삭제되었습니다.');
    }
}