<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.inc.php';?>
<?php include 'inc/header-index.inc.php';?>
<body>
    <div class="container-fluid main-index">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="row">
    				<div class="col-md-2"></div>
    				<div class="col-md-8">
    					<div class="row">
    						<div class="col-lg-8">
    							<div class="row">
    								<div class="col-md-12">
    									<p class="synop text-justify">Amelie, an innocent and naive girl in Paris, with her
    									own sense of justice, decides to help those around
    									her and along the way, discovers love.</p>
    									<p class="synop hidden-xs hidden-sm text-justify">A painfully shy waitress working at a tiny Paris cafe,
    									Amelie makes a surprising discovery and sees her life
    									drastically changed for the better. From then on,
    									Amelie dedicates herself to helping others find happiness
    									in the most delightfully unexpected ways. But
    									will she have the courage to do for herself what she
    									has done for others?</p>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-12">
    									<div class="block">
    				    					<blockquote>“This is the Paris - and the mad, beautiful young
    				    					Parisienne - we look for in dreams”</blockquote>
    				        				<div class="quote">  
                                				<p class="cite-name">Michael Wilmington</p>
    				            				<p class="cite-source">Chicago Tribune</p>
                            				</div>
    									</div>
    								</div>
    							</div>
    							<div class="row visible-lg awards">
    								<div class="col-sm-4">
    									<img class="laurels image-responsive" src="images/icons/laurel1.png" alt="">
    								</div>
    								<div class="col-sm-4">
    									<img class="laurels image-responsive" src="images/icons/laurel2.png" alt="">
    								</div>
    								<div class="col-sm-4">
    									<img class="laurels image-responsive" src="images/icons/laurel3.png" alt="">
    								</div>
    							</div>
    						</div><!-- col-lg-8 -->
    						<div class="col-lg-4">
    							<img class="poster" src="images/poster.jpg" alt="amelie movie poster">
    						</div>
    					</div>
    				</div><!-- col-md-8 -->
    				<div class="col-md-2"></div>
    				
    			</div><!-- row -->

				<div class="row navigation-index">
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
    		</div><!-- col-md-12 -->
    	</div><!-- row -->
    </div><!-- container-fluid -->
    			

<?php include 'inc/footer.inc.php';?>
</html>