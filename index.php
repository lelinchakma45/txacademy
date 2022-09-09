
<?php

//Include Google Configuration File
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('437940563317-pk2ftff46ubrlt8bfn18u1pbc427690s.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('mkwA89zWqZBg2ZcOYhrf3vud');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google-login/dashboard.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

if($_SESSION['access_token'] == '') {
  header("Location: index.php");
} 

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

?>
<?php include 'header.php' ?>


    <!-- banner section start here -->
    <section class="banner-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-10">
                        <div class="banner-content">
                            <h6 class="subtitle text-uppercase fw-medium">অনলাইন শিক্ষা</h6>
                            <h2 class="title">শিখুন
                                আপনার প্রয়োজন দক্ষতা
                                সফল হতে</h2>
                            <p class="desc">বিশ্বের শীর্ষস্থানীয় বিশেষজ্ঞদের বিনামূল্যে অনলাইন কোর্স। আজ 18+ মিলিয়ন শিক্ষার্থীর সাথে যোগ দিন।</p>
                            <form action="search-page.php" method="POST">
                                <div class="banner-icon">
                                    <i class="icofont-search"></i>
                                </div>
                                <input type="text" name="keyword" placeholder="Keywords of your course">
                                <button type="submit" name="search">Search Course</button>
                            </form>
                            <div class="banner-catagory d-flex flex-wrap">
                                <p>Most Popular : </p>
                                <ul class="lab-ul d-flex flex-wrap">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Graphic Design</a></li>
                                    <li><a href="#">Programming</a></li>
                                    <li><a href="#">Photoshop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6">
                        <div class="banner-thumb">
                            <img src="assets/images/banner/01.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="all-shapes"></div>
        <!--<div class="cbs-content-list d-none">
            <ul class="lab-ul">
                <li class="ccl-shape shape-1"><a href="#">Student Satisfied</a></li>
                <li class="ccl-shape shape-2"><a href="#">130K+ Total Courses</a></li>
                <li class="ccl-shape shape-3"><a href="#">89% Successful Students</a></li>
                <li class="ccl-shape shape-4"><a href="#">23M+ Learners</a></li>
                <li class="ccl-shape shape-5"><a href="#">36+ Languages</a></li>
            </ul>
        </div>-->
    </section>
    <!-- banner section ending here -->


    <!-- sponsor section start here
    <div class="sponsor-section section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="sponsor-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/01.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/02.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/03.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/04.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/05.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/06.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     sponsor section ending here -->


    <!-- category section start here -->
    <div class="category-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">জনপ্রিয় ক্যাটাগরি</span>
                <h2 class="title">শেখাটা হোক আনন্দের সাথে</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/coding.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>ওয়েব ডিজাইন</h6></a>
                                    <span>24 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/robot.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>রোবোটিক্স</h6></a>
                                    <span>40 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/digital-campaign.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>মার্কেটিং</h6></a>
                                    <span>27 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/3d.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>3D অ্যানিমেশন</h6></a>
                                    <span>28 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/database.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>নেটওয়ার্কিং</h6></a>
                                    <span>78 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/python.png" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>পাইথন </h6></a>
                                    <span>38 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="course.html" class="lab-btn"><span>সকল ক্যাটাগরি দেখুন</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->


    <!-- course section start here 
    <div class="course-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Featured Courses</span>
                <h2 class="title">Pick A Course To Get Started</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/3danimation.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">3D Animation</a>
                                        </div>
                                        
                                    </div>
                                    <a href="course-single.html"><h5>বেসিক মডেলিং এবং সফটওয়ার পরিচিতি</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="team-single.html" class="ca-name">William Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">জয়েন করুন <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/robotics.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Robotics</a>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>বেসিক মেশিন ল্যাংগুয়েজ ও পরিচিতি</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i><span>১২</span><span>টি ক্লাস</span></div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> অনলাইন ক্লাস</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="team-single.html" class="ca-name">Lora Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">জয়েন করুন <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/marketing.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">marketing</a>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>Theory Learn New Student And Fundamentals</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="team-single.html" class="ca-name">Robot Smith</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">জয়েন করুন <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/3danimation.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">3D Animation</a>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>3D Product Modelling with Autodesk Maya</h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="team-single.html" class="ca-name">Zinat Zaara</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">জয়েন করুন <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/webdesign.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Web Development</a>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>সম্পূর্ণ এইচটিএমএল মার্কআপ ল্যাংগুয়েজ একসাথে </h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="team-single.html" class="ca-name">Billy Rivera</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">জয়েন করুন <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/social.png" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">$30</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Web Development</a>
                                        </div>
                                    </div>
                                    <a href="course-single.html"><h5>প্রোফেশনাল পিএইচপি প্রোগ্রামিং ল্যাংগুয়েজ </h5></a>
                                    <div class="course-details">
                                        <div class="couse-count"><i class="icofont-video-alt"></i><span>13</span> <span>টি ক্লাস</span></div>
                                        <div class="couse-topic"><i class="icofont-signal"></i> অনলাইন ক্লাস</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="team-single.html" class="ca-name">Subrina Kabir</a>
                                        </div>
                                        <div class="course-btn">
                                            <a href="course-single.html" class="lab-btn-text">জয়েন করুন <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    course section ending here -->

    
     <!-- course section start here -->
    <div class="course-section style-3 padding-tb">
        <div class="course-shape one"><img src="assets/images/shape-img/icon/01.png" alt="education"></div>
        <div class="course-shape two"><img src="assets/images/shape-img/icon/02.png" alt="education"></div>
        <div class="container">
            <div class="section-header">
                <h2 class="title">কোর্সসমূহ</h2>
                <div class="course-filter-group">
                    <ul class="lab-ul">
                        <li class="active" data-filter="*">সকল</li>
                        <li data-filter=".animation">3D অ্যানিমেশন</li>
                        <li data-filter=".web">ওয়েব ডেভেলপমেন্ট</li>
                        <li data-filter=".graphic">গ্রাফিক্স ডিজাইন</li>
                        <li data-filter=".robotics">রোবোটিক্স</li>
                        <li data-filter=".program">প্রোগ্রামিং</li>
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">


                <?php
          
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="courses";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
              $query = "SELECT * FROM admission ORDER BY id DESC LIMIT 50";
          $query_run = mysqli_query($conn, $query);
          $check_book = mysqli_num_rows($query_run) > 0;
          
          if($check_book ){
              
            while(  $row = mysqli_fetch_array($query_run)){
            
            ?>
                    <div class="col <?php echo $row['catagory'] ?>">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="<?php echo $row['cover'] ?>" alt="course">
                                    
                                </div>
                                <div class="course-content">
                                    <a href="course-single.php?sub=<?php echo $row['subjectcode'] ?>&id=<?php echo $row['id'] ?>"><h5><?php echo $row['title'] ?></h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/man.png" alt="course author">
                                            <a href="teacher.php?sub=<?php echo $row['teacher1'] ?>" class="ca-name"><?php echo $row['teacher1'] ?></a>
                                        </div>
                                        <div class="course-price">$<?php echo $row['price'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- course section ending here -->

    <?php
          
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="review";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $query = "SELECT * FROM about where id='1'";
            $query_run = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($query_run)
            ?>
    <!-- abouts section start here -->
    <div class="about-section">
        <div class="container">
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-end flex-row-reverse">
                <div class="col">
                    <div class="about-right padding-tb">
                        <div class="section-header">
                            <span class="subtitle">আমাদের সম্পর্কে</span>
                            <h2 class="title"><?php echo $row['title'] ?></h2>
                            <p><?php echo $row['description'] ?></p>
                        </div>
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="<?php echo $row['feature1icon'] ?>" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5><?php echo $row['feature1'] ?></h5>
                                        <p><?php echo $row['feature1des'] ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="<?php echo $row['feature2icon'] ?>" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5><?php echo $row['feature2'] ?></h5>
                                        <p><?php echo $row['feature2des'] ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sr-left">
                                        <img src="<?php echo $row['feature3icon'] ?>" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5><?php echo $row['feature3'] ?></h5>
                                        <p><?php echo $row['feature3des'] ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="assets/images/bg-img/01.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section ending here -->
    <?php
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="events";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            ?>
    
    <!-- Event Section Start Here -->
    <div class="event-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">অংশ নিন ফ্রি সেমিনারে</span>
                <h2 class="title">আসন্ন ঘটনাবলী</h2>
                <p class="desc">ফ্রিল্যান্সিং-এর জন্য কোন কোর্স করবেন, সিদ্ধান্ত নিতে পারছেন না? জয়েন করুন আমাদের ফ্রি সেমিনারে। বিষয়ভিত্তিক এই সেমিনারগুলোতে প্রতিটি কোর্সের সম্ভাবনা সম্পর্কে জানতে পারবেন। তাছাড়া সেমিনারে উপস্থিত এক্সপার্ট কাউন্সেলরের সঙ্গে কথা বলে আপনি যথাযথ কোর্স বেছে নেওয়ার সিদ্ধান্ত নিতে পারবেন সহজেই।</p>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-lg-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="event-left">
                            <div class="event-item">
                                <div class="event-inner">
                                    <div class="event-thumb">
                                        <img src="assets/images/course/robotics.png" alt="education">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="event-right">
                            <?php
                            $query = "SELECT * FROM upcoming";
                            $query_run = mysqli_query($conn, $query);
                            $check_book = mysqli_num_rows($query_run) > 0;
                            if($check_book ){

                            while($row = mysqli_fetch_array($query_run)){
                            ?>
                            <div class="event-item">
                                <div class="event-inner">
                                    <div class="event-content">
                                        <div class="event-date-info">
                                            <div class="edi-box">
                                                <h4><?php echo $row['date'] ?></h4>
                                                <p><?php echo $row['month'] ?></p>
                                            </div>
                                        </div>
                                        <div class="event-content-info">
                                            <a href="#"><h5><?php echo $row['title'] ?></h5></a>
                                            <ul class="lab-ul">
                                                <li><i class="icofont-clock-time"></i> <?php echo $row['time'] ?> <?php echo $row['timemain'] ?></li>
                                                <li><i class="icofont-google-map"></i><?php echo $row['location'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Section Ending Here -->


    <!-- Instructors Section Start Here -->
    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">আমাদের প্রশিক্ষক</span>
                <h2 class="title">বাস্তব নির্মাতাদের দ্বারা শেখানো ক্লাস</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/man.png" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>মোঃ সাকিল আহমেদ</h4></a>
                                    <p>Master of Education Degree</p>
                                   
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/video-calling.png" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Donald Logan</h4></a>
                                    <p>Master of Education Degree</p>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/woman.png" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Oliver Porter</h4></a>
                                    <p>Master of Education Degree</p>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> <span>৩</span><span>টি কোর্স</span></li>
                                    <li><i class="icofont-users-alt-3"></i> <span>49</span> <span>জন ছাত্র</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/doctor.png" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>Nahla Jones</h4></a>
                                    <p>Master of Education Degree</p>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center footer-btn">
                    <p>Want to help people learn, grow and achieve more in life?<a href="team.html">Become an instructor</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->

    <?php
          
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = '';
          $dbname ="review";
          
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
                ?>
    <!-- student feedbak section start here -->
    <div class="student-feedbak-section padding-tb shape-img">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">২০০+ ছাত্রদের দ্বারা পছন্দ হয়েছে৷</span>
                <h2 class="title">ছাত্রদের প্রতিক্রিয়া</h2>
            </div>
            <?php
            $query = "SELECT * FROM students where id='1'";
            $query_run = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($query_run);
            ?>
            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="sf-left">
                            <div class="sfl-thumb">
                                <img src="<?php echo $row['tumbail'] ?>" alt="student feedback">
                                <a href="<?php echo $row['videolink'] ?>" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-thumb">
                                            <img src="assets/images/feedback/student/01.jpg" alt="student feedback">
                                        </div>
                                        <div class="sftl-content">
                                            <a href="#"><h6><?php echo $row['student'] ?></h6></a>
                                            <span><?php echo $row['student_title'] ?></span>
                                        </div>
                                    </div>
                                    <div class="sft-right">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p><?php echo $row['comment'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $query = "SELECT * FROM students where id='2'";
                        $query_run = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($query_run);
                        ?>
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-thumb">
                                            <img src="assets/images/feedback/student/02.jpg" alt="student feedback">
                                        </div>
                                        <div class="sftl-content">
                                            <a href="#"><h6><?php echo $row['student'] ?></h6></a>
                                            <span><?php echo $row['student_title'] ?></span>
                                        </div>
                                    </div>
                                    <div class="sft-right">
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p><?php echo $row['comment'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->


    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">FORM OUR BLOG POSTS</span>
                <h2 class="title">More Articles From Resource Library</h2>
            </div>
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/01.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/02.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/03.jpg" alt="blog thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="blog-single.html"><h4>Scottish Creatives To Receive Funded Business.</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>Begrass Tyson</li>
                                            <li><i class="icofont-calendar"></i>April 23,2021</li>
                                        </ul>
                                    </div>
                                    <p>Pluoresnts customize prancing apcente customer service anding ands asing in straelg Interacvely cordinate performe</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="blog-single.html" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                    <div class="pf-right">
                                        <i class="icofont-comment"></i>
                                        <span class="comment-count">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->


    <!-- Achievement section start here -->
    <div class="achievement-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">সাফল্যের জন্য শুরু করুন</span>
                <h2 class="title">TX Academy দিয়ে আপনার লক্ষ্য অর্জন করুন</h2>
            </div>
            <div class="section-wrapper">
                <div class="counter-part mb-4">
                    <div class="row g-5 row-cols-lg-5 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="3000" data-speed="1500"></span><span>+</span></h2>
                                        <p>মোট শিক্ষার্থী</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="1890" data-speed="1500"></span><span>+</span></h2>
                                        <p>সফল ফ্রিল্যান্সার</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="530" data-speed="1500"></span><span>+</span></h2>
                                        <p>সফল চাকুরীজিবী</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="14" data-speed="1500"></span><span>+</span></h2>
                                        <p>ইন্ডাস্ট্রি এক্সপার্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-content">
                                        <h2><span class="count" data-to="10" data-speed="1500"></span><span>+</span></h2>
                                        <p>কোম্পানী কানেক্টেট </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="achieve-part">
                    <div class="row g-4 row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <div class="achieve-item">
                                <div class="achieve-inner">
                                    <div class="achieve-thumb">
                                        <img src="assets/images/achive/01.png" alt="achieve thumb">
                                    </div>
                                    <div class="achieve-content">
                                        <h4>আজই শেখানো শুরু করুন</h4>
                                        <p>নির্বিঘ্নে নীতিগতভাবে টেকনিক্যালি সাউন্ড কো-অ্যাবোরেটিভ রিইন্টারমড গোল ওরিয়েন্টেড কন্টেন্ট এথিকার পরিবর্তে নিযুক্ত করুন</p>
                                        <a href="#" class="lab-btn"><span> একজন প্রশিক্ষক হন</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="achieve-item">
                                <div class="achieve-inner">
                                    <div class="achieve-thumb">
                                        <img src="assets/images/achive/02.png" alt="achieve thumb">
                                    </div>
                                    <div class="achieve-content">
                                        <h4>আমাদের কোর্সে যোগ দেন</h4>
                                        <p>নির্বিঘ্নে নীতিগতভাবে টেকনিক্যালি সাউন্ড কো-অ্যাবোরেটিভ রিইন্টারমড গোল ওরিয়েন্টেড কন্টেন্ট এথিকার পরিবর্তে নিযুক্ত করুন</p>
                                        <a href="#" class="lab-btn"><span> নিবন্ধন করুন</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievement section ending here -->

<?php include 'footer.php' ?>