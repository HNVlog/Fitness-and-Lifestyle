@EXTENDS('admin.main')
@section('title','Classes Edit')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h3 mb-2 text-gray-800">Classes Edit</h1>
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
                                <h3 class="card-title">Classes</h3>
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

                                    <input type="text" value="{{ $classesedit->name }}" id="inputName" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Teacher</label>
                                    <p @error('teacher_name') class="error" @enderror>
                                        @error('teacher_name')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $classesedit->teacher_name }}" id="inputName" class="form-control" name="teacher_name">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Price</label>
                                    <p @error('price') class="error" @enderror>
                                        @error('price')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $classesedit->price }}" id="inputCate" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Level</label>
                                    <p @error('level') class="error" @enderror>
                                        @error('level')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $classesedit->level }}" id="inputCate" class="form-control" name="level">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Study Date</label>
                                    <p @error('study_date') class="error" @enderror>
                                        @error('study_date')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $classesedit->study_date }}" id="inputCate" class="form-control" name="study_date">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Study Time</label>
                                    <p @error('study_time') class="error" @enderror>
                                        @error('study_time')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $classesedit->study_time }}" id="inputCate" class="form-control" name="study_time">
                                </div>
                                <div class="form-group">
                                    <label for="inputCate">Tag</label>
                                    <p @error('tag') class="error" @enderror>
                                        @error('tag')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <input type="text" value="{{ $classesedit->tag }}" id="inputCate" class="form-control" name="tag">
                                </div>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Classes-Detail</h3>
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

                                    <input type="text" value="{{ $classesedit->name }}" id="inputName" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Avatar</label>
                                    <p @error('avatar') class="error" @enderror>
                                        @error('avatar')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="avatar">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image Main</label>
                                    <p @error('path') class="error" @enderror>
                                        @error('path')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="{{ $img->path }}" type="file" class="custom-file-input" id="exampleInputFile" accept=".jpg, .png" name="path">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ckeditor">Content</label>
                                    <p @error('content') class="error" @enderror>
                                        @error('content')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                    <textarea id="ckeditor" class="form-control" rows="3" name="content">{!! $productes->content !!}</textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" >
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

