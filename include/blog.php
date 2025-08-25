            <div class="rs-blog style1 pt-91 pb-92 md-pt-71 md-pb-72 sm-pb-75">
                <div class="container">
                    <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                        <div class="col-md-6 sm-mb-22">
                            <div class="sec-title">
                                <span class="sub-title primary right-line">LATEST NEWS</span>
                                <h2 class="title mb-0">Read Latest Updates</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a class="readon" href="blog-single.html">View Updates</a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true">
                         <?php 
$sql=mysqli_query($conn,"select * from tbl_blog ORDER BY id DESC LIMIT 4") or die(mysqli_error($conn));
                while($row=mysqli_fetch_assoc($sql)){
                ?>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="admin/uploads/products/<?= $row['image1'] ?>" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.php?id=<?= $row['id'] ?>"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.php?id=<?= $row['id'] ?>"><?= $row['heading'] ?></a>
                                <h3 class="title"><a href="blog-single.php?id=<?= $row['id'] ?>"><?= $row['short_description'] ?></a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <!-- <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/2.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.html">Management</a>
                                <h3 class="title"><a href="blog-single.html">Soundtrack filma Lady Exclusive Music</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/3.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.html">Consulting</a>
                                <h3 class="title"><a href="blog-single.html">Winged moved stars, fruit creature seed night.</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/4.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.html">Development</a>
                                <h3 class="title"><a href="blog-single.html">Given void great you’re good appear have i also fifth</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/5.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.html">Creative</a>
                                <h3 class="title"><a href="blog-single.html">Lights winged seasons abundantly evening.</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/6.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.html">Finance</a>
                                <h3 class="title"><a href="blog-single.html">Team You Want to Work With mistakes runners</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/3.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="blog-single.html"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="blog-single.html">Consulting</a>
                                <h3 class="title"><a href="blog-single.html">Winged moved stars, fruit creature seed night.</a></h3>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->
        </div> 
