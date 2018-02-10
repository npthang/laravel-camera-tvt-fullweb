@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            @if(Session::has('success'))
                <div class="alert alert-success"><p><strong>{{ Session::get('success') }}</strong></p></div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Category Type
                    <div class="pull-right"><a href="{{ route('adminCategory_typesCreate') }}"><button class="btn btn-xs btn-primary">Create new Category type</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Sortable</th>
                                <th>Language</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category_types as $category_type)
                                <tr>
                                    <td>{{ $category_type->id }}</td>
                                    <td>{{ $category_type->name }}</td>
                                    <td>{{ $category_type->slug }}</td>
                                    <td>{{ $category_type->sortable }}</td>
                                    <td>
                                        @if($category_type->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($category_type->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminCategory_typesEdit', ['id' => $category_type->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminCategory_typesDelete', ['id' => $category_type->id] ) }}" ><button class="btn btn-xs btn-danger" onclick="return confirm(&#039;Are you sure?&#039;)">Delete</button></a>
                                        @if ($category_type->trans_id == null)
                                        <a href="{{ route('adminCategory_typesTrans', ['id' => $category_type->id, 'lang' => $category_type->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
