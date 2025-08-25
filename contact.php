<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:15:24 GMT -->
    <?php include 'include/head.php'; ?>
    <body>

        <!-- Preloader area start here -->
   <!-- <?php include 'include/loder.php'; ?> -->
        <!--End preloader here -->

        <!--Full width header Start-->
<?php include 'include/topbar.php'; ?>    
        <!-- Toolbar End -->
            
            <!--Header Start-->
            <?php include 'include/header.php'; ?>        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-6">
                <div class="container">
                    <div class="content-part text-center">
                        <h1 class="breadcrumbs-title white-color mb-0">Contact</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact inner pt-100 md-pt-80">
                <div class="container">
                    <div class="content-info-part mb-60">
                        <div class="row gutter-16">
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-at"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Phone Number</h4>
                                        <a href="tel:<?= $row['phone1'] ?>"><?= $row['phone1'] ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mb-30">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Email Address</h4>
                                        <a href="mailto:<?= $row['email'] ?>"><?= $row['email'] ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <div class="icon-part">
                                        <i class="fa fa-map-o"></i>
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">Office Address</h4>
                                        <p><?= $row['address'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-part">
                        <div class="row md-col-padding">
                            <div class="col-md-5 custom1 pr-0">
                                <div class="img-part"></div>
                            </div>
                            <div class="col-md-7 custom2 pl-0">
                                <div id="form-messages"></div>
<form id="contact-form" method="post" action="contact-save.php">
    <div class="sec-title mb-53 md-mb-42">
        <div class="sub-title white-color">Let's Talk</div>
        <h2 class="title white-color mb-0">Get In Touch</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="col-md-6">
            <input type="text" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="col-md-6">
            <input type="text" name="website" placeholder="Your Website" required>
        </div>
        <div class="col-md-12">
            <textarea name="message" placeholder="Your Message Here" required></textarea>
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


<div class="g-map mt-100 md-mt-80">
    <iframe
        width="100%"
        height="400"
        style="border:0;"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="<?= $row['url'] ?>">
    </iframe>
</div>


            <!-- Contact Section End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
   <?php include 'include/footer.php'; ?>
        <!-- Footer End -->

        <!-- start scrollUp  -->

        <?php include 'include/scrollup.php'; ?>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
         <?php include 'include/serach.php';  ?>
        <!-- Search Modal End -->
         <?php include 'include/js.php' ?>    </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:15:24 GMT -->
</html>