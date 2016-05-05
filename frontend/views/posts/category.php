<?php
/* @var $this yii\web\View */
/* @var $category */
/* @var $pagination */
/* @var $posts */
?>
<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = $category;
Url::remember();
?>

<div class="about_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (!count($posts)):?>
                    <div class="alert alert-warning" role="alert">
                        <strong>Нічого не знайдено!</strong>
                        По даній категорії ще не створено статтей. Повернутись до
                        <?= Html::a(' головної сторінки', ['/']) ?>

                    </div>
                <?php endif ?>
                <?php foreach ($posts as $post): ?>
                    <div class="blog_grid">
                        <h2 class="post_title"><?= Html::a($post->title, ['/posts/view', 'id' => $post->id]) ?></h2>
                        <?= Html::a($post->get_image('img-responsive'), ['/posts/view', 'id' => $post->id]) ?>
                        <p>
                            <?= mb_substr(strip_tags($post->content), 0, 300, "UTF-8"); ?>
                            <?php if(strlen(strip_tags($post->content))>300) echo '...'; ?>
                        </p>
                        <?= Html::a('Читати', ['/posts/view', 'id' => $post->id], ['class' => 'blog_btn']) ?>
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
                    </div>
                <? endforeach ?>
                <div class="pagination pagination__posts">
                    <?=  \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                    ]); ?>
                </div>
            </div>
            <?= $this->render('_sidebar') ?>
        </div>
    </div>
</div>

<div class="hidden" id="hidden-search-query">
    <?= isset($search_query)? trim($search_query) : '' ?>
</div>