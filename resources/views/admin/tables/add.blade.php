@extends('layouts.admin', ['title' => 'Add Tables'])

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Table Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form name="addlawyer" method="post" enctype="multipart/form-data"
                            action="{{ route('table.store') }}">
                            @csrf
                            <div class="card-body">

                                <!--  Table No--->
                                <div class="form-group">
                                    <label for="exampleInputFullname">Table No</label>
                                    <input type="text" class="form-control" id="tableno" name="tableno"
                                        placeholder="Enter Table Number" required>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit"
                                        id="submit">Submit</button>
                                </div>

                            </div>
                            <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
