document.addEventListener('DOMContentLoaded', function () {
  //svg 
  document.getElementById('svg-icons').innerHTML = SVG_SPRITE;
  //end svg

  // scroll on nav 
  var scrollpos = window.scrollY;
  var header = document.querySelector("nav");
  var header_height = header.offsetHeight;

  var headerBtn = document.getElementById('navBtn');

  function scrollFunc() {
    if (scrollpos >= 50) {
      header.classList.add("bg-color");
      headerBtn.classList.remove('btn--secondary');
      headerBtn.classList.add('btn--primary');
    }
    else {
      header.classList.remove("bg-color");
      headerBtn.classList.add('btn--secondary');
      headerBtn.classList.remove('btn--primary');
    }
  }

  window.addEventListener('scroll', function() { 
    scrollpos = window.scrollY;

    scrollFunc();

  })

  // end scroll on nav



  var modal = document.querySelector('.modal');

  function wReady() {
    setTimeout(function () {
      modal.classList.add('active');
    }, 14000);

    scrollFunc();
  }
  window.onload = wReady;

  //modal start here

  var modalClose = document.querySelector('.modal__close');
  var modalBackDrop = document.querySelector('.modal__backdrop');

  modalClose.addEventListener('click', function(){
    modal.classList.remove('active');
  });

  modalBackDrop.addEventListener('click', function(){
    modal.classList.remove('active');
  });


}, false);

