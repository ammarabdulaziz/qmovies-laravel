<!doctype html>

@include('backend.layouts.head')

<body data-sidebar="dark">

    <!-- Loader -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div> --}}

    @include('backend.layouts.header')
    @include('backend.layouts.left-sidebar')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('content')

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('backend.layouts.footer')

    </div>

</body>

</html>
