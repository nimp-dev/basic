
    <div class="table-responsive">
        <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
            <thead>
                <tr><th colspan="4">Заказ №<?=$order['id']?></th></tr>
                <tr style="background-color: #f9f9f9;">
                    <th style="padding: 5px;border: 1px solid #ddd;">Наименование</th>
                    <th style="padding: 5px;border: 1px solid #ddd;">Кол-во</th>
                    <th style="padding: 5px;border: 1px solid #ddd;">Цена</th>
                    <th style="padding: 5px;border: 1px solid #ddd;">Сумма</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?= $item['name']?></td>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?= $item['qty']?></td>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?= $item['price']?></td>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?= $item['qty'] * $item['price']?></td>
                </tr>
            <?php endforeach?>
                <tr>
                    <td colspan="3" style="padding: 5px;border: 1px solid #ddd;">Итого: </td>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?= $session['cart.qty']?></td>
                </tr>
                <tr>
                    <td colspan="3" style="padding: 5px;border: 1px solid #ddd;">На сумму: </td>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?= $session['cart.sum']?></td>
                </tr>


                <tr style="background-color: #f9f9f9;font-weight: bold;"> 
                    <td style="padding: 5px;border: 1px solid #ddd;">Имя</td>
                    <td style="padding: 5px;border: 1px solid #ddd;">Телефон</td> 
                    <td colspan="2" style="padding: 5px;border: 1px solid #ddd;">Адрес</td>
                </tr>
                <tr> 
                    <td style="padding: 5px;border: 1px solid #ddd;"><?=$order['name']?></td>
                    <td style="padding: 5px;border: 1px solid #ddd;"><?=$order['phone']?></td> 
                    <td colspan="2" style="padding: 5px;border: 1px solid #ddd;"><?=$order['address']?></td>
                </tr>

            </tbody>
        </table>


    </div>