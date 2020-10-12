
<?php 
use yii\helpers\Html;
use yii\helpers\Url;
if ($db == 1){
	echo 'база 1';
}
if ($db == 2){
	echo 'база 2';
}
echo '<br/>';
$session = Yii::$app->session;
$session->open();
echo $session['db'];
?>
<div class="container">
	<div class="row">
		            <?php foreach($prod as $values): ?>
		                <div class="col-sm-4">
		                    <p><a href="<?= Url::to(['site/pinfo','id'=>$values->id]) ?>"><span><?= $values->name ?></span></a></p>
	                    </div>
            		<?php endforeach; ?>
	</div>
</div>
