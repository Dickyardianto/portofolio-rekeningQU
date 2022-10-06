@extends('layout.template-dashboard.main')

@section('breadcrumb')
<h3 class="page-title mb-0 p-0">Produk</h3>
@endsection


@section('content')
<div class="col-md-4">
    <form action="/product/addNewProduct" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="product-code" class="form-label">Kode Produk</label>
            <input type="text" class="form-control" id="productCode" name="productCode" value="{{ old('productCode') }}">
            @error('productCode')<span class="form-text text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="product-name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="productName" name="productName" value="{{ old('productName') }}">
            @error('productName')<span class="form-text text-danger">{{$message}}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
