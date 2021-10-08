@EXTENDS('admin.main')
@section('title','Order')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Order List</h1>
    {{--    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.--}}
    {{--        For more information about DataTables, please visit the--}}
    {{--        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>--}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Waiting for approval</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Class Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Create at</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Class Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Create at</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->class_name}}</td>
                            <td>{{$order->price}}</td>
                            <td style="width: 300px;max-height: 200px;"><img src={{url('front/img/classes/classes-details/'.$order->image)}}  alt="" class="img"></td>
                            <td>{{$order->created_at}}</td>
                            <td class="project-actions text-center">
                                <a class="btn btn-success btn-sm" href="./order/add/{{$order->id}}">
                                    <i class="fas fa-check"></i>Accept
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Approved</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Class Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Create at</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Class Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Create at</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($orderes as $orderss)
                        <tr>
                            <td>{{$orderss->id}}</td>
                            <td>{{$orderss->email}}</td>
                            <td>{{$orderss->class_name}}</td>
                            <td>{{$orderss->price}}</td>
                            <td style="width: 300px;max-height: 200px;"><img src={{url('front/img/classes/classes-details/'.$orderss->image)}}  alt="" class="img"></td>
                            <td>{{$orderss->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
