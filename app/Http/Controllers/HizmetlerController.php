<?php

namespace App\Http\Controllers;

use App\Models\ServisBolgeleri;
use App\Models\HizmetEtiket;
use App\Models\HizmetKategori;
use App\Models\Hizmetler;
use App\Models\HizmetUrun;
use App\Models\HizmetUrunYorum;
use App\Models\Il;
use App\Models\Ilce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HizmetlerController extends Controller
{
    public function getİlceler($il)
    {
        $ilceler = Ilce::where('il_id', $il)->get();
        return response()->json($ilceler);
    }
    public function hizmetKategoriShow (Request $request)
    {
        $hizmet_kategorileri = HizmetKategori::all();
        return view('admin.hizmetler.hizmet_kategori', compact('hizmet_kategorileri'));
    }

    public function hizmetKategoriCreate(Request $request)
    {
        $hizmet_kategori = new HizmetKategori;
        $hizmet_kategori->kategori_adi = $request->kategori_adi;
        $hizmet_kategori->aciklama = $request->aciklama;
        $hizmet_kategori->durum = $request->durum;

        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/hizmetKategori"), $resim);
            $hizmet_kategori->resim = "uploads/hizmetKategori/" . $resim;
        }
        $hizmet_kategori->save();

        return redirect()->route('admin.hizmetKategoriShow');
    }
    public function hizmetKategoriUpdate($id)
    {
        $hizmet_kategori_guncelle= HizmetKategori::find($id);
        return view('admin.hizmetler.hizmet_kategori_edit',compact('hizmet_kategori_guncelle'));

    }
    public function hizmetKategoriUpdatePost(Request $request, $id = null)
    {
        $hizmet_kategori_guncelle= HizmetKategori::find($id);
        $hizmet_kategori_guncelle->kategori_adi=$request->kategori_adi;
        $hizmet_kategori_guncelle->aciklama=$request->aciklama;
        $hizmet_kategori_guncelle->durum=$request->durum;

        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/urunKategori"), $resim);
            $hizmet_kategori_guncelle->resim = "uploads/urunKategori/" . $resim;
        }
        $hizmet_kategori_guncelle->save();
        return redirect()->route('admin.hizmetKategoriUpdate',$id)->with('message','Güncelleme Başarılı');
    }
    public function hizmetKategoriDestroy($id)
    {

        $hizmet_kategori_sil= HizmetKategori::find($id);
        $hizmet_kategori_sil->delete();
        return redirect()->route('admin.hizmetKategoriShow');
    }

    public function hizmetShow (Request $request)
    {
        $kategoriler = HizmetKategori::select('id', 'kategori_adi')->get();

        $hizmetler = Hizmetler::all();
        return view('admin.hizmetler.hizmetler', compact('hizmetler','kategoriler'));
    }
    public function hizmetCreate(Request $request)
    {
        //Önce Kategorileri alıyoruz.
        $kategoriler = HizmetKategori::select('id', 'kategori_adi')->get();

        $hizmetler = new Hizmetler();
        $hizmetler->hizmet_adi=$request->hizmet_adi;
        $hizmetler->sira=$request->sira;
        $hizmetler->kategori_id = $request->kategori_id;
        $hizmetler->on_aciklama = $request->on_aciklama;
        $hizmetler->aciklama = $request->aciklama;
        $hizmetler->fiyat = $request->fiyat;
        $hizmetler->seo = $request->seo;
        $hizmetler->durum = $request->durum;

        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/hizmetler"), $resim);
            $hizmetler->resim = "uploads/hizmetler/" . $resim;
        }
        //dd($hizmetler);
        $hizmetler->save();
        return view('admin.hizmetler.hizmetler',compact('hizmetler','kategoriler'));

    }

    public function hizmetUpdate($id)
    {
        //Önce Kategorileri alıyoruz.
        $kategoriler = HizmetKategori::select('id', 'kategori_adi')->get();

        $hizmet_guncelle= Hizmetler::find($id);
        return view('admin.hizmetler.hizmetler_edit',compact('hizmet_guncelle','kategoriler'));

    }
    public function hizmetUpdatePost(Request $request, $id = null)
    {
        $hizmet_guncelle= Hizmetler::find($id);
        $hizmet_guncelle->hizmet_adi=$request->hizmet_adi;
        $hizmet_guncelle->sira=$request->sira;
        $hizmet_guncelle->kategori_id = $request->kategori_id;
        $hizmet_guncelle->on_aciklama = $request->on_aciklama;
        $hizmet_guncelle->aciklama = $request->aciklama;
        $hizmet_guncelle->fiyat = $request->fiyat;
        $hizmet_guncelle->seo = $request->seo;
        $hizmet_guncelle->durum = $request->durum;

        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/hizmetler"), $resim);
            $hizmet_guncelle->resim = "uploads/hizmetler/" . $resim;
        }
        $hizmet_guncelle->save();
        return redirect()->route('admin.hizmetShow');
    }

    public function hizmetDestroy($id)
    {
        $hizmet_sil= Hizmetler::find($id);
        $hizmet_sil->delete();
        return redirect()->route('admin.hizmetShow');
    }
    public function hizmetBolgeShow (Request $request)
    {
        //Bayileri alıyoruz.
        $bayiler = User::All();
        //Hizmetleri alıyoruz.
        $hizmetler = Hizmetler::select('id', 'hizmet_adi')->get();
        //Hizmet kategorilerini alıyoruz.
        $kategoriler = HizmetKategori::select('id', 'kategori_adi')->get();
        //İlleri Alıyoruz
        $iller = il::All();
        //$ilceler = ilce::All();

        $hizmet_bolgeleri = ServisBolgeleri::all();
        return view('admin.hizmetler.hizmet_bolgeleri',compact('hizmet_bolgeleri','bayiler','hizmetler','kategoriler'));
    }
    public function hizmetEtiketShow (Request $request)
    {
        $hizmet_kategoriler= HizmetKategori::get();
        $hizmet_etiketler= HizmetEtiket::get();

        return view('admin.hizmetler.hizmet_etiket', compact('hizmet_etiketler','hizmet_kategoriler'));
    }

    public function hizmetEtiketCreate(Request $request)
    {

        $hizmet_etiket = new HizmetEtiket;
        $hizmet_etiket->hizmet_kategori_id = $request->hizmet_kategori_id;
        $hizmet_etiket->hizmet_etiket_adi=$request->hizmet_etiket_adi;
        $hizmet_etiket->durum = $request->durum;
        $hizmet_etiket->save();

        return redirect()->route('admin.hizmetEtiketShow');
    }
    public function hizmetEtiketUpdate($id)
    {
        //Önce Kategorileri alıyoruz.
        $hizmet_kategoriler= HizmetKategori::all();

        $hizmet_etiket_guncelle= HizmetEtiket::find($id);
        return view('admin.hizmetler.hizmet_etiket_edit',compact('hizmet_etiket_guncelle','hizmet_kategoriler'));

    }

    public function hizmetEtiketUpdatePost(Request $request, $id = null)
    {
        $hizmet_kategoriler= HizmetKategori::get();
        $hizmet_etiket_guncelle= HizmetEtiket::find($id);

        $hizmet_etiket_guncelle->hizmet_kategori_id = $request->hizmet_kategori_id;
        $hizmet_etiket_guncelle->hizmet_etiket_adi=$request->hizmet_etiket_adi;
        $hizmet_etiket_guncelle->durum=$request->durum;

        $hizmet_etiket_guncelle->save();
        return redirect()->route('admin.hizmetEtiketShow',compact('hizmet_kategoriler'));
    }
    public function hizmetEtiketDestroy($id)
    {
        $hizmet_etiket_sil= HizmetEtiket::find($id);
        $hizmet_etiket_sil->delete();
        return redirect()->route('admin.hizmetEtiketShow');
    }

    public function hizmetYorumShow(Request $request)
    {
        $urun_yorumlar = HizmetUrunYorum::with(['urun','uye'])->get();
        return view('admin.urunler.urun_yorum',compact('urun_yorumlar'));
    }
    public function hizmetYorumUpdate(Request $request, $id = null)
    {
        $urun_yorum_guncelle= HizmetUrunYorum::find($id);
        $urun_yorum_guncelle->durum=$request->durum;
        $urun_yorum_guncelle->save();
        return redirect()->route('admin.urunYorumShow');
    }
    public function hizmetYorumDestroy($id){
        $urun_yorum_sil= HizmetUrunYorum::find($id);
        $urun_yorum_sil->delete();
        return redirect()->route('admin.urunYorumShow');
    }

    public function hizmetUrunShow()
    {
        $hizmet_kategoriler= HizmetKategori::all();
        $hizmet_urunler = HizmetUrun::with('HizmetEtiket')->get();
        return view('admin.hizmetler.hizmet_urun',compact('hizmet_urunler','hizmet_kategoriler'));
    }
    public function hizmetUrunCreate(Request $request)
    {
        //Önce Kategorileri alıyoruz.
        $hizmet_kategoriler= HizmetKategori::with('HizmetEtiket')->get();
        $hizmet_urunler = new HizmetUrun();
        $hizmet_urunler->urun_adi=$request->urun_adi;
        $hizmet_urunler->sira=$request->sira;
        $hizmet_urunler->hizmet_kategori_id=$request->hizmet_kategori_id;
        $hizmet_urunler->hizmet_etiket_id=$request->hizmet_etiket_id;
        $hizmet_urunler->urun_aciklama = $request->urun_aciklama;
        $hizmet_urunler->fiyat = $request->fiyat;
        $hizmet_urunler->durum = $request->durum;
        $hizmet_urunler->save();
        return view('admin.hizmetler.hizmet_urun',compact('hizmet_urunler','hizmet_kategoriler'));

    }
    public function hizmetUrunUpdate($id)
    {
        //Önce Kategorileri alıyoruz.
        $hizmet_kategoriler= HizmetKategori::all();

        $hizmet_urun_guncelle= HizmetUrun::find($id);
        return view('admin.hizmetler.hizmet_urun_edit',compact('hizmet_urun_guncelle','hizmet_kategoriler'));

    }
    public function hizmetUrunUpdatePost(Request $request, $id = null)
    {
        $hizmet_urun_guncelle= HizmetUrun::find($id);
        $hizmet_urun_guncelle->urun_adi=$request->urun_adi;
        $hizmet_urun_guncelle->sira=$request->sira;
        $hizmet_urun_guncelle->hizmet_kategori_id=$request->hizmet_kategori_id;
        $hizmet_urun_guncelle->hizmet_etiket_id=$request->hizmet_etiket_id;
        $hizmet_urun_guncelle->urun_aciklama = $request->urun_aciklama;
        $hizmet_urun_guncelle->fiyat = $request->fiyat;
        $hizmet_urun_guncelle->indirimli_fiyat = $request->indirimli_fiyat;
        $hizmet_urun_guncelle->indirim_orani = $request->indirim_orani;
        $hizmet_urun_guncelle->durum = $request->durum;
        $hizmet_urun_guncelle->save();
        return redirect()->route('admin.hizmetUrunUpdate',$id)->with('message','Güncelleme Başarılı');
    }

    public function hizmetUrunDestroy($id)
    {
        $hizmet_urun_sil= HizmetUrun::find($id);
        $hizmet_urun_sil->delete();
        return redirect()->route('admin.hizmetUrunShow');
    }
    public function etiketGetir(Request $request)
    {
        $etiketler = HizmetEtiket::where('hizmet_kategori_id', $request->id)->get();
        return response()->json($etiketler);
    }
    public function servisBolgeShow(){
        $bayiler=User::role('bayi')->get();
        $iller=Il::All();
        $hizmet_kategoriler= HizmetKategori::all();
        $servis_bolgeleri=ServisBolgeleri::All();
        return view('admin.hizmetler.servis_bolgeleri',compact('servis_bolgeleri','bayiler','iller','hizmet_kategoriler'));
    }
    public function servisBolgeCreate()
    {
        //Önce Bayileri alıyoruz.

        $servis_bolge = new ServisBolgeleri;
        $servis_bolge->bayi_id = request('bayi_id');
        $servis_bolge->hizmet_kategori_id = request('hizmet_kategori_id');
        $servis_bolge->hizmet_id = request('hizmet_id');
        $servis_bolge->il_id = request('il_id');
        $servis_bolge->ilce_id = request('ilce_id');
        $servis_bolge->durum = request('durum');
        $servis_bolge->save();
        return redirect()->route('admin.servisBolgeShow');
    }
    public function servisBolgeUpdate($id)
    {
        //Önce Kategorileri alıyoruz.
        $hizmet_kategoriler= HizmetKategori::all();

        $servis_bolge_guncelle= ServisBolgeleri::find($id);
        return view('admin.hizmetler.servis_bolgeleri_edit',compact('servis_bolge_guncelle','hizmet_kategoriler'));

    }
    public function servisBolgeUpdatePost()
    {
        $servis_bolge_guncelle= ServisBolgeleri::find(request('id'));
        $servis_bolge_guncelle->bayi_id = request('bayi_id');
        $servis_bolge_guncelle->hizmet_kategori_id = request('hizmet_kategori_id');
        $servis_bolge_guncelle->il_id = request('il_id');
        $servis_bolge_guncelle->ilce_id = request('ilce_id');
        $servis_bolge_guncelle->durum = request('durum');
        $servis_bolge_guncelle->save();
        return redirect()->route('admin.servisBolgeShow');

    }
    public function servisBolgeDestroy($id)
    {
        $servis_bolge_sil= ServisBolgeleri::find($id);
        $servis_bolge_sil->delete();
        return redirect()->route('admin.servisBolgeShow');
    }


}
