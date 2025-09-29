@extends('layouts.admin', ['title' => 'Create Subadmin'])

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
                            <h3 class="card-title">Fill the Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form name="subadmin" method="post" action="{{ route('addadmin') }}">
                            @method('POST')
                            @csrf

                            <div class="card-body">
                                <!-- Username-->
                                <div class="form-group">
                                    <label for="exampleInputusername">Username (used for login)</label>
                                    <input type="text" placeholder="Enter Sub-Admin Username" name="sadminusername"
                                        id="sadminusername" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$"
                                        title="Username must be alphanumeric 6 to 12 chars" onBlur="checkAvailability()"
                                        required>
                                    <span id="user-availability-status" style="font-size:14px;"></span>
                                </div>
                                <!-- Subadmin Full Name--->
                                <div class="form-group">
                                    <label for="exampleInputFullname">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        placeholder="Enter Sub-Admin Full Name" required>
                                </div>
                                <!-- Sub admin Email---->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="emailid" name="emailid"
                                        placeholder="Enter email" required>
                                </div>
                                <!-- Sub admin Contact Number---->
                                <div class="form-group">
                                    <label for="text">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber"
                                        placeholder="Enter email" pattern="[0-9]{10}" title="10 numeric characters only"
                                        required>
                                </div>

                                <!---Password--->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="inputpwd" name="inputpwd"
                                        placeholder="Password" required>
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
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
