      <?php require_once 'config.php'; ?>
      <div class="full-width-header">
            <!-- Toolbar Start -->
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="toolbar-contact">
                                <ul>
                                    <li><i class="flaticon-email"></i><a href="mailto:info@yourwebsite.com"><?= $row['email'] ?></a></li>
                                    <li><i class="flaticon-call"></i><a href="tel:+123456789"><?= $row['phone1'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="opening"> <i class="flaticon-clock"></i><?= $row['address'] ?></li>
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
