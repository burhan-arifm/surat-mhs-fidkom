@extends('surat.form.identitas')

@section('page-name', 'Permohonan Ujian Munaqasah')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="permohonan-munaqasah">

<div class="form-group">
    <label class="col-md-3 control-label" for="judul_skripsi">Judul Skripsi</label>
    <div class="col-md-6">
        <input id="judul_skripsi" name="judul_skripsi" type="text" placeholder="Judul Skripsi Harus Jelas dan lengkap" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label" for="pembimbing_1">Pembimbing 1</label>
    <div class="col-md-6">
        <input id="pembimbing_1" name="pembimbing_1" type="text" placeholder="Nama Pembimbing harus dengan gelar" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label" for="pembimbing_2">Pembimbing 2</label>
    <div class="col-md-6">
        <input id="pembimbing_2" name="pembimbing_2" type="text" placeholder="Nama Pembimbing harus dengan gelar" class="form-control">
    </div>
</div>
@endsection