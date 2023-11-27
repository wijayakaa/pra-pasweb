@extends('layout.main')

@section('container')
<div class="container mt-4">
    <h2>Detail Jacket</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Stock</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $jacket->nama }}</td>
                <td>{{ $jacket->stock }}</td>
                <td>{{ $jacket->created_at }}</td>
                <td>{{ $jacket->harga }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
