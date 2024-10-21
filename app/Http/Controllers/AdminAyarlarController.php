<?php

namespace App\Http\Controllers;

use App\Models\AdminSiteAyar;
use App\Models\Bank;
use App\Models\Ekibimiz;
use App\Models\Haberler;
use App\Models\Il;
use App\Models\Ilce;
use App\Models\Menu;
use App\Models\Referanslar;
use App\Models\SiteAyarlar;
use App\Models\Slider;
use App\Models\SosyalMedya;
use App\Models\Sss;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminAyarlarController extends Controller
{
    public function referansShow()
    {
        $referanslar= Referanslar::all();
        return view('admin.ayarlar.referanslar.index',compact('referanslar'));
    }
    public function referansCreate(Request $request)
    {
        $referans = new Referanslar;
        $referans->adi = $request->adi;
        $referans->aciklama = $request->aciklama;
        $referans->linki = $request->linki;
        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/referanslar"), $resim);
            $referans->resim = "uploads/referanslar/" . $resim;
        }
        $referans->save();
        return redirect()->route('admin.referansShow');
    }
    public function referansUpdate(Request $request, $id)
    {
        $referans_guncelle = Referanslar::find($id);
        $referans_guncelle->adi = $request->adi;
        $referans_guncelle->aciklama = $request->aciklama;
        $referans_guncelle->linki = $request->linki;

        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/referanslar"), $resim);
            $referans_guncelle->resim = "uploads/referanslar/" . $resim;
        }
        $referans_guncelle->save();
        return redirect()->route('admin.referansShow');
    }
    public function referansDestroy($id)
    {
        $referans_sil = Referanslar::find($id);
        $referans_sil->delete();
        return redirect()->route('admin.referansShow');
    }

    public function sliderShow()
    {
        $sliderlar=Slider::all();
        return view('admin.ayarlar.slider.index',compact('sliderlar'));
    }
    public function sliderCreate(Request $request)
    {
        $slider = new Slider;
        $slider->adi = $request->adi;
        $slider->aciklama = $request->aciklama;
        $slider->linki = $request->linki;
        $slider->sira = $request->sira;
        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/slider"), $resim);
            $slider->resim = "uploads/slider/" . $resim;
        }
        $slider->save();
        return redirect()->route('admin.sliderShow');
    }
    public function sliderUpdate(Request $request, $id)
    {
        $slider_guncelle = Slider::find($id);
        $slider_guncelle->adi = $request->adi;
        $slider_guncelle->aciklama = $request->aciklama;
        $slider_guncelle->linki = $request->linki;
        $slider_guncelle->sira = $request->sira;
        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/slider"), $resim);
            $slider_guncelle->resim = "uploads/slider/" . $resim;
        }
        $slider_guncelle->save();
        return redirect()->route('admin.sliderShow');
    }
    public function sliderDestroy($id)
    {
        $slider_sil = Slider::find($id);
        $slider_sil->delete();
        return redirect()->route('admin.sliderShow');
    }
    public function sssShow()
    {
        $sssler= Sss::all();
        return view('admin.ayarlar.sss.index',compact('sssler'));
    }
    public function sssCreate(Request $request)
    {
        $sss = new Sss;
        $sss->soru = $request->soru;
        $sss->sira = $request->sira;
        $sss->aciklama = $request->aciklama;
        $sss->save();
        return redirect()->route('admin.sssShow');
    }
    public function sssUpdate($id)
    {
        $sss= Sss::find($id);
        return view('admin.ayarlar.sss.sss_edit',compact('sss'));

    }
    public function sssUpdatePost(Request $request, $id)
    {
        $sss = Sss::find($id);
        $sss->soru = $request->soru;
        $sss->sira = $request->sira;
        $sss->aciklama = $request->aciklama;
        $sss->save();
        return redirect()->route('admin.sssShow',$id)->with('message','Güncelleme Başarılı');
    }
    public function sssDestroy($id)
    {
        $sss = Sss::find($id);
        $sss->delete();
        return redirect()->route('admin.sssShow');
    }

    public function menuShow()
    {
        $menuler=Menu::all();
        return view('admin.ayarlar.menu.index',compact('menuler'));
    }
    public function menuCreate(Request $request)
    {
        $menu = new Menu;
        $menu->adi = $request->adi;
        $menu->sira = $request->sira;
        $menu->durum = $request->durum;
        $menu->save();
        return redirect()->route('admin.menuShow');
    }
    public function menuUpdate(Request $request, $id)
    {
        $menu_guncelle = Menu::find($id);
        $menu_guncelle->adi = $request->adi;
        $menu_guncelle->sira = $request->sira;
        $menu_guncelle->durum = $request->durum;
        $menu_guncelle->save();
        return redirect()->route('admin.menuShow');
    }
    public function menuDestroy($id)
    {
        $menu_sil = Menu::find($id);
        $menu_sil->delete();
        return redirect()->route('admin.menuShow');
    }

    public function sosyalMedyaShow()
    {
        $sosyal_medya=SosyalMedya::first();
        return view('admin.ayarlar.sosyalmedya.index',compact('sosyal_medya'));
    }
    public function sosyalMedyaCreate(Request $request)
    {
        $sosyal_medya = new SosyalMedya;
        $sosyal_medya->facebook = $request->facebook;
        $sosyal_medya->twitter = $request->twitter;
        $sosyal_medya->instagram = $request->instagram;
        $sosyal_medya->linkedin = $request->linkedin;
        $sosyal_medya->youtube = $request->youtube;
        $sosyal_medya->pinterest =$request->pinterest;

        $sosyal_medya->save();
        return redirect()->route('admin.sosyalMedyaShow');
    }
    public function sosyalMedyaUpdate(Request $request, $id)
    {
        $sosyal_medya_guncelle = SosyalMedya::find($id);
        $sosyal_medya_guncelle->facebook = $request->facebook;
        $sosyal_medya_guncelle->twitter = $request->twitter;
        $sosyal_medya_guncelle->instagram = $request->instagram;
        $sosyal_medya_guncelle->linkedin = $request->linkedin;
        $sosyal_medya_guncelle->youtube = $request->youtube;
        $sosyal_medya_guncelle->pinterest = $request->pinterest;
        $sosyal_medya_guncelle->save();
        return redirect()->route('admin.sosyalMedyaShow');
    }

    public function haberlerShow()
    {
        $haberler=Haberler::all();
        return view('admin.ayarlar.haberler.index',compact('haberler'));
    }
    public function haberlerCreate(Request $request)
    {
        $haberler = new Haberler;
        $haberler->adi = $request->adi;
        $haberler->sira = $request->sira;
        $haberler->on_aciklama = $request->on_aciklama;
        $haberler->aciklama = $request->aciklama;
        $haberler->seo = $request->seo;
        $haberler->durum = $request->durum;
        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/haberler"), $resim);
            $haberler->resim = "uploads/haberler/" . $resim;
        }
        $haberler->save();
        return redirect()->route('admin.haberlerShow');
    }
    public function haberlerUpdate(Request $request, $id)
    {
        $haberler_guncelle = Haberler::find($id);
        $haberler_guncelle->adi = $request->adi;
        $haberler_guncelle->sira = $request->sira;
        $haberler_guncelle->on_aciklama = $request->on_aciklama;
        $haberler_guncelle->aciklama = $request->aciklama;
        $haberler_guncelle->seo = $request->seo;
        $haberler_guncelle->durum = $request->durum;
        // Resim işlemi
        if ($request->hasFile('resim')) {
            $extension = $request->resim->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->resim->move(public_path("uploads/haberler"), $resim);
            $haberler_guncelle->resim = "uploads/haberler/" . $resim;
        }
        $haberler_guncelle->save();
        return redirect()->route('admin.haberlerShow');
    }
    public function haberlerDestroy($id)
    {
        $haberler_sil = Haberler::find($id);
        $haberler_sil->delete();
        return redirect()->route('admin.haberlerShow');
    }

    public function bankaHesapShow() {
        $bankalar = Bank::get();
        return view('admin.ayarlar.banka.index',compact('bankalar'));
    }
    public function bankaHesapCreate(Request $request)
    {
        $banka_hesap = new Bank;
        $banka_hesap->banka_adi = $request->banka_adi;
        $banka_hesap->banka_iban =$request->banka_iban;
        $banka_hesap->ad_soyad = $request->ad_soyad;
        $banka_hesap->save();
        return redirect()->route('admin.bankaHesapShow');
    }
    public function bankaHesapUpdate(Request $request, $id)
    {
        $banka_hesap_guncelle = Bank::find($id);
        $banka_hesap_guncelle->banka_adi = $request->banka_adi;
        $banka_hesap_guncelle->banka_iban = $request->banka_iban;
        $banka_hesap_guncelle->ad_soyad = $request->ad_soyad;
        $banka_hesap_guncelle->save();
        return redirect()->route('admin.bankaHesapShow');
    }
    public function bankaHesapDestroy($id)
    {
        $banka_hesap_sil = Bank::find($id);
        $banka_hesap_sil->delete();
        return redirect()->route('admin.bankaHesapShow');
    }

    public function ilShow()
    {
        $iller = Il::All();
        return view('admin.ayarlar.servisbolgesiaktiflestir.il.index',compact('iller'));
    }

    public function ilUpdate($id)
    {
        $il_guncelle= Il::find($id);
        return view('admin.ayarlar.servisbolgesiaktiflestir.il.il_edit',compact('il_guncelle'));
    }

    public function ilUpdatePost(Request $request, $id)
    {
        $il_guncelle = Il::find($id);
        $il_guncelle->site_title = $request->site_title;
        $il_guncelle->site_description = $request->site_description;
        $il_guncelle->site_keyword = $request->site_keyword;
        $il_guncelle->durum = $request->durum;
        $il_guncelle->save();
        return redirect()->route('admin.ilShow');
    }
    public function ilceShow()
    {
        $ilceler = Ilce::All();
        return view('admin.ayarlar.servisbolgesiaktiflestir.ilce.index',compact('ilceler'));
    }

    public function ilceUpdate($id)
    {
        $ilce_guncelle= Ilce::find($id);
        return view('admin.ayarlar.servisbolgesiaktiflestir.ilce.ilce_edit',compact('ilce_guncelle'));
    }

    public function ilceUpdatePost(Request $request, $id)
    {
        $ilce_guncelle = Ilce::find($id);
        $ilce_guncelle->site_title = $request->site_title;
        $ilce_guncelle->site_description = $request->site_description;
        $ilce_guncelle->site_keyword = $request->site_keyword;
        $ilce_guncelle->durum = $request->durum;
        $ilce_guncelle->save();
        return redirect()->route('admin.ilShow');
    }
}
