@extends('layout.bootstrapadmin.index')

@section('content')
<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-edit"></i> 
            Form Update Golongan 
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/golongan/update/". $isi->id); ?>" method="post">
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" value="<?php echo $isi->nama ?>" class="form-control ">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tarif</label>
                    <div class="col-sm-4">
                        <input type="text" name="tarif" value="<?php echo $isi->tarif ?>" class="form-control ">
                        <p style="color: red"> {{ $errors->first('tarif') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Biaya Administrasi</label>
                    <div class="col-sm-5">
                        <input type="text" name="biaya_administrasi" value="<?php echo $isi->biaya_administrasi ?>" class="form-control">
                        <p style="color: red"> {{ $errors->first('biaya_administrasi') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Biaya Pemeliharaan</label>
                    <div class="col-sm-5">
                        <input type="text" name="biaya_pemeliharaan" value="<?php echo $isi->biaya_pemeliharaan ?>" class="form-control">
                        <p style="color: red"> {{ $errors->first('biaya_pemeliharaan') }} </p>
                    </div>
                </div>
                       
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop