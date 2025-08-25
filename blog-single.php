<?php 
include 'include/head.php';
include 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = mysqli_query($conn, "SELECT * FROM tbl_blog WHERE id = $id") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql);
$pageTitle = !empty($data['name']) ? $data['name'] : 'Portfolio Detail';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $pageTitle ?></title>
    <?php include 'include/head.php'; ?>
</head>
<body>

<!-- Preloader -->
<?php include 'include/loder.php'; ?>

<!-- Topbar and Header -->
<?php include 'include/topbar.php'; ?>    
<?php include 'include/header.php'; ?>

<!-- Main Content Start -->
<div class="main-content">

    <!-- Breadcrumb Section -->
    <div class="rs-breadcrumbs bg-9">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0"><?= $pageTitle ?></h1>
            </div>
        </div>
    </div>

    <!-- Blog Details Section -->
    <div class="rs-blog inner single pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-part">

                        <!-- Blog Image -->
                        <div class="blog-img">
                            <a href="#"><img src="admin/uploads/products/<?= $data['image1'] ?>" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="article-content shadow mb-60">
                            <ul class="blog-meta mb-22">
                                <li><i class="fa fa-calendar-check-o"></i> <?= $data['date'] ?></li>
                                <li><i class="fa fa-user-o"></i> Admin</li>
                                <li><i class="fa fa-book"></i> <a href="#">Strategy</a></li>
                                <li><i class="fa fa-comments-o"></i> 10</li>
                            </ul>
                            <p class="desc mb-35"><?= $data['description'] ?></p>
                        </div>

                        <!-- Navigation -->
                        <div class="article-nav">
                            <ul>
                                <li class="next">
                                    <a href="#">
                                        <span class="next-link">Next <i class="flaticon-next"></i></span>
                                        <span class="link-text">Soundtrack Filma Lady Exclusive Music</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <!-- Comment Form -->
                        <div class="bs-contact-form pt-45">
                            <h3 class="title">Leave a Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-field">
                                            <label>Name *</label>
                                            <input type="text" name="name" required>
                                        </div>                              
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-field">
                                            <label>Email *</label>
                                            <input type="email" name="email" required>
                                        </div>                              
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-field mb-30">
                                            <label>Comment</label>
                                            <textarea rows="7" name="message"></textarea>
                                        </div>
                                        <div class="form-button mt-30">
                                            <button type="submit" class="readon radius">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
<div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
    <div id="sticky-sidebar" class="blog-sidebar">

        <!-- Search -->
        <div class="sidebar-search sidebar-grid shadow mb-50">
            <form class="search-bar" method="get" action="search.php">
                <input type="text" name="q" placeholder="Search...">
                <button type="submit"><i class="flaticon-search"></i></button>
            </form>
        </div>

        <!-- Recent Posts -->
        <div class="sidebar-popular-post sidebar-grid shadow mb-50">
            <div class="sidebar-title">
                <h3 class="title mb-20">Recent Post</h3>
            </div>

            <?php
            $recent = mysqli_query($conn, "SELECT id, heading, image1, date FROM tbl_blog ORDER BY id DESC LIMIT 6");
            if (mysqli_num_rows($recent) > 0) {
                while ($post = mysqli_fetch_assoc($recent)) {
            ?>
                <div class="single-post mb-20">
                    <div class="post-image">
                        <a href="blog-single.php?id=<?= $post['id'] ?>">
                            <img src="admin/uploads/products/<?= $post['image1'] ?>" alt="<?= htmlspecialchars($post['heading']) ?>">
                        </a>
                    </div>
                    <div class="post-desc">
                        <div class="post-title">
                            <h5><a href="blog-single.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['heading']) ?></a></h5>
                        </div>
                        <ul>
                            <li><i class="fa fa-calendar"></i> <?= date('d M, Y', strtotime($post['date'])) ?></li>
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
</div>

                            <!-- Repeat more posts if needed -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<?php include 'include/footer.php'; ?>

        <?php include 'include/scrollup.php'; ?>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
         <?php include 'include/serach.php';  ?>
        <!-- Search Modal End -->
         <?php include 'include/js.php' ?>
</body>
</html>


                                