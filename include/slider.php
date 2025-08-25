<div class="main-content">
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider1">
        <div class="bend niceties">

            <div id="nivoSlider" class="slides">
                <?php 
                $sql = mysqli_query($conn, "SELECT * FROM tbl_banner") or die(mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($sql)) {
                ?>
                    <img src="admin/uploads/products/<?= $row['image1'] ?>" alt="Banner Image" title="#slide-<?= $row['id'] ?>" />
                <?php } ?>
            </div>

            <?php 
            // Reset pointer and loop again for slider content
            mysqli_data_seek($sql, 0);
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
            <div id="slide-<?= $row['id'] ?>" class="slider-direction">
                <div class="container">
                    <div class="content-part">
                        <div class="slider-des">
                            <h1 class="sl-title white-color"><?= $row['name'] ?></h1>
                            <div class="sl-desc">
                                <?= $row['description'] ?>
                            </div>
                        </div>
                        <div class="slider-bottom">
                            <ul>
                                <li><a href="<?= $row['link'] ?>" class="readon banner-style">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    <!-- Slider End -->
</div>
