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
                    List of blocks
                    <div class="pull-right"><a href="{{ route('adminBlocksCreate') }}"><button class="btn btn-xs btn-primary">Create new block</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Language</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blocks as $block)
                                <tr>
                                    <td>{{ $block->id }}</td>
                                    <td>{{ $block->title }}</td>
                                    {{-- <td>{!! $block->content !!}</td> --}}
                                    <td>
                                        @if($block->type == 3)
                                            Tài liệu
                                        @elseif($block->type == 2)
                                            Hỗ trợ đối tác
                                        @elseif($block->type == 1)
                                            Đại lý
                                        @endif
                                    </td>
                                    <td>{{ $block->link }}</td>
                                    <td>
                                        @if($block->image)
                                        @foreach($block->image as $img)
                                            {{ $img }} <br>
                                        @endforeach()
                                        @endif
                                    </td>
                                    <td>
                                        @if($block->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($block->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminBlocksEdit', ['id' => $block->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminBlocksDelete', ['id' => $block->id] ) }}" ><button class="btn btn-xs btn-danger" onclick="return confirm(&#039;Are you sure?&#039;)">Delete</button></a>
                                        @if ($block->trans_id == null)
                                        <a href="{{ route('adminBlocksTrans', ['id' => $block->id, 'lang' => $block->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
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
