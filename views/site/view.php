<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!-- fixed-box -->
<!-- fixed-div -->
<!--  <div class="row">
            <div class="col-md-12 fixed-box">
                <div class="widgets fixed-div">
                    <div class="row">
                        <div class="col-sm">
                     Вы на : 
                        </div>
                        <div class="col-sm">
                     Меню : 
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<div class="main-content-view">
    
        <div class="container">

            <div class="row">
                    
                <div class="col-md-8">
                    <div class="row">
                        <div class="wrapper">
                            <div class="menu">
                            <p href="#" class="menu-icon">MENU
                            <span><i class="fas fa-angle-double-up"></i></span>
                            </p>
                            <nav class="menu-list">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'select']) ?>
                            </nav>
                            </div>
                        </div>
                        <div>
                            <h2 class="widget-title text-uppercase text-center">Prot Place :</h2><br>
                            <h2 class="widget-title text-uppercase text-center">Все меню!</h2>
                        </div>  
                                <!-- end -->
                        <?php foreach($products as $values): ?>
                        <div class="col-md-4">
                            <article class="post">
                                <div class="post-thumb">
                                    <a href="blog.html"><img src="/public/images/blog-1.jpg" alt=""></a>

                                    <a href="blog.html" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center"><img src="/public/images/loupe1.png" alt=""></div>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <header class="entry-header text-center text-uppercase">
                                        <h6><a href="#"> Travel</a></h6>

                                        <h1 class="entry-title"><a href="blog.html"><?= $values->name ?></a></h1>


                                    </header>
                                    <div class="entry-content" >
                                        <a class="content_toggle" >Состав:</a>
                                        <p class="content_block" style="display: none;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                            justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                            ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.
                                        </p>

                                        <div class="btn-continue-reading text-center text-uppercase">
                                            <a href="blog.html" class="more-link">Continue Reading</a>
                                        </div>
                                    </div>
                                    <div class="social-share">
                                        <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2016</span>
                                        <ul class="text-center pull-right">
                                            <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>325
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php endforeach; ?>
                                <!--  -->
                    </div>
                    <!-- end -->
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                                       
                        
                </div>
                   
                <div class="col-md-4">
                    <div class="primary-sidebar">
                        
                        <aside class="widget">
                            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                            <div class="popular-post">


                                <a href="#" class="popular-img"><img src="/public/images/p1.jpg" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>

                                </div>
                            </div>
                            <div class="popular-post">

                                <a href="#" class="popular-img"><img src="/public/images/p1.jpg" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                            <div class="popular-post">


                                <a href="#" class="popular-img"><img src="/public/images/p1.jpg" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget pos-padding">
                            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/public/images/r-p.jpg" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget border pos-padding">
                            <h3 class="widget-title text-uppercase text-center">Categories</h3>
                            <ul>
                                <li>
                                    <a href="#">Food & Drinks</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Travel</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Story</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">DIY & Tips</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                    <span class="post-count pull-right"> (2)</span>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    
</div>