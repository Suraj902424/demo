<header id="rs-header" class="rs-header">
    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="index.php"><img src="admin/uploads/products/<?= $row['image1'] ?>" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 text-right">
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <nav class="rs-menu pr-65">
                             <ul class="nav-menu" style="list-style: none; padding: 0; margin: 0;">
    <li><a href="index.php" style="color: white; text-decoration: none;">Home</a></li>
    <li><a href="about.php" style="color: white; text-decoration: none;">About Us</a></li>
    <li><a href="services.php" style="color: white; text-decoration: none;">Services</a></li>
    <li><a href="portfolio2.php" style="color: white; text-decoration: none;">Portfolio</a></li>
    <li><a href="blog.php" style="color: white; text-decoration: none;">Blog</a></li>
    <li><a href="contact.php" style="color: white; text-decoration: none;">Contact</a></li>
</ul>

                            </nav>
                        </div>
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="search-parent">
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="nav-expander" class="humburger nav-expander" href="#">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close" class="humburger">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                            <span class="dot4"></span>
                            <span class="dot5"></span>
                            <span class="dot6"></span>
                            <span class="dot7"></span>
                            <span class="dot8"></span>
                            <span class="dot9"></span>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="admin/uploads/products/<?= $row['image1'] ?>" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p><?= $row['about_us_heading'] ?></p>
                    </div>
               <div class="canvas-contact">
    <ul class="contact">
        <li><i class="flaticon-location"></i> <?= $row['address'] ?></li>
        <li><i class="flaticon-call"></i> 
            <a href="tel:<?= $row['phone1'] ?>"><?= $row['phone1'] ?></a>
        </li>
        <li><i class="flaticon-email"></i> 
            <a href="mailto:<?= $row['email'] ?>"><?= $row['email'] ?></a>
        </li>
        <li><i class="flaticon-clock"></i> 10:00 - 17:00</li>
    </ul>

    <ul class="social">
        <li><a href="<?= $row['link1'] ?>"><i class="fa fa-facebook"></i></a></li>
        <li><a href="<?= $row['link2'] ?>"><i class="fa fa-twitter"></i></a></li>
        <li><a href="<?= $row['link3'] ?>"><i class="fa fa-instagram"></i></a></li>
        <li><a href="<?= $row['link4'] ?>"><i class="fa fa-youtube"></i></a></li>
    </ul>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
</header>
