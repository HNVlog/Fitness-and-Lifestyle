@EXTENDS('admin.main')
@section('title','Blog Add')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h3 mb-2 text-gray-800">Blog Add</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Blog</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Title</label>
                                    <div class="error">
                                        <p @error('title') @enderror>
                                            @error('title')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                    </div>

                                    <input type="text" id="inputName" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">SubTitle</label>
                                    <p @error('subtitle') class="error" @enderror>
                                        @error('subtitle')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" id="inputName" class="form-control" name="subtitle">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Category</label>
                                    <p @error('category') class="error" @enderror>
                                        @error('category')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" id="inputCate" class="form-control" name="category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <p @error('image') class="error" @enderror>
                                        @error('image')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input {{--value="{{\Illuminate\Support\Facades\Auth::user()->image}}"--}} type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Blog Detail</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ckeditor">Content</label>
                                    <p @error('content') class="error" @enderror>
                                        @error('content')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <textarea id="ckeditor" class="form-control" rows="3" name="content"></textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-top: 30px;">
                        <a href="./ad/blog/add" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Create new Project</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

