@extends('layout.layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-5"> --}}
                    {{-- <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="{{ asset('upload/youknows/'.$youknow->image) }}"> </div> --}}

                <div class="col-md-7">
                    <h2 class="text-primary pt-3">{{ $youknow->title }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
                <div class="col-md-12 description">{!! $youknow->content !!} </div>
        </div>
    </div>
@endsection