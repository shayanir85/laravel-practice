@extends('layout.master-admin')
@section('main-part')

    <div class="col-12 m-5" style="width:50vw">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Genres</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 50vh;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                            <tr>
                                <td>{{ $genre->id }}</td>
                                <td>{{ $genre->name }}</td>
                                <td>{{ $genre->created_at->format('M d, Y') }}</td>
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