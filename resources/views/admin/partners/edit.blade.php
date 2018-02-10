@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">Update Partner</div>
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
                    {{ Form::open(['route' => ['adminPartnersUpdate', $partner->id], 'method' => 'put', 'files' => true]) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $partner->name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image:') !!}
                            <div class="form-controls">
                                {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('language', 'Language') !!}
                            <div class="form-controls">
                                <select name="language" id="language" class="form-control">
                                    <option value="en" {{ $partner->language == 'en' ? 'selected' : '' }} >Tiếng Anh</option>
                                    <option value="vi" {{ $partner->language == 'vi' ? 'selected' : '' }}>Tiếng Việt
                                    </option>
                                </select>
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminPartners')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
