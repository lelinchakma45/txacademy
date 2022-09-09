<?php
  require_once 'vendor/autoload.php';

  //Make object of Google API Client for call Google API
  $google_client = new Google_Client();
  
  //Set the OAuth 2.0 Client ID
  $google_client->setClientId('31865071554-bgl73njg9h92d9u73blmp5iod3cm33bk.apps.googleusercontent.com');
  
  //Set the OAuth 2.0 Client Secret key
  $google_client->setClientSecret('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');
  
  //Set the OAuth 2.0 Redirect URI
  $google_client->setRedirectUri('http://localhost/edukon/signup.php');
  
  //
  $google_client->addScope('email');
  
  $google_client->addScope('profile');

  if(!isset($_SESSION['access_token'])) {
    //Create a URL to obtain user authorization
    $google_login_btn = '<a href="'.$google_client->createAuthUrl().'" class="facebook"><i class="icofont-facebook"></i></a>';
   } else {
 
     header("Location: dashboard.php");
   }
  
?>

<?php include 'header.php' ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section" style="padding:45px">
    </div>
    <!-- Page Header section ending here -->

    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb section-bg">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">জয়েন করুন </h3>
                <form class="account-form">
                    <div class="form-group">
                        <input type="text" placeholder="আপনার নাম লিখুন" name="username">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="আপনার ই-মেইল লিখুন" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="আপনার পাসওয়ার্ড লিখুন" name="password">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="আবার পাসওয়ার্ড দিন" name="password">
                    </div>
                    <div class="form-group">
                        <button class="lab-btn"><span>জয়েন করুন</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">আপনি কি একজন সদস্য?  <a href="login.php">প্রবেশ করুন</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">সোশ্যাল মিডিয়ার সাথে নিবন্ধন করুন</h5>
                    <ul class="lab-ul social-icons justify-content-center">
                        <li>
                            <?php echo $google_login_btn ?>
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
    </div>
    <!-- Login Section Section Ends Here -->

<?php include 'footer.php' ?>