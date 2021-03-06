@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Translate Solution</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ Form::open(['route' => ['adminSolutionsTranslate', $solution->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $solution->name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!} 
                            <button type="button" id="remove-image">X</button>
                            <img class="img-responsive img-thumbnail" id="old-image" src="{{ asset('upload/solutions/' . $solution->image) }}">
                            <div class="form-controls">
                                {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>
                            <input type="hidden" name="image-old" value="{{ $solution->image }}">
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', $solution->description, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('language', 'Language:') !!}
                            <div class="form-controls">
                                @if($solution->language == 'en')
                                    Tiếng Việt <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                @elseif ($solution->language == 'vi')
                                    Tiếng Anh <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                @endif
                                <input type="hidden" name="language" value="{{ $solution->language == 'en' ? 'vi' : 'en' }}">
                            </div>
                        </div>
                        {{ Form::submit('Translate', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminSolutions')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="{{ asset('js/summernote-upload.js') }}"></script>
    <script> 


        // $('#description').summernote();

    $("#image").hide();
    $('#remove-image').on('click', function() {
        $("#old-image").hide();
        $("#image").show();
    })

</script>

<script> CKEDITOR.replace('description',{
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } ); </script>
@endsection