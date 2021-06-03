<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
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
                        <li class="breadcrumb-item active">Movies</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="card-title">LIST</h4>
                                <a href="/movies/add" class="btn btn-success">ADD</a>
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
                                                        rowspan="1" colspan="1" style="width: 290px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 192px;"
                                                        aria-label="Position: activate to sort column ascending">Journer
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 141px;"
                                                        aria-label="Office: activate to sort column ascending">Rating</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 68px;"
                                                        aria-label="Age: activate to sort column ascending">Duration</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 132px;"
                                                        aria-label="Start date: activate to sort column ascending">Actions
                                                    </th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($movies as $movie)
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">{{ $movie->name }}</td>
                                                        <td>{{ $movie->journer }}</td>
                                                        <td>{{ $movie->rating }}</td>
                                                        <td>{{ $movie->duration }}</td>
                                                        <td><a href="{{ $movie->movie_id }}#" class="btn btn-sm btn-info">
                                                                <i class='bx bx-edit-alt'></i></a>
                                                            <a href="{{ $movie->movie_id }}#"
                                                                class="btn btn-sm btn-danger">
                                                                <i class='bx bx-x'></i></a>
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



    <!-- Required datatable js -->
    <script src="/assets/backend/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/assets/backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/backend/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/backend/libs/jszip/jszip.min.js"></script>
    <script src="/assets/backend/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/backend/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/backend/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/backend/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/backend/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/assets/backend/js/pages/datatables.init.js"></script>


@endsection


<!-- end main content-->
