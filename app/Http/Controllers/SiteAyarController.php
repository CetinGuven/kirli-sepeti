<?php

namespace App\Http\Controllers;

use App\Models\AdminSiteAyar;
use App\Models\BayiSiteAyar;
use App\Models\SiteAyarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteAyarController extends Controller
{
    public function siteAyarlarShow()
    {
        $site_ayarlar=SiteAyarlar::first();
        return view('admin.ayarlar.siteayarlar.websiteayar.index',compact('site_ayarlar'));
    }

    public function siteAyarlarCreate(Request $request)
    {
        $site_ayarlar = new SiteAyarlar;
        $site_ayarlar->site_title = $request->site_title;
        $site_ayarlar->site_description = $request->site_description;
        $site_ayarlar->site_keyword = $request->site_keyword;
        $site_ayarlar->site_meta = $request->site_meta;
        $site_ayarlar->site_author	 = $request->site_author;
        $site_ayarlar->footer_copyright	= $request->footer_copyright;
        $site_ayarlar->header= $request->header;
        $site_ayarlar->footer= $request->footer;
        // Resim işlemi
        if ($request->hasFile('logo')) {
            $extension = $request->logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->logo->move(public_path("uploads/siteAyarlar/web"), $resim);
            $site_ayarlar->logo = "uploads/siteAyarlar/web" . $resim;
        }
        // Resim işlemi
        if ($request->hasFile('footer_logo')) {
            $extension = $request->footer_logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->footer_logo->move(public_path("uploads/siteAyarlar/web"), $resim);
            $site_ayarlar->footer_logo = "uploads/siteAyarlar/web" . $resim;
        }

        $site_ayarlar->save();
        return redirect()->route('admin.siteAyarlarShow');
    }
    public function siteAyarlarUpdate(Request $request, $id)
    {
        $site_ayarlar_guncelle = SiteAyarlar::find($id);
        $site_ayarlar_guncelle->site_title = $request->site_title;
        $site_ayarlar_guncelle->site_description = $request->site_description;
        $site_ayarlar_guncelle->site_keyword = $request->site_keyword;
        $site_ayarlar_guncelle->site_meta = $request->site_meta;
        $site_ayarlar_guncelle->site_author	=$request->site_author;
        $site_ayarlar_guncelle->footer_copyright= $request->footer_copyright;
        $site_ayarlar_guncelle->header= $request->header;
        $site_ayarlar_guncelle->footer= $request->footer;
        // Resim işlemi
        if ($request->hasFile('logo')) {
            $extension = $request->logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->logo->move(public_path("uploads/siteAyarlar"), $resim);
            $site_ayarlar_guncelle->logo = "uploads/siteAyarlar/" . $resim;
        }
        // Footer Logo işlemi
        if ($request->hasFile('footer_logo')) {
            $extension = $request->footer_logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->footer_logo->move(public_path("uploads/siteAyarlar/web"), $resim);
            $site_ayarlar_guncelle->footer_logo = "uploads/siteAyarlar/web" . $resim;
        }
        $site_ayarlar_guncelle->save();
        return redirect()->route('admin.siteAyarlarShow');
    }
    public function adminSiteAyarShow()
    {
        $site_ayarlar=AdminSiteAyar::first();
        return view('admin.ayarlar.siteayarlar.adminsiteayar.index',compact('site_ayarlar'));

    }
    public function adminSiteAyarCreate(Request $request)
    {
        $site_ayarlar = new AdminSiteAyar;
        $site_ayarlar->site_title = $request->site_title;
        $site_ayarlar->site_description = $request->site_description;
        $site_ayarlar->site_keyword = $request->site_keyword;
        $site_ayarlar->site_meta = $request->site_meta;
        $site_ayarlar->site_author	 = $request->site_author;
        $site_ayarlar->footer_copyright	= $request->footer_copyright;
        // Resim işlemi
        if ($request->hasFile('logo')) {
            $extension = $request->logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->logo->move(public_path("uploads/siteAyarlar/admin"), $resim);
            $site_ayarlar->logo = "uploads/siteAyarlar/admin" . $resim;
        }

        $site_ayarlar->save();
        return redirect()->route('admin.adminSiteAyarShow');
    }
    public function adminSiteAyarUpdate(Request $request, $id)
    {
        $site_ayarlar_guncelle = AdminSiteAyar::find($id);
        $site_ayarlar_guncelle->site_title = $request->site_title;
        $site_ayarlar_guncelle->site_description = $request->site_description;
        $site_ayarlar_guncelle->site_keyword = $request->site_keyword;
        $site_ayarlar_guncelle->site_meta = $request->site_meta;
        $site_ayarlar_guncelle->site_author	=$request->site_author;
        $site_ayarlar_guncelle->footer_copyright= $request->footer_copyright;
        // Resim işlemi
        if ($request->hasFile('logo')) {
            $extension = $request->logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->logo->move(public_path("uploads/adminSiteAyar"), $resim);
            $site_ayarlar_guncelle->logo = "uploads/adminSiteAyar/" . $resim;
        }
        $site_ayarlar_guncelle->save();
        return redirect()->route('admin.adminSiteAyarShow');
    }

    public function bayiSiteAyarShow()
    {
        $site_ayarlar=BayiSiteAyar::first();
        return view('admin.ayarlar.siteayarlar.bayisiteayar.index',compact('site_ayarlar'));

    }
    public function bayiSiteAyarCreate(Request $request)
    {
        $site_ayarlar = new BayiSiteAyar;
        $site_ayarlar->site_title = $request->site_title;
        $site_ayarlar->site_description = $request->site_description;
        $site_ayarlar->site_keyword = $request->site_keyword;
        $site_ayarlar->site_meta = $request->site_meta;
        $site_ayarlar->site_author	 = $request->site_author;
        $site_ayarlar->footer_copyright	= $request->footer_copyright;
        // Resim işlemi
        if ($request->hasFile('logo')) {
            $extension = $request->logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->logo->move(public_path("uploads/adminSiteAyar"), $resim);
            $site_ayarlar->logo = "uploads/adminSiteAyar/" . $resim;
        }

        $site_ayarlar->save();
        return redirect()->route('admin.adminSiteAyarShow');
    }
    public function bayiSiteAyarUpdate(Request $request, $id)
    {
        $site_ayarlar_guncelle = BayiSiteAyar::find($id);
        $site_ayarlar_guncelle->site_title = $request->site_title;
        $site_ayarlar_guncelle->site_description = $request->site_description;
        $site_ayarlar_guncelle->site_keyword = $request->site_keyword;
        $site_ayarlar_guncelle->site_meta = $request->site_meta;
        $site_ayarlar_guncelle->site_author	=$request->site_author;
        $site_ayarlar_guncelle->footer_copyright= $request->footer_copyright;
        // Resim işlemi
        if ($request->hasFile('logo')) {
            $extension = $request->logo->getClientOriginalExtension();
            $resim = uniqid() . "_" . Str::random(10) . "." . $extension;
            $request->logo->move(public_path("uploads/bayiSiteAyar"), $resim);
            $site_ayarlar_guncelle->logo = "uploads/bayiSiteAyar/" . $resim;
        }

        $site_ayarlar_guncelle->save();
        return redirect()->route('admin.adminSiteAyarShow');
    }

}
