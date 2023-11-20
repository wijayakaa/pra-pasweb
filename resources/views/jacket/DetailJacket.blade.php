@dd($jacket)
@section('container')

{{$jacket -> nama}}
{{$jacket -> harga}}
{{$jacket -> stock}}
{{$jacket -> created_at}}

<a href="jacket/all">back</a>

@endsection