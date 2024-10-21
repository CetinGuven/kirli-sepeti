@extends('layouts.adminLayout.admin_design')
@section('title','Hizmet Ürün Güncelle')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Hizmet Ürün Güncelle</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
            </div>
        </div>
    </div>
        @if(Session::has('message')) <div class="alert alert-success">
        {{ Session::get('message') }}
    </div> @endif <div class="post d-flex flex-column-fluid" id="kt_post" data-select2-id="select2-data-kt_post">
        <div id="kt_content_container" class="container-xxl" data-select2-id="select2-data-kt_content_container">
            <div class="d-flex flex-column flex-lg-row" data-select2-id="select2-data-123-orsr">
                <form class="form" method="POST" action="{{ route('admin.hizmetUrunUpdatePost',['id'=>$hizmet_urun_guncelle->id]) }}" enctype="multipart/form-data"> @csrf <div class="card">
                        <div class="card-body p-12">
                            <div class="mb-0">
                                <div class="row gx-10 mb-5">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Hizmet Kategorisi</label>
                                        <select name="hizmet_kategori_id"  class="form-select form-select-solid mb-3 mb-lg-0" required>
                                            @foreach($hizmet_kategoriler as $hizmet_kategori)
                                                <option value="{{ $hizmet_kategori->id }}" {{ $hizmet_kategori->id == $hizmet_kategori->kategori_id ? 'selected' : '' }}>
                                                    {{ $hizmet_kategori->kategori_adi }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Hizmet Etiket Adı</label>
                                        <input type="text" name="hizmet_etiket_id" class="form-control form-control-solid mb-3 mb-lg-0"  value="{{$hizmet_urun_guncelle->hizmet_etiket_id}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Ürün Adı</label>
                                        <input type="text" name="urun_adi" class="form-control form-control-solid mb-3 mb-lg-0" required value="{{$hizmet_urun_guncelle->urun_adi}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Açıklama</label>
                                        <input type="text" name="urun_aciklama" class="form-control form-control-solid mb-3 mb-lg-0"  required value="{{$hizmet_urun_guncelle->urun_aciklama}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Sıra</label>
                                        <input type="text" name="sira" class="form-control form-control-solid mb-3 mb-lg-0"  required value="{{$hizmet_urun_guncelle->sira}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Fiyat</label>
                                        <input type="text" name="fiyat" class="form-control form-control-solid mb-3 mb-lg-0"  required value="{{$hizmet_urun_guncelle->fiyat}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">İndirimli Fiyat</label>
                                        <input type="text" name="indirimli_fiyat" class="form-control form-control-solid mb-3 mb-lg-0"   value="{{$hizmet_urun_guncelle->indirimli_fiyat}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">İndirim Oranı</label>
                                        <input type="text" name="indirim_orani" class="form-control form-control-solid mb-3 mb-lg-0" required value="{{$hizmet_urun_guncelle->indirim_orani}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Durum</label>
                                        <select name="durum" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                            <option value="1" {{ $hizmet_urun_guncelle->durum == 1 ? 'selected' : '' }}>Aktif</option>
                                            <option value="0" {{ $hizmet_urun_guncelle->durum == 0 ? 'selected' : '' }}>Pasif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6 offset-4">
                                    <button type="submit" href="#" class="btn btn-primary w-50" id="kt_invoice_submit_button">Güncelle</button>
                                </div>
                            </div>
                        </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div> @endsection
