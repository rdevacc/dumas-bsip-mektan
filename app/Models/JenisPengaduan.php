<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    
    public function pj(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pj_id');
    }

}
