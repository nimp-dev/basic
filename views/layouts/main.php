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


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="/">Все заведения</a>
                        
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
            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
            <p class="company-name">PORTALFOOD.COM.UA © 2020</p>
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
        <div class="col-md-4 footer-about">
            <h4>О нас</h4>
            <p>Предлагаем размещение Вашего заведения на нашей торговой площадке, удобная админ панель где Вы можете управлять содержимым вашей страницы, а так же  получать уведомления о новых заказах в удобной форме, много видов отчетности и другое </p>
            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
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
