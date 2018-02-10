@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Update Block</div>
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
                    {{ Form::open(['route' => ['adminBlocksUpdate', $block->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            <div class="form-controls">
                                {{ Form::text('title', $block->title, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', 'Content:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('content', $block->content, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('type', 'Type') !!}
                            <div class="form-controls">
                                <select name="type" id="type" class="form-control">
                                    <option value="3" {{ $block->type == 3 ? 'selected' : '' }} >Tài liệu</option>
                                    <option value="2" {{ $block->type == 2 ? 'selected' : '' }}>Hỗ trợ đối tác</option>
                                    <option value="1" {{ $block->type == 1 ? 'selected' : '' }}>Đại lý</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('link', 'Link:') !!}
                            <div class="form-controls">
                                {{ Form::text('link', $block->link, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!} 
                            <button type="button" id="remove-image">X</button>
                            <div id="old-image">
                                @if($block->image)
                                    @foreach($block->image as $img)
                                    <img class="img-responsive img-thumbnail" src="{{ asset('upload/blocks/' . $img) }}">
                                    @endforeach
                                @endif
                            </div>
                            
                            <div class="form-controls">
                                <input type="file" name="images[]" multiple>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language') !!}
                            <div class="form-controls">
                                {{-- {{ $block->language == 'vi' ? 'Tiếng Việt' : 'Tiếng Anh' }} --}}
                                @if($block->language == 'vi')
                                    Tiếng Việt <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                @elseif ($block->language == 'en')
                                    Tiếng Anh <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                @endif
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
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
        $("#image").hide();
        $('#remove-image').on('click', function() {
            $("#old-image").hide();
            $("#image").show();
        })
    </script>
@endsection
