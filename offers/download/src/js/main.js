document.addEventListener('DOMContentLoaded', function () {
  //svg 
  document.getElementById('svg-icons').innerHTML = SVG_SPRITE;
  //end svg

  // scroll on nav 
  var scrollpos = window.scrollY;
  var header = document.querySelector("nav");
  // var header_height = header.offsetHeight;

  window.addEventListener('scroll', function() { 
    scrollpos = window.scrollY;

    if (scrollpos >= 400) {
      header.classList.add("nav--top");
    }
    else {
      header.classList.remove("nav--top");
    }
  });

  var modaltoggle = $('.js--modaltoggle');
  var modal = $('.js--modal');
  var modalclose = $('.js--modal-close')
  var body = $('body');

  modaltoggle.on('click', function(){
    modal.removeClass('d-none');
    body.addClass('fixed');

    setTimeout(function () {
      modal.addClass('is-open');
    }, 200);
  });

  modalclose.on('click', function(){
    modal.removeClass('is-open');
    body.removeClass('fixed');

    setTimeout(function () {
      modal.addClass('d-none');
    }, 200);
  });


  var btnpop = $('.btn--popup');

  function wReady() {
    setTimeout(function () {
      btnpop.addClass('show');
    }, 500);

  }
  window.onload = wReady;

  // end scroll on nav


}, false);

