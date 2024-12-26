(function(window, $) {

    // USE STRICT
    "use strict";

    // searchable dropdown select
    $('div.wbg-search-item select.wbg-selectize').selectize();

    var wbgSingleModal = document.getElementById('wbg-single-modal-id');
    var wbgSelectSort = document.getElementById('wbg-select-sort');
    var wbgSlide = document.getElementById('wbg-view-slide-id');
    var wbgWidget = document.getElementById('wbg-view-widget-id');

    if (wbgSingleModal != null) {
        $(".wbg-single-modal").iziModal({
            width: parseInt(wbgAdminScriptObj.modalWidth),
            iframeHeight: 400,
            height: 300,
        });

        $(document).on('click', 'h3.wgb-item-link', function(event) {
            event.preventDefault();
            $.ajax({
                url: wbgAdminScriptObj.ajaxurl,
                type: "POST",
                data: {
                    action: 'single_modal',
                    postId: $(this).data('post_id'),
                },
                success: function(data) {
                    $('.iziModal-content').html(data);
                    $('.wbg-single-modal').iziModal('open');
                    $('.iziModal-wrap').css('height', '300px !important');
                }
            });
        });
    }

    var wbgurl = new URL(window.location.href);
    var wbgparams = '';

    if (wbgSlide != null) {
        var slides_to_show = $('#wbg-view-slide-id').data("slides");
        $('.wbg-view-slide').slick({
            speed: 300,
            slidesToShow: slides_to_show,
            slidesToScroll: 1,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 3000,
            cssEase: 'ease',
            dots: false,
            dotsClass: 'slick-dots',
            pauseOnHover: true,
            arrows: true,
            prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
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
            ],
        });
    }

    if (wbgWidget != null) {
        $(wbgWidget).slick({
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 3000,
            cssEase: 'ease',
            dots: false,
            dotsClass: 'slick-dots',
            pauseOnHover: true,
            arrows: false,
            prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
        });
    }

    if (wbgSelectSort != null) {
        $('select#wbg-select-sort').on('change', function() {
            if ($(this).val() === '') {
                wbgurl.searchParams.set('orderby', 'default');
            }
            if ($(this).val() === 'date') {
                wbgurl.searchParams.set('orderby', 'date');
            }
            if ($(this).val() === 'price-low') {
                wbgurl.searchParams.set('orderby', 'price');
            }
            if ($(this).val() === 'price-high') {
                wbgurl.searchParams.set('orderby', 'price-desc');
            }
            window.location.href = wbgurl.href;
        });
    }

    $(document).on('click', '.wbg-item-sorting .select-column .wbg-select-view span.view', function(event) {
        event.preventDefault();
        var url = new URL(window.location.href);
        var urlParam = $(this).data('view_type');
        url.searchParams.set('layout', urlParam);
        window.location.href = url.href;
    });

})(window, jQuery);