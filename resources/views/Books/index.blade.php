@extends('layout.master-admin')
@section('main-part')
 <div class="col-12 m-5" style="width:50vw">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Books</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 50vh;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>writer</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Books as $Book)
                            <tr>
                                <td>{{ $Book->id }}</td>
                                <td>{{ $Book->name }}</td>
                                <td>{{ $Book->writer }}</td>
                                <td>{{ $Book->year }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection