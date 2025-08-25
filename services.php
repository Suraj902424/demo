<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:14:47 GMT -->
    <?php include 'include/head.php'; ?>
        <!-- meta tag -->
    <body>

        <!-- Preloader area start here -->
  <?php include 'include/loder.php'; ?>
        <!--End preloader here -->

        <!--Full width header Start-->
<?php include 'include/topbar.php'; ?>             
    <?php include 'include/header.php'; ?>      
      <!--Full width header End-->
       <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-2">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Services</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Services Section Start -->
<div id="rs-services" class="rs-services style1 modify pt-92 pb-84 md-pt-72 md-pb-64">
    <div class="container">
        <div class="sec-title text-center mb-47 md-mb-42">
            <div class="sub-title primary">Services</div>
            <h2 class="title mb-0">Our Best Services</h2>
        </div>
        <div class="row">
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM tbl_services") or die(mysqli_error($conn));
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
                <div class="col-lg-3 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="admin/uploads/products/<?= htmlspecialchars($row['image1']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                        </div>
                        <div class="content-part">
                            <h5 class="title">
                                <a href="services-single.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['name']) ?></a>
                            </h5>
                            <div class="desc"><?= htmlspecialchars($row['short_description']) ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                        <!-- <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/2.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Reports Analysis</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/3.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Profit Planning</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/4.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Project Reporting</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/5.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Estate Planning</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/6.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Security Enhanced</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="assets/images/services/icons/modify/7.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Cloud Computing</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part size-mod">
                                    <img src="assets/images/services/icons/modify/8.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="services-single.html">Cryptocurrency</a></h5>
                                    <div class="desc">We always provide people a complete solution focused of any business.</div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Services Section End -->

            <!-- Cta Section Start -->
            <div class="rs-cta bg21 pt-90 pb-100 md-pt-68 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sub-title modify white">Any plan to start a project</div>
                        <h2 class="title3 white-color">Our Experts always ready to work <br> with you.</h2>
                        <div class="btn-part">
                            <a class="readon banner-style" href="contact.html">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta Section End -->

            <!-- Free Quote Section Start -->
            <div id="rs-freequote" class="rs-freequote style3 pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row md-col-padding">
                        <div class="col-lg-5 custom1 pr-0">
                            <div class="img-part"></div>
                        </div>
                        <div class="col-lg-7 custom2 pl-0">
                            <div id="form-messages"></div>
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
         <?php include 'include/js.php' ?>
            </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:14:47 GMT -->
</html>