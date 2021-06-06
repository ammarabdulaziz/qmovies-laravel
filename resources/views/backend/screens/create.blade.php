<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@extends('backend/layouts.app')

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Screens</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/theatres">Screens</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">ADD</h4>
                            <form action="/screens" method="post" class="custom-validation">
                                @csrf
                                <input type="hidden" name="theatre_id" value="{{ $theatre_id }}">
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') parsley-error @enderror"
                                        placeholder="Enter screen name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger pt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-2 mt-md-3 pt-md-3">Mezzanine :</div>
                                    <div class="col-md-5">
                                        <label>Capacity :</label>
                                        <div class="form-group">
                                            <input type="text" name="mezzanine_capacity"
                                                class="form-control @error('mezzanine_capacity') parsley-error @enderror"
                                                placeholder="Enter mezzanine capacity" value="{{ old('mezzanine_capacity') }}">
                                            @error('mezzanine_capacity')
                                                <small class="text-danger pt-1">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label>Price :</label>
                                        <div class="form-group">
                                            <input type="text" name="mezzanine_price"
                                                class="form-control @error('mezzanine_price') parsley-error @enderror"
                                                placeholder="Enter mezzanine price" value="{{ old('mezzanine_price') }}">
                                            @error('mezzanine_price')
                                                <small class="text-danger pt-1">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 mt-md-3 pt-md-3">Balcony :</div>
                                    <div class="col-md-5">
                                        <label>Capacity :</label>
                                        <div class="form-group">
                                            <input type="text" name="balcony_capacity"
                                                class="form-control @error('balcony_capacity') parsley-error @enderror"
                                                placeholder="Enter balcony capacity" value="{{ old('balcony_capacity') }}">
                                            @error('balcony_capacity')
                                                <small class="text-danger pt-1">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label>Price :</label>
                                        <div class="form-group">
                                            <input type="text" name="balcony_price"
                                                class="form-control @error('balcony_price') parsley-error @enderror"
                                                placeholder="Enter balcony price" value="{{ old('balcony_price') }}">
                                            @error('balcony_price')
                                                <small class="text-danger pt-1">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
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

@endsection


<!-- end main content-->
