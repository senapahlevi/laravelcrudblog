<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post 
{
    // use HasFactory;
    private static $blog_post = [
        [ "title" => "Kovid 1",
         "slug" => "kovid-1",
         "author" => "sena",
         "body" => "kovid bahaya!!"],
 
        [ "title" => "Eintracht frankfurt menang uel !!!",
               "slug" => "eintracht-frankfurt-menang-uel",
 
         "author" => "sena",
         "body" => "Klub kuda hitam"],
     ];
     public static function all (){
        //  return self::$blog_post; //non collection
         return collect(self::$blog_post);
         
     }
     public static function find ($slug){
         //ini ga bisa kasih perintah jadi cenderung ga reusable
        // $posts = self::$blog_post;
        // $post = [];

        // foreach ($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        //pake collection(array yg keren bisa kasih perintah) biar bisa multifungsi dibandingkan diatas ini 
        $posts = static::all;
            
        // return $posts->first; //ambil data pertama aja kereren kan??
            return $posts->firstWhere('slug',$slug);
            //cari dimana ditemukan  'slug' == $slug keren kan? 
         
     }
}
