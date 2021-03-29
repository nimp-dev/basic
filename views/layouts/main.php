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
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
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


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="text-align: center;">

                <ul class="nav navbar-nav">
                    <li><a>г. Каменское</a>
                        
                    </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


            <div id="myModalBox" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Заголовок модального окна -->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">В корзине находятся продукты другого заведения</h4>
                  </div>
                  <!-- Основное содержимое модального окна -->
                  <div class="modal-body">
                    <p>в одном заказе должны содержаться продукты только одного заведния</p>
                    <p>если необходимо заказать еще что-то у другого продавца, сормируйте еще один заказ, после того как оформили прошлый</p>
                  </div>
                  <!-- Футер модального окна -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="return delCart()" data-dismiss="modal">Очистить корзину</button>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button> -->
                        <?php if(isset($_SESSION['cart.name'])) :?>
                            <button type="button" class="btn btn-default"><a style="text-decoration: none;" href="<?= Url::to(['menu/view','id'=>$_SESSION['cart.name']]) ?>">вернуться к <?=$_SESSION['cart.name']?></a></button>
                        <?php endif;?>
                  </div>
                </div>
              </div>
            </div>



<?php if(isset($_SESSION['cart.name'])) :?>
    <?php if(($_SESSION['cart.name'])!==($_SESSION['db']) & Yii::$app->request->url != '/') :?>
            
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                $("#myModalBox").modal('show');
                            });
                        </script>
    <?php endif;?>
<?php endif;?>



<!--main content start-->
<?=$content?>
<!-- end main content-->
<!--footer start-->


<footer class="footer">
    <div class="row">
        <div class="col-md-4 footer-navigation">
            <h3><a href="#">Portal<span>Food</span></a></h3>
        </div>
        <div class="col-md-4 footer-about">
            <h4>for restaurants</h4>
            <p>Предлагаем размещение Вашего заведения на торговой площадке Portal FOOD,
 где Вы можете управлять содержимым собственной страницы на удобной админ панели.
 Получайте уведомления о новых заказах, и контролируйте работу при помощи различных видов отчетности.</p>
             <h4>for clients</h4>
            <p>Мы позаботились об удобстве оформления заказа. Теперь на одной торговой площадке собраны несколько заведений, где Вы сможете сделать свой выбор! Выбирай любой ресторан, смотри их меню и оформляй заказ.</p>
        </div>
        <div class="col-md-4 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p><span class="new-line-span">г. Каменское</span>UA</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left"> +380961921770</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> <a href="#" target="_blank">mail@portalfood.com.ua</a></p>
            </div>
        </div>
    </div>
</footer>

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
