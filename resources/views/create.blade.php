@extends('layout.template-dashboard.main')

@section('breadcrumb')
<h3 class="page-title mb-0 p-0">Pembukaan Rekening QU</h3>
@endsection

@section('content')
@if(isset($errData))
<div class="col-md">
    <p>{{$errData}}</p>
</div>
@else
<div class="col-md-4">
    <form>
            <div class="mb-3">
                <label for="productCode" class="form-label">Jenis Produk</label>
                <select class="form-select" id="productCode" name="productCode">
                @foreach($data->data as $dat)
                    <option value="@php echo $dat->kodeProduk @endphp">@php echo $dat->namaProduk @endphp</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="productCode" class="form-label">Tujuan Buka Rekening</label>
                <select class="form-select" id="productCode" name="productCode">
                @foreach($dataTujuanBurek->data as $dat)
                    <option value="@php echo $dat->kodeBurek @endphp">@php echo $dat->tujuanBurek @endphp</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nopen" class="form-label">No Pendaftaran</label>
                <input type="text" class="form-control" id="nopen">
            </div>
            <button type="submit" class="btn btn-primary">Cek Nomor Pendaftaran</button>
            <div class="mt-3 mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap">
            </div>
            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir">
            </div>
            <div class="mt-3 mb-3">
                <label for="namaIbu" class="form-label">Nama Ibu Kandung</label>
                <input type="text" class="form-control" id="namaIbu">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endif
@endsection
