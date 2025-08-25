<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>

<?php include 'include/loder.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/header.php'; ?>

<div class="main-content">

    <!-- Breadcrumb -->
    <div class="rs-breadcrumbs bg-8">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">Blog</h1>
            </div>
        </div>
    </div>

    <!-- Blog Section Start -->
    <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">

            <?php
            $limit = 6;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;

            $result = mysqli_query($conn, "SELECT COUNT(id) AS total FROM tbl_blog");
            $total = mysqli_fetch_assoc($result)['total'];
            $pages = ceil($total / $limit);

            $sql = mysqli_query($conn, "SELECT * FROM tbl_blog ORDER BY id DESC LIMIT $start, $limit");
            ?>

            <div class="row" style="display: flex; flex-wrap: wrap; gap: 30px;">
                <?php while($row = mysqli_fetch_assoc($sql)) { ?>
                    <div class="blog-wrap shadow mb-30" style="flex: 1 1 calc(33.333% - 30px); box-sizing: border-box;">
                        <div class="image-part">
                            <a href="blog-single.php?id=<?= $row['id'] ?>">
                                <img src="admin/uploads/products/<?= $row['image1'] ?>" alt="" style="width: 100%; height: auto;">
                            </a>
                        </div>
                        <div class="content-part">
                            <h3 class="title mb-10">
                                <a href="blog-single.php?id=<?= $row['id'] ?>"><?= $row['heading'] ?></a>
                            </h3>
                            <ul class="blog-meta mb-22">
                                <li><i class="fa fa-calendar-check-o"></i> <?= $row['date'] ?></li>
                            </ul>
                            <p class="desc mb-20">
                                <a href="blog-single.php?id=<?= $row['id'] ?>">
                                    <?= $row['short_description'] ?>
                                </a>
                            </p>
                            <div class="btn-part">
                                <a class="readon-arrow" href="blog-single.php?id=<?= $row['id'] ?>">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-area mt-40 text-center">
                <ul class="pagination" style="display: inline-flex; list-style: none; padding: 0; gap: 10px;">
                    <?php if($page > 1): ?>
                        <li><a href="?page=<?= $page - 1 ?>">&laquo; Prev</a></li>
                    <?php endif; ?>

                    <?php for($i = 1; $i <= $pages; $i++): ?>
                        <li>
                            <a href="?page=<?= $i ?>" style="<?= ($i == $page) ? 'font-weight: bold; text-decoration: underline;' : '' ?>">
                                <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php if($page < $pages): ?>
                        <li><a href="?page=<?= $page + 1 ?>">Next &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
    <!-- Blog Section End -->

</div>

<?php include 'include/footer.php'; ?>
        <!-- Scroll to Top -->
        <?php include 'include/scrollup.php'; ?>

        <!-- Search Modal Start -->
        <?php include 'include/serach.php'; ?>
        <!-- Search Modal End -->

        <?php include 'include/js.php'; ?>
</body>
</html>


                            <!-- <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/3.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/4.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/5.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="#">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/6.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/7.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/8.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-wrap shadow">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/9.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                            <div id="sticky-sidebar" class="blog-sidebar">
                                <div class="sidebar-search sidebar-grid shadow mb-50">
                                    <form class="search-bar">
                                        <input type="text" placeholder="Search...">
                                        <span>
                                          <button type="submit"><i class="flaticon-search"></i></button> 
                                        </span>
                                    </form>
                                </div>

                                <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">Recent Post</h3>
                                    </div>
                                    <div class="single-post mb-20">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/small/1.jpg" alt="post image"></a>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5 class="margin-0"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones </a></h5>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> 28 June, 2019</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post mb-20">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/small/2.jpg" alt="post image"></a>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5 class="margin-0"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones </a></h5>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> 28 June, 2019</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post mb-20">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/small/3.jpg" alt="post image"></a>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5 class="margin-0"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones </a></h5>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> 28 June, 2019</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post mb-20">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/small/4.jpg" alt="post image"></a>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5 class="margin-0"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones </a></h5>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> 28 June, 2019</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/small/5.jpg" alt="post image"></a>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5 class="margin-0"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones </a></h5>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> 28 June, 2019</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-categories sidebar-grid shadow">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">Categories</h3>
                                    </div>
                                    <ul>                                    
                                        <li><a href="#">Consulting</a></li> 
                                        <li><a href="#">Creative</a></li> 
                                        <li><a href="#">Development</a></li> 
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Management</a></li>
                                        <li><a href="#">Strategy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div id="sticky-end"></div>
                </div>
            </div>
            <!-- Blog Section  End -->
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
 <!-- Footer Start -->

    </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:15:17 GMT -->
</html>
