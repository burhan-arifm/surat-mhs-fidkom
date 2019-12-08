@extends('admin.sunting')

@section('title', 'Izin Kunjungan')

@section('page-title', 'Izin Kunjungan')

@section('body-content')
<input type="hidden" name="tipe_surat" value="izin-kunjungan">
<fieldset>
    <div class="form-group">
        <label class="col-md-3 control-label" for="instansi_penerima">Tujuan Observasi</label>
        <div class="col-md-6">
            <input id="instansi_penerima" name="instansi_penerima" type="text" placeholder="Nama Tujuan Observasi Ex: PT Jaya Abadi" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="alamat_instansi">Alamat Observasi</label>
        <div class="col-md-6">
            <textarea class="form-control" id="alamat_instansi" name="alamat_instansi" placeholder="Alamat Instansi Ex:Jl.A.H Nasution No.05, Kota Bandung" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="mata_kuliah">Mata Kuliah</label>
        <div class="col-md-6">
            <input id="mata_kuliah" name="mata_kuliah" type="text" placeholder="Mata Kuliah" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="dosen_pengampu">Dosen Pengampu</label>
        <div class="col-md-6">
            <input id="dosen_pengampu" name="dosen_pengampu" type="text" placeholder="Nama Dosen Pengampu Mata Kuliah" class="form-control">
        </div>
    </div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="program_studi">Program Studi</label>
		<div class="col-md-6">
		<select id="program_studi" name="program_studi" class="form-control selector" form="pengajuan-surat" data-width="100%">
			<option disabled selected hidden>Pilih Program Studi Anda</option>
			<option value="401">Bimbingan Konseling Islam</option>
			<option value="402">Komunikasi dan Penyiaran Islam</option>
			<option value="403">Manajemen Dakwah</option>
			<option value="404">Pengembangan Masyarakat Islam</option>
			<option value="405">Ilmu Komunikasi Jurnalistik</option>
			<option value="406">Ilmu Komunikasi Humas</option>
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
        <label class="col-md-3 control-label" for="kelas">Kelas</label>
        <div class="col-md-6">
            <input id="kelas" name="kelas" type="text" placeholder="Kelas Mata Kuliah" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="tanggal_kunjungan">Tanggal</label>
        <div class="col-md-6">
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input type="text" class="form-control datepicker" name="tanggal_kunjungan">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="waktu_kunjungan">Jam</label>
        <div class="col-md-6">
            <input id="waktu_kunjungan" name="waktu_kunjungan" type="text" placeholder="Ex : 17:00 WIB" class="form-control">
        </div>
    </div>
@endsection