<!-- header HTML for pages -->

<!-- <header id="header" class="header"> is header tag causing extra margin? -->
    <div class="container-fluid">
        
        <!-- head -->
        <div class="row head">
            <div class="col-xs-12">
            <!-- Only visible small device -->
                <!-- cta  -->
                <div class"row">
                    <div class="cta-head-small visible-xs visible-sm hidden-md hidden-lg">
                        <div class="col-xs-4 text-center grow cta-small"><a href="http://www.miramax.com/watch?v=FCE73335-A365-BED3-10A4-6A33CB7B5359" target="_blank"><img class="cta-icon" src="images/icons/play.svg" alt="video play icon"><span class="hidden-xs">Watch Trailer</span></a></div>
                        <div class="col-xs-4 text-center grow cta-small"><a href="https://itunes.apple.com/us/movie/amelie/id484597866" target="_blank"><img class="cta-icon" src="images/icons/apple.svg" alt="itunes logo"><span class="hidden-xs">Buy on iTunes</span></a></div>
                        <div class="col-xs-4 text-center grow cta-small"><a href="http://www.amazon.com/Amelie-Audrey-Tautou/dp/B0000640VO" target="_blank"><img class="cta-icon" src="images/icons/amazon.svg" alt="amazon logo"><span class="hidden-xs">Buy on DVD</span></a></div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-4">
                    <!-- header image -->
                    <div class"row">
                        <div class="col-xs-12"><img class="amelie-illo2  img-responsive" src="images/amelie.png" alt=""></div>
                    </div>
                </div>
                <div class="col-xs-8">
                    
                    <!-- Only visible medium device -->
                    <!-- cta  -->
                    <!-- <div class="row hidden-xs hidden-sm visible-md hidden-lg">
                        <div class="cta-head-med">
                            <div class="grow cta-big"><a href="http://www.miramax.com/watch?v=FCE73335-A365-BED3-10A4-6A33CB7B5359" target="_blank"><img class="cta-icon-med" src="images/icons/play.svg" alt=""><span>Watch Trailer</span></a></div>
                            <div class="grow cta-big"><a href="https://itunes.apple.com/us/movie/amelie/id484597866" target="_blank"><img class="cta-icon-med" src="images/icons/apple.svg" alt=""><span>Buy on iTunes</span></a></div>
                            <div class="grow cta-big"><a href="http://www.amazon.com/Amelie-Audrey-Tautou/dp/B0000640VO" target="_blank"><img class="cta-icon-med" src="images/icons/amazon.svg" alt=""><span>Buy on DVD</span></a></div>
                        </div>
                    </div> -->

                    <!-- Only visible large device -->
                    <!-- cta  -->
                    <div class="row hidden-xs hidden-sm visible-md visible-lg">
                        <div class="cta-head-large">
                            <div class="col-xs-4 grow cta-small"><a href="http://www.miramax.com/watch?v=FCE73335-A365-BED3-10A4-6A33CB7B5359" target="_blank"><img class="cta-icon" src="images/icons/play.svg" alt="video play icon"><span>Watch Trailer</span></a></div>
                            <div class="col-xs-4 grow cta-small"><a href="https://itunes.apple.com/us/movie/amelie/id484597866" target="_blank"><img class="cta-icon" src="images/icons/apple.svg" alt="itunes logo"><span>Buy on iTunes</span></a></div>
                            <div class="col-xs-4 grow cta-small"><a href="http://www.amazon.com/Amelie-Audrey-Tautou/dp/B0000640VO" target="_blank"><img class="cta-icon" src="images/icons/amazon.svg" alt="amazon logo"><span>Buy on DVD</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- head -->

        <!-- banner -->
        <div class="row banner">
            <div class="col-sm-12">
                <div class="headline2">
                    <div class="title">
                        <div><span class="main-title">Amelie</span></div>
                    </div>
                    <div class="director">
                        <p><span class="by">a film by</span><span class="jpj">JEAN-PIERRE JUENET</span></p>
                    </div>
                </div>
            </div>
        </div><!-- banner -->
        <div class="row navigation">
            <div class="col-sm-12">

                <!-- nav bar -->
                <nav class="nav-collapse">
                    <ul class="main">
                        <li <?php if($currentPage == 'index.php') {echo 'class="active"';} ?>><a href="index.php">HOME</a></li>
                        <li <?php if($currentPage == 'cast.php') {echo 'class="active"';} ?>><a href="cast.php">CAST</a></li>
                        <li <?php if($currentPage == 'music.php') {echo 'class="active"';} ?>><a href="music.php">MUSIC</a></li>
                        <li <?php if($currentPage == 'location.php') {echo 'class="active"';} ?>><a href="location.php">LOCATIONS</a></li>
                        <li <?php if($currentPage == 'gallery.php') {echo 'class="active"';} ?>><a href="gallery.php">GALLERY</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div><!-- container-fluid -->
<!-- </header> -->