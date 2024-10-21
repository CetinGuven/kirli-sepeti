<?php

namespace App\Http\Controllers;

use App\Models\Uyeler;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function uyeShow(Request $request)
    {
        $uyeler=Uyeler::all();
        return view('admin.uyeler.index',compact('uyeler'));
    }

    public function uyeCreate(Request $request)
    {
        $uye_ekle= new Uyeler;
        $uye_ekle->name_surname=$request->name_surname;
        $uye_ekle->email=$request->email;
        $uye_ekle->phone=$request->phone;
        $uye_ekle->password = Hash::make($request->password);
        $uye_ekle->save();
        return redirect()->route('admin.uyeShow');
    }

    public function uyeUpdate($id)
    {
        $uye_guncelle= Uyeler::find($id);
        return view('admin.uyeler.uye_edit',compact('uye_guncelle'));

    }
    public function uyeUpdatePost(Request $request, $id)
    {
    $uye_guncelle= Uyeler::find($id);
    $uye_guncelle->name_surname=$request->name_surname;
    $uye_guncelle->email=$request->email;
    $uye_guncelle->phone=$request->phone;
    $uye_guncelle->password=$request->password;
    $uye_guncelle->save();
    return redirect()->route('admin.uyeUpdate',$id)->with('message','Güncelleme Başarılı');
    }
    public function uyeDestroy(Request $request ,$id)
    {
        $uye_sil= Uyeler::find($id);
        $uye_sil->delete();
        return redirect()->route('admin.uyeShow');
    }

    public function uyeAyrinti($id)
    {
        $uye_ayrinti= Uyeler::find($id);
        return view('admin.uyeler.uye_ayrinti',compact('uye_ayrinti'));
    }
    public function bayiShow(Request $request)
    {
       $bayiler=User::role('bayi')->get();
         return view('admin.bayiler.index',compact('bayiler'));
    }
    public function bayiCreate(Request $request)
    {
        $bayi_ekle= new User;
        $bayi_ekle->bayi_adi=$request->bayi_adi;
        $bayi_ekle->bayi_id=$request->bayi_id;
        $bayi_ekle->name=$request->name;
        $bayi_ekle->email=$request->email;
        $bayi_ekle->phone_number=$request->phone_number;
        $bayi_ekle->password=$request->password;
        $bayi_ekle->save();
        // Yeni kullanıcı oluşturulduktan sonra rol ataması yapılıyor
        $bayi_ekle->assignRole("bayi");
        return redirect()->route('admin.bayiShow');
    }
    public function bayiUpdate($id)
    {
        $bayi_guncelle= User::find($id);
        return view('admin.bayiler.bayi_edit',compact('bayi_guncelle'));

    }
    public function bayiUpdatePost(Request $request, $id = null)
    {
        $bayi_guncelle= User::find($id);
        $bayi_guncelle->bayi_adi=$request->bayi_adi;
        $bayi_guncelle->name=$request->name;
        $bayi_guncelle->email=$request->email;
        $bayi_guncelle->phone_number=$request->phone_number;
        //$bayi_guncelle->password=$request->password;
        $bayi_guncelle->save();
        return redirect()->route('admin.bayiUpdate',$id)->with('message','Güncelleme Başarılı');
    }
    public function bayiDestroy($id)
    {
        $bayi_sil= User::find($id);
        $bayi_sil->delete();
        return redirect()->route('admin.bayiShow');
    }
    public function bayiAyrinti($id)
    {
        $bayi_ayrinti= User::find($id);
        return view('admin.bayiler.bayi_ayrinti',compact('bayi_ayrinti'));
    }

}
