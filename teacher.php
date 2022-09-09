<?php include 'header.php' ?>

        <?php
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="teacher";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $author = $_REQUEST['sub']; 
            if($author == true) {
                $query = "SELECT * FROM classteacher where teacher='$author'";
                $query_run = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($query_run);
            
            ?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style='padding: 114px 0 9px'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $rows['teacher'] ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- instructor Single Section Starts Here -->
    <section class="instructor-single-section padding-tb section-bg">
		<div class="container">
			<div class="instructor-wrapper">
				<div class="instructor-single-top">
					<div class="instructor-single-item d-flex flex-wrap justify-content-between">
						<div class="instructor-single-thumb">
							<img src="assets/images/instructor/single/lelin.jpg" alt="instructor">
						</div>
						<div class="instructor-single-content">
							<h4 class="title"><?php echo $rows['teacher'] ?></h4>
							<p class="ins-dege"><?php echo $rows['teachertitle'] ?></p>
                            <span class="ratting">
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                                <i class="icofont-ui-rating"></i>
                            </span>
							<p class="ins-desc"><?php echo $rows['teacherdes'] ?></p>
							<h6 class="subtitle">ব্যক্তিগত অভিমত</h6>
							<p class="ins-desc">Enthusa expedte clent ফোকাসড গ্রোথ স্ট্র্যাটেজি যেখানে ক্লেন্ট সেন্টার ইনফ্রাস্ট্রাক্ট এনট্রিন্সিক ইফেক্টিভ এনফরম্যান্সের পরিবর্তে ইফেক্টিভ টেলার বাড়ায় কোলাবোরা অপ্টিমাইজ পার্টনারশ এবং ফ্রীকশনলেস ডেলিভারেবল ইনফ্রাস্ট্রাক্ট এনট্রিনসিক্ল ইফেক্টিভ টেলার বাড়ায়</p>
							<ul class="lab-ul">
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">ঠিকানা</span>
									<span class="list-attr">Suite 02 and 07 Melbourne, Australia</span>
								</li>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">ই-মেইল</span>
									<span class="list-attr"><?php echo $rows['gmail'] ?></span>
								</li>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">ফোন</span>
									<span class="list-attr"><?php echo $rows['phone'] ?></span>
								</li>
                                <?php if($rows['website'] != null) { ?>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">website</span>
									<span class="list-attr"><?php echo $rows['website'] ?></span>
								</li>
                                <?php } ?>
								<li class="d-flex flex-wrap justify-content-start">
									<span class="list-name">অনুসরন করুন</span>
									<ul class="lab-ul list-attr d-flex flex-wrap justify-content-start">
                                        <?php if($rows['facebook']!= null){ ?>
										<li>
											<a class="facebook" href="<?php echo $rows['facebook'] ?>"><i class="icofont-facebook"></i></a>
										</li>
                                        <?php } ?>
										<?php if($rows['twitter']!= null){ ?>
										<li>
											<a class="twitter" href="<?php echo $rows['twitter'] ?>"><i class="icofont-twitter"></i></a>
										</li>
                                        <?php } ?>
                                        <?php if($rows['instagram']!= null){ ?>
										<li>
											<a class="instagram" href="<?php echo $rows['instagram'] ?>"><i class="icofont-instagram"></i></a>
										</li>
                                        <?php } ?>
                                        <?php if($rows['gmail']!= null){ ?>
										<li>
											<a class="gmail" href="mailto:<?php echo $rows['gmail'] ?>"><i class="icofont-ui-message"></i></a>
										</li>
                                        <?php } ?>
                                        <?php if($rows['behance']!= null){ ?>
										<li>
											<a class="behance" href="<?php echo $rows['behance'] ?>"><i class="icofont-behance"></i></a>
										</li>
                                        <?php } ?>
                                        <?php if($rows['github']!= null){ ?>
										<li>
											<a class="github" href="<?php echo $rows['github'] ?>"><i class="icofont-github"></i></a>
										</li>
                                        <?php } ?>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="instructor-single-bottom d-flex flex-wrap mt-4">
					<div class="col-xl-6 pb-5 pb-xl-0 d-flex flex-wrap justify-content-lg-start justify-content-between">
						<h4 class="subtitle">ব্যক্তিগত ভাষা দক্ষতা</h4>
						<div class="text-center skill-item">
							<div class="skill-thumb">
								<div class="circles text-center">
									<div class="circle first" data-percent="80">
										<strong>80<i>%</i></strong>
									</div>							
								</div>
							</div>
							<p>বাংলা</p>
						</div>
						<div class="text-center skill-item">
							<div class="skill-thumb">
								<div class="circles text-center">
									<div class="circle second" data-percent="70">
										<strong>70<i>%</i></strong>
									</div>							
								</div>
							</div>
							<p>চাকমা</p>
						</div>
						<div class="text-center skill-item">
							<div class="skill-thumb">
								<div class="circles text-center">
									<div class="circle third" data-percent="60">
										<strong>60<i>%</i></strong>
									</div>							
								</div>
							</div>
							<p>ইংরেজি</p>
						</div>
					</div>
					<div class="col-xl-6 d-flex flex-wrap justify-content-lg-start justify-content-between">
						<h4 class="subtitle">স্বীকৃতি পুরস্কার</h4>
						<div class="skill-item text-center">
							<div class="skill-thumb">
								<img src="assets/images/instructor/single/icon/01.png" alt="instructor">
							</div>
							<p>Award 2018</p>
						</div>
						<div class="skill-item text-center">
							<div class="skill-thumb">
								<img src="assets/images/instructor/single/icon/02.png" alt="instructor">
							</div>
							<p>Award 2019</p>
						</div>
						<div class="skill-item text-center">
							<div class="skill-thumb">
								<img src="assets/images/instructor/single/icon/03.png" alt="instructor">
							</div>
							<p>Award 2020</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php }?>
    <!-- instructor Single Section Ends Here -->

    <!-- footer -->
    <div class="news-footer-wrap">
        <div class="fs-shape">
            <img src="assets/images/shape-img/03.png" alt="fst" class="fst-1">
            <img src="assets/images/shape-img/04.png" alt="fst" class="fst-2">
        </div>
        <!-- Newsletter Section Start Here -->
        <div class="news-letter">
            <div class="container">
                <div class="section-wrapper">
                    <div class="news-title">
                        <h3>Want Us To Email You About Special Offers And Updates?</h3>
                    </div>
                    <div class="news-form">
                        <form action="/">
                            <div class="nf-list">
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <input type="submit" name="submit" value="Subscribe Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section Ending Here -->

        <!-- Footer Section Start Here -->
        <footer>
            <div class="footer-top padding-tb pt-0">
                <div class="container">
                    <div class="row g-4 row-cols-xl-4 row-cols-md-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Site Map</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Documentation</a></li>
                                                <li><a href="#">Feedback</a></li>
                                                <li><a href="#">Plugins</a></li>
                                                <li><a href="#">Support Forums</a></li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Useful Links</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Help Link</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Social Contact</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                                <li><a href="#">YouTube</a></li>
                                                <li><a href="#">Github</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Our Support</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Paid with Mollie</a></li>
                                                <li><a href="#">Status</a></li>
                                                <li><a href="#">Changelog</a></li>
                                                <li><a href="#">Contact Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2021 <a href="index.html">Edukon</a> Designed by <a href="https://themeforest.net/user/CodexCoder" target="_blank">CodexCoder</a> </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/progress.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/isotope.pkgd.js"></script>
    <script src="assets/js/functions.js"></script>
</body>
</html>