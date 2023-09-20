

<!DOCTYPE html>
<html lang="en-US">
    <!--[if IE]><![endif]-->
    <head>
        @include('client.layout.head')
    </head>

    <body
        class="home page-template page-template-elementor_header_footer page page-id-84 amy-header-default  single-author elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-84">
        <div id="page" class="hfeed site">

            {{-- <div id="amy-top-bar">
                <div class="container">
                    <div class="amy-inner">

                        <div class="amy-top-bar-left pull-left">
                            <div class="amy-top-module amy-module-text "
                                style="color: #ffffff;background-color: #9f599b">
                                <i class="fab fa-apple"></i> <strong>VIP <em>SWEEPSTAKES</em>
                                </strong> </div>
                            <div class="amy-top-module amy-module-text "
                                style="color: #fe7900;">
                                <strong>$5000 SHOPPING SPREE </strong><span>Join
                                    Movies VIP for a chance to win. Don't forget
                                    to join during checkout</span> </div>
                        </div>

                        <div class="amy-top-bar-right pull-right">
                            <div class="amy-top-module amy-module-login " style>
                                <div class="box-user"><a
                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-login.php"><i
                                            aria-hidden="true"
                                            class="fa fa-user"></i>Login</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}

            {{-- Header --}}
            @include('client.layout.header')

 
            {{-- main --}}

            @yield('content')

            {{-- Footer --}}
            @include('client.layout.footer')

    </body>
</html>
