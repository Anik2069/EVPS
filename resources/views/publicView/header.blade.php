<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="{{'assets/'}}img/core-img/logo2.png" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            <div class="login d-flex">
                                <a href="#">Login</a>
                                <a href="#">Register</a>
                            </div>
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.blade.php"><img src="{{'assets/'}}img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>

                                <li><a href="/govvot">Govt. Voting</a></li>
                                <li><a href="/orgvot">Organizer's Voting</a></li>
                                {{-- <li><a href="#">Business</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Sports</a></li>--}}
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="/resultview">Results</a></li>

                                <li><a href="#">Log In</a>
                                    <ul class="dropdown">
                                        <li><a href="/govtlog">Govt. Organizer</a></li>
                                        <li><a href="/login">Organizer</a></li>
                                        <li><a href="/can_login">Candidate</a></li>
                                        {{-- <li><a href="about.html"></a></li>--}}
                                        {{--    <li><a href="contact.html">Contact</a></li>--}}
                                        {{--    <li><a href="#">Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="index.blade.php">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="viewpost.blade.php">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>--}}
                                    </ul>
                                </li>


                                <li><a href="#">Registration</a>
                                    <ul class="dropdown">
                                        <li><a href="/govtreg">Govt. Organizer</a></li>
                                        <li><a href="/orgregis">Organizer</a></li>
                                        <li><a href="viewpost.blade.php">Candidate</a></li>
                                        {{-- <li><a href="about.html"></a></li>--}}
                                        {{--    <li><a href="contact.html">Contact</a></li>--}}
                                        {{--    <li><a href="#">Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="index.blade.php">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="viewpost.blade.php">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>--}}
                                    </ul>
                                </li>

                                {{--        <li><a href="#">Mega Menu</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Catagories</li>
                                        <li><a href="index.blade.php">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="viewpost.blade.php">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Catagories</li>
                                        <li><a href="index.blade.php">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="viewpost.blade.php">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Catagories</li>
                                        <li><a href="index.blade.php">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="viewpost.blade.php">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <!-- Single Featured Post -->
                                        <div class="single-blog-post small-featured-post d-flex">
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{'assets/'}}img/bg-img/23.jpg" alt=""></a>
                                            </div>
                                            <div class="post-data">
                                                <a href="#" class="post-catagory">Travel</a>
                                                <div class="post-meta">
                                                    <a href="#" class="post-title">
                                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                    </a>
                                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Featured Post -->
                                        <div class="single-blog-post small-featured-post d-flex">
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{'assets/'}}img/bg-img/24.jpg" alt=""></a>
                                            </div>
                                            <div class="post-data">
                                                <a href="#" class="post-catagory">Politics</a>
                                                <div class="post-meta">
                                                    <a href="#" class="post-title">
                                                        <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                    </a>
                                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>--}}

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
