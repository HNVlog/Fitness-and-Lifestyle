@EXTENDS('admin.main')
@section('title','Classes')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Classes</h1>
    {{--    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.--}}
    {{--        For more information about DataTables, please visit the--}}
    {{--        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>--}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h3 class="m-0 font-weight-bold text-primary">Table</h3></div>
                <div class="col-sm-12 col-md-5"><a class="btn btn-success btn-sm float-right" href="./classes/add"><i class="fas fa-plus"></i> Create New</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Price</th>
                        <th>Level</th>
                        <th>Study date</th>
                        <th>Study Time</th>
                        <th>Tag</th>
                        <th class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Teacher</th>
                            <th>Price</th>
                            <th>Level</th>
                            <th>Study date</th>
                            <th>Study Time</th>
                            <th>Tag</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->teacher_name}}</td>
                            <td>${{$product->price}}</td>
                            <td>{{$product->level}}</td>
                            <td>{{$product->study_date}}</td>
                            <td>{{$product->study_time}}</td>
                            <td>{{$product->tag}}</td>

                            <td class="project-actions text-center" style="min-width: 250px;">
                                <a class="btn btn-primary btn-sm" href="./classes/{{$product->id}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="./classes/delete/{{$product->id}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
