<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','excerpt','body']; //ini form buat isinya
    protected $guarded = ['id']; //kebalikan fillabel yg ga boleh diisi
}
