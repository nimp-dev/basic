<?php
use yii\helpers\Html;
use yii\helpers\Url
?>
<?php
date_default_timezone_set('Etc/GMT-2');
$ctime = date('H:i:s');
// echo $ctime;
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.8.55/css/materialdesignicons.min.css">
<div class="container">
    <?php foreach ($res as $ress) :?>
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <a href="<?= Url::to(['menu/view','id'=>$ress->id_res]) ?>">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src="/public/images/<?= $ress->logo?>" class="img-radius" alt="User-Profile-Image"> </div>
                                    <h6 class="f-w-600"><a href="<?= Url::to(['menu/view','id'=>$ress->id_res]) ?>"><?= $ress->name?></a></h6>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 align="center" class="p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div align="center" class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Время работы</p>
                                            <h6 class="text-muted f-w-400"> <?= substr($ress->start_at,0,5)?> - <?= substr($ress->end_at,0,5)?>
                                            <?php if($ctime > $ress->start_at & $ctime < $ress->end_at ) :?>
                                            <i  style="color:green;" class="fa fa-unlock" aria-hidden="true"></i>
                                            <?php else :?>
                                            <i class="fa fa-lock" aria-hidden="true"></i>   
                                            <?php endif ;?>
                                            </h6>
                                        </div>
                                        <div align="center" class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Phone</p>
                                            <h6 class="text-muted f-w-400"><?= $ress->phone?></h6>
                                        </div>
                                    </div>
                                    <div class="b-b-default"></div>
                                    <div class="row">
                                        <div align="center" class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Доставка</p>
                                            <h6 class="text-muted f-w-400">TAXI (бесплатно от 300грн)</h6>
                                        </div>
                                    </div>
                                    <div class="b-b-default"></div>
                                        <ul align="center" class="social-link list-unstyled">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-google-maps" aria-hidden="true"></i></a></li>
                                        <li><a href="<?=$ress->instagram?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach ;?>
</div>