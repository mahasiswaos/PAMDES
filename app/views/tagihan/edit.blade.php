@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Kegiatan</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/tagihan/update/". $isi_tagihan->id); ?>" method="post">
               
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Bulan Tahun</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi_tagihan->bulan_tahun; ?>"  name="bulan_tahun" class="form-control " placeholder="name">
                        <p style="color: red"> {{ $errors->first('bulan_tahun') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Id Pelanggan</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi_pelanggan->id; ?>" readonly="" name="pelanggan_id" class="form-control">
                    <p style="color: red"> {{ $errors->first('pelanggan_id') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Id Golongan</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi_tagihan->golongan_id; ?>"  name="golongan_id" class="form-control " placeholder="name">
                        <p style="color: red"> {{ $errors->first('golongan_id') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tarif</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi_tagihan->tarif; ?>" name="tarif" class="form-control " placeholder="Keterangan">
                        <p style="color: red"> {{ $errors->first('tarif') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Meter Awal</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi_tagihan->meter_awal; ?>" name="meter_awal" class="form-control" placeholder="Waktu Mulai">
                        <p style="color: red"> {{ $errors->first('meter_awal') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mater Akhir</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi_tagihan->meter_akhir; ?>" name="meter_akhir" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('meter_akhir') }} </p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Pakai</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi_tagihan->pakai; ?>" name="pakai" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('pakai') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tagihan Air</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi_tagihan->tagihan_air; ?>" name="tagihan_air" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('tagihan_air') }} </p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biaya Administrasi</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi_tagihan->biaya_administrasi; ?>" name="biaya_administrasi" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('biaya_administrasi') }} </p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biaya Pemeliharaan</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi_tagihan->biaya_pemeliharaan; ?>" name="biaya_pemeliharaan" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('biaya_pemeliharaan') }} </p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Total Tagihan</label>
                    <div class="col-sm-5">
                        <input type="time" value="<?php echo $isi_tagihan->total_tagihan; ?>" name="total_tagihan" class="form-control" placeholder="Waktu Berahir">
                        <p style="color: red"> {{ $errors->first('total_tagihan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop