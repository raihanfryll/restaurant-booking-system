@extends('layouts.admin', ['title' => 'B/w Dates Booking Report'])

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
                            <h3 class="card-title">B/w Dates Booking Report</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('bwdates') }}" name="bwdatesreport">
                            @csrf
                            <div class="card-body">

                                <!-- From Date--->
                                <div class="form-group">
                                    <label for="fdate">From Date</label>
                                    <input class="form-control" id="fdate" name="fdate" type="date"
                                        required="true">
                                </div>
                                <!---To Date---->
                                <div class="form-group">
                                    <label for="tdate">To Date</label>
                                    <input class="form-control " id="tdate" type="date" name="tdate"
                                        required="true">
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
