<?php

/** @var yii\web\View $this */
/** @var backend\models\Post $model */

use backend\models\Post;
use yii\helpers\Html;
use yii\helpers\StringHelper;

$this->title = 'My Blog';

$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);

?>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/b1.jpg);
height: 300px">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content text-center">
                    <h2>about us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100-0 clearfix">
    <div class="container">
        <div class="row align-items-end">
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline">Welcome to this Lifestyle blog</a></h4>
                        <p class="mb-3">Our free time is precious, so usually we want to spend it wisely. As in, eating, drinking, sleeping, repeating, and lots of quizzing.
                            We're talking easy ones, hard ones, true or false ones - even dedicated emoji rounds. Because let's face it, a games night really isn't complete
                            without a boozy quiz with your best mate insisting that they can name all of the Kardashian kids in order of age, is it?
                            So, whether you're preparing for a chill night in this weekend with your pals or you're putting together a hen weekend itinerary full of organised
                            fun, here's a list of some random and fun trivia. Perfect for pulling out at your next dinner party.</p>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-area clearfix mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <p class="mb-3">Two research scientists matched on the global dating app in the most remote part of the world - a man working at the United States
                            Antarctic McMurdo Station and a woman camping a 45-minute helicopter ride away. What are the chances?! Part of it neighbours Greece and Bulgaria
                            (therefore sitting in Europe) and the other part neighbours Syria, Iran, and Iraq beyond Turkey’s borders (therefore classing as Asia). The Bosphorus
                            Strait runs between them - a narrow body of water that connects the Black Sea to the Mediterranean Sea via the Sea of Marmara. According to National
                            Geographic.</p>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-catagory-area clearfix mb-100">
                    <img src="../img/blog-img/1.jpg" alt="">
                    <!-- Catagory Title -->
                    <div class="catagory-title">
                        <a href="#">Lifestyle posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Wrapper End ##### -->

<!-- ##### Cool Facts Area Start ##### -->
<div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(../img/bg-img/b4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-blog-area blog-style-2 text-center mb-100">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline">Welcome to this Lifestyle blog</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100">
                    <h2><span class="counter">25</span></h2>
                    <p>Awards won</p>
                </div>
            </div>
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100">
                    <h2><span class="counter">12</span>K</h2>
                    <p>FB Followers</p>
                </div>
            </div>
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100">
                    <h2><span class="counter">9</span></h2>
                    <p>Team members</p>
                </div>
            </div>
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-facts-area text-center mb-100">
                    <h2><span class="counter">16</span></h2>
                    <p>Coffes/Day</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Cool Facts Area End ##### -->

<!-- ##### Blog Wrapper Start ##### -->
<div class="blog-wrapper section-padding-100-0 clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Blog Area  -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area blog-style-2 mb-100">
                    <div class="single-blog-thumbnail">
                        <img src="../img/blog-img/4.jpg" alt="">
                        <div class="post-date">
                            <a href="#">10 <span>march</span></a>
                        </div>
                    </div>
                    <!-- Blog Content -->
                    <div class="single-blog-content mt-50">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline">We love colors in 2018</a></h4>
                        <p>Part of it neighbours Greece and Bulgaria (therefore sitting in Europe)
                            and the other part neighbours Syria, Iran, and Iraq beyond Turkey’s borders (therefore classing as Asia).
                            The Bosphorus Strait runs between them - a narrow body of water that connects the Black Sea to the Mediterranean
                            Sea via the Sea of Marmara.</p>
                        <div class="post-meta">
                            <p>By <a href="#">james smith</a></p>
                            <p>3 comments</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area  -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area blog-style-2 mb-100">
                    <div class="single-blog-thumbnail">
                        <img src="../img/blog-img/5.jpg" alt="">
                        <div class="post-date">
                            <a href="#">10 <span>march</span></a>
                        </div>
                    </div>
                    <!-- Blog Content -->
                    <div class="single-blog-content mt-50">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                        <p>It's called a 'nurdle' and there was once a lawsuit over which toothpaste company had the right to portray it.</p>
                        <div class="post-meta">
                            <p>By <a href="#">james smith</a></p>
                            <p>3 comments</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Blog Area  -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area blog-style-2 mb-100">
                    <div class="single-blog-thumbnail">
                        <img src="../img/blog-img/6.jpg" alt="">
                        <div class="post-date">
                            <a href="#">10 <span>march</span></a>
                        </div>
                    </div>
                    <!-- Blog Content -->
                    <div class="single-blog-content mt-50">
                        <div class="line"></div>
                        <a href="#" class="post-tag">Lifestyle</a>
                        <h4><a href="#" class="post-headline">We love colors in 2018</a></h4>
                        <p>The Spanish city thought it was too ugly, so Gustave Eiffel pitched it to Paris instead.
                            French critics weren't too thrilled either, but it's one of the most famous landmarks in the
                            world today.</p>
                        <div class="post-meta">
                            <p>By <a href="#">james smith</a></p>
                            <p>3 comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Wrapper End ##### -->

<!-- ##### Instagram Feed Area Start ##### -->
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
            <img src="../img/instagram-img/1.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="../img/instagram-img/2.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="../img/instagram-img/3.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="../img/instagram-img/4.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="../img/instagram-img/5.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="../img/instagram-img/6.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Single Insta Feed -->
        <div class="single-insta-feed">
            <img src="../img/instagram-img/7.png" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Instagram Feed Area End ##### -->
