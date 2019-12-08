@extends('layouts.form-surat')

@section('page-name', "@yield('page-name')")

@section('content')
	<div class="form-group">
		<label class="col-md-3 control-label" for="nama_mahasiswa">Nama</label>
		<div class="col-md-6">
			<input id="nama_mahasiswa" name="nama_mahasiswa" type="text" placeholder="Isi dengan nama lengkap Anda. Contoh: Asep Hidayat Ramdani" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="nim">NIM</label>
		<div class="col-md-6">
			<input id="nim" name="nim" type="text" placeholder="Isi dengan Nomor Induk Mahasiswa Anda. Contoh: 1234050123" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="program_studi">Program Studi</label>
		<div class="col-md-6">
		<select id="program_studi" name="program_studi" class="form-control selector" form="pengajuan-surat" data-width="100%">
			<option disabled selected hidden>Pilih Program Studi Anda</option>
			@foreach($program_studi as $prodi)
			<option value="{{ $prodi->kode_prodi }}">{{ $prodi->program_studi }}</option>
			@endforeach
		</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="semester">Semester</label>
		<div class="col-md-6">
			<input id="semester" name="semester" type="text" placeholder="Isi dengan semester yang Anda jalani. Contoh: VIII" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="tanggal_lahir">Tanggal Lahir</label>
		<div class="col-md-6">
			<div class="input-group date date-new" data-provide="datepicker">
				<div class="input-group-addon">
					<span class="fas fa-th"></span>
				</div>
				<input id="tanggal_lahir" type="text" class="form-control" name="tanggal_lahir">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="alamat">Alamat</label>
		<div class="col-md-6">
			<textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda tinggal sekarang" rows="5"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="no_telepon">Telepon</label>
		<div class="col-md-6">
			<input id="no_telepon" name="no_telepon" type="text" placeholder="Masukkan nomor telepon yang dapat dihubungi" class="form-control">
		</div>
	</div>
	@yield('detail-form')
@endsection