@EXTENDS('admin.main')
@section('title','Classes Details')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog Details</h1>
    {{--    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.--}}
    {{--        For more information about DataTables, please visit the--}}
    {{--        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>--}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content </th>
                        <th>Content 1</th>
                        <th style="min-width: 100px;">Content 2</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$blogs->id}}</td>
                        <td>{{$blogs->title}}</td>
                        <td>{{$blogs->content}}</td>
                        <td>{{$blogs->content_1}}</td>
                        <td>{{$blogs->content_2}}</td>
                        <td><img src={{url('front/img/blog/'.$blogs->image_1)}}  alt="" class="img"></td>
                        <td><img src={{url('front/img/blog/'.$blogs->image_2)}}  alt="" class="img"></td>

                        <td class="project-actions text-center">

                            <a class="btn btn-danger btn-sm" href="./account/delete/{{$blogs->id}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
