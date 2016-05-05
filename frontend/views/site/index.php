<?php
/* @var $this yii\web\View */
/* @var $slides */
/* @var $featured */

use yii\helpers\Html;

$this->title = 'Головна';
$v = $slides[0];
?>
<div class="banner text-center">
    <div class="container">
        <div class="banner-info">
            <h1><?= $v->title ?></h1>
            <p><?= $v->text ?></p>
            <label class="page-scroll">
                <a class="banner-btn class scroll" href="#feature"><span> </span></a>
            </label>
        </div>
    </div>
</div>

<div class="main">
    <div class="content_white">
        <h2>Свіжі публікації</h2>
        <p>Останні новини на нашому сайтіі</p>
    </div>

    <div class="featured_content" id="feature">
        <div class="container">
            <div class="row text-center">
                <?php foreach($last as $post): ?>
                    <div class="col-md-3 <?= $post->id == end($last)->id ? 'feature_grid2' : 'feature_grid1' ?>">
                        <?= $post->get_image() ?>
                        <h3 class="m_1"><?= Html::a($post->title, ['/posts/view', 'id' => $post->id]) ?></h3>
                        <p class="m_2">
                            <?= mb_substr(strip_tags($post->content), 0, 40, "UTF-8"); ?>
                            <?php if(strlen(strip_tags($post->content))>40) echo '...'; ?>
                        </p>
                        <?= Html::a('Читати', ['/posts/view', 'id' => $post->id],['class' => 'feature_btn']) ?>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>


    <div class="content_white">
        <h2>Рекомендовані статті</h2>
        <p>Перелік статтей, які є рекомендовані адміністрацією сайту</p>
    </div>
    <div class="m_3"><span class="left_line"> </span> <span class="right_line"> </span></div>
    <div class="container">
        <ul id="flexiselDemo3">
         <?php foreach ($featured as $post): ?>
            <li data-toggle="tooltip" data-placement="bottom" data-container="body" title="<?= $post->title ?>">
                <?= Html::a($post->get_image('img-responsive'), ['/posts/view', 'id' => $post->id])

                 ?>
            </li>
         <?php endforeach ?>
        </ul>
        <div class="portfolio-btn">
            <?= Html::a('Переглянути всі', ['/posts/tag', 'ids' => 'all'], ['class' => 'portfolio_btn']) ?>
        </div>

    </div>
<?//=  Html::img($v->image);  ?>

<style>
    div.banner{
    background: url(<?= $v->image ?>) 0 50% no-repeat;
    background-size: 100%;
    }
</style>