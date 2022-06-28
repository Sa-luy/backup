<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Phone;
use App\Models\Review;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // protected $table='loaisan_pham';
    // public $timestamps = false; // tu dong theem ngay neu true
    // protected $dateFormat = 'U';// dinh dang ngay thang
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';
    // protected $connection = 'sqlite';

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
    public function phone(){
        return $this->hasOne(Phone::class,'user_id','id');
    }
    public function review(){
        return $this->hasMany(Review::class,'user_id','id');
    }
    public function permission(){
        return $this->belongsToMany(Permission::class,'permission_users','user_id','permission_id');
    }
}