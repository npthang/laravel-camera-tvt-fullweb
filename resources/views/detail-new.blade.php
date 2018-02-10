@extends('layout.layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 description">
                    <h2 class="text-primary pt-3" style="text-align: center;">{{ $new->title }}</h2>
                    {!! $new->content !!} 
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-5" style="padding-top: 0!important">
        <div class="container">
            <div style="background-color: #fe7d20; font-size: 1.5em; color: white; padding-left: 15px; text-align: center;"><b>BÀI VIẾT LIÊN QUAN</b></div>
            <div style="margin-top: 30px;">
                @foreach($news as $key =>$new)
                <p><a target="_blank"  href="{{ route('newsDetail', ['slug' => $new->slug]) }}">{{ $new->title }}</a></p>
                @endforeach
            </div>
        </div>
    </div>
@endsection