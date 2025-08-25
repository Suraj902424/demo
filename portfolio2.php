        <?php
include('config.php');


// Pagination settings
$limit = 6; // Items per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Total records count
$total_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tbl_portfolio");
$total_row = mysqli_fetch_assoc($total_result);
$total = $total_row['total'];
$pages = ceil($total / $limit);

// Fetch paginated records
$sql = mysqli_query($conn, "SELECT * FROM tbl_portfolio ORDER BY id DESC LIMIT $start, $limit");
?>

<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from rstheme.com/products/html/reobiz/portfolio2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:14:53 GMT -->
    <?php include 'include/head.php'; ?>
    <body>

        <!-- Preloader area start here -->
<?php include 'include/loder.php'; ?>
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
                    <div class="content-part text-center pt-160 pb-160">
                        <h1 class="breadcrumbs-title white-color mb-0">Portfolios Two</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Portfolio Section Start -->
            <div class="rs-portfolio style3 pt-100 pb-70 md-pt-80 md-pb-50">
                <div class="container">
                    <div class="row">
              <?php while ($row = mysqli_fetch_assoc($sql)) { ?>

                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="admin/uploads/products/<?= $row['image1'] ?>" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h4>
                                        <span class="categories"><a href="portfolio-standard.php?id=<?= $row['id'] ?>"><?= $row['category'] ?></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                                <!-- Pagination -->
<!-- Pagination -->
<div class="col-lg-12">
    <div class="pagination-area text-center mt-30">
        <ul class="pagination custom-pagination">
            <?php if ($page > 1): ?>
                <li><a href="?page=<?= $page - 1 ?>">&laquo; Prev</a></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $pages; $i++): ?>
                <li class="<?= ($i == $page) ? 'active' : '' ?>">
                    <a href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($page < $pages): ?>
                <li><a href="?page=<?= $page + 1 ?>">Next &raquo;</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
                        <!-- <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/2.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Stock Market Analysis</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Marketing</a></span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/3.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Sales Analysis</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Marketing</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/4.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Stock Investments</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Marketing</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/5.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Big Data Services</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Business</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/6.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">HR Recruiting</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Consulting</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/7.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Support Technology</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Consulting</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/8.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Stock Market Analysis</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Marketing</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="assets/images/portfolio/9.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <h4 class="title"><a href="portfolio-standard.html">Sales Analysis</a></h4>
                                        <span class="categories"><a href="portfolio-standard.html">Marketing</a></span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Portfolio Section End -->
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
         <?php include 'include/js.php' ?>   
         </body>

<!-- Mirrored from rstheme.com/products/html/reobiz/portfolio2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 08:14:53 GMT -->
</html>

<style>
    .custom-pagination {
    display: inline-flex;
    padding-left: 0;
    list-style: none;
    border-radius: 5px;
    justify-content: center;
}

.custom-pagination li {
    margin: 0 5px;
}

.custom-pagination li a {
    color: #007bff;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 8px 15px;
    text-decoration: none;
    font-weight: 500;
    border-radius: 5px;
    transition: 0.3s ease;
}

.custom-pagination li a:hover {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.custom-pagination li.active a {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
    font-weight: bold;
}

</style>