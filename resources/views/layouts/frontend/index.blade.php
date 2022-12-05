<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.frontend.partials.head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.frontend.partials.header')
    <!-- End Header -->

    @yield('hero')
    <!-- ======= Content ======= -->
    <main id="main">
        @yield('breadcrumbs')
        @yield('content')
    </main>
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    @include('layouts.frontend.partials.footer')
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    @include('layouts.frontend.partials.js')
    @yield('script')

</body>

</html>
