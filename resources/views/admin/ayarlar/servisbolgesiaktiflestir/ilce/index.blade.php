@extends('layouts.adminLayout.admin_design')
@section('title','İlce Listesi')
@section('content') <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">İlce Listesi</h1>
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
                            <input type="text" data-kt-user-table-filter="search" id="my_search" class="form-control form-control-solid w-250px ps-14" placeholder=" ara" />
                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_bank">
                        <thead>
                        <tr class="text-center text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">İl Adı</th>
                            <th class="min-w-125px">İlce Adı</th>
                            <th class="min-w-125px">Seo Title</th>
                            <th class="min-w-100px">Seo Descption</th>
                            <th class="min-w-100px">Seo Keyword</th>
                            <th class="min-w-100px">Durum</th>
                            <th class="text-end min-w-100px">İşlem</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-bold"> @foreach($ilceler as $ilce) <tr class="text-center">

                            <td>{{$ilce->il->il_adi}}</td>
                            <td>{{$ilce->ilce_adi}}</td>
                            <td>{{$ilce->site_title}}</td>
                            <td>{{$ilce->site_description}}</td>
                            <td>{{$ilce->site_keyword}}</td>
                            <td>@if($ilce->durum == 1) Aktif @else Pasif @endif </td>
                            <td class="text-end">
                                <a href="{{ route('admin.ilceUpdate',['id'=>$ilce->id])}}" class="menu-link px-3">
                                    <i class="fa fa-edit" style="color: #00b300; font-size: 15px;"></i>
                                </a>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> @endsection
