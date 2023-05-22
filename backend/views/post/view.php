<?php

use backend\models\Tag;
use yii\widgets\DetailView;
use yii\helpers\Html;
use backend\models\Post;

/** @var yii\web\View $this */
/** @var backend\models\Post $model */

$this->title = $model->title;
$model->category->title;
$model->image;
$model->description;
$model->id_comment;
$model->user->username;
$model->created_at;
$model->updated_at;


$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $model->category->title;
$this->params['breadcrumbs'][] = $model->image;
$this->params['breadcrumbs'][] = $model->description;
$this->params['breadcrumbs'][] = $model->user->username;
$this->params['breadcrumbs'][] = $model->id_comment;
$this->params['breadcrumbs'][] = $model->created_at;
$this->params['breadcrumbs'][] = $model->updated_at;

\yii\web\YiiAsset::register($this);
?>

<div class="post-view">
    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp">
        <div class="row align-items-center">
            <div class="single-blog-thumbnail">
                <?= Html::img("/".$model->image,
                    ['width' => '1250px', 'height' => '550px']) ?>
                <div class="post-date">
                    <a href=""">
                    <?= Yii::$app->formatter->asDate($model->created_at, 'dd'); ?>
                    <span>
                    <?= Yii::$app->formatter->asDate($model->created_at, 'php:M'); ?>
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <!-- Blog Content -->
                <div class="single-blog-content">
                    <div class="container">
                        <div class="line" style="border: 1px solid #999999; width: 10%; margin-bottom: 16px"></div>
                        <div class="row">
                            <div class="single-blog-content">
                                <p><?= Html::decode($model->category->title) ?></p>
                                <h4 style="font-weight: 600"><?= Html::encode($this->title) ?></h4>

                                <div class="post-meta row">
                                    <p class="col-2">By <a href="#"><?= Html::encode($model->user->username) ?></a></p>
                                    <p class="col-3"><?= $countComment = \backend\models\Comment::find()->where(['id_post' => $model->id_post])->count(); ?>
                                        comment</p>
                                </div>
                                <?= Html::decode($model->description) ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Author -->
                <div class="blog-post-author mt-100 d-flex">
                    <div class="author-thumbnail">
                        <img style="width: 100%; height: 100%" src="\uploads\1.jpg" alt="AVT">
                    </div>
                    <div class="author-info">
                        <div class="line"></div>
                        <span class="author-role"><?= Html::encode($model->user->username) ?></a></span>
                        <h4><a href="#" class="author-name">Otimus</a></h4>
                        <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam
                            vestibulum
                            convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam
                            tincidunt.
                            Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
                    </div>
                </div>
                <div class="comment_area clearfix mt-70">
                    <h5 class="title">Comments</h5>
                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="\uploads\2.png" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="">
                                        <?= Yii::$app->formatter->asDate($model->created_at, 'dd'); ?>
                                        <span>
                                <?= Yii::$app->formatter->asDate($model->created_at, 'php:M'); ?>
                            </span>
                                    </a>
                                    <p><a href="#" class="post-author">Huỳnh James</a></p>
                                    <p>Phim rất tuyệt vời, tôi đã bị cuốn hút từ đầu đến cuối. Cốt truyện hấp dẫn,
                                        diễn xuất
                                        xuất
                                        sắc và cảnh quay đẹp mắt. Tôi chắc chắn sẽ xem lại phim này nhiều lần!</p>
                                    <a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <ol class="children">
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img style="height: 45%" src="\uploads\4.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <div class="post-date">
                                                <a href="">
                                                    <?= Yii::$app->formatter->asDate($model->created_at, 'dd'); ?>
                                                    <span>
                                                <?= Yii::$app->formatter->asDate($model->created_at, 'php:M'); ?>
                                                </span>
                                                </a>
                                            </div>
                                            <p><a href="#" class="post-author">Alibaba</a></p>
                                            <p>Tôi đã xem phim này với gia đình và chúng tôi đều rất thích. Phim có
                                                một
                                                thông điệp
                                                sâu sắc và những nhân vật rất thực tế, tạo ra một trải nghiệm đầy
                                                cảm xúc
                                                cho khán
                                                giả.</p>
                                            <a href="#" class="comment-reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>

                <div class="post-a-comment-area mt-70">
                    <h5>Leave a reply</h5>
                    <!-- Reply Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                            </div>
                            <div class="col-12">
                                <div class="group">
                                    <textarea name="message" id="message" required></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Comment</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn original-btn">Reply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--    ###########-----------#############-->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="post-sidebar-area">
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <form action="#" class="search-form">
                            <input type="Search" name="search" id="searchForm" placeholder="Search">
                            <input type="submit" value="submit">
                        </form>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title subscribe-title">Subscribe to my newsletter</h5>
                        <div class="widget-content">
                            <form action="#" class="newsletterForm">
                                <input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">
                                <button type="submit" class="btn original-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Advertisement</h5>
                        <a href="#"><img src="/img/bg-img/add.gif" alt=""></a>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Latest Posts</h5>
                        <?php $posts = Post::find()->limit(7)->orderBy(['created_at' => SORT_DESC])->all(); ?>
                        <?php
                        foreach ($posts as $post):
                            /** @var Post $post */
                            ?>
                            <div class="widget-content">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <?= Html::img("/".$post->image) ?>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag"><?=Html::encode($post->category->title) ?></a>
                                        <h4><a href="#" class="post-headline"><?= Html::encode($post->title) ?></a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">
                                                    <?= Yii::$app->formatter->asDate($post->created_at, 'dd'); ?>
                                                    <span>
                                                <?= Yii::$app->formatter->asDate($post->created_at, 'php:M'); ?>
                                                </span></a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <h5 class="title">Tags</h5>

                    <div class="widget-content">
                        <ul class="tags">
                            <?php
                            $tags = Tag::find()->limit(3)->distinct()->all();
                            ?>
                            <?php
                            foreach ($tags as $tag):
                                /** @var Tag $tag */
                                ?>
                                <li><a href="/<?= $tag->title ?>"> <?= $tag->title ?></a></li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






