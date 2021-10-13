@EXTENDS('admin.main')
@section('title','Account')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Account User</h1>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Password</th>
                        <th>Avatar</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Password</th>
                        <th>Avatar</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($accounts as $account)
{{--                        @foreach($pass as $pas)--}}
                        <tr>
                            <td>{{$account->id}}</td>
                            <td>{{$account->name}}</td>
                            <td>{{$account->email}}</td>
                            <td>{{$account->phone}}</td>
                            <td>{{$account->address}}</td>
                            <td>{{$account->password}}</td>
                            <td style="max-width: 88px"><img src={{url('front/img/user/'.$account->avatar)}}  alt="" class="img-avt"></td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-sm" href="./account/edit/{{$account->id}}">
                                    <i class="fas fa-pencil-alt"></i>Edit
                                </a>
{{--                                <a class="btn btn-danger btn-sm" href="/account/delete/{{$account->id}}"><i class="fas fa-trash"></i>Delete--}}
{{--                                </a>--}}
                            </td>
                        </tr>
{{--                        @endforeach--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
