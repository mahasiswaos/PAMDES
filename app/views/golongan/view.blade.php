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
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Golongan</div>

    <!-- Table -->
    <div class="table-bordered">
        <table class="table">
            <tr class="panel-default">
                 <th>Id</th>
                <th>Nama</th>
                <th>Tarif</th>
                <th>Biaya administrasi</th>
                <th>Biaya pemeliharaan</th>
                <th>Action</th>
            </tr>
            <?php $i = 1;
            foreach ($isi as $value) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['tarif']; ?></td>
                    <td><?php echo $value['biaya_administrasi']; ?></td>
                    <td><?php echo $value['biaya_pemeliharaan']; ?></td>
                    <td>
                        <div class="btn btn-group">
                            <a class="btn btn-small btn-danger" title="Delete" href="{{ URL::to('/golongan/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                            <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/golongan/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
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