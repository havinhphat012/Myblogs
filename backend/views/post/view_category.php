<?php
/** @var yii\web\View $this */

/** @var backend\models\Post $model */

use yii\bootstrap4\Html;
use yii\helpers\StringHelper;

?>
<?php
foreach ($model as $value):
    ?>
    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="single-blog-thumbnail">
                    <?= Html::img("/" . $value->image, ['width' => '386px', 'height' => '289px']) ?>
                    <div class="post-date">
                        <a href="">
                            <?= Yii::$app->formatter->asDate($value->created_at, 'dd'); ?>
                            <span>
                                <?= Yii::$app->formatter->asDate($value->created_at, 'php:M'); ?>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!-- Blog Content -->
                <div class="single-blog-content">
                    <div class="line"></div>
                    <?= Html::a($value->category->title, 'post/slug/' . $value->slug, [
                        'class' => 'post-tag'
                    ]) ?>
                    <h4>
                        <?= Html::a($value->title, 'post/slug/' . $value->slug, [
                            'class' => 'post-headline'
                        ]) ?>
                    </h4>
                    <p><?= $value->description = StringHelper::truncateWords($value->description, 50, '...', true); ?></p>
                    <div class="post-meta">
                        <p>By <a href="#"><?= $value->user->username ?></a></p>
                        <p><?= $countComment = \backend\models\Comment::find()->where(['id_post' => 1])->count(); ?>
                            comment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;
