<?php
/* @var $this yii\web\View */
/* @var $lastPosts */
/* @var $featured */
/* @var $drafts */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Головна';
?>
<div class="site-index">

    <h1 class="by-center">Адмін панель</h1>
    <hr />
    <div class="body-content">
        <div class="row">
            <?php
            $monthes = array(
                1 => 'Січень', 2 => 'Лютий', 3 => 'Березень', 4 => 'Квітень',
                5 => 'Травень', 6 => 'Червень', 7 => 'Липень', 8 => 'Серпень',
                9 => 'Вересень', 10 => 'Жовтень', 11 => 'Листопад', 12 => 'Грудень'
            );
            $days = array(
                'Неділя', 'Понеділок', 'Вівторок', 'Середа',
                'Четверг', "П'ятниця", 'Субота'
            );
            $today = ('Сьогодні ' . $days[(date('w'))] . ' '. date('d ') . $monthes[(date('n'))] . date(' Y'));
            ?>
            <h3 class="by-center"><?= $today ?></h3>
        </div>
        <div class="row top-buffer">
            <div class="col-xs-4">
                <?= Html::a('<i class="glyphicon glyphicon-plus-sign"></i> Додати статтю ', ['post/create'], ['class' => 'btn btn-success btn-lg']) ?>
            </div>
            <div class="col-xs-4">
                <?= Html::a('<i class="glyphicon glyphicon-plus-sign"></i> Додати розділ ', ['category/create'], ['class' => 'btn btn-success btn-lg']) ?>
            </div>
            <div class="col-xs-4">
                <?= Html::a('<i class="glyphicon glyphicon-plus-sign"></i> Додати ключове слово ', ['tag/create'], ['class' => 'btn btn-success btn-lg']) ?>
            </div>
        </div>
        <hr />
        <h3 class="by-center top-buffer">Підсумки</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        Всього статтей <span class="badge"><?= $postsCount ?></span>
                    </a>
                    <a href="#" class="list-group-item">
                        Всього розділів  <span class="badge"><?= $categoryCount ?></span>
                    </a>
                    <a href="#" class="list-group-item">
                        Всього ключових слів  <span class="badge"><?= $tagCount ?></span>
                    </a>
                    <a href="#" class="list-group-item">
                        Найпопулярніший розділ  <span class="label label-primary"><?=  $mostPopularCategory->title  ?></span>
                        <span class="badge"><?= $mostPopularCategory->qty  ?></span>
                    </a>
                    <a href="#" class="list-group-item">
                        Найпопулярніше ключове слово <span class="label label-danger"><?=  $mostPopularTag->title  ?></span>
                        <span class="badge"><?= $mostPopularTag->qty ?></span>
                    </a>
                </div>
            </div>




        </div>
    </div>
</div>
