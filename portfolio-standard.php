<?php 
include 'include/head.php';
include 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = mysqli_query($conn, "SELECT * FROM tbl_portfolio WHERE id = $id") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql);
$pageTitle = !empty($data['name']) ? $data['name'] : 'Portfolio Detail';
?>
<!DOCTYPE html>
<html lang="en">
<body>

<?php include 'include/loder.php'; ?>
<?php include 'include/topbar.php'; ?>    
<?php include 'include/header.php'; ?>

<div class="main-content">

    <!-- Breadcrumb -->
    <div class="rs-breadcrumbs bg-7">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0"><?= htmlspecialchars($pageTitle) ?></h1>
            </div>
        </div>
    </div>

    <!-- Portfolio Details -->
    <div id="rs-portfolio" class="rs-portfolio single pt-100 pb-100">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8 pr-45 md-pr-15">
                    <?php if (!empty($data['image1'])): ?>
                        <img class="mb-25 img-fluid rounded shadow" src="admin/uploads/products/<?= $data['image1'] ?>" alt="<?= $pageTitle ?>">
                    <?php endif; ?>
                    
                    <p class="desc mb-4" style='font-size:30px; color:blue;'><?= nl2br($data['short_description'] ?? '<i>No short description available.</i>') ?></p>
                    <p class="desc"><?= nl2br($data['description'] ?? '<i>No full description available.</i>') ?></p>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 md-mb-50 md-order-first">
                    <div class="project-sidebar bg-light p-4 rounded shadow-sm">
                        <?php if (!empty($data['image1'])): ?>
                            <img class="mb-4 w-100 rounded" src="admin/uploads/products/<?= $data['image1'] ?>" alt="<?= $pageTitle ?>">
                        <?php endif; ?>

                        <div class="sb-project-detail">
                            <h4 class="title mb-3">Project Details</h4>
                            <ul class="list-unstyled">
                                <li><strong>Category:</strong> <?= $data['category'] ?? 'N/A' ?></li>
                                <li><strong>Client:</strong> <?= $data['client'] ?? 'N/A' ?></li>
                                <li><strong>Location:</strong> <?= $data['location'] ?? 'N/A' ?></li>
                                <li><strong>Completed Date:</strong> <?= $data['completed_date'] ?? 'N/A' ?></li>
                                <li><strong>Project Value:</strong> <?= $data['project_value'] ?? 'N/A' ?></li>
                                <li><strong>Manager:</strong> <?= $data['manager'] ?? 'N/A' ?></li>
                                <li><strong>Designer:</strong> <?= $data['designer'] ?? 'N/A' ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
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
