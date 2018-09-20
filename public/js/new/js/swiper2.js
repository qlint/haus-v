jQuery(window).on("load", function () {
    jQuery('#croppPreloader').delay(1500).removeClass('isLoading');
    
    var sliderSwiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 50,
        autoplay: 3500,
        speed: 900,
        DisableOnInteraction: true,
        loop: true
    });

    var swiperWrapper = jQuery('#swiperContainer');
    swiperWrapper.hover(function () {
        sliderSwiper.stopAutoplay();
    }, function () {
        sliderSwiper.startAutoplay();
    });
});
