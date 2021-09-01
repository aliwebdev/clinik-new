<?
use yii\helpers\Url;
?>
<div class="whole row">
    <div class="col-md-2"></div>
    <div class="col-md-8 block">
        <div class="opacity">
        <h2>Kim bo'lib ishlaysiz</h2>
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <h3>Direktor</h3>
                <center><div class="userLogo">
                    <img src="<?= Url::base()?>/images/director.webp" alt="">
                </div></center>
                <a href="<?= Url::to(['direktor/login'])?>">Kirish</a>
            </div>

            <div class="col-md-4 col-sm-4">
                <h3>Doktor</h3>
                <center><div class="userLogo">
                    <img src="<?= Url::base()?>/images/doctor.jpg" alt="">
                </div></center>
                <a href="<?= Url::to(['doktor/login'])?>">Kirish</a>
            </div>

            <div class="col-md-4 col-4">
                <h3>Adminstrator</h3>
                <center><div class="userLogo nurse">
                    <img src="<?= Url::base()?>/images/admin.jpg" alt="">
                </div></center>
                <a href="<?= Url::to(['admin/login'])?>">Kirish</a>
            </div>

        </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>