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
                    List of news
                    <div class="pull-right"><a href="{{ route('adminNewsCreate') }}"><button class="btn btn-xs btn-primary">Create new news</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                {{-- <th>Content</th> --}}
                                <th>Image</th>
                                <th>Language</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $news)
                                <tr>
                                    <td>{{ $news->id }}</td>
                                    <td>{{ $news->title }}</td>
                                    {{-- <td>{!! $news->content !!}</td> --}}
                                    <td>{{ $news->image }}</td>
                                    <td>
                                        @if($news->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($news->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminNewsEdit', ['id' => $news->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminNewsDelete', ['id' => $news->id] ) }}" ><button class="btn btn-xs btn-danger" onclick="return confirm(&#039;Are you sure?&#039;)">Delete</button></a>
                                        @if ($news->trans_id == null)
                                        <a href="{{ route('adminNewsTrans', ['id' => $news->id, 'lang' => $news->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
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
