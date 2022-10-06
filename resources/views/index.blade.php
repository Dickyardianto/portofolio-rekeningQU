@extends('layout.template-dashboard.main')

@section('breadcrumb')
<h3 class="page-title mb-0 p-0">Inquiry Rekening</h3>
@endsection

@section('content')
    @php $count = 1 @endphp
    @if(isset($errData)) 
        <table class="table">
            <thead class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nomor Rekening</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Total Saldo</th>
            </thead>
        
            <tbody>
                <tr>
                    <td colspan="3" class="text-center">{{$errData}}</td>
                </tr>
            </tbody>
        </table>
    @else
    <table class="table">
        <thead class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Nomor Rekening</th>
                <th scope="col">Nama </th>
                <th scope="col">Total Saldo</th>
        </thead>
        @foreach($data->data as $dat)
        <tbody>
            <tr>
                <td>{{$count++}}</td>
                <td>{{$dat->norek}}</td>
                <td>{{$dat->name}}</td>
                <td>{{$dat->saldo}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    @endif
@endsection