		            <?php foreach($prod as $values): ?>
		                <!-- <div class="col-sm-4"> -->
		                    <p><a href="<?= Url::to(['site/pinfo','id'=>$values->id]) ?>"><span><?= $values->name ?></span></a></p>
	                   <!--  </div> -->
            		<?php endforeach; ?>