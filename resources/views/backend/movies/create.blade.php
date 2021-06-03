{{-- <form action="add" method="post">
    @csrf
    <label for="name">Movie name:</label><br>
    <input type="text" name="name"><br>
    <label for="journer">Journer:</label><br>
    <input type="text" name="journer"><br>
    <label for="duration">Duration:</label><br>
    <input type="text" name="duration"><br>
    <input type="submit" value="Submit">
</form> --}}

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
                            <form class="outer-repeater">
                                <div data-repeater-list="outer-group" class="outer">
                                    <div data-repeater-item="" class="outer">
                                        <div class="form-group">
                                            <label for="formname">Name :</label>
                                            <input type="text" class="form-control" id="formname"
                                                placeholder="Enter your Name...">
                                        </div>

                                        <div class="form-group">
                                            <label for="formemail">Email :</label>
                                            <input type="email" class="form-control" id="formemail"
                                                placeholder="Enter your Email...">
                                        </div>

                                        <div class="inner-repeater mb-4">
                                            <div data-repeater-list="inner-group" class="inner form-group">
                                                <label>Phone no :</label>
                                                <div data-repeater-item="" class="inner mb-3 row">
                                                    <div class="col-md-10 col-8">
                                                        <input type="text" class="inner form-control"
                                                            placeholder="Enter your phone no...">
                                                    </div>
                                                    <div class="col-md-2 col-4">
                                                        <input data-repeater-delete="" type="button"
                                                            class="btn btn-primary btn-block inner" value="Delete">
                                                    </div>

                                                </div>
                                            </div>
                                            <input data-repeater-create="" type="button" class="btn btn-success inner"
                                                value="Add Number">
                                        </div>

                                        <div class="form-group">
                                            <label class="d-block mb-3">Gender :</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1"
                                                    name="outer-group[0][customRadioInline1]" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2"
                                                    name="outer-group[0][customRadioInline1]" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="formmessage">Message :</label>
                                            <textarea id="formmessage" class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
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
