import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const sliderTutors = document.querySelector(".tutors-slider");

    if (sliderTutors) {
        $(sliderTutors).slick({
            autoplay: false,
            mobileFirst: true,
            lazyLoad: "ondemand",
            dots: false,
            arrows: true,
            slidesToShow: 2.5,
            slidesToScroll: 1,
            speed: 400,
            cssEase: "linear",
            centerPadding: 0,
            nextArrow: $(".tutors-next-but"),
            prevArrow: $(".tutors-prev-but"),

            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.5,
                    },
                },
            ],
        });
    }

    const sliderReviews = document.querySelector(".reviews-slider");
    if (sliderReviews) {
        $(sliderReviews).slick({
            autoplay: false,
            mobileFirst: true,
            lazyLoad: "ondemand",
            dots: false,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 400,
            cssEase: "linear",
            centerPadding: 0,
            nextArrow: $(".reviews-next-but"),
        });
    }
});
