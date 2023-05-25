<?php

/** @var yii\web\View $this */

use backend\models\Post;
use yii\helpers\Html;
use yii\helpers\StringHelper;

$this->title = 'My Blog';
?>

<!-- ##### Hero Area Start ##### -->
<div class="hero-area" style="margin: -120px">
    <!--    ### Hero Slides Area ###-->
    <?php
    $posts = Post::find()->limit(5)->orderBy(['id_post' => SORT_DESC])->all();
    ?>
    <div class="hero-slides owl-carousel owl-theme owl-center owl-loaded">
        <?php
        foreach ($posts as $post):
            /** @var Post $post */
            ?>
            <!--        ### Single Slide ###-->
            <div class="single-hero-slide bg-img" style="background-image: url(<?=$post->image?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="/" data-animation="fadeInUp"><?= $post->category->title ?></a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href=""><?=$post->title ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
<!-- ##### Hero Area End ##### -->


<?php
$posts = Post::find()->limit(5)->orderBy(['id_post' => SORT_DESC])->all();
?>
<!-- ##### Container Start #####-->
<div class="container">
    <div class="section-padding-100"></div>

    <div class="row">
        <div class="col-12 col-lg-9">
            <!-- Single Blog Area  -->
            <?php
            foreach ($posts as $post):
                /** @var Post $post */
                ?>
                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="single-blog-thumbnail">
                                <?=Html::img("/".$post->image, ['width'=>'386px', 'height'=>'289px'])?>
                                <div class="post-date">
                                    <a href="">
                                        <?= Yii::$app->formatter->asDate($post->created_at, 'dd');?>
                                        <span>
                                        <?= Yii::$app->formatter->asDate($post->created_at, 'php:M'); ?>
                                        </span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Blog Content -->
                            <div class="single-blog-content">
                                <div class="line"></div>
                                <?= Html::a($post->category->title,'post/slug/'.  $post->slug,[
                                     'class'=>'post-tag'
                                ])?>
                                <h4>
                                    <?= Html::a($post->title,'post/slug/'.  $post->slug,[
                                        'class'=>'post-headline'
                                    ])?>
                                </h4>
                                <p><?= $post->description = StringHelper::truncateWords($post->description, 50, '...', true);?></p>
                                <div class="post-meta">
                                    <p>By <a href="#"><?=$post->user->username?></a></p>
                                    <p><?=$countComment = \backend\models\Comment::find()->where(['id_post'=> 1])->count();?> comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>

        <!-- ##### Sidebar Area ##### -->
        <div class="col-12 col-md-4 col-lg-3">
            <div class="post-sidebar-area">
                <!-- Widget Area -->
                <div class="sidebar-widget-area">
                    <form action="#" class="search-form">
                        <input type="Search"name="PostSearch[title]" id="searchForm" placeholder="Search">
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
                    <a href="#"><img src="img/bg-img/add.gif" alt=""></a>
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
                                    <img src="<?=$post->image?>" alt="Image latest Posts">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-tag"><?=$post->category->title?></a>
                                    <h4><a href="#" class="post-headline"><?=$post->title?></a></h4>
                                    <div class="post-meta">
                                        <p><a href="#">
                                            <?= Yii::$app->formatter->asDate($post->created_at, 'dd');?>
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

                <!-- Widget Area -->
                <div class="sidebar-widget-area">

                    <h5 class="title">Tags</h5>

                    <div class="widget-content">
                        <ul class="tags">
                            <?php
                            $tags = Post::find()->limit(5)->select('id_tag')->distinct()->all();
                            ?>
                            <?php
                            foreach ($posts as $post):
                                /** @var Post $post */
                                ?>
                                <li><a href="/<?=$post->title?>"><?=$post->title?></a></li>
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

<!-- ##### Container End #####-->

<!-- ##### Instagram Feed Area Start #####-->
<div class="instagram-feed-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="insta-title">
                    <h5>Follow us @ Instagram</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram Slides -->
    <div class="instagram-slides owl-carousel">
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/1.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/2.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/3.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/4.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/5.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/6.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="img/instagram-img/7.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Instagram Feed Area End #####-->



