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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/pages/components_modals.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/plugins/notifications/pnotify.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pages/components_notifications_pnotify.js') }}"></script>


    <!-- /theme JS files -->
</head>

<body>
	<script>
		con
	</script>
@php
    $homeController = new \App\Http\Controllers\HomeController();
    $dsdh = $homeController->dsdh();
    $dskh = $homeController->dskh();
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
						<li><a href="{{route('getupdateaccount')}}"><i class="icon-cog5"></i> Account settings</a></li>
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
								<li class="active"><a href="{{route('dasboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
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
										<li><a href="{{route('getdeletedh')}}">Xóa đơn hàng</a></li>
                                        <li><a href="{{route('getupdatedh')}}">Chỉnh sửa đơn hàng</a></li>
									</ul>
								</li>
                                <li>
									<a href="#"><i class=" icon-collaboration"></i> <span>Quản lý phân quyền</span></a>
									<ul>
										<li><a href="{{route('getlistRole')}}">Quản lý</a></li>
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
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Nhập/Xuất/Search
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="{{route('exportdh')}}"><i class="icon-database-export"></i> Xuất đơn hàng</a></li>
									<li><a href="{{route('exportkh')}}"><i class="icon-database-export"></i> Xuất khách hàng</a></li>
									<li><a  data-toggle="modal" data-target="#exampleModal7"><i class="icon-import"></i> Nhập đơn hàng</a></li>
									<li><a  data-toggle="modal" data-target="#exampleModal8"><i class="icon-import"></i> Nhập khách hàng</a></li>
									<li><a href="{{route('getsearchdh')}}"><i class="icon-search4"></i> Tìm kiếm đơn hàng</a></li>
									<li><a href="{{route('getsearchkh')}}"><i class="icon-search4"></i> Tìm kiếm khách hàng</a></li>


								</ul>
							</li>
						</ul>
					</div>
				</div>

                <div class="content">
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
                    <div class="row">
                        <div class="col-lg-4">

                            <!-- Members online -->
                            <div class="panel bg-teal-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">{{ $homeController->tkh() }}	</h3>
                                    Tổng số khách hàng
                                    <!-- <div class="text-muted text-size-small">489 avg</div> -->
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

                                    <h3 class="no-margin">{{ $homeController->tdh() }}</h3>
                                    Tổng số đơn hàng
                                    <!-- <div class="text-muted text-size-small">$37,578 avg</div> -->
                                </div>

                                <div id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <div class="row">
						<div class="col-lg-8">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h3 class="panel-title">Danh sách đơn hàng mới nhất</h6>
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
												<th class="col-md-2">Mã đơn hàng</th>
												<th class="col-md-2">Mã khách hàng</th>
												<th class="col-md">Tên đơn hàng</th>
												<th class="col-md-2">Ngày</th>
												<th class="col-md-2">Hành động</th>
												<!-- <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th> -->
											</tr>
										</thead>
										<tbody>
                                            @foreach ($dsdh as $dh )
                                            <tr>
                                                <td>
                                                    <div class="media-left">
                                                        <div class=""><a href="#" class="text-default text-semibold">{{$dh -> id_dh}}</a></div>
                                                    </div>
                                                </td>

												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$dh -> id_kh}}</a></div>
													</div>
												</td>
                                                <td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$dh -> ten_donhang}}</a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$dh -> ngay}}</a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<i class="fas fa-pencil cdh" style="color: green; margin-right: 5px" data-id_dh_data="{{$dh->id_dh}}" data-toggle="modal" data-target="#exampleModal1"></i>
														<i class="fas fa-trash xdh" style="color: red" data-id_dh_data1="{{$dh->id_dh}}" data-toggle="modal" data-target="#exampleModal3"></i>
														<script>

															$('.xdh').click(function () { 
																var modal = document.getElementById('exampleModal3');
																var modalForm = modal.querySelector('#modalForm');
																var id_dh = modalForm.querySelector('#id_dh');
																id_dh.value = $(this).data('id_dh_data1');	
																console.log(id_dh.value);
														
															});
															$('.cdh').click(function () { 
																var modal = document.getElementById('exampleModal1');
																var modalForm = modal.querySelector('#modalForm');
																var id_dh = modalForm.querySelector('#id_dh');
																id_dh.value = $(this).data('id_dh_data');	
																console.log(id_dh.value);
														
															});



														</script>
													</div>
												</td>
												<!-- <td><span class="text-muted">{{$dh -> ten_donhang}}</span></td>
												<td><span class="text-success-600">ngay</span></td> -->
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>

							</div>   
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-8">
							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h3 class="panel-title">Danh sách khách hàng mới nhất</h6>
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
												<th class="col-md-2">Mã khách hàng</th>
												<th class="col-md-2">Tên khách hàng</th>
												<th class="col-md-2">Tuổi</th>
												<th class="col-md-2">Địa chỉ</th>
												<th class="col-md-2">Tên công ty</th>
												<th class="col-md-2">Hành động</th>
												<th class="col-md-2"></th>
											</tr>
										</thead>
										<tbody>
											@foreach ($dskh as $kh )
											<tr>
												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$kh -> id_kh}}</a></div>
													</div>
												</td>
	
												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$kh -> ten}} </a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$kh -> tuoi}} </a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$kh -> dia_chi}} </a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$kh -> ten_congty}} </a></div>
													</div>
												</td>
												<td>
													<div class="media-left">
														<i class="fas fa-pencil ckh" style="color: green; margin-right: 5px" data-id_kh_data="{{$kh->id_kh}}" data-toggle="modal" data-target="#exampleModal2"></i>
														<i class="fas fa-trash xkh" style="color: red" data-id_kh_data="{{$kh->id_kh}}" data-toggle="modal" data-target="#exampleModal4"></i>
														<script>
															$('.ckh').click(function () { 
																var modal = document.getElementById('exampleModal2');
																var modalForm = modal.querySelector('#modalForm');
																var id_kh = modalForm.querySelector('#id_kh');
																id_kh.value = $(this).data('id_kh_data');	
																console.log(id_kh.value);
															});
															$('.xkh').click(function () { 
																var modal = document.getElementById('exampleModal4');
																var modalForm = modal.querySelector('#modalForm');
																var id_kh = modalForm.querySelector('#id_kh');
																id_kh.value = $(this).data('id_kh_data');	
																console.log(id_kh.value);
														
															});
														</script>
														
													</div>
												</td>
												<td>
													<a href="{{ route('detailkh1', ['id' => $kh->id_kh]) }}"><button type="button" class="btn btn-default"><i class="icon-make-group position-left"></i> Chi tiết</button></a>
												</td>
	
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>                
						</div>             
	
					</div>

                </div>
            </div>
		</div>

		<!-- /page content -->

	</div>
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa đơn hàng</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('postupdatedh_home')}}" class="form-horizontal"id="modalForm" method="post">
					@csrf			
					<input type="hidden" id="id_dh" name="id_dh">		
					<div class="form-group">
						<label class="col-lg-3 control-label">Mã khách hàng muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="id_kh">
			</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Tên đơn hàng muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="ten_donhang">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Ngày muốn sửa:</label>
						<div class="col-lg-9">
							<input type="date" class="form-control" placeholder="" name="ngay">
						</div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>

				</form>  
			</div>
		  </div>
		</div>
	</div>
	  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa khách hàng</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('postupdatekh_home')}}" class="form-horizontal" id="modalForm" method="post">
					@csrf	
					<input type="hidden" id="id_kh" name="id_kh">						
					<div class="form-group">
						<label class="col-lg-3 control-label">Tên khách hàng muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="ten">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Tuổi muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="tuoi">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Địa chỉ muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="dia_chi">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Mã công ty muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="id_ct">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Nghề nghiệp muốn sửa:</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" placeholder="" name="nghe_nghiep">
						</div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>  
			</div>
		  </div>
		</div>
	  </div>
	  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn xóa đơn hàng</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('postdeletedh_home')}}" class="form-horizontal" id="modalForm" method="post">
					@csrf	
					<input type="hidden" id="id_dh" name="id_dh">		
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>  
			</div>
		  </div>
		</div>
	  </div>
	  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn xóa khách hàng</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('postdeletekh_home')}}" class="form-horizontal" id="modalForm" method="post">
					@csrf	
					<input type="hidden" id="id_kh" name="id_kh">						
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>  
			</div>
		  </div>
		</div>
	  </div>
	  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Chọn file để nhập đơn hàng</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('importdh')}}" class="form-horizontal" id="modalForm" method="post"enctype="multipart/form-data">
					@csrf	
					{{-- <input type="hidden" id="id_kh" name="id_kh">						 --}}
					<input id="user-file" type="file" name="user_file" >
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>  
			</div>
		  </div>
		</div>
	  </div>	  
	  <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Chọn file để nhập khách hàng</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{route('importkh')}}" class="form-horizontal" id="modalForm" method="post" enctype="multipart/form-data">
					@csrf	
					{{-- <input type="hidden" id="id_kh" name="id_kh">						 --}}
					<input id="user-file" type="file" name="user_file" >
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Xác nhận <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>  
			</div>
		  </div>
		</div>
	  </div>
	  {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm</button> --}}


</body>
</html>
