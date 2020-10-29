<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>


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
            <!-- <div class="fixed-box">
                <div class="fixed-div">
                <nav class="four">
                  <ul>
                    <li><a href="#">название<i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                    <li><a onclick="return getCart()" href="#">корзина <i class="fa fa-shopping-cart"></i></a></li>
                   -- <li><a class="menu-icon" href="#">меню <i class="fas fa-angle-double-right"></i></a></li>
                    <li><a href="#">Contact <i class="fa fa-phone" aria-hidden="true"></i></a>
                              <ul class="submenu">
                                <li><a href="">Item 1</a></li>
                                <li><a href="">Item 2</a></li>
                              </ul>
                    </li>
                  </ul>
                </nav>
                </div>
            </div> -->
            <div class="fixed-box">
                <div class="fixed-div">
                                <nav class="four">
                                  <ul class="topmenu">
                                    <li><a href="#">название <i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                    <li><a onclick="return getCart()" href="#">корзина <i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a>меню <i class="fas fa-angle-double-down" aria-hidden="true"></i></a>
                                      <ul class="submenu">
                                        <li><?= \app\components\MenuWidget::widget(['tpl' => 'select']) ?></li>
                                      </ul>
                                    </li>

                                  </ul>
                                </nav>
                </div>
            </div>


                        <div class="wrapper">
                            <div class="menu">
                            <nav class="menu-list">
                                <h3 class="entry-title text-center"><a><?=  $info->name ?></a></h3>
                            <?= \app\components\MenuWidget::widget(['tpl' => 'select']) ?>
                            </nav>
                            </div>
                        </div>

            <div class="row">
                
                    
                <div class="col-md-8">
                    <?php $categor='';?>
                    <?php foreach ($products as $value) :?>
                        <?php if($value->menu['name']!= $categor):?>
                            <?php $categor = $value->menu['name'];?>
                            
                            <h3><?=$categor?></h3>

                        <?php endif;?>
                        <div class="<?=$value->category_id?>" >
                        <?=$value->name?><br>
                        <!--  -->
                        </div>

                    <?php endforeach ;?> 
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