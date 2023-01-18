// Importing other js files
!function(e){"function"==typeof define&&define.amd?define(e):"object"==typeof exports?module.exports=e():e()}(function(){var a="undefined"!=typeof window?window:this,e=a.Glider=function(e,t){var o=this;if(e._glider)return e._glider;if(o.ele=e,o.ele.classList.add("glider"),(o.ele._glider=o).opt=Object.assign({},{slidesToScroll:1,slidesToShow:1,resizeLock:!0,duration:.5,easing:function(e,t,o,i,r){return i*(t/=r)*t+o}},t),o.animate_id=o.page=o.slide=0,o.arrows={},o._opt=o.opt,o.opt.skipTrack)o.track=o.ele.children[0];else for(o.track=document.createElement("div"),o.ele.appendChild(o.track);1!==o.ele.children.length;)o.track.appendChild(o.ele.children[0]);o.track.classList.add("glider-track"),o.init(),o.resize=o.init.bind(o,!0),o.event(o.ele,"add",{scroll:o.updateControls.bind(o)}),o.event(a,"add",{resize:o.resize})},t=e.prototype;return t.init=function(e,t){var o=this,i=0,r=0;o.slides=o.track.children,[].forEach.call(o.slides,function(e,t){e.classList.add("glider-slide"),e.setAttribute("data-gslide",t)}),o.containerWidth=o.ele.clientWidth;var s=o.settingsBreakpoint();if(t||(t=s),"auto"===o.opt.slidesToShow||void 0!==o.opt._autoSlide){var l=o.containerWidth/o.opt.itemWidth;o.opt._autoSlide=o.opt.slidesToShow=o.opt.exactWidth?l:Math.max(1,Math.floor(l))}"auto"===o.opt.slidesToScroll&&(o.opt.slidesToScroll=Math.floor(o.opt.slidesToShow)),o.itemWidth=o.opt.exactWidth?o.opt.itemWidth:o.containerWidth/o.opt.slidesToShow,[].forEach.call(o.slides,function(e){e.style.height="auto",e.style.width=o.itemWidth+"px",i+=o.itemWidth,r=Math.max(e.offsetHeight,r)}),o.track.style.width=i+"px",o.trackWidth=i,o.isDrag=!1,o.preventClick=!1,o.opt.resizeLock&&o.scrollTo(o.slide*o.itemWidth,0),(s||t)&&(o.bindArrows(),o.buildDots(),o.bindDrag()),o.updateControls(),o.emit(e?"refresh":"loaded")},t.bindDrag=function(){var t=this;t.mouse=t.mouse||t.handleMouse.bind(t);var e=function(){t.mouseDown=void 0,t.ele.classList.remove("drag"),t.isDrag&&(t.preventClick=!0),t.isDrag=!1},o={mouseup:e,mouseleave:e,mousedown:function(e){e.preventDefault(),e.stopPropagation(),t.mouseDown=e.clientX,t.ele.classList.add("drag")},mousemove:t.mouse,click:function(e){t.preventClick&&(e.preventDefault(),e.stopPropagation()),t.preventClick=!1}};t.ele.classList.toggle("draggable",!0===t.opt.draggable),t.event(t.ele,"remove",o),t.opt.draggable&&t.event(t.ele,"add",o)},t.buildDots=function(){var e=this;if(e.opt.dots){if("string"==typeof e.opt.dots?e.dots=document.querySelector(e.opt.dots):e.dots=e.opt.dots,e.dots){e.dots.innerHTML="",e.dots.classList.add("glider-dots");for(var t=0;t<Math.ceil(e.slides.length/e.opt.slidesToShow);++t){var o=document.createElement("button");o.dataset.index=t,o.setAttribute("aria-label","Page "+(t+1)),o.setAttribute("role","tab"),o.className="glider-dot "+(t?"":"active"),e.event(o,"add",{click:e.scrollItem.bind(e,t,!0)}),e.dots.appendChild(o)}}}else e.dots&&(e.dots.innerHTML="")},t.bindArrows=function(){var o=this;o.opt.arrows?["prev","next"].forEach(function(e){var t=o.opt.arrows[e];t&&("string"==typeof t&&(t=document.querySelector(t)),t&&(t._func=t._func||o.scrollItem.bind(o,e),o.event(t,"remove",{click:t._func}),o.event(t,"add",{click:t._func}),o.arrows[e]=t))}):Object.keys(o.arrows).forEach(function(e){var t=o.arrows[e];o.event(t,"remove",{click:t._func})})},t.updateControls=function(e){var d=this;e&&!d.opt.scrollPropagate&&e.stopPropagation();var t=d.containerWidth>=d.trackWidth;d.opt.rewind||(d.arrows.prev&&(d.arrows.prev.classList.toggle("disabled",d.ele.scrollLeft<=0||t),d.arrows.prev.setAttribute("aria-disabled",d.arrows.prev.classList.contains("disabled"))),d.arrows.next&&(d.arrows.next.classList.toggle("disabled",Math.ceil(d.ele.scrollLeft+d.containerWidth)>=Math.floor(d.trackWidth)||t),d.arrows.next.setAttribute("aria-disabled",d.arrows.next.classList.contains("disabled")))),d.slide=Math.round(d.ele.scrollLeft/d.itemWidth),d.page=Math.round(d.ele.scrollLeft/d.containerWidth);var c=d.slide+Math.floor(Math.floor(d.opt.slidesToShow)/2),h=Math.floor(d.opt.slidesToShow)%2?0:c+1;1===Math.floor(d.opt.slidesToShow)&&(h=0),d.ele.scrollLeft+d.containerWidth>=Math.floor(d.trackWidth)&&(d.page=d.dots?d.dots.children.length-1:0),[].forEach.call(d.slides,function(e,t){var o=e.classList,i=o.contains("visible"),r=d.ele.scrollLeft,s=d.ele.scrollLeft+d.containerWidth,l=d.itemWidth*t,n=l+d.itemWidth;[].forEach.call(o,function(e){/^left|right/.test(e)&&o.remove(e)}),o.toggle("active",d.slide===t),c===t||h&&h===t?o.add("center"):(o.remove("center"),o.add([t<c?"left":"right",Math.abs(t-(t<c?c:h||c))].join("-")));var a=Math.ceil(l)>=Math.floor(r)&&Math.floor(n)<=Math.ceil(s);o.toggle("visible",a),a!==i&&d.emit("slide-"+(a?"visible":"hidden"),{slide:t})}),d.dots&&[].forEach.call(d.dots.children,function(e,t){e.classList.toggle("active",d.page===t)}),e&&d.opt.scrollLock&&(clearTimeout(d.scrollLock),d.scrollLock=setTimeout(function(){clearTimeout(d.scrollLock),.02<Math.abs(d.ele.scrollLeft/d.itemWidth-d.slide)&&(d.mouseDown||d.trackWidth>d.containerWidth+d.ele.scrollLeft&&d.scrollItem(d.getCurrentSlide()))},d.opt.scrollLockDelay||250))},t.getCurrentSlide=function(){var e=this;return e.round(e.ele.scrollLeft/e.itemWidth)},t.scrollItem=function(e,t,o){o&&o.preventDefault();var i=this,r=e;if(++i.animate_id,!0===t)e*=i.containerWidth,e=Math.round(e/i.itemWidth)*i.itemWidth;else{if("string"==typeof e){var s="prev"===e;if(e=i.opt.slidesToScroll%1||i.opt.slidesToShow%1?i.getCurrentSlide():i.slide,s?e-=i.opt.slidesToScroll:e+=i.opt.slidesToScroll,i.opt.rewind){var l=i.ele.scrollLeft;e=s&&!l?i.slides.length:!s&&l+i.containerWidth>=Math.floor(i.trackWidth)?0:e}}e=Math.max(Math.min(e,i.slides.length),0),i.slide=e,e=i.itemWidth*e}return i.scrollTo(e,i.opt.duration*Math.abs(i.ele.scrollLeft-e),function(){i.updateControls(),i.emit("animated",{value:r,type:"string"==typeof r?"arrow":t?"dot":"slide"})}),!1},t.settingsBreakpoint=function(){var e=this,t=e._opt.responsive;if(t){t.sort(function(e,t){return t.breakpoint-e.breakpoint});for(var o=0;o<t.length;++o){var i=t[o];if(a.innerWidth>=i.breakpoint)return e.breakpoint!==i.breakpoint&&(e.opt=Object.assign({},e._opt,i.settings),e.breakpoint=i.breakpoint,!0)}}var r=0!==e.breakpoint;return e.opt=Object.assign({},e._opt),e.breakpoint=0,r},t.scrollTo=function(t,o,i){var r=this,s=(new Date).getTime(),l=r.animate_id,n=function(){var e=(new Date).getTime()-s;r.ele.scrollLeft=r.ele.scrollLeft+(t-r.ele.scrollLeft)*r.opt.easing(0,e,0,1,o),e<o&&l===r.animate_id?a.requestAnimationFrame(n):(r.ele.scrollLeft=t,i&&i.call(r))};a.requestAnimationFrame(n)},t.removeItem=function(e){var t=this;t.slides.length&&(t.track.removeChild(t.slides[e]),t.refresh(!0),t.emit("remove"))},t.addItem=function(e){this.track.appendChild(e),this.refresh(!0),this.emit("add")},t.handleMouse=function(e){var t=this;t.mouseDown&&(t.isDrag=!0,t.ele.scrollLeft+=(t.mouseDown-e.clientX)*(t.opt.dragVelocity||3.3),t.mouseDown=e.clientX)},t.round=function(e){var t=1/(this.opt.slidesToScroll%1||1);return Math.round(e*t)/t},t.refresh=function(e){this.init(!0,e)},t.setOption=function(t,e){var o=this;o.breakpoint&&!e?o._opt.responsive.forEach(function(e){e.breakpoint===o.breakpoint&&(e.settings=Object.assign({},e.settings,t))}):o._opt=Object.assign({},o._opt,t),o.breakpoint=0,o.settingsBreakpoint()},t.destroy=function(){var e=this,t=e.ele.cloneNode(!0),o=function(t){t.removeAttribute("style"),[].forEach.call(t.classList,function(e){/^glider/.test(e)&&t.classList.remove(e)})};t.children[0].outerHTML=t.children[0].innerHTML,o(t),[].forEach.call(t.getElementsByTagName("*"),o),e.ele.parentNode.replaceChild(t,e.ele),e.event(a,"remove",{resize:e.resize}),e.emit("destroy")},t.emit=function(e,t){var o=new a.CustomEvent("glider-"+e,{bubbles:!this.opt.eventPropagate,detail:t});this.ele.dispatchEvent(o)},t.event=function(e,t,o){var i=e[t+"EventListener"].bind(e);Object.keys(o).forEach(function(e){i(e,o[e])})},e});
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
window.SVG_SPRITE = '<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="icon-arrow-right" viewBox="0 0 32 32"><path d="M19.414 27.414l10-10a2 2 0 000-2.828l-10-10a2 2 0 10-2.828 2.828L23.172 14H4a2 2 0 100 4h19.172l-6.586 6.586c-.39.39-.586.902-.586 1.414s.195 1.024.586 1.414a2 2 0 002.828 0z"/></symbol><symbol id="icon-avatar" viewBox="0 0 53 53"><path d="M18.613 41.552l-7.907 4.313a7.106 7.106 0 00-1.269.903A26.377 26.377 0 0026.5 53c6.454 0 12.367-2.31 16.964-6.144a7.015 7.015 0 00-1.394-.934l-8.467-4.233a3.229 3.229 0 01-1.785-2.888v-3.322c.238-.271.51-.619.801-1.03a19.482 19.482 0 002.632-5.304c1.086-.335 1.886-1.338 1.886-2.53v-3.546c0-.78-.347-1.477-.886-1.965v-5.126s1.053-7.977-9.75-7.977-9.75 7.977-9.75 7.977v5.126a2.644 2.644 0 00-.886 1.965v3.546c0 .934.491 1.756 1.226 2.231.886 3.857 3.206 6.633 3.206 6.633v3.24a3.232 3.232 0 01-1.684 2.833z" fill="#e7eced"/><path d="M26.953.004C12.32-.246.254 11.414.004 26.047-.138 34.344 3.56 41.801 9.448 46.76a7.041 7.041 0 011.257-.894l7.907-4.313a3.23 3.23 0 001.683-2.835v-3.24s-2.321-2.776-3.206-6.633a2.66 2.66 0 01-1.226-2.231v-3.546c0-.78.347-1.477.886-1.965v-5.126S15.696 8 26.499 8s9.75 7.977 9.75 7.977v5.126c.54.488.886 1.185.886 1.965v3.546c0 1.192-.8 2.195-1.886 2.53a19.482 19.482 0 01-2.632 5.304c-.291.411-.563.759-.801 1.03V38.8c0 1.223.691 2.342 1.785 2.888l8.467 4.233a7.05 7.05 0 011.39.932c5.71-4.762 9.399-11.882 9.536-19.9C53.246 12.32 41.587.254 26.953.004z" fill="#556080"/></symbol><symbol id="icon-briefcase" viewBox="0 0 32 32"><path d="M30 8h-8V6c0-1.1-.9-2-2-2h-8c-1.1 0-2 .9-2 2v2H2c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM12 6.004L12.004 6h7.993l.004.004V8h-8V6.004zM30 16h-4v3c0 .55-.45 1-1 1h-2c-.55 0-1-.45-1-1v-3H10v3c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-3H2v-2h28v2z"/></symbol><symbol id="icon-checkmark" viewBox="0 0 32 32"><path d="M27 4L12 19l-7-7-5 5 12 12L32 9z"/></symbol><symbol id="icon-globe-solid" viewBox="0 0 24 24"><path class="heroicon-ui" d="M4.06 13a8 8 0 005.18 6.51A18.5 18.5 0 018.02 13H4.06zm0-2h3.96a18.5 18.5 0 011.22-6.51A8 8 0 004.06 11zm15.88 0a8 8 0 00-5.18-6.51A18.5 18.5 0 0115.98 11h3.96zm0 2h-3.96a18.5 18.5 0 01-1.22 6.51A8 8 0 0019.94 13zm-9.92 0c.16 3.95 1.23 7 1.98 7s1.82-3.05 1.98-7h-3.96zm0-2h3.96c-.16-3.95-1.23-7-1.98-7s-1.82 3.05-1.98 7zM12 22a10 10 0 110-20 10 10 0 010 20z"/></symbol><symbol id="icon-plus" viewBox="0 0 32 32"><path d="M31 12H20V1a1 1 0 00-1-1h-6a1 1 0 00-1 1v11H1a1 1 0 00-1 1v6a1 1 0 001 1h11v11a1 1 0 001 1h6a1 1 0 001-1V20h11a1 1 0 001-1v-6a1 1 0 00-1-1z"/></symbol><symbol id="icon-star-solid" viewBox="0 0 36 32"><path d="M16.206 1.113l-4.081 8.275-9.131 1.331c-1.637.238-2.294 2.256-1.106 3.412l6.606 6.438-1.563 9.094c-.281 1.644 1.45 2.875 2.9 2.106L18 27.475l8.169 4.294c1.45.762 3.181-.462 2.9-2.106l-1.563-9.094 6.606-6.438c1.188-1.156.531-3.175-1.106-3.412l-9.131-1.331-4.081-8.275c-.731-1.475-2.85-1.494-3.587 0z"/></symbol><symbol id="icon-times-solid" viewBox="0 0 22 32"><path d="M15.17 16l6.254-6.254a1.967 1.967 0 000-2.78l-1.39-1.39a1.965 1.965 0 00-2.78 0L11 11.83 4.746 5.576a1.965 1.965 0 00-2.78 0l-1.39 1.39a1.967 1.967 0 000 2.78L6.83 16 .576 22.254a1.967 1.967 0 000 2.78l1.39 1.39a1.967 1.967 0 002.78 0L11 20.17l6.254 6.254a1.967 1.967 0 002.78 0l1.39-1.39a1.967 1.967 0 000-2.78L15.17 16z"/></symbol><symbol id="platform-android-tv" viewBox="0 0 32 32"><path d="M21.2 24.4c0-1 .8-1.9 1.9-1.9h.1c.4 0 .7.1 1 .4v-1.4h1v4.8h-1V26c-.3.3-.7.4-1 .4-1.2-.1-2-.9-2-2zm1 0c0 .6.4 1 1 1 .4 0 .7-.2 1-.5v-1.2c-.2-.3-.6-.5-1-.5-.6.1-1 .6-1 1.2zm-6.8 0c-.1-1.1.8-2 1.9-2.1s2 .8 2.1 1.9-.8 2-1.9 2.1h-.1c-1.1 0-2-.8-2-1.9zm1 0c0 .6.4 1 1 1.1.6 0 1-.4 1.1-1 0-.6-.4-1-1-1.1h-.1c-.6 0-1 .4-1 1zm-7.4 0c0-1 .8-1.9 1.9-1.9h.1c.4 0 .7.1 1 .4v-1.4h1v4.8h-1V26c-.3.3-.7.4-1 .4-1.1-.1-1.9-.9-2-2zm1 0c0 .6.4 1 1 1 .4 0 .7-.2 1-.5v-1.2c-.2-.3-.6-.5-1-.5-.5.1-1 .6-1 1.2zm-9.4 0c0-1 .8-1.9 1.9-1.9h.1c.4 0 .7.1 1 .4v-.3h1v3.7h-1V26c-.3.3-.7.4-1 .4-1.1-.1-2-.9-2-2zm1 0c0 .6.4 1 1 1 .4 0 .7-.2 1-.5v-1.1c-.2-.3-.6-.5-1-.5-.5 0-1 .5-1 1.1zm25.9 1.9c-.8.1-1.6-.4-1.6-1.3v-3.4h.7v1h1v.6h-1v1.6c0 .4.4.9.8.9h.2l-.1.6c.1.1 0 0 0 0zm1.8-.1l-1.6-3.7h.8l1.1 2.8 1.1-2.9h.8L30 26.1l-.7.1zm-9.5 0v-3.7h1v3.7h-1zm-6.3 0v-1.9c-.1-.9.5-1.7 1.5-1.8h.4v.9c-.4-.1-.8.2-.9.7v2.1h-1zm-5.8 0v-2c0-.4-.4-.8-.9-.8s-.8.4-.8.8v2h-.9v-2c0-1 .8-1.8 1.8-1.8s1.8.7 1.8 1.7v2l-1 .1zm12-4.4c0-.3.2-.5.5-.6s.5.2.6.5c0 .3-.2.5-.5.6-.3 0-.6-.2-.6-.5zM.6 19.2c.5-5 3.5-9.4 7.9-11.7L6 3.2c-.2-.2-.1-.5.1-.7.3-.1.6-.1.7.1L9.5 7c2.1-.9 4.4-1.3 6.6-1.3 2.3 0 4.5.4 6.6 1.3l2.6-4.3c.1-.2.4-.3.7-.1.2.1.3.4.2.7l-2.6 4.3c4.5 2.3 7.4 6.7 7.9 11.7H.6zm21.3-5.5c0 .7.5 1.3 1.3 1.3.7 0 1.3-.5 1.3-1.3 0-.7-.5-1.3-1.3-1.3h-.1c-.6.1-1.2.6-1.2 1.3zm-14.2 0c0 .7.5 1.3 1.3 1.3.7 0 1.3-.5 1.3-1.3 0-.7-.5-1.3-1.3-1.3-.7 0-1.3.6-1.3 1.3zm-61.2 12.4c0-.1-.1-.1-.1-.4-1.2 0-2.2-.4-2.9-.2-1.1.1-1.8.4-2.5.4-.3.5-.7.9-1.3 1-1 .1-2 0-2.9-.5-1-.5-2.2-.4-3-.7-.4-.1-.8-.3-1-.7-.1-.2-.1-.4-.1-.6 0-.4.1-.7.1-1 .1-.1.1-.4.1-.5s0-.4-.1-.5c-.1-.2-.1-.4-.1-.6s.1-.4.1-.7c.3-.4.6-.6 1-.7.3-.1.6-.2.8-.4s.4-.6.7-1c0-.1 0-.1.1-.1v-.7c0-.7.1-1.4.4-2.1.7-1.8 1.7-3.5 3-5 .7-1 1.2-2.1 1.2-3.3 0-.5-.1-1.5-.1-2.5 0-1.9.5-4.2 3.6-4.5h.5c4.2 0 4 4.4 4.1 6.8 0 1.6.8 2.5 1.7 3.6 1 1.2 1.8 2.5 2.4 3.9.3.7.4 1.6.4 2.3 0 .6-.1 1.2-.3 1.8.1 0 .2 0 .2.1s.1.1.1.1c.3.4.4.7.5 1.2 0 .4.1.7.4 1v.1c.4.4.7 1 .7 1.6-.1.4-.4.8-.7 1-.7.4-1.9.7-2.7 1.6-.6.8-1.5 1.3-2.5 1.5h-.2c-.5-.1-1.2-.5-1.6-1.3zm-6.1-2.9c.1.1.3.4.4.6 1.9 1.3 4.2.8 5.9-.4.2-.4.4-1 .4-1.5l.2-2.1c.1-.5.4-1 .8-1.3.1 0 .1-.1.2-.1v-.1c.1-.8 1-1 1.9-.5.9.4 1.3.7 1.3 1.1 0 .1 0 .1-.1.2h.1v.1c0-.1.1-.2.1-.3 0-.5-.4-.9-1.4-1.4-.1 0-.1-.1-.2-.1.1-.3.1-.7.1-1s-.1-.6-.1-.9c-.3-1.2-.9-2.2-1.8-3h-.1c0 .1.1.1.2.3.8.9 1.3 2 1.4 3.2 0 .4-.1.7-.2 1.1-.2-.1-.4-.1-.6-.1-.1-1.2-.6-2.3-1.2-3.3-.8-1.6-1.5-3.3-1.9-5-.3.4-.7.7-1.1 1-.3.1-.6.3-.8.4-.4.1-.7.3-1.1.2h-.1c-.4.1-.7-.1-1-.4-.2-.1-.4-.4-.7-.5-.1-.1-.2-.2-.4-.2-.1 1.9-1.5 4.5-2.1 5.8-.4 1-.6 2.1-.7 3.1-.4-.5-.5-1.1-.5-1.7.1-.9.3-1.7.7-2.5.1-.4.4-.7.4-1.1-.7 1-1.1 2-1.4 3-.1.6-.1 1.2 0 1.8.2.7.7 1.2 1.3 1.6.7.4 1.4 1 1.9 1.7.2.3.4.7.4 1v.2c-.1.1-.2.3-.4.4s-.4.1-.5.1c.5.3.7.4.7.6zm.2-14.7c.1.3.4.6.7.7.2.1.4.4.7.5.1.1.2.1.4.2.1.1.4.1.5.1.4.1.7-.1 1.1-.2.3-.2.6-.4.8-.5.5-.1.9-.5 1.2-1 .1-.1.1-.4 0-.5v.1c-.1-.2-.3-.4-.5-.4-.5-.1-.8-.2-1.2-.5s-.9-.4-1.3-.4h-.5c-.4.1-.7.4-1 .7l-.1.1c-.1.1-.4.2-.5.4-.1.1-.3.3-.3.5v.2zm4.7-1.4c.1.1.2.1.4.1l.1.1c.1-.1.2-.2.2-.4.1-.2.1-.5.1-.7 0-.3-.1-.5-.1-.7-.1-.2-.3-.4-.5-.6-.2-.1-.4-.2-.7-.2-.2 0-.5.1-.7 0-.2.1-.4.4-.5.6-.1.3-.2.5-.1.8v.2l.7.2v-.2c0-.1 0-.3.1-.4s.1-.2.2-.4c0-.1.1-.1.2-.1.1.1.2.1.4.1.1.1.1.1.1.4.1.1.1.3.1.4s0 .3-.1.4c0 .1-.1.1-.1.2 0 .2.1.2.2.2zm-4.5-.1c.1.1.1.2.2.4.1 0 .1-.1.1-.1 0-.1.1-.1.1-.1-.1-.1-.1-.1-.1-.2-.1-.1-.1-.2-.1-.4v-.4c0-.1 0-.1.1-.1 0-.1.1-.1.1-.1.1 0 .1 0 .1.1.1 0 .1.1.1.2s.1.2.1.4v.2c.1-.1.3-.2.4-.2h.1v-.5c0-.3-.1-.5-.1-.7-.1-.2-.2-.4-.4-.5-.1-.1-.3-.1-.5-.1-.1 0-.2 0-.4.1-.1.1-.3.4-.4.6s-.1.5-.1.7c.6.2.6.5.7.7zm.6 2.1l-.4-.5c-.1-.1-.1-.1-.1-.3v-.1c.1 0 .1.1.2.2l.4.4c.4.3.8.5 1.3.5.5-.1 1-.2 1.6-.5.2-.1.4-.3.7-.5.2-.1.1-.2.4-.2.1 0 .1 0 .1.1s-.1.1-.2.3l-1 .5c-.5.3-1 .5-1.6.6-.4-.1-1-.2-1.4-.5zm2-1.9c-.1 0-.1 0-.1-.1.1-.1.2-.1.4-.1.1 0 .1.1.1.1l-.1.1c-.2.2-.2 0-.3 0zm-1.3 0c0-.1.1-.1.1-.1.1 0 .3 0 .4.1 0 .1-.1.1-.1.1-.1 0-.1.1-.1.1-.1-.1-.3 0-.3-.2z"/></symbol><symbol id="platform-android" viewBox="0 0 32 32"><path d="M20.375 3.973C22.571 5.421 24 7.876 24 10.665v.001H8v-.001a7.983 7.983 0 013.595-6.674l.03-.019-1.513-2.271A.667.667 0 1111.22.959l.002.003 1.581 2.372c.941-.423 2.041-.67 3.197-.67s2.256.247 3.248.69l-.051-.02L20.778.962a.667.667 0 111.109.741l.001-.002-1.513 2.271zM8 25.333V12h16v13.333c0 .736-.597 1.333-1.333 1.333h-1.333v4a1.333 1.333 0 01-2.666 0v-4h-5.333v4a1.333 1.333 0 01-2.666 0v-4H9.336a1.333 1.333 0 01-1.333-1.333zM5.333 12c.736 0 1.333.597 1.333 1.333V20A1.333 1.333 0 014 20v-6.667C4 12.597 4.597 12 5.333 12zm21.334 0c.736 0 1.333.597 1.333 1.333V20a1.333 1.333 0 01-2.666 0v-6.667c0-.736.597-1.333 1.333-1.333zM13.333 8a1.333 1.333 0 000-2.666 1.333 1.333 0 000 2.666zm5.334 0a1.333 1.333 0 000-2.666 1.333 1.333 0 000 2.666z"/></symbol><symbol id="platform-ios" viewBox="0 0 32 32"><path d="M27.536 24.16c-.693 1.532-1.023 2.216-1.915 3.569-1.241 1.891-2.992 4.247-5.161 4.267-1.928.017-2.424-1.253-5.04-1.24S12.256 32.017 10.327 32c-2.169-.02-3.827-2.147-5.071-4.039-3.472-5.288-3.836-11.492-1.693-14.789 1.52-2.347 3.923-3.716 6.183-3.716 2.3 0 3.744 1.26 5.647 1.26 1.844 0 2.968-1.263 5.627-1.263 2.011 0 4.141 1.095 5.657 2.984-4.971 2.727-4.163 9.824.86 11.723zM20.092 5.397C18.92 6.897 16.909 8.06 14.964 8c-.355-1.933.557-3.924 1.661-5.267C17.844 1.256 19.928.121 21.709 0c.303 2.02-.525 3.997-1.617 5.397z"/></symbol><symbol id="platform-macos" viewBox="0 0 32 32"><path d="M16 32C7.164 32 0 24.836 0 16S7.164 0 16 0s16 7.164 16 16-7.164 16-16 16zM7.353 20.653c0 2.772 2.136 4.788 4.8 4.788 2.652 0 4.848-2.052 4.848-4.824 0-2.748-2.148-4.812-4.812-4.812h-.027a4.809 4.809 0 00-4.809 4.809v.041-.002zm1.548-.036c0-1.908 1.428-3.444 3.276-3.444 1.836 0 3.276 1.536 3.276 3.444s-1.44 3.456-3.276 3.456c-1.848 0-3.276-1.548-3.276-3.456zm11.91 4.824c2.077 0 3.253-1.38 3.253-2.748 0-1.392-.888-2.388-2.568-2.724l-1.189-.228c-.755-.156-1.187-.72-1.187-1.248 0-.72.707-1.368 1.62-1.368.996 0 1.632.744 1.8 1.416l1.367-.432c-.191-1.02-1.067-2.304-3.191-2.304-1.693 0-3.109 1.272-3.109 2.82 0 1.224.84 2.244 2.388 2.556l1.152.24c.793.168 1.392.6 1.392 1.368 0 .792-.768 1.32-1.703 1.32-1.129 0-1.873-.708-2.077-1.8l-1.425.384c.131 1.332 1.283 2.748 3.48 2.748zM9.952 10.533v2.8h1.101v-2.781c0-.756.411-1.26 1.101-1.26.765 0 1.064.523 1.064 1.232v2.809h1.111v-3.08c0-1.129-.551-2.016-1.811-2.016-.765 0-1.251.28-1.736.821-.28-.504-.775-.821-1.54-.821-.392 0-1.008.149-1.484.784v-.672H6.675v4.984h1.111v-2.772c0-.756.411-1.269 1.092-1.269.765 0 1.073.541 1.073 1.241zm9.744 2.8V10.16c0-.336-.047-.625-.168-.896-.327-.719-1.027-1.017-1.867-1.017-.364 0-.719.065-1.008.196-.691.299-1.073.933-1.12 1.353l1.008.224c.084-.476.485-.821 1.092-.821.653 0 .98.364.98.756 0 .243-.131.42-.467.42h-.616c-.868 0-2.072.364-2.072 1.521v.056c0 .859.709 1.465 1.68 1.465.467 0 1.101-.159 1.465-.765v.681h1.092zm-1.092-2.016c0 .747-.485 1.213-1.241 1.213-.467 0-.793-.271-.793-.681 0-.467.541-.691.961-.691h1.073v.159zm4.788 2.1c1.353 0 2.128-.868 2.352-1.633l-1.017-.327c-.149.383-.457.952-1.316.952-.849 0-1.475-.663-1.475-1.596 0-.943.653-1.559 1.465-1.559.831 0 1.195.541 1.307.933l1.008-.336c-.215-.84-1.073-1.605-2.305-1.605a2.58 2.58 0 00-2.613 2.585c0 1.465 1.129 2.585 2.595 2.585z"/></symbol><symbol id="platform-windows" viewBox="0 0 32 32"><path d="M29.333 1.333v13.123l-14.667.211V3.378l14.667-2.044zM2.667 5.261L12 4v10.537l-9.333.129V5.261zm12 23.36V17.333l14.667.211v13.123l-14.667-2.044zm-12-1.882v-9.405l9.333.131v10.536L2.667 26.74z"/></symbol></svg>';