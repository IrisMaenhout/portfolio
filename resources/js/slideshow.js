const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let slideIndex = 1;
let slideIndexProcess = 1;
showSlides(slideIndex);
showProcessSlides(slideIndexProcess);

next.addEventListener('click', ()=>{
    plusSlides(1);
});
prev.addEventListener('click', ()=>{
    plusSlides(-1)
});

nextBtn.addEventListener('click', ()=>{
    plusSlidesProcess(1);
});
prevBtn.addEventListener('click', ()=>{
    plusSlidesProcess(-1)
});

// __________________________________________________________________________________

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}


// __________________________________________________________________________________

// Next/previous controls
function plusSlidesProcess(n) {
    showProcessSlides(slideIndexProcess += n);
}

// Thumbnail image controls
function currentSlideProcess(n) {
    showProcessSlides(slideIndexProcess = n);
}

function showProcessSlides(n) {
  let i;
  let slidesProcess = document.getElementsByClassName("process-slides");
  if (n > slidesProcess.length) {slideIndexProcess = 1}
  if (n < 1) {slideIndexProcess = slidesProcess.length}
  for (i = 0; i < slidesProcess.length; i++) {
    slidesProcess[i].style.display = "none";
  }

  slidesProcess[slideIndexProcess-1].style.display = "block";
}


