@extends('layout.layout')

@section('content')

<div class="py-5">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">{!! $daily->content !!}</div>
            </div>
        </div>
	</div>
</div>


@endsection