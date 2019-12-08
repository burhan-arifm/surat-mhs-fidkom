@extends('admin.sunting')

@section('page-name', "@yield('page-name')")

@section('body-content')
	<div class="form-group">
		<label class="col-md-3 control-label" for="nama_mahasiswa">Nama</label>
		<div class="col-md-6">
			<input id="nama_mahasiswa" name="nama_mahasiswa" type="text" placeholder="Isi dengan nama lengkap Anda. Contoh: Asep Hidayat Ramdani" value="{{ $surat->diajukanOleh->nama }}" class="form-control">
		</div>
	</div><!--nama-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="nim">NIM</label>
		<div class="col-md-6">
			<input id="nim" name="nim" type="text" placeholder="Isi dengan Nomor Induk Mahasiswa Anda. Contoh: 1234050123" value="{{ $surat->diajukanOleh->nim }}" class="form-control">
		</div>
	</div><!--nim-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="program_studi">Program Studi</label>
		<div class="col-md-6">
		<select id="program_studi" name="program_studi" class="form-control selector" form="pengajuan-surat" data-width="100%">
			<option value="401" {{ ( $surat->diajukanOleh->program_studi == "401") ? 'selected' : '' }}>Bimbingan Konseling Islam</option>
			<option value="402" {{ ( $surat->diajukanOleh->program_studi == "402") ? 'selected' : '' }}>Komunikasi dan Penyiaran Islam</option>
			<option value="403" {{ ( $surat->diajukanOleh->program_studi == "403") ? 'selected' : '' }}>Manajemen Dakwah</option>
			<option value="404" {{ ( $surat->diajukanOleh->program_studi == "404") ? 'selected' : '' }}>Pengembangan Masyarakat Islam</option>
			<option value="405" {{ ( $surat->diajukanOleh->program_studi == "405") ? 'selected' : '' }}>Ilmu Komunikasi Jurnalistik</option>
			<option value="406" {{ ( $surat->diajukanOleh->program_studi == "406") ? 'selected' : '' }}>Ilmu Komunikasi Humas</option>
		</select>
		</div>
	</div><!--program studi-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="semester">Semester</label>
		<div class="col-md-6">
			<input id="semester" name="semester" type="text" placeholder="Isi dengan semester yang Anda jalani. Contoh: VIII" value="{{ $surat->diajukanOleh->semester }}" class="form-control">
		</div>
	</div><!--semester-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="tanggal_lahir">Tanggal Lahir</label>
		<div class="col-md-6">
			<div class="input-group date" data-provide="datepicker">
				<div class="input-group-addon">
					<span class="fas fa-th"></span>
				</div>
				<input id="tanggal_lahir" type="text" class="form-control date-edit" name="tanggal_lahir" value="{{ $surat->diajukanOleh->tanggal_lahir }}">
			</div>
		</div>
	</div><!--tanggal lahir-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="alamat">Alamat</label>
		<div class="col-md-6">
			<textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda tinggal sekarang" rows="5">{{ $surat->diajukanOleh->alamat }}</textarea>
		</div>
	</div><!--alamat-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="no_telepon">Telepon</label>
		<div class="col-md-6">
			<input id="no_telepon" name="no_telepon" type="text" placeholder="Masukkan nomor telepon yang dapat dihubungi" value="{{ $surat->diajukanOleh->no_telepon }}" class="form-control">
		</div>
	</div><!--no telepon-->
	@yield('detail-form')
@endsection