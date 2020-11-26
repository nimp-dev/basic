<?php
use yii\helpers\Html;
use yii\helpers\Url
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

<?php foreach($res as $key => $value): ?>
                <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb" style="background-color: black">
                            	<?php if($key=='port_place'){
                                echo '<a href="blog.html"><img src="/public/images/PORTPLACE.png" alt="" class="pull-left"></a>';
                            	}else{
                            	echo '<a href="blog.html"><img src="/public/images/blog-grid.jpg" alt="" class="pull-left"></a>';	
                        		}?>
                                <a href="blog.html" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center"><?= $value->name ?></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">

                                    <h1 class="entry-title"><a href="<?= Url::to(['menu/view','id'=>$value->id_res]) ?>"><?= $value->name ?></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p><?= $value->content ?>                                    
                                    </p>
                                </div> 
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">Время работы <?=substr($value->start_at,0, 5);?>  -  <?=substr($value->end_at,0, 5);?>
                                        
                                    <?php $timeNow = date("H:i:s");?>
                                    <?php if($timeNow > $value->start_at & $timeNow < $value->end_at):?>
                                        <button type="button" class="btn btn-success">Открыто</button>
                                    <?php else : ?>
                                        <button type="button" class="btn btn-danger">Закрыто</button>
                                    <?php endif;?>


                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
<?php endforeach; ?>
<!-- <div class="sale-wrap">
  <div class="sale-inner">
            <div class="centrr">
         asd asd
        </div>
    <div class="leftt">
      
    </div>

    <div class="rightt">
      
    </div>
  </div>
</div> -->


                <!-- <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="/public/images/blog-grid.jpg" alt="" class="pull-left"></a>

                                <a href="blog.html" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">Evropeiskiy</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">

                                    <h1 class="entry-title"><a href="blog.html">Evropeiskiy</a></h1>
                                </header>
                                <div class="entry-content">
                                    <p>Еда с рестика  текст текст текст текст текст текст текст текст ТОП Еда с рестика 
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">Работает 10:00 - 23:00</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article> -->
                
            </div>
        </div>
    </div>
</div>