
@include('layouts.header')     {{-- header content --}}
@include('layouts.aside')
    @yield('content')  
@include('layouts.footer')
