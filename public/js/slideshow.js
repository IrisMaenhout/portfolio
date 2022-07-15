/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/slideshow.js ***!
  \***********************************/
var prev = document.querySelector('.prev');
var next = document.querySelector('.next');
var prevBtn = document.querySelector('.prev-btn');
var nextBtn = document.querySelector('.next-btn');
var slideIndex = 1;
var slideIndexProcess = 1;
showSlides(slideIndex);
showProcessSlides(slideIndexProcess);
next.addEventListener('click', function () {
  plusSlides(1);
});
prev.addEventListener('click', function () {
  plusSlides(-1);
});
nextBtn.addEventListener('click', function () {
  plusSlidesProcess(1);
});
prevBtn.addEventListener('click', function () {
  plusSlidesProcess(-1);
}); // __________________________________________________________________________________
// Next/previous controls

function plusSlides(n) {
  showSlides(slideIndex += n);
} // Thumbnail image controls


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
} // __________________________________________________________________________________
// Next/previous controls


function plusSlidesProcess(n) {
  showProcessSlides(slideIndexProcess += n);
} // Thumbnail image controls


function currentSlideProcess(n) {
  showProcessSlides(slideIndexProcess = n);
}

function showProcessSlides(n) {
  var i;
  var slidesProcess = document.getElementsByClassName("process-slides");

  if (n > slidesProcess.length) {
    slideIndexProcess = 1;
  }

  if (n < 1) {
    slideIndexProcess = slidesProcess.length;
  }

  for (i = 0; i < slidesProcess.length; i++) {
    slidesProcess[i].style.display = "none";
  }

  slidesProcess[slideIndexProcess - 1].style.display = "block";
}
/******/ })()
;