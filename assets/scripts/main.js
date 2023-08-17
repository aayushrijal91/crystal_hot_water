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
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 6,
                                autoplay: true,
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 5,
                                autoplay: true,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 3,
                                autoplay: true,
                            }
                        }
                    ]
                });
                
                $(".accordion-head").on('click', function () {
                    $(".accordion-head").removeClass("active");
                    $(this).addClass('active');
                    
                    if ($('.accordion-body').is(':visible')) {
                        $(".accordion-body").slideUp(300);
                    }
                    if ($(this).next(".accordion-body").is(':visible')) {
                        $(this).next(".accordion-body").slideUp(300);
                    } else {
                        $(this).next(".accordion-body").slideDown(300);
                    }
                    
                    const openArrow = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none"><path d="M0.251953 0.606812L0.251953 7.82752L16.0733 19.4154L16.0733 12.1947L0.251953 0.606812Z" fill="#DD1E26" /><path d="M31.8945 0.606812L31.8945 7.82752L16.0732 19.4154L16.0732 12.1947L31.8945 0.606812Z" fill="#DD1E26" /></svg>';
                    const closedArrow = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none"><path d="M0.251953 19.2454L0.251953 12.0247L16.0733 0.43678L16.0733 7.65749L0.251953 19.2454Z" fill="white" /><path d="M31.8945 19.2454L31.8945 12.0247L16.0732 0.436778L16.0732 7.65749L31.8945 19.2454Z" fill="white" /></svg>';
                    
                    $(".accordion-head").find('.plusminus').html(openArrow);
                    $(".accordion-head.active").find('.plusminus').html(closedArrow);
                });

                $('#file_attachment').on('change', function () {
                    let file = $('#file_attachment').val();

                    if (file != "") {
                        let theSplit = file.split('\\');
                        let fileName = theSplit[theSplit.length - 1];
                        $('#file_attachment_label').html(fileName.substring(0, 50));
                    }
                });

                if($(window).width() < 540) {
                    $('#global_cta_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        autoplay: true,
                        centerMode: true,
                        centerPadding: "40px"
                    });

                    $('#form_cta_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        autoplay: true,
                    });
                }

                $("#open-slide-nav").on('click', function() {
                    $('.slide-nav').addClass('active');
                });

                $("#close-slidenav").on('click', function() {
                    $('.slide-nav').removeClass('active');
                });

                $('input[name="subcategory-checkbox"]').on('change', function() {
                    var selectedCategories = [];
                    $('input[name="subcategory-checkbox"]:checked').each(function() {
                        selectedCategories.push($(this).val());
                    });
            
                    $.ajax({
                        type: 'POST',
                        url: customAjax.ajaxurl,
                        data: {
                            action: 'filter_products',
                            categories: selectedCategories,
                        },
                        success: function(response) {
                            $('#filtered-products').html(response);
                        }
                    });
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});