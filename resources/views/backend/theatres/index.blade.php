<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@extends('backend.layouts.app')

@section('content')

    @include('backend.layouts.datatableHead')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Theatres</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Theatres</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="card-title">LIST</h4>
                                <a href="/theatres/create" class="btn btn-success">ADD</a>
                            </div>

                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable"
                                            class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                            aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 290px;" aria-sort="ascending">
                                                        Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 192px;">Location
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 141px;">Screens</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 132px;">Actions
                                                    </th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($theatres as $theatre)
                                                    <tr id='theatres-{{ $theatre->theatre_id }}' role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">{{ $theatre->name }}</td>
                                                        <td>{{ $theatre->location }}</td>
                                                        <td>{{ count($theatre->screens) }}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div>
                                                                    <a href="/theatres/{{ $theatre->theatre_id }}/edit"
                                                                        class="btn btn-sm btn-info">
                                                                        <i class='bx bx-edit-alt'></i></a>
                                                                </div>
                                                                <div class="ml-1">
                                                                    <button type="submit" id="{{ $theatre->theatre_id }}"
                                                                        table="theatres"
                                                                        class="btn btn-sm btn-danger sa-params">
                                                                        <i class='bx bx-x'></i></button>
                                                                </div>
                                                                <div class="ml-1">
                                                                    <div>
                                                                        <button href="/screens/{{ $theatre->theatre_id }}"
                                                                            add-screen="/screens/create?id={{ $theatre->theatre_id }}"
                                                                            class="btn btn-sm btn-warning screen-modal"
                                                                            data-toggle="modal"
                                                                            data-target=".bs-example-modal-xl">Screens</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
    <!-- end page title -->
    @include('backend.theatres.includes.modal')

    @include('backend.layouts.datatableFooter')


@endsection


<!-- end main content-->
