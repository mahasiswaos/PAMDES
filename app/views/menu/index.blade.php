@extends('layout.bootstrapadmin.index')

@section('content')
@if (Session::has('message'))
	<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('message') }}
        </div>
        
@endif
<div class="jumbotron" >
    <h2>Sistem Informasi Perusahaan Air Minum Desa</h2>
     
    </div>

@stop