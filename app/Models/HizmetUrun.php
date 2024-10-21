<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HizmetUrun extends Model
{
    use HasFactory;
    protected $table = 'hizmet_urun';

    public function HizmetKategori()
    {
        return $this->belongsTo(HizmetKategori::class, 'hizmet_kategori_id');
    }
    public function HizmetEtiket()
    {
        return $this->belongsTo(HizmetEtiket::class, 'hizmet_etiket_id');
    }

}
