document.addEventListener('DOMContentLoaded', function () {
  //svg 
  document.getElementById('svg-icons').innerHTML = SVG_SPRITE;
  //end svg
 
  // submenu
  var els = document.querySelectorAll('.js--submenu-toggle');
  [].forEach.call(els, function(el, i, els) {
      el.addEventListener('click', function() {
          [].forEach.call(els, function(el) {
              if(el !== this) {
                el.classList.remove('is-open');
              }else {
                el.classList.toggle('is-open');
              }
              
          }, this);
      });

      //click outside sub-menus
      document.addEventListener('click', function(event) {
        var isClickInside = el.contains(event.target);
        if (!isClickInside) {
          el.classList.remove('is-open');
        }
      });
  });
  // end submenu
  
  // main menu
  var mainMenu = document.querySelector('.js--menu-toggle');
  var mainWrap = document.querySelector('.main');
  var navBarWrap = document.querySelector('.js--navbar-wrap');

  if(document.body.contains(document.getElementById('menu-toggle'))){

    mainMenu.addEventListener('click', function (event) {
      mainMenu.classList.toggle('is-open');
      navBarWrap.classList.toggle('is-open');
      mainWrap.classList.toggle('fixed');
    });
  }
  //end main menu

  //ip checker
  if(document.body.contains(document.getElementById('ipChecker'))){
    var s = document.getElementById('ipChecker').style;
    s.opacity = 1;
    document.getElementById('ipCheckerClose').addEventListener('click', function () {
      (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
    });
  }
  //end ip checker

  // prevent pasting into inputs 
  var inputs, index;
  inputs = document.getElementsByTagName('input');
  for (index = 0; index < inputs.length; ++index) {
      inputs[index].addEventListener('paste', function (event) {
        event.preventDefault();
    });
  }
  // end prevent pasting into inputs

  //accordion checkbox 
  var accRadio = document.querySelectorAll('.accordion__radio-toggler');
  [].forEach.call(accRadio, function(el, i, accRadio) {
      el.addEventListener('click', function() {
          [].forEach.call(accRadio, function(el) {
              if(el !== this) {
                el.checked = false; 
              }
              
          }, this);
      });
  });
  //end accordion checkbox

  function wReady() {
    // header hero animation
    setTimeout(function () {
      var heroApp = document.querySelector('.hero__app');

      if(document.body.contains(document.getElementById('heroAppWrap'))){
        heroApp.classList.remove('hidden');
        heroApp.classList.toggle('show')
      }
    }, 500);
    //and hero animation
  }
  window.onload = wReady;

    // show password
    if(document.body.contains(document.getElementById('togglePassword'))){
      var password = document.querySelector('.password');
        var toggler = document.getElementById('togglePassword');

        toggler.addEventListener('click', function () {
          if (password.type == 'password') {
            password.setAttribute('type', 'text');
            toggler.classList.toggle('show');
          } else {
            toggler.classList.toggle('show');
            password.setAttribute('type', 'password');
          }
      });
    }
    // end show password

}, false);

