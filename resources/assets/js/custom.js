// Category drop down
$(document).ready(function() {
    $('.category-main').click(function() {
        $('.vert-category').slideToggle(300);
    });

    // Body scroll 0

});
// Initiliaze swiper
$(document).ready(function() {
     $('#logoText').hide();
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 3,
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('.header-bottom-content').addClass('sticky-header');
        $('.vert-category').hide('fast');
        $('.category-main').children().hide();
        $('#logoText').show();
    } else {
        $('.header-bottom-content').removeClass('sticky-header');
        $('.vert-category').show('fast');
        $('.category-main').children().show();
        $('#logoText').hide();
    }
});


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {    
        $('#top').fadeIn("fast");       
    } else {
        $('#top').fadeOut("fast");      
    }
});
$('#top').click(function() {            
    $('body,html').animate({
        scrollTop : 0                  
    }, 500);
});