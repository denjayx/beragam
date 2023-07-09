<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;
    protected $table = 'cultures';
    protected $fillable = ['nama', 'foto_url', 'deskripsi', 'prov_id', 'cat_id'];

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'prov_id', 'id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
