<?php 
include 'config.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = mysqli_query($conn, "SELECT * FROM tbl_services WHERE id = $id") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql);

$pageTitle = !empty($data['name']) ? $data['name'] : 'Service Detail';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <?php include 'include/head.php'; ?>
</head>

<body>
    <?php include 'include/topbar.php'; ?>
    <?php include 'include/header.php'; ?>

    <div class="main-content">
        <div class="rs-breadcrumbs bg-3">
            <div class="container">
                <div class="content-part text-center pt-160 pb-160">
                    <h1 class="breadcrumbs-title white-color mb-0"><?= htmlspecialchars($data['name']) ?></h1>
                </div>
            </div>
        </div>

        <div id="rs-services" class="rs-services single pt-100 pb-100 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pr-40 md-pr-15 md-mb-50">
                        <img class="mb-39" src="admin/uploads/products/<?= htmlspecialchars($data['image1']) ?>" alt="<?= htmlspecialchars($data['name']) ?>">

                        <h2><?= htmlspecialchars($data['name']) ?></h2>
<div class="desc mb-31"><?= $data['full_description'] ?></div>
                    </div>

                    <div class="col-lg-4">
                        <ul class="page-nav-vertical mb-50">
                            <?php
                            $all = mysqli_query($conn, "SELECT id, name FROM tbl_services ORDER BY id ASC");
                            while ($s = mysqli_fetch_assoc($all)) {
                                $active = $s['id'] == $id ? 'class="active"' : '';
                                echo '<li ' . $active . '><a href="services-single.php?id=' . $s['id'] . '">' . htmlspecialchars($s['name']) . '</a></li>';
                            }
                            ?>
                        </ul>

                        <div class="addd mb-50">
                            <div class="contact-icon"> <i class="fa fa-phone"></i></div>
                            <h2 class="title white-color">Have any Questions? <br> Call us Today!</h2>
                            <div class="contact white">
                                <a href="tel:<?= $row['phone1'] ?>"><?= $row['phone1'] ?></a>
                            </div>
                        </div>

                        <div class="brochures">
                            <h3 class="title mb-20">Brochures</h3>
                            <p class="desc mb-30">Download our services brochures for more information.</p>
                            <div class="dual-btn modify">
                                <div class="dual-btn-wrap">
                                    <a class="btn-left" href="#"><span>Download</span></a>
                                    <span class="connector"> Or </span>
                                </div>
                                <div class="dual-btn-wrap">
                                    <a class="btn-right" href="#"><span>Discover</span></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-4 -->
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/scrollup.php'; ?>
    <?php include 'include/serach.php'; ?>
    <?php include 'include/js.php'; ?>
</body>
</html>
