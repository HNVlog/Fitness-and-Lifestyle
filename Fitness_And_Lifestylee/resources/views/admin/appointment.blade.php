@EXTENDS('admin.main')
@section('title','Support')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Support</h1>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Classes</th>
                        <th>Message</th>
                        <th>Create at</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Classes</th>
                        <th>Message</th>
                        <th>Create at</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($apps as $appes)
                        <tr>
                            <td>{{$appes->id}}</td>
                            <td>{{$appes->name}}</td>
                            <td>{{$appes->email}}</td>
                            <td>{{$appes->phone}}</td>
                            <td>{{$appes->classes}}</td>
                            <td>{{$appes->message}}</td>
                            <td>{{$appes->created_at}}</td>
                            <td class="project-actions text-center">
                                <a class="btn btn-success btn-sm" href="./support/answer/{{$appes->id}}">
                                    <i class="fas fa-share"></i>Answer
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Classes</th>
                        <th>Message</th>
                        <th>Answer</th>
                        <th>Create at</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Classes</th>
                        <th>Message</th>
                        <th>Answer</th>
                        <th>Create at</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($app as $appss)
                        <tr>
                            <td>{{$appss->id}}</td>
                            <td>{{$appss->name}}</td>
                            <td>{{$appss->email}}</td>
                            <td>{{$appss->phone}}</td>
                            <td>{{$appss->classes}}</td>
                            <td>{{$appss->message}}</td>
                            <td>{!! $appss->answer !!}</td>
                            <td>{{$appss->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
