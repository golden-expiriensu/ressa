//-----------------------VARIABLES--------------------------//

const popupOffset = 5,
  popupBackground = $('#popupBackground'),
  showTime = 150;
var currentPopup, currentPopupButton, currentUnfoldingList, currentUnfoldingListButton;


//width of the scrollbar
let div = document.createElement('div');
div.style.overflowY = 'scroll';
div.style.width = '50px';
div.style.height = '50px';
document.body.append(div);
let scrollWidth = div.offsetWidth - div.clientWidth;
div.remove();

//-----------------------POPUP--------------------------//

function moveBlockAboveBlock(block1, block2, e) {

  block1.css({
    'left': (e.pageX - popupOffset) + 'px'
  });
  block1.css({
    'bottom': (window.innerHeight - block2.offset().top) + 'px'
  });
}

function moveBlockBelowBlock(block1, block2) {
  block1.css({
    'right': (window.innerWidth - block2.offset().left - block2.width() - ((document.body.offsetHeight > window.innerHeight) ? scrollWidth : 0)) + 'px'
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
