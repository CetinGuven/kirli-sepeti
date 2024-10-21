@extends('layouts.adminLayout.admin_design')
@section('title','Servis Bölgeleri Listesi')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Servis Bölgeleri Listesi</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
              <span class="svg-icon svg-icon-1 position-absolute ms-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                  <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                </svg>
              </span>
                                <input type="text" data-kt-user-table-filter="search" id="my_search" class="form-control form-control-solid w-250px ps-14" placeholder=" Ara" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_bank">
                <span class="svg-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                  </svg>
                </span>Servis Bölgesi Ekle </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_bank">
                            <thead>
                            <tr class="text-center text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Bayi Adı</th>
                                <th class="min-w-125px">Hizmet Kategorisi</th>
                                <th class="min-w-100px">İl</th>
                                <th class="min-w-100px">İlçe</th>
                                <th class="min-w-100px">Durum</th>
                                <th class="text-end min-w-100px">İşlem</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                            @foreach($servis_bolgeleri as $servis_bolge) <tr class="text-center">
                                <td> {{$servis_bolge->bayi_id}} </td>
                                <td> {{$servis_bolge->hizmetKategori->kategori_adi}} </td>
                                <td>{{$servis_bolge->il->il_adi}}</td>
                                <td>{{$servis_bolge->ilce->ilce_adi}}</td>
                                <td>@if($servis_bolge->durum == 1) Aktif @else Pasif @endif </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.servisBolgeUpdate',['id'=>$servis_bolge->id])}}" class="menu-link px-3">
                                        <i class="fa fa-edit" style="color: #00b300; font-size: 15px;"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="modal fade" id="kt_modal_add_bank" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <div class="modal-content">
                                    <div class="modal-header" id="kt_modal_add_bank_header">
                                        <h2 class="fw-bolder">Yeni Servis Bölgesi Ekle</h2>
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                      </svg>
                    </span>
                                        </div>
                                    </div>
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <form id="kt_modal_add_bank_form" class="form" method="POST" action="{{ route('admin.servisBolgeCreate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_bank_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_bank_header" data-kt-scroll-wrappers="#kt_modal_add_bank_scroll" data-kt-scroll-offset="300px">
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Bayi</label>
                                                    <select name="id" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                        @foreach($bayiler as $bayi)
                                                            <option value="{{ $bayi->id }}" {{ $bayi->id == $bayi->bayi_adi ? 'selected' : '' }}>
                                                                {{ $bayi->bayi_adi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">İl</label>
                                                    <select id="il" name="il_id" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                       <option>İl Seçiniz</option>
                                                        @foreach($iller as $il)
                                                            <option value="{{ $il->id }}" {{ $il->id == $il->il_adi ? 'selected' : '' }}>
                                                                {{ $il->il_adi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">İlçe</label>
                                                    <select id="ilce" name="ilce" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                                        <option value="">İlçe Seçin</option>
                                                    </select>
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Hizmet Kategorisi</label>
                                                    <select name="id" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                        <option>Hizmet Kategorisi Seçiniz</option>
                                                        @foreach($hizmet_kategoriler as $hizmet_kategori)
                                                            <option value="{{ $hizmet_kategori->id }}" {{ $hizmet_kategori->id == $hizmet_kategori->kategori_adi ? 'selected' : '' }}>
                                                                {{ $hizmet_kategori->kategori_adi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Durum</label>
                                                <select name="durum" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Pasif</option>
                                                </select>
                                            </div>
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">İptal</button>
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Kaydet</span>
                                                </button>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#il').change(function(){
                var il_id = $(this).val();
                $.ajax({
                    url: "admin/get-ilceler/" + il_id,
                    type: 'post',
                    data: {il_id: il_id},
                    dataType: 'json',
                    success:function(response){
                        var len = response.length;
                        $("#ilce").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['ad'];
                            $("#ilce").append("<option value='"+id+"'>"+name+"</option>");
                        }
                    }
                });
            });
        });
    </script>

@endsection

