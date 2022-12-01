<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    public function preferences(){
        return $this->hasOne('App\Models\preferences');
    }

    public function exercises()
    {
        return $this->hasMany('App\Models\Exercise');
}

    public function messages(){
        return $this->belongsToMany('App\Models\User', 'messages', 'user_idDestino', 'user_idOrigen');
    }
    public function message(){
        return $this->belongsToMany('App\Models\User', 'messages', 'user_idOrigen', 'user_idDestino');
    }

}
