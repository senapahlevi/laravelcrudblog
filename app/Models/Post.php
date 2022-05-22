<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title','slug ','excerpt','body']; //ini form buat isinya
    protected $guarded = ['id']; //kebalikan fillabel yg ga boleh diisi

    public function category (){
        return $this -> belongsTo(Category::class);
        //ngecek nya ke thinker ketik $post = Post::first(), type lagi $post->category 
        //cek kategori apa $post->category->name
    }
    public function user (){
        return $this -> belongsTo(User::class);
    //baca nya 1 user cuma punya 1 post
    }
}
