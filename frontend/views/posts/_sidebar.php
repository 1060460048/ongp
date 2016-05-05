<?php

use yii\helpers\Html;
?>

<div class="col-md-4 blog_sidebar">
    <ul class="sidebar">
        <h3>Останні статті</h3>
        <?php foreach (\common\models\Post::recent_post() as $v): ?>
            <li><?= Html::a($v->title, ['view', 'id' => $v->id]) ?></li>
        <?php endforeach ?>
    </ul>
    <h3 class="archive">Ключові слова</h3>
    <ul class="sidebar">
        <?php foreach (\common\models\Tag::find()->all() as $tag): ?>
            <li>
                <?= Html::a($tag->title, ['tag', 'ids' => $tag->id]) ?>
            </li>
        <?php endforeach ?>
    </ul>
</div>