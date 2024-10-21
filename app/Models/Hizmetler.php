<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hizmetler extends Model
{
    use HasFactory;
    protected $table = 'hizmetler';
    public function HizmetlerKategori()
    {
        return $this->belongsTo(HizmetKategori::class, 'kategori_id');
    }

}
