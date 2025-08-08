@extends('layout.master-admin')
@section('main-part')
    <div class="m-5 row">
        <div class="col col-lg-4">
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Add Book</div>
                </div>

                <form method="post" class="overflow-a" action="{{ route('genres.store') }}">
                    {{ @csrf_field() }}
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">genre :</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                @if ($errors->has('name'))
                    <span class=" m-3 alert alert-danger  "> {{ $errors->first('name') }} </span>
                @endif
            </div>

        </div>
    </div>
@endsection