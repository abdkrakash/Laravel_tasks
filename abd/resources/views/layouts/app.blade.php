
@include('layouts.top')

@include('layouts.sidebar')

@include('layouts.navbar')

    <!-- Sidebar -->

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>