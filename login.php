<?php
$db_connection = mysqli_connect("localhost","root","","google_login");
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}

if(isset($_SESSION['login_id'])){
    header('Location: index.php');
    exit;
}

require 'google/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('31865071554-bgl73njg9h92d9u73blmp5iod3cm33bk.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost/edukon/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($db_connection, $google_account_info->id);
        $full_name = mysqli_real_escape_string($db_connection, trim($google_account_info->name));
        $email = mysqli_real_escape_string($db_connection, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($db_connection, $google_account_info->picture);

        // checking user already exists or not
        $get_user = mysqli_query($db_connection, "SELECT `id` FROM `users` WHERE `id`='$id'");
        if(mysqli_num_rows($get_user) > 0){

            $_SESSION['login_id'] = $id; 
            header('Location: index.php');
            exit;

        }
        else{

            // if user not exists we will select the user
            $select = mysqli_query($db_connection, "SELECT * FROM `users`(`id = $id`,`name=$full_name`,`email=$email`,`profile=$profile_pic`");
            

            if($select){
                $_SESSION['login_id'] = $id; 
                header('Location: index.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }

    }
    else{
        header('Location: login.php');
        exit;
    }
    
else: 
    // Google Login Url = $client->createAuthUrl(); 
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
                <h3 class="title">লগইন করুন</h3>
                <form class="account-form">
                    <div class="form-group">
                        <input type="email" placeholder="ই-মেইল লিখুন" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="পাসওয়ার্ড লিখুন" name="password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">আমাকে মনে কর</label>
                            </div>
                            <a href="forgetpass.php">পাসওয়ার্ড ভুলে গেছেন?</a>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="d-block lab-btn"><span>সাবমিট করুন</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">কোন অ্যাকাউন্ট নেই?  <a href="signup.php">রেজিস্টার করুন</a></span>
                    <span class="or"><span>বা</span></span>
                    <h5 class="subtitle">সোশ্যাল মিডিয়া দিয়ে লগইন করুন</h5>
                    <ul class="lab-ul social-icons justify-content-center">
                        <li>
                            <a href="<?php echo $client->createAuthUrl(); ?>" class="facebook"><i class="icofont-facebook"></i></a>
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
<?php endif; ?>