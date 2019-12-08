@extends('admin.sunting')

@section('page-name', 'Izin Kunjungan')

@section('body-content')
    <input type="hidden" name="tipe_surat" value="izin-kunjungan">

    <div class="form-group">
        <label class="col-md-3 control-label" for="instansi_penerima">Tujuan Observasi</label>
        <div class="col-md-6">
            <input id="instansi_penerima" name="instansi_penerima" type="text" placeholder="Nama Tujuan Observasi Ex: PT Jaya Abadi" value="{{ $surat->izinKunjungan->instansi_penerima }}" class="form-control">
        </div>
    </div><!--instansi penerima-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="alamat_instansi">Alamat Observasi</label>
        <div class="col-md-6">
            <textarea class="form-control" id="alamat_instansi" name="alamat_instansi" placeholder="Alamat Instansi Ex:Jl.A.H Nasution No.05, Kota Bandung" rows="5"> {{ $surat->izinKunjungan->alamat_instansi }}</textarea>
        </div>
    </div><!--alamat instansi-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="mata_kuliah">Mata Kuliah</label>
        <div class="col-md-6">
            <input id="mata_kuliah" name="mata_kuliah" type="text" placeholder="Mata Kuliah" value="{{ $surat->izinKunjungan->mata_kuliah }}" class="form-control">
        </div>
    </div><!--mata kuliah-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="dosen_pengampu">Dosen Pengampu</label>
        <div class="col-md-6">
            <input id="dosen_pengampu" name="dosen_pengampu" type="text" placeholder="Nama Dosen Pengampu Mata Kuliah" value="{{ $surat->izinKunjungan->dosen_pengampu }}" class="form-control">
        </div>
    </div><!--dosen pengampu-->

	<div class="form-group">
		<label class="col-md-3 control-label" for="program_studi">Program Studi</label>
		<div class="col-md-6">
		<select id="program_studi" name="program_studi" class="form-control selector" form="pengajuan-surat" data-width="100%">
			<option value="401" {{ ( $surat->izinKunjungan->program_studi == "401") ? 'selected' : '' }}>Bimbingan Konseling Islam</option>
			<option value="402" {{ ( $surat->izinKunjungan->program_studi == "402") ? 'selected' : '' }}>Komunikasi dan Penyiaran Islam</option>
			<option value="403" {{ ( $surat->izinKunjungan->program_studi == "403") ? 'selected' : '' }}>Manajemen Dakwah</option>
			<option value="404" {{ ( $surat->izinKunjungan->program_studi == "404") ? 'selected' : '' }}>Pengembangan Masyarakat Islam</option>
			<option value="405" {{ ( $surat->izinKunjungan->program_studi == "405") ? 'selected' : '' }}>Ilmu Komunikasi Jurnalistik</option>
			<option value="406" {{ ( $surat->izinKunjungan->program_studi == "406") ? 'selected' : '' }}>Ilmu Komunikasi Humas</option>
		</select>
		</div>
	</div><!--program studi-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="semester">Semester</label>
        <div class="col-md-6">
            <input id="semester" name="semester" type="text" placeholder="Isi dengan semester yang Anda jalani. Contoh: VIII" value="{{ $surat->izinKunjungan->semester }}" class="form-control">
        </div>
    </div><!--semester-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="kelas">Kelas</label>
        <div class="col-md-6">
            <input id="kelas" name="kelas" type="text" placeholder="Kelas Mata Kuliah" value="{{ $surat->izinKunjungan->kelas }}" class="form-control">
        </div>
    </div><!--kelas-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="tanggal_kunjungan">Tanggal</label>
        <div class="col-md-6">
            <div class="input-group date" data-provide="datepicker">
                <div class="input-group-addon">
                    <span class="fas fa-th"></span>
                </div>
                <input id="tanggal_kunjungan" type="text" class="form-control date-edit" name="tanggal_kunjungan" value="{{ $surat->izinKunjungan->tanggal_kunjungan }}">
            </div>
        </div>
    </div><!--tanggal kunjungan-->

    <div class="form-group">
        <label class="col-md-3 control-label" for="waktu_kunjungan">Jam</label>
        <div class="col-md-6">
            <input id="waktu_kunjungan" name="waktu_kunjungan" type="text" placeholder="Ex : 17:00 WIB" value="{{ $surat->izinKunjungan->waktu_kunjungan }}" class="form-control">
        </div>
    </div><!--waktu kunjungan-->
@endsection