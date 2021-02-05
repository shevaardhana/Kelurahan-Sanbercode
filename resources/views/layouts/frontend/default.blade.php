<!DOCTYPE html>
<html lang="en">
<head>
    @include ('includes.frontend.meta')
    @stack('before-style')
    @include ('includes.frontend.styles')
    @stack('after-style')   
</head>
<body>
    <!-- Navbar -->
    @include ('includes.frontend.navbar')
    <!-- Akhir Navbar -->  

   <!-- Content -->
        @yield('content')
    <!-- Akhir Content -->

    <!-- Footer -->
        @include ('includes.frontend.footer')
    <!-- Akhir Footer -->

    @stack('before-scripts')
    @include ('includes.frontend.scripts')
    @stack('after-scripts')
    
</body>
</html>