document.addEventListener('DOMContentLoaded', function () {
  //svg 
  document.getElementById('svg-icons').innerHTML = SVG_SPRITE;
  //end svg

  // scroll on nav 
  var scrollpos = window.scrollY;
  var header = document.querySelector("nav");
  var header_height = header.offsetHeight;

  window.addEventListener('scroll', function() { 
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) {
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

  })

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

