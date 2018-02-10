@extends('layout.layout')

@section('content')
<div class="container">
	<div class="row py-5">
		<div class="col-md-12 ">
			<h3 class="text-primary" style="text-align: center;">{{$solution->name}}</h3>
			<div class="description"><?php echo $solution->description; ?></div>
		</div>

	</div>
</div>

<div class="py-5" style="padding-top: 0!important">
	<div class="container">
		<div style="background-color: #fe7d20; font-size: 1.5em; color: white; padding-left: 15px; text-align: center;"><b>GIẢI PHÁP KHÁC</b></div>
		<div style="margin-top: 30px;">
			@foreach($solutions as $key =>$solution)
			<p><a target="_blank"  href="{{ route('solutionDetail', ['id' => $solution->id]) }}">{{ $solution->name }}</a></p>
			@endforeach
		</div>
	</div>
</div>

@endsection