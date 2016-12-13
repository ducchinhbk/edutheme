 
$(document).ready(function() {
    $("#key-point-slider").slick({
        lazyLoad: "ondemand",
        infinite: !0,
        dots: !0,
                touchMove: !0,
                infinite: !0,
                initialSlide: 0,
                speed: 300,
                prevArrow: !1,
                nextArrow: !1,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        infinite: !0
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        dots: !0
                    }
                }, {
                    breakpoint: 300,
                    settings: "unslick"
                }]
    });
    $("#course-testimonials").slick({
                lazyLoad: "ondemand",
                infinite: !1,
                dots: !0,
                touchMove: !0,
                infinite: !0,
                initialSlide: 0,
                speed: 300,
                prevArrow: !1,
                nextArrow: !1,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        infinite: !0
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        dots: !0
                    }
                }, {
                    breakpoint: 300,
                    settings: "unslick"
                }]
        });
        $(".slider").slick({
                lazyLoad: "ondemand",
                infinite: !1,
                rows: 2,
                dots: !0,
                touchMove: !0,
                infinite: !0,
                speed: 300,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        infinite: !0,
                        dots: !0,
                        prevArrow: !1,
                        nextArrow: !1
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: !0,
                        prevArrow: !1,
                        nextArrow: !1
                    }
                }, {
                    breakpoint: 300,
                    settings: "unslick"
                }]
        }); 
        $("#course-insights-from").slick({
                lazyLoad: "ondemand",
                autoplaySpeed: 4e3,
                useCSS: !0,
                autoplay: !0,
                dots: !0,
                touchMove: !0,
                infinite: !0,
                initialSlide: 1,
                speed: 300,
                prevArrow: !1,
                nextArrow: !1,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        infinite: !0,
                        dots: !0
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        dots: !0,
                        prevArrow: !1,
                        nextArrow: !1
                    }
                }, {
                    breakpoint: 300,
                    settings: "unslick"
                }]
    }); 
    $("#course-tools-like").slick({
                lazyLoad: "ondemand",
                autoplaySpeed: 4e3,
                useCSS: !0,
                autoplay: !0,
                touchMove: !0,
                infinite: !0,
                initialSlide: 1,
                speed: 300,
                dots: !0,
                prevArrow: !1,
                nextArrow: !1,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        infinite: !0,
                        dots: !0
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        dots: !0,
                        prevArrow: !1,
                        nextArrow: !1
                    }
                }, {
                    breakpoint: 300,
                    settings: "unslick"
                }]
    });
    $("#course-testimonials").slick({
        lazyLoad: "ondemand",
        infinite: !1,
        dots: !0,
        touchMove: !0,
        infinite: !0,
        initialSlide: 0,
        speed: 300,
        prevArrow: !1,
        nextArrow: !1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                infinite: !0
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                dots: !0
            }
        }, {
            breakpoint: 300,
            settings: "unslick"
        }]
    });
    $("#upgrad-blog-slider").slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });

   
    
});