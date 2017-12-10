/* demo code */
// pure JS

var element = document.getElementById('mySwipe'),
    prevBtn = document.getElementById('prev'),
    nextBtn = document.getElementById('next');

window.mySwipe = new Swipe(element, {
  startSlide: 0,
  auto: 3000,
  draggable: true,
  autoRestart: false,
  continuous: true,
  disableScroll: true,
  stopPropagation: true,
  callback: function(index, element) {},
  transitionEnd: function(index, element) {}
});

//JQuery
//window.mySwipe = $('#mySwipe').Swipe().data('Swipe');

prevBtn.onclick = mySwipe.prev;
nextBtn.onclick = mySwipe.next;

/* my custom changes */
var enableBtn = document.getElementById('enable'),
    disableBtn = document.getElementById('disable');

    enableBtn.onclick = mySwipe.enable;
    disableBtn.onclick = mySwipe.disable;

// fun with colors
$('#prev').click(function() {
  $('#mySwipe b').removeClass('pink');
  $('#mySwipe b').removeClass('grey');
  $('#mySwipe b').addClass('green');
  //console.log("Changed " + $('#mySwipe b').is('green'));
});

$('#next').click(function() {
  $('#mySwipe b').removeClass('green');
  $('#mySwipe b').removeClass('grey');
  $('#mySwipe b').addClass('pink');
  //console.log("Changed " + $('#mySwipe b').is('pink'));
});

$('#enable').click(function() {
  $('#mySwipe b').removeClass('pink');
  $('#mySwipe b').removeClass('green');
  $('#mySwipe b').removeClass('grey');
  //console.log("Changed " + $('#mySwipe b').is('green'));
});

$('#disable').click(function() {
  $('#mySwipe b').removeClass('pink');
  $('#mySwipe b').removeClass('green');
  $('#mySwipe b').addClass('grey');
  //console.log("Changed " + $('#mySwipe b').is('green'));
});
