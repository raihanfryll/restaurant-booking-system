@extends('layouts.admin', ['title' => 'Change Password'])

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
                            <h3 class="card-title">Change your Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="card-body">

                                <!-- Current Password--->
                                <div class="form-group">
                                    <label for="update_password_current_password">Current Password</label>
                                    <input class="form-control" id="update_password_current_password"
                                        name="current_password" type="password" required="true">
                                </div>
                                <!---New Password---->
                                <div class="form-group">
                                    <label for="update_password_password">New Password</label>
                                    <input class="form-control " id="update_password_password" type="password"
                                        name="password" required="true">
                                </div>

                                <!--  Confrim Password---->
                                <div class="form-group">
                                    <label for="update_password_password_confirmation">Confirm Password</label>
                                    <input class="form-control " id="update_password_password_confirmation" type="password"
                                        name="password_confirmation" required="true">
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="change">Change</button>
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
