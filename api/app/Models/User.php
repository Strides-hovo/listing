<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Role;


    public string $roleAdmin = 'admin';


    protected  $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];



    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Relations
     */


    public function profile():HasOne
    {
        return $this->hasOne(Profile::class);
    }


}
