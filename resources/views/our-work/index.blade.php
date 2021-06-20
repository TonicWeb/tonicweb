@extends('layouts.app')

@section('content')
<section class="work">
    <div class="grid-container">
        <h2>Our <span>Work.</span></h2>
        <div class="work-grid">

            <div class="grid-card card1">
                <div class="card">
                    <img src="/img/work/Zodiac_600x600_thumbnail.jpg" alt="">
                    <h4 class="card-title">#LGLocalLegends</h4>
                    <h5 class="card-client">LG Electronics</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card2">
                <div class="card">
                    <img src="/img/work/thumbnail_NickKyrios.jpg" alt="">
                    <h4 class="card-title">Website Redesign & Development</h4>
                    <h5 class="card-client">Rhino Racks</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card3">
                <div class="card">
                    <img src="/img/work/LG_Sapience_thumbnail.jpg" alt="">
                    <h4 class="card-title">Chromebook Campaign</h4>
                    <h5 class="card-client">Lenovo</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card1">
                <div class="card">
                    <img src="/img/work/C1_Vfair_Case_Thumbnail.jpg" alt="">
                    <h4 class="card-title">Project Name Here</h4>
                    <h5 class="card-client">Lenovo</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card2">
                <div class="card">
                    <img src="/img/work/PrimeLaw_460x460_thumbnail.jpg" alt="">
                    <h4 class="card-title">Project Name Here</h4>
                    <h5 class="card-client">VanEck</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card3">
                <div class="card">
                    <img src="/img/work/freestyler_thumb.jpg" alt="">
                    <h4 class="card-title">Freestyler Campaign</h4>
                    <h5 class="card-client">LG Electronics</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card1">
                <div class="card">
                    <img src="/img/work/LG_Sapience_thumbnail.jpg" alt="">
                    <h4 class="card-title">Project Name Here</h4>
                    <h5 class="card-client">LG Electronics</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card2">
                <div class="card">
                    <img src="/img/work/Zodiac_600x600_thumbnail.jpg" alt="">
                    <h4 class="card-title">Smart Pool Pump Campaign</h4>
                    <h5 class="card-client">Zodiac</h5>
                    <div class="border"></div>
                </div>
            </div>

            <div class="grid-card card3">
                <div class="card">
                    <img src="/img/work/thumbnail_NickKyrios.jpg" alt="">
                    <h4 class="card-title">Rebrand & Foundation Launch</h4>
                    <h5 class="card-client">Nick Kyrios</h5>
                    <div class="border"></div>
                </div>
            </div>

        </div>
    </div>

</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.min.js') }}"></script>
@endsection