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
                
                    <!--  -->
                <div class="col-md-12">

                    <?php foreach ($menu as $value) :?>

                        <?php if($value['id']!= 0) :?>
                                    <div class="row cat-border_prod">
                                        
                                        <h1 style="text-align: center;"><?=$value['name']?></h1>

                                                <?php foreach ($value['product'] as $prod):?>
                                                    <div class="col-md-4">
                                                        
                                                        <div class="prod-plate cat-border">    

                                                              <div class="section-img">  
                                                            <?= Html::img("@web/public/images/products/{$prod['img']}",['alt'=>$prod['img']])?>
                                                              </div>  
                                                                <div class="section-content">
                                                                    <span class="section-content-name"><?=$prod['name']?></span>
                                                                    <div>
                                                                    <span class="section-content-text"><?=$prod['content']?></span>
                                                                    </div>
                                                                    <a class="add-to-cart" href="<?= Url::to(['cart/add','id'=>$prod['id'] ]) ?>" data-id="<?= $prod['id'] ?>">
                                                                    <i class="fa fa-shopping-cart"></i>by
                                                                    </a>
                                                                </div>

                                                        </div>

                                                    </div>
                                                <?php endforeach ;?>

                                    </div>
                        <div class="clearfix"></div>
                        <?php endif ;?>
                        
                        
                    <?php endforeach ;?>            
                </div>
                   
            </div>
        </div>
    
</div>