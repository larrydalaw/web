jQuery('document').ready(function () {
    jQuery("#content_fontsize,#template_postContentfontsizeInput,#template_titlefontsize,#template_postTitlefontsizeInput").slider({
        range: "min",
        value: 1,
        step: 1,
        min: 0,
        max: 100,
        slide: function (event, ui) {
            jQuery(this).closest('tr').find('input.range-slider__value').val(ui.value);
        }
    });

    var author_title_fontsize = jQuery('#content_fontsize').closest('tr').find('input.range-slider__value').val()
    jQuery("#content_fontsize").slider("value", author_title_fontsize);
    var author_title_fontsize = jQuery('#template_titlefontsize').closest('tr').find('input.range-slider__value').val()
    jQuery("#template_titlefontsize").slider("value", author_title_fontsize);

    jQuery(".range-slider__value").change(function () {
        var value = this.value;
        var max = 100;
        if (value > max) {
            jQuery(this).parent().parent().find('.range_slider_fontsize').slider("value", '100');
            jQuery(this).val('100');
        } else {
            jQuery(this).parent().parent().find('.range_slider_fontsize').slider("value", parseInt(value));
        }
    });
    var post_title_fontsize = jQuery('#template_postContentfontsizeInput').closest('tr').find('input.range-slider__value').val()
    jQuery("#template_postContentfontsizeInput").slider("value", post_title_fontsize);
    var post_title_fontsize = jQuery('#template_postTitlefontsizeInput').closest('tr').find('input.range-slider__value').val()
    jQuery("#template_postTitlefontsizeInput").slider("value", post_title_fontsize);

    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function () {
        var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

        btnUp.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

    });

    jQuery('#template_ftcolor,#template_bgcolor,#template_alterbgcolor,#template_titlecolor,#template_titlebackcolor,#template_contentcolor,#template_readmorecolor,#template_readmorebackcolor,#template_color').wpColorPicker();

    if (jQuery("input[name='rss_use_excerpt']:checked").val() == 1) {
        jQuery('tr.excerpt_length').show();
        jQuery('tr.read_more_text').show();
        jQuery('tr.read_more_text_color').show();
        jQuery('tr.read_more_text_background').show();
    } else {
        jQuery('tr.excerpt_length').hide();
        jQuery('tr.read_more_text').hide();
        jQuery('tr.read_more_text_color').hide();
        jQuery('tr.read_more_text_background').hide();
    }


    jQuery("input[name='template_alternativebackground']").change(function () {
        if (jQuery(this).val() == 0) {
            jQuery('.alternative-color-tr').show();
        } else {
            jQuery('.alternative-color-tr').hide();
        }
    });

    if (jQuery('#template_name').val() == 'classical' || jQuery('#template_name').val() == 'spektrum' || jQuery('#template_name').val() == 'timeline' || jQuery('#template_name').val() == 'news') {
        jQuery('tr.blog-template-tr').hide();
        jQuery('tr.alternative-color-tr').hide();
    } else {
        jQuery('tr.blog-template-tr').show();
        if (jQuery("input[name='template_alternativebackground']:checked").val() == 0) {
            jQuery('.alternative-color-tr').show();
        } else {
            jQuery('.alternative-color-tr').hide();
        }
    }
    if (jQuery('#template_name').val() == 'timeline') {
        jQuery('tr.blog-template-tr').hide();
        jQuery('tr.alternative-color-tr').hide();
        jQuery('tr.blog-templatecolor-tr').show();
    } else {
        jQuery('tr.blog-templatecolor-tr').hide();
    }

    jQuery('#template_name').change(function () {
        if (jQuery(this).val() == 'classical' || jQuery(this).val() == 'spektrum' || jQuery(this).val() == 'news') {
            jQuery('tr.blog-template-tr').hide();
            jQuery('tr.alternative-color-tr').hide();
        } else {
            jQuery('tr.blog-template-tr').show();
            if (jQuery("input[name='template_alternativebackground']:checked").val() == 0) {
                jQuery('.alternative-color-tr').show();
            } else {
                jQuery('.alternative-color-tr').hide();
            }
        }
        if (jQuery('#template_name').val() == 'timeline') {
            jQuery('tr.blog-template-tr').hide();
            jQuery('tr.alternative-color-tr').hide();
            jQuery('tr.blog-templatecolor-tr').show();
        } else {
            jQuery('tr.blog-templatecolor-tr').hide();
        }
        var template = jQuery(this).val();
        default_data(template);
        if (jQuery("input[name='template_alternativebackground']:checked").val() == 0) {
            jQuery('.alternative-color-tr').show();
        } else {
            jQuery('.alternative-color-tr').hide();
        }
    });

    jQuery("input[name='rss_use_excerpt']").change(function () {

        if (jQuery(this).val() == 1) {
            jQuery('tr.excerpt_length').show();
            jQuery('tr.read_more_text').show();
            jQuery('tr.read_more_text_color').show();
            jQuery('tr.read_more_text_background').show();
        } else {
            jQuery('tr.excerpt_length').hide();
            jQuery('tr.read_more_text').hide();
            jQuery('tr.read_more_text_color').hide();
            jQuery('tr.read_more_text_background').hide();
        }
    });

    jQuery('link').each(function () {
        var href = jQuery(this).attr('href');
        if (href.search('jquery-ui.css') !== -1 || href.search('jquery-ui.min.css') !== -1) {
            jQuery(this).remove('link');
        }
    });

    jQuery('.bd_theme_plugin li a').click(function (e) {
        e.preventDefault();
        jQuery('.bd_theme_plugin li').removeClass('active');
        var $name = jQuery(this).attr('data-toggle');
        jQuery(this).parent('li').addClass('active');
        jQuery('.bd-out-other-work .bd-info-content > div').hide();
        jQuery('#' + $name).show();
    });

    /*Set Default value for each template*/
    jQuery('.bd-form-class .bdp-restore-default').click(function () {
        if (confirm(bdlite_js.reset_data)) {
            var template = jQuery('#template_name').val();
            default_data(template);
            jQuery('form.bd-form-class')[0].submit();
        } else {
            return false;
        }
    });

});

