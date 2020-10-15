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
                            <div class="post-thumb">
                            	<?php if($key==1){
                                echo '<a href="blog.html"><img src="/public/images/PORTPLACE.png" alt="" class="pull-left"></a>';
                            	}else{
                            	echo '<a href="blog.html"><img src="/public/images/blog-grid.jpg" alt="" class="pull-left"></a>';	
                        		}?>
                                <a href="blog.html" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center"><?= $value ?></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">

                                    <h1 class="entry-title"><a href="<?= Url::to(['site/view','id'=>$key]) ?>"><?= $value ?></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p>ТОП бургеры каменского текст текст текст текст текст текст текст текст ТОП бургеры каменского
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">Работает 10:00 - 23:00</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
<?php endforeach; ?>
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