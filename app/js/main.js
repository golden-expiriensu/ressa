//-----------------------VARIABLES--------------------------//

const popupOffset = 5,
  popupBackground = $('#popupBackground'),
  showTime = 200;
var currentPopup, currentPopupButton, currentUnfoldingList, currentUnfoldingListButton, currentSelfishUnfoldingList, currentSelfishUnfoldingListButton;


//width of the scrollbar
let div = document.createElement('div');
div.style.overflowY = 'scroll';
div.style.width = '50px';
div.style.height = '50px';
document.body.append(div);
let scrollWidth = div.offsetWidth - div.clientWidth;
div.remove();

//-------------------------------------------------//

//-----------------------SMART FORM--------------------------//

$(function(){
  $("#phoneForm").mask("+7(999) 999-9999");
});

//-----------------------POPUP--------------------------//

function moveBlockAboveBlock(block1, block2, e) {

  block1.css({
    'left': (e.pageX - popupOffset) + 'px'
  });
  block1.css({
    'bottom': ($(window).height() - block2.offset().top) + 'px'
  });
}

function moveBlockBelowBlock(block1, block2) {
  block1.css({
    'right': ($(window).width() - block2.offset().left - block2.width() - ((document.body.offsetHeight > window.innerHeight) ? 0 : scrollWidth)) + 'px'
  });
  block1.css({
    'top': block2.offset().bottom + 'px'
  });
}

var deletePopupWhenMouseOutPopup = function() {
  $('.popup').stop(true, true);
  $('.popup').hide();
}

var deletePopupWhenMouseOutButton = function() {
  currentPopup.stop(true, true);
  currentPopup.hide();
  currentPopup.on('mouseout', deletePopupWhenMouseOutPopup);
  currentPopup.on('mouseover', function() {
    currentPopup.show();
  });
}

function findCurrentPopupByItButton(button) {
  currentPopupButton = button;
  currentPopupButton.addClass('currentPopupButton');
  currentPopup = $('.currentPopupButton + .popup');
  currentPopupButton.removeClass('currentPopupButton');
}

function clickPopup(currentPopup) {

  popupBackground.show();
  popupBackground.on('click', function() {
    currentPopup.hide(showTime);
    popupBackground.hide();
  });
}

function activateHoverPopup() {
  var popupButtons = $('.popupButton');
  for (let i = 0; i < popupButtons.length; i++) {
    currentPopupButton = popupButtons.eq(i);
    // mouse over
    currentPopupButton.on('mouseover', function(e) {

      findCurrentPopupByItButton(popupButtons.eq(i));

      moveBlockAboveBlock(currentPopup, currentPopupButton, e);

      $('.popup').stop(true, true);
      $('.popup').hide();
      currentPopup.show(showTime);

      currentPopupButton.on('mouseout', deletePopupWhenMouseOutButton);
    });
    //mouse click
    currentPopupButton.on('click', function() {

      currentPopupButton.off('mouseout', deletePopupWhenMouseOutButton);
      currentPopup.off('mouseout', deletePopupWhenMouseOutPopup);

      clickPopup(currentPopup);
    });
  }
}

function activateButtonPopup() {
  var popupButtons = $('.buttonPopupButton');
  for (let i = 0; i < popupButtons.length; i++) {
    currentPopupButton = popupButtons.eq(i);

    currentPopupButton.on('click', function() {

      findCurrentPopupByItButton(popupButtons.eq(i));
      moveBlockBelowBlock(currentPopup, currentPopupButton);

      currentPopup.slideDown();

      clickPopup(currentPopup);
    });
  };
}


activateHoverPopup();
activateButtonPopup();

//-----------------------UNFOLDING LIST--------------------------//

function findCurrentUnfoldingListByItButton() {
  currentUnfoldingListButton.addClass('currentUnfoldingListButton');
  currentUnfoldingList = $('.currentUnfoldingListButton + .unfoldingList');
  currentUnfoldingListButton.removeClass('currentUnfoldingListButton');
}

