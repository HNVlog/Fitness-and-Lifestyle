@EXTENDS('admin.main')
@section('title','Blog Edit')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h3 mb-2 text-gray-800">Blog Edit</h1>
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

                                    <input type="text" value="{{ $blogedit->title }}" id="inputName" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">SubTitle</label>
                                    <p @error('subtitle') class="error" @enderror>
                                        @error('subtitle')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $blogedit->subtitle }}" id="inputName" class="form-control" name="subtitle">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Category</label>
                                    <p @error('category') class="error" @enderror>
                                        @error('category')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $blogedit->category }}" id="inputCate" class="form-control" name="category">
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
                                            <input value="" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputCate">Content</label>
                                    <p @error('content') class="error" @enderror>
                                        @error('content')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $blogedit->content }}" id="inputCate" class="form-control" name="content">
                                </div>

                                <div class="form-group">
                                    <label for="inputCate">Content 1</label>
                                    <p @error('content_1') class="error" @enderror>
                                        @error('content_1')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $blogedit->content_1 }}" id="inputCate" class="form-control" name="content_1">
                                </div>

                                <div class="form-group">
                                    <label for="inputCate">Content 2</label>
                                    <p @error('content_2') class="error" @enderror>
                                        @error('content_2')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $blogedit->content_2 }}" id="inputCate" class="form-control" name="content_2">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image 1</label>
                                    <p @error('image_1') class="error" @enderror>
                                        @error('image_1')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="image_1">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image 2</label>
                                    <p @error('image_2') class="error" @enderror>
                                        @error('image_2')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="image_2">
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

