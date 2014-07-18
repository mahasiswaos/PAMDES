@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Golongan</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/golongan/proses_Add"); ?>" method="post">
               
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Golongan</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " placeholder="nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tarip</label>
                    <div class="col-sm-4">
                        <input type="number" name="tarif" class="form-control" placeholder="tarif">
                        <p style="color: red"> {{ $errors->first('tarif') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Biaya Administrasi</label>
                    <div class="col-sm-5">
                        <input type="number" name="biaya_administrasi" class="form-control" placeholder="biaya_administrasi">
                        <p style="color: red"> {{ $errors->first('biaya_administrasi') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Biaya Pemeliharaan</label>
                    <div class="col-sm-5">
                        <input type="number" name="biaya_pemeliharaan" class="form-control" placeholder="biaya_pemeliharaan">
                        <p style="color: red"> {{ $errors->first('biaya_pemeliharaan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i>save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop