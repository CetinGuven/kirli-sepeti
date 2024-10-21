@extends('layouts.adminLayout.admin_design')
@section('title','Üye Listesi')
@section('content')


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Üye Listesi</h1>
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
                            <input type="text" data-kt-user-table-filter="search" id="search" class="form-control form-control-solid w-250px ps-14" placeholder="Ara" />
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_add_bank">
            <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                </svg>
            </span> Yeni Üye Ekle
                            </button>
                            <button type="button" class="btn btn-warning" id="deleteAllSelectedRecord" data-bs-toggle="modal" data-bs-target="#kt_x">
            <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                </svg>
            </span> Seçilenleri Sil
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_uye">
                        <thead>
                        <tr class="text-center text-muted fw-bolder fs-7 text-uppercase gs-0">
                           <th>Checkbox</th>
                            <th class="min-w-125px">Üye Adı Soyadı</th>
                            <th class="min-w-125px">Email</th>
                            <th class="min-w-100px">Telefon</th>
                            <th class="text-end min-w-100px">İşlem</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-bold">
                        @foreach($uyeler as $uye) <tr class="text-center">
{{--                            <tr id="uye_ids{{$uye->i+d}}">--}}
{{--                            <td><input type="checkbox" name="ids" class="checkbox_ids" id="" value="{{$uye->id}}" ></td>--}}
                            <td> </td><td> {{$uye->name_surname}} </td>
                            <td> {{$uye->email}}</td>
                            <td>{{$uye->phone}}</td>
                            <td class="text-end">
                                    <a href="{{ route('admin.uyeUpdate', ['id' => $uye->id]) }}" class="menu-link px-3">
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
                                    <h2 class="fw-bolder">Yeni Üye Ekle</h2>
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
                                    <form id="kt_modal_add_bank_form" class="form" method="POST" action="{{ route('admin.uyeCreate') }}">
                                        @csrf
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_bank_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_bank_header" data-kt-scroll-wrappers="#kt_modal_add_bank_scroll" data-kt-scroll-offset="300px">
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Adı Soyadı</label>
                                                <input type="text" name="name_surname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Adı Soyad" required value="" />
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Email </label>
                                                <input type="text" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Email" required >
                                            </div>
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Telefon </label>
                                            <input type="text" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Telefon" required >
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Şifre</label>
                                            <input type="text" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Password" required >
                                        </div>
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">İptal</button>
                                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Kaydet</span>
                                            </button>
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

        // let table = new DataTable('#kt_table_uye', {
        //     displayLength: 10,
        //     "language": {
        //         "info": "_TOTAL_ kayıttan _START_ - _END_ kayıtlar gösteriliyor",
        //         "infoEmpty": "Toplam 0 kayı ",
        //         "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
        //         "lengthMenu": "Sayfada _MENU_ kayıt göster",
        //         "search": "Ara:",
        //         "emptyTable": "Tabloda veri yok",
        //         "zeroRecords": "Data bulunamadı",
        //     },
        //
        // });
        //
        $('#kt_table_uye').DataTable({
            "language":{
                url:'//cdn.datatables.net/plug-ins/2.0.2/i18n/tr.json',
            },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    text: '<i class="fas fa-copy"></i> ',
                    className: 'btn btn-info btn-sm ms-1',
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel"></i> ',
                    className: 'btn btn-success btn-sm ms-1',
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i> ',
                    className: 'btn btn-danger btn-sm ms-1',
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> ',
                    className: 'btn btn-warning btn-sm ms-1',
                }

            ],
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0 // İlk sütun seçilebilir hale getirilir
            }],
            select: {
                style: 'multi', // Çoklu seçimi etkinleştir
                selector: 'td:first-child' // Checkbox'un hücredeki yerini belirle
            },
            order: [[1, 'asc']], // İlk sıralama sütununu belirle
           responsive: true,
            "bDestroy": true,

        });
        $(document).ready(function() {
            $('#deleteAllSelectedRecord').on('click', function(e) {
                e.preventDefault();

                // Seçilen satırları bul
                var selectedRows = $('#kt_table_uye').DataTable().rows({ selected: true });

                // Seçilen satırları sil
                selectedRows.every(function() {
                    this.remove();
                });

                // Tabloyu güncelle
                $('#kt_table_uye').DataTable().draw();
            });
        });
        {{--$(document).ready(function() {--}}
        {{--    $('#deleteAllSelectedRecord').on('click', function(e) {--}}
        {{--        e.preventDefault();--}}

        {{--        // Seçilen satırları bul--}}
        {{--        var selectedIds = [];--}}
        {{--        var selectedRows = $('#kt_table_uye').DataTable().rows({ selected: true });--}}
        {{--        selectedRows.every(function() {--}}
        {{--            selectedIds.push($(this.node()).attr('data-id'));--}}
        {{--        });--}}

        {{--        // Tablodan seçilen satırları sil--}}
        {{--        selectedRows.remove().draw();--}}

        {{--        // Veritabanından seçilen satırları silmek için Ajax isteği gönder--}}
        {{--        $.ajax({--}}
        {{--            url: '{{ route('admin.uyeDestroy') }}', // Bu kısmı uygun şekilde değiştirin--}}
        {{--            method: 'GET',--}}
        {{--            data: { selectedIds: selectedIds },--}}
        {{--            success: function(response) {--}}
        {{--                // Başarılı yanıt durumunda yapılacak işlemler--}}
        {{--                console.log('Seçilen satırlar başarıyla silindi');--}}
        {{--            },--}}
        {{--            error: function(xhr, status, error) {--}}
        {{--                // Hata durumunda yapılacak işlemler--}}
        {{--                console.error('Bir hata oluştu:', error);--}}
        {{--            }--}}
        {{--        });--}}
        {{--    });--}}
        {{--});--}}
    </script>


        <script>
        $(function (e){
            $("#select_all_ids").click(function (){
                    $('.checkbox_ids').prop('checked',$(this).prop('checked'));
                });
$("#deleteAllSelectedRecord").click(function (e){
    e.preventDefault();
    var all_ids=[];
    $("input:checkbox[name=ids]:checked").each(function (){
        all_ids.push($(this).val());
    });
    $.ajax({
        url:"{{route('admin.uyeDestroy')}}",
        type:"GET",
        data:{
            ids:all_ids,
            _token:"{{csrf_token()}}"
        },
        success:function (response){
            $.each(all_ids,function (key,val){
                $("#uye_ids"+val).remove();
            });
            }
        });
        // datatable draw();
    });
        });



    </script>
@endsection

