<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\PublicAsset;
use yii\helpers\Url;


PublicAsset::register($this);
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/public/images/logo.jpg" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="index.html">Home</a>
                        
                    </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(!Yii::$app->user->isGuest): ?>

                        <li><a href="<?= Url::to(['/site/logout']) ?>"><?= Yii::$app->user->identity['username'] ?> (Выход) </a></li>
                        <?php endif;?>
                        <li><a href="<?=Url::to(['/admin'])?>">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>

    </div>
    <!-- /.container-fluid -->
</nav>

<!--main content start-->


<div class="container">

                                <nav class="four">
                                  <ul class="topmenu">

                                        <li><a href="<?=\yii\helpers\Url::to(['/admin']) ?>" class="active">Заказы</a></li>
                                        <li><a href="#">Категории<i style="color: #00bff5;" class="fas fa-angle-double-down" aria-hidden="true"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?=\yii\helpers\Url::to(['menu/index']) ?>">Список категорий</a></li>
                                        <li><a href="<?=\yii\helpers\Url::to(['menu/create']) ?>">Добавить категорию</a></li>
                                            </ul>
                                        </li>
                                         <li><a href="#">Товары<i style="color: #00bff5;" class="fas fa-angle-double-down" aria-hidden="true"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?=\yii\helpers\Url::to(['product/index']) ?>">Список товаров</a></li>
                                            </ul>
                                        </li>     
                                  </ul>
                                </nav>
<a href="http://basic/menu/1">просмотр страницы</a>

        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>
<?=$content?>
</div>
<!-- end main content-->
<!--footer start-->



<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size'=> 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button> <br>
        <a href="' . Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
