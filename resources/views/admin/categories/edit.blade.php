@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Update Category</div>
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
                    {{ Form::open(['route' => ['adminCategoriesUpdate', $categories->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $categories->name, ['class'=>'form-control']) }}
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
                                {{ Form::text('slug', $categories->slug, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sortable', 'Sortable:') !!}
                            <div class="form-controls">
                                {{ Form::text('sortable', $categories->sortable, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('parent_id', 'Parent:') !!}
                            <div class="form-controls">
                                {!! Form::select('parent_id', $category, null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language') !!}
                            <div class="form-controls">
                                {{-- {{ $block->language == 'vi' ? 'Tiếng Việt' : 'Tiếng Anh' }} --}}
                                @if($categories->language == 'vi')
                                    Tiếng Việt <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                @elseif ($categories->language == 'en')
                                    Tiếng Anh <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                @endif
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminCategories')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
