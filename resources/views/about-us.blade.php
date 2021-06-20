@extends('layouts.app')

@section('content')
    <div class="logo-icon-home"></div>
    <!-- Section 1 -->
    <div class="panel section section-about" data-color="teal">
		<button id="btn-click">
			<a class="scroll-arrow __white"></a>
		</button>

		<div class="container-page">
			<div class="text-left text-left-about-header">
				<h1 class="headline-header text-purple">A bit<br>about <span>us...</span></h1>
				<p class="header-p section-p">We realised that the best way to help our clients succeed was to combine the power of brilliant creative, technological and strategic thinking.</p>
			</div>

			<div class="header-icon header-icon-about" id="icon-about1"></div>
		</div>
	</div>

	<!-- Section 2 -->
	<div class="panel section section-about" data-color="purple">
		<div class="container-page">
			<div class="about-icon about-icon1" id="icon-about2"></div>

			<div class="text-left text-left-about">
				<h1 class="section-headline about-title1">and what<br>we can<br>do for <span>YOU.</span></h1>
				<p class="section-p about-p1">We became Tonic, a solutions-based agency equally at home creating fully-integrated campaigns or building beautiful websites, intuitive systems and ingenious apps.</p>
			</div>
		</div>
	</div>

	<!-- Section 3 -->
	<div class="panel section section-about" data-color="pink">
		<div class="container-page">
			<div class="text-left text-left-about">
				<h1 class="section-headline about-title2 text-purple">Why<br>add Tonic<br>to <span>Your</span><br>Business?</h1>
				<p class="section-p about-p2">We believe in collaborating, exploring and getting our hands dirty to unearth the right solution to solve your business challenge.</p>
			</div>

			<div class="about-icon about-icon2" id="icon-about3"></div>
		</div>
	</div>

	<!-- Section 4 -->
	<div class="panel section section-about" data-color="navy">
		<div class="container-page">
			<div class="about-icon about-icon3" id="icon-about4"></div>

			<div class="text-left text-left-about">
				<h1 class="section-headline about-title3 lh-h1 text-orange">We<br>always<br>put <span>YOU</span><br>first.</h1>
				<p class="section-p about-p3">We’ll work with you to discover the nugget that we can transform into gold, and the many different ways we can use that gold to make you shine.</p>
			</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scrollbtns.js') }}"></script>
@endsection