@extends('backend/layouts.app')

@section('content')


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Movies</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/movies">Movies</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">ADD</h4>
                            <form action="/movies" method="post" class="custom-validation">
                                @csrf
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') parsley-error @enderror"
                                        placeholder="Enter movie name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger pt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Rating :</label>
                                        <input type="text" name="rating"
                                            class="form-control @error('rating') parsley-error @enderror"
                                            placeholder="Enter movie rating" value="{{ old('rating') }}">
                                        @error('rating')
                                            <small class="text-danger pt-1">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Journer :</label>
                                        <input type="text" name="journer"
                                            class="form-control @error('journer') parsley-error @enderror"
                                            placeholder="Enter movie journer" value="{{ old('journer') }}">
                                        @error('journer')
                                            <small class="text-danger pt-1">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Duration :</label>
                                        <input type="text" name="duration"
                                            class="form-control @error('duration') parsley-error @enderror"
                                            placeholder="Enter movie duration" value="{{ old('duration') }}">
                                        @error('duration')
                                            <small class="text-danger pt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Description :</label>
                                        <textarea class="form-control @error('description') parsley-error @enderror"
                                            name="description" rows="5"></textarea>
                                        @error('description')
                                            <small class="text-danger pt-1">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Plot :</label>
                                        <textarea class="form-control @error('plot') parsley-error @enderror" name="plot"
                                            rows="5"></textarea>
                                        @error('plot')
                                            <small class="text-danger pt-1">{{ $message }}</small>
                                        @enderror
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
