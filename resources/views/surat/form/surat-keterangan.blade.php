@extends('surat.form.identitas')

@section('page-name', 'Keterangan')

@section('detail-form')
<div class="form-group">
    <label class="col-md-3 control-label" for="keperluan">Untuk Keperluan</label>
    <div class="col-md-6">
        <textarea class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan Surat Ex: beasiswa" rows="5"></textarea>
    </div>
</div>
@endsection