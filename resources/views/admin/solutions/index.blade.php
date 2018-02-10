@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of solutions
                    <div class="pull-right"><a href="{{ route('adminSolutionsCreate') }}"><button class="btn btn-xs btn-primary">Create new solution</button></a></div>
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
                            @foreach($solutions as $solution)
                                <tr>
                                    <td>{{ $solution->id }}</td>
                                    <td>{{ $solution->name }}</td>
                                    <td>{{ $solution->image }}</td>
                                    <td>
                                        @if($solution->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($solution->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminSolutionsEdit', ['id' => $solution->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminSolutionsDelete', ['id' => $solution->id] ) }}" ><button class="btn btn-xs btn-danger">Delete</button></a>
                                        @if ($solution->trans_id == null)
                                        <a href="{{ route('adminSolutionsTrans', ['id' => $solution->id, 'lang' => $solution->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
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
