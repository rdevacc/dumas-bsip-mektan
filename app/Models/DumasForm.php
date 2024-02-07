<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DumasForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengaduan_id',
        'pj_id',
        'statusBukti_id',
        'nama',
        'nik',
        'email',
        'alamat',
        'jenis_lainnya',
        'isi_pengaduan',
        'saran_dan_masukkan',
        'bukti_pengaduan',
    ];

    public function pj(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jenisPengaduan(): BelongsTo
    {
        return $this->belongsTo(JenisPengaduan::class, 'pengaduan_id');
    }

    public function statusBukti(): BelongsTo
    {
        return $this->belongsTo(StatusBukti::class, 'statusBukti_id');
    }

    public function statusPengaduan(): BelongsTo
    {
        return $this->belongsTo(StatusPengaduan::class, 'statusPengaduan_id');
    }
}
