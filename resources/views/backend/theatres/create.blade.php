<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@extends('backend/layouts.app')

@section('content')
    {{-- <form action="/theatres/add" method="post">
        @csrf
        <label for="theatre_name">Movie name:</label><br>
        <input type="text" name="theatre_name"><br>
        <label for="journer">Journer:</label><br>
        <input type="text" name="journer"><br>
        <label for="duration">Duration:</label><br>
        <input type="text" name="duration"><br>
        <input type="submit" value="Submit">
    </form> --}}

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
                            <form action="/theatres/add" method="post" class="outer-repeater">
                                @csrf
                                <span data-repeater-list="outer_group" class="outer">
                                    <span data-repeater-item="" class="outer">
                                        <div class="form-group">
                                            <label>Name :</label>
                                            <input type="text" name="theatre_name" class="form-control"
                                                placeholder="Enter theatre name" value="{{ old('outer_group.theatre_name') }}">
                                            @error('outer_group.theatre_name')
                                                <small class="text-danger pt-1">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Location :</label>
                                            <input type="text" name="location" class="form-control"
                                                placeholder="Enter theatre location"
                                                value="{{ old('outer_group.location') }}">
                                            @error('outer_group.location')
                                                <small class="text-danger pt-1">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="inner-repeater">
                                            <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                                                <h5 class="card-title mb-0">SCREENS</h5>
                                                <button data-repeater-create="" type="button" class="btn btn-success inner">
                                                    Add Screen</button>
                                            </div>

                                            <div data-repeater-list="inner_group" class="inner form-group">
                                                <div data-repeater-item="" class="inner row">

                                                    <div class="col-md-8 col-7">
                                                        <label>Screen :</label>
                                                        <input type="text" name="screen_name" class="inner form-control"
                                                            placeholder="Enter screen name">
                                                    </div>
                                                    <div class="col-md-4 col-5 pl-0">
                                                        <label>Capacity :</label>
                                                        <input type="text" name="total_capacity" class="inner form-control"
                                                            placeholder="Enter Capacity">
                                                    </div>

                                                    <div class="col-md-5 col-12 mt-3 form-group">
                                                        <div class="row">
                                                            <label class="col-md-3 col-form-label">Mezzanine :</label>
                                                            <div class="col-md-4 col-6">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter capacity" name="mez_capacity">
                                                            </div>
                                                            <div class="col-md-4 col-6 pl-0">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter price" name="mez_price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-12 mt-md-3 form-group">
                                                        <div class="row">
                                                            <label class="col-md-3 col-form-label">Balcony :</label>
                                                            <div class="col-md-4 col-6">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter capacity" name="balc_capacity">
                                                            </div>
                                                            <div class="col-md-4 col-6 pl-0">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter price" name="balc_price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12 mt-3">
                                                        <input data-repeater-delete="" type="button"
                                                            class="btn btn-outline-danger btn-block inner" value="Delete">
                                                    </div>
                                                    <div class="col-12">
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="formmessage">Message :</label>
                                            <textarea id="formmessage" class="form-control" rows="3"></textarea>
                                        </div> --}}
                                        <button type="submit" class="btn btn-dark pl-4 pr-4">Submit</button>
                                    </span>
                                </span>
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
