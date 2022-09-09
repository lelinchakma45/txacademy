<?php include 'header.php' ?>

    <!-- Page Header section start here -->
    <div class="pageheader-section" style="padding:45px">
    </div>
    <!-- Page Header section ending here -->

    <!-- Map & address us Section Section Starts Here -->
    <div class="map-address-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">আমাদের সাথে যোগাযোগ করুন</span>
                <h2 class="title">আমরা সবসময় শুনতে আগ্রহী!</h2>
            </div>
            <div class="section-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="contact-wrapper">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/01.png" alt="txacademy">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">অফিসের ঠিকানা</h6>
                                    <p>1201 park street, Fifth Avenue</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/02.png" alt="txacademy">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">ফোন নাম্বার</h6>
                                    <p>+৮৮০-১৫৬৯১-৭৯৭৪৩</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/03.png" alt="txacademy">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">ই-মেইল পাঠান </h6>
                                    <a href="mailto:stalinchakma30@gmail.com">txacademyoffical409@gmil.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/04.png" alt="txacademy">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">আমাদের ওয়েবসাইট</h6>
                                    <a href="#">www.txacademy.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="map-area">
                            <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1626.1382555149814!2d90.35371623623227!3d23.798776330485484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13991c3cd01%3A0x879716d5a4249c0c!2sMuktobangla%20Shopping%20Complex!5e0!3m2!1sen!2sbd!4v1662561512493!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map & address us Section Section Ends Here -->

    <!-- Contact us Section Section Starts Here -->
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">আমাদের সাথে যোগাযোগ করুন</span>
                <h2 class="title">নীচের ফর্মটির সাহায্যে আমাদের সাথে ভালোভাবে যোগাযোগ করতে পারেন</h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="আপনার নাম লিখুন" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="আপনার ই-মেইল লিখুন" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="আপনার ফোন নাম্বার লিখুন" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="আপনার বিষয় লিখুন" id="subject" name="subject" required>
                    </div>
                    <div class="form-group w-100">
                        <textarea name="message" rows="8" id="message" placeholder="আপনার মেসেজ লিখুন" required></textarea>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>আপনার মেসেজ পাঠান</span></button>
                    </div>
                </form>
                <p class="form-message"></p> 
            </div>
        </div>
    </div>
    <!-- Contact us Section Section Ends Here -->

<?php include 'footer.php' ?>