@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Booking Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">

                                    <tbody>
                                        <tr>
                                            <th>Booking Number</th>
                                            <td colspan="3">{{ $booking->bookingNo }}</td>
                                        </tr>

                                        <tr>
                                            <th> Name</th>
                                            <td>{{ $booking->fullName }}</td>
                                            <th>Email Id</th>
                                            <td> {{ $booking->emailId }}</td>
                                        </tr>
                                        <tr>
                                            <th> Mobile No</th>
                                            <td>{{ $booking->phoneNumber }}</td>
                                            <th>No of Adults</th>
                                            <td>{{ $booking->noAdults }}</td>
                                        </tr>
                                        <tr>
                                            <th>No of Childs</th>
                                            <td>{{ $booking->noChildrens }}</td>
                                            <th>Booking Date / Time</th>
                                            <td>{{ $booking->bookingDate }}/{{ $booking->bookingTime }}</td>
                                        </tr>
                                        <tr>
                                            <th>Posting Date</th>
                                            <td colspan="3">{{ $booking->created_at }}</td>
                                        </tr>



                                        @if ($booking->boookingStatus != '' || $booking->boookingStatus == null)
                                            <tr>
                                                <th>Booking Status</th>
                                                <td>{{ $booking->boookingStatus }}</td>
                                                <th>Updation Date</th>
                                                <td>{{ $booking->updated_at }}</td>
                                            </tr>

                                            <tr>
                                                <th> Remark</th>
                                                <td colspan="3">{{ $booking->adminremark }}</td>
                                            </tr>
                                        @endif

                                        @if ($booking->boookingStatus == '')
                                            <td colspan="4" style="text-align:center;">
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#myModal">Take Action</button>
                                            </td>
                                        @endif

                                    </tbody>

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

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Booking Status</h4>
                </div>
                <div class="modal-body">
                    <form name="takeaction" method="post" action="{{ route('booking.update', $booking->id) }}">
                        @method('PUT')
                        @csrf

                        <p><select class="form-control" name="status" id="status" required>
                                <option value="">Select Booking Status</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Rejected">Rejected</option>
                            </select></p>


                        <p id='rtable'>
                            <input type="hidden" name="bdate" value="{{ $booking->bookingDate }}">
                            <input type="hidden" name="btime" value="{{ $booking->bookingTime }}">
                            <select class="form-control" name="table" id="table">
                                <option value="">Select Table</option>
                                @foreach ($tables as $item)
                                    <option value="{{ $item->id }}">{{ $item->tableNumber }}</option>
                                @endforeach


                            </select>
                        </p>


                        <p>
                            <textarea class="form-control" name="officialremak" placeholder="Official Remark" rows="5" required></textarea>
                        </p>
                        <input type="submit" class="btn btn-primary" name="submit" value="update">

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
