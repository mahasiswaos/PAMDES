@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Input Data Pelanggan </div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/pelanggan/proses_Add"); ?>" method="post">
                 
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control" placeholder="nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control" placeholder="alamat">
                        <p style="color: red"> {{ $errors->first('alamat') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">No.Hp</label>
                    <div class="col-sm-4">
                        <input type="text" name="no_hp" class="form-control" placeholder="no_hp">
                        <p style="color: red"> {{ $errors->first('no_hp') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Golongan ID</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="golongan_id">
                            <option value="" disabled="" selected="">pilih golongan_id...!</option>
                            <?php foreach ($isi_golongan as $value) {?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->id ?></option>
                            <?php } ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('golongan_id') }} </p>
                    </div>
                </div>
                              
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop