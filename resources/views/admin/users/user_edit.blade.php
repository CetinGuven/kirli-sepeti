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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">View User Details</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">User Management</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Users</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">View User</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
						<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->Filter</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475ee614e2">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bolder">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475ee614e2" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" />
										<span class="form-check-label">Author</span>
									</label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" />
										<span class="form-check-label">Customer</span>
									</label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-bold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
				<!--end::Primary button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Layout-->
			<div class="d-flex flex-column flex-lg-row">
				<!--begin::Sidebar-->
				<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
					<!--begin::Card-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Summary-->
							<!--begin::User Info-->
							<div class="d-flex flex-center flex-column py-5">
								<!--begin::Avatar-->
								<div class="symbol symbol-100px symbol-circle mb-7">
									<img src="{{asset('backend/media/avatars/300-6.jpg')}}" alt="image" />
								</div>
								<!--end::Avatar-->
								<!--begin::Name-->
								<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $single_user->first_name.' '.$single_user->last_name }}</a>
								<!--end::Name-->
								<!--begin::Position-->
								<div class="mb-9">
									<!--begin::Badge-->
									<div class="badge badge-lg badge-light-primary d-inline">{{ $single_user->role->name }}</div>
									<!--begin::Badge-->
								</div>
								<!--end::Position-->
								<!--begin::Info-->
								<!--begin::Info heading-->
								<div class="fw-bolder mb-3">Assigned Tickets
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week."></i></div>
								<!--end::Info heading-->
								<div class="d-flex flex-wrap flex-center">
									<!--begin::Stats-->
									<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
										<div class="fs-4 fw-bolder text-gray-700">
											<span class="w-75px">243</span>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-3 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<div class="fw-bold text-muted">Total</div>
									</div>
									<!--end::Stats-->
									<!--begin::Stats-->
									<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
										<div class="fs-4 fw-bolder text-gray-700">
											<span class="w-50px">56</span>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
											<span class="svg-icon svg-icon-3 svg-icon-danger">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<div class="fw-bold text-muted">Solved</div>
									</div>
									<!--end::Stats-->
									<!--begin::Stats-->
									<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
										<div class="fs-4 fw-bolder text-gray-700">
											<span class="w-50px">188</span>
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-3 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<div class="fw-bold text-muted">Open</div>
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::User Info-->
							<!--end::Summary-->
							<!--begin::Details toggle-->
							<div class="d-flex flex-stack fs-4 py-3">
								<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
									<span class="ms-2 rotate-180">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span></div>
								<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
									<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
								</span>
							</div>
							<!--end::Details toggle-->
							<div class="separator"></div>
							<!--begin::Details content-->
							<div id="kt_user_view_details" class="collapse show">
								<div class="pb-5 fs-6">
									<!--begin::Details item-->
									<div class="fw-bolder mt-5">Account ID</div>
									<div class="text-gray-600">ID-45453423</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bolder mt-5">Email</div>
									<div class="text-gray-600">
										<a href="#" class="text-gray-600 text-hover-primary">{{ $single_user->email }}</a>
									</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bolder mt-5">Address</div>
									<div class="text-gray-600">101 Collin Street,
										<br />Melbourne 3000 VIC
										<br />Australia</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bolder mt-5">Language</div>
									<div class="text-gray-600">English</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bolder mt-5">Last Login</div>
									<div class="text-gray-600">25 Jul 2022, 2:40 pm</div>
									<!--begin::Details item-->
								</div>
							</div>
							<!--end::Details content-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Connected Accounts-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Card header-->
						<div class="card-header border-0">
							<div class="card-title">
								<h3 class="fw-bolder m-0">Connected Accounts</h3>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-2">
							<!--begin::Notice-->
							<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
								<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
										<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-bold">
										<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
											<a href="#" class="me-1">privacy policy</a>and
											<a href="#">terms of use</a>.</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
							<!--begin::Items-->
							<div class="py-2">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<div class="d-flex">
										<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
										<div class="d-flex flex-column">
											<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
											<div class="fs-6 fw-bold text-muted">Plan properly your workflow</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<!--begin::Switch-->
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_google"></span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
								</div>
								<!--end::Item-->
								<div class="separator separator-dashed my-5"></div>
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<div class="d-flex">
										<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
										<div class="d-flex flex-column">
											<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
											<div class="fs-6 fw-bold text-muted">Keep eye on on your Repositories</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<!--begin::Switch-->
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github"></span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
								</div>
								<!--end::Item-->
								<div class="separator separator-dashed my-5"></div>
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<div class="d-flex">
										<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
										<div class="d-flex flex-column">
											<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
											<div class="fs-6 fw-bold text-muted">Integrate Projects Discussions</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<!--begin::Switch-->
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_slack"></span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer border-0 d-flex justify-content-center pt-0">
							<button class="btn btn-sm btn-light-primary">Save Changes</button>
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Connected Accounts-->
				</div>
				<!--end::Sidebar-->
				<!--begin::Content-->
				<div class="flex-lg-row-fluid ms-lg-15">
					<!--begin:::Tabs-->
					<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
						<!--begin:::Tab item-->
						<li class="nav-item">
							<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item">
							<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item">
							<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
						</li>
						<!--end:::Tab item-->
						<!--begin:::Tab item-->
						<li class="nav-item ms-auto">
							<!--begin::Action menu-->
							<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-2 me-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="#" class="menu-link px-5">Create invoice</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="#" class="menu-link flex-stack px-5">Create payments
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
									<a href="#" class="menu-link px-5">
										<span class="menu-title">Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-5">Apps</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-5">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-5">Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
													<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
												</label>
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-3"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="#" class="menu-link px-5">Reports</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5 my-1">
									<a href="#" class="menu-link px-5">Account Settings</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="#" class="menu-link text-danger px-5">Delete customer</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
							<!--end::Menu-->
						</li>
						<!--end:::Tab item-->
					</ul>
					<!--end:::Tabs-->
					<!--begin:::Tab content-->
					<div class="tab-content" id="myTabContent">
						<!--begin:::Tab pane-->
						<div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
							<!--begin::Content-->
							<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header">
										<h2 class="card-title fw-bolder">Calendar</h2>
										<div class="card-toolbar">
											<button class="btn btn-flex btn-primary" data-kt-calendar="add">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Add Event</button>
										</div>
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body">
										<!--begin::Calendar-->
										<div id="kt_calendar_app"></div>
										<!--end::Calendar-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
								<!--begin::Modals-->
								<!--begin::Modal - New Product-->
								<div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form" action="#" id="kt_modal_add_event_form">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
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
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Label-->
														<label class="fs-6 fw-bold required mb-2">Event Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">Event Description</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">Event Location</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
															<span class="form-check-label fw-bold" for="kt_calendar_datepicker_allday">All Day</span>
														</label>
														<!--end::Checkbox-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row row-cols-lg-2 g-10">
														<div class="col">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
																<!--end::Input-->
															</div>
														</div>
														<div class="col" data-kt-calendar="datepicker">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Event Start Time</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
																<!--end::Input-->
															</div>
														</div>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row row-cols-lg-2 g-10">
														<div class="col">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Event End Date</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
																<!--end::Input-->
															</div>
														</div>
														<div class="col" data-kt-calendar="datepicker">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Event End Time</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
																<!--end::Input-->
															</div>
														</div>
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Product-->
								<!--begin::Modal - New Product-->
								<div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header border-0 justify-content-end">
												<!--begin::Edit-->
												<div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Edit-->
												<!--begin::Edit-->
												<div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Edit-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
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
											<div class="modal-body pt-0 pb-20 px-lg-17">
												<!--begin::Row-->
												<div class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-muted me-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
															<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
															<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<div class="mb-9">
														<!--begin::Event name-->
														<div class="d-flex align-items-center mb-2">
															<span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
															<span class="badge badge-light-success" data-kt-calendar="all_day"></span>
														</div>
														<!--end::Event name-->
														<!--begin::Event description-->
														<div class="fs-6" data-kt-calendar="event_description"></div>
														<!--end::Event description-->
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="d-flex align-items-center mb-2">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success me-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="currentColor" cx="12" cy="12" r="8" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Event start date/time-->
													<div class="fs-6">
														<span class="fw-bolder">Starts</span>
														<span data-kt-calendar="event_start_date"></span>
													</div>
													<!--end::Event start date/time-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="d-flex align-items-center mb-9">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-danger me-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="currentColor" cx="12" cy="12" r="8" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Event end date/time-->
													<div class="fs-6">
														<span class="fw-bolder">Ends</span>
														<span data-kt-calendar="event_end_date"></span>
													</div>
													<!--end::Event end date/time-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-muted me-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
															<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Event location-->
													<div class="fs-6" data-kt-calendar="event_location"></div>
													<!--end::Event location-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Modal body-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Product-->
								<!--end::Modals-->
							</div>
							<!--end::Content-->
							
							<!--begin::Tasks-->
							<div class="card card-flush mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header mt-6">
									<!--begin::Card title-->
									<div class="card-title flex-column">
										<h2 class="mb-1">User's Tasks</h2>
										<div class="fs-6 fw-bold text-muted">Total 25 tasks in backlog</div>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
											<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
													<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
													<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Add Task</button>
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body d-flex flex-column">
									<!--begin::Item-->
									<div class="d-flex align-items-center position-relative mb-7">
										<!--begin::Label-->
										<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
										<!--end::Label-->
										<!--begin::Details-->
										<div class="fw-bold ms-5">
											<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Create FureStibe branding logo</a>
											<!--begin::Info-->
											<div class="fs-7 text-muted">Due in 1 day
												<a href="#">Karina Clark</a></div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Menu-->
										<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
													<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Task menu-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Update Status</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label fs-6 fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="3">In Process</option>
														<option value="4">Rejected</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
														<span class="indicator-label">Apply</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Task menu-->
										<!--end::Menu-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center position-relative mb-7">
										<!--begin::Label-->
										<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
										<!--end::Label-->
										<!--begin::Details-->
										<div class="fw-bold ms-5">
											<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Schedule a meeting with FireBear CTO John</a>
											<!--begin::Info-->
											<div class="fs-7 text-muted">Due in 3 days
												<a href="#">Rober Doe</a></div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Menu-->
										<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
													<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Task menu-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Update Status</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label fs-6 fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="3">In Process</option>
														<option value="4">Rejected</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
														<span class="indicator-label">Apply</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Task menu-->
										<!--end::Menu-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center position-relative mb-7">
										<!--begin::Label-->
										<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
										<!--end::Label-->
										<!--begin::Details-->
										<div class="fw-bold ms-5">
											<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">9 Degree Project Estimation</a>
											<!--begin::Info-->
											<div class="fs-7 text-muted">Due in 1 week
												<a href="#">Neil Owen</a></div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Menu-->
										<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
													<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Task menu-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Update Status</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label fs-6 fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="3">In Process</option>
														<option value="4">Rejected</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
														<span class="indicator-label">Apply</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Task menu-->
										<!--end::Menu-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center position-relative mb-7">
										<!--begin::Label-->
										<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
										<!--end::Label-->
										<!--begin::Details-->
										<div class="fw-bold ms-5">
											<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Dashboard UI &amp; UX for Leafr CRM</a>
											<!--begin::Info-->
											<div class="fs-7 text-muted">Due in 1 week
												<a href="#">Olivia Wild</a></div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Menu-->
										<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
													<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Task menu-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Update Status</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label fs-6 fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="3">In Process</option>
														<option value="4">Rejected</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
														<span class="indicator-label">Apply</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Task menu-->
										<!--end::Menu-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center position-relative">
										<!--begin::Label-->
										<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
										<!--end::Label-->
										<!--begin::Details-->
										<div class="fw-bold ms-5">
											<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
											<!--begin::Info-->
											<div class="fs-7 text-muted">Due in 2 weeks
												<a href="#">Sean Bean</a></div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Menu-->
										<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
													<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Task menu-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Update Status</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="form-label fs-6 fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="3">In Process</option>
														<option value="4">Rejected</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
														<span class="indicator-label">Apply</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Task menu-->
										<!--end::Menu-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Tasks-->
						</div>
						<!--end:::Tab pane-->
						<!--begin:::Tab pane-->
						<div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Profile</h2>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0 pb-5">
									<!--begin::Table wrapper-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
											<!--begin::Table body-->
											<tbody class="fs-6 fw-bold text-gray-600">
												<tr>
													<td>Email</td>
													<td>smith@kpmg.com</td>
													<td class="text-end">
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
													</td>
												</tr>
												<tr>
													<td>Password</td>
													<td>******</td>
													<td class="text-end">
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
													</td>
												</tr>
												<tr>
													<td>Role</td>
													<td>Administrator</td>
													<td class="text-end">
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table wrapper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title flex-column">
										<h2 class="mb-1">Two Step Authentication</h2>
										<div class="fs-6 fw-bold text-muted">Keep your account extra secure with a second authentication step.</div>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Add-->
										<button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="currentColor" />
													<path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Add Authentication Step</button>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">Enable one-time password</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
										<!--end::Add-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pb-5">
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<!--begin::Content-->
										<div class="d-flex flex-column">
											<span>SMS</span>
											<span class="text-muted fs-6">+61 412 345 678</span>
										</div>
										<!--end::Content-->
										<!--begin::Action-->
										<div class="d-flex justify-content-end align-items-center">
											<!--begin::Button-->
											<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
												<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
														<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</button>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">
												<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
														<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
														<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</button>
											<!--end::Button-->
										</div>
										<!--end::Action-->
									</div>
									<!--end::Item-->
									<!--begin:Separator-->
									<div class="separator separator-dashed my-5"></div>
									<!--end:Separator-->
									<!--begin::Disclaimer-->
									<div class="text-gray-600">If you lose your mobile device or security key, you can
										<a href='#' class="me-1">generate a backup code</a>to sign in to your account.</div>
									<!--end::Disclaimer-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title flex-column">
										<h2>Email Notifications</h2>
										<div class="fs-6 fw-bold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Form-->
									<form class="form" id="kt_users_email_notification_form">
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked='checked' />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_0">
													<div class="fw-bolder">Successful Payments</div>
													<div class="text-gray-600">Receive a notification for every successful payment.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_1">
													<div class="fw-bolder">Payouts</div>
													<div class="text-gray-600">Receive a notification for every initiated payout.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_2">
													<div class="fw-bolder">Application fees</div>
													<div class="text-gray-600">Receive a notification each time you collect a fee from an account.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked='checked' />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_3">
													<div class="fw-bolder">Disputes</div>
													<div class="text-gray-600">Receive a notification if a payment is disputed by a customer and for dispute resolutions.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4" id="kt_modal_update_email_notification_4" checked='checked' />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_4">
													<div class="fw-bolder">Payment reviews</div>
													<div class="text-gray-600">Receive a notification if a payment is marked as an elevated risk.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5" id="kt_modal_update_email_notification_5" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_5">
													<div class="fw-bolder">Mentions</div>
													<div class="text-gray-600">Receive a notification if a teammate mentions you in a note.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6" id="kt_modal_update_email_notification_6" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_6">
													<div class="fw-bolder">Invoice Mispayments</div>
													<div class="text-gray-600">Receive a notification if a customer sends an incorrect amount to pay their invoice.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7" id="kt_modal_update_email_notification_7" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_7">
													<div class="fw-bolder">Webhooks</div>
													<div class="text-gray-600">Receive notifications about consistently failing webhook endpoints.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8" id="kt_modal_update_email_notification_8" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_email_notification_8">
													<div class="fw-bolder">Trial</div>
													<div class="text-gray-600">Receive helpful tips when you try out our products.</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<!--begin::Action buttons-->
										<div class="d-flex justify-content-end align-items-center mt-12">
											<!--begin::Button-->
											<button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">Cancel</button>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
												<span class="indicator-label">Save</span>
												<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Button-->
										</div>
										<!--begin::Action buttons-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								<!--end::Card footer-->
							</div>
							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
						<!--begin:::Tab pane-->
						<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Login Sessions</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Filter-->
										<button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="currentColor" />
													<path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="currentColor" />
													<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
												</svg>
											</span>
											<!--end::Svg Icon-->Sign out all sessions</button>
										<!--end::Filter-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0 pb-5">
									<!--begin::Table wrapper-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
											<!--begin::Table head-->
											<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
												<!--begin::Table row-->
												<tr class="text-start text-muted text-uppercase gs-0">
													<th class="min-w-100px">Location</th>
													<th>Device</th>
													<th>IP Address</th>
													<th class="min-w-125px">Time</th>
													<th class="min-w-70px">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fs-6 fw-bold text-gray-600">
												<tr>
													<!--begin::Invoice=-->
													<td>Australia</td>
													<!--end::Invoice=-->
													<!--begin::Status=-->
													<td>Chome - Windows</td>
													<!--end::Status=-->
													<!--begin::Amount=-->
													<td>207.26.18.342</td>
													<!--end::Amount=-->
													<!--begin::Date=-->
													<td>23 seconds ago</td>
													<!--end::Date=-->
													<!--begin::Action=-->
													<td>Current session</td>
													<!--end::Action=-->
												</tr>
												<tr>
													<!--begin::Invoice=-->
													<td>Australia</td>
													<!--end::Invoice=-->
													<!--begin::Status=-->
													<td>Safari - iOS</td>
													<!--end::Status=-->
													<!--begin::Amount=-->
													<td>207.33.48.357</td>
													<!--end::Amount=-->
													<!--begin::Date=-->
													<td>3 days ago</td>
													<!--end::Date=-->
													<!--begin::Action=-->
													<td>
														<a href="#" data-kt-users-sign-out="single_user">Sign out</a>
													</td>
													<!--end::Action=-->
												</tr>
												<tr>
													<!--begin::Invoice=-->
													<td>Australia</td>
													<!--end::Invoice=-->
													<!--begin::Status=-->
													<td>Chrome - Windows</td>
													<!--end::Status=-->
													<!--begin::Amount=-->
													<td>207.24.50.215</td>
													<!--end::Amount=-->
													<!--begin::Date=-->
													<td>last week</td>
													<!--end::Date=-->
													<!--begin::Action=-->
													<td>Expired</td>
													<!--end::Action=-->
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table wrapper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Logs</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Button-->
										<button type="button" class="btn btn-sm btn-light-primary">
											<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
													<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
													<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Download Report</button>
										<!--end::Button-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body py-0">
									<!--begin::Table wrapper-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
											<!--begin::Table body-->
											<tbody>
												<!--begin::Table row-->
												<tr>
													<!--begin::Badge=-->
													<td class="min-w-70px">
														<div class="badge badge-light-danger">500 ERR</div>
													</td>
													<!--end::Badge=-->
													<!--begin::Status=-->
													<td>POST /v1/invoice/in_5315_4014/invalid</td>
													<!--end::Status=-->
													<!--begin::Timestamp=-->
													<td class="pe-0 text-end min-w-200px">10 Nov 2022, 10:30 am</td>
													<!--end::Timestamp=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Badge=-->
													<td class="min-w-70px">
														<div class="badge badge-light-success">200 OK</div>
													</td>
													<!--end::Badge=-->
													<!--begin::Status=-->
													<td>POST /v1/invoices/in_7445_4506/payment</td>
													<!--end::Status=-->
													<!--begin::Timestamp=-->
													<td class="pe-0 text-end min-w-200px">25 Jul 2022, 11:30 am</td>
													<!--end::Timestamp=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Badge=-->
													<td class="min-w-70px">
														<div class="badge badge-light-success">200 OK</div>
													</td>
													<!--end::Badge=-->
													<!--begin::Status=-->
													<td>POST /v1/invoices/in_4996_5786/payment</td>
													<!--end::Status=-->
													<!--begin::Timestamp=-->
													<td class="pe-0 text-end min-w-200px">25 Oct 2022, 6:05 pm</td>
													<!--end::Timestamp=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Badge=-->
													<td class="min-w-70px">
														<div class="badge badge-light-success">200 OK</div>
													</td>
													<!--end::Badge=-->
													<!--begin::Status=-->
													<td>POST /v1/invoices/in_3841_7630/payment</td>
													<!--end::Status=-->
													<!--begin::Timestamp=-->
													<td class="pe-0 text-end min-w-200px">21 Feb 2022, 6:05 pm</td>
													<!--end::Timestamp=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Badge=-->
													<td class="min-w-70px">
														<div class="badge badge-light-success">200 OK</div>
													</td>
													<!--end::Badge=-->
													<!--begin::Status=-->
													<td>POST /v1/invoices/in_3822_2935/payment</td>
													<!--end::Status=-->
													<!--begin::Timestamp=-->
													<td class="pe-0 text-end min-w-200px">10 Mar 2022, 8:43 pm</td>
													<!--end::Timestamp=-->
												</tr>
												<!--end::Table row-->
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table wrapper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card pt-4 mb-6 mb-xl-9">
								<!--begin::Card header-->
								<div class="card-header border-0">
									<!--begin::Card title-->
									<div class="card-title">
										<h2>Events</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Button-->
										<button type="button" class="btn btn-sm btn-light-primary">
											<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
													<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
													<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Download Report</button>
										<!--end::Button-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body py-0">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
										<!--begin::Table body-->
										<tbody>
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">Invoice
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
													<span class="badge badge-light-warning me-1">Pending</span>to
													<span class="badge badge-light-info">In Progress</span></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 8:43 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">
													<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 9:23 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">
													<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2022, 11:30 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">Invoice
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
													<span class="badge badge-light-succees me-1">In Transit</span>to
													<span class="badge badge-light-success">Approved</span></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2022, 11:30 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">
													<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 5:30 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">Invoice
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
													<span class="badge badge-light-info me-1">In Progress</span>to
													<span class="badge badge-light-primary">In Transit</span></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 6:05 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">Invoice
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
													<span class="badge badge-light-danger">Declined</span></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 8:43 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">Invoice
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
													<span class="badge badge-light-info me-1">In Progress</span>to
													<span class="badge badge-light-primary">In Transit</span></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2022, 11:05 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">Invoice
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
													<span class="badge badge-light-danger">Declined</span></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 10:10 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Event=-->
												<td class="min-w-400px">
													<a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
													<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
												<!--end::Event=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 5:20 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end:::Tab pane-->
					</div>
					<!--end:::Tab content-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Layout-->
			<!--begin::Modals-->
			<!--begin::Modal - Update user details-->
			<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Form-->
						<form class="form" action="#" id="kt_modal_update_user_form">
							<!--begin::Modal header-->
							<div class="modal-header" id="kt_modal_update_user_header">
								<!--begin::Modal title-->
								<h2 class="fw-bolder">Update User Details</h2>
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
							<div class="modal-body py-10 px-lg-17">
								<!--begin::Scroll-->
								<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
									<!--begin::User toggle-->
									<div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information
										<span class="ms-2 rotate-180">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span></div>
									<!--end::User toggle-->
									<!--begin::User form-->
									<div id="kt_modal_update_user_user_info" class="collapse show">
										<!--begin::Input group-->
										<div class="mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">
												<span>Update Avatar</span>
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
											</label>
											<!--end::Label-->
											<!--begin::Image input wrapper-->
											<div class="mt-1">
												<!--begin::Image input-->
												<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg"></div>
													<!--end::Preview existing avatar-->
													<!--begin::Edit-->
													<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
														<i class="bi bi-pencil-fill fs-7"></i>
														<!--begin::Inputs-->
														<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
														<input type="hidden" name="avatar_remove" />
														<!--end::Inputs-->
													</label>
													<!--end::Edit-->
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
											</div>
											<!--end::Image input wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Emma Smith" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">
												<span>Email</span>
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="smith@kpmg.com" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Description</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="description" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Language</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
												<option></option>
												<option value="id">Bahasa Indonesia - Indonesian</option>
												<option value="msa">Bahasa Melayu - Malay</option>
												<option value="ca">Català - Catalan</option>
												<option value="cs">Čeština - Czech</option>
												<option value="da">Dansk - Danish</option>
												<option value="de">Deutsch - German</option>
												<option value="en">English</option>
												<option value="en-gb">English UK - British English</option>
												<option value="es">Español - Spanish</option>
												<option value="fil">Filipino</option>
												<option value="fr">Français - French</option>
												<option value="ga">Gaeilge - Irish (beta)</option>
												<option value="gl">Galego - Galician (beta)</option>
												<option value="hr">Hrvatski - Croatian</option>
												<option value="it">Italiano - Italian</option>
												<option value="hu">Magyar - Hungarian</option>
												<option value="nl">Nederlands - Dutch</option>
												<option value="no">Norsk - Norwegian</option>
												<option value="pl">Polski - Polish</option>
												<option value="pt">Português - Portuguese</option>
												<option value="ro">Română - Romanian</option>
												<option value="sk">Slovenčina - Slovak</option>
												<option value="fi">Suomi - Finnish</option>
												<option value="sv">Svenska - Swedish</option>
												<option value="vi">Tiếng Việt - Vietnamese</option>
												<option value="tr">Türkçe - Turkish</option>
												<option value="el">Ελληνικά - Greek</option>
												<option value="bg">Български език - Bulgarian</option>
												<option value="ru">Русский - Russian</option>
												<option value="sr">Српски - Serbian</option>
												<option value="uk">Українська мова - Ukrainian</option>
												<option value="he">עִבְרִית - Hebrew</option>
												<option value="ur">اردو - Urdu (beta)</option>
												<option value="ar">العربية - Arabic</option>
												<option value="fa">فارسی - Persian</option>
												<option value="mr">मराठी - Marathi</option>
												<option value="hi">हिन्दी - Hindi</option>
												<option value="bn">বাংলা - Bangla</option>
												<option value="gu">ગુજરાતી - Gujarati</option>
												<option value="ta">தமிழ் - Tamil</option>
												<option value="kn">ಕನ್ನಡ - Kannada</option>
												<option value="th">ภาษาไทย - Thai</option>
												<option value="ko">한국어 - Korean</option>
												<option value="ja">日本語 - Japanese</option>
												<option value="zh-cn">简体中文 - Simplified Chinese</option>
												<option value="zh-tw">繁體中文 - Traditional Chinese</option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::User form-->
									<!--begin::Address toggle-->
									<div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Address Details
										<span class="ms-2 rotate-180">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span></div>
									<!--end::Address toggle-->
									<!--begin::Address form-->
									<div id="kt_modal_update_user_address" class="collapse show">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Address Line 1</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Address Line 2</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="address2" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Town</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-7">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="fs-6 fw-bold mb-2">State / Province</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
												<!--end::Input-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="fs-6 fw-bold mb-2">Post Code</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
												<!--end::Input-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">
												<span>Country</span>
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
												<option value="">Select a Country...</option>
												<option value="AF">Afghanistan</option>
												<option value="AX">Aland Islands</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia, Plurinational State of</option>
												<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory</option>
												<option value="BN">Brunei Darussalam</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos (Keeling) Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d'Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands (Malvinas)</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="PF">French Polynesia</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="HT">Haiti</option>
												<option value="VA">Holy See (Vatican City State)</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran, Islamic Republic of</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IM">Isle of Man</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JE">Jersey</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KP">Korea, Democratic People's Republic of</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Lao People's Democratic Republic</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macao</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia, Federated States of</option>
												<option value="MD">Moldova, Republic of</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="ME">Montenegro</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PS">Palestinian Territory, Occupied</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="BL">Saint Barthélemy</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="MF">Saint Martin (French part)</option>
												<option value="VC">Saint Vincent and the Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">Sao Tome and Principe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SX">Sint Maarten (Dutch part)</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="KR">South Korea</option>
												<option value="SS">South Sudan</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syrian Arab Republic</option>
												<option value="TW">Taiwan, Province of China</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania, United Republic of</option>
												<option value="TH">Thailand</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">United States</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VE">Venezuela, Bolivarian Republic of</option>
												<option value="VN">Vietnam</option>
												<option value="VI">Virgin Islands</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Address form-->
								</div>
								<!--end::Scroll-->
							</div>
							<!--end::Modal body-->
							<!--begin::Modal footer-->
							<div class="modal-footer flex-center">
								<!--begin::Button-->
								<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Button-->
							</div>
							<!--end::Modal footer-->
						</form>
						<!--end::Form-->
					</div>
				</div>
			</div>
			<!--end::Modal - Update user details-->
			<!--begin::Modal - Add schedule-->
			<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Add an Event</h2>
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
							<form id="kt_modal_add_schedule_form" class="form" action="#">
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fs-6 fw-bold form-label mb-2">Event Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" name="event_name" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Date &amp; Time</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date &amp; time."></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="Pick date &amp; time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fs-6 fw-bold form-label mb-2">Event Organiser</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" name="event_org" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fs-6 fw-bold form-label mb-2">Send Event Details To</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
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
			<!--end::Modal - Add schedule-->
			<!--begin::Modal - Add task-->
			<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Add a Task</h2>
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
							<form id="kt_modal_add_task_form" class="form" action="#">
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fs-6 fw-bold form-label mb-2">Task Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" name="task_name" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Task Due Date</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date."></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">Task Description</label>
									<!--end::Label-->
									<!--begin::Input-->
									<textarea class="form-control form-control-solid rounded-3"></textarea>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
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
			<!--begin::Modal - Update email-->
			<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Update Email Address</h2>
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
							<form id="kt_modal_update_email_form" class="form" action="#">
								<!--begin::Notice-->
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
											<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
											<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-bold">
											<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Email Address</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
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
			<!--end::Modal - Update email-->
			<!--begin::Modal - Update password-->
			<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Update Password</h2>
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
							<form id="kt_modal_update_password_form" class="form" action="#">
								<!--begin::Input group=-->
								<div class="fv-row mb-10">
									<label class="required form-label fs-6 mb-2">Current Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
								</div>
								<!--end::Input group=-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Label-->
										<label class="form-label fw-bold fs-6 mb-2">New Password</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--begin::Input group=-->
								<div class="fv-row mb-10">
									<label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
								</div>
								<!--end::Input group=-->
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
			<!--end::Modal - Update password-->
			<!--begin::Modal - Update role-->
			<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Update User Role</h2>
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
							<form id="kt_modal_update_role_form" class="form" action="#">
								<!--begin::Notice-->
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
											<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
											<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-bold">
											<div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-5">
										<span class="required">Select a user role</span>
									</label>
									<!--end::Label-->
									<!--begin::Input row-->
									<div class="d-flex">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
											<!--end::Input-->
											<!--begin::Label-->
											<label class="form-check-label" for="kt_modal_update_role_option_0">
												<div class="fw-bolder text-gray-800">Administrator</div>
												<div class="text-gray-600">Best for business owners and company administrators</div>
											</label>
											<!--end::Label-->
										</div>
										<!--end::Radio-->
									</div>
									<!--end::Input row-->
									<div class='separator separator-dashed my-5'></div>
									<!--begin::Input row-->
									<div class="d-flex">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
											<!--end::Input-->
											<!--begin::Label-->
											<label class="form-check-label" for="kt_modal_update_role_option_1">
												<div class="fw-bolder text-gray-800">Developer</div>
												<div class="text-gray-600">Best for developers or people primarily using the API</div>
											</label>
											<!--end::Label-->
										</div>
										<!--end::Radio-->
									</div>
									<!--end::Input row-->
									<div class='separator separator-dashed my-5'></div>
									<!--begin::Input row-->
									<div class="d-flex">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
											<!--end::Input-->
											<!--begin::Label-->
											<label class="form-check-label" for="kt_modal_update_role_option_2">
												<div class="fw-bolder text-gray-800">Analyst</div>
												<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
											</label>
											<!--end::Label-->
										</div>
										<!--end::Radio-->
									</div>
									<!--end::Input row-->
									<div class='separator separator-dashed my-5'></div>
									<!--begin::Input row-->
									<div class="d-flex">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
											<!--end::Input-->
											<!--begin::Label-->
											<label class="form-check-label" for="kt_modal_update_role_option_3">
												<div class="fw-bolder text-gray-800">Support</div>
												<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
											</label>
											<!--end::Label-->
										</div>
										<!--end::Radio-->
									</div>
									<!--end::Input row-->
									<div class='separator separator-dashed my-5'></div>
									<!--begin::Input row-->
									<div class="d-flex">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
											<!--end::Input-->
											<!--begin::Label-->
											<label class="form-check-label" for="kt_modal_update_role_option_4">
												<div class="fw-bolder text-gray-800">Trial</div>
												<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
											</label>
											<!--end::Label-->
										</div>
										<!--end::Radio-->
									</div>
									<!--end::Input row-->
								</div>
								<!--end::Input group-->
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
			<!--end::Modal - Update role-->
			<!--begin::Modal - Add task-->
			<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Add Authenticator App</h2>
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
							<!--begin::Content-->
							<div class="fw-bolder d-flex flex-column justify-content-center mb-5">
								<!--begin::Label-->
								<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
									<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
								<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the
									<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
								<!--end::Label-->
								<!--begin::QR code-->
								<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
									<img src="assets/media/misc/qr.png" alt="Scan this QR code" />
								</div>
								<!--end::QR code-->
								<!--begin::Text code-->
								<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
									<div class="fs-1">gi2kdnb54is709j</div>
								</div>
								<!--end::Text code-->
							</div>
							<!--end::Content-->
							<!--begin::Action-->
							<div class="d-flex flex-center">
								<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
								<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
							</div>
							<!--end::Action-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Add task-->
			<!--begin::Modal - Add task-->
			<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Enable One Time Password</h2>
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
							<form class="form" id="kt_modal_add_one_time_password_form">
								<!--begin::Label-->
								<div class="fw-bolder mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
								<!--end::Label-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Mobile number</span>
										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login."></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Separator-->
								<div class="separator saperator-dashed my-5"></div>
								<!--end::Separator-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Email</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Confirm password</span>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
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
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->

@endsection