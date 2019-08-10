@extends('layouts.app')

@section('title' , 'Homepage')

@section('content')


<style>
    .createSpace {

        padding-top: 150px;
    }

    h1 {
        font-weight: bold;
        color: white;
    }

    h2 {
        color: white;
    }

    h3 {
        color: white;
    }

    h5 {
        color: white;
    }

    h6 {
        color: white;
    }

    #menu ul {
        list-style: none;
    }

    #menu li {
        display: inline;
    }




    /*
.moveLeft {
  padding-left:70px.
} */

    .vl {
        border-left: 6px solid #15A4EB;
        height: 265px;
        padding-left: 50px;

    }


    .vl2 {
        border-left: 6px solid green;
        height: 50px;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: 0;

    }

    .createPad {
        padding-top: 70px;
    }

    .createBtnSpace {
        padding-top: 40px;
    }

    .button1 {
        border-radius: 20px;
        margin-top: 15px;
    }

    .whiteSpaceTop {
        padding-top: 600px;
    }




    .wrapper {
        text-align: center;
        margin: 50px auto;
    }

    .dot {
        height: 5px;
        width: 5px;
        background-color: #15A4EB;
        border-radius: 50%;
        display: inline-block;
    }

    .special-card {
        /* create a custom class so you
   do not run into specificity issues
   against bootstraps styles
   which tends to work better than using !important
   (future you will thank you later)*/

        background-color: rgba(0, 0, 0, 0);
        opacity: .4;
    }



    .box {

        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }

    .box:hover {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        animation-name: example;
        animation-duration: 0.25s;
        border-left: 8px solid red;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .boxYellow {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

    }

    .boxYellow:hover {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        animation-name: example;
        animation-duration: 0.25s;
        border-left: 8px solid yellow;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .boxPink {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

    }

    .boxPink:hover {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        animation-name: example;
        animation-duration: 0.25s;
        border-left: 8px solid #fc0384;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .boxGreen {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

    }

    .boxGreen:hover {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        animation-name: example;
        animation-duration: 0.25s;
        border-left: 8px solid #03fcc2;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .boxPurple {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

    }

    .boxPurple:hover {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        animation-name: example;
        animation-duration: 0.25s;
        border-left: 8px solid #2F12D4;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .boxLight {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

    }

    .boxLight:hover {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        animation-name: example;
        animation-duration: 0.25s;
        border-left: 8px solid #00fff2;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }
</style>




<div class="container-fluid createSpace">

    <div class="row ">

        <div class="col offset-md-2  vl ">
            <h3>Hi, my name is</h3>
            <h1 class="display-3"><b>Munji Kahalah</b></h1>
            <br>
            <h5>mathametician / programmer / designer</h5>
            <br>


            <h6>Follow me on:
                <a href="https://www.linkedin.com/in/munji-kahalah-124773115/"><img src="/img/linkedIn.png" alt="in" width="30" height="30"></a> &nbsp;
                <a href="https://twitter.com/Kahalah_at_me"><img src="/img/Twitter_SOcial_Icon_Circle_White.png" alt="in" width="30" height="30"></a> &nbsp;
                <a href="https://github.com/munjik"><img src="/img/github.png" alt="in" width="30" height="30"></a>
            </h6>


            <a href="/img/MKcv.pdf" class="btn btn-outline-warning btn-lg button1" role="button" download><i class="fa fa-download"></i>Download CV</a>

        </div>
    </div>



</div> <!-- end of the container-fluid-->

<div class="contanier-fluid">

    <div class="row-12 whiteSpaceTop">
        <div class="col section-title text-capitalize text-center ">
            <h1>Here's what I've done so far</h1>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <h3 style="color:#666565;">my education</h3>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>


        </div>
    </div>

    <div class="row createPad">

        <div class="col-md-4 offset-md-2 boxLight">
            <img src="/img/loboS.png" alt="in" width="370" height="245">
        </div>

        <div class="col-md-6">
            <div class="card bg-custom-color w-75 ">
                <div class="card-body">
                    <h5 class="card-title "><b>B.S. Computational Math and Minor in Computer Science, The University of New Mexico</b></h5>
                    <p style="color: #15A4EB;" class="card-text">Aug 2015 - May 2020 </p>
                    <p>The world of computational mathametics and computer science focuses on applications of math to computing technologies. I've taken courses on data structures and algorithms, java, C, theory of numbers, 3D calculus, linear algebra, etc.</p>
                          <a href="https://math.unm.edu" target="_blank"> <button class="up">Explore the department</button> </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row createPad">
        <div class="col text-center">
            <h3 style="color:#666565;">my work experience</h3>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>


        </div>
    </div>



    <div class="row createPad">

        <div class="col-md-4 offset-md-2 box">
            <img src="/img/hscL.png" alt="in" width="370" height="245">
        </div>

        <div class="col-md-6">
            <div class="card bg-custom-color w-75 ">
                <div class="card-body">
                    <h5 class="card-title "><b>Programmer, The University of New Mexico Health Sciences Center</b></h5>
                    <p style="color: #15A4EB;" class="card-text">Aug 2017 - Present </p>
                    <p>Assistant webmaster, working on data, business intelligence, and analytics. Creating websites with HTML, CSS, and Bootstrap. Utilized R Programming to plot maps for our organization in regards to how many clinics Project ECHO
                        handles. Day to day basis includes monitoring our website, designing, and displaying content.</p>
                          <a href="https://echo.unm.edu" target="_blank"> <button class="up">Tour ECHO</button> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row createPad">
        <div class="col-sm-4 offset-md-2 boxYellow ">
            <img src="/img/dnaW.png" alt="in" width="370" height="245">

        </div>

        <div class="col-sm-6">
            <div class="card bg-custom-color w-75">
                <div class="card-body">
                    <h5 class="card-title "><b>Data Analyst, CureDM</b></h5>
                    <p style="color: #15A4EB;" class="card-text">May 2017 – July 2017 </p>
                    <p> Clinical data analyst, I reviewed and ranked individual patient’s outcome data of their phase 1b study in type 2 diabetes. This process helped CureDM better understand and define the best inclusion and exclusion criteria for
                        their follow on phase 2 proof of concept study in type 2 diabetes patients.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row createPad">
        <div class="col-sm-4 offset-md-2 box ">
            <img src="/img/SOE.png" alt="in" width="370" height="245">

        </div>

        <div class="col-sm-6">
            <div class="card bg-custom-color w-75">
                <div class="card-body">
                    <h5 class="card-title "><b>Test Analyst, Modern Air Power</b></h5>
                    <p style="color: #15A4EB;" class="card-text">Aug 2017 - Present </p>

                    <p>Worked at UNM as a test analyst under Dr. Hussey, Modern air power is a software created by John Tiller designed to use modern weaponry to terminate enemy forces. Mastered the software and was able to move to the full version..
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Strat up and ventures -->

    <div class="row-12 createPad">
        <div class="col text-center">
            <h3 style="color:#666565;">start-ups & ventures</h3>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>
        </div>
    </div>


    <!-- start of a new row -->
    <div class="row createPad">

        <div class="col-md-4 offset-md-2  boxPink">



            <a href="https://angel.co/company/indigenous-beats-2" target="_blank">
                <img  src="/img/newInde.png" alt="in" width="370" height="245">
            </a>


        </div>


        <div class="col-md-6">

            <div class="card bg-custom-color w-75  ">
                <div class="card-body">
                    <h5 class="card-title "><b>Indigenous Beats (Inde Beats)</b></h5>
                    <p style="color: #15A4EB;" class="card-text">Aug 2015 – Aug 2017</p>
                    <p>Served as CEO for a start-up I co-founded in 2015. Secured $20,000 USD in seed funding from ABQid (New Mexico’s biggest accelerator program). Daily operations/ cofounder – Oversaw all daily business operations: maintaining
                        budgets, allocating resources, forming corporate structure, patents, trademarks, creating company culture, setting strategy/ direction, and assisting with major company decisions.</p>
                    <div class="buttons">

                        <a href="https://angel.co/company/indigenous-beats-2" target="_blank"> <button class="raise">See AngelsList</button> </a>

                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="row createPad">

        <div class="col-md-4 offset-md-2 boxGreen">

            <a href="https://www.inacademy.eu" target="_blank">
                <img src="/img/eia.png" alt="in" width="370" height="245">
            </a>
        </div>

        <div class="col-md-6">
            <div class="card bg-custom-color w-75 ">
                <div class="card-body">
                    <h5 class="card-title "><b>European Innovation Academy</b></h5>
                    <p style="color: #15A4EB;" class="card-text">July 2017 – Aug 2017</p>
                    <p>World’s largest extreme entrepreneurship program. From an idea to tech star up in fifteen days. Worked alongside other students, mentors, and experts. Recognized by Google and Financial Times.</p>
                    <div class="buttons">

                        <a href="https://www.inacademy.eu" target="_blank"> <button class="pulse">Explore EIA</button> </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row createPad">

        <div class="col-md-4 offset-md-2 boxPurple">
          <a href="https://appadvice.com/game/app/kob-c3-b6/1438814876">
            <img  src="/img/kobo.png" alt="in" width="370" height="245">
            </a>
        </div>

        <div class="col-md-6">
            <div class="card bg-custom-color w-75 ">
                <div class="card-body">
                    <h5 class="card-title "><b>Kobö</b></h5>
                    <p style="color: #15A4EB;" class="card-text">Nov 2018 – Present</p>
                    <p>Made an iOS game with a colleague, using the game software BuildBox. Kobö is a hyper-casual game that forces the user to use their brain in making quick decisions as they pass each level. Averaging 16 downloads per week with a
                        grand total of 213 downloads with no marketing. Up 85% since we’ve released our app on the Apple Store. </p>
                    <p>Download the game on the App Store for iOS. </p>
                    <a href="https://appadvice.com/game/app/kob-c3-b6/1438814876" target="_blank"> <button class="fill">Get Kobo</button> </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Award winning pitches -->

    <div class="row-12 createPad">
        <div class="col text-center">
            <h3 style="color:#666565;">Awards and Publications</h3>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>
            <span class="dot"></span> <br>
        </div>
    </div>

    <!-- First row -->
    <div class="container">

        <div class="row ">
            <div class="col-sm-4 createPad">
                <div class="card mx-auto" style="width: 80%;">
                    <div class="zoom">

                        <img class="card-img-top" src="/img/techN.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">1st Place UNM Rain-Forest Pitch</h5>
                        <p style="color: #666565;" class="card-text">Placed 1st out of nine finalist and five winners received $1000. In addition, I was selected to attend the European Innovation Academy. </p>
                        <a href="https://stc.unm.edu/rainforest-student-pitch-competition-2/" class="btn btn-shock"><b>Check out the story </b></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 createPad">
                <div class="card mx-auto" style="width: 80%">
                    <img class="card-img-top img-fluid" src="/img/t.jpg" alt="Card image cap" width="330" height="330">
                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">1st Place Tech Navigator Challenge</h5>
                        <p style="color: #666565;" class="card-text">Recieved $10,000 for this award. Prestigious organizations such as Sandia National Labs, Air Force Research Labs, etc., provided us with existing patented technologies and our goal
                            was to commercialize these innovative products.</p>
                        <a href="https://www.linkedin.com/pulse/behind-scenes-success-placing-1st-tech-navigator-munji-kahalah/" class="btn btn-shock"><b>See story and pitch deck</b></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 createPad">
                <div class="card mx-auto" style="width: 80%;">
                    <img class="card-img-top img-fluid" src="/img/asm.jpg" alt="Card image cap" width="340" height="340">

                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">2nd Place UNM BZN Plan Comp</h5>
                        <p style="color: #666565;" class="card-text">Awarded $5,000 for this competition. My start up company at the time, Inde Beats, won the second-place $5,000 prize for an app that allows local musicians to promote their music
                            with short online videos. We were required to create a business plan and pitch deck within 16 weeks.</p>
                        <a href="https://www.abqjournal.com/983191/student-startups-win-77500-in-unm-competition.html" class="btn btn-shock"><b>Check out the award winning pitch deck</b></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- second row -->

        <div class="row ">
            <div class="col-sm-4 createPad">
                <div class="card mx-auto" style="width: 80%;">
                    <img class="card-img-top" src="/img/hsc.jpg" alt="Card image cap">

                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">Nominated for Annual UNM Student Employee of the Year (18-19)</h5>
                        <p style="color: #666565;" class="card-text">I was fortunate enough to recieve a bid for the student employee of the year through my awesome boss, Bill Szarletta, the Chief Innovative Officer at UNMHSC.</p>
                        <a href="#" class="btn btn-shock"> <b>See my work </b></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 createPad">
                <div class="card mx-auto" style="width: 80%">
                    <img class="card-img-top" src="/img/scrappy.jpg" alt="Card image cap">

                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">Scrappy Start-up Finalist</h5>
                        <p style="color: #666565;" class="card-text">My company was one of nine finalist who were selected to compete. I pitched live for a chance to win $500 and tickets to SXSW. The judges had to choose which of the companies were
                            the most commercially viable.</p>
                        <a href="https://tech.co/news/9-scrappy-startups-albuquerque-2016-11" target="_blank" class="btn btn-shock"><b>Check out the competition</b></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 createPad">
                <div class="card mx-auto" style="width: 80%;">
                    <img class="card-img-top" src="/img/ingen.jpeg" alt="Card image cap">

                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">Ingenuity Central-Success Stories</h5>
                        <p style="color: #666565;" class="card-text">I was featured on an article discussing individuals who are disruspting the industry here in Albuquerque, New Mexico. At the time I was the youngest entrepreneur to receive an
                            investment via ABQid.</p>
                        <a href="https://www.ingenuitycentral.org/create/success-stories/inde-beats" target="_blank" class="btn btn-shock"><b> Check out the story</b></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- third row  FIX IMAGE FOR STC BY MAKING IT A BIT SMALLER-->

        <div class="row createPad justify-content-center">
            <div class="col-sm-4">
                <div class="card mx-auto" style="width: 80%;">
                    <img class="card-img-top" src="/img/stc.jpeg" alt="Card image cap">

                    <div class="card-body">
                        <h5 style="color: #000000;" class="card-title">STC-UNM STUDENT INNOVATORS HEADING TO ITALY THIS SUMMER</h5>
                        <p style="color: #666565;" class="card-text">I won a trip to attend the European Innovation Academy to be held July 9-28, 2017, in Turin, Italy. The European Innovation Academy is billed as an extreme entrepreneurship
                            educational program held over 15 days.</p>
                        <a href="https://stc.unm.edu/unm-student-innovators-heading-to-italy-this-summer/" target="_blank" class="btn btn-shock"><b>Check out the story</b></a>
                    </div>
                </div>
            </div>

        </div>

    </div>



<div class="container-fluid">


    <canvas id="nCanvasRender"></canvas>


</div>
    <div class="row-12 createPad">
        <div class="col section-title text-center ">
            <h1><span style="color: #15A4EB">|</span> Let's Change The World Together <span style="color: #15A4EB">|</span></h1>
            <h4 style="color:#666565;">Literally, and we'll start by saving the oceans.</h4>

            <p style="color:#666565;">Protecting our planet starts with you. Click below to see how you can help our home, from adopting a coral to recycling.</p>
            <h1 style="color: #15a4eb">//</h1>

        </div>



    </div>





    <div class="container createBtnSpace">

        <div class="row filtr-container galleryContainer">
            <!-- item -->
            <div class="col-md-3 filtr-item thumbnail" data-category"all, 2" data-sort="save the reef">
                <a class="c-preview" href="https://savethereef.org/charities.html" target="_blank">
                    <div class="c-preview__img">

                        <img src="/img/str.png" alt="">
                        <span class="item-desc">Save the reef</span>
                    </div>
                </a>
            </div>

            <!-- item -->

            <div class="col-md-3 filtr-item thumbnail" data-category"all, 2" data-sort="coral nurseries">
                <a class="c-preview" href="https://reefrestorationfoundation.org" target="_blank">
                    <div class="c-preview__img">

                        <img src="/img/rrf.png" alt="">
                        <span class="item-desc">coral nurseries</span>

                    </div>
                </a>
            </div>

            <div class="col-md-3 filtr-item thumbnail" data-category"all, 2" data-sort="oceana">
                <a class="c-preview" href="https://oceana.org/" target="_blank">
                    <div class="c-preview__img">

                        <img src="/img/oceana.png" alt="">


                        <span class="item-desc">oceana</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 filtr-item thumbnail" data-category"all, 2" data-sort="adopt corals">
                <a class="c-preview" href="https://www.coralgardeners.org" target="_blank">
                    <div class="c-preview__img">
                        <img src="/img/corals.png" alt="">
                        <span class="item-desc">adopt corals</span>
                    </div>
                </a>
            </div>


            <div class="col-md-3 filtr-item thumbnail" data-category"all, prevent-plastic-pollution" data-sort="coral nurseries">
                <a class="c-preview" href="https://www.greenpeace.org/usa/oceans/preventing-plastic-pollution/" target="_blank">

                    <div class="c-preview__img">

                        <img src="/img/plastic.png" alt="">

                        <span class="item-desc">recycle</span>
                    </div>
                </a>
            </div>


            <div class="col-md-3 filtr-item thumbnail" data-category"all, ocean-threats" data-sort="threats">
                <a class="c-preview" href="https://www.greenpeace.org/usa/oceans/issues/" target="_blank">
                    <div class="c-preview__img">

                        <img src="/img/skull.png" alt="">
                        <span class="item-desc">threats</span>

                    </div>
                </a>
            </div>


            <div class="col-md-3 filtr-item thumbnail" data-category"all, protect-sea-life" data-sort="save the whales">
                <a class="c-preview" href="https://www.greenpeace.org/usa/oceans/save-the-whales/" target="_blank">
                    <div class="c-preview__img">


                        <img src="/img/whale.png" alt="">
                        <span class="item-desc">save the whales</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 filtr-item thumbnail" data-category"all, beyond-the-ocean" data-sort="beyond the ocean">
                <a class="c-preview" href="https://www.greenpeace.org/usa/" target="_blank">
                    <div class="c-preview__img">


                        <img src="/img/elephant.png" alt="">
                        <span class="item-desc">beyond the ocean</span>
                    </div>
                </a>
            </div>

            <!-- item -->


        </div>

    </div>



    &nbsp;









</div>



@endsection
