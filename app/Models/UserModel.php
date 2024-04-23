<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as UserAuthenticate;
use Tymon\JWTAuth\Contracts\JWTSubject;

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

    protected $fillable = ['username','nama','level_id', 'password'];
    // protected $fillable = ['level_id', 'username', 'nama'];

    // public function user(): HasMany{
    //     return $this->hasMany(UserModel::class, 'user_id', 'user_id');
    // }
    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    // }
}