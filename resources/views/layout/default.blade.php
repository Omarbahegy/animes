<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('partials.head')
</head>

<body>

    <!-- Page Header -->
        @include('partials.header')

        <!-- Main Content -->
    <div class="container">

        @yield('content')

    </div>

    <!-- Footer -->
     @include('partials.footer')

</body>
</html>