function activateUnfoldingList() {
  var unfoldingListButtons = $('.unfoldingListButton');
  for (let i = 0; i < unfoldingListButtons.length; i++) {
    currentUnfoldingListButton = unfoldingListButtons.eq(i);

    currentUnfoldingListButton.on('click', function() {

      currentUnfoldingListButton = unfoldingListButtons.eq(i);
      findCurrentUnfoldingListByItButton();

      if(currentUnfoldingList.is(":visible")){
        currentUnfoldingList.slideUp();
      }else{
        currentUnfoldingList.slideDown();
      }
    });
  }
}

activateUnfoldingList();

//-----------------------SELFISH UNFOLDING LIST--------------------------//

function findCurrentSelfishUnfoldingListByItButton() {
  currentSelfishUnfoldingListButton.addClass('currentSelfishUnfoldingListButton');
  currentSelfishUnfoldingList = $('.currentSelfishUnfoldingListButton + .selfishUnfoldingList');
  currentSelfishUnfoldingListButton.removeClass('currentSelfishUnfoldingListButton');
}

function activateSelfishUnfoldingList() {
  var unfoldingListButtons = $('.selfishUnfoldingListButton');
  for (let i = 0; i < unfoldingListButtons.length; i++) {
    currentSelfishUnfoldingListButton = unfoldingListButtons.eq(i);

    currentSelfishUnfoldingListButton.on('click', function() {

      currentSelfishUnfoldingListButton = unfoldingListButtons.eq(i);
      findCurrentSelfishUnfoldingListByItButton();
      hideSelfishUnfoldingListsExceptCurrent(currentSelfishUnfoldingList);

      if(currentSelfishUnfoldingList.is(":visible")){
        currentSelfishUnfoldingList.slideUp();
      }else{
        currentSelfishUnfoldingList.slideDown();
      }
    });
  }
}

function hideSelfishUnfoldingListsExceptCurrent(currentSelfishUnfoldingList){
  var selfishUnfoldingLists = $(".selfishUnfoldingList");
  for (let i = 0; i < selfishUnfoldingLists.length; i++) {
      if(!currentSelfishUnfoldingList.closest(selfishUnfoldingLists.eq(i)).length){
        selfishUnfoldingLists.eq(i).slideUp();
      }
    }
}

activateSelfishUnfoldingList();

//-----------------------AUTOSCROLL--------------------------//

var scrollSpeed = 0.0025;
const scrollSpeedStep = 0.005;
var duration;

function scroll_plus(){
  scrollSpeed += scrollSpeedStep;
  scroll_resume();
}

function scroll_minus(){
	scrollSpeed -= scrollSpeedStep;
  if(scrollSpeed <= 0)
    scrollSpeed = 0.0025;
  scroll_resume();
}

function scroll_resume() {
  var currentHeight = $(document).height() - window.scrollY;
  duration = currentHeight / scrollSpeed

  scroll_stop();
  scroll_minimize();

  scroll();
}
function scroll_stop(){
  $("#autoscroll").removeClass("stickUp")

  $(".startButton").removeClass("disabled");
  $(".stopButton").addClass("disabled");

  $('html, body').stop();
}
function scroll(){
  $("#autoscroll").addClass("stickUp")

  $(".startButton").addClass("disabled");
  $(".stopButton").removeClass("disabled");

  animateScroll();
}
function animateScroll(){
  $('html, body').animate({
    scrollTop: $("footer").offset().top
  }, {
    duration: duration,
    easing: "linear"
  });
}


function scroll_minimize(){
  $("#maxScroll").addClass("disabled");
  $("#minScroll").removeClass("disabled");
}
function scroll_maximize(){
  $("#maxScroll").removeClass("disabled");
  $("#minScroll").addClass("disabled");
}
