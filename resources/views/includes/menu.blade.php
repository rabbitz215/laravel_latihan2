<div class="container">
    <nav class="navbar navbar-expand-lg stroke">
        <h1>
            <a class="navbar-brand" href="index.html">
                <img class="img-fluid" src="assets/images/logo.png" alt=" "> Online Study
            </a>
        </h1>
        <!-- if logo is image enable this
<a class="navbar-brand" href="#index.html">
<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
</a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-lg-auto">
                <li
                    class="nav-item @if (Route::currentRouteName() == 'home') {{ 'active' }} @else {{ '' }} @endif">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li
                    class="nav-item @if (Route::currentRouteName() == 'about') {{ 'active' }} @else {{ '' }} @endif">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li
                    class="nav-item @if (Route::currentRouteName() == 'courses') {{ 'active' }} @else {{ '' }} @endif">
                    <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                </li>
                <li
                    class="nav-item @if (Route::currentRouteName() == 'contact') {{ 'active' }} @else {{ '' }} @endif">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <!-- search button -->
                <div class="search-right">
                    <a href="#search" class="btn button-style" title="search">Search</a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Here Your
                                Online Course
                            </h4>
                            <form action="#error" method="GET" class="search-box">
                                <div class="input-search"> <span class="fa fa-search mr-2"
                                        aria-hidden="true"></span><input type="search" placeholder="Enter Keyword"
                                        name="search" required="required" autofocus="">
                                </div>
                                <button type="submit" class="btn button-style">Search</button>
                            </form>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- //search popup -->
                </div>
                <!-- //search button -->
            </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="cont-ser-position">
            <nav class="navigation">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox">
                        <div class="mode-container">
                            <i class="gg-sun"></i>
                            <i class="gg-moon"></i>
                        </div>
                    </label>
                </div>
            </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
    </nav>
</div>
