<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     * * @var array
     */
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level(): BelongsTo // (Catatan: Pastikan Anda mengimpor use Illuminate\Database\Eloquent\Relations\BelongsTo; di atas class jika menggunakan type hinting BelongsTo ini)
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
