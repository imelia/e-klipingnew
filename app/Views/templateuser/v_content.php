<section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="assetsuser/upload/endless-Probolinggo.png" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class=""><a href="tech-category-01.html" title=""></a></span>
                                        <h4><a href="tech-single.html" title=""></a></h4>
                                        <small><a href="tech-single.html" title=""></a></small>
                                        <small><a href="tech-author.html" title=""></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->

                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="assetsuser/upload/tech_02.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                        <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                                        <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="assetsuser/upload/tech_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                        <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">News<a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <?php foreach ($home as $h) : ?>
                            <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="<?php echo base_url() ?>/assets/img/berita/<?= $h['gambar_berita']; ?>" width="100%" height="50%" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                     <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title=""><?= $h['judul_berita']; ?></a></h4>
                                        <p></p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title=""><?= $h['kategori']; ?></a></small>
                                        <small><a href="tech-single.html" title=""><?= $h['tanggal']; ?></a></small>
                                        <small><a href="tech-author.html" title=""><?= $h['media']; ?></a></small>
                                        <small><a href="tech-single.html" title=""><i class=""></i></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box --> 

                                <hr class="invis">
                                <?php endforeach; ?>

                              <!--  <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_02.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div>  <!-- end col -->

                                  <!--  <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">A device you can use both headphones and usb</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Technology</a></small>
                                        <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4412</a></small>
                                    </div> -->
                                    <!-- end meta -->
                                </div> 
                                <!-- end blog-box -->

                                <!--<hr class="invis"> 

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div><!-- end col -->

                                    <!-- <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Two brand new laptop models from ABC computer</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Development</a></small>
                                        <small><a href="tech-single.html" title="">20 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2313</a></small>
                                    </div> -->
                                    <!-- end meta -->
                                </div><!-- end blog-box -->

                               <!-- <hr class="invis">

                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="assetsuser/upload/banner_02.jpg" alt="" class="img-fluid">
                                            </div> -->
                                            <!-- end banner-img -->
                                        <!--</div> -->
                                        <!-- end banner -->
                                   <!-- </div> -->
                                   <!-- end col -->
                                </div><!-- end row -->

                               <!-- <hr class="invis">

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_04.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div><!-- end col -->

                                  <!--  <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Applications for taking photos of nature in your mobile phones</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Design</a></small>
                                        <small><a href="tech-single.html" title="">19 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4441</a></small>
                                    </div> -->
                                    <!-- end meta -->
                                </div><!-- end blog-box -->

                               <!-- <hr class="invis">

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_05.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div><!-- end col -->

                                    <!-- <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Say hello to colored strap models in smart hours</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Materials</a></small>
                                        <small><a href="tech-single.html" title="">18 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 33312</a></small>
                                    </div> -->
                                    <!-- end meta -->
                                </div><!-- end blog-box -->

                              
                              <!--  <hr class="invis">

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_06.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div><!-- end col -->

                                   <!-- <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">How about evaluating your old mobile phones in different ways?</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                        <small><a href="tech-single.html" title="">17 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4440</a></small>
                                    </div> -->
                                    <!-- end meta -->
                                </div><!-- end blog-box -->

                              <!--  <hr class="invis">

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_07.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div><!-- end col -->

                                   <!-- <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Drinking coffee at the computer rests the spirit</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Technology</a></small>
                                        <small><a href="tech-single.html" title="">16 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 4412</a></small>
                                    </div> -->
                                    <!-- end meta -->
                                </div><!-- end blog-box -->

                             <!--   <hr class="invis">

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_08.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> -->
                                        <!-- end media -->
                                    </div><!-- end col -->

                                    <!-- <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">If you are considering buying a new safe for your mobile phone, be sure to read this article</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Reviews</a></small>
                                        <small><a href="tech-single.html" title="">15 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 44123</a></small>
                                    </div> --> 
                                    <!-- end meta -->
                                </div><!-- end blog-box -->

                               <!-- <hr class="invis">

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_blog_09.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div> --> 
                                        <!-- end media -->
                                    </div><!-- end col -->

                                   <!-- <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Enjoy a summer with a colorful headset</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Technology</a></small>
                                        <small><a href="tech-single.html" title="">14 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2214</a></small>
                                    </div> --> <!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                               
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                 <!--   <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Google has developed a brand new algorithm. Forget all your knowledge!</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                        <small><a href="tech-single.html" title="">13 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Matilda</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 3331</a></small>
                                    </div> --><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                       
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                           <!-- <div class="widget">
                                <h2 class="widget-title">Trend Videos</h2>
                                <div class="trend-videos">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_video_01.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div> --><!-- end hover -->
                                            </a>
                                      </div><!-- end media -->
                                        <!--<div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                        </div> --><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                  <!--  <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_video_02.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div> --><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                      <!--  <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                        </div> --><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                   <!-- <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="assetsuser/upload/tech_video_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div> --><!-- end hover -->
                                           <!-- </a>
                                        </div> --><!-- end media -->
                                     <!--   <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">Both blood pressure monitor and intelligent clock</a></h4>
                                        </div> --><!-- end meta -->
                           <!--         </div> --><!-- end blog-box -->
                               <!-- </div> --><!-- end videos -->
                            </div><!-- end widget -->

                           <!-- <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="assetsuser/upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="assetsuser/upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for..</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="assetsuser/upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful..</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div> --><!-- end blog-list -->
                          <!--  </div> --><!-- end widget -->

                          <!--  <div class="widget">
                                <h2 class="widget-title">Recent Reviews</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="assetsuser/upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="assetsuser/upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="assetsuser/upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">We are making homemade ravioli..</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div> --><!-- end blog-list -->
                            </div><!-- end widget -->

                            

                               

                         <!--   <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="assetsuser/upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div> --><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
