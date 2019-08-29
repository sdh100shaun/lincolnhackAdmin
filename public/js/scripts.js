/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 203);
/******/ })
/************************************************************************/
/******/ ({

/***/ 203:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(204);


/***/ }),

/***/ 204:
/***/ (function(module, exports) {

function menuFunctionality() {
    var mainNav = $('.main-nav');
    var body = $("html, body");

    // On click of the nav button show the navigation.
    // $('header .navbar-header button').click(function() {
    // 	$(mainNav).addClass('showing');
    // });
    $('.navbar-header button').click(function () {

        if ($(mainNav).hasClass('showing')) {
            $(mainNav).removeClass('showing');
        } else {
            $(mainNav).addClass('showing');
        }
    });

    // Close the navbar.
    $('.main-nav button.close').click(function () {
        $(mainNav).removeClass('showing');
    });

    // Menu links.
    $('[data-nav-ref]').click(function (e) {
        e.preventDefault();

        // Hide the navbar.
        $(mainNav).removeClass('showing');

        // Get the tag.
        var ref = $(this).attr('href');

        // Animate the scrollation. SCROLLATION?
        if (ref.length > 0) {
            body.stop().animate({
                scrollTop: $(ref)[0].offsetTop
            }, 500, 'swing', function () {
                // Finished animation.
            });
        }
    });
}

/**
 * Sidebar functionality.
 *
 */
function sidebarFunctionality() {
    // Get the heights of each section.
    var sectionInfo = [];

    // Store the current section that we're on!.
    var currentSection = "";

    // Get the navigation title element.
    var navigationTitle = $('.navbar-header .nav-current-section');

    // Get the sidebar elements.
    var sidebarElements = $('.main-sidebar ul > li');

    // Loop through each section.
    var sections = $('[section-name]');
    console.log(sections);
    for (var key in sections) {
        // Valid property and not inherited?
        if (!isNaN(key) && sections.hasOwnProperty(key)) {
            var element = sections[key];

            // Get information for each of the sections.
            var obj = {};
            obj.name = $(element).attr('section-name');
            obj.topPos = $(element).offset().top;
            obj.botPos = $(element).offset().top + $(element).outerHeight(true);
            obj.height = $(element).outerHeight(true);

            // Add this to the array.
            sectionInfo.push(obj);
        }
    }
}

function faqQuestionSetup() {
    $(document).on('click', '.faqs a', function () {

        var questionRef = $(this).attr('data-question-ref');
        var answer;

        switch (questionRef) {

            case "1":
                answer = "Where possible, please car share. Pay and Display parking is available across the street.";
                break;

            case "2":
                answer = "You’ll find out on the day :D";
                break;

            case "3":
                answer = "Ticket releases will be announced here and on @techlincs";
                break;

            case "4":
                answer = "Yes. You can team up with friends or other hackers on the day, or you can hack solo. Only one prize per team member per challenge and each challenge has a maximum of four prizes. A maximum of 4 members per team (you can have more than 4 but there are only 4 prizes)";
                break;

            case "5":
                answer = "Anything created remains the property of the hacker (author). LincolnHack and its sponsors have no ownership over anything you create.";
                break;

            case "6":
                answer = "No… indeed, we strongly advise you get some sleep and stay hydrated. You’re allowed to go home. Come and go as you please. Remember to take regular breaks. Rest is important.";
                break;

            case "7":
                answer = "You will need to provide a ticket for entry. No ticket, no entry.";
                break;

            case "8":
                answer = "TBA - all catering is provided rest assured you will be well fed.";
                break;

            default:
                console.log("Error");
        }

        // $(".speech-bubble p").text(answer).animate({opacity:1});
        $(".speech-bubble p").animate({ opacity: 0 }, function () {
            $(this).text(answer).animate({ opacity: 1 });
        });

        // Move the eyes right
        // $('.eyes').css('left', '23px');
        $('.eyes').css('top', '-246px');
        $('.nose').css('top', '-253px');
        $('footer .imp, footer .eyes, footer .mouth-open, footer .mouth-oo, footer .laptop-glow, footer .nose').css('transform', 'rotate(2deg)');

        setTimeout(function () {
            setTimeout(function () {
                $('.mouth-open').hide();
                $('.mouth-oo').show();
            }, 200);
            $('footer .imp, footer .eyes, footer .mouth-open, footer .mouth-oo, footer .laptop-glow, footer .nose').css('transform', 'rotate(0deg)');
        }, 300);

        $('.laptop-glow').show();

        // Wait a second and return
        setTimeout(function () {

            $('.eyes').css('top', '-250px');

            setTimeout(function () {
                $('.nose').css('top', '-250px');
            }, 200);

            setTimeout(function () {
                $('.mouth-open').show();
                $('.mouth-oo').hide();
            }, 500);

            setTimeout(function () {
                $('.laptop-glow').hide();
            }, 500);
        }, 2000);
    });
}

function impWatch() {
    $('.faqs a').on('mouseenter', function () {

        if ($('.eyes').css('top') == '-250px') {
            $('.eyes').animate({
                top: '-258px',
                left: '19px'
            }, "slow");
        }
    });

    $('.faqs a').on('mouseleave', function () {
        $('.eyes').animate({
            top: '-250px',
            left: 'initial'
        }, "slow");
    });
}

function videoPlay() {
    $(document).on('click', '.video-control', function () {
        if ($(this).hasClass('play')) {
            $('.what video').get(0).play();
            $(this).removeClass('play').addClass('pause');
        } else {
            $('.what video').get(0).pause();
            $(this).removeClass('pause').addClass('play');
        }
    });
}

function setupTicker() {
    setTimeout(function () {
        highlight();
        setupTicker();
    }, 1300);
}

function highlight() {

    if ($('.highlighted').length == 0) {
        $('li.first').addClass('highlighted');
    } else {
        var highlightedElement = $('li.highlighted');
        highlightedElement.removeClass('highlighted');
        highlightedElement.next('li').addClass('highlighted');
    }
}
function initMap() {

    mapboxgl.accessToken = 'pk.eyJ1Ijoic2RoMTAwIiwiYSI6ImNqMGxpY2g3aTAwMDQzMnFxamQ0NTRkZXQifQ.ouosJmF_k6Y2ZRf_mfSn7A';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/dark-v10',
        zoom: 17,
        center: [-0.537969, 53.229946]
    });
    map.on('load', function () {
        map.loadImage('/images/assets/map-pin.png', function (error, image) {
            if (error) throw error;
            map.addImage('imp', image);
            map.addLayer({
                "id": "points",
                "type": "symbol",
                "source": {
                    "type": "geojson",
                    "data": {
                        "type": "FeatureCollection",
                        "features": [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [-0.537772, 53.230069]
                            }
                        }]
                    }
                },
                "layout": {
                    "icon-image": "imp",
                    "icon-size": 1.5
                }
            });
        });
    });
}

$(function () {

    menuFunctionality();
    sidebarFunctionality();

    impWatch();
    faqQuestionSetup();

    videoPlay();
    initMap();
    // setupTicker();
});

/***/ })

/******/ });