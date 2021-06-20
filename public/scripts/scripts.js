'use strict';

agCookie.create('example-cookie', true, 1);

var readValue = agCookie.read('example-cookie');

console.log(readValue);

agCookie.erase('example-cookie');

function markoFunkcija(args) {
    console.log(args);

    return true;
}
'use strict';

console.log('I have entered this file.');
console.log('This is crystal clear evidence that this works.');

var calculation = 200 + 223;

console.log('Sanity Check: 200 + 223 = ' + calculation);
console.log('bye.');
 
/* Icon Animations */

lottie.loadAnimation({
  container: document.getElementById('home-header'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/homepage/homeHeader.json'
});

lottie.loadAnimation({
  container: document.getElementById('logo-section2'),
  renderer: 'svg',
  loop: true,
  autoplay: true,ø
  path: '/img/homepage/logoSection2.json'
});

lottie.loadAnimation({
  container: document.getElementById('services-icon'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/services/icon-services.json'
});

lottie.loadAnimation({
  container: document.getElementById('creative-icon'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/services/icon-creative.json'
});

lottie.loadAnimation({
  container: document.getElementById('technology-icon'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/services/icon-technology.json'
});

lottie.loadAnimation({
  container: document.getElementById('strategy-icon'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/services/icon-strategy.json'
});

lottie.loadAnimation({
  container: document.getElementById('logo-contact'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/homepage/logoSection2.json'
});

lottie.loadAnimation({
  container: document.getElementById('icon-about1'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/about/icon-about1.json'
});

lottie.loadAnimation({
  container: document.getElementById('icon-about2'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/about/icon-about2.json'
});

lottie.loadAnimation({
  container: document.getElementById('icon-about3'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/about/icon-about3.json'
});

lottie.loadAnimation({
  container: document.getElementById('icon-about4'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/img/about/icon-about4.json'
});

/* GSAP */

/* GSAP Background Color */
var colorsleft = ['#6FC7B0', '#31006F', '#F58674', '#1f407d', '#6FC7B0', '#FF75B7'],
    duration = .5,
    gap = 3.5;

var colorsright = ['#1f407d', '#FF75B7', '#003e52', '#FF75B7', '#F58674', '#6FC7B0'];

var tlHome = gsap.timeline({
  repeat: -1,
  repeatDelay: 3.5,
  repeatRefresh: true
});

colorsleft.forEach(function (color, index) {
  tlHome.to('.header-left', {
    duration: .5,
    backgroundColor: color
  }, (duration + gap) * index);
});

colorsright.forEach(function (color, index) {
  tlHome.to('.header-right', {
    duration: .5,
    backgroundColor: color
  }, (duration + gap) * index);
});

/* GSAP Text Slide Up */

var tl = gsap.timeline({ repeat: -1, repeatDelay: 2.5 });
tl.from("#titleHead", { y: 100, duration: 1.5, ease: "power3.out" });

var tlright = gsap.timeline({ repeat: -1, repeatDelay: 2.5 });
tlright.from("#titleHeadright", { y: 100, duration: 1.5, ease: "power3.out" });

var tlsection2 = gsap.timeline({ repeat: -1, repeatDelay: 3 });
tlsection2.from("#audienceTitle", { y: 100, duration: 1, ease: "power3.out" });

/* GSAP Text Animation Left */

gsap.registerPlugin(TextPlugin);

var rotator = document.querySelector('#titleHead > span');
var rotatorright = document.querySelector('#titleHeadright > span');
var rotatorSection2 = document.querySelector('#audienceTitle > span');

gsap.timeline({ repeat: -1, repeatDelay: .5 }).to(rotator, { duration: 0.3, opacity: 1 }).to(rotator, { duration: 0.2, opacity: 0 }, "+=3").to(rotator, {
  text: { value: "Dream", delimiter: " " }
}).to(rotator, { duration: 0.3, opacity: 1 }).to(rotator, { duration: 0.2, opacity: 0 }, "+=3").to(rotator, {
  text: { value: "Think", delimiter: " " }
}).to(rotator, { duration: 0.3, opacity: 1 }).to(rotator, { duration: 0.2, opacity: 0 }, "+=3").to(rotator, {
  text: { value: "Design", delimiter: " " }
}).to(rotator, { duration: 0.3, opacity: 1 }).to(rotator, { duration: 0.2, opacity: 0 }, "+=3").to(rotator, {
  text: { value: "Imagine", delimiter: " " }
}).to(rotator, { duration: 0.3, opacity: 1 }).to(rotator, { duration: 0.2, opacity: 0 }, "+=3").to(rotator, {
  text: { value: "Solve", delimiter: " " }
}).to(rotator, { duration: 0.3, opacity: 1 }).to(rotator, { duration: 0.2, opacity: 0 }, "+=3");

/* GSAP Text Animation Right */

gsap.timeline({ repeat: -1, repeatDelay: .5 }).to(rotatorright, { duration: 0.3, opacity: 1 }).to(rotatorright, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorright, {
  text: { value: "Analyse", delimiter: " " }
}).to(rotatorright, { duration: 0.3, opacity: 1 }).to(rotatorright, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorright, {
  text: { value: "Delight", delimiter: " " }
}).to(rotatorright, { duration: 0.3, opacity: 1 }).to(rotatorright, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorright, {
  text: { value: "Explore", delimiter: " " }
}).to(rotatorright, { duration: 0.3, opacity: 1 }).to(rotatorright, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorright, {
  text: { value: "Build", delimiter: " " }
}).to(rotatorright, { duration: 0.3, opacity: 1 }).to(rotatorright, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorright, {
  text: { value: "Surprise", delimiter: " " }
}).to(rotatorright, { duration: 0.3, opacity: 1 }).to(rotatorright, { duration: 0.2, opacity: 0 }, "+=3");

/* GSAP Text Animation Home - Section 2 */

gsap.timeline({ repeat: -1, repeatDelay: .5 }).to(rotatorSection2, { duration: 0.3, opacity: 1 }).to(rotatorSection2, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorSection2, {
  text: { value: "Campaigns.", delimiter: " " }
}).to(rotatorSection2, { duration: 0.3, opacity: 1 }).to(rotatorSection2, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorSection2, {
  text: { value: "Products.", delimiter: " " }
}).to(rotatorSection2, { duration: 0.3, opacity: 1 }).to(rotatorSection2, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorSection2, {
  text: { value: "People.", delimiter: " " }
}).to(rotatorSection2, { duration: 0.3, opacity: 1 }).to(rotatorSection2, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorSection2, {
  text: { value: "Startups.", delimiter: " " }
}).to(rotatorSection2, { duration: 0.3, opacity: 1 }).to(rotatorSection2, { duration: 0.2, opacity: 0 }, "+=3").to(rotatorSection2, {
  text: { value: "YOU.", delimiter: " " }
}).to(rotatorSection2, { duration: 0.3, opacity: 1 }).to(rotatorSection2, { duration: 0.2, opacity: 0 }, "+=3");

/* GSAP Scroll Trigger */
gsap.registerPlugin(ScrollTrigger);

gsap.timeline().from(".title-scroll", { y: 150, duration: .8, opacity: 0 }, "+=.8").from(".headline-header", { y: 120, duration: .6, opacity: 0 }, "-=.4").from(".header-p", { y: 120, duration: .8, opacity: 0 }, "-=.4").from(".header-p2", { y: 120, duration: .8, opacity: 0 }, "-=.6").from(".header-icon", { x: 120, duration: 1, opacity: 0 }, "-=.6");

gsap.from(".section-title", {
  scrollTrigger: {
    trigger: ".section-title",
    start: "top 70%",
    toggleActions: "restart none none reverse"
  },
  y: 150,
  opacity: 0,
  duration: 1
});

gsap.from(".section-titleB", {
  scrollTrigger: {
    trigger: ".section-titleB",
    start: "top 65%",
    toggleActions: "restart none none reverse"
  },
  y: 150,
  opacity: 0,
  duration: 1
});

gsap.from(".services-grid", {
  scrollTrigger: {
    trigger: ".services-grid",
    start: "top 65%",
    toggleActions: "restart none none reverse"
  },
  y: 120,
  opacity: 0,
  duration: .7
});

gsap.from(".section-title2", {
  scrollTrigger: {
    trigger: ".section-title2",
    start: "top 75%",
    toggleActions: "restart none none reverse"
  },
  y: 150,
  opacity: 0,
  duration: 1
});

gsap.from(".section-scrolltrigger", {
  scrollTrigger: {
    trigger: ".section-scrolltrigger",
    start: "top 75%",
    toggleActions: "restart none none reverse"
  },
  y: 200,
  opacity: 0,
  duration: 1
});

gsap.from(".services-selector", {
  scrollTrigger: {
    trigger: ".services-selector",
    start: "top 80%",
    toggleActions: "restart none none reverse"
  },
  y: 50,
  opacity: 0,
  duration: 1.5
});

gsap.from(".footer", {
  scrollTrigger: {
    trigger: ".footer",
    start: "top 90%",
    toggleActions: "restart none none reverse"
  },
  opacity: 0,
  duration: 1.5
});

/* GSAP Scroll Trigger About Page */

// gsap.from(".about-title1",{
//   scrollTrigger: {
//     trigger: ".about-title1",
//     start: "top 70%",
//     toggleActions: "restart none none reverse"
//   },
//   y: 150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-p1",{
//   scrollTrigger: {
//     trigger: ".about-p1",
//     start: "top 90%",
//     toggleActions: "restart none none reverse"
//   },
//   y: 150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-icon1",{
//   scrollTrigger: {
//     trigger: ".about-icon1",
//     start: "top 68%",
//     toggleActions: "restart none none reverse"
//   },
//   x: -150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-title2",{
//   scrollTrigger: {
//     trigger: ".about-title2",
//     start: "top 60%",
//     toggleActions: "restart none none reverse"
//   },
//   y: 150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-p2",{
//   scrollTrigger: {
//     trigger: ".about-p2",
//     start: "top 88%",
//     toggleActions: "restart none none reverse"
//   },
//   y: 150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-icon2",{
//   scrollTrigger: {
//     trigger: ".about-icon2",
//     start: "top 60%",
//     toggleActions: "restart none none reverse"
//   },
//   x: 150,
//   opacity: 0,
//   duration: 1
// });

// gsap.from(".about-title3",{
//   scrollTrigger: {
//     trigger: ".about-title3",
//     start: "top 70%",
//     toggleActions: "restart none none reverse"
//   },
//   y: 150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-p3",{
//   scrollTrigger: {
//     trigger: ".about-p3",
//     start: "top 93%",
//     toggleActions: "restart none none reverse"
//   },
//   y: 150,
//   opacity: 0,
//   duration: 1
// });
//
// gsap.from(".about-icon3",{
//   scrollTrigger: {
//     trigger: ".about-icon3",
//     start: "top 68%",
//     toggleActions: "restart none none reverse"
//   },
//   x: -150,
//   opacity: 0,
//   duration: 1
// });


/* Morph */

var btn = document.getElementById('btn-click');
var btn2 = document.getElementById('btn2-click');
var sect1 = document.getElementById('sect1');
var sect2 = document.getElementById('sect2');
var overlay = document.getElementById('morph');

var morphing = anime({
  targets: '.morph',
  d: [{ value: 'M0,1082h1920V0c0,0-145,0-488,0c-344,0-598,0-921,0S0,0,0,0V1082z' }],
  easing: 'easeInOutQuint',
  duration: 1300,
  loop: false,
  direction: 'alternate',
  autoplay: false
});

/* Background Colour */

$(window).scroll(function () {

  // selectors
  var $window = $(window),
      $body = $('body'),
      $panel = $('.panel');

  // Change 33% earlier than scroll position so colour is there when you arrive.
  var scroll = $window.scrollTop() + $window.height() / 3;

  $panel.each(function () {
    var $this = $(this);

    // if position is within range of this panel.
    // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
    // Remember we set the scroll to 33% earlier in scroll var.
    if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

      // Remove all classes on body with color-
      $body.removeClass(function (index, css) {
        return (css.match(/(^|\s)color-\S+/g) || []).join(' ');
      });

      // Add class of currently active div
      $body.addClass('color-' + $(this).data('color'));
    }
  });
}).scroll();

/* Services Links Titles */

$(".btnService1").click(function () {
  $(".servicetitle1").addClass("active");
  $(".servicetitle2").removeClass("active");
  $(".servicetitle3").removeClass("active");
  $("body").addClass("color-pink");
  $("body").removeClass("color-orange");
  $("body").removeClass("color-teal");
  $(".creative-text").removeClass("text-hidden");
  $(".technology-text").addClass("text-hidden");
  $(".strategy-text").addClass("text-hidden");
});

$(".btnService2").click(function () {
  var toActive = $(this).attr("data-active");

  $(".servicetitle1").removeClass("active");
  $(".servicetitle2").addClass("active");
  $(".servicetitle3").removeClass("active");
  $("body").removeClass("color-pink");
  $("body").addClass("color-orange");
  $("body").removeClass("color-teal");

  gsap.from("text-active", { y: 150, duration: .8, opacity: 0 });
  $(".creative-text").removeClass("text-active");

  gsap.to(toActive, { y: -150, duration: .8, opacity: 0 });
  $(toActive).addClass("text-active");
});

$(".btnService3").click(function () {
  $(".servicetitle1").removeClass("active");
  $(".servicetitle2").removeClass("active");
  $(".servicetitle3").addClass("active");
  $("body").removeClass("color-pink");
  $("body").removeClass("color-orange");
  $("body").addClass("color-teal");
  $(".creative-text").addClass("text-hidden");
  $(".technology-text").addClass("text-hidden");
  $(".strategy-text").removeClass("text-hidden");
});