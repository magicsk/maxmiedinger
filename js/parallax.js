// ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = (/Firefox/i.test(navigator.userAgent));
var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
var isMobile = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var scrollSensitivitySetting = 50; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;

// ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
if (isMobile) {

} else {
function parallaxScroll(evt) {
  if (isMobile) {
    delta = ("0");
  } else if (isFirefox) {
    //Set delta for Firefox
    delta = evt.detail * (-120);
  } else if (isIe) {
    //Set delta for IE
    delta = -evt.deltaY;
  } else {
    //Set delta for all other browsers
    delta = evt.wheelDelta;
  }

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting ) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
        arrowup()
        arrowdown()
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      arrowup()
      arrowdown()
      slideDurationTimeout(slideDurationSetting);
    }
  }
}
}


// ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

// ------------- ADD EVENT LISTENER ------------- //

if(isMobile) {

}else
{
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);
}

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll").addClass("down-scroll");
}

function previousItem() {
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
}

function next(){
  if (currentSlideNumber !== totalSlideNumber - 1) {
  currentSlideNumber++;
  nextItem();
  arrowup()
  arrowdown()
  }
slideDurationTimeout(slideDurationSetting);
}

function previous() {
  if (currentSlideNumber !== 0) {
  currentSlideNumber--;
}
previousItem();
arrowup()
arrowdown()
slideDurationTimeout(slideDurationSetting);
}

function arrowup(){
if (currentSlideNumber == 0) {
  document.getElementById("dot1").style.opacity = "0";
  } else if (currentSlideNumber !== 0) {
    document.getElementById("dot1").style.opacity = "1";
  }
}
function arrowdown(){
if (currentSlideNumber == 3) {
    document.getElementById("dot2").style.opacity = "0";
  } else if (currentSlideNumber !== 3) {
    document.getElementById("dot2").style.opacity = "1";
  }
}

window.onload = function first(){
  if (currentSlideNumber == 0) {
    document.getElementById("dot1").style.opacity = "0";
  }
}
