@extends('surat.form.identitas')

@section('page-name', 'Izin Praktik Mata Kuliah')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="praktik-mata-kuliah">

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
@endsection