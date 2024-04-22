
/*
Template: Ecofuel - Electric Car & Charging Station HTML Template
Author: peacefulqode.com
Version: 1.1
Design and Developed by: PeacefulQode

*/

// ================Home Default=========================//
var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider51"] = {
   once: RS_MODULES.modules["revslider51"] !== undefined ? RS_MODULES.modules["revslider51"].once : undefined, init: function () {
      window.revapi5 = window.revapi5 === undefined || window.revapi5 === null || window.revapi5.length === 0 ? document.getElementById("rev_slider_5_1") : window.revapi5;
      if (window.revapi5 === null || window.revapi5 === undefined || window.revapi5.length == 0) { window.revapi5initTry = window.revapi5initTry === undefined ? 0 : window.revapi5initTry + 1; if (window.revapi5initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider51"].init() }); return; }
      window.revapi5 = jQuery(window.revapi5);
      if (window.revapi5.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_5_1"); return; }
      revapi5.revolutionInit({
         revapi: "revapi5",
         DPR: "dpr",
         sliderLayout: "fullwidth",
         visibilityLevels: "1240,1024,778,480",
         gridwidth: "1300,1024,778,480",
         gridheight: "900,709,540,340",
         lazyType: "smart",
         perspective: 600,
         perspectiveType: "global",
         editorheight: "900,709,540,340",
         responsiveLevels: "1240,1024,778,480",
         progressBar: { disableProgressBar: true },
         navigation: {
            onHoverStop: false
         },
         viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false
         },
         fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
         },
      });

   }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };



// ================Charging Station=========================//

var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider21"] = {
   once: RS_MODULES.modules["revslider21"] !== undefined ? RS_MODULES.modules["revslider21"].once : undefined, init: function () {
      window.revapi2 = window.revapi2 === undefined || window.revapi2 === null || window.revapi2.length === 0 ? document.getElementById("rev_slider_2_1") : window.revapi2;
      if (window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length == 0) { window.revapi2initTry = window.revapi2initTry === undefined ? 0 : window.revapi2initTry + 1; if (window.revapi2initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider21"].init() }); return; }
      window.revapi2 = jQuery(window.revapi2);
      if (window.revapi2.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_2_1"); return; }
      revapi2.revolutionInit({
         revapi: "revapi2",
         DPR: "dpr",
         sliderLayout: "fullwidth",
         visibilityLevels: "1240,1024,778,480",
         gridwidth: "1300,1024,778,480",
         gridheight: "960,790,650,450",
         lazyType: "smart",
         perspective: 600,
         perspectiveType: "global",
         editorheight: "960,790,650,450",
         responsiveLevels: "1240,1024,778,480",
         progressBar: { disableProgressBar: true },
         navigation: {
            onHoverStop: false
         },
         viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false
         },
         fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
         },
      });

   }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };



// ================Electric Car=========================//

