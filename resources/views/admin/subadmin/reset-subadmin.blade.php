@extends('layouts.admin', ['title' => 'Reset Subadmin Password'])

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
                            <h3 class="card-title">Reset the Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form name="resetpassword" method="post" action="{{ route('subadmin.password', $id) }}">
                            @csrf
                            @method('put')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="update_password_current_password">Current Password</label>
                                    <input type="password" class="form-control" id="update_password_current_password"
                                        name="current_password" placeholder="Password" required>
                                </div>

                                <!---new Password--->
                                <div class="form-group">
                                    <label for="update_password_password">Password</label>
                                    <input type="password" class="form-control" id="update_password_password"
                                        name="password" placeholder="Password" required>
                                </div>
                                <!---Confirm Password--->
                                <div class="form-group">
                                    <label for="update_password_password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="update_password_password_confirmation"
                                        name="password_confirmation" placeholder="Confirm Password" required>
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="reset" id="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->



                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
