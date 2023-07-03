<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;
    protected $table = 'budaya';
    protected $fillable = ['nama', 'foto_url', 'deskripsi', 'prov_id', 'kat_id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'prov_id', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kat_id', 'id');
    }
}
