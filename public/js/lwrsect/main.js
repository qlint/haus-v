!function (e, a) {
    croppApp = {};
    var t = !1;
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && (t = !0), croppApp.init = function () {
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
        e(".prev").click(function () {
            a.prev()
        }), e(".next").click(function () {
            a.next()
        }), t || (e(".bg-image").on("mouseover", function () {
            TweenMax.to(this, .8, {
                scaleX: 1.02,
                scaleY: 1.02,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "100%"}, ease: Expo.easeOut})
        }).bind("mouseout", function () {
            TweenMax.to(this, .8, {
                scaleX: 1,
                scaleY: 1,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "0%"}, ease: Expo.easeOut})
        }), e(".social-item").on("mouseover", function () {
            TweenMax.to(e(this).find("svg"), 1, {
                scaleX: 1.2,
                scaleY: 1.2,
                rotation: 12,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "100%"}, ease: Expo.easeOut})
        }).bind("mouseout", function () {
            TweenMax.to(e(this).find("svg"), 1, {
                scaleX: 1,
                scaleY: 1,
                rotation: 0,
                ease: Expo.easeOut
            }), TweenMax.to(e(this).find(".box-overlay"), .6, {css: {width: "0%"}, ease: Expo.easeOut})
        }))
    }, croppApp.popupVideo = function () {
        e(".video-link").click(function (a) {
            a.preventDefault();
            var o = e(".video-link").data("webm"), i = e(".video-link").data("mp4"), s = '<div class="video-content"><div class="v-anim v-close"><i class="fa fa-times"></i></div><div class="v-anim v-control"><i class="fa fa-pause"></i></div><video id="video" autoplay><source src="' + i + '" type="video/mp4"><source src="' + o + '" type="video/webm"></video></div>';
            e("body").append(s), TweenMax.staggerFrom(".v-anim", 1, {
                y: "+=120",
                opacity: 0,
                ease: Expo.easeOut
            }, .22), e("html").css("overflow-y", "hidden");
            var n = document.getElementById("video");
            t && n.play(), e(".v-control").on("click", function () {
                n.paused ? (n.play(), e(".v-control").html('<i class="fa fa-pause"></i>')) : (n.pause(), e(".v-control").html('<i class="fa fa-play"></i>'))
            }), e(".v-close").on("click", function () {
                e(".video-content").remove(), e("html").css("overflow-y", "auto")
            })
        })
    }, croppApp.mainSlider = function () {
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
    }, croppApp.newsSlider = function () {
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
    }, croppApp.newsletter = function () {
        var a = e(".newsletter form"),
            t = e(".newsletter-btn"),
            form = e("#newsletterSignup"),
            send = function (t) {
            t.preventDefault();
            var o = e(".newsletter form #email").val(), i = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return i.test(o) ? (e(".newsletter form #email").removeClass("error"), void e.ajax({
                url: a.attr("action"),
                data: {email: o},
                dataType: "json",
                type: "POST",
                beforeSend: function(){
                    e('.newsletter-btn').addClass('loading');
                },
                success: function (a) {
                    1 == a.status ? (window.location.href = 'subscription') : (e(".newsletter_status").html('<span style="color:red;">' + a.message + "</span>"), e(".newsletter_status").slideDown("fast"))
                },
                complete: function () {
                    e('.newsletter-btn').removeClass('loading');
                    setTimeout(function () {
                        e(".newsletter_status").slideUp("fast"), e(".newsletter form #email").val("")
                    }, 3e3)
                }
            })) : (e(".newsletter form #email").addClass("error"), !1)
        };
        e(t).click(send);
        form.submit(send);
    }, e(document).ready(function () {
        e(".main-site-cropp").css("display", "block"), croppApp.mainSlider(), croppApp.newsSlider(), croppApp.popupVideo(), croppApp.newsletter(), croppApp.init()
    })
}(jQuery, window);

jQuery(window).load(function () {
    jQuery('#news-slider').find('.rsLink').each(function () {
        if (jQuery(this).attr('href') === 'http://www.cropp.com/pl/pl/news/cropp-5-plus') {
            jQuery(this).attr('href', 'http://www.cropp5plus.com/?utm_source=Cropp&utm_medium=bannerSG&utm_campaign=LPP_EB_2015');
            console.log(jQuery(this).attr('href'));
        }
    });
});

jQuery(document).ready(function () {
    if ($('#text-box-right').length) {
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





