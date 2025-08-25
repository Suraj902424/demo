<div class="rs-testimonial style1 gray-bg pt-92 md-pt-72">
    <div class="container">
        <div class="sec-title text-center mb-54 md-mb-39">
            <div class="sub-title primary">Testimonials</div>
            <h2 class="title mb-0">Customers Reviews</h2>
        </div>
        <div class="white-bg">
            <div class="row">
                <div class="col-lg-6 pr-0 md-pl-pr-15">
                    <div class="bg-part md-pt-200 md-pb-200"></div>
                </div>
                <div class="col-lg-6 slider-part">
                    <div class="rs-carousel owl-carousel dot-style1"
                         data-loop="true" data-items="1" data-margin="30"
                         data-autoplay="true" data-hoverpause="true"
                         data-autoplay-timeout="5000" data-smart-speed="800"
                         data-dots="true" data-nav="false"
                         data-center-mode="false"
                         data-mobile-device="1" data-mobile-device-dots="false"
                         data-ipad-device="1" data-ipad-device-dots="true"
                         data-ipad-device2="1" data-ipad-device-dots2="false"
                         data-md-device="1" data-md-device-dots="true"
                         data-lg-device="1">

                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tbl_testimonial") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <div class="testi-item">
                            <div class="content-part text-center">
                                <div class="icon-part">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                 <blockquote class="testimonial-text">
                                       <?php /* --- YAHAN CHANGE KIYA GAYA HAI --- */ ?>
                                       <?= $row['description'] ?>
                                    </blockquote>
                            </div>
                            <div class="posted-by text-center">
                                <div class="avatar">
                                    <img src="admin/uploads/products/<?= htmlspecialchars($row['image1']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                                </div>
                                <h5 class="name"><?= htmlspecialchars($row['name']) ?></h5>
                                <span class="designation"><?= htmlspecialchars($row['name']) ?></span>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
