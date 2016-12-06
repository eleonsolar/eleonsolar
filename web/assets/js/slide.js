

    //SMOOTH SCROLL
    $('.sscroll').bind('click.smoothscroll', function(e) {
        e.preventDefault();
        dp('html,body').animate({
            scrollTop: dp(this.hash).offset().top
        }, 1200);
    });
    //BIG SLIDE
    $('#home-slide').superslides({
        animation: 'fade', // You can choose either fade or slide
        play: 6000,
        pagination: false
    });
    // TOOTLTIP
    $("[data-toggle='tooltip']").tooltip();
    //  Responsive layout, resizing the items
    if ($('.client-slider').length > 0) {
        $('.client-slider').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: 1,
            items: {
                width: 116,
                //  height: '30%',  //  optionally resize item-height
                visible: {
                    min: 1,
                    max: 5
                }
            }
        });
    }

    //BACK TO TOP
    //$("#backtotop").backToTop();
    //CALL TO ACTION
    /*
    var bg_img = dp(".call-ta").attr('data-background');
    dp(".call-ta").backstretch(bg_img);
    */
    //JQUERY Mobile Devices Responsive
    //$('body').mobileResponsive();

    //Bootstrap Tooltip
    $('a[data-toggle="tooltip"]').tooltip();


    $(window).load(function() {
        $('#loader').fadeOut(1000, "linear");
    });
