

<?php include 'header.php' ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section" style='padding: 114px 0 9px'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-left">
                                <li class="breadcrumb-item"><a href="index.php">হোম</a></li>
                                <li class="breadcrumb-item"><a href="library.php">লাইব্রেরী</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Book Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="shop-single padding-tb" style="padding: 1px 0;">
        <div class="container">
            <div class="row justify-content-center">
            <?php
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="books";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $id = $_REQUEST['id']; 
            if($id == true) {
                $query = "SELECT * FROM book where id=$id";
                $query_run = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($query_run);
            
            ?>
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <div class="product-thumb">
                                        <div class="swiper-container pro-single-top">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/book.jpg" alt="shop"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4><?php echo $rows['bname'] ?></h4>
                                        <p class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </p>
                                        <h4>$ <?php echo $rows['price'] ?></h4>
                                        <h6>বইটির বিবরন</h6>
                                        <p><?php echo substr($rows['bookdetails'], 0, 300) ?></p>
                                        <form>
                                            <div class="discount-code">
                                                <input type="text" placeholder="ডিসকাউন্ট কোড লিখুন">
                                            </div>
                                            <button type="submit" class="lab-btn"><span>শেখা শুরু করুন</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <ul class="review-nav lab-ul">
                                <?php 
                                $dbhost = "localhost";
                                $dbuser = "root";
                                $dbpass = '';
                                $dbname ="reviews";
  
                                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                 }

                                    $sql = "SELECT * FROM biology";
                                    $query_run = mysqli_query($conn, $sql);
                                    $check_book = mysqli_num_rows($query_run) > 0;
                                    $num = mysqli_num_rows($query_run);
                                ?>
                                <li class="desc" data-target="description-show">বইটির বিবরন</li>
                                <li class="rev active" data-target="review-content-show">রিভিউ <?php echo $num ?></li>
                                
                            </ul>
                            <div class="review-content review-content-show">
                                <div class="review-showing">
                                    <ul class="content lab-ul">
                                    <?php
                                        $dbhost = "localhost";
                                        $dbuser = "root";
                                        $dbpass = '';
                                        $dbname ="reviews";
          
                                        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                         }

                                            $sql = "SELECT * FROM biology ORDER BY id DESC LIMIT 6";
                                            $query_run = mysqli_query($conn, $sql);
                                            $check_book = mysqli_num_rows($query_run) > 0;
                                          
                                            if($check_book ){
                                              while(  $row = mysqli_fetch_array($query_run)){
                                         ?>
                                        <li>
                                            <div class="post-thumb">
                                                <img src="assets/images/instructor/doctor.png" alt="shop">
                                            </div>
                                            <div class="post-content">
                                                <div class="entry-meta">
                                                    <div class="posted-on">
                                                        <a><?php echo $row['username'] ?></a>
                                                        <p>Posted on <?php echo $row['date'] ?></p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <p><?php echo $row['review'] ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php }} ?>
                                    </ul>
                                    <div class="client-review">
                                        <div class="review-form">
                                            <div class="review-title">
                                                <h5>একটি পর্যালোচনা যোগ করুন</h5>
                                            </div>
                                           
                                            <form action="review.php" method="POST" class="row">
                                                <div class="col-md-4 col-12 order-md-2">
                                                    <div class="rating">
                                                        <span class="rating-title">Your Rating : </span>
                                                        <ul class="lab-ul">
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12 order-md-0">
                                                    <input type="text" name="name" placeholder="Full Name" required>
                                                </div>
                                                <div class="col-md-4 col-12 order-md-1">
                                                    <input type="text" name="email" placeholder="Email Adress" required>
                                                    <input type="text" name="id" value="<?php echo $id ?>" placeholder="Email Adress" hidden>
                                                </div>
                                                <div class="col-md-12 col-12 order-md-3">
                                                    <textarea rows="5" name="details" placeholder="Type Here Message" required></textarea>
                                                </div>
                                                <div class="col-12 order-md-4">
                                                    <button class="defult-btn" type="submit">রিভিউ সাবমিট</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="description">
                                    <p><?php echo $rows['bookdetails'] ?></p>
                                    <div class="post-item">
                                        <div class="post-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                        <div class="post-content">
                                            <ul class="lab-ul">
                                                <li>
                                                    Donec non est at libero vulputate rutrum.
                                                </li>
                                                <li>
                                                    Morbi ornare lectus quis justo gravida semper.
                                                </li>
                                                <li>
                                                    Pellentesque aliquet, sem eget laoreet ultrices.
                                                </li>
                                                <li>
                                                    Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                                </li>
                                                <li>
                                                    Donec a neque libero.
                                                </li>
                                                <li>
                                                    Pellentesque aliquet, sem eget laoreet ultrices.
                                                </li>
                                                <li>
                                                    Morbi ornare lectus quis justo gravida semper..
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php } ?>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-search">
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>
                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>All Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    <li>
                                        <a href="#0">Code Optimization</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a>
                                                <ul class="shop-submenu lab-ul">
                                                    <li><a href="#0">All Products</a></li>
                                                    <li><a href="#0">Seo</a></li>
                                                    <li><a href="#0">Marketing</a></li>
                                                    <li><a href="#0">Email Marketing</a></li>
                                                    <li><a href="#0">Seo Support</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Monitoring Ranking</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Target Strategy</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Nap Syndication</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">SEO Support</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Email Marketing</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Engine Marketing</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5 class="title">Most Popular Post</h5>
                            </div>
                            <ul class="widget-wrapper">
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="rajibraj91"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html"><h6>Poor People’s Campaign Our Resources</h6></a>
                                        <p>July 23,2021</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="rajibraj91"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html"><h6>Boosting Social For NGO And Charities </h6></a>
                                        <p>July 23,2021</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/03.jpg" alt="rajibraj91"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html"><h6>Poor People’s Campaign Our Resources</h6></a>
                                        <p>July 23,2021</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/04.jpg" alt="rajibraj91"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html"><h6>Boosting Social For NGO And Charities </h6></a>
                                        <p>July 23,2021</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-tags">
                            <div class="widget-header">
                                <h5 class="title">Our Popular Tags</h5>
                            </div>
                            <ul class="widget-wrapper">
                                <li><a href="#">envato</a></li>
                                <li><a href="#" class="active">themeforest</a></li>
                                <li><a href="#">codecanyon</a></li>
                                <li><a href="#">videohive</a></li>
                                <li><a href="#">audiojungle</a></li>
                                <li><a href="#">3docean</a></li>
                                <li><a href="#">envato</a></li>
                                <li><a href="#">themeforest</a></li>
                                <li><a href="#">codecanyon</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->


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
                        <p>&copy; 2021 <a href="index.html">Edukon</a> Share By <a href="https://nullphpscript.com" target="_blank">Nulled PHP Scripts</a></p>
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