<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<div class="container">



	<?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif;?>



	<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наимен</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= Html::img($item['img'], ['alt' => $item['name'], 'height' => 50, 'width'=> 50])?></td>
                    <td><?= $item['name']?></td>
                        <td><span data-id="<?= $id ?>" class="glyphicon glyphicon-minus text-danger minus" aria-hidden="true"></span>
                            <?= $item['qty']?>
                            <span data-id="<?= $id ?>" class="glyphicon glyphicon-plus text-danger pluse" aria-hidden="true"></span></td>
                    <td><?= $item['price']?></td>
                    <td><?= $item['price']*$item['qty']?></td>
                    <td><span data-id="<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
                <tr style="font-weight: bold;">
                    <td colspan="4">Игото: </td>
                    <td><?= $session['cart.sum']?> грн</td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr/>
    		
        <?php $form = ActiveForm::begin()?>
        <?= $form->field($order, 'name')?>
        <?= $form->field($order, 'phone')?>
        <?= $form->field($order, 'address')?>
        <?= Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
        <?php ActiveForm::end()?>


<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>
</div>