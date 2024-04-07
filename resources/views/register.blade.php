<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
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
	<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pages/login.js') }}"></script>
	<!-- /theme JS files -->

</head>
<body>
<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="{{asset('images/logo_light.png')}}" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container login-container">
		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
								<h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
							</div>

							<div class="content-divider text-muted form-group"><span>Your credentials</span></div>
                            <form action="{{ route('register') }}" method="POST">
							@csrf
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
									@if ($errors->has('username'))
									<span class="text-danger">{{ $errors->first('username') }}</span>
									@endif
                                    <!-- <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> This username is already taken</span> -->
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Create password" name="password">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
									@if ($errors->has('password'))
									<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
                                </div>
                                
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Tên" name="ten">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
									@if ($errors->has('ten'))
									<span class="text-danger">{{ $errors->first('ten') }}</span>
									@endif
                                </div>
                                
                                <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
                            </form>
						</div>
				</div>

			</div>

		</div>

	</div>

</body>

</html>
