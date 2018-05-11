function menuFunctionality() {
    var mainNav = $('.main-nav');
    var body = $("html, body");

    // On click of the nav button show the navigation.
    // $('header .navbar-header button').click(function() {
    // 	$(mainNav).addClass('showing');
    // });
    $('.navbar-header button').click(function() {

        if($(mainNav).hasClass('showing')){
            $(mainNav).removeClass('showing');
        } else{
            $(mainNav).addClass('showing');
        }
    });

    // Close the navbar.
    $('.main-nav button.close').click(function() {
        $(mainNav).removeClass('showing');
    });



    // Menu links.
    $('[data-nav-ref]').click(function(e) {
        e.preventDefault();

        // Hide the navbar.
        $(mainNav).removeClass('showing');

        // Get the tag.
        var ref = $(this).attr('href');

        // Animate the scrollation. SCROLLATION?
        if (ref.length > 0) {
            body.stop().animate({
                scrollTop: $(ref)[0].offsetTop
            }, 500, 'swing', function() {
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

function faqQuestionSetup(){
    $(document).on('click', '.faqs a', function(){

        var questionRef = $(this).attr('data-question-ref');
        var answer;

        switch(questionRef){

            case "1":
                answer = "On site parking is available. Where possible, please car share. Pay and Display parking is available within a 20 minute walk.";
                break;

            case "2":
                answer = "You’ll find out on the day :D";
                break;

            case "3":
                answer = "Answer for question " + questionRef;
                break;

            case "4":
                answer = "Yes. You can team up with friends or other hackers on the day, or you can hack solo. Only one prize per team member per challenge and each challenge has a maximum of four prizes. A maximum of 4 members per team (you can have more than 4 but there are only 4 prize)";
                break;

            case "5":
                answer = "Anything created remains the property of the hacker (author). LincolnHack and its sponsors have no ownership over anything you create.";
                break;

            case "6":
                answer = "No… indeed, we strongly advise you get some sleep and stay hydrated. You’re allowed to go home. Come and go as you please. Rember to take regular breaks. Rest is important.";
                break;

            case "7":
                answer = "You will need to provide a ticket for entry. No ticket, no entry.";
                break;

            case "8":
                answer = "TBA - all catering is provided by Sam Owen of Salted Orange. The same great chef from last year.";
                break;

            default:
                console.log("Error");
        }

        // $(".speech-bubble p").text(answer).animate({opacity:1});
        $(".speech-bubble p").animate({opacity:0},function(){
            $(this).text(answer).animate({opacity:1});
        })

        // Move the eyes right
        // $('.eyes').css('left', '23px');
        $('.eyes').css('top', '-246px');
        $('.nose').css('top', '-253px');
        $('footer .imp, footer .eyes, footer .mouth-open, footer .mouth-oo, footer .laptop-glow, footer .nose').css('transform', 'rotate(2deg)');

        setTimeout(function(){
            setTimeout(function(){
                $('.mouth-open').hide();
                $('.mouth-oo').show();
            }, 200);
            $('footer .imp, footer .eyes, footer .mouth-open, footer .mouth-oo, footer .laptop-glow, footer .nose').css('transform', 'rotate(0deg)');
        }, 300);

        $('.laptop-glow').show();

        // Wait a second and return
        setTimeout(function(){

            $('.eyes').css('top', '-250px');

            setTimeout(function(){
                $('.nose').css('top', '-250px');
            }, 200);

            setTimeout(function(){
                $('.mouth-open').show();
                $('.mouth-oo').hide();
            }, 500);

            setTimeout(function(){
                $('.laptop-glow').hide();
            }, 500);
        }, 2000);


    });
}

function impWatch(){
    $('.faqs a').on('mouseenter', function(){

        if($('.eyes').css('top') == '-250px'){
            $('.eyes').animate({
                top: '-258px',
                left:'19px'
            }, "slow");
        }

    });

    $('.faqs a').on('mouseleave', function(){
        $('.eyes').animate({
            top: '-250px',
            left:'initial'
        }, "slow");
    });

}

function videoPlay(){
    $(document).on('click', '.video-control', function(){
        if($(this).hasClass('play')){
            $('.what video').get(0).play();
            $(this).removeClass('play').addClass('pause');
        } else {
            $('.what video').get(0).pause();
            $(this).removeClass('pause').addClass('play');
        }
    });
}

function setupTicker(){
    setTimeout(function(){
        highlight()
        setupTicker();
    }, 1300);

}

function highlight(){

    if($('.highlighted').length == 0){
        $('li.first').addClass('highlighted');
    } else{
        var highlightedElement = $('li.highlighted');
        highlightedElement.removeClass('highlighted');
        highlightedElement.next('li').addClass('highlighted');
    }


}


$(function(){

    menuFunctionality();
    sidebarFunctionality();

    impWatch();
    faqQuestionSetup();

    videoPlay();
    // setupTicker();

});