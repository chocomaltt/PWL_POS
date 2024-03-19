<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    // protected $fillable = ['level_id', 'username', 'nama'];

    public function user(): HasMany{
        return $this->hasMany(UserModel::class, 'user_id', 'user_id');
    }
}