jQuery(window).load(function () {
    jQuery('#subscribe_thickbox').trigger('click');
    jQuery("#TB_closeWindowButton").click(function () {
        jQuery.post(ajaxurl,
                {
                    'action': 'close_tab'
                });
    });
});



jQuery('.bd-form-class .bd-setting-handle > li').click(function (event) {
    var section = jQuery(this).data('show');
    jQuery('.bd-form-class .bd-setting-handle > li').removeClass('bd-active-tab');
    jQuery(this).addClass('bd-active-tab');
    jQuery('.bd-settings-wrappers .postbox').hide();
    jQuery('#' + section).show();
    jQuery.post(ajaxurl, {
        action: 'bd_closed_bdboxes',
        closed: section,
        page: 'designer_settings'
    });
});

jQuery(document).ready(function () {
    var config = {
        '.chosen-select': {},
        '.chosen-select-deselect': {allow_single_deselect: true},
        '.chosen-select-no-single': {disable_search_threshold: 10},
        '.chosen-select-no-results': {no_results_text: bdlite_js.nothing_found},
        '.chosen-select-width': {width: "95%"}
    }
    for (var selector in config) {
        jQuery(selector).chosen(config[selector]);
    }

    jQuery('.select-cover select').chosen({no_results_text: bdlite_js.nothing_found});

    jQuery('.buttonset').buttonset();
    jQuery("#bd-submit-button").click(function () {
        jQuery(".save_blogdesign").trigger("click");
    });
    jQuery(".bd-settings-wrappers .postbox table tr td:first-child").hover(function () {
        var $parent_height = jQuery(this).height();
        var $height = jQuery(this).children('.bd-title-tooltip').height();
        jQuery(this).children('.bd-title-tooltip').css('top', -$height);
    });
    jQuery('#blog_page_display').change(function () {
        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'bd_get_page_link',
                page_id: jQuery(this).val(),
            },
            success: function (response) {
                jQuery('.page_link').html('');
                jQuery('.page_link').append(response);
            }
        });
    });
});

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function default_data(template) {
    if (template == 'classical') {
        jQuery("#display_sticky_0").prop("checked", false);
        jQuery("#display_sticky_1").prop("checked", true);
        jQuery("#display_category_0").prop("checked", true);
        jQuery("#display_category_1").prop("checked", false);
        jQuery("#display_tag_0").prop("checked", true);
        jQuery("#display_tag_1").prop("checked", false);
        jQuery("#display_author_0").prop("checked", true);
        jQuery("#display_author_1").prop("checked", false);
        jQuery("#display_date_0").prop("checked", true);
        jQuery("#display_date_1").prop("checked", false);
        jQuery("#display_comment_count_0").prop("checked", true);
        jQuery("#display_comment_count_1").prop("checked", false);
        jQuery('#template_ftcolor').iris('color', '#2a97ea');
        jQuery('#template_titlecolor').iris('color', '#222222');
        jQuery("#template_titlefontsize").val("30");
        jQuery("#rss_use_excerpt_0").prop("checked", false);
        jQuery("#rss_use_excerpt_1").prop("checked", true);
        jQuery("#txtExcerptlength").val("50");
        jQuery("#content_fontsize").val("14");
        jQuery("#posts_per_page").val("5");
        jQuery('#template_contentcolor').iris('color', '#999999');
        jQuery('#txtReadmoretext').val('Read More');
        jQuery('#template_readmorecolor').iris('color', '#cecece');
        jQuery('#template_readmorebackcolor').iris('color', '#2e93ea');
        jQuery("#social_icon_style_1").prop("checked", true);
        jQuery("#social_icon_style_0").prop("checked", false);
        jQuery("#facebook_link_0").prop("checked", true);
        jQuery("#facebook_link_1").prop("checked", false);
        jQuery("#twitter_link_0").prop("checked", true);
        jQuery("#twitter_link_1").prop("checked", false);
        jQuery("#google_link_0").prop("checked", true);
        jQuery("#google_link_1").prop("checked", false);
        jQuery("#linkedin_link_0").prop("checked", true);
        jQuery("#linkedin_link_1").prop("checked", false);
        jQuery("#pinterest_link_0").prop("checked", true);
        jQuery("#pinterest_link_1").prop("checked", false);
        jQuery("#instagram_link_0").prop("checked", true);
        jQuery("#instagram_link_1").prop("checked", false);
        jQuery('.buttonset').buttonset();
    }
    if (template == 'lightbreeze') {
        jQuery("#display_sticky_0").prop("checked", false);
        jQuery("#display_sticky_1").prop("checked", true);
        jQuery("#display_category_0").prop("checked", true);
        jQuery("#display_category_1").prop("checked", false);
        jQuery("#display_tag_0").prop("checked", true);
        jQuery("#display_tag_1").prop("checked", false);
        jQuery("#display_author_0").prop("checked", true);
        jQuery("#display_author_1").prop("checked", false);
        jQuery("#display_date_0").prop("checked", true);
        jQuery("#display_date_1").prop("checked", false);
        jQuery("#display_comment_count_0").prop("checked", true);
        jQuery("#display_comment_count_1").prop("checked", false);
        jQuery('#template_bgcolor').iris('color', '#ffffff');
        jQuery("#template_alternativebackground_0").prop("checked", false);
        jQuery("#template_alternativebackground_1").prop("checked", true);
        jQuery('#template_ftcolor').iris('color', '#1eafa6');
        jQuery('#template_titlecolor').iris('color', '#222222');
        jQuery("#template_titlefontsize").val("30");
        jQuery("#rss_use_excerpt_0").prop("checked", false);
        jQuery("#rss_use_excerpt_1").prop("checked", true);
        jQuery("#txtExcerptlength").val("50");
        jQuery("#content_fontsize").val("14");
        jQuery("#posts_per_page").val("5");
        jQuery('#template_contentcolor').iris('color', '#999999');
        jQuery('#txtReadmoretext').val('Continue Reading');
        jQuery('#template_readmorecolor').iris('color', '#f1f1f1');
        jQuery('#template_readmorebackcolor').iris('color', '#1eafa6');
        jQuery("#social_icon_style_1").prop("checked", false);
        jQuery("#social_icon_style_0").prop("checked", true);
        jQuery("#facebook_link_0").prop("checked", true);
        jQuery("#facebook_link_1").prop("checked", false);
        jQuery("#twitter_link_0").prop("checked", true);
        jQuery("#twitter_link_1").prop("checked", false);
        jQuery("#google_link_0").prop("checked", true);
        jQuery("#google_link_1").prop("checked", false);
        jQuery("#linkedin_link_0").prop("checked", true);
        jQuery("#linkedin_link_1").prop("checked", false);
        jQuery("#pinterest_link_0").prop("checked", true);
        jQuery("#pinterest_link_1").prop("checked", false);
        jQuery("#instagram_link_0").prop("checked", true);
        jQuery("#instagram_link_1").prop("checked", false);
        jQuery('.buttonset').buttonset();
    }
    if (template == 'spektrum') {
        jQuery("#display_sticky_0").prop("checked", false);
        jQuery("#display_sticky_1").prop("checked", true);
        jQuery("#display_category_0").prop("checked", true);
        jQuery("#display_category_1").prop("checked", false);
        jQuery("#display_tag_0").prop("checked", true);
        jQuery("#display_tag_1").prop("checked", false);
        jQuery("#display_author_0").prop("checked", true);
        jQuery("#display_author_1").prop("checked", false);
        jQuery("#display_date_0").prop("checked", true);
        jQuery("#display_date_1").prop("checked", false);
        jQuery("#display_comment_count_0").prop("checked", true);
        jQuery("#display_comment_count_1").prop("checked", false);
        jQuery('#template_ftcolor').iris('color', '#2d7fc1');
        jQuery('#template_titlecolor').iris('color', '#2d7fc1');
        jQuery("#template_titlefontsize").val("30");
        jQuery("#rss_use_excerpt_0").prop("checked", false);
        jQuery("#rss_use_excerpt_1").prop("checked", true);
        jQuery("#txtExcerptlength").val("50");
        jQuery("#content_fontsize").val("14");
        jQuery("#posts_per_page").val("5");
        jQuery('#template_contentcolor').iris('color', '#444');
        jQuery('#txtReadmoretext').val('Go ahead');
        jQuery('#template_readmorecolor').iris('color', '#eaeaea');
        jQuery('#template_readmorebackcolor').iris('color', '#2d7fc1');
        jQuery("#social_icon_style_1").prop("checked", true);
        jQuery("#social_icon_style_0").prop("checked", false);
        jQuery("#facebook_link_0").prop("checked", true);
        jQuery("#facebook_link_1").prop("checked", false);
        jQuery("#twitter_link_0").prop("checked", true);
        jQuery("#twitter_link_1").prop("checked", false);
        jQuery("#google_link_0").prop("checked", true);
        jQuery("#google_link_1").prop("checked", false);
        jQuery("#linkedin_link_0").prop("checked", true);
        jQuery("#linkedin_link_1").prop("checked", false);
        jQuery("#pinterest_link_0").prop("checked", true);
        jQuery("#pinterest_link_1").prop("checked", false);
        jQuery("#instagram_link_0").prop("checked", true);
        jQuery("#instagram_link_1").prop("checked", false);
        jQuery('.buttonset').buttonset();
    }
    if (template == 'evolution') {
        jQuery("#display_sticky_0").prop("checked", false);
        jQuery("#display_sticky_1").prop("checked", true);
        jQuery("#display_category_0").prop("checked", true);
        jQuery("#display_category_1").prop("checked", false);
        jQuery("#display_tag_0").prop("checked", true);
        jQuery("#display_tag_1").prop("checked", false);
        jQuery("#display_author_0").prop("checked", true);
        jQuery("#display_author_1").prop("checked", false);
        jQuery("#display_date_0").prop("checked", true);
        jQuery("#display_date_1").prop("checked", false);
        jQuery("#display_comment_count_0").prop("checked", true);
        jQuery("#display_comment_count_1").prop("checked", false);
        jQuery('#template_bgcolor').iris('color', '#ffffff');
        jQuery("#template_alternativebackground_0").prop("checked", false);
        jQuery("#template_alternativebackground_1").prop("checked", true);
        jQuery('#template_ftcolor').iris('color', '#2eba89');
        jQuery('#template_titlecolor').iris('color', '#222');
        jQuery("#template_titlefontsize").val("30");
        jQuery("#rss_use_excerpt_0").prop("checked", false);
        jQuery("#rss_use_excerpt_1").prop("checked", true);
        jQuery("#txtExcerptlength").val("50");
        jQuery("#content_fontsize").val("14");
        jQuery("#posts_per_page").val("5");
        jQuery('#template_contentcolor').iris('color', '#444444');
        jQuery('#txtReadmoretext').val('Keep Reading');
        jQuery('#template_readmorecolor').iris('color', '#2eba89');
        jQuery('#template_readmorebackcolor').iris('color', '#f1f1f1');
        jQuery("#social_icon_style_1").prop("checked", true);
        jQuery("#social_icon_style_0").prop("checked", false);
        jQuery("#facebook_link_0").prop("checked", true);
        jQuery("#facebook_link_1").prop("checked", false);
        jQuery("#twitter_link_0").prop("checked", true);
        jQuery("#twitter_link_1").prop("checked", false);
        jQuery("#google_link_0").prop("checked", true);
        jQuery("#google_link_1").prop("checked", false);
        jQuery("#linkedin_link_0").prop("checked", true);
        jQuery("#linkedin_link_1").prop("checked", false);
        jQuery("#pinterest_link_0").prop("checked", true);
        jQuery("#pinterest_link_1").prop("checked", false);
        jQuery("#instagram_link_0").prop("checked", true);
        jQuery("#instagram_link_1").prop("checked", false);
        jQuery('.buttonset').buttonset();
    }
    if (template == 'timeline') {
        jQuery("#display_sticky_0").prop("checked", false);
        jQuery("#display_sticky_1").prop("checked", true);
        jQuery("#display_category_0").prop("checked", true);
        jQuery("#display_category_1").prop("checked", false);
        jQuery("#display_tag_0").prop("checked", true);
        jQuery("#display_tag_1").prop("checked", false);
        jQuery("#display_author_0").prop("checked", true);
        jQuery("#display_author_1").prop("checked", false);
        jQuery("#display_date_0").prop("checked", true);
        jQuery("#display_date_1").prop("checked", false);
        jQuery("#display_comment_count_0").prop("checked", true);
        jQuery("#display_comment_count_1").prop("checked", false);
        jQuery('#template_color').iris('color', '#db4c59');
        jQuery('#template_ftcolor').iris('color', '#db4c59');
        jQuery('#template_titlecolor').iris('color', '#222');
        jQuery("#template_titlefontsize").val("30");
        jQuery("#rss_use_excerpt_0").prop("checked", false);
        jQuery("#rss_use_excerpt_1").prop("checked", true);
        jQuery("#txtExcerptlength").val("50");
        jQuery("#content_fontsize").val("14");
        jQuery("#posts_per_page").val("5");
        jQuery('#template_contentcolor').iris('color', '#444');
        jQuery('#txtReadmoretext').val('Read More');
        jQuery('#template_readmorecolor').iris('color', '#db4c59');
        jQuery('#template_readmorebackcolor').iris('color', '#f1f1f1');
        jQuery("#social_icon_style_1").prop("checked", false);
        jQuery("#social_icon_style_0").prop("checked", true);
        jQuery("#facebook_link_0").prop("checked", true);
        jQuery("#facebook_link_1").prop("checked", false);
        jQuery("#twitter_link_0").prop("checked", true);
        jQuery("#twitter_link_1").prop("checked", false);
        jQuery("#google_link_0").prop("checked", true);
        jQuery("#google_link_1").prop("checked", false);
        jQuery("#linkedin_link_0").prop("checked", true);
        jQuery("#linkedin_link_1").prop("checked", false);
        jQuery("#pinterest_link_0").prop("checked", true);
        jQuery("#pinterest_link_1").prop("checked", false);
        jQuery("#instagram_link_0").prop("checked", true);
        jQuery("#instagram_link_1").prop("checked", false);
        jQuery('.buttonset').buttonset();
    }
    if (template == 'news') {
        jQuery("#display_sticky_0").prop("checked", false);
        jQuery("#display_sticky_1").prop("checked", true);
        jQuery("#display_category_0").prop("checked", true);
        jQuery("#display_category_1").prop("checked", false);
        jQuery("#display_tag_0").prop("checked", true);
        jQuery("#display_tag_1").prop("checked", false);
        jQuery("#display_author_0").prop("checked", true);
        jQuery("#display_author_1").prop("checked", false);
        jQuery("#display_date_0").prop("checked", true);
        jQuery("#display_date_1").prop("checked", false);
        jQuery("#display_comment_count_0").prop("checked", true);
        jQuery("#display_comment_count_1").prop("checked", false);
        jQuery('#template_bgcolor').iris('color', '#ffffff');
        jQuery("#template_alternativebackground_0").prop("checked", false);
        jQuery("#template_alternativebackground_1").prop("checked", true);
        jQuery('#template_ftcolor').iris('color', '#e84059');
        jQuery('#template_titlecolor').iris('color', '#333333');
        jQuery("#template_titlefontsize").val("30");
        jQuery("#rss_use_excerpt_0").prop("checked", false);
        jQuery("#rss_use_excerpt_1").prop("checked", true);
        jQuery("#txtExcerptlength").val("20");
        jQuery("#content_fontsize").val("14");
        jQuery("#posts_per_page").val("5");
        jQuery('#template_contentcolor').iris('color', '#444444');
        jQuery('#txtReadmoretext').val('Continue Reading');
        jQuery('#template_readmorecolor').iris('color', '#e84059');
        jQuery('#template_readmorebackcolor').iris('color', '#f1f1f1');
        jQuery("#social_icon_style_1").prop("checked", true);
        jQuery("#social_icon_style_0").prop("checked", false);
        jQuery("#facebook_link_0").prop("checked", true);
        jQuery("#facebook_link_1").prop("checked", false);
        jQuery("#twitter_link_0").prop("checked", true);
        jQuery("#twitter_link_1").prop("checked", false);
        jQuery("#google_link_0").prop("checked", true);
        jQuery("#google_link_1").prop("checked", false);
        jQuery("#linkedin_link_0").prop("checked", true);
        jQuery("#linkedin_link_1").prop("checked", false);
        jQuery("#pinterest_link_0").prop("checked", true);
        jQuery("#pinterest_link_1").prop("checked", false);
        jQuery("#instagram_link_0").prop("checked", true);
        jQuery("#instagram_link_1").prop("checked", false);
        jQuery('.buttonset').buttonset();
    }
    jQuery('.chosen-select option').prop('selected', false).trigger('chosen:updated');
}