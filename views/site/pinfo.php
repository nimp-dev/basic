<?php
use yii\helpers\Url;
?>
<div class="container">
	<div class="row">
					<?php foreach($info as $values): ?>
		                <div class="col-sm-4">
		                	 <p><a href="<?= Url::to(['site/pinfo','id'=>$values->id]) ?>"><span><?= $values->name ?></span></a></p>
	                	</div>
            		<?php endforeach; ?>
	</div>
</div>