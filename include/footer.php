<?php include 'config.php'; ?>

<footer id="rs-footer" class="rs-footer">
    <div class="container">

        <!-- Newsletter Section -->
        <div class="footer-newsletter">
            <div class="row y-middle">
                <div class="col-md-6 sm-mb-26">
                    <h3 class="title white-color mb-0">Newsletter Subscribe</h3>
                </div>
                <div class="col-md-6 text-right">
                    <form class="newsletter-form">
                        <input type="email" name="email" placeholder="Your email address" required>
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer Content -->
        <div class="footer-content pt-62 pb-79 md-pb-64 sm-pt-48">
            <div class="row">

                <!-- About Section -->
                <div class="col-lg-4 col-md-12 footer-widget md-mb-39">
                    <div class="about-widget pr-15">
                        <div class="logo-part">
                            <a href="index.php">
                                <img src="admin/uploads/products/<?= $row['image1'] ?>" alt="Footer Logo">
                            </a>
                        </div>
                        <p class="desc">
                            We denounce with righteous indignation in and dislike men who are so beguiled and to demo
                            realized by the charms of pleasure moment...
                        </p>
                        <div class="btn-part">
                            <a class="readon" href="about.html">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 col-md-12 footer-widget md-mb-32">
                    <h4 class="widget-title">Contact Info</h4>
                    <ul class="address-widget pr-40">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc"><?= htmlspecialchars($row['address']) ?></div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:<?= htmlspecialchars($row['phone1']) ?>">
                                    <?= htmlspecialchars($row['phone1']) ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:<?= htmlspecialchars($row['email']) ?>">
                                    <?= htmlspecialchars($row['email']) ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock"></i>
                            <div class="desc">10:00 - 17:00</div>
                        </li>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="col-lg-4 col-md-12 footer-widget">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="sidebar-popular-post sidebar-grid shadow">
                        <?php
                        $recent = mysqli_query($conn, "SELECT id, heading, image1, date FROM tbl_blog ORDER BY id DESC LIMIT 1");
                        if (mysqli_num_rows($recent) > 0) {
                            while ($post = mysqli_fetch_assoc($recent)) {
                                $heading = htmlspecialchars($post['heading']);
                                $image   = htmlspecialchars($post['image1']);
                                $date    = date('d M, Y', strtotime($post['date']));
                                ?>
                                <div class="single-post mb-20">
                                    <div class="post-image">
                                        <a href="blog-single.php?id=<?= $post['id'] ?>">
                                            <img src="admin/uploads/products/<?= $image ?>" alt="<?= $heading ?>">
                                        </a>
                                    </div>
                                    <div class="post-desc">
                                        <h5>
                                            <a href="blog-single.php?id=<?= $post['id'] ?>"><?= $heading ?></a>
                                        </h5>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i> <?= $date ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No recent posts available.</p>";
                        }
                        ?>
                    </div>
                </div>

            </div> <!-- /.row -->
        </div> <!-- /.footer-content -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-8 sm-mb-21">
                    <div class="copyright">
                        <p>&copy; Copyright <?= date("Y") ?> Reobiz. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 text-right sm-text-center">
                    <ul class="footer-social">
                        <li><a href="<?= htmlspecialchars($row['link1']) ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= htmlspecialchars($row['link2']) ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= htmlspecialchars($row['link3']) ?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?= htmlspecialchars($row['link4']) ?>"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div> <!-- /.container -->
</footer>
