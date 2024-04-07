<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <!-- Trong tệp Blade của bạn -->
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/dashboard.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo_light.png')}}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<p class="navbar-text">
                <span class="label bg-success-400">                    
                    @if(session('role'))
                        {{ session('role') }}
                    @endif
                </span>
            </p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
						<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="espana"><img src="assets/images/flags/es.png" alt=""> España</a></li>
						<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="active"><a href="#"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-people"></i> <span>Quản lý khách hàng</span></a>
									<ul>
										<li><a href="#">Thêm khách hàng</a></li>
										<li><a href="#">Xóa khách hàng</a></li>
                                        <li><a href="#">Chỉnh sửa khách hàng</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-cart2"></i> <span>Quản lý đơn hàng</span></a>
									<ul>
										<li><a href="{{route('getaddkh')}}">Thêm đơn hàng</a></li>
										<li><a href="{{route('getdeletekh')}}">Xóa đơn hàng</a></li>
                                        <li><a href="{{route('getupdatekh')}}">Chỉnh sửa đơn hàng</a></li>
									</ul>
								</li>
                                <li>
									<a href="#"><i class=" icon-collaboration"></i> <span>Quản lý phân quyền</span></a>
								</li>
                                <li>
									<a href="#"><i class=" icon-make-group"></i> <span>Quản lý công ty</span></a>
									<ul>
                                        <li><a href="#">Thêm công ty</a></li>
										<li><a href="#">Xóa công ty</a></li>
                                        <li><a href="#">Chỉnh sửa công ty</a></li>
									</ul>
								</li>
								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
            <div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

                <div class="content">
                <div class="row">
                    <div class="col-lg-4">

                        <!-- Members online -->
                        <div class="panel bg-teal-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <span class="heading-text badge bg-teal-800">+53,6%</span>
                                </div>

                                <h3 class="no-margin">3,450</h3>
                                Members online
                                <div class="text-muted text-size-small">489 avg</div>
                            </div>

                            <div class="container-fluid">
                                <div id="members-online"></div>
                            </div>
                        </div>
                        <!-- /members online -->

                    </div>


                    <div class="col-lg-4">

                        <!-- Today's revenue -->
                        <div class="panel bg-blue-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="reload"></a></li>
                                    </ul>
                                </div>

                                <h3 class="no-margin">$18,390</h3>
                                Today's revenue
                                <div class="text-muted text-size-small">$37,578 avg</div>
                            </div>

                            <div id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->

                    </div>
                </div>
                </div>
                </div>
                <!-- Quick stats boxes -->
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
