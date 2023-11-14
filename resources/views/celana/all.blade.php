@extends("layout.main")
@section("container")
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<table class="table table-dark table-hover">
    @foreach($celana as $katok)
    <tr>
        <td>{{$katok["nama"]}}</td>
        <td>{{$katok["harga"]}}</td>
        <td>{{$katok["stock"]}}</td>
        <td>{{$katok["created_at"]}}</td>
        <td>
            <button type="button" class="btn btn-primary" href="/katok/DetailCelana">{{$katok-> id}} Detail</button>
            <button type="button" class="btn btn-warning" href="">Edit</button>
            <button type="button" class="btn btn-danger" href="">Delete</button>
        </tr>
    </td>
    @endforeach
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection