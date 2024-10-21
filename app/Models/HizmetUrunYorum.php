<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HizmetUrunYorum extends Model
{
    use HasFactory;
    protected $table = 'hizmet_urun_yorum';

    public function Urun()
    {
        return $this->belongsTo(Urunler::class, 'urun_id');
    }
    public function Uye()
    {
        return $this->belongsTo(Uyeler::class, 'uye_id');
    }
}
