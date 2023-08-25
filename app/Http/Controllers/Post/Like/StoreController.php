<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;


class StoreController extends Controller
{
    public function __invoke(Post $post){
      
      auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
