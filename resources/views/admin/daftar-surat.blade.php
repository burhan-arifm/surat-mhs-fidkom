@extends('layouts.admin')

@section('title', "Daftar Pengajuan Surat")

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">Data Surat</li>
        </ol>
    </div><!--sitemap-->
    
    <div class="panel panel-container">
        <div class="row">
            <div> 
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding">
                        <em class="fa fa-5x fa-envelope-square color-blue"></em>
                        <div class="large">Data Pengajuan Surat</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div><!--page header-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="nama">Nama</label>
                                <div class="col-md-4">
                                    <input id="nama" name="nama" type="text" placeholder="Nama" class="form-control">
                                </div>
                                <label class="col-md-1 control-label" for="status">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>Open</option>
                                        <option>Done</option>
                                        <option>In Progress</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="nim">NIM</label>
                                <div class="col-md-4">
                                    <input id="nim" name="nim" type="text" placeholder="NIM" class="form-control">
                                </div>
                                <label class="col-md-1 control-label" for="tgl_surat">Tanggal</label>
                                <div class="col-md-4">
                                    <div class='input-group date'>
                                        <div class="input-group-addon">
                                            <span class="fas fa-th"></span>
                                        </div>
                                        <input placeholder="Masukan Tanggal Surat" type="text" class="form-control datepicker" name="tgl_surat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="no_surat">Nomor Surat</label>
                                <div class="col-md-4">
                                    <input id="no_surat" name="no_surat" type="text" placeholder="Nomor Surat" class="form-control">
                                </div>
                                <label class="col-md-1 control-label" for="status">Jenis</label>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>S-01</option>
                                        <option>S-02</option>
                                        <option>S-03</option>
                                        <option>S-04</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-md pull-right btn-primary"><em class="fa fa-search"></em>Cari</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-md pull-left btn-danger"><em class="fa fa-recycle"></em>Reset</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- /.panel-->
        </div>
    </div><!--panel filter-->
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <surat type='semua'></surat>
                    </div>
                </div>
            </div>
        </div>
    </div><!--tabel surat-->
@endsection