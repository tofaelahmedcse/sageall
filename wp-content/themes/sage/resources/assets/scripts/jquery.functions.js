$(document).ready(function(){$("#nav-toggle").click(function(){var e=$(".logo-bg");if(e.hasClass("hide_me")){$(e).removeClass("hide_me").fadeIn()}else{$(e).addClass("hide_me").fadeOut()}}),$(".toggle-sfx").click(function(){$("video").prop("muted")?($("video").prop("muted",!1),$(".toggle-sfx").addClass("active")):($("video").prop("muted",!0),$(".toggle-sfx").removeClass("active"))}),$.preloadImages=function(){for(var e=0;e<arguments.length;e++)$("<img />").attr("src",arguments[e])},$.preloadImages("/wp-content/themes/lofts9/images/logo-loftson9.png"),$.ajaxSetup({cache:!1}),$(".contact-ajax").click(function(){var e=$(this).attr("href");return $(".wpcf7-form").load(e+"#header-logo",function(){}),!1}),function(e){"use strict";function t(e){return new RegExp("(^|\\s+)"+e+"(\\s+|$)")}function n(e,t){var n=r(e,t)?s:i;n(e,t)}var r,i,s;"classList"in document.documentElement?(r=function(e,t){return e.classList.contains(t)},i=function(e,t){e.classList.add(t)},s=function(e,t){e.classList.remove(t)}):(r=function(e,n){return t(n).test(e.className)},i=function(e,t){r(e,t)||(e.className=e.className+" "+t)},s=function(e,n){e.className=e.className.replace(t(n)," ")});var o={hasClass:r,addClass:i,removeClass:s,toggleClass:n,has:r,add:i,remove:s,toggle:n};"function"==typeof define&&define.amd?define(o):e.classie=o}(window),function(){function e(){if(classie.has(n,"open")){classie.remove(n,"open"),classie.add(n,"close");var e=function(t){if(support.transitions){if("visibility"!==t.propertyName)return;this.removeEventListener(transEndEventName,e)}classie.remove(n,"close")};support.transitions?n.addEventListener(transEndEventName,e):e()}else classie.has(n,"close")||classie.add(n,"open")}var t=document.getElementById("nav-toggle"),n=document.querySelector("div.overlay"),r=n.querySelector(".active a#nav-toggle");transEndEventNames={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},transEndEventName=transEndEventNames[Modernizr.prefixed("transition")],support={transitions:Modernizr.csstransitions},t.addEventListener("click",e),r.addEventListener("click",e)}()}),$(window).load(function(){function e(){$(window).width()>760}$("#nav-toggle").click(function(){$("#nav-toggle").toggleClass("active"),$(".container-toggle").toggleClass("active")}),$(function(){e()})})