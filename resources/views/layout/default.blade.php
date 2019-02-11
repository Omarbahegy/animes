<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('partials.head')
</head>

<body>
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <!-- Page Header -->
    <div class="container main-container">
        @include('partials.header')
        @include('partials.navbar')
    </div>
        <!-- Main Content -->
    <div class=" main-container">
        @yield('content')
    </div>

    <!-- Footer -->
     @include('partials.footer')

</body>
</html>

