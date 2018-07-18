!function(e, a) {
    croppApp = {};
    var t = !1;
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && (t = !0), croppApp.init = function() {
        t || (TweenMax.staggerFrom(".anim1", 1, {
            y: "+=80",
            opacity: 0,
            ease: Expo.easeOut
        }, .12), TweenMax.staggerFrom(".news-box .rsSlide", 1, {
            y: "+=80",
            opacity: 0,
            ease: Expo.easeOut,
            delay: 1
        }, .22), TweenMax.staggerFrom(".news-box .prev, .news-box .next", 1, {
            y: "+=80",
            opacity: 0,
            ease: Expo.easeOut,
            delay: 1.2
        }, .12), TweenMax.staggerFrom(".anim3", 1, {
            y: "+=80",
            opacity: 0,
            ease: Expo.easeOut,
            delay: 1.4
        }, .22)), TweenMax.to(".plane", 40, {x: -1e3, y: 600, delay: 1.8});
        var a = e("#news-slider").data("royalSlider");
        e(".prev").click(function() {
            a.prev()
        }), e(".next").click(function() {
            a.next()
        }), t || (e(".bg-image").on("mouseover", function() {
            TweenMax.to(this, .8, {
                scaleX: 1.02,
                scaleY: 1.02,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "100%"}, ease: Expo.easeOut})
        }).bind("mouseout", function() {
            TweenMax.to(this, .8, {
                scaleX: 1,
                scaleY: 1,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "0%"}, ease: Expo.easeOut})
        }), e(".social-item").on("mouseover", function() {
            TweenMax.to(e(this).find("svg"), 1, {
                scaleX: 1.2,
                scaleY: 1.2,
                rotation: 12,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "100%"}, ease: Expo.easeOut})
        }).bind("mouseout", function() {
            TweenMax.to(e(this).find("svg"), 1, {
                scaleX: 1,
                scaleY: 1,
                rotation: 0,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "0%"}, ease: Expo.easeOut})
        }))
    },

        croppApp.mainSlider = function() {
        e("#main-slider").royalSlider({
            arrowsNav: !0,
            loop: !0,
            keyboardNavEnabled: !0,
            controlsInside: !0,
            imageScaleMode: "fill",
            arrowsNavAutoHide: !1,
            controlNavigation: "bullets",
            startSlideId: 0,
            autoPlay: {
                enabled: true
            },
            transitionType: "move",
            globalCaption: !1,
            imgWidth: 1400,
            imgHeight: 680
        })
    }, croppApp.newsSlider = function() {
        e("#news-slider").royalSlider({
            addActiveClass: !0,
            imageScaleMode: "fill",
            arrowsNav: !1,
            controlNavigation: "none",
            autoScaleSlider: !0,
            autoScaleSliderHeight: 390,
            autoScaleSliderWidth: 1200,
            loop: !0,
            fadeinLoadedSlide: !1,
            globalCaption: !0,
            keyboardNavEnabled: !0,
            globalCaptionInside: !1,
            visibleNearby: {
                enabled: !0,
                centerArea: .33,
                center: !0,
                breakpoint: 600,
                breakpointCenterArea: .4,
                navigateByCenterClick: !0
            }
        }).data("royalSlider")
    }, croppApp.newsletter = function() {
        var a = e(".newsletter form"), t = e(".newsletter-btn");
        e(t).click(function(t) {
            t.preventDefault();
            var o = e(".newsletter form #email").val(), i = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return i.test(o) ? (e(".newsletter form #email").removeClass("error"), void e.ajax({
                    url: a.attr("action"),
                    data: {email: o},
                    dataType: "json",
                    type: "POST",
                    beforeSend: function() {
                        "use strict";
                        a.find('[name="email"], .newsletter-btn').attr('disabled', true);
                    },
                    success: function(response) {
                        if (response && response.url) {
                            window.location.href = response.url;
                        }
                    },
                    complete: function() {
                        a.find('[name="email"], .newsletter-btn').attr('disabled', false);
                        setTimeout(function() {
                            e(".newsletter_status").slideUp("fast"), e(".newsletter form #email").val("")
                        }, 3e3);
                    }
                })) : (e(".newsletter form #email").addClass("error"), !1)
        })
    }, e(document).ready(function() {
        e(".main-site-cropp").css("display", "block"), croppApp.mainSlider(), croppApp.newsSlider(), croppApp.newsletter(), croppApp.init()
    })
}(jQuery, window);

jQuery(document).ready(function(){
    if($('#text-box-right').length) {
        for (var i = 35; i > 0; i--) {
            $('<div class="div-margins"/>').css({
                height: 10,
                width: (2 * i),
                float: 'left',
                clear: 'left'
            }).prependTo($('#text-box-right'))
        }
    }
});


jQuery(document).on('opened', '.remodal', function () {
    var videoModal = document.getElementById('home-video');
    if (videoModal.classList.contains('remodal-is-opened')) {
        var video = document.getElementById('video');
        var icon = document.getElementById('home-video').querySelector('.v-control');

        video.play();

        if (video.paused) {
            icon.innerHTML = '<i class="fa fa-play"></i>';
        } else {
            icon.innerHTML = '<i class="fa fa-pause"></i>';
        }

        icon.querySelector('i').addEventListener('click', function() {
            if (this.classList.contains('fa-pause')) {
                video.pause();
                this.classList.remove('fa-pause');
                this.classList.add('fa-play');
            } else if (this.classList.contains('fa-play')) {
                video.play();
                this.classList.remove('fa-play');
                this.classList.add('fa-pause');
            }
        });
    }
});

jQuery(document).on('closed', '.remodal', function (e) {
    document.getElementById('video').pause();
});