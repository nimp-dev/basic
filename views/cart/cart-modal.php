<?php
use yii\helpers\Html;
?>
<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наимен</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>total_p</th>
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

                <tr>
                    <td colspan="4">На сумму: </td>
                    <td><?= $session['cart.sum']?></td>
                </tr>
            </tbody>
        </table>
    </div>

    
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>