@extends('layouts.app')

@section('content')
    <div class="logo-icon-home"></div>
    <section id="sect1" class="home-section-1">
        <button id="btn-click">
            <a class="scroll-arrow __white"></a>
        </button>
        <div id="left" class="header-left">
            <h3 id="titleHead"><span>Craft</span></h3>
        </div>
        <div class="header-right">
            <h3 id="titleHeadright"><span>Invent</span></h3>
        </div>
        <div id="home-header"> </div>
    </section>
    <section id="sect2">

		<button id="btn2-click">
			<img class="scroll-arrow arrow-up" src="img/common/arrow-down.svg" alt="">
		</button>

		<!-- Panel 1 -->
		<div class="panel home-section-2" data-color="purple">
			<div class="container">
				<div class="home-about-icon">
					<div id="logo-section2"> </div>
				</div>
				<h1>Creating intelligent solutions for</h1>
				<div class="audience-title">
					<h1 id="audienceTitle"><span>Brands.</span></h1>
				</div>
				<p class="block-quote">There is no ‘one-size-fits-all’ way to grow a business. We work collaboratively with you to create unique solutions for your business – using our hand-picked team of Creative, Technological and Strategic thinkers.</p>
			</div>
		</div>

		<!-- Panel 2 -->
		<div class="panel home-section-3" data-color="pink">
		  <div class="container" id="headline">
		    <h2 class="headline"><span>Who</span> <br> we work with.</h2>
		    <div class="grid">
		      <img class="grid-item" src="img/common/clients/logo1.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo2.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo3.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo4.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo5.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo6.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo7.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo8.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo9.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo10.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo11.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo12.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo13.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo14.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo15.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo16.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo17.svg" alt="">
		      <img class="grid-item" src="img/common/clients/logo18.svg" alt="">
		    </div>
		  </div>
		</div>

		<!-- Footer -->
		@include('partials.footer')

	</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scrollbtns.js') }}"></script>
@endsection