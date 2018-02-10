@extends('layout.layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="{{ asset('upload/projects/'.$project->image) }}"> </div>

                <div class="col-md-7">
                    <h2 class="text-primary pt-3">{{ $project->name }}</h2>
                    <i class="">{!! $project->description !!}</i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">{!! $project->body !!} </div>
            </div>
        </div>
    </div>
    
@endsection