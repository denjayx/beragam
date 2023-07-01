<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = ['judul', 'tanggal', 'penulis', 'foto_url', 'isi', 'admin_id'];

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
