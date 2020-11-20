<?php
use yii\helpers\Html;
use yii\helpers\Url
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

<?php foreach($admin_db as $key => $value): ?>
                <article class="post post-list">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">

                                    <h1 class="entry-title" style="text-align: center;"><a href="<?= Url::to(['/admin','id'=>$key]) ?>"><?= $value ?></a></h1>
                                </header>
                            </div>
                        </div>
                    </div>
                </article>
<?php endforeach; ?>
                <!-- <article class="post post-list">
                    <div class="row">
                        href="<?=Url::to(['/admin'])?>"
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