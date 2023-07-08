<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'provinces';
    protected $fillable = ['nama', 'foto_url', 'deskripsi'];

    public function cultures()
    {
        return $this->hasMany(Culture::class);
    }
}
