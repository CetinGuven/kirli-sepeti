@extends('layouts.adminLayout.admin_design')

@section('title', 'Kullanıcı Profili')

@section('css')

@endsection

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session()->get('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Kullanıcı Bilgileri</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form action="{{route('admin.profileUpdate')}}" method="post" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="first_name" class="form-control form-control-lg form-control-solid" placeholder="Ad" value="{{auth()->user()->first_name}}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    </div>

                                    <!--end::Col-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Soyad</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{auth()->user()->last_name}}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <!--end::Input group-->

                            <div class="row mb-6">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">E-Posta</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="e-posta" value="{{auth()->user()->email}}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    </div>

                                    <!--end::Col-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tel</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="tel" class="form-control  form-control-lg form-control-solid" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Telefon" value="{{auth()->user()->tel}}">
                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <!--end::Input group-->

                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Güncelle</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->
            <!--begin::Sign-in Method-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Şifre İşlemleri</h3>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_signin_method" class="collapse show">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <form action="{{route('admin.password.update')}}" method="post" id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                            @csrf
                            <div class="row mb-1">
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="old_password" class="form-label fs-6 fw-bolder mb-3">Mevcut Şifre</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="old_password" id="old_password">
                                        @if($errors->has('old_password'))
                                            <div class="fv-plugins-message-container invalid-feedback">{{$errors->first('old_password')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="new_password" class="form-label fs-6 fw-bolder mb-3">Yeni Şifre</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="new_password" id="new_password">
                                        @if($errors->has('new_password'))
                                            <div class="fv-plugins-message-container invalid-feedback">{{$errors->first('new_password')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">Şifreyi Güncelle</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Sign-in Method-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('js')

@endsection
