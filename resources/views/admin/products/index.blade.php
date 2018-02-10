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
                    List of products
                    <div class="pull-right"><a href="{{ route('adminProductsCreate') }}"><button class="btn btn-xs btn-primary">Create new product</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                {{-- <th>Kind</th> --}}
                                <th>Category</th>
                                {{-- <th>San Pham Ban Chay</th> --}}
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Language</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    {{-- <td>
                                        @if($product->kind == 2)
                                            Fake
                                        @elseif($product->kind == 1)
                                            No.1
                                        @endif
                                    </td> --}}
                                    @if (!empty($product->category))
                                    <td>{{ $product->category->name }}</td>
                                    @endif
                                    {{-- <td>{{ $product->sanphambanchay }}</td> --}}
                                    <td>{{ $product->image }}</td>
                                    <td>{!! str_limit($product->description, 100) !!}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        @if($product->status == 3)
                                            Còn hàng
                                        @elseif($product->status == 2)
                                            Đặt hàng
                                        @elseif($product->status == 1)
                                            Hết hàng
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->language == 'vi')
                                            <img style="height: 34px" src="{{ asset('img/home/vietnam.jpg') }}">
                                        @elseif ($product->language == 'en')
                                            <img style="height: 34px" src="{{ asset('img/home/english.jpg') }}">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('adminProductsEdit', ['id' => $product->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminProductsDelete', ['id' => $product->id] ) }}" ><button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
                                        @if ($product->trans_id == null)
                                        <a href="{{ route('adminProductsTrans', ['id' => $product->id, 'lang' => $product->language == 'en' ? 'vi' : 'en' ] ) }}" ><button class="btn btn-xs btn-success">Translate</button></a>
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
