@extends('layouts.admin', ['title' => 'My Profile'])

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
                            <h3 class="card-title">Update the Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form name="subadmin" method="post" action="{{ route('profil_update', $user->id) }}">
                            @method('POST')
                            @csrf
                            <div class="card-body">
                                <!-- Username-->
                                <div class="form-group">
                                    <label for="exampleInputusername">Username (used for login)</label>
                                    <input type="text" name="sadminusername" id="sadminusername" class="form-control"
                                        value="{{ $user->username }}" readonly>
                                </div>
                                <!-- admin Full Name--->
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $user->name }}" placeholder="Enter Sub-Admin Full Name" required>
                                </div>
                                <!--  admin Email---->
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email" required value="{{ $user->email }}">
                                </div>
                                <!--  admin Contact Number---->
                                <div class="form-group">
                                    <label for="mobilenumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber"
                                        placeholder="Enter email" pattern="[0-9]{10}" title="10 numeric characters only"
                                        maxlength="10" required value="{{ $user->MobileNumber }}">
                                </div>

                                <!--  admin Profile Reg. Date---->
                                <div class="form-group">
                                    <label for="text">Registration Date</label>
                                    <input type="text" class="form-control" id="regdate" name="regdate" required
                                        value="{{ $user->created_at }}" readonly>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
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
