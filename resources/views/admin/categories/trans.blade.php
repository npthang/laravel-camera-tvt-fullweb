@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Translate Category</div>
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
                    {{ Form::open(['route' => ['adminCategoriesTranslate', $category->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $category->name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_types_id', 'Category Type') !!}
                            <div class="form-controls">
                                {!! Form::select('category_types_id', $category_types, null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('slug', 'Slug:') !!}
                            <div class="form-controls">
                                {{ Form::text('slug', $category->slug, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sortable', 'Sortable:') !!}
                            <div class="form-controls">
                                {{ Form::text('sortable', $category->sortable, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('parent_id', 'Parent:') !!}
                            <div class="form-controls">
                                {!! Form::select('parent_id', $category, null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language:') !!}
                            <div class="form-controls">
                                @if($category->language == 'en')
                                    Tiếng Việt <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                @elseif ($category->language == 'vi')
                                    Tiếng Anh <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                @endif
                                <input type="hidden" name="language" value="{{ $category->language == 'en' ? 'vi' : 'en' }}">
                            </div>
                        </div>
                        {{ Form::submit('Translate', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminCategories')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
