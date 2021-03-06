@extends('backend.master')
@section('content')

    <div class="content">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <a href="{{ route('product.create')}}">
                    <button class="btn btn-primary">CREATE PRODUCT</button></a>
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Simple Table</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="">

                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Id-Category</th>
                                        <th>Describes</th>
                                        <th>Statust</th>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)

                                            <tr>

                                                <td>{{$product->id}}</td>
                                                <td>{{$product->image}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->id_category}}</td>
                                                <td>{{$product->describes}}</td>
                                                <td>{{$product->status}}</td>
                                                <td>
                                                    <a href="{{route('product.destroy',$product->id)}}" class="btn btn-danger" onclick="return confirm('B???n c?? mu???n x??a kh??ng?')">Delete</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-danger">Edit</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-12">--}}
{{--                    <div class="card card-plain">--}}
{{--                        <div class="card-header card-header-primary">--}}
{{--                            <h4 class="card-title mt-0"> Table on Plain Background</h4>--}}
{{--                            <p class="card-category"> Here is a subtitle for this table</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-hover">--}}
{{--                                    <thead class=" text-primary">--}}
{{--                                    <th>--}}
{{--                                        ID--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Image--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Name--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Price--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Id-Category--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Describes--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Statust--}}
{{--                                    </th>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}

{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
