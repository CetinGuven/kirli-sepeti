<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServisBolgeleri extends Model
{
    use HasFactory;
    protected $table = 'servis_bolgeleri';

 public function hizmetKategori()
 {
     return $this->belongsTo(HizmetKategori::class, 'hizmet_kategori_id', 'id');
 }
 public function hizmet()
 {
     return $this->belongsTo(Hizmetler::class, 'hizmet_id', 'id');
 }
 public function il()
 {
        return $this->belongsTo(il::class, 'il_id', 'id');
 }
 public function ilce()
{
        return $this->belongsTo(ilce::class, 'ilce_id', 'id');
}
public function bayi()
{
        return $this->belongsTo(User::class, 'bayi_id', 'bayi_id');
}

}
