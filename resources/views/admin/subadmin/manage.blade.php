@extends('layouts.admin', ['title' => 'Manage Sub Admins'])

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sub Admin Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Full Name</th>
                                            <th>Email ID</th>
                                            <th>Mobile Number</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($user as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->MobileNumber }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <th style="display: flex;">
                                                    <a href="{{ route('subadmin.edit', $item->id) }}"
                                                        title="Edit Sub Admin Details"> <i class="fa fa-edit"
                                                            aria-hidden="true"></i> </a>
                                                    <form action="{{ route('subadmin.destroy', $item->id) }}" method="POST"
                                                        id="delete{{ $item->id }}" title="delete Sub Admin Details"
                                                        style="margin-left: 10px; margin-right:10px;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" style="color:red;" title="Delete this record"
                                                            onclick="confirmDelete(event, {{ $item->id }})"
                                                            data-confirm-delete="true"><i class="fa fa-trash"
                                                                aria-hidden="true"></i> </a>
                                                    </form>
                                                    <a href="{{ route('subadmin.reset', $item->id) }}"
                                                        title="Reset Sub Admin Password"> <i class="fa fa-key"
                                                            aria-hidden="true"></i></a>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Full Name</th>
                                            <th>Email ID</th>
                                            <th>Mobile Number</th>
                                            <th>Reg. Date</th>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan bisa mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete' + id).submit();
                }
            })
        }
    </script>
@endsection
