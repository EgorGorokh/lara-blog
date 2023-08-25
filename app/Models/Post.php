<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='posts';
    protected $quarded=false;
    protected $withCount=['likedUsers'];



public function tags(){
    return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
}


public function category(){
    return $this->belongsTo(Category::class,'category_id','id');
}



public function likedUsers(){
    return $this->belongsToMany(User::class,'post_user_likes','post_id','user_id');
}

public function comments(){
    return $this->hasMany(Comment::class,'post_id','id');
}


    protected $fillable = ['title','content','preview_image','main_image','category_id'];
   
}
