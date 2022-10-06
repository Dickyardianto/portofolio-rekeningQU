@extends('layout.template-dashboard.main')

@section('breadcrumb')
<h3 class="page-title mb-0 p-0">Produk</h3>
@endsection


@section('content')
@if(session('success'))
    <div id="hideMe" class='col-md-12'>
        <div class='alert alert-success' role='alert'>
        {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div id="hideMe" class='col-md-12'>
        <div class='alert alert-danger' role='alert'>
        {{ session('error') }}
        </div>
    </div>
@endif
<div class="row">
    <div class="col-md-12" style="padding-right:0px; padding-bottom:5px">
        <a href="{{url('/product/create')}}" class="btn btn-primary float-end">Tambah</a>
    </div>
</div>
<div class="row">
@php $count = 1 @endphp
    <table class="table">
        <thead class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Kode Produk</th>
                <th scope="col">Nama Produk</th>
        </thead>
        @foreach($data->data as $dat)
        <tbody>
            <tr>
                <td>{{$count++}}</td>
                <td>{{$dat->kodeProduk}}</td>
                <td>{{$dat->namaProduk}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
