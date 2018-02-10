@extends('layout.layout')

@section('content')
    <div class="py-5">
        <div class="container">
            @foreach($youknows as $youknow)
                <div class="row">
                    {{-- <div class="col-md-5">
                        <a target="_blank"  href="#"><img class="img-fluid d-block mb-4 w-100 img-thumbnail"
                                                            src="{{ asset('upload/news/'.$youknow->image) }}"></a>
                    </div> --}}
                    <div class="col-md-12">
                        <h2 class="text-primary pt-3"><a target="_blank"  href="{{ route('youknowsDetail', $youknow->id) }}">{{ $youknow->title }}</a></h2>
                        <div class="">{!! $youknow->description !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
