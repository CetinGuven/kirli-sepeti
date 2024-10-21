<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HizmetUrunImage extends Model
{
    use HasFactory;
    protected $table = 'hizmet_urun_image';

    public function hizmetUrun()
    {
        return $this->belongsTo(HizmetUrun::class, 'urun_id');
    }
}
