<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/core.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/components.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/colors.min.css') }}" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>

</head>

<body>
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
				<!-- <li class="dropdown language-switch">
                    <span class="label bg-success-400">
                    @if(session('role'))
                                    {{ session('role') }}
                            @endif

                    </span>
				</li> -->



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
                <div class="content">
                    <div class="row">
                                <div class="col-md-6">
                                        <div class="container box">
                                            <h3 >Tìm kiếm đơn hàng</h3><br />   
                                            <div class="form-group">
                                            <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Nhập các thông tin cụ thể" />
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2">Mã đơn hàng</th>
                                                            <th class="col-md-2">Mã khách hàng</th>
                                                            <th class="col-md-2">Mã công ty</th>
                                                            <th class="col-md-2">Tên đơn hàng</th>
                                                            <th class="col-md-2">Tên khách hàng</th>
                                                            <th class="col-md-2">Tên công  ty</th>
                                                            <th class="col-md-2">Ngày</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="result">
                                                    </tbody>
                                                </table>
                                            </div>                                        </div>
                                        {{ csrf_field() }}
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
		</div>

		<!-- /page content -->

	</div>

</body>
</html>
<script>
    $(document).ready(function(){
  
     $('#country_name').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
      var query = $(this).val(); //lấy gía trị ng dùng gõ
      if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
      {
       var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
       $.ajax({
        url:"{{ route('searchdh') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
        method:"POST", // phương thức gửi dữ liệu.
        data:{query:query, _token:_token},
        success: function(data,id) {
            $('#result').empty();
    // Chuyển đổi chuỗi JSON thành một mảng JavaScript
    var dataArray = JSON.parse(data);
    console.log(dataArray);
    //console.log(id);
    // Lặp qua mỗi bản ghi trong mảng và thực hiện các thao tác cần thiết
    dataArray.forEach(function(item) {
        // Trích xuất thông tin từ mỗi bản ghi và thêm vào HTML
        var html = '<tr>' +
                      '<td>' + item.id_dh + '</td>' +
                      '<td>' + item.id_kh + '</td>' +
                      '<td>' + item.id_ct + '</td>' +
                      '<td>' + item.ten_donhang + '</td>' +
                      '<td>' + item.ten + '</td>' +
                      '<td>' + item.ten_congty + '</td>' +
                      '<td>' + item.ngay + '</td>' +
                  '</tr>';
        $('#result').append(html);
    });
}
            });
            }
        });
  
     $(document).on('click', 'li', function(){  
      $('#result').val($(this).text());  
      $('#result').fadeOut();  
    });  
  
   });
</script>


