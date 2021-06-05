<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@extends('backend/layouts.app')

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Theatres</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/theatres">Theatres</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">ADD</h4>
                            <form action="/theatres" method="post" class="outer-repeater">
                                @csrf
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter theatre name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger pt-1">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Location :</label>
                                    <input type="text" name="location" class="form-control"
                                        placeholder="Enter theatre location" value="{{ old('location') }}">
                                    @error('location')
                                        <small class="text-danger pt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-dark pl-4 pr-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title -->

    <!-- form repeater js -->
    <script src="/assets/backend/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="/assets/backend/js/pages/form-repeater.int.js"></script>

@endsection


<!-- end main content-->
