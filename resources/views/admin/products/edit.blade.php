@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Update Product</div>
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
                    {{ Form::open(['route' => ['adminProductsUpdate', $product->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $product->name, ['class'=>'form-control']) }}
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
                                    <option value="3" {{ $product->status == 3 ? 'selected' : '' }} >Còn hàng</option>
                                    <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>Đặt hàng</option>
                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Hết hàng</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id', 'Category') !!}
                            <div class="form-controls">
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    {{ $category }}
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sanphambanchay', 'San Pham Ban Chay:') !!}
                            <div class="form-controls">
                                {{ Form::checkbox('sanphambanchay', $product->sanphambanchay, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!} 
                            <button type="button" id="remove-image">X</button>
                            <img class="img-responsive img-thumbnail" id="old-image" src="{{ asset('upload/products/' . $product->image) }}">
                            <div class="form-controls">
                                {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', $product->description, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('price', 'Price:') !!}
                            <div class="form-controls">
                                {{ Form::text('price', $product->price, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('quantity', 'Quantity:') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', $product->quantity, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language') !!}
                            <div class="form-controls">
                                {{-- {{ $block->language == 'vi' ? 'Tiếng Việt' : 'Tiếng Anh' }} --}}
                                @if($product->language == 'vi')
                                    Tiếng Việt <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                @elseif ($product->language == 'en')
                                    Tiếng Anh <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                @endif
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminArticles')}}">Cancel</a>
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
