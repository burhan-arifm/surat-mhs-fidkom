<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
	<title>@yield('title') | {{ config('app.name', 'Laravel') }} SIMDAK FIDKOM UINSGD</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.8/dist/css/select2.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.15.3/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
	
	<!--Custom Font-->
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>x	
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/"><span>E-Service</span> FDK-UIN SGD</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#"><em class="fas fa-bell"></em><span class="label label-info">5</span></a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="#">
									<div>
										<em class="fas fa-envelope"></em> 1 New Message
										<span class="pull-right text-muted small">3 mins ago</span>
									</div>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!--headbar-->
	</nav><!--headbar-->
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="/"><em class="fas fa-home">&nbsp;</em> Beranda</a></li>
			<li><a href="/surat"><em class="fas fa-table">&nbsp;</em> Data Surat</a></li>
			<li><a href="/pengaturan"><em class="fas fa-cog">&nbsp;</em> Pengaturan</a></li>
			<li><a href="/logout"><em class="fas fa-power-off">&nbsp;</em> Keluar</a></li>
		</ul>
	</div><!--sidebar-->
	
	<div id="app" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@yield('content')
	</div><!--content-->
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/js/locales/bootstrap-datepicker.id.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.8/dist/js/select2.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8.15.3/dist/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>
</body>
</html>