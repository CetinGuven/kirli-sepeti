<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <img alt="Logo" src="{{asset('backend/media/logos/kirli.sepeti.logo.png')}}" class="h-40px" />
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
      <span class="svg-icon svg-icon-1 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
          <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
        </svg>
      </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div data-kt-menu-trigger1="click" class="menu-item here show menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                </svg>
              </span>
            </span>
            <a href="#">
              <span class="menu-title">Ana Sayfa</span>
            </a>
          </span>
                </div>
                <div class="menu-item {{ request()->is('*uyeler*') ? 'show' : '' }}">
                    <a class="menu-link" href="{{route('admin.uyeShow')}}">
            <span class="menu-icon">
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                  <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                </svg>
              </span>
            </span>
                        <span class="menu-title">Üyeler</span>
                    </a>
                </div>
                <div class="menu-item {{ request()->is('*bayiler*') ? 'show' : '' }}">
                    <a class="menu-link" href="{{route('admin.bayiShow')}}">
            <span class="menu-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
              </svg>
            </span>
                        <span class="menu-title">Bayiler</span>
                    </a>
                </div>
{{--                <div data-kt-menu-trigger="click" class="menu-item {{ request()->is('*urunler*') ? 'show' : '' }} menu-accordion">--}}
{{--          <span class="menu-link">--}}
{{--            <span class="menu-icon">--}}
{{--              <span class="svg-icon svg-icon-2">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--                  <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />--}}
{{--                  <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />--}}
{{--                  <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />--}}
{{--                  <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />--}}
{{--                </svg>--}}
{{--              </span>--}}
{{--            </span>--}}
{{--            <span class="menu-title">Ürünler</span>--}}
{{--            <span class="menu-arrow"></span>--}}
{{--          </span>--}}
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
{{--                            <a class="menu-link {{ request()->is('*ürün-kategori-listesi*') ? 'active' : '' }}" href="#">--}}
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                <span class="menu-title">Ürün Kategori Listesi</span>
                            </a>
                        </div>
                        <div class="menu-item">
{{--                            <a class="menu-link {{ request()->is('*ürün-kategori-listesi*') ? 'active' : '' }}" href="{{route('admin.urunShow')}}">--}}
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                <span class="menu-title">Ürün Listesi</span>
                            </a>
                        </div>
                        <div class="menu-item">
{{--                            <a class="menu-link {{ request()->is('*urum-yorum-listesi*') ? 'active' : '' }}" href="{{route('admin.urunYorumShow')}}">--}}
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                <span class="menu-title">Ürün Yorumları Listesi</span>
                            </a>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="click" class="menu-item {{ request()->is('*hizmetler*') ? 'show' : '' }} menu-accordion">
          <span class="menu-link">
            <span class="menu-icon">
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
                  <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
                  <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
                  <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
                </svg>
              </span>
            </span>
            <span class="menu-title">Hizmetler</span>
            <span class="menu-arrow"></span>
          </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*hizmet-kategori-listesi*') ? 'active' : '' }}" href="{{url('admin/hizmet-kategori')}}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                    <span class="menu-title">Hizmet Kategori Listesi</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*hizmet-etiket-listesi*') ? 'active' : '' }}" href="{{route('admin.hizmetEtiketShow')}}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                    <span class="menu-title">Hizmet Etiket Listesi</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*hizmet-listesi*') ? 'active' : '' }}" href="{{route('admin.hizmetShow')}}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                    <span class="menu-title">Hizmet Listesi</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*hizmet-urun-listesi*') ? 'active' : '' }}" href="{{route('admin.hizmetUrunShow')}}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                    <span class="menu-title">Hizmet Ürün Listesi</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*servis-bolge-listesi*') ? 'active' : '' }}" href="{{route('admin.servisBolgeShow')}}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                                    <span class="menu-title">Servis Bölgeleri Listesi</span>
                                </a>
                            </div>
                        </div>
                    <div class="menu-item">
                        <div class="menu-content pt-8 pb-0">
                            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Sistem</span>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->is('*ayarlar*') ? 'show' : '' }}">
            <span class="menu-link">
              <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
                    <path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
                  </svg>
                </span>
              </span>
              <span class="menu-title">Ayarlar</span>
              <span class="menu-arrow"></span>
            </span>

                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*sss*') ? 'active' : '' }}" href="{{route('admin.sssShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                    <span class="menu-title">Sss</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*banka') ? 'active' : '' }}" href="{{route('admin.bankaHesapShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                    <span class="menu-title">Banka</span>
                                </a>
                            </div>
                        <div class="menu-item">
                            <a class="menu-link {{ request()->is('*referanslar*') ? 'active' : '' }}" href="{{route('admin.referansShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                <span class="menu-title">Referanslar</span>
                            </a>
                        </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*slider*') ? 'active' : '' }}" href="{{route('admin.sliderShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                    <span class="menu-title">Slider</span>
                                </a>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                            <span class="menu-link {{ request()->is('*site-ayarları*') ? 'active' : '' }}">
                                <span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
                                <span class="menu-title">Site Ayarları</span>
                                <span class="menu-arrow"></span>
                            </span>
                                <div class="menu-sub bg-dark menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto" style="">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('admin.siteAyarlarShow')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
                                            <span class="menu-title">Kirli Sepeti(Web) Site Ayarları</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('admin.adminSiteAyarShow')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
                                            <span class="menu-title">Admin Site Ayarları</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('admin.bayiSiteAyarShow')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
                                            <span class="menu-title">Bayi Site Ayarları</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                            <span class="menu-link {{ request()->is('*site-ayarları*') ? 'active' : '' }}">
                                <span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
                                <span class="menu-title">Servis Bölgesi Aktifleştirme</span>
                                <span class="menu-arrow"></span>
                            </span>
                                <div class="menu-sub bg-dark menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto" style="">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('admin.ilShow')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
                                            <span class="menu-title">İl Aktifleştirme</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('admin.ilceShow')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
                                            <span class="menu-title">İlçe Aktifleştirme</span>
                                        </a>
                                    </div>
                                    </div>
                                    </div>
{{--                            <div class="menu-item">--}}
{{--                                <a class="menu-link {{ request()->is('*site-ayarları*') ? 'active' : '' }}" href="{{route('admin.siteAyarlarShow')}}">--}}
{{--                  <span class="menu-bullet">--}}
{{--                    <span class="bullet bullet-dot"></span>--}}
{{--                  </span>--}}
{{--                                    <span class="menu-title">Site Ayarları</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*menu*') ? 'active' : '' }}" href="{{route('admin.menuShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                    <span class="menu-title">Menü</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*sosyalmedya*') ? 'active' : '' }}" href="{{route('admin.sosyalMedyaShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                    <span class="menu-title">Sosyal Medya</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{ request()->is('*haberler*') ? 'active' : '' }}" href="{{route('admin.haberlerShow')}}">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                                    <span class="menu-title">Haberler</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
