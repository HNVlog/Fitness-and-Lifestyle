@EXTENDS('admin.main')
@section('title','Answer Support')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h3 mb-2 text-gray-800">Answer Support</h1>
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
                                <h3 class="card-title">Answer</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">To</label>
                                    <input type="text" value="{{ $answer->email }}" id="inputName" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="ckeditor">Answer</label>
                                    <div @error('answer') class="error" @enderror>
                                        @error('answer')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <textarea id="ckeditor" class="form-control" rows="3" name="answer"></textarea>
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
                        <button type="submit" class="btn btn-success float-right">Send</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

