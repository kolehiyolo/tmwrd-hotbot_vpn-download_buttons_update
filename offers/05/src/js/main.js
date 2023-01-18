document.addEventListener('DOMContentLoaded', function () {
  //svg 
  document.getElementById('svg-icons').innerHTML = SVG_SPRITE;
  //end svg

  // scroll on nav 
  var scrollpos = window.scrollY;
  var header = document.querySelector("nav");
  var header_height = header.offsetHeight;

  function scrollFunc() {
    if (scrollpos >= 50) {
      header.classList.add("bg-color");
    }
    else {
      header.classList.remove("bg-color");
    }


    if (scrollpos >= 500) {
      header.classList.add("show-menu");
    }

    else {
      header.classList.remove("show-menu");
    }
  }

  window.addEventListener('scroll', function() { 
    scrollpos = window.scrollY;
    scrollFunc();
  });

  function wReady() {
    scrollFunc();
  }
  window.onload = wReady;


  var menuHover = document.getElementById("langMenu");
  var menuToggle = document.getElementById("menuToggle");

  menuHover.addEventListener("mouseover", function() {   
    // highlight the mouseenter target
    menuToggle.classList.add('hover');
  }, false);

  menuHover.addEventListener("mouseleave", function() {   
    // highlight the mouseenter target
    menuToggle.classList.remove('hover');
  }, false);


  // end scroll on nav

  // click outside menu language
  window.addEventListener('click', function(e){   
    if (document.getElementById('toggleDropdownMenu').contains(e.target)){
    } else{
      document.getElementById("toggleDropdownMenu").checked = false;
    }
  });

  // end click outside menu language


}, false);

