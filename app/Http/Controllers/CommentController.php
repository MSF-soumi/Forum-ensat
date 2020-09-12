<?php 
namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    


    public function store(Request $request,Post $post)
    {
        $this->validate($request, [
            'body' => 'bail|required|max:255',
        ]);
        $comment= new \App\Comment;
        $user=Auth::id();

        $comment->body= $request->body;
        $comment->post_id = $post->ID_P;
        $comment->user_id=$user;
        $comment->save();
        return back();

    }


}


?>