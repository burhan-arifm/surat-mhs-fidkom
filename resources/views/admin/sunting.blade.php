@extends('layouts.admin')

@section('title', "Sunting Surat")

@section('content')
	<div class="row">
		<ol class="breadcrumb">
			<li>
				<a href="#"><em class="fa fa-home"></em></a>
			</li>
			<li class="active">Sunting Surat</li>
			<li class="active">@yield('name-page')</li>
		</ol>
	</div><!--sitemap-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sunting Surat @yield('name-page')</h1>
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
										@method('PATCH')
										<div class="form-group">
											<label class="col-md-3 control-label" for="nomor_surat">Nama</label>
											<div class="col-md-6">
												<input id="nomor_surat" name="nomor_surat" type="text" placeholder="Nomor Surat" value="{{ $surat->nomor_surat }}" class="form-control">
											</div>
										</div><!--nomor surat-->
										@yield('body-content')
										<!-- Form actions -->
										<div class="form-group">
											<div class="col-md-6 widget-right">
												<button type="submit" class="btn btn-primary btn-md pull-right">Simpan</button>
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
@endsection