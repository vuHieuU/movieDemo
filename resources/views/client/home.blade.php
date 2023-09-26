

<!DOCTYPE html>
<html lang="en-US">
    <!--[if IE]><![endif]-->
    <head>
        @include('client.layout.head')
    </head>

    <body
        class="home page-template page-template-elementor_header_footer page page-id-84 amy-header-default  single-author elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-84">
        <div id="page" class="hfeed site">

            {{-- Header --}}
            @include('client.layout.header')

 
            {{-- main --}}

            @yield('content')

            {{-- Footer --}}
            @include('client.layout.footer')

    </body>
</html>
