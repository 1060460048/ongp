<?php
/* @var $this yii\web\View */
/* @var $post */
/* @var $search_query */
?>

<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php
$this->title = $post->title;
$this->registerMetaTag(['name' => 'og:title', 'content' => $post->title]);
$this->registerMetaTag(['name' => 'og:description', 'content' => strip_tags($post->content)]);
?>


<div class="about_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog_grid1">
                    <?= Html::a($post->get_image('img-responsive'), ['/posts/view', 'id' => $post->id]) ?>
                    <?= $post->content ?>
                    <ul class="links">
                        <li><i class="blog_icon1"> </i><span class="icon_text"><?= date('d.m.Y h:i:s',$post->created_at) ?></span></li>
                        <li><a href="#"><i class="blog_icon2"> </i><span class="icon_text"><?= $post->user->username ?></span></a></li>
                    </ul>
                    <ul class="links_middle">
                        <?php foreach ($post->tags as $tag): ?>
                            <li><i class="blog_icon4"> </i>
                                <span class="icon_text"><?= Html::a($tag->title, ['tag', 'ids' => $tag->id]) ?></span>
                            </li>

                        <?php endforeach ?>
                    </ul>
                    <div class="row related_posts">
                        <h3 class="related_head">Схожі статті</h3>
                        <?php foreach($post->related as $p): ?>
                            <div class="col-md-3 related_box">
                                <?= $p->get_image('img-responsive') ?>
                                <h5 class="m_4">
                                    <?= Html::a($p->title, ['/posts/view', 'id' => $p->id]) ?>
                                </h5>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <?= $this->render('_sidebar') ?>
        </div>
    </div>
</div>