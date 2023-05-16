<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use backend\models\Post;
use yii\helpers\Html;
use yii\web\Request;
use yii\helpers\StringHelper;

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
    <?php $this->registerCsrfMetaTags() ?>
    <title>Original - Lifestyle Blog Templa</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
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
                                <li><a href="#">Hello World!</a></li>
                                <li><a href="#">Hello Universe!</a></li>
                                <li><a href="#">Hello Original!</a></li>
                                <li><a href="#">Hello Earth!</a></li>
                                <li><a href="#">Hello Colorlib!</a></li>
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
                    <a href="index.php" class="original-logo"><img src="img/core-img/logo.png" alt=""></a>
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="single-post.html">Single Post</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li><a href="/category">Catagory</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Catagory 1</a></li>
                                        <li><a href="#">Catagory 1</a></li>
                                        <li><a href="#">Catagory 1</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Catagory 2</a></li>
                                                <li><a href="#">Catagory 2</a></li>
                                                <li><a href="#">Catagory 2</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Catagory 3</a></li>
                                                        <li><a href="#">Catagory 3</a></li>
                                                        <li><a href="#">Catagory 3</a></li>
                                                        <li><a href="#">Catagory 3</a></li>
                                                        <li><a href="#">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Catagory 2</a></li>
                                                <li><a href="#">Catagory 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Catagory 1</a></li>
                                        <li><a href="#">Catagory 1</a></li>
                                    </ul>
                                </li>
                                <li><a href="/post">Post</a></li>
                                <li><a href="/tag">Tag</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 1</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 2</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 3</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 4</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
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

<!-- ##### Hero Area Start ##### -->
<?php
$posts = Post::find()->limit(5)->orderBy(['id_post' => SORT_DESC])->all();
?>

<div class="hero-area">
<!--    ### Hero Slides Area ###-->

    <div class="hero-slides owl-carousel">
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
                                <a href="#" data-animation="fadeInUp"><?= $post->category->title ?></a>
                            </div>
                            <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html"><?=$post->title ?></a></h2>
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

<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100 clearfix">
    <div class="container">

        <section class="content">
            <?= $content ?>
        </section>

        <div class="row align-items-end">
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline">Welcome to this Lifestyle blog</a></h4>
                        <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum</p>
                        <a href="#" class="btn original-btn">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-catagory-area clearfix mb-100">
                    <img src="img/blog-img/1.jpg" alt="">
                    <!-- Catagory Title -->
                    <div class="catagory-title">
                        <a href="#">Lifestyle posts</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-catagory-area clearfix mb-100">
                    <img src="img/blog-img/2.jpg" alt="">
                    <!-- Catagory Title -->
                    <div class="catagory-title">
                        <a href="#">latest posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
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
                                <img src= <?=$post->image?> alt="Image Blogs">
                                <div class="post-date">
                                    <a href="#">
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
                                <a href="#" class="post-tag"><?= $post->category->title ?></a>
                                <h4><a href="#" class="post-headline"><?=$post->title ?></a></h4>
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
                <!-- Load More -->
                <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                    <a href="#" class="btn original-btn">Read More</a>
                </div>
            </div>

            <!-- ##### Sidebar Area ##### -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="post-sidebar-area">

                    <!-- Widget Area -->
<!--                    --><?php
//                    foreach ($posts as $post):
//                        /** @var Post $post */
//                        ?>
                    <div class="sidebar-widget-area">
                        <form action="#" class="search-form">
                            <input type="Search"name="search" id="searchForm" placeholder="Search">
<!--                            --><?php //=$post= Post()::find()->all();?>

                            <input type="submit" value="submit">
                        </form>
                    </div>
<!--                    --><?php
//                    endforeach;
//                    ?>

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
                        <?php $posts = Post::find()->limit(4)->orderBy(['created_at' => SORT_DESC])->all(); ?>
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
</div>
<!-- ##### Blog Wrapper End #####-->

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

                <!-- Footer Social Area -->
                <div class="footer-social-area mt-30">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

</footer>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage();
