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
	<script type="text/javascript" src="{{ asset('js/plugins/notifications/pnotify.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pages/components_notifications_pnotify.js') }}"></script>

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/pages/components_modals.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/notifications/bootbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/notifications/sweet_alert.min.js') }}"></script>


</head>

<body>
@php
    $RoleController = new \App\Http\Controllers\RoleController();
    $listRoles = $RoleController->listRole();

    $homeController = new \App\Http\Controllers\HomeController();
	$username = $homeController->username();

@endphp
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
						<span>{{$username}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="{{ route('signout') }}"><i class="icon-switch2"></i> Logout</a></li>
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
								<li ><a href="{{route('dasboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-people"></i> <span>Quản lý khách hàng</span></a>
									<ul>
										<li ><a href="{{route('getaddkh')}}">Thêm khách hàng</a></li>
										<li ><a href="{{route('getdeletekh')}}">Xóa khách hàng</a></li>
                                        <li ><a href="{{route('getupdatekh')}}">Chỉnh sửa khách hàng</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-cart2"></i> <span>Quản lý đơn hàng</span></a>
									<ul>
										<li><a href="{{route('getadddh')}}">Thêm đơn hàng</a></li>
										<li ><a href="{{route('getdeletedh')}}">Xóa đơn hàng</a></li>
                                        <li><a href="{{route('getupdatedh')}}">Chỉnh sửa đơn hàng</a></li>
									</ul>
								</li>
                                <li>
									<a href="#"><i class=" icon-collaboration"></i> <span>Quản lý phân quyền</span></a>
									<ul>
										<li class="active"><a href="{{route('getlistRole')}}">Quản lý</a></li>
										<li><a href="{{route('getrole')}}">Phân quyền</a></li>
									</ul>

								</li>
                                <li>
									<a href="#"><i class=" icon-make-group"></i> <span>Quản lý công ty</span></a>
									<ul>
									<li><a href="{{route('getaddcty')}}">Thêm công ty</a></li>
										<li><a href="{{route('getdeletecty')}}">Xóa công ty</a></li>
                                        <li><a href="{{route('getupdatecty')}}">Chỉnh sửa công ty</a></li>
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
            <div class="content">
            <div class="row">
						<div class="col-md-6">
                            <div class="panel panel-flat">
								<div class="panel-heading">
									<h3 class="panel-title">Danh sách các tài khoản đã được phân quyền</h6>
									<div class="heading-elements">
										<span class="label bg-success heading-text">28 active</span>
										<ul class="icons-list">
					                		<li class="dropdown">
					                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
													<li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
													<li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
												</ul>
					                		</li>
					                	</ul>
				                	</div>
								</div>
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th class="col-md-2">Mã tài khoản</th>
												<th class="col-md-2">Username</th>
                                                <th class="col-md-2">Tên</th>
												<th class="col-md-2"></th>

											</tr>
										</thead>
										<tbody>
                                            @foreach ($listRoles as $listRole )
                                            <tr>
                                                <td>
                                                    <div class="media-left">
                                                        <div class=""><a href="#" class="text-default text-semibold">{{$listRole -> id_tk}}</a></div>
                                                    </div>
                                                </td>

												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$listRole -> username}}</a></div>
													</div>
												</td>
                                                <td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$listRole -> ten}}</a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<i class="fas fa-trash xr" style="color: red" data-id_pq_data1="{{$listRole-> id_pq}}" data-toggle="modal" data-target="#exampleModal4"></i>
														<script>

															$('.xr').click(function () { 
																var modal = document.getElementById('exampleModal4');
																var modalForm = modal.querySelector('#modalForm');
																var id_pq = modalForm.querySelector('#id_pq');
																id_pq.value = $(this).data('id_pq_data1');	
																console.log(id_pq.value);
														
															});




														</script>
													</div>
												</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>

							</div>   

							@if (session('error'))
							<script>
								var error = {!! json_encode(session('error')) !!};
								// Sử dụng giá trị error trong script của bạn
								console.log('Error: ' + error);																
								$(document).ready(function() {
									new PNotify({
										title: error,
										//text: 'Check me out! I\',
										addclass: 'bg-danger'
									});
								});
								//{{ session()->pull('error') }};
							</script>
							@endif
							@if (session('success'))
							<script>
								var success = {!! json_encode(session('success')) !!};
								console.log(success);
								// Sử dụng giá trị error trong script của bạn
								$(document).ready(function() {
									new PNotify({
										title: success,
										//text: 'Check me out! I\',
										addclass: 'bg-success'
									});
								});
								//{{ session()->pull('success') }};					
							</script>
							@endif

                        </div>

            </div>
            </div>
            </div>
		</div>

		<!-- /page content -->

	</div>
	<!-- /page container -->
	<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn xóa quyền tài khoản </h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('postdeleterole1')}}" class="form-horizontal" id="modalForm" method="post">
					@csrf	
					<input type="hidden" id="id_pq" name="id_pq">						
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>  
			</div>
		  </div>
		</div>
	  </div></body>
</html>
