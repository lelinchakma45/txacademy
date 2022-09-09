<?php include 'header.php' ?>


    <!-- Page Header section start here -->
    <div class="pageheader-section style-2" style="background:none">
    <?php
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="teacher";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $passing = $_REQUEST['sub'];
            if ($passing==true ) {
              $query = "SELECT * FROM classteacher2";
              $query_run = mysqli_query($conn, $query);
              while($row = mysqli_fetch_array($query_run)){
              if($row['subcode'] == $passing){
            
            ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="pageheader-thumb">
                        <img src="assets/images/course/3danimation.png" alt="rajibraj91" class="w-100">
                        <a href="<?php echo $row['video'] ?>" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                    </div>
                    <div class="authors">
                            <div class="author-thumb">
                                <img src="assets/images/instructor/doctor.png" alt="rajibraj91">
                            </div>
                            <div class="author-content">
                                <h5><?php echo $row['teacher'] ?></h5>
                                <span><?php echo $row['teachertitle'] ?></span>
                                <p><?php echo $row['teacherdes'] ?></p>
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
                </div>


                <div class="col-lg-5 col-12">
                <div class="course-video">
                            <div class="course-video-title">
                                <h4><?php echo $row['subname'] ?>কোর্স কন্টেন্ট</h4>
                            </div>
                            <div class="course-video-content">
                                <div class="accordion" id="accordionExample">
                                <?php
                                     $dbhost = "localhost";
                                     $dbuser = "root";
                                     $dbpass = '';
                                     $dbname ='classes';
          
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
                                            <button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#<?php echo $rows['targetname'] ?>" aria-expanded="true" aria-controls="videolist1"><span><?php echo $rows['unit'] ?></span> <span>lessons</span> </button>
                                        </div>
                                        <div id="<?php echo $rows['targetname'] ?>" class="accordion-collapse collapse show" aria-labelledby="<?php echo $rows['idname'] ?>" data-bs-parent="#accordionExample">
                                            <ul class="lab-ul video-item-list">
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['video'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php if($rows['lession2'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession2']?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['video2'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($rows['lession3'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession3'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['video3'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($rows['lession4'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession4'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['video4'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($rows['lession5'] != null){?>
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title"> <?php echo $rows['lession5'] ?></div>
                                                    <div class="video-item-icon"><a href="<?php echo $rows['video5'] ?>" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- course section start here -->
    <div class="course-single-section section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                        
                    </div>
                </div>
                <?php }}}?>
            </div>
        </div>
    </div>
    <footer>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2022 <a href="index.html">Though Xploxers, Bangladsh</a> Developed By <a href="https://lelinchakma.com" target="_blank">Lelin Chakma</a></p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- course section ending here -->
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
