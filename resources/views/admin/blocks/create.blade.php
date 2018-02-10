@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Create Block</div>
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
                    {{ Form::open(['route' => 'adminBlocksStore', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            <div class="form-controls">
                                {{ Form::text('title', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', 'Content:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('content', null, ['class'=>'form-control summer']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('type', 'Type') !!}
                            <div class="form-controls">
                                <select name="type" id="type" class="form-control">
                                    <option value="3">Tài liệu</option>
                                    <option value="2">Hỗ trợ đối tác</option>
                                    <option value="1">Đại lý</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('link', 'Link:') !!}
                            <div class="form-controls">
                                {{ Form::text('link', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!}
                            <div class="form-controls">
                                <!-- {{ Form::file('image', null, ['class'=>'form-control']) }} -->
                                <input type="file" name="images[]" multiple>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language') !!}
                            <div class="form-controls">
                                <select name="language" id="language" class="form-control">
                                    <option value="en">Tiếng Anh</option>
                                    <option value="vi">Tiếng Việt</option>
                                </select>
                            </div>
                        </div>
                        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminBlocks')}}">Cancel</a>
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


        $('#content').summernote();
        $(document).on('change', '#type', function() {
            var id = $(this).val();
            var text = '';
            switch(id) {
                case '1':
                    text = window.location.origin + '/dai-ly/'
                    break;
                case '2':
                    text = window.location.origin + '/ho-tro-doi-tac/'
                    break;
                case '3':
                    text = window.location.origin + '/tai-lieu/'
                    break;
                default:
                    break;
            }
            $("#link").val(text);

        });

        var id = $('#type').val();
        var text = '';
        switch(id) {
            case '1':
                text = window.location.origin + '/dai-ly/'
                break;
            case '2':
                text = window.location.origin + '/ho-tro-doi-tac/'
                break;
            case '3':
                text = window.location.origin + '/tai-lieu/'
                break;
            default:
                break;
        }
        $("#link").val(text);
    </script>
@endsection