<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets()
    {
        return $this->hasMany('App\Models\Tweet');
    }

    public function getAvatarAttribute()
    {
        return 'https://robohash.org/' . $this->email . '?size=40x40&bgset=bg1';
    }

    public function timeline()
    {
        $friendsIds = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friendsIds)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class ,'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    public function follow($user)
    {
        return $this->follows()->save($user);
    }
}
