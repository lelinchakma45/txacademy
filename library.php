<?php include 'header.php' ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>জুমঘর স্টোর</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">হোম</a></li>
                                <li class="breadcrumb-item active" aria-current="page">বইঘর</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->
    
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

          $num = mysqli_num_rows($query_run);

          ?>

    <!-- course section start here -->
    <div class="course-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="course-showing-part">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="course-showing-part-left">
                            <p>Showing <?php echo $num ?> results</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">


          <?php 
          if($check_book ){
              
            while(  $row = mysqli_fetch_array($query_run)){
            
            ?>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/3danimation.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$<?php echo $row['price'] ?></div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#"><?php echo $row['catagory'] ?></a>
                                        </div>
                                    </div>
                                    <a href="book-shop.php?id=<?php echo $row['id'] ?>"><h5><?php echo $row['bname'] ?></h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" width="40px" height="40px" alt="course author">
                                            <a href="teacher.php?sub=<?php echo $row['author'] ?>" class="ca-name"><?php echo $row['author'] ?></a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="book-shop.php?id=<?php echo $row['id'] ?>" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
                <!--
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
                </ul>-->
            </div>
        </div>
    </div>
    <!-- course section ending here -->

  <?php echo include 'footer.php' ?>