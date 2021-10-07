@EXTENDS('admin.main')
@section('title','Account Edit')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h3 mb-2 text-gray-800">Account Edit</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-8" style="margin-right: auto; margin-left: auto">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Account</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <div class="error">
                                        <p @error('name') @enderror>
                                            @error('name')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                    </div>

                                    <input type="text" value="{{ $accountedit->name }}" id="inputName" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Email</label>
                                    <p @error('email') class="error" @enderror>
                                        @error('email')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $accountedit->email }}" id="inputName" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Phone</label>
                                    <p @error('phone') class="error" @enderror>
                                        @error('phone')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $accountedit->phone }}" id="inputCate" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Address</label>
                                    <p @error('address') class="error" @enderror>
                                        @error('address')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $accountedit->address }}" id="inputCate" class="form-control" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Password</label>
                                    <p @error('password') class="error" @enderror>
                                        @error('password')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $accountedit->password }}" id="inputCate" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Avatar</label>
                                    <p @error('avatar') class="error" @enderror>
                                        @error('avatar')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="{{$accountedit->password}}" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="avatar">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-8" style="margin-top: 30px;margin-right: auto; margin-left: auto">
                        <a href="" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Update</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

