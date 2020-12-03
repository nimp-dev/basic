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

<div class="main-content-<?=trim($info->style)?>">
    
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
                                    <li><a href="#"><?=$info->name?> <i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                    <li><a onclick="return getCart()" href="#">корзина <i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a>все меню <i class="fas fa-angle-double-down" aria-hidden="true"></i></a>
                                      <ul class="submenu">
                                        <li><?= \app\components\MenuWidget::widget(['tpl' => 'select']) ?></li>
                                      </ul>
                                    </li>

                                  </ul>
                                </nav>
                </div>
            </div>

                            <!-- зачем? -->
                        <div class="wrapper">
                            <div class="menu">
                            <nav class="menu-list">
                                <h3 class="entry-title text-center"><a><?=  $info->name ?></a></h3>
                            <?= \app\components\MenuWidget::widget(['tpl' => 'select']) ?>
                            </nav>
                            </div>
                        </div>
                            <!-- зачем? -->

            <div class="row">
                    <!--  -->
                <div class="col-md-12">
<?php foreach ($menu as $value) :?>
    <?php if($value['id']!= 0) :?> 
        <div class="row cat-border_prod">
            <a id="<?=trim($value['name'])?>" class="anchor"></a>
        <h1><a><?=trim($value['name'])?></a></h1>
            <?php foreach ($value->product as $prod):?>
                <?php $mainImg = $prod->getImage(); ?>               
                                                <div class="col-md-4">
                                                    <div class="blog-card blog-card-blog">
                                                        <div class="blog-card-image">
                                                            <a href="#"> <?= Html::img($mainImg->getPath(),['alt'=>$prod['img'],'style' => 'width:350px;height: 218px'])?> </a>
                                                            <div class="ripple-cont"></div>
                                                        </div>
                                                        <div class="blog-table">
                                                            <h6 class="blog-category blog-text-success"><i class="fas fa-blog"></i><?=$prod['weight']?>г</h6>
                                                            <h4 class="blog-card-caption">
                                                                <a href="#"><?=mb_strimwidth($prod['name'],0, 16)?></a>
                                                            </h4>
                                                            <p class="blog-card-description"><?=mb_strimwidth($prod['content'],0, 100)?></p>
                                                            <div class="ftr">
                                                                <div class="author">
                                                                    <a> <img src="/public/images/<?=$info->logo?>" alt="..." class="avatar img-raised"> <span><?= $info->name?></span> </a>
                                                                </div>
                                                                <div class="stats"> <a class="add-to-cart" href="<?= Url::to(['cart/add','id'=>$prod['id'] ]) ?>" data-id="<?= $prod['id'] ?>">
                                                                            <i class="fa fa-shopping-cart"> </i><?php echo '&nbsp' ?><?= $prod['price']?> грн</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        <?php endforeach ;?>
        <div class="clearfix"></div>
    <?php endif ;?>
    </div> 
<?php endforeach ;?>  
                </div> 
            </div>
        </div>
    
</div>