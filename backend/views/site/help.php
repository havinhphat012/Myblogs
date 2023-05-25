<?php

/** @var yii\web\View $this */

use backend\models\Post;
use yii\helpers\Html;
use yii\helpers\StringHelper;

$this->title = 'My Blog';
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/b5.jpg);
height: 300px">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content text-center">
                    <h2>help</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Container ##### -->
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-3">
            <a style="font-size: 20px; line-height: 3rem" href="help#1">Hướng dẫn sử dụng</a><br>
            <a style="font-size: 20px; line-height: 3rem" href="help#2">Câu hỏi thường gặp</a><br>
            <a style="font-size: 20px; line-height: 3rem" href="help#3">Hỗ trợ kỹ thuật</a><br>
            <a style="font-size: 20px; line-height: 3rem" href="help#4">Liên hệ hỗ trợ</a><br>
            <a style="font-size: 20px; line-height: 3rem" href="help#5">Dịch vụ</a>
        </div>

        <div class="col-12 col-lg-9">
            <h3 id="#1">Hướng dẫn sử dụng</h3>
            <p>The Millennium Bug – the theory that all computer systems would crash
                at midnight on 1 January 2000, leading to global catastrophe, sort of
                made sense. Computers had been coded in the 1960s using two digits to
                denote a year – 97, 98, 99 and so forth – but had not accounted for the
                turn of the millennium. So ‘00’ indicated not 2000, but 1900. Flipping
                back a hundred years could really mess things up, so money (a lot) was
                spent to prevent chaos and come the new year, we held our collective breath...
                But looking ahead doesn’t have to be all mystics and crystal balls (though, personally,
                I do enjoy a bit of tarot by the full moon). There’s a whole host of people who make a
                living from legitimate prophecies. Science-backed, well-researched predictions are even
                endorsed by governments. What do they think will happen this year? And does knowing the
                future really help us cope in the present? Or would we rather be oblivious if oblivion
                awaits? I met them to find out.
                They call themselves the superforecasters. They are ordinary people with an extraordinary
                ability to predict the future. They are a hand-picked cross section of society’s most curious
                and intelligent minds, who are trained to predict the outcome of global events, from the war
                in Ukraine to the cost-of-living crisis and the unrest in Iran. And businesses and governments
                alike are listening.
            </p>
            <hr>
            <h3 id="#2">Câu hỏi thường gặp</h3>
            <p>Nothing. I awoke the next day to the same world as the one I’d fallen
                asleep in. While many dismissed the Millennium Bug as at best a myth, and at
                worst a hoax, others maintain that we had simply prepared appropriately (millions
                were spent to reprogramme computers). Had experts and forecasters averted disaster?
                Or did the danger never exist in the first place?
                The concept of superforecasting was first mooted by psychologist Philip Tetlock of
                the University of Pennsylvania, following his own research that found expert predictions – you know,
                the talking heads on the news – were often no more accurate than ‘monkeys throwing darts’.
                Professor Tetlock was curious why some predictors were more successful than others and wanted
                to know if the accuracy could be honed. He developed an approach that yielded significantly
                superior results, even seducing the US government in the process. In 2011, it sponsored a
                forecasting competition that saw five research teams invited to test their prediction skills
                by responding to a series of questions with a probability percentage answer. Professor
                Tetlock’s team, The Good Judgment Project, was declared the undisputed victor and Professor
                Tetlock funnelled off the most successful 2% of predictors. The superforecasters were born.
            </p>
            <hr>
            <h3 id="#3">Hỗ trợ kỹ thuật</h3>
            <p>If we had a similar scare today, how would we hear about it? On the news?
                Via TikTok? As we seek reassurance during what feel like increasingly precarious times,
                we’re turning to self-identifying future predictors, like those mentioned above, more
                than ever. Call them soothsayers of sorts.
                Over a decade on, Good Judgment, though no longer sponsored by the US government, is
                still going strong, with its super forecasters relied on by finance directors, journalists
                and tech start-ups. On this side of the pond, a group of civil servants and intelligence
                analysts have also been taking part in a forecasting tournament for the past two years,
                known as the Cosmic Bazaar. It sounds like something from Back To The Future, but the group
                is informing decision- making for some very powerful people.
            </p>
            <hr>
            <h3 id="#4">Liên hệ hỗ trợ</h3>
            <p>The prophecies of Nostradamus topped the Sunday Times Bestseller list at the tail
                end of 2022 after one of the 16th century seer’s predictions appeared to foretell the year
                of Queen Elizabeth II’s death. Meanwhile, The Simpsons has been credited with an eerie
                ability to predict the future. Homer and Marge et al all lived through the Trump presidency,
                several Super Bowl results and the discovery of the Higgs boson particle years before these
                events happened.
                When I meet Warren Hatch, CEO of The Good Judgment Project, I’m hoping he can tell me if I
                should invest in cryptocurrency or enter the prize draw to win that £3m town house in London.
                But while I was expecting a level of woo-woo from the chief prognosticator himself, what I
                find is quite the opposite.

                Superforecasters imbibe a vast amount of historical information, observing trends, noticing
                behavioural patterns and analysing data, and apply it to determine the percentage likelihood
                of outcomes to geopolitical events. Every day, Hatch sits down at his computer at home, fires
                up the browser and tries to find the answers to questions like, ‘Will the war in Ukraine be over
                by this time next year?’ and ‘Will house prices fall?’ If you want an accurate answer, don’t go
                to an estate agent, call Warren Hatch.
            </p>
            <hr>
            <h3 id="#5">Dịch vụ</h3>
            <p>Then there’s the increase in pound-shop prophets – videos set to eerie music popping
                up on your TikTok FYP insisting that the person behind the account is a time traveller who
                has come back to warn you that aliens are set to take over/financial crisis is looming/ your
                manicurist is trying to kill you (delete as necessary). Not to mention the psychics and tarot
                card readers making big bucks off your uncertainty.
                Anyone can visit The Good Judgment Project’s public site, post their own queries or even try
                their hand at forecasting. Scrolling through the questions on the board, I can see predictions
                for European climate temperatures, the price of Bitcoin and even box office figures for Hollywood
                films. I decide to give it a whirl. But where to begin? With my own personal concerns (‘Will hybrid
                working continue?’ ‘Will childcare costs ever make having kids feel feasible?’) or with more
                pressing global matters (‘Will governments act before the climate crisis ends the world? ‘Will
                Vladimir Putin wage war across Europe?’). Hatch explains the key is in the question and that,
                unsurprisingly, discussions about international relations abound on the site, so I settle on
                asking the forecasters, ‘What will be the pay gap between men and women in the UK in 2025?’ And
                something lighter: ‘What percentage of women will be in or will have been in an open relationship
                by the end of 2029?’ Over the next couple of weeks, the superforecasters get to work*.
            </p>
        </div>
    </div>
</div>

