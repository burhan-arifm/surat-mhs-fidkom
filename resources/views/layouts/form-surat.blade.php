<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
	<title>Pengajuan Surat @yield('page-name') | {{ config('app.name', 'Laravel') }} Fakultas Ilmu Dakwah dan Komunikasi UIN Sunan Gunung Djati Bandung</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.47/build/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.8/dist/css/select2.min.css">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>E-Service</span> FDK-UIN SGD</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav><!--headbar-->

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="parent "><a data-toggle="collapse" href="#pen_surat">
				<em class="fa fa-envelope">&nbsp;</em> Pengajuan Surat <span data-toggle="collapse" href="#pen_surat" class="icon pull-right"><em class="fa fa-arrow-circle-down"></em></span>
				</a>
				<ul class="children collapse" id="pen_surat">
                    <li><a href="/pengajuan-surat/spmk">
                    <span class="fa fa-envelope-open">&nbsp;</span>Masih Kuliah</a></li>
                    <li><a href="/pengajuan-surat/izin-observasi">
                    <span class="fa fa-envelope-open">&nbsp;</span>Izin Observasi</a></li>
                    <li><a href="/pengajuan-surat/izin-riset">
                    <span class="fa fa-envelope-open">&nbsp;</span>Izin Riset</a></li>
                    <li><a href="/pengajuan-surat/izin-kunjungan">
                    <span class="fa fa-envelope-open">&nbsp;</span>Izin Kunjungan</a></li>
                    <li><a href="/pengajuan-surat/praktik-mata-kuliah">
                    <span class="fa fa-envelope-open">&nbsp;</span>Praktik Mata Kuliah</a></li>
                    <li><a href="/pengajuan-surat/job-training">
                    <span class="fa fa-envelope-open">&nbsp;</span>Job Training</a></li>
                    <li><a href="/pengajuan-surat/ppm">
                    <span class="fa fa-envelope-open">&nbsp;</span>PPM</a></li>
                    <li><a href="/pengajuan-surat/surat-keterangan">
                    <span class="fa fa-envelope-open">&nbsp;</span>Surat Keterangan</a></li>
                    <li><a href="/pengajuan-surat/permohonan-munaqasah">
                    <span class="fa fa-envelope-open">&nbsp;</span>Munaqasah</a></li>
                    <li><a href="/pengajuan-surat/komprehensif">
                    <span class="fa fa-envelope-open">&nbsp;</span>Komprehensif</a></li>
				</ul>
			</li>
		</ul>
	</div><!--sidebar-->

	<div id="app" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">Pengajuan Surat</li>
				<li class="active">@yield('page-name')</li>
			</ol>
		</div><!--sitemap-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Pengajuan Surat @yield('page-name')</h1>
			</div>
		</div><!--header-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="alert bg-danger" role="alert"><em class="fas fa-exclamation-triangle">&nbsp;</em> Perhatian! Penulisan Instansi tujuan harus jelas. </em></div>
							<div>Isi form dibawah ini secara lengkap.</div>
							<div>
								<div class="panel-body">
									<form id="pengajuan-surat" class="form-horizontal" action="/pengajuan-surat/ajukan" method="post">
										<fieldset>
											@csrf
											@yield('content')
											<!-- Form actions -->
											<div class="form-group">
												<div class="col-md-6 widget-right">
													<button type="submit" class="btn btn-primary btn-md pull-right">Submit</button>
												</div>
												<div class="col-md-6 widget-right">
													<button type="reset" class="btn btn-danger btn-md pull-left">Reset</button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--body content-->
	</div>	<!--content-->
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/js/collapse.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/js/transition.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/moment@2.24.0/locale/id.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.47/build/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.8/dist/js/select2.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>
		
</body>
</html>