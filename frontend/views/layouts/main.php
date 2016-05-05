<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->params['site_name'].' | '.$this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>



    <!----start-header---->
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="/images/logo.png" alt=""><h1>КАФЕДРА ОНГП</h1></a>
            </div>
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="/images/nav_icon.png" alt="" /> </a>
                <?php $menuItems = \common\models\Category::get_menu(); ?>
                <?php echo Nav::widget([
                    'items' => $menuItems,
                ]); ?>
            </div>
            <div class="clearfix"> </div>
            <!----//End-top-nav---->
        </div>
    </div>

    <!----//start-breadcrumbs---->
    <?php if (Yii::$app->controller->id != 'site' && Yii::$app->controller->action->id != 'index'): ?>
    <div class="about">

        <div class="container">
            <section class="title-section">
                <h1 class="title-header"><?= $this->title ?></h1>
                <ul class="breadcrumb breadcrumb__t">
                    <li><a href="/">Головна</a></li>
                    <li class="active"><?= $this->title ?></li>
                </ul>
            </section>
        </div>
    </div>
    <? endif ?>
    <!----//end-breadcrumbs---->

    <?//= Alert::widget() ?>
    <?= $content ?>

    <div class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="footer_head">
                    <h2>У наш високотехнологічний час освіта визначає багато що...</h2>
                    <p>Підсумковий результат залежить від того, що ми вкладаємо в наше майбутнє</p>
                </div>
                <div class="row footer_grid">
                    <div class="col-md-6">
                        <ul class="message">
                            <li class="msg-icon">
                                <i class="fa fa-search fa-2x"></i>
                            </li>
                            <li class="msg-desc">
                                <h4>Пошук</h4>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="subscribe">
                            <form action="<?=  Url::toRoute(['/posts/search']);?>" method="post" name="Search">
                                <input  name="query" type="text" value="">
                                <input type="submit" value="Шукати">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="twitter">
                            <li class="twt_icon"><i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i></li>
                            <li class="twt_desc"><p>Полтавський регіон є одним з провідних в Україні за обсягами покладів вуглеводневої сировини. Тому, в ньому постійно посилюється така виробнича складова, як нафто- та газовидобування, нафто- та газоперероблення тощо.</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_midle">
            <div class='container'>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="social_left">
                            <li class="facebook"><a href="#"><i class="fb"> </i></a></li>
                            <li class="fb_text"><h4><a href="https://www.facebook.com/university.poltntu/?fref=ts">Ми в Facebook</a></h4>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="social_left">
                            <li class="facebook"><a href="#"><i class="google"> </i></a></li>
                            <li class="fb_text"><h4><a href="https://plus.google.com/u/0/116669550788567013919">Також ми є в Google +</a></h4>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="social_left">
                            <li class="facebook"><a href="#"><i class="linked"> </i></a></li>
                            <li class="fb_text"><h4><a href="#">А також в Linkedin</a></h4>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="copy">
                <p>&copy; <?= date('Y') ?>  <a href="http://pntu.edu.ua" target="_blank">  ПНТУ ім. Юрія Кондратюка</a></p>
            </div>
        </div>
    </div>



    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
