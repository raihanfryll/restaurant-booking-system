@extends('layouts.admin', ['title' => 'New Bookings'])

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Bookings Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Bookings No</th>
                                            <th>Name</th>
                                            <th>Email Id</th>
                                            <th>Mobile No</th>
                                            <th>No. Adults</th>
                                            <th>No of Childrens</th>
                                            <th>Boking Date/Time</th>
                                            <th>Posting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $no = 1;
                                        @endphp

                                        @foreach ($newBooking as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->bookingNo }}</td>
                                                <td>{{ $item->fullName }}</td>
                                                <td>{{ $item->emailId }}</td>
                                                <td>{{ $item->phoneNumber }}</td>
                                                <td>{{ $item->noAdults }}</td>
                                                <td>{{ $item->noChildrens }}</td>
                                                <td>{{ $item->bookingDate }}/{{ $item->bookingTime }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <th>
                                                    <a href="{{ route('detailbooking', ['id' => $item->id, 'title' => 'Booking Details']) }}"
                                                        title="View Details" class="btn btn-primary btn-xm"> View
                                                        Details</a>
                                                </th>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Bookings No</th>
                                            <th>Name</th>
                                            <th>Email Id</th>
                                            <th>Mobile No</th>
                                            <th>No. Adults</th>
                                            <th>No of Childrens</th>
                                            <th>Boking Date/Time</th>
                                            <th>Posting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
@endsection
