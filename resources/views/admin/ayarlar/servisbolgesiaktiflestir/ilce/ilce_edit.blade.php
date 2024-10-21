@extends('layouts.adminLayout.admin_design')
@section('title', 'İlce Güncelleme')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" data-select2-id="select2-data-kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">İlce Güncelleme</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1"></ul>
                </div>
            </div>
        </div>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="post d-flex flex-column-fluid" id="kt_post" data-select2-id="select2-data-kt_post">
            <div id="kt_content_container" class="container-xxl" data-select2-id="select2-data-kt_content_container">
                <div class="d-flex flex-column flex-lg-row" data-select2-id="select2-data-123-orsr">
                    <form action="{{route('admin.ilceUpdatePost',$ilce_guncelle->id)}}" method="post" id="kt_invoice_form" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body p-12">
                                <div class="mb-0">
                                    <div class="row gx-10 mb-5">
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">İl Adı</label>
                                            <div class="mb-5">
                                                <input type="text" value="{{$ilce_guncelle->il->il_adi}}" class="form-control form-control-solid" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">İlce Adı</label>
                                            <div class="mb-5">
                                                <input type="text" value="{{$ilce_guncelle->ilce_adi}}" class="form-control form-control-solid" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Seo Title</label>
                                            <div class="mb-5">
                                                <input type="text" name="site_title" value="{{$ilce_guncelle->site_title}}" class="form-control form-control-solid">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Seo Description</label>
                                            <div class="mb-5">
                                                <input type="text" name="site_description" value="{{$ilce_guncelle->site_description}}" class="form-control form-control-solid">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Seo Keyword</label>
                                            <div class="mb-5">
                                                <input type="text" name="site_keyword" value="{{$ilce_guncelle->site_keyword}}" class="form-control form-control-solid">
                                            </div>
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Durum</label>
                                            <select name="durum" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                <option value="1" {{ $ilce_guncelle->durum == 1 ? 'selected' : '' }}>Aktif</option>
                                                <option value="0" {{ $ilce_guncelle->durum == 0 ? 'selected' : '' }}>Pasif</option>
                                            </select>
                                        </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
