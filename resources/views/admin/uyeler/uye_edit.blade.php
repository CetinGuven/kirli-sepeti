@extends('layouts.adminLayout.admin_design')
@section('title', 'Üye Güncelleme')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Üye Güncelleme</h1>
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
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="d-flex flex-column flex-lg-row">
                    <form action="{{route('admin.uyeUpdatePost',$uye_guncelle->id)}}" method="post" id="kt_invoice_form" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body p-12">
                                <div class="mb-0">
                                    <div class="row gx-10 mb-5">
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Adı Soyadı</label>
                                            <div class="mb-5">
                                                <input type="text" name="name_surname" value="{{$uye_guncelle->name_surname}}" class="form-control form-control-solid">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Email</label>
                                            <div class="mb-5">
                                                <input type="text" name="email" value="{{$uye_guncelle->email}}" class="form-control form-control-solid">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Telefon</label>
                                            <div class="mb-5">
                                                <input type="text" name="phone" value="{{$uye_guncelle->phone}}" class="form-control form-control-solid">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
