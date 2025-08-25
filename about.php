<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:14:46 GMT -->
    <?php include 'include/head.php'; ?>
    
        <!-- meta tag -->
    <body>

        <!-- Preloader area start here -->
              <?php include 'include/loder.php'; ?>

        <!--End preloader here -->

        <!--Full width header Start-->
<?php include 'include/topbar.php'; ?>    
        <!-- Toolbar End -->
            
            <!--Header Start-->
            <?php include 'include/header.php'; ?>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-1">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">About</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- About Section Start -->
            <div class="rs-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
                <div class="container">
                    <div class="row y-middle mb-64 lg-mb-30 md-mb-0">
                        <div class="col-lg-6 md-mb-95">
                            <div class="image-part">
                                <img src="admin/uploads/products/<?= $row['image2'] ?>" alt="">
                                <!-- <div class="author-info">
                                    <h3 class="name">Marlina Moore</h3>
                                    <span class="designation">CEO & Founder</span>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 pl-50 md-pl-15 pr-50 lg-pr-15">
                            <div class="sec-title mb-25">
                                <div class="sub-title primary">About</div>
                                <h2 class="title mb-18"><?= $row['about_us_heading'] ?></h2>
                                <div class="desc"><?= $row['about_short'] ?></div>
                            </div>
                            <ul class="listing-style2 mb-33">
                                <?= $row['description'] ?>
                            </ul>
                            <div class="btn-part">
                                <a class="readon" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Counter Section Start -->
            <div class="rs-counter style1 modify bg21 pt-92 pb-100 md-pt-72 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-52 md-mb-29">
                        <div class="sub-title white-color">Fun Facts</div>
                        <h2 class="title mb-0 white-color">Facts For Choosing Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="couter-part thousand">
                                <div class="rs-count">100</div>
                                <h5 class="title">Happy Clients</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                            <div class="couter-part plus">
                                <div class="rs-count">250</div>
                                <h5 class="title">Projects Done</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                            <div class="couter-part plus">
                                <div class="rs-count">60</div>
                                <h5 class="title">Expert People</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="couter-part thousand">
                                <div class="rs-count">230</div>
                                <h5 class="title">Portfolios</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->

            <!-- Team Section Start -->
             <?php include 'include/team.php'; ?>
            <!-- Team Section End -->

            <!-- Free Quote Section Start -->
            <div id="rs-freequote" class="rs-freequote style1 modify pt-80 pb-106 md-pt-72 md-pb-78">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 pl-65 md-pl-15">
                            <div id="form-messages" class="white-color"></div>
                            <form id="contact-form" class="quote-form" method="post" action="https://rstheme.com/products/html/reobiz/mailer.php">
                                <div class="sec-title mb-53">
                                    <div class="sub-title white-color">Let's Talk</div>
                                    <h2 class="title white-color mb-0">Request a Free Quote</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="E-mail" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="website" placeholder="Your Website" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="readon modify">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Free Quote Section End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
  <!-- Footer Start -->
         <?php include 'include/footer.php'; ?>
        <!-- Footer End -->

        <!-- start scrollUp  -->

        <?php include 'include/scrollup.php'; ?>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
         <?php include 'include/serach.php';  ?>
        <!-- Search Modal End -->
         <?php include 'include/js.php' ?>        <!-- Footer End -->

        <!-- start scrollUp  -->
    </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:14:46 GMT -->
</html>