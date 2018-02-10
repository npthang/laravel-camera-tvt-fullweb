@extends('layout.layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-primary" style="text-align: center;">{{$article->name}}</h3>
                    {!! $article->body !!} 
                </div>
            </div>
        </div>
    </div>
    
@endsection