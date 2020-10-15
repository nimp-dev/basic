<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach($res as $key => $value): ?>
                <div class="col-sm-4">
                    <p><a href="<?= Url::to(['site/view','id'=>$key]) ?>"><span><?= $value ?></span></a></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
