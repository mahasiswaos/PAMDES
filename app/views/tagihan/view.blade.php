@extends('layout.bootstrapadmin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Pelanggan</div>

    <!-- Table -->
    <div class="table-bordered">
        <table class="table">
            <tr class="panel-default">
                <th>Id</th>
                <th>Bulan</th>
                <th>Id Pelanggan</th>
                <th>Id Golongan</th>
                <th>Tarif</th>
                <th>Meter Awal</th>
                <th>Meter Akhir</th>
                <th>Pakai</th>
                <th>Tagihan Air</th>
                <th>Biaya Admin</th>
                <th>Biaya pem</th>
                <th>Total Tagihan</th>
                <th>Action</th>
            </tr>
            <?php $i = 1;
            foreach ($isi_tagihan as $value) {
                ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['bulan_tahun']; ?></td>
                    <td><?php echo $value['pelanggan_id']; ?></td>
                    <td><?php echo $value['golongan_id']; ?></td>
                    <td><?php echo $value['tarif']; ?></td>
                    <td><?php echo $value['meter_awal']; ?></td>
                    <td><?php echo $value['meter_akhir']; ?></td>
                    <td><?php echo $value['pakai']; ?></td>
                    <td><?php echo $value['tagihan_air']; ?></td>
                    <td><?php echo $value['biaya_administrasi']; ?></td>
                    <td><?php echo $value['biaya_pemeliharaan']; ?></td>
                    <td><?php echo $value['total_tagihan']; ?></td>
                    <td>
                        <div class="btn btn-group">
                            <a class="btn btn-small btn-danger" title="Delete" href="{{ URL::to('/tagihan/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                            <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/tagihan/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                        </div>

                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</div>
@stop