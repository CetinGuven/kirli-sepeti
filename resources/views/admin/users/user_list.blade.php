@extends('layouts.adminLayout.admin_design')

@section('title','Admin Panel')

@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Kullanıcı Listesi</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="" class="text-muted text-hover-primary">Ana Sayfa</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Kullanıcı Yönetimi</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">Kullanıcı Listesi</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->

		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card header-->
				<div class="card-header border-0 pt-6">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

							<!--begin::Add user-->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
									<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->Add User</button>
							<!--end::Add user-->
						</div>
						<!--end::Toolbar-->

						<!--begin::Modal - Add task-->
						<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
							<!--begin::Modal dialog-->
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<!--begin::Modal content-->
								<div class="modal-content">
									<!--begin::Modal header-->
									<div class="modal-header" id="kt_modal_add_user_header">
										<!--begin::Modal title-->
										<h2 class="fw-bolder">Add User</h2>
										<!--end::Modal title-->
										<!--begin::Close-->
										<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Close-->
									</div>
									<!--end::Modal header-->
									<!--begin::Modal body-->
									<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
										<!--begin::Form-->
										<form id="kt_modal_add_user_form" class="form" method="POST" action="{{ url('admin/add-user') }}">@csrf
											<!--begin::Scroll-->
											<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="d-block fw-bold fs-6 mb-5">Avatar</label>
													<!--end::Label-->
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('backend/media/svg/avatars/blank.svg')}}')">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('backend/media/avatars/300-1.jpg')}});"></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<!--begin::Inputs-->
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
															<!--end::Inputs-->
														</label>
														<!--end::Label-->
														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fw-bold fs-6 mb-2">First Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First name" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fw-bold fs-6 mb-2">Last Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="last_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last name" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fw-bold fs-6 mb-2">Email</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<label for="password" class="required fw-bold fs-6 mb-2">{{ __('Password') }}</label>

													<div class="col-md-6">
														<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

														@error('password')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<label for="password-confirm" class="required fw-bold fs-6 mb-2">{{ __('Confirm Password') }}</label>

													<div class="col-md-6">
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
													</div>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-7">
													<!--begin::Label-->
													<label class="required fw-bold fs-6 mb-5">Role</label>
													<!--end::Label-->
													<!--begin::Roles-->
													
													@foreach($roles as $single_role)
													@if($single_role->id != 1)
													<!--begin::Input row-->
													<div class="d-flex fv-row">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="role_id" type="radio" value="{{ $single_role->id }}" id="kt_modal_update_role_option_0"/>
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_0">
																<div class="fw-bolder text-gray-800">{{ $single_role->name }}</div>
																<div class="text-gray-600">{{ $single_role->description }}</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class='separator separator-dashed my-5'></div>
													@endif
													@endforeach

													<!--end::Roles-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Scroll-->
											<!--begin::Actions-->
											<div class="text-center pt-15">
												<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Modal body-->
								</div>
								<!--end::Modal content-->
							</div>
							<!--end::Modal dialog-->
						</div>
						<!--end::Modal - Add task-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body py-4">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
								<th class="min-w-125px">Kullanıcı</th>
								<th class="min-w-125px">rolü</th>
								<th class="min-w-125px">Firma Adı</th>
								<th class="min-w-125px">Eklenen Tarih</th>
								<th class="text-end min-w-100px">İşlem</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="text-gray-600 fw-bold">

							@foreach($users as $single_user)							
							<!--begin::Table row-->
							<tr>								
								<!--begin::User=-->
								<td class="d-flex align-items-center">
									<!--begin:: Avatar -->
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
										<a href="">
											<div class="symbol-label">
												<img src="{{asset('backend/media/avatars/300-1.jpg')}}" alt="Emma Smith" class="w-100" />
											</div>
										</a>
									</div>
									<!--end::Avatar-->
									<!--begin::User details-->
									<div class="d-flex flex-column">
										<a href="" class="text-gray-800 text-hover-primary mb-1">{{ $single_user->first_name.' '.$single_user->last_name }}</a>
										<span>{{ $single_user->email }}</span>
									</div>
									<!--begin::User details-->
								</td>
								<!--end::User=-->
								
								<!--begin::Role=-->
								<td>{{ $single_user->role->name }}</td>
								<!--end::Role=-->
								
								<!--begin::Firma=-->
								<td>@if($single_user->firma) {{ $single_user->firma->firma_unvani }} @endif</td>
								<!--end::Firma=-->

								<!--begin::Joined-->
								<td>{{ $single_user->created_at }}</td>
								<!--begin::Joined-->
								<!--begin::Action=-->
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
									<span class="svg-icon svg-icon-5 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="{{ url('admin/firma-guncelle',$single_user->id) }}" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<!--end::Table row-->
							@endforeach
							
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->

@endsection