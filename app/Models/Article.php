<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = ['judul', 'tanggal', 'foto_url', 'admin_id'];

    public function admins()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
