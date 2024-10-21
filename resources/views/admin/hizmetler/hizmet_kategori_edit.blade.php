@extends('layouts.adminLayout.admin_design') @section('title','Hizmet Kategori Güncelle') @section('content') <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Hizmet Kategori Güncelle</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
            </div>
        </div>
    </div> @if(Session::has('message')) <div class="alert alert-success">
        {{ Session::get('message') }}
    </div> @endif <div class="post d-flex flex-column-fluid" id="kt_post" data-select2-id="select2-data-kt_post">
        <div id="kt_content_container" class="container-xxl" data-select2-id="select2-data-kt_content_container">
            <div class="d-flex flex-column flex-lg-row" data-select2-id="select2-data-123-orsr">
                <form class="form" method="POST" action="{{ route('admin.hizmetKategoriUpdatePost',['id'=>$hizmet_kategori_guncelle->id]) }}" enctype="multipart/form-data"> @csrf <div class="card">
                        <div class="card-body p-12">
                            <div class="mb-0">
                                <div class="row gx-10 mb-5">
                                    <div class="col-lg-12">
                                        <label class="required fw-bold fs-6 mb-2">Kategori Adı</label>
                                        <input type="text" name="kategori_adi" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Kategori Adı" required value="{{$hizmet_kategori_guncelle->kategori_adi}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Açıklama</label>
                                        <input type="text" name="aciklama" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Açıklama yazınız" required value="{{$hizmet_kategori_guncelle->aciklama}}" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Resim</label>
                                        <input type="file" name="resim" class="form-control form-control-solid mb-3 mb-lg-0" />
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fw-bold fs-6 mb-2">Durum</label>
                                        <select name="durum" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                            <option value="1" {{ $hizmet_kategori_guncelle->durum == 1 ? 'selected' : '' }}>Aktif</option>
                                            <option value="0" {{ $hizmet_kategori_guncelle->durum == 0 ? 'selected' : '' }}>Pasif</option>
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
</div>
@endsection
