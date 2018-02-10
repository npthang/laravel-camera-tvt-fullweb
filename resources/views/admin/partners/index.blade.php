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
                    List of partners
                    <div class="pull-right"><a href="{{ route('adminPartnersCreate') }}"><button class="btn btn-xs btn-primary">Create new partner</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Language</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($partners as $partner)
                                <tr>
                                    <td>{{ $partner->id }}</td>
                                    <td>{{ $partner->name }}</td>
                                    <td>{{ $partner->image }}</td>
                                    <td>
                                        @if($partner->language == 'vi')
                                            Tiếng Việt
                                        @elseif ($partner->language == 'en')
                                            Tiếng Anh
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminPartnersEdit', ['id' => $partner->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminPartnersDelete', ['id' => $partner->id] ) }}" ><button class="btn btn-xs btn-danger" onclick="return confirm(&#039;Are you sure?&#039;)">Delete</button></a>
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
