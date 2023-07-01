<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $fillable = ['nama', 'foto_url', 'deskripsi'];

    public function budaya()
    {
        return $this->hasMany(Budaya::class);
    }
}
