<!DOCTYPE html>
<html class="no-js" lang="en">

@include('head')

    <body class="body-class home-page">
        <!-- pre-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- pre-loder-area area start here  -->
        <!-- header area start here  -->
    @include('header')
        <!-- header area end here  -->
        <!-- mobile-header-area start here  -->
        @include('mobile_header')
        <!-- mobile-header-area end here  -->
        <!-- offcanvase menu area start here  -->
        <div class="panel-backdrop "></div>
        @include('offcanvase')
        <!-- offcanvase menu area end here  -->
        <!-- slider two area start here  -->
     @include('product')
        <!-- Product Categories area end here  -->
        <!-- offer area start here  -->
    @include('offer')
        <!-- offer area end here  -->
        <!-- Featured Product area start here  -->
     @include('featured')
        <!-- Featured Product area start here  -->
        <!-- Trendy Fashion area start here  -->
        <section class="trend-fashion-area mt-50">
            <div class="container">
                <div class="trend-slide">
                    <div class="single-trend">
                        <div class="trend-image">
                            <a href="#"><img src="cssfile/images/trend-fashion.png" alt="trend" /></a>
                        </div>
                    </div>
                    <div class="single-trend">
                        <div class="trend-image">
                            <a href="#"><img src="cssfile/images/trend-fashion.png" alt="trend" /></a>
                        </div>
                    </div>
                    <div class="single-trend">
                        <div class="trend-image">
                            <a href="#"><img src="cssfile/images/trend-fashion.png" alt="trend" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trendy Fashion area end here  -->
        <!-- Best Selling Products start here   -->
     @include('best_sell')
        <!-- Best Selling Products end here   -->
        <section class="larg-banner-area mt-50">
            <div class="container">
                <div class="large-banner-info">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-6">
                            <div class="larg-banner-img">
                                <img class="banner-img" src="cssfile/images/banner/man-cap-image.jpg" alt="banner" />
                                <div class="round-image">
                                    <img src="cssfile/images/banner/cap.png" alt="banner" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="larg-banner-content">
                                <div class="banner-content-wrap">
                                    <h2>Stylish Cap For Man</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet hendrerit fusce fermentum quis aliquet dui senectus. Sit.</p>
                                    <a class="banner-btn" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Arrivals area start here  -->
     @include('new_arrival')
        <!-- New Arrivals area end here  -->
        <!-- blog area start here  -->
     @include('blog')
        <!-- blog area end here  -->
        <!-- footer area start here  -->
     @include('footer')
        <!-- footer area end here  -->
        <!-- Modal -->
     @include('model')
        <!-- Modal end -->
        
        <script src="cssfile/js/jquery-1.11.2.min.js"></script>
        <script src="cssfile/js/popper.min.js"></script>
        <script src="cssfile/js/bootstrap.min.js"></script>
        <script src="cssfile/js/plugins.js"></script>
        <script src="cssfile/js/main.js"></script>
    </body>
</html>
