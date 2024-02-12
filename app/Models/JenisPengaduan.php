<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JenisPengaduan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'pj_id',
        'role_id',
    ];

    public function pengaduan(): HasOne
    {
        return $this->hasOne(DumasForm::class);
    }
    
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'jenisPengaduan_id');
    }

}
