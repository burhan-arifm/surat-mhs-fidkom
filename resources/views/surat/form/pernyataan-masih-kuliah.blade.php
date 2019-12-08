@extends('surat.form.identitas')

@section('page-name', 'Pernyataan Masih Kuliah')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="masih-kuliah">
<div class="form-group">
	<label class="col-md-3 control-label" for="nama_orang_tua">Nama Orang Tua</label>
	<div class="col-md-6">
		<input id="nama_orang_tua" name="nama_orang_tua" type="text" placeholder="Isi dengan nama lengkap orang tua Anda beserta gelar" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="nip_orang_tua">NIP Orang Tua</label>
	<div class="col-md-6">
		<input id="nip_orang_tua" name="nip_orang_tua" type="text" placeholder="Isi dengan nomor induk pegawai orang tua Anda" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="pangkat_golongan">Pangkat/Golongan</label>
	<div class="col-md-6">
		<!-- <input id="pangkat_golongan" name="pangkat_golongan" type="text" placeholder="Isi dengan pangkat dan golongan orang tua Anda. Contoh: Pembina Tk.I / IV/b " class="form-control"> -->
		<select id="pangkat_golongan" name="pangkat_golongan" class="form-control selector" form="pengajuan-surat" data-width="100%">
			<option value="Juru Muda - I/a">Juru Muda - I/a</option>
			<option value="Juru Muda Tk. I - I/b">Juru Muda Tk. I - I/b</option>
			<option value="Juru - I/c">Juru - I/c</option>
			<option value="Juru Tk. I - I/d">Juru Tk. I - I/d</option>
			<option value="Pengatur Muda - II/a">Pengatur Muda - II/a</option>
			<option value="Pengatur Muda Tk. I - II/b">Pengatur Muda Tk. I - II/b</option>
			<option value="Pengatur - II/c">Pengatur - II/c</option>
			<option value="Pengatur Tk. I - II/d">Pengatur Tk. I - II/d</option>
			<option value="Penata Muda - III/a">Penata Muda - III/a</option>
			<option value="Penata Muda Tk. I - III/b">Penata Muda Tk. I - III/b</option>
			<option value="Penata - III/c">Penata - III/c</option>
			<option value="Penata Tk. I - III/d">Penata Tk. I - III/d</option>
			<option value="Pembina - IV/a">Pembina - IV/a</option>
			<option value="Pembina Tk. I - IV/b">Pembina Tk. I - IV/b</option>
			<option value="Pembina Utama Muda - IV/c">Pembina Utama Muda - IV/c</option>
			<option value="Pembina Utama Madya - IV/d">Pembina Utama Madya - IV/d</option>
			<option value="Pembina Utama - IV/e">Pembina Utama - IV/e</option>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="nama_instansi">Instansi</label>
	<div class="col-md-6">
		<input class="form-control" id="nama_instansi" name="nama_instansi" placeholder="isi dengan nama instansi tenpat orang tua anda bekerja. Contoh: UIN Sunan Gunung Djati Bandung"></input>
	</div>
</div>
@endsection