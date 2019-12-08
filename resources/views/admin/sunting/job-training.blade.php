@extends('admin.sunting-surat.identitas')

@section('page-name', 'Izin Job Training')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="job-training">

<div class="form-group">
	<label class="col-md-3 control-label" for="instansi_penerima">Nama Instansi/Lembaga</label>
	<div class="col-md-6">
		<input class="form-control" id="instansi_penerima" name="instansi_penerima" placeholder="" value="{{ $surat->jobTrainingPPM->instansi_penerima }}" rows="5">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="alamat_instansi">Alamat Instansi</label>
	<div class="col-md-6">
		<textarea class="form-control" id="alamat_instansi" name="alamat_instansi" placeholder=""rows="5">{{ $surat->jobTrainingPPM->instansi_penerima }}</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="dosen_pembimbing">Dosen Pembimbing</label>
	<div class="col-md-6">
		<input class="form-control" id="dosen_pembimbing" name="dosen_pembimbing" placeholder="" value="{{ $surat->jobTrainingPPM->dosen_pembimbing }}" rows="5">
	</div>
</div>
@endsection