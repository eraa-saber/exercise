<!DOCTYPE html>
<!--[if IE 7]> <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->

    <head>
        @include('front.partials.meta')
        @include('front.partials.css')
        @yield('css')
    </head>
    <body>
    <div class="container">
        @include('front.partials.navigation')
        <!--main content start-->
        @include('front.partials.flash_messages')
        @yield('content')
        <!--main content start-->
        <footer>
            @include('front.partials.footer')
        </footer>
        @include('front.partials.js')
        @yield('js')
    </div>
    </body>
</html>
