@extends('layouts.adminLayout.admin_design')
@section('title', 'Sosyal Medya Ayarları')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" data-select2-id="select2-data-kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Sosyal Medya Ayarları</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1"></ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post" data-select2-id="select2-data-kt_post">
            <div id="kt_content_container" class="container-xxl" data-select2-id="select2-data-kt_content_container">
                <div class="d-flex flex-column flex-lg-row" data-select2-id="select2-data-123-orsr">
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10"> @if(empty($sosyal_medya)) <form action="{{route('admin.sosyalMedyaCreate')}}" method="post" id="kt_invoice_form" enctype="multipart/form-data"> @csrf <div class="card">
                                <div class="card-header">
                                    <div class="card-title"></div>
                                </div>
                                <div class="card-body p-12">
                                    <div class="mb-0">
                                        <div class="row gx-10 mb-5">
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">İnstagram</label>
                                                <div class="mb-5">
                                                    <input type="text" name="instagram" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Facebook</label>
                                                <div class="mb-5">
                                                    <input type="text" name="facebook" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Youtube</label>
                                                <div class="mb-5">
                                                    <input type="text" name="youtube" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Linkedin</label>
                                                <div class="mb-5">
                                                    <input type="text" name="linkedin" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Pinterest</label>
                                                <div class="mb-5">
                                                    <input type="text" name="pinterest" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Twitter</label>
                                                <div class="mb-5">
                                                    <input type="text" name="twitter" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-6 offset-4">
                                            <button type="submit" href="#" class="btn btn-primary w-50" id="kt_invoice_submit_button">Kaydet</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> @else <form action="{{route('admin.sosyalMedyaUpdate',['id'=>$sosyal_medya->id])}}" method="post" id="kt_invoice_form" enctype="multipart/form-data"> @csrf <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body p-12">
                                    <div class="mb-0">
                                        <div class="row gx-10 mb-5">
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">İnstagram</label>
                                                <div class="mb-5">
                                                    <input type="text" name="instagram" value="{{$sosyal_medya->instagram}}" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Facebook</label>
                                                <div class="mb-5">
                                                    <input type="text" name="facebook" value="{{$sosyal_medya->facebook}}" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Youtube</label>
                                                <div class="mb-5">
                                                    <input type="text" name="youtube" value="{{$sosyal_medya->youtube}}" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Linkedin</label>
                                                <div class="mb-5">
                                                    <input type="text" name="linkedin" value="{{$sosyal_medya->linkedin}}" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Pinterest</label>
                                                <div class="mb-5">
                                                    <input type="text" name="pinterest" value="{{$sosyal_medya->pinterest}}" class="form-control form-control-solid">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Twitter</label>
                                                <div class="mb-5">
                                                    <input type="text" name="twitter" value="{{$sosyal_medya->twitter}}" class="form-control form-control-solid">
                                                </div>
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
                        </form> @endif </div>
                </div>
            </div>
        </div>
    </div> @endsection
