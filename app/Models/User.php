<?php

namespace App\Models;


use App\Notifications\SendVerifyWitchQueueNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = false;

    const ROLE_ADMIN = 1;
    const ROLE_READ = 0;

    public static function getRole()
    {
        return [
            self::ROLE_READ => 'Читатель',
            self::ROLE_ADMIN => 'Админ',
        ];
    }

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
    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWitchQueueNotification());

    }
    public function likedPosts()
    {
        return $this->belongsToMany(Post::class,'post_user_likes','user_id','post_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
