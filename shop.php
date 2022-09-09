<?php include 'header.php' ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pageheader-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="shop-page padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="shop-title d-flex flex-wrap justify-content-between">
                            <p>Showing 01 - 12 of 139 Results</p>
                            <div class="product-view-mode">
                                <a class="active" data-target="grid"><i class="icofont-ghost"></i></a>
                                <a data-target="list"><i class="icofont-listine-dots"></i></a>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid row justify-content-center">

                        <?php
                             $dbhost = "localhost";
                             $dbuser = "root";
                             $dbpass = '';
                             $dbname ="books";

                             $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                             if ($conn->connect_error) {
                                 die("Connection failed: " . $conn->connect_error);
                               }

                             $query = "SELECT * FROM book";
                             $query_run = mysqli_query($conn, $query);
                             $check_book = mysqli_num_rows($query_run) > 0;

                             if($check_book ){
    
                               while ($row = mysqli_fetch_array($query_run)){?>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/159.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#"><?php echo $row['bname'] ?></a></h5>
                                        <h6>৳ <span><?php echo $row['price'] ?></span></h6>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#"><?php echo $row['bname'] ?></a></h5>
                                         <h6>
                                            $<span><?php echo $row['price'] ?></span>
                                        </h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                </div>
                            </div>

                            <?php } }?>

                        </div>
                        <ul class="default-pagination lab-ul">
                            <li>
                                <a href="#"><i class="icofont-rounded-left"></i></a>
                            </li>
                            <li>
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#" class="active">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-rounded-right"></i></a>
                            </li>
                        </ul>
                    </article>
                </div>
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


<?php include 'footer.php' ?>