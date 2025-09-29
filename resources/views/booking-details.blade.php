<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurent Table Booking System | Booking Details</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->


        <!-- Content Wrapper. Contains page content -->
        <div>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Booking Details</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

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



                                                @if ($booking->boookingStatus == '' || $booking->boookingStatus == null)
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
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



    </div>
    <!-- ./wrapper -->









    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script type="text/javascript">
        //For report file
        $('#rtable').hide();
        $(document).ready(function() {
            $('#status').change(function() {
                if ($('#status').val() == 'Accepted') {
                    $('#rtable').show();
                    jQuery("#table").prop('required', true);
                } else {
                    $('#rtable').hide();
                }
            })
        })
    </script>
</body>

</html>
