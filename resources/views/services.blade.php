@extends('layouts.app')

@section('content')
<section class="panel section" data-color="purple">
    <button id="btn-click">
        <img class="scroll-arrow" src="img/common/arrow-down.svg" alt="">
    </button>

    <div class="container-page">
        <div class="text-left text-left-services">
            <h5 class="services-title title-scroll text-white">Services</h5>
            <h2 class="services-header services-header-overview headline-header text-teal">What solution<br>are <span>YOU</span><br>looking for?</h2>
            <p class="header-p section-p services-p">Whether it’s a traditional advertising, cutting-edge tech or complex strategic solution you need – or a combination of each – we’re here to help.</p>
        </div>
        <!-- Icon Animation -->
        <div class="header-icon" id="services-icon"></div>
    </div>
</section>
<!-- Section 2 -->
<section class="panel section" data-color="pink">
    <div class="container-grid">
        <div class="services-overview-grid">

            <div class="services-overview-titles">

                <div class="services-title servicetitle1 active">
                    <h5 class="service-number text-white">01</h5>
                    <button class="btnService1" data-active=".a1" type="button" name="button">
                        <h1 class="text-purple">Creative</span></h1>
                    </button>
                </div>

                <div class="services-title servicetitle2">
                    <h5 class="text-white">02</h5>
                    <button class="btnService2" data-active=".a2" type="button" name="button">
                        <h1 class="text-purple">Technology</span></h1>
                    </button>
                </div>

                <div class="services-title-last servicetitle3">
                    <h5 class="text-white">03</h5>
                    <button class="btnService3" data-active=".a3" type="button" name="button">
                        <h1 class="text-purple">Strategy</span></h1>
                    </button>
                </div>

            </div>

            <div class="services-overview-text">
                <div class="creative-text a1">
                    <h4 class="text-purple"><span>YOU</span> need a<br>Creative Solution?</h4>
                    <p class="services-p">Above the Line, Below the Line or Online, we have the channel-fluid experts on board to devise, create and implement the marketing solution you need to get the results you want.</p>
                    <a class="button button-white" href="services-creative.html">Learn more
                        <img class="arrow" src="img/common/arrow-next.svg" alt="">
                    </a>
                </div>
                <div class="technology-text a2 text-hidden">
                    <h4 class="text-purple">It's a Technological<br>Solution <span>YOU</span> are after?</h4>
                    <p class="services-p">Our fleet of Creative Technologists can investigate, design, build and test anything from websites and apps to ecommerce tools and beyond.</p>
                    <a class="button button-white" href="services-creative.html">Learn more
                        <img class="arrow" src="img/common/arrow-next.svg" alt="">
                    </a>
                </div>
                <div class="strategy-text text-hidden">
                    <h4 class="text-purple">Are <span>YOU</span> looking<br>for a Strategic solution?</h4>
                    <p class="services-p">You’ve come to right place. We’ve got the smarts to undertake everything from a disruptive comms strategy to a complex 'something', and then turn that thinking into testable reality if you need us to. </p>
                    <a class="button button-white" href="services-creative.html">Learn more
                        <img class="arrow" src="img/common/arrow-next.svg" alt="">
                    </a>
                </div>

            </div>
        </div>

        <div class="services-overview-grid">
            <div class="">
                <p class="section-p">think, dream, solve, imagine</p>
            </div>
            <div class="services-overview-links">
                <a class="button button-services button-first" href="#">Case studies
                    <img class="arrow" src="img/common/arrow-next.svg" alt="">
                </a>
                <a class="button button-services button-clients" href="#">Clients
                    <img class="arrow" src="img/common/arrow-next.svg" alt="">
                </a>
            </div>
        </div>

    </div>
</section>
@endsection

@section('script')
<script type="text/javascript" src="scripts/lottie.min.js"></script>
<script type="text/javascript" src="scripts/vendor.js"></script>
<script type="text/javascript" src="scripts/scripts.min.js"></script>
@endsection