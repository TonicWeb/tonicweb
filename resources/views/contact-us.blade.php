@extends('layouts.app')

@section('content')
    <div class="logo-icon-home"></div>
    <section class="panel section contact-section" data-color="orange">

		<button id="btn-click">
			<img class="scroll-arrow" src="img/common/arrow-down.svg" alt="">
		</button>

		<div class="section-contact">

			<div class="container-contact contact-panel1">
				<div class="header-icon">
					<div id="logo-contact"> </div>
				</div>
				<div class="">
					<h1 class="headline-header headline-contact text-purple">Say <span>hello</span></h1>
					<p class="header-p section-p">Drop us an email of give us a call to see how we can help <span class="text-purple">YOU</span> and your business.</p>
				</div>

			</div>

			<div class="container-contact contact-panel2">
				<!-- Contact Details Panel-->
				<div class="header-p2 contact-details">
					<!-- Business details -->
					<div>
						<div class="contact-text">
							<p class="contact-margin-r">T.</p>
							<p class="">1300 974 864</p>
						</div>

						<div class="contact-text contact-margin-b">
							<p class="contact-margin-r">E.</p>
							<a href="#" target="_blank">info@tonic.com.au</a>
						</div>

						<div class="contact-margin-b">
							<p class="">Level 1</p>
							<p class="">183 Harris Street</p>
							<p class="">Pyrmont NSW 2009</p>
						</div>
					</div>
					<!-- Social details -->
					<div>
						<ul>
							<li><a href="#" target="_blank">Facebook</a></li>
							<li><a href="#" target="_blank">LinkedIn</a></li>
							<li><a href="#" target="_blank">Instagram</a></li>
							<li><a href="#" target="_blank">Twitter</a></li>
						</ul>
					</div>

				</div>
				<!-- Form Panel-->
				<div class="contact-form">

					<!-- Form -->
					<form class="contactForm header-p">
						<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name*" tabindex="1" required>
						</div>
						<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email*" tabindex="2" required>
						</div>
						<div class="form-group" id="text-area">
								<textarea rows="20" cols="50" name="message" class="form-control" id="message" placeholder="Message*" tabindex="3" required></textarea>
						</div>
						<a class="button button-white" href="">Submit
							<img class="arrow" src="img/common/arrow-next.svg" alt="">
						</a>
					</form>
				</div>
			</div>
		</div>


	</section>
    <section class="panel section section-map" data-color="orange">
		<!--The div element for the map -->
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=183%20Harris%20Street,%20Pyrmont,%20sydney%20&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			<a href="https://yt2.org/youtube-to-mp3-ALeKk00qEW0sxByTDSpzaRvl8WxdMAeMytQ1611842368056QMMlSYKLwAsWUsAfLipqwCA2ahUKEwiikKDe5L7uAhVFCuwKHUuFBoYQ8tMDegUAQCSAQCYAQCqAQdnd3Mtd2l6"></a><br>
		</div>
	</div>
	</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scrollbtns.js') }}"></script>
@endsection