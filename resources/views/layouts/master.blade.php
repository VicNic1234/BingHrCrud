<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Nowa – Laravel Bootstrap 5 Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template"/>

		<!-- Title -->
		@yield('title')
		

        <!-- FAVICON -->
		<link rel="icon" href="/assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- ICONS CSS -->
		<link href="/assets/plugins/icons/icons.css" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- RIGHT-SIDEMENU CSS -->
		<link href="/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- P-SCROLL BAR CSS -->
		<link href="/assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

        
		<!-- INTERNAL Select2 css -->
		<link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="/assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
		<link href="/assets/plugins/datatable/css/buttons.bootstrap5.min.css"  rel="stylesheet">
		<link href="/assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />

            
		<!-- STYLES CSS -->
		<link href="/assets/css/style.css" rel="stylesheet">
		<link href="/assets/css/style-dark.css" rel="stylesheet">
		<link href="/assets/css/style-transparent.css" rel="stylesheet">


		<!-- SKIN-MODES CSS -->
		<link href="/assets/css/skin-modes.css" rel="stylesheet" />

		<!-- ANIMATION CSS -->
		<link href="/assets/css/animate.css" rel="stylesheet">

	    <!-- SWITCHER CSS -->
		<link href="/assets/switcher/css/switcher.css" rel="stylesheet"/>
		<link href="/assets/switcher/demo.css" rel="stylesheet"/>
		@yield('styles')

	</head>

	<body class="ltr main-body app sidebar-mini">

      

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<div>

                <!-- main-header -->
				<div class="main-header side-header sticky nav nav-item">
					<div class=" main-container container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="#" class="header-logo">
									<img src="assets/img/brand/#" class="mobile-logo logo-1" alt="logo">
									<img src="assets/img/brand/#" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
							</div>
							<div class="logo-horizontal">
								<a href="#" class="header-logo">
									<img src="assets/img/brand/#.png" class="mobile-logo logo-1" alt="logo">
									<img src="assets/img/brand/#.png" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							
						</div>
						<div class="main-header-right">
							<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
									
										<li class="dropdown nav-item">
											<a class="new nav-link theme-layout nav-link-bg layout-setting" >
												<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
												<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
											</a>
										</li>
									
										
										<li class="nav-item full-screen fullscreen-button">
											<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
										</li>
										
									
										<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
											<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img alt="" src="assets/img/faces/2.jpg" class=""></a>
											<div class="dropdown-menu">
												<div class="menu-header-content p-3 border-bottom">
													<div class="d-flex wd-100p">
														<div class="main-img-user"><img alt="" src="assets/img/faces/2.jpg" class=""></div>
														<div class="ms-3 my-auto">
															<h6 class="tx-15 font-weight-semibold mb-0">Teri Dactyl</h6><span class="dropdown-title-text subtext op-6  tx-12">Premium Member</span>
														</div>
													</div>
												</div>
												<a class="dropdown-item" href="profile.html"><i class="far fa-user-circle"></i>Profile</a>
												<a class="dropdown-item" href="chat.html"><i class="far fa-smile"></i> chat</a>
												<a class="dropdown-item" href="mail-read.html"><i class="far fa-envelope "></i>Inbox</a>
												<a class="dropdown-item" href="mail.html"><i class="far fa-comment-dots"></i>Messages</a>
												<a class="dropdown-item" href="mail-settings.html"><i class="far fa-sun"></i>  Settings</a>
												<a class="dropdown-item" href="signup.html"><i class="far fa-arrow-alt-circle-left"></i> Sign Out</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						
						</div>
					</div>
				</div>
				<!-- /main-header -->

                <!-- main-sidebar -->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="#">
								<img src="assets/img/brand/#.png" class="main-logo  desktop-logo" alt="logo">
								<img src="assets/img/brand/#-white.png" class="main-logo  desktop-dark" alt="logo">
								<img src="assets/img/brand/favicon.png" class="main-logo  mobile-logo" alt="logo">
								<img src="assets/img/brand/favicon-white.png" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">
								<li class="side-item side-item-category">Main</li>
						
							
								<li class="slide is-expanded"> <a class="side-menu__item active" href="{{route('user.index')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">
                  
                                        </path>
                                    </svg><span class="side-menu__label">Users</span></a> 
                                </li>
								
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->

			</div>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">users</span>
						</div>
						{{-- <div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sales</li>
							</ol>
						</div> --}}
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
                    @yield('content') 
					<!-- row closed -->

				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

     

            
            <!-- Footer opened -->
			<div class="main-footer">
				<div class="container-fluid pd-t-0-f ht-100p">
					 Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Binghr</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Binghr </a> All rights reserved
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

		<!-- JQUERY JS -->
		<script src="/assets/plugins/jquery/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- IONICONS JS -->
		<script src="/assets/plugins/ionicons/ionicons.js"></script>

		<!-- MOMENT JS -->
		<script src="/assets/plugins/moment/moment.js"></script>

		<!-- P-SCROLL JS -->
		<script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- SIDEBAR JS -->
		<script src="/assets/plugins/side-menu/sidemenu.js"></script>

		<!-- STICKY JS -->
		<script src="/assets/js/sticky.js"></script>

		<!-- Chart-circle js -->
		<script src="/assets/plugins/circle-progress/circle-progress.min.js"></script>

		<!-- RIGHT-SIDEBAR JS -->
		<script src="/assets/plugins/sidebar/sidebar.js"></script>
		<script src="/assets/plugins/sidebar/sidebar-custom.js"></script>

        
		<!-- Internal Chart.Bundle js-->
		<script src="/assets/plugins/chartjs/Chart.bundle.min.js"></script>

		<!-- Moment js -->
		<script src="/assets/plugins/raphael/raphael.min.js"></script>

		<!-- INTERNAL Apexchart js -->
		<script src="/assets/js/apexcharts.js"></script>

		<!--Internal Sparkline js -->
		<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--Internal  index js -->
		<script src="/assets/js/index.js"></script>

        <!-- Chart-circle js -->
		<script src="/assets/js/chart-circle.js"></script>

		<!-- Internal Data tables -->
		<script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="/assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>

		<!-- INTERNAL Select2 js -->
		<script src="/assets/plugins/select2/js/select2.full.min.js"></script>
		<script src="/assets/js/select2.js"></script>

    
		<!-- EVA-ICONS JS -->
		<script src="/assets/plugins/eva-icons/eva-icons.min.js"></script>

		<!-- THEME-COLOR JS -->
		<script src="/assets/js/themecolor.js"></script>

		<!-- CUSTOM JS -->
		<script src="/assets/js/custom.js"></script>

		<!-- exported JS -->
		<script src="/assets/js/exported.js"></script>

		<!-- SWITCHER JS -->
		<script src="/assets/switcher/js/switcher.js"></script>
		@yield('scripts')
    </body>

</html>