var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider31"] = {
   once: RS_MODULES.modules["revslider31"] !== undefined ? RS_MODULES.modules["revslider31"].once : undefined, init: function () {
      window.revapi3 = window.revapi3 === undefined || window.revapi3 === null || window.revapi3.length === 0 ? document.getElementById("rev_slider_3_1") : window.revapi3;
      if (window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length == 0) { window.revapi3initTry = window.revapi3initTry === undefined ? 0 : window.revapi3initTry + 1; if (window.revapi3initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider31"].init() }); return; }
      window.revapi3 = jQuery(window.revapi3);
      if (window.revapi3.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_3_1"); return; }
      revapi3.revolutionInit({
         revapi: "revapi3",
         DPR: "dpr",
         sliderLayout: "fullwidth",
         visibilityLevels: "1240,1024,778,480",
         gridwidth: "1300,1024,778,480",
         gridheight: "940,709,540,340",
         perspective: 600,
         perspectiveType: "global",
         editorheight: "940,709,540,340",
         responsiveLevels: "1240,1024,778,480",
         progressBar: { disableProgressBar: true },
         navigation: {
            wheelCallDelay: 1000,
            onHoverStop: false,
            arrows: {
               enable: true,
               tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
               style: "zeus",
               hide_onmobile: true,
               hide_under: "1399px",
               hide_onleave: true,
               animSpeed: "500ms",
               animDelay: "500ms",
               left: {
                  h_offset: 30
               },
               right: {
                  h_offset: 30
               }
            },
            bullets: {
               enable: true,
               tmp: "",
               style: "hesperiden",
               hide_over: "1399px"
            }
         },
         viewPort: {
            global: false,
            globalDist: "-200px",
            enable: false
         },
         fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
         },
      });

   }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };



// ================Electric Car Service=========================//

var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider61"] = {
   once: RS_MODULES.modules["revslider61"] !== undefined ? RS_MODULES.modules["revslider61"].once : undefined, init: function () {
      window.revapi6 = window.revapi6 === undefined || window.revapi6 === null || window.revapi6.length === 0 ? document.getElementById("rev_slider_6_1") : window.revapi6;
      if (window.revapi6 === null || window.revapi6 === undefined || window.revapi6.length == 0) { window.revapi6initTry = window.revapi6initTry === undefined ? 0 : window.revapi6initTry + 1; if (window.revapi6initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider61"].init() }); return; }
      window.revapi6 = jQuery(window.revapi6);
      if (window.revapi6.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_6_1"); return; }
      revapi6.revolutionInit({
         revapi: "revapi6",
         DPR: "dpr",
         sliderLayout: "fullwidth",
         visibilityLevels: "1240,1024,778,480",
         gridwidth: "1300,1024,778,480",
         gridheight: "940,709,540,340",
         lazyType: "smart",
         perspective: 600,
         perspectiveType: "global",
         editorheight: "940,709,540,340",
         responsiveLevels: "1240,1024,778,480",
         progressBar: { disableProgressBar: true },
         navigation: {
            wheelCallDelay: 1000,
            onHoverStop: false,
            arrows: {
               enable: true,
               tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
               style: "zeus",
               hide_onmobile: true,
               hide_under: "1399px",
               hide_onleave: true,
               animSpeed: "500ms",
               animDelay: "500ms",
               left: {
                  h_offset: 30
               },
               right: {
                  h_offset: 30
               }
            },
            bullets: {
               enable: true,
               tmp: "",
               style: "hesperiden",
               hide_over: "1399px"
            }
         },
         viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false
         },
         fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
         },
      });

   }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };



// ================Electric Bike=========================//

var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider81"] = {
   once: RS_MODULES.modules["revslider81"] !== undefined ? RS_MODULES.modules["revslider81"].once : undefined, init: function () {
      window.revapi8 = window.revapi8 === undefined || window.revapi8 === null || window.revapi8.length === 0 ? document.getElementById("rev_slider_8_1") : window.revapi8;
      if (window.revapi8 === null || window.revapi8 === undefined || window.revapi8.length == 0) { window.revapi8initTry = window.revapi8initTry === undefined ? 0 : window.revapi8initTry + 1; if (window.revapi8initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider81"].init() }); return; }
      window.revapi8 = jQuery(window.revapi8);
      if (window.revapi8.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_8_1"); return; }
      revapi8.revolutionInit({
         revapi: "revapi8",
         DPR: "dpr",
         sliderLayout: "fullwidth",
         visibilityLevels: "1240,1024,778,480",
         gridwidth: "1300,1024,778,480",
         gridheight: "940,650,540,340",
         lazyType: "smart",
         perspective: 600,
         perspectiveType: "global",
         editorheight: "940,650,540,340",
         responsiveLevels: "1240,1024,778,480",
         progressBar: { disableProgressBar: true },
         navigation: {
            wheelCallDelay: 1000,
            onHoverStop: false,
            arrows: {
               enable: true,
               tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
               style: "zeus",
               hide_onmobile: true,
               hide_under: "1399px",
               hide_onleave: true,
               animSpeed: "500ms",
               animDelay: "500ms",
               left: {
                  h_offset: 30
               },
               right: {
                  h_offset: 30
               }
            },
            bullets: {
               enable: true,
               tmp: "",
               style: "hesperiden",
               hide_over: "1399px"
            }
         },
         viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false
         },
         fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
         },
      });

   }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };