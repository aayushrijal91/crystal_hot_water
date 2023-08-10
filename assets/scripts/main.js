// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                $('.brands_slider').slick({
                    slidesToShow: 11,
                    slidesToScroll: 1,
                    arrow: false,
                })
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});