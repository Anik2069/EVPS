<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The News Paper - News &amp; Lifestyle Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{'assets/'}}img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{'assets/'}}style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<!-- ##### Header Area End ##### -->
@include("publicView.header")
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Hero Add -->
            <div class="col-12 col-lg-4">
                <div class="hero-add">
                    <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->


                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport"
                               style="width:100%;">
                            <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Candidate Name</th>
                                <th>Number of Votes</th>
                                <th>Voting Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($value1 as $val)
                                @foreach($value as $val1)
                                    @if($val1['id']==$val['post'])
                                        <tr>
                                            <td>{{$val1['title']}}</td>
                                            <td>{{$val['can']}}</td>
                                            @foreach($value2 as $val2)
                                                @if($val2['post']==$val1['id'] && $val['can']==$val2['can'])
                                                    <input type="hidden" value="{{$c=$c+1}}">
                                                @endif
                                            @endforeach
                                            <td>{{$c}}</td>
                                            <input type="hidden" value="{{$c=0}}">
                                            @if($val1['votingdate']==date("Y-m-d"))
                                                <td>Voting is running is today.</td>
                                            @elseif ($val1['votingdate']<date("Y-m-d"))
                                                <td>Voting Over</td>
                                            @else
                                                <td>Voting is not started..</td>

                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination mt-50">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.blade.php"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                            <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                            <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Politics</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Markets</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Featured</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Golf</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Motorsport</a></li>
                            <li><a href="#">Horseracing</a></li>
                            <li><a href="#">Equestrian</a></li>
                            <li><a href="#">Sailing</a></li>
                            <li><a href="#">Skiing</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">FAQ</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Aviation</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Traveller</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Food/Drink</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Partner Hotels</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">+More</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Autos</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{'assets/'}}js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="{{'assets/'}}js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{'assets/'}}js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="{{'assets/'}}js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="{{'assets/'}}js/active.js"></script>
</body>

</html>
