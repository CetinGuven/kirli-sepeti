@extends('layouts.adminLayout.admin_design')
@section('title','Hizmet Ürü Listesi')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Hizmet Ürün Listesi</h1>
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
                                <input type="text" data-kt-user-table-filter="search" id="my_search" class="form-control form-control-solid w-250px ps-14" placeholder="Ürün Ara" />
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
                </span> Yeni Hizmet Ürün Ekle </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-4">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_bank">
                            <thead>
                            <tr class="text-center text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Sıra</th>
                                <th class="min-w-125px">Ürün Adı</th>
                                <th class="min-w-125px">Kategorisi</th>
                                <th class="min-w-125px">Etiket</th>
                                <th class="min-w-100px">Ürün Açıklama</th>
                                <th class="text-end min-w-100px">Fiyat</th>
                                <th class="text-end min-w-100px">Resim</th>
{{--                                <th class="text-end min-w-100px">İndirimli Fiyat</th>--}}
{{--                                <th class="text-end min-w-100px">İndirim Oranı</th>--}}
                                <th class="text-end min-w-100px">Durum</th>
                                <th class="text-end min-w-100px">İşlem</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                            @foreach($hizmet_urunler as $hizmet_urun) <tr class="text-center">
                                <td> {{$hizmet_urun->sira}} </td>
                                <td> {{$hizmet_urun->urun_adi}} </td>
                                <td> {{$hizmet_urun->HizmetKategori->kategori_adi}} </td>
                                <td> {{$hizmet_urun->HizmetEtiket->hizmet_etiket_adi}} </td>
                                <td> {{$hizmet_urun->urun_aciklama}} </td>
                                <td> {{$hizmet_urun->fiyat}} ₺ </td>
{{--                                <td> {{$hizmet_urun->indirimli_fiyat}} ₺ </td>--}}
{{--                                <td> {{$hizmet_urun->indirim_orani}}</td>--}}
                              <td> {{$hizmet_urun->indirim_orani}}</td>
                                <td>@if($hizmet_urun->durum == 1) Aktif @else Pasif @endif </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.hizmetUrunUpdate',['id'=>$hizmet_urun->id])}}" class="menu-link px-3">
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
                                        <h2 class="fw-bolder">Yeni Ürün Ekle</h2>
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
                                        <form id="kt_modal_add_bank_form" class="form" method="POST" action="{{ route('admin.hizmetUrunCreate') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_bank_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_bank_header" data-kt-scroll-wrappers="#kt_modal_add_bank_scroll" data-kt-scroll-offset="300px">

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Hizmet Kategorisi</label>
                                                    <select name="hizmet_kategori_id" onchange="hizmetetiketgetir(this)" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                        <option value="">Kategori Seçin</option>
                                                        @foreach($hizmet_kategoriler as $hizmet_kategori)
                                                            <option value="{{ $hizmet_kategori->id }}">{{ $hizmet_kategori->kategori_adi }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Hizmet Etiketi</label>
                                                    <select name="hizmet_etiket_id" class="form-select form-select-solid mb-3 mb-lg-0" >
                                                        <option value="">Etiket Seçin</option>
                                                    </select>
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class=" fw-bold fs-6 mb-2">Ürün Adı</label>
                                                    <input type="text" name="urun_adi" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Ürün Adı" required value="" />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Ürün Açıklama</label>
                                                    <input type="text" name="urun_aciklama" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Açıklama" required value="" />
                                                </div>
                                                <div class="fv-row mb-2">
                                                    <label class="required fw-bold fs-6 mb-2">Ürün Fotoğrafları</label>

                                                    <div class="dropzone" id="urun_image">
                                                        <div class="dz-message needsclick">
                                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Resimleri buraya bırakın veya yüklemek için tıklayın.</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Fiyat</label>
                                                    <input type="text" name="fiyat" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Fiyat" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required value="" />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Sıra</label>
                                                    <input type="text" name="sira" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Sıra" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required value="" />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Durum</label>
                                                    <select name="durum" class="form-select form-select-solid mb-3 mb-lg-0" required>
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Pasif</option>
                                                    </select>
                                                </div>
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

        function hizmetetiketgetir(selectObject) {
            var hizmetKategoriID = $(selectObject).val();
            var etiketSelect = $('select[name="hizmet_etiket_id"]');
            var selectedEtiket = $(etiketSelect).val(); // Seçili etiketi saklamak için

            // AJAX çağrısı
            $.ajax({
                type: 'GET',
                url: '{{ route("admin.etiketGetir") }}',
                data: { id: hizmetKategoriID },
                dataType: 'json',
                success: function (data) {
                    // Başarılı olursa, etiketleri seçenek olarak ekle
                    $(etiketSelect).empty().append('<option value="">Etiket Seçin</option>');
                    $.each(data, function(index, etiket) {
                        var option = $('<option></option>').attr('value', etiket.id).text(etiket.etiket_adi);
                        if (etiket.id === selectedEtiket) {
                            $(option).attr('selected', 'selected');
                        }
                        $(etiketSelect).append(option);
                    });
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Hatası:', error);
                }
            });
        }
    </script>
<script>

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#urun_image", {
        url: "{{ route('admin.hizmetUrunImageCreate') }}",
        maxFiles:10,
        acceptedFiles:"image/jpeg,image/png,image/gif",
        addRemoveLinks: true,
        parallelUploads: 10,
        dictDefaultMessage:'Yüklemek istediğiniz dosyaları buraya bırakın',
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        init: function () {
            this.on("success", function (file, response) {
                console.log(response);
                $('form').append('<input type="hidden" name="resim" value="' + response + '">');
            });
            this.on("removedfile", function (file) {
                var resim = file.upload.filename;
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admin.hizmetUrunImageDestroy") }}',
                    data: { resim: resim },
                    dataType: 'html'
                });
            });
        }
    });
</script>
@endsection

