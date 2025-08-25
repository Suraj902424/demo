<div id="rs-portfolio" class="rs-portfolio style1">
    <div class="rs-carousel owl-carousel dot-style1"
        data-loop="true"
        data-items="4"
        data-margin="22"
        data-autoplay="true"
        data-hoverpause="true"
        data-autoplay-timeout="5000"
        data-smart-speed="800"
        data-dots="true"
        data-nav="false"
        data-center-mode="false"
        data-mobile-device="1"
        data-mobile-device-nav="false"
        data-mobile-device-dots="false"
        data-ipad-device="2"
        data-ipad-device-nav="false"
        data-ipad-device-dots="true"
        data-ipad-device2="2"
        data-ipad-device-nav2="false"
        data-ipad-device-dots2="false"
        data-md-device="3"
        data-lg-device="4"
        data-md-device-nav="false"
        data-md-device-dots="true">

        <?php 
        $sql = mysqli_query($conn, "SELECT * FROM tbl_portfolio") or die(mysqli_error($conn));
        while ($row = mysqli_fetch_assoc($sql)) {
        ?>
        <div class="portfolio-item">
            <div class="img-part">
                <a href="portfolio-standard.php?id=<?= $row['id'] ?>">
                    <img src="admin/uploads/products/<?= $row['image1'] ?>" alt="<?= $row['name'] ?>">
                </a>
            </div>
            <div class="content-part">
                <a class="categories" href="portfolio-standard.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                <h4 class="title">
                    <a href="portfolio-standard.php?id=<?= $row['id'] ?>"><?= $row['category'] ?></a>
                </h4>
            </div>
        </div>
        <?php } ?>
  

        
  

                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/2.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Business</a>
                            <h4 class="title"><a href="portfolio-gallery.html">Big Data Services</a></h4>
                        </div>
                    </div> -->
                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/3.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Consulting</a>
                            <h4 class="title"><a href="portfolio-gallery.html">HR Recruiting</a></h4>
                        </div>
                    </div> -->
                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/4.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Strategy</a>
                            <h4 class="title"><a href="portfolio-gallery.html">Security Services</a></h4>
                        </div>
                    </div> -->
                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/5.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Finance</a>
                            <h4 class="title"><a href="portfolio-gallery.html">Sales Enablement</a></h4>
                        </div>
                    </div> -->
                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/6.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Business</a>
                            <h4 class="title"><a href="portfolio-gallery.html">Advertising Technology</a></h4>
                        </div>
                    </div> -->
                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/7.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Consulting</a>
                            <h4 class="title"><a href="portfolio-gallery.html">Support Technology</a></h4>
                        </div>
                    </div> -->
                    <!-- <div class="portfolio-item">
                        <div class="img-part">
                            <img src="assets/images/casestudies/8.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <a class="categories" href="portfolio-gallery.html">Marketing</a>
                            <h4 class="title"><a href="portfolio-gallery.html">Stock Market Analysis</a></h4>
                        </div>
                    </div> -->
                </div>
            </div>

            