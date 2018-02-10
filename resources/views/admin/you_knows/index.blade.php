@extends('admin.layout.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" style="float: right;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Co The Ban Chua Biet
                    <div class="pull-right"><a href="{{ route('adminYou_knowsCreate') }}"><button class="btn btn-xs btn-primary">Create Co The Ban Chua Biet</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Content</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($youknows as $you_know)
                                <tr>
                                    <td>{{ $you_know->id }}</td>
                                    <td>{{ $you_know->title }}</td>
                                    <td>{!! $you_know->content !!}</td>
                                    <td>
                                        @if($you_know->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($you_know->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminYou_knowsEdit', ['id' => $you_know->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminYou_knowsDelete', ['id' => $you_know->id] ) }}" ><button class="btn btn-xs btn-danger">Delete</button></a>
                                        @if ($you_know->trans_id == null)
                                        <a href="{{ route('adminYou_knowsTrans', ['id' => $you_know->id, 'lang' => $you_know->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
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
