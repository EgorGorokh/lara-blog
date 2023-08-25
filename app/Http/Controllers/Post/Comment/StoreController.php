<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;


class StoreController extends Controller
{
    public function __invoke(Post $post,StoreRequest $request){
      
        $data=$request->validated();
        $data['user_id']=auth()->user()->id;
        $data['post_id']=$post->id;

      // dd($data);
       Comment::create($data);

        return redirect()->route('post.show',$post->id);
    }
}
