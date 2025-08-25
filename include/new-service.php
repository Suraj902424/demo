<div id="rs-services" class="rs-services style1 modify pt-92 pb-84 md-pt-72 md-pb-64">
    <div class="container">
        <div class="sec-title text-center mb-47 md-mb-42">
            <div class="sub-title primary">Services</div>
            <h2 class="title mb-0">Our Best Services</h2>
        </div>
        <div class="row">
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM tbl_services ORDER BY id DESC LIMIT 8") or die(mysqli_error($conn));
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
