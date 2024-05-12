<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as UserAuthenticate;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;

class UserModel extends UserAuthenticate implements JWTSubject
{
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
    
    // use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['username','nama','level_id', 'password', 'image'];
    
    public function level(){
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
    // protected $fillable = ['level_id', 'username', 'nama'];

    // public function user(): HasMany{
    //     return $this->hasMany(UserModel::class, 'user_id', 'user_id');
    // }
    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    // }
}