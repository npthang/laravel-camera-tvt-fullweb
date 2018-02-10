@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Translate Article</div>
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
                    {{ Form::open(['route' => ['adminArticlesTranslate', $article->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $article->name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!} 
                            <button type="button" id="remove-image">X</button>
                            <img class="img-responsive img-thumbnail" id="old-image" width="304" src="{{ asset('upload/articles/' . $article->image) }}">
                            <div class="form-controls">
                                {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>
                            <input type="hidden" name="image-old" value="{{ $article->image }}">
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', $article->description, ['class'=>'summernote form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Body:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('body', $article->body, ['class'=>'summernote form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language:') !!}
                            <div class="form-controls">
                                {{-- {{ $block->language == 'en' ? 'Tiếng Việt' : 'Tiếng Anh' }} --}}
                                @if($article->language == 'en')
                                    Tiếng Việt <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                @elseif ($article->language == 'vi')
                                    Tiếng Anh <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                @endif
                                <input type="hidden" name="language" value="{{ $article->language == 'en' ? 'vi' : 'en' }}">
                            </div>
                        </div>
                        {{ Form::submit('Translate', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminArticles')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script> 
        $("#image").hide();
        $('#remove-image').on('click', function() {
            $("#old-image").hide();
            $("#image").show();
        });

        function readURL(input) {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#old-image').attr('src', e.target.result);
            }

            $('#old-image').show();
            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#image").change(function() {
          readURL(this);
        });
    </script>

    <script> CKEDITOR.replace('body',{
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } ); </script>
    <script> CKEDITOR.replace('description',{
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } ); </script>

@endsection
