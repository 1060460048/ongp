<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Слайд';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(\common\models\Slider::find()->count() == 0): ?>
    <p>
        <?= Html::a('Створити слайд', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php endif ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text',
            'image',
            //'background',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
