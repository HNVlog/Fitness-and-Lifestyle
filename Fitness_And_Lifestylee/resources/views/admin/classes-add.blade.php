@EXTENDS('admin.main')
@section('title','Classes Add')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h3 mb-2 text-gray-800">Class Add</h1>
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
                                <h3 class="card-title">Class</h3>
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

                                    <input type="text" id="inputName" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="teacher_name">Teacher</label>
                                    <p @error('teacher_name') class="error" @enderror>
                                        @error('teacher_name')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" id="teacher_name" class="form-control" name="teacher_name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <p @error('price') class="error" @enderror>
                                        @error('price')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="number" id="price" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <p @error('level') class="error" @enderror>
                                        @error('level')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" id="level" class="form-control" name="level">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="study_date">Study date</label>
                                        <p @error('study_date') class="error" @enderror>
                                            @error('study_date')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="text" id="study_date" class="form-control" name="study_date">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="study_time">Study time</label>
                                        <p @error('study_time') class="error" @enderror>
                                            @error('study_time')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="text" id="study_time" class="form-control" name="study_time">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <p @error('tag') class="error" @enderror>
                                        @error('tag')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" id="tag" class="form-control" name="tag">
                                </div>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Class Detail</h3>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <p @error('avatar') class="error" @enderror>
                                        @error('avatar')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="avatar" {{--accept=".jpg, .png"--}} name="avatar">
                                        <label class="custom-file-label" for="avatar">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="path">Image Main</label>
                                    <p @error('path') class="error" @enderror>
                                        @error('path')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="path" {{--accept=".jpg, .png"--}} name="path">
                                        <label class="custom-file-label" for="path">Choose file</label>
                                    </div>
                                </div>

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

