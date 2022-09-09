<?php include 'header.php' ?>


    <!-- Page Header section start here -->
    <div class="pageheader-section style-2">
    <?php
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="courses";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $passing = $_REQUEST['sub'];
            $id = $_REQUEST['id']; 
            if ($passing==true ) if($id == true) {
                $query = "SELECT * FROM admission where id=$id";
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($query_run);
            
            ?>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center flex-row-reverse">
                <div class="col-lg-7 col-12">
                    <div class="pageheader-thumb">
                        <img src="assets/images/course/3danimation.png" alt="rajibraj91" class="w-100">
                        <a href="<?php echo $row['insvideo'] ?>" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                    </div>
                </div>


                <div class="col-lg-5 col-12">
                    <div class="pageheader-content">
                        <div class="course-category">
                            <a href="#" class="course-cate"><?php echo $row['catagory'] ?></a>
                            <a href="#" class="course-offer">30% Off</a>
                        </div>
                        <h2 class="phs-title"><?php echo $row['title'] ?> </h2>
                        <p class="phs-desc">সবচেয়ে চিত্তাকর্ষক হল শেয়ার মি অনলাইন কলেজ কোর্সের সংগ্রহ</p>
                        <div class="phs-thumb">
                            <img src="assets/images/course/author/man.png" alt="rajibraj91">
                            <span><?php echo $row['teacher1'] ?></span>
                            <div class="course-reiew">
                                <span class="ratting">
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rating"></i>
                                </span>
                                <span class="ratting-count">
                                    03 reviews
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- course section start here -->
    <div class="course-single-section padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-part">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-content">
                                    <h3>কোর্স ওভারভিউ</h3>
                                    <p><?php echo $row['description'] ?></h4>
                                    <ul class="lab-ul">
                                        <li><i class="icofont-plus"></i><?php echo $row['given1'] ?></li>
                                        <li><i class="icofont-plus"></i><?php echo $row['given2'] ?></li>
                                        <li><i class="icofont-plus"></i><?php echo $row['given3'] ?></li>
                                        <li><i class="icofont-plus"></i><?php echo $row['given4'] ?></li>
                                        <li><i class="icofont-plus"></i><?php echo $row['given1'] ?></li>
                                    </ul>
                                    <p>এই কোর্সে আপনাকে আপনার প্রতিষ্ঠানে ডেটা মডেল তৈরি করার জন্য প্রয়োজনীয় অসংখ্য সেরা অনুশীলন এবং কৌশলগুলির মাধ্যমে ডেটা মডেলিংয়ের মৌলিক এবং ধারণাগুলি থেকে নিয়ে যায়। আপনি এমন অনেক উদাহরণ পাবেন যা স্পষ্টভাবে কোর্সটি কভার করেছে</p>
                                    <p>কোর্সের শেষ নাগাদ, আপনি শুধুমাত্র এই নীতিগুলিকে কাজে লাগাতে হবে না বরং তথ্য ডেটা মডেলিং-এর জন্য প্রয়োজনীয় মূল ডেটা মডেলিং এবং ডিজাইনের সিদ্ধান্তগুলিও তৈরি করতে প্রস্তুত থাকবেন যা নাট-এবং-বোল্টগুলিকে অতিক্রম করে যা স্পষ্টভাবে কী কোর্স এবং নকশা নিদর্শন আচ্ছাদিত.</p>
                                </div>
                            </div>
                        </div>

                        <div class="course-video">
                            <div class="course-video-title">
                                <h4>কোর্স কন্টেন্ট</h4>
                            </div>
                            <div class="course-video-content">
                                <div class="accordion" id="accordionExample">
                                <?php
                                     $dbhost = "localhost";
                                     $dbuser = "root";
                                     $dbpass = '';
                                     $dbname ='lession';
          
                                     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
                                     if ($conn->connect_error) {
                                         die("Connection failed: " . $conn->connect_error);
                                       }
                                         $query = "SELECT * FROM $passing";
                                         $query_run = mysqli_query($conn, $query);
                                         $check_book = mysqli_num_rows($query_run) > 0;
                                         if($check_book ){
              
                                           while(  $rows = mysqli_fetch_array($query_run)){
                                           
                                           ?>

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="<?php echo $rows['idname'] ?>">
                                            <button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#<?php echo $rows['targetname'] ?>" aria-expanded="true" aria-controls="videolist1"><span><?php echo $rows['unit'] ?></span> <span>5lessons</span> </button>
                                        </div>
                                        <div id="<?php echo $rows['targetname'] ?>" class="accordion-collapse collapse show" aria-labelledby="<?php echo $rows['idname'] ?>" data-bs-parent="#accordionExample">
                                            <ul class="lab-ul video-item-list">
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession1'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['lession1video'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php if($rows['lession2'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession2']?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['lession2video'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($rows['lession3'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession3'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['lession3video'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($rows['lession4'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession4'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['lession4video'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($rows['lession5'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession5'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['lession5video'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                </div>
                                
                            </div>
                        </div>

                        <div class="authors">
                            <div class="author-thumb">
                                <img src="assets/images/instructor/doctor.png" alt="rajibraj91">
                            </div>
                            <div class="author-content">
                                <h5><?php echo $row['teacher1'] ?></h5>
                                <span><?php echo $row['teacher1_title'] ?></span>
                                <p><?php echo $row['teacher1_details'] ?></p>
                                <ul class="lab-ul social-icons">
                                    <li>
                                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="comments" class="comments">
                            <h4 class="title-border">02 Comment</h4>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="com-thumb">
                                        <img alt="rajibraj91" src="assets/images/author/02.jpg">          
                                    </div>
                                    <div class="com-content">
                                        <div class="com-title">
                                            <div class="com-title-meta">
                                                <h6>Linsa Faith</h6>
                                                <span> October 5, 2018 at 12:41 pm </span>
                                            </div>
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                        <p>The inner sanctuary, I throw myself down among the tall grass bye the trckli stream and, as I lie close to the earth</p>
                                    </div>
                                    <ul class="comment-list">
                                        <li class="comment">
                                            <div class="com-thumb">
                                                <img alt="rajibraj91" src="assets/images/author/03.jpg">  
                                            </div>
                                            <div class="com-content">
                                                <div class="com-title">
                                                    <div class="com-title-meta">
                                                        <h6>James Jusse</h6>
                                                        <span> October 5, 2018 at 12:41 pm </span>
                                                    </div>
                                                    <span class="ratting">
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                    </span>
                                                </div>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div id="respond" class="comment-respond mb-lg-0">
                            <h4 class="title-border">Leave a Comment</h4>
                            <div class="add-comment">
                                <form action="#" method="post" id="commentform" class="comment-form">
                                    <input type="text" placeholder="review title">
                                    <input type="text" placeholder="reviewer name">
                                    <input type="email" placeholder="reviewer email">
                                    <textarea rows="5" placeholder="review summary"></textarea>
                                    <button type="submit" class="lab-btn"><span>Submit Review</span></button>
                                </form>
                            </div>			
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-part">
                        <div class="course-side-detail">
                            <div class="csd-title">
                                <div class="csdt-left">
                                    <h4 class="mb-0"><sup>৳</sup><?php echo $row['price'] ?></h4>
                                </div>
                                <div class="csdt-right">
                                    <p class="mb-0"><i class="icofont-clock-time"></i>অফারটি সীমিত সময়ের</p>
                                </div>
                            </div>
                            <div class="csd-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        <li>
                                            <div class="csdc-left"><i class="icofont-ui-alarm"></i>কোর্স লেভেল</div>
                                            <div class="csdc-right"><?php echo $row['level'] ?></div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-book-alt"></i>কোর্স সময়কাল</div>
                                            <div class="csdc-right"><?php echo $row['time'] ?>Week</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-signal"></i>অনলাইন ক্লাস</div>
                                            <div class="csdc-right"><?php echo $row['classno'] ?></div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-video-alt"></i>পাঠ সংখ্যা</div>
                                            <div class="csdc-right"><?php echo $row['lession'] ?></div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-abacus-alt"></i>কুইজ</div>
                                            <div class="csdc-right">0</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-hour-glass"></i>পাস নাম্বার</div>
                                            <div class="csdc-right"><?php echo $row['quiz'] ?></div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-certificate"></i>সার্টিফিকেট</div>
                                            <div class="csdc-right">Yes</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-globe"></i>ভাষা</div>
                                            <div class="csdc-right">বাংলা</div>
                                        </li>
                                        <li>
                                             <form class="coupon" action="">
                                                <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                                                <input type="submit" value="Apply Coupon">
                                             </form>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-sale-discount"></i>অফার দাম</div>
                                            <div class="csdc-right"><?php echo 50 ?></div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-calculator-alt-1"></i>মোট দাম</div>
                                            <div class="csdc-right"><?php echo $total= $row['price'] + 50 ?></div>
                                        </li>

                                    </ul>
                                </div>
                               
                                
                                    
                                <div class="sidebar-payment">
                                    <div class="sp-title">
                                        <h6>নিরাপদ পেমেন্ট:</h6>
                                    </div>
                                    <div class="sp-thumb">
                                        <img src="assets/images/pyment/01.jpg" alt="CodexCoder">
                                    </div>
                                </div>
                                <div class="course-enroll">
                                    <a href="#" class="lab-btn"><span>জয়েন করুন</span></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="course-side-cetagory">
                            <div class="csc-title">
                                <h5 class="mb-0">Course Categories</h5>
                            </div>
                            <div class="csc-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        <li>
                                            <div class="csdc-left"><a href="#">Personal Development</a></div>
                                            <div class="csdc-right">30</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Photography</a></div>
                                            <div class="csdc-right">20</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Teaching and Academics</a></div>
                                            <div class="csdc-right">93</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Art and Design</a></div>
                                            <div class="csdc-right">32</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Business</a></div>
                                            <div class="csdc-right">26</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Data Science</a></div>
                                            <div class="csdc-right">27</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Development</a></div>
                                            <div class="csdc-right">28</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Finance</a></div>
                                            <div class="csdc-right">36</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Health & Fitness</a></div>
                                            <div class="csdc-right">39</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Lifestyle</a></div>
                                            <div class="csdc-right">37</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Marketing</a></div>
                                            <div class="csdc-right">18</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><a href="#">Music</a></div>
                                            <div class="csdc-right">20</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course section ending here -->

    
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