@extends('layout.master-admin')
@section('main-part-genre')
    <div class="m-5 row">
        <div class="col col-lg-4">
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Add Book</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form method="post" action="{{ route('Genre.store') }}">
                    {{ @csrf_field() }}
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">genre :</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>

        </div>
    </div>
@endsection