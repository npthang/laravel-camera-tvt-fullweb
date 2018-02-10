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
                    List of projects
                    <div class="pull-right"><a href="{{ route('adminProjectsCreate') }}"><button class="btn btn-xs btn-primary">Create new project</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Language</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->image }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->address }}</td>
                                    <td>
                                        @if($project->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($project->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminProjectsEdit', ['id' => $project->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminProjectsDelete', ['id' => $project->id] ) }}" ><button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
                                        @if ($project->trans_id == null)
                                        <a href="{{ route('adminProjectsTrans', ['id' => $project->id, 'lang' => $project->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
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
