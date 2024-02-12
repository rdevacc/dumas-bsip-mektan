<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        'nama',
        'email',
        'password',
        'role_id',
        'jenisPengaduan_id',
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
        'password' => 'hashed',
    ];

    /**
     * * The Relationship from User to Dumas Form
     */
    public function dumasForm(): HasMany
    {
        return $this->hasMany(DumasForm::class);
    }

    /**
     * * The Relationship from User to Jenis Pengaduan
     */
    public function jenisPengaduan(): BelongsTo
    {
        return $this->belongsTo(JenisPengaduan::class, 'jenisPengaduan_id');
    }
    
    /**
     * * The Relationship from User to Roles
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
