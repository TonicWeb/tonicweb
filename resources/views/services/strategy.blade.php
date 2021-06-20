@extends('layouts.app')

@section('content')
<div class="logo-icon-home"></div>
<section class="panel section section-services" data-color="teal">
    <button id="btn-click">
        <a class="scroll-arrow __white"></a>
    </button>

    <div class="container-page">
        <div class="text-left">
            <h5 class="services-title title-scroll text-purple">Services</h5>
            <h1 class="services-header headline-header text-purple"><span>Strategy</span></h1>
            <p class="header-p section-p services-p">Insights gleaned from hours of obsessing and years of experience form the foundation upon which brilliant solutions can come to life.</p>
            <p class="header-p section-p">analyse, deep-dive, test, challenge, astonish</p>
        </div>
        <!-- Icon Animation -->
        <div class="header-icon" id="strategy-icon"></div>

    </div>
</section>
<!-- Section 2 -->
<section class="panel section section-sml" data-color="grey">
    <div class="container-grid">
        <div class="title-panel title-2lines">
            <h2 class="section-title text-purple">What we</h2>
			<h2 class="section-titleB text-purple">can offer <span class="text-teal">YOU.</span></h2>
        </div>
        <div class="services-grid">
            <div class="services-grid-item">
                <h6>Branding</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Campaign Strategy</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Direct Mail</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Concept Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>UX/UI</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Art Direction</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Social Media</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Tone Of Voice</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Copywriting</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Web Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Digital</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Concept Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Campaign Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Content</h6>
                <h6>+</h6>
            </div>

        </div>
    </div>
</section>
<!-- Section 3 -->
<section class="panel section section-projects" data-color="purple">
    <div class="container-grid">
        <div class="section-title2 title-panel">
            <div>
                <h5 class="services-title text-teal">Strategy</h5>
				<h2 class="text-white">Projects</span></h2>
            </div>

                <a class="button" href="">View all
                    <img class="arrow" src="img/common/arrow-next.svg" alt="">
                </a>
        </div>
        <div class="section-scrolltrigger">
            <div class=" services-grid">

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/Zodiac_600x600_thumbnail.jpg" alt="">
                        <h4 class="card-title">Project Name Here</h4>
                        <h5 class="card-client">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/Zodiac_600x600_thumbnail.jpg" alt="">
                        <h4 class="card-title">Project Name Here</h4>
                        <h5 class="card-client">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

                <div class="grid-card grid-card-3">
                    <div class="card ">
                        <img src="/img/work/Zodiac_600x600_thumbnail.jpg" alt="">
                        <h4 class="card-title text-pink">Project Name Here</h4>
                        <h5 class="card-client text-pink">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Section 4 -->
<section class="section services-selector">
    <div class="services-selector-card selector-left">
        <h3>Technology</h3>
    </div>
    <div class="services-selector-card selector-right">
        <h3>Strategy</h3>
    </div>

</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.min.js') }}"></script>
@endsection