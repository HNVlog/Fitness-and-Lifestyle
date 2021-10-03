@EXTENDS('admin.main')
@section('title','BLog')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
    {{--    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.--}}
    {{--        For more information about DataTables, please visit the--}}
    {{--        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>--}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                    <div class="col-sm-12 col-md-6"><h3 class="m-0 font-weight-bold text-primary">Table</h3></div>
                    <div class="col-sm-12 col-md-5"><a class="btn btn-success btn-sm float-right" href="./blog/add"><i class="fas fa-plus"></i> Create New</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>SubTitle</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>SubTitle</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->subtitle}}</td>
                            <td>{{$blog->category}}</td>
                            <td style="max-width: 300px"><img src={{url('front/img/blog/'.$blog->image)}}  alt="" class="img-blog"></td>

                            <td class="project-actions text-center" style="min-width: 250px">
                                <a class="btn btn-primary btn-sm" href="./blog/{{$blog->id}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="./blog/delete/{{$blog->id}}">
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
