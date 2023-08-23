<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='posts';
    protected $quarded=false;



public function tags(){
    return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
}


    protected $fillable = ['title','content','preview_image','main_image','category_id'];
   
}
