
@extends('layouts.adminLayout.admin_design')

@section('title','uye Listesi')

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
    </div>
@endsection

@section('js')

    <script>
        function changeColor(element) {
            let color_code = $(element).children("option:selected").data('color');
            console.log(color_code);
            let demo = $(element).parent().find('i').css('color',color_code);

        }
        let table =  new DataTable('#kt_table_users', {
            displayLength : 10,
            "language": {
                // "paginate": {
                //     "previous": " Önceki",
                //     "next": " Sonraki",
                //     "first":  "İlk",
                //     "last":   "Son",
                // },
                "info":           "_TOTAL_ kayıttan _START_ - _END_ kayıtlar gösteriliyor",
                "infoEmpty":      "Toplam 0 kayı ",
                "infoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
                "lengthMenu":     "Sayfada _MENU_ kayıt göster",
                "search":         "Ara:",
                "emptyTable":     "Tabloda veri yok",
                "zeroRecords":    "Data bulunamadı",

            }
        });

    </script>

@endsection








