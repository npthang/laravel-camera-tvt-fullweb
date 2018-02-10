@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Create Product</div>

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
                    {{ Form::open(['route' => 'adminProductsStore', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('kind', 'Kind') !!}
                            <div class="form-controls">
                                <select name="kind" id="kind" class="form-control">
                                    <option value="2">Fake</option>
                                    <option value="1">No.1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status') !!}
                            <div class="form-controls">
                                <select name="status" id="status" class="form-control">
                                    <option value="3">Còn hàng</option>
                                    <option value="2">Đặt hàng</option>
                                    <option value="1">Hết hàng</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id', 'Category') !!}
                            <div class="form-controls">
                                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sanphambanchay', 'San Pham Ban Chay:') !!}
                            <div class="form-controls">
                                {{ Form::checkbox('sanphambanchay', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!}
                            <div class="form-controls">
                                {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('price', 'Price:') !!}
                            <div class="form-controls">
                                {{ Form::text('price', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('quantity', 'Quantity:') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', 1, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('page_title', 'Page Title:') !!}
                            <div class="form-controls">
                                {{ Form::text('page_title', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('description_seo', 'Description SEO:') !!}
                            <div class="form-controls">
                                {{ Form::text('description_seo', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('keyword', 'Keyword:') !!}
                            <div class="form-controls">
                                {{ Form::text('keyword', null, ['class'=>'form-control']) }}
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
                        <a href="{{ route('adminProducts')}}">Cancel</a>
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
  
    <script> CKEDITOR.replace('description',{
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } ); </script>
@endsection
