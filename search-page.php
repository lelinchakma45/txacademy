<?php include 'header.php' ?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'courses') or die(mysqli_error());
	
if(!$conn){
    die("Error: Failed to connect to database");
}
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <?php 
                                if(isset($_POST['search'])){
	                             $keyword = $_POST['keyword'];
                                
                                $query = mysqli_query($conn, "SELECT * FROM `admission` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
                                $num = mysqli_num_rows($query);
                                ?>
                        <h2> '<?php echo $keyword ?>' এর জন্য <?php echo $num ?>টি ফলাফল পাওয়া গেছে</h2>
                        <?php } ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">হোম</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Search Result</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                            <?php
	                            
                                if(isset($_POST['search'])){
	                             $keyword = $_POST['keyword'];
                                
                                $query = mysqli_query($conn, "SELECT * FROM `admission` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
                                $check_book = mysqli_num_rows($query);
                                if($check_book > 0){
		                        while($fetch = mysqli_fetch_array($query)){
                                ?>
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <div class="post-content">
                                                <a href="blog-single.html"><h3><?php echo $fetch['title'] ?></h3></a>
                                                <p><?php echo substr($fetch['description'], 0, 300)?></p>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><i class="icofont-ui-user"></i><?php echo $fetch['teacher1'] ?></li>
                                                        <li><i class="icofont-settings"></i><?php echo $fetch['level'] ?></li>
                                                    </ul>
                                                </div>
                                                <a href="course-single.php?sub=<?php echo $fetch['subjectcode'] ?>&id=<?php echo $fetch['id']?>" class="lab-btn mt-2"><span>বিস্তারিত দেখুন <i class="icofont-external-link"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php }}} ?>
                                <?php 
                                if($check_book == 0){
                                    ?>

                                     <div class="col-lg-12 col-8">
                                         <article>
                                             <div class="section-wrapper">
                                                 <div class="row row-cols-1 justify-content-center g-1">
                                                     <div class="col">
                                                         <div class="post-item style-2">
                                                             <div class="post-inner">
                                                                 <div class="post-content">
                                                                     <h2 class="not-ruselt">আপনি যা খুঁজছেন তা খুঁজে পাওয়া যায়নি!</h2>
                                                                     <h2 class="opps">দুঃখিত! </h2>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </article>
                                     </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-search">
                            <h4>একটি নতুন অনুসন্ধান প্রয়োজন?</h4>
                            <p>আপনি যা খুঁজছেন তা খুঁজে না পেলে, একটি নতুন অনুসন্ধানের চেষ্টা করুন!</p>
                            <form action="search-page.php" class="search-wrapper" method="POST">
                                <input type="text" name="keyword" placeholder="Search...">
                                <button type="submit" name="search"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
<?php include 'footer.php' ?>