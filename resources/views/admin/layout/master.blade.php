<!DOCTYPE html>
<html lang="en">

<head>
    @stack('before-style')
    @include('admin.include.head')
    @stack('after-style')
</head>

<!-- body start -->

<body>

       
        @include('admin.include.navbar')
        
        @include('admin.include.leftsidebar')
       
        <main class="main-wrapper">
            @yield('content')
        </main>

        <div class="overlay btn-toggle"></div>
        
        @include('admin.include.footer')
           
        <!--start cart-->
        @include('admin.include.rightsidebar')
        <!--start switcher-->

    @stack('before-script')
    @include('admin.include.script')
    @stack('after-script')


    @yield('third-party-js')

    <!-- init js-->
    @yield('init-js')
</body>

</html>
