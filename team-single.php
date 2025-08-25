<?php
include 'config.php'; // include your DB connection

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = mysqli_query($conn, "SELECT * FROM tbl_team WHERE id = $id") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="zxx">
<?php include 'include/head.php'; ?>
<body class="defult-home">

<?php include 'include/loder.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/header.php'; ?>

<div class="main-content">

    <!-- Breadcrumbs -->
    <div class="rs-breadcrumbs bg-3">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0"><?= $data['name'] ?></h1>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <section class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row clearfix">

                <!-- Image Section -->
                <div class="image-column col-lg-5 md-mb-50">
                    <div class="inner-column mb-50 md-mb-0">
                        <div class="image">
                            <img src="admin/uploads/products/<?= $data['image1'] ?>" alt="<?= $data['name'] ?>" />
                        </div>
                        <div class="team-content text-center">
                            <h3><?= $data['name'] ?></h3>
                            <div class="text"><?= $data['post'] ?></div>
                            <ul class="personal-info">
                                <?php if (!empty($data['email'])): ?>
                                    <li class="email">
                                        <span><i class="glyph-icon flaticon-email"></i></span>
                                        <a href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (!empty($data['phone'])): ?>
                                    <li class="phone">
                                        <span><i class="glyph-icon flaticon-call"></i></span>
                                        <a href="tel:<?= $data['phone'] ?>"><?= $data['phone'] ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="social-box">
                            <?php if (!empty($data['link'])): ?><a href="<?= $data['link'] ?>" class="fa fa-facebook-square"></a><?php endif; ?>
                            <?php if (!empty($data['link1'])): ?><a href="<?= $data['link1'] ?>" class="fa fa-instagram"></a><?php endif; ?>
                            <?php if (!empty($data['link2'])): ?><a href="<?= $data['link2'] ?>" class="fa fa-twitter"></a><?php endif; ?>
                            <?php if (!empty($data['link3'])): ?><a href="<?= $data['link3'] ?>" class="fa fa-youtube"></a><?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                    <div class="inner-column">
                        <h2><?= $data['name'] ?></h2>
                        <h4><?= $data['post'] ?></h4>

                        <ul class="student-list">
                            <li>23,564 Total Students</li>
                            <li><span class="theme_color">4.5</span> 
                                <span class="fa fa-star"></span><span class="fa fa-star"></span>
                                <span class="fa fa-star"></span><span class="fa fa-star"></span>
                                <span class="fa fa-star"></span> (1254 Rating)</li>
                            <li>256 Reviews</li>
                        </ul>

                        <h5>About Me</h5>
                        <p><?= nl2br($data['overview']) ?></p>

                        <div class="team-skill mb-50">
                            <h3 class="skill-title">Our Team Member Skill:</h3>
                            <div class="row">
                                <div class="col-md-6 sm-mb-20">
                                    <div class="progress rs-progress">
                                        <div class="progress-bar" style="width:95%">
                                            <span class="pb-label">Accounting</span>
                                            <span class="pb-percent">95%</span>
                                        </div>
                                    </div>
                                    <div class="progress rs-progress">
                                        <div class="progress-bar" style="width:85%">
                                            <span class="pb-label">Reading</span>
                                            <span class="pb-percent">85%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress rs-progress">
                                        <div class="progress-bar" style="width:88%">
                                            <span class="pb-label">Writing</span>
                                            <span class="pb-percent">88%</span>
                                        </div>
                                    </div>
                                    <div class="progress rs-progress">
                                        <div class="progress-bar" style="width:75%">
                                            <span class="pb-label">Speaking</span>
                                            <span class="pb-percent">75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Additional Content -->
                <div class="col-lg-12">
                    <div class="content-part">
                        <h3 class="title"><?= $data['title'] ?? 'More About Me' ?></h3>
                        <p><?= nl2br($data['about'] ?? '') ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<?php include 'include/footer.php'; ?>
<?php include 'include/scrollup.php'; ?>
<?php include 'include/serach.php'; ?>
<?php include 'include/js.php'; ?>
</body>
</html>
