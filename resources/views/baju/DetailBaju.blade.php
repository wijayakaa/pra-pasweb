@dd($baju)
@section('container')

{{$baju -> nama}}
{{$baju -> harga}}
{{$baju -> stock}}
{{$baju -> created_at}}

<a href="baju/all">back</a>

@endsection