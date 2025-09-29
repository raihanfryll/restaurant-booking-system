@extends('layouts.admin', ['title' => 'Manage Tables'])

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Table No</th>
                                            <th>Added By</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($results as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->tableNumber }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <th>
                                                    <form action="{{ route('table.destroy', $item->tid) }}" method="POST"
                                                        id="delete{{ $item->tid }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" style="color:red;" title="Delete this record"
                                                            onclick="confirmDelete(event, {{ $item->tid }})"
                                                            data-confirm-delete="true">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </form>

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
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Table No</th>
                                            <th>Added By</th>
                                            <th>Creation Date</th>
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
