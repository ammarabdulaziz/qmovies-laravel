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
                                <a href="/movies/create" class="btn btn-success">ADD</a>
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
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 150px;">Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 20px;">Rating
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 20px;">Journer
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 20px;">Duration
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 150px;">Description
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 150px;">Plot</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                        colspan="1" style="width: 132px;">Actions
                                                    </th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($movies as $movie)
                                                    <tr id='movies-{{ $movie->movie_id }}' role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">{{ $movie->name }}</td>
                                                        <td>{{ $movie->rating }}</td>
                                                        <td>{{ $movie->journer }}</td>
                                                        <td>{{ $movie->duration }}</td>
                                                        <td>{{ $movie->description }}</td>
                                                        <td>{{ $movie->plot }}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div>
                                                                    <a href="/movies/{{ $movie->movie_id }}/edit"
                                                                        class="btn btn-sm btn-info">
                                                                        <i class='bx bx-edit-alt'></i></a>
                                                                </div>
                                                                <div class="ml-1">
                                                                    <button type="submit" id="{{ $movie->movie_id }}"
                                                                        table="movies"
                                                                        class="btn btn-sm btn-danger sa-params">
                                                                        <i class='bx bx-x'></i></button>
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
    @include('backend.layouts.datatableFooter')


@endsection


<!-- end main content-->
