<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


/*

catatan pake php tinker orm jadi intinya orm ini buat memudahkan lagi
buat crud udah ada dan dia ini bisa isi db tanpa sql gitu 
cukup ketik di command php artisan tinker
nah misal $user(bebas ini) = new User; (ngerujuk models\User.php)
$user -> name ="sena" klik enter
$user -> password = bcrypt('bebas') bebas then enter
$user -> email = "bebas@gmail.com" enter
$user -> save() enter kalo responnya true cek db sen!

$user->all() showw all bisa juga findOrFail(2) ===> ini buat find(id bukan slug) kalo ga ada ya ada handling nya
*/