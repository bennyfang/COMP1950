// On scroll or resize, check nav position from bottom of window. If that reaches 27% of the window give additional css class that change nav property to fixed position
// else if nav reaches top of the main text body remove this class to make it back to relative

function navDynamicPos() {
  var heightFromBottom = $(window).height() - $('#main-side-nav')[0].getBoundingClientRect().bottom;
  var condHeight = $(window).height() * 0.27;
  var sideNavHeightFromTop = $('#main-side-nav').offset().top;
  var mainHeightFromTop = $('#main').offset().top;
  if (!($('#main-side-nav').is('.main-side-nav-wrapper-fixed')) && heightFromBottom >= condHeight) {
    $('#main-side-nav').addClass('main-side-nav-wrapper-fixed');
  }
  else if ($('#main-side-nav').is('.main-side-nav-wrapper-fixed') && sideNavHeightFromTop < mainHeightFromTop) {
    $('#main-side-nav').removeClass('main-side-nav-wrapper-fixed')
  }

  console.log("heightFromBottom: " + condHeight + " condHeight: " + heightFromBottom);
  console.log("sideNavHeightFromTop: " + sideNavHeightFromTop + " mainHeightFromTop: " + mainHeightFromTop);
}

$( window ).scroll(navDynamicPos);
$( window ).resize(navDynamicPos);
