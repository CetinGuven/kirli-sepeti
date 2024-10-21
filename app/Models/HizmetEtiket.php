<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HizmetEtiket extends Model
{
    use HasFactory;
    protected $table = 'hizmet_etiket';

    public function hizmetKategori()
    {
        return $this->belongsTo(HizmetKategori::class, 'hizmet_kategori_id', 'id');
    }
}
