<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use backend\models\Category;
use backend\models\PostSearch;
use backend\models\Post;
use backend\models\Tag;
use yii\helpers\Html;
use yii\web\Request;
use yii\helpers\StringHelper;
use yii\widgets\ActiveForm;

/** @var yii\widgets\ActiveForm $form */
/** @var backend\models\Post $model */
/** @var backend\models\PostSearch $model */
/** @var backend\models\PostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

\backend\assets\DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerCsrfMetaTags() ?>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody()?>
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="original-load"></div>
    </div>
</div>

<!-- Subscribe Modal -->
<div class="subscribe-newsletter-area">
    <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h5 class="title">Subscribe to my newsletter</h5>
                    <form action="#" class="newsletterForm" method="post">
                        <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                        <button type="submit" class="btn original-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-sm-8">
                    <div class="breaking-news-area">
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="/">Hello World!</a></li>
                                <li><a href="/">Hello Universe!</a></li>
                                <li><a href="/">Hello Original!</a></li>
                                <li><a href="/">Hello Earth!</a></li>
                                <li><a href="/">Hello Colorlib!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top Social Area -->
                <div class="col-12 col-sm-4">
                    <div class="top-social-area">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <div class="logo-area text-center">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <a href="/" class="original-logo"><img src="/img/core-img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav Area -->
    <div class="original-nav-area" id="stickyNav">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between">

                    <!-- Subscribe btn -->
                    <div class="subscribe-btn">
                        <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Subscribe</a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" id="originalNav">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="site/about">About Us</a></li>
                                        <li><a href="site/help">Help</a></li>
                                        <li><a href="site/condition">condition</a></li>
                                    </ul>
                                </li>
                                <li><a href="/category">Catagory</a>
                                    <ul class="dropdown">
                                        <?php $categories = Category::find()->limit(5)->all();
                                        foreach ($categories as $category):
                                            /** @var Category $category **/
                                        ?>
                                        <li><?= Html::a($category->title,['post/category','category'=> $category->title])?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <li><a href="/tag">Tag</a>
                                    <ul class="dropdown">
                                        <?php $tags = \backend\models\Tag::find()->limit(10)->all();
                                        foreach ($tags as $tag):
                                            /** @var Tag $tag */
                                        ?>
                                        <li><?= Html::a($tag->title, ['post/tag', 'tag'=> $tag->title])?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <li><a href="/post">Post</a></li>

                            </ul>

                            <!-- Search Form  -->

                            <div id="search-wrapper">
                                <form action="/post" method="get">
                                    <input type="text" id="search" name="PostSearch[title]" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">
    <div class="container">
        <section class="content">
            <?= $content ?>
        </section>
    </div>
</div>
<!-- ##### Blog Wrapper End #####-->

<!-- ##### Footer Area Start #####-->
<footer class="footer-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Footer Nav Area -->
                <div class="classy-nav-container breakpoint-off">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-center">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

</footer>
<!-- ##### Footer Area End ##### -->


<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage();
