<header>

    <div class="container">
        <div class="row">
            <div class="col-md-8"><a href="{!! route('home') !!}"><img src="/images/ftw-logo.png" title="logo"></a></div>
            <div class="col-md-4 icon-row hidden-xs hidden-sm text-right">
                <a href="https://twitter.com/farmthisway" target="_blank"><img src="/images/twitter-icon.png"></a>
                <a href="https://www.youtube.com/user/farmthisway/videos" target="_blank"><img src="/images/youtube-icon.png"></a>
                <a href="https://www.facebook.com/Farmthisway" target="_blank"><img src="/images/facebook-icon.png"></a>
                <a href="https://pinterest.com/search/people/?q=farmthisway" target="_blank"><img src="/images/pinterest-icon.png"></a>
            </div>
        </div>
    </div>

    <br>

    <nav class="navbar navbar-inverse navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{!! route('home') !!}">home</a></li>
                    <li><a href="{!! route('csa.join') !!}">csa pricing</a></li>
                    <li><a href="{!! route('bushel') !!}">our bushel</a></li>
                    <li><a href="{!! route('contact') !!}">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @if (isset($carousel))
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="carousel slide" data-ride="carousel" id="carousel-home">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-home" data-slide-to="1"></li>
                        <li data-target="#carousel-home" data-slide-to="2"></li>
                        <li data-target="#carousel-home" data-slide-to="3"></li>
                        <li data-target="#carousel-home" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/images/carousel_1.png" alt="carousel1">
                        </div>
                        <div class="item">
                            <img src="/images/carousel_2.png" alt="carousel2">
                        </div>
                        <div class="item">
                            <img src="/images/carousel_3.png" alt="carousel3">
                        </div>
                        <div class="item">
                            <img src="/images/carousel_4.png" alt="carousel4">
                        </div>
                        <div class="item">
                            <img src="/images/carousel_5.png" alt="carousel5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</header>
