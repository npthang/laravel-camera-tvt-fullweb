@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Update Category type</div>
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
                    {{ Form::open(['route' => ['adminCategory_typesUpdate', $category_type->id], 'method' => 'put']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $category_type->name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('slug', 'Slug:') !!}
                            <div class="form-controls">
                                {{ Form::text('slug', $category_type->slug, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sortable', 'Sortable:') !!}
                            <div class="form-controls">
                                {{ Form::text('sortable', $category_type->sortable, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminCategory_types')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
