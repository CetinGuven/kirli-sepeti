<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HizmetKategori extends Model
{
    use HasFactory;
    protected $table = 'hizmet_kategori';

    public function hizmetEtiketler()
    {
        return $this->hasMany(HizmetEtiket::class, 'hizmet_kategori_id', 'id');
    }
}
