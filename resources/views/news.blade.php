@extends('layout.layout')

@section('content')
    <div class="py-5">
        <div class="container">
            @foreach($news as $new)
                <div class="row">
                    <div class="col-md-5">
                        <a target="_blank"  href="{{ route('newsDetail', ['slug' => $new->slug]) }}"><img class="img-fluid d-block mb-4 w-100 img-thumbnail"
                                                            src="{{ asset('upload/news/'.$new->image) }}"></a>
                    </div>
                    <div class="col-md-7">
                        <h2 class="text-primary pt-3"><a target="_blank"  href="{{ route('newsDetail', ['slug' => $new->slug]) }}">{{ $new->title }}</a></h2>
                        <div class="">{!! $new->description !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
