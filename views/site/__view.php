
<?php 
use yii\helpers\Html;
use yii\helpers\Url;
?>
	<div class="row">
		 <div class="col-sm-4">
		            <?php foreach($prod as $values): ?>
		                <!-- <div class="col-sm-4"> -->
		                    <p><a href="<?= Url::to(['site/pinfo','id'=>$values->id]) ?>"><span><?= $values->name ?></span></a></p>
	                   <!--  </div> -->
            		<?php endforeach; ?>
		 </div>
		 <div class="col-sm-8">
		 	<?php foreach($hits as $hit): ?>
		                <div class="col-sm-4">
		                	 <p><a href="<?= Url::to(['site/pinfo','id'=>$hit->id]) ?>"><span><?= $hit->name ?></span></a></p>
	                	</div>
    		<?php endforeach; ?>
		 </div>
	</div>