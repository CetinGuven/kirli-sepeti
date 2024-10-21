@extends('layouts.adminLayout.admin_design')
 @section('title','user Listesi') 
 @section('content')
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Üye Ayrıntıları</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div id="kt_content_container" class="container-xxl">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$uye_ayrinti->name_surname}}</a>
                                            <a href="#">
                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                            <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                          </svg>
                        </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> @include('admin.uyeler.tab_menu')
                    </div>
                </div>
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Profil Detayları</h3>
                        </div>
{{--                        <button class="btn btn-primary" onclick="openModal()">Profil Güncelle</button>--}}
                    </div>
                    <div class="card-body p-9">
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Adı Soyadı</label>
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{$uye_ayrinti->name_surname}}</span>
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Telefon</label>
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{$uye_ayrinti->phone}}</span>
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Email</label>
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold text-gray-800 fs-6">{{$uye_ayrinti->email}}</span>
                            </div>
                        </div>
{{--                        <div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-dialog-centered mw-650px">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header" id="kt_modal_add_user_header">--}}
{{--                                        <h2 class="fw-bolder">Profil Güncelle</h2>--}}
{{--                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">--}}
{{--                      <span class="svg-icon svg-icon-1">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--                          <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />--}}
{{--                          <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />--}}
{{--                        </svg>--}}
{{--                      </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">--}}
{{--                                        <form id="kt_modal_add_user_form" class="form" method="POST" action="{{route('admin.uyeUpdatePost',['id'=>$uye_ayrinti->id])}}" enctype="multipart/form-data"> @csrf <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">--}}
{{--                                                <div class="fv-row mb-7">--}}
{{--                                                    <label class="required fw-bold fs-6 mb-2">Adı Soyadı</label>--}}
{{--                                                    <input type="text" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0" value="{{$uye_ayrinti->name_surname}}" required />--}}
{{--                                                </div>--}}
{{--                                                <div class="fv-row mb-7">--}}
{{--                                                    <label class="required fw-bold fs-6 mb-2">Telefon</label>--}}
{{--                                                    <input type="text" name="tel" class="form-control form-control-solid mb-3 mb-lg-0" value="{{$uye_ayrinti->phone}}" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />--}}
{{--                                                </div>--}}
{{--                                                <div class="fv-row mb-7">--}}
{{--                                                    <label class="required fw-bold fs-6 mb-2">Email</label>--}}
{{--                                                    <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" value="{{$uye_ayrinti->email}}" required />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="text-center pt-15">--}}
{{--                                                <button id="myid" type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">İptal</button>--}}
{{--                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">--}}
{{--                                                    <span class="indicator-label">Güncelle</span>--}}
{{--                                                    <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>--}}
{{--                          </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection @section('js') <script>
    function openModal() {
        $('#kt_modal_edit_user').modal('toggle');
    }
</script> @endsection
