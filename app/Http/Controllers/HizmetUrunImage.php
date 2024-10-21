<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HizmetUrunImage extends Controller
{
    public function hizmetUrunImageShow($id){
        $hizmet_urun_image = HizmetUrunImage::where('urun_id',$id)->get();

        return response()->json($hizmet_urun_image);
    }
    public function hizmetUrunImageUpload(Request $request)
    {
        if($request->file('image')){
            $size = $request->file('image')->getSize();
            $extension = $request->file('image')->getClientOriginalExtension();
            $hizmet_urun_image = uniqid() . '_' . Str::random(10) . '.' . $extension;
            $request->file('image')->move(public_path('uploads/hizmeturunresim'), $hizmet_urun_image);

            // Bu fotoğrafı hizmet_urun_image tablosuna kaydet
            HizmetUrunImage::create([
                'urun_id' => $request->urun_id,
                'image' => 'uploads/hizmeturunresim' . $hizmet_urun_image,
            ]);
        }
    }
    public function hizmetUrunImageDestroy(Request $request)
    {
        $file = HizmetUrunImage::where('urun_id',$request->urun_id)->find($request->id);
        if($file){
            $file->delete();
            if(file_exists(public_path('uploads/hizmeturunresim/'.$request->name))){
                unlink(public_path('uploads/hizmeturunresim/'.$request->name));
            }
            return response()->json(['status'=>200,'message'=>'Resim Başarıyla Silindi.']);
        }else{
            return response()->json(['status'=>400,'message'=>'Resim Bulunamadı.']);
        }
    }
}
