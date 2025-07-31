@extends('layout.master-admin')
@section('main-part-book')
    <div class="m-5 row">
        <div class="col col-lg-4">
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Add Book</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form method="post" action="{{ route('Book.store') }}">
                    {{ @csrf_field() }}
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nameOfBook" class="form-label">Name of the book</label>
                            <input type="text" class="form-control" name="BookName" id="nameOfBook" />
                        </div>
                        <div class="mb-3">
                            <label for="writerOfBook" class="form-label">writer</label>
                            <input type="text" class="form-control" name="writer" id="writerOfBook" />
                        </div>
                        <div class="mb-3">
                            <label for="YearOfBook" class="form-label">year of the book</label>
                            <input type="date" class="form-control" name="year" id="YearOfBook" />
                        </div>
                        <!-- <div class="mb-3">
                            <label for="genre_id" class="form-label">genre_id</label>
                            <input type="text" class="form-control" name="genre_id" id="genre_id" />
                        </div> -->

                        <!-- <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image" />
                                <label class="input-group-text" name="imageOfBook" for="image">Upload</label>
                            </div> -->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                </form>
                @if ($errors->has('BookName'))
                   <span class=" m-3 alert alert-danger ">{{ $errors -> first('BookName') }}</span> 
                @elseif($errors->has('writer'))
                   <span class=" m-3 alert alert-danger ">{{ $errors -> first('writer') }}</span> 
                @elseif($errors->has('year'))
                    <span class=" m-3 alert alert-danger ">{{ $errors -> first('year') }}</span> 
                @endif
                <!--end::Form-->
            </div>

        </div>
    </div>
@endsection