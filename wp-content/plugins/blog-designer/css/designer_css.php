<?php
header("Content-type: text/css");
include( '../../../../wp-load.php' );
$settings = get_option("wp_blog_designer_settings");
$background = (isset($settings['template_bgcolor']) && $settings['template_bgcolor'] != '') ? $settings['template_bgcolor'] : "";
$templatecolor = (isset($settings['template_color']) && $settings['template_color'] != '') ? $settings['template_color'] : "";
$color = (isset($settings['template_ftcolor']) && $settings['template_ftcolor'] != '') ? $settings['template_ftcolor'] : "";
$titlecolor = (isset($settings['template_titlecolor']) && $settings['template_titlecolor'] != '') ? $settings['template_titlecolor'] : "";
$contentcolor = (isset($settings['template_contentcolor']) && $settings['template_contentcolor'] != '') ? $settings['template_contentcolor'] : "";
$readmorecolor = (isset($settings['template_readmorecolor']) && $settings['template_readmorecolor'] != '') ? $settings['template_readmorecolor'] : "";
$readmorebackcolor = (isset($settings['template_readmorebackcolor']) && $settings['template_readmorebackcolor'] != '') ? $settings['template_readmorebackcolor'] : "";
$alterbackground = (isset($settings['template_alterbgcolor']) && $settings['template_alterbgcolor'] != '') ? $settings['template_alterbgcolor'] : "";
$titlebackcolor = (isset($settings['template_titlebackcolor']) && $settings['template_titlebackcolor'] != '') ? $settings['template_titlebackcolor'] : "";
$social_icon_style = get_option('social_icon_style');
$template_alternativebackground = get_option('template_alternativebackground');
$template_titlefontsize = get_option('template_titlefontsize');
$content_fontsize = get_option('content_fontsize');
$custom_css = get_option('custom_css');
?>

<style type="text/css">

    /**
     * Table of Contents
     *
     * 1.0 - Pagination
     * 2.0 - Social Media Icon
     * 3.0 - Default Blog Template
     * 4.0 - Classical Template
     * 5.0 - Light Breeze Template
     * 6.0 - Spektrum Template
     * 7.0 - Evolution Template
     * 8.0 - Timeline Template
     * 9.0 - News Template
     * 10.0 - Media Queries
     *
     */

    /**
     * 1.0 - Pagination
     */

    .wl_pagination_box {
        margin-bottom: 20px;
        float: left;
        width: 100%;
    }
    .wl_pagination_box.news{
        padding: 10px;
    }
    .wl_pagination_box .paging-navigation ul.page-numbers,
    .wl_pagination_box .paging-navigation{
        margin: 0;
        padding: 0;
    }
    .wl_pagination_box .paging-navigation ul.page-numbers li {
        display: inline-block;
        list-style: outside none none;
        margin-bottom: 10px;
    }
    .wl_pagination_box .paging-navigation ul.page-numbers li a.page-numbers:hover,
    .wl_pagination_box .paging-navigation ul.page-numbers li > span.current {
        <?php echo ($readmorebackcolor != '') ? 'color: ' . $readmorebackcolor . ';' : ''; ?>
        <?php echo ($readmorecolor != '') ? 'background: ' . $readmorecolor . ';' : ''; ?>
    }
    .wl_pagination_box .paging-navigation ul.page-numbers li span.current{
        padding: 5px 10px;
    }
    .wl_pagination_box .paging-navigation ul.page-numbers li a.page-numbers {
        <?php echo ($readmorebackcolor != '') ? 'background: ' . $readmorebackcolor . ';' : ''; ?>
        <?php echo ($readmorecolor != '') ? 'color: ' . $readmorecolor . ';' : ''; ?>
        text-decoration: none !important;
        padding: 5px 10px;
        box-shadow: none;
    }

    /**
     * 2.0 - Social Media Icon
     */
    .bdp_blog_template .social-component {
        clear: left;
        display: inline-block;
    }

    .bdp_blog_template.box-template .social-component {
        display: inline-block;
        width:100%;
    }

    .bdp_blog_template.timeline .social-component {
        box-sizing: border-box;
        float: left;
        margin-bottom: 0;
        width: 100%;
        display:inline-block;
    }

    .bdp_blog_template .social-component a {
        border: 1px solid #cccccc;
        float: left;
        margin-top: 8px;
        margin-right: 8px;
        padding: 8px 0;
        text-align: center;
        width: 38px;
        font-size: 15px;
        line-height:20px;
        box-shadow: none;
        <?php
        if ($social_icon_style == 0) {
            echo "border-radius: 100%;";
        }
        ?>
    }

    .bdp_blog_template.timeline .social-component a {
        padding: 5px 0;
        width: 30px;
    }

    .social-component a.facebook-share:hover {
        background: none repeat scroll 0 0 #3a589d;
        border-color: #3a589d;
        color: #fff;
    }

    .social-component a.twitter:hover {
        background: none repeat scroll 0 0 #2478ba;
        border-color: #2478ba;
        color: #fff;
    }

    .social-component a.google:hover {
        background: none repeat scroll 0 0 #dd4e31;
        border-color: #dd4e31;
        color: #fff;
    }

    .social-component a.linkedin:hover {
        background: none repeat scroll 0 0 #cb2320;
        border-color: #cb2320;
        color: #fff;
    }

    .social-component a.instagram:hover {
        background: none repeat scroll 0 0 #111111;
        border-color: #111111;
        color: #fff;
    }

    .social-component a.pinterest:hover {
        background: none repeat scroll 0 0 #cb2320;
        border-color: #cb2320;
        color: #fff;
    }

    /**
     * 3.0 - Default Blog Template
     */
    .bdp_blog_template {
        float: left;
        width: 100%;
        margin-bottom: 40px;
    }

    .bdp_blog_template .meta_data_box {
        float: left;
        margin: 10px 0;
        border-bottom: 1px solid #CCCCCC;
        width: 100%;
        font-style: italic;
    }

    .bdp_blog_template [class^="icon-"],
    .bdp_blog_template [class*=" icon-"] {
        background: url(../images/glyphicons-halflings.png ) no-repeat 14px 14px;
        display: inline-block;
        height: 14px;
        line-height: 14px;
        vertical-align: middle;
        width: 14px;
    }

    .bdp_blog_template .meta_data_box .metadate,
    .bdp_blog_template .meta_data_box .metauser,
    .bdp_blog_template .meta_data_box .metacats {
        float: left;
        padding: 0 10px 0 0;
        font-size: 15px;
    }

    .bdp_blog_template .meta_data_box .metacomments {
        float: left;
        font-size: 15px;
    }

    .entry-content .bdp_blog_template a,
    .entry-content .bdp_blog_template .tags a,
    .entry-content .bdp_blog_template .meta_data_box .metacats a,
    .entry-content .bdp_blog_template .meta_data_box .metacomments a {
        text-decoration: none;
        box-shadow: none;
    }

    .bdp_blog_template .icon-author {
        background-position: -168px 1px;
        margin-right: 5px;
    }

    .bdp_blog_template span.calendardate {
        color: #6D6D6D;
        margin-left: 18px;
        font-size: 12px;
    }

    .bdp_blog_template .metacomments i,
    .bdp_blog_template .metadate i,
    .bdp_blog_template .mdate i,
    .bdp_blog_template span.calendardate i {
        margin-right: 5px;
    }

    .bdp_blog_template .icon-cats {
        background-position: -49px -47px;
    }

    .bdp_blog_template .icon-comment {
        background-position: -241px -119px;
    }

    .bdp_blog_template .blog_header .metadatabox {
        border-bottom: none;
        float: none;
        font-size: 13px;
        font-style: italic;
        margin: 5px 0 0;
        width: 100%;
        line-height: 2;
    }

    .bdp_blog_template .blog_header .metadatabox .metacomments {
        float: right;
        border-radius: 5px;
    }

    .bdp_blog_template .blog_header .metadatabox .icon-date {
        background-position: -48px -24px;
        margin-right: 3px;
    }

    .bdp_blog_template .tags {
        padding: 5px 10px;
        border-radius: 3px;
    }

    .bdp_blog_template.box-template .tags {
        display: inline-block;
        font-size: 15px;
        margin-bottom: 7px;
    }

    .bdp_blog_template .tags .icon-tags {
        background-position: -25px -47px;
    }

    .bdp_blog_template .blog_header {
        overflow: hidden;
        margin: 15px 0;
    }

    .bdp_blog_template .blog_header img {
        box-shadow: none;
        width: 100%;
    }

    .bdp_blog_template .blog_header h1 {
        display: block;
        padding: 3px 10px;
        margin: 0;
        border-radius: 3px;
        line-height: 1.5;
        <?php
        if ($titlebackcolor != '') {
            echo "background: " . $titlebackcolor;
        }
        ?>
    }

    <?php if ($titlecolor != '' || $template_titlefontsize != '') { ?>
        .bdp_blog_template .blog_header h1 a {
            <?php echo ($titlecolor != '') ? 'color: ' . $titlecolor . ';' : ''; ?>
            <?php echo ($template_titlefontsize != '') ? 'font-size: ' . $template_titlefontsize . 'px;' : ''; ?>
        }
    <?php } ?>

    .post_content {
        margin-bottom: 15px;
        <?php echo ($contentcolor != '') ? 'color:' . $contentcolor . ';' : ''; ?>
        <?php echo ($content_fontsize != '') ? 'font-size:' . $content_fontsize . 'px;' : ''; ?>
    }

    .bdp_blog_template a.more-tag {
        font-size: 14px;
        padding: 5px 10px;
        margin-top: 15px;
        border-radius: 5px;
        float: right;
        <?php echo ($readmorebackcolor != '') ? 'background-color: ' . $readmorebackcolor . ';' : ''; ?>
        <?php echo ($readmorecolor != '') ? 'color: ' . $readmorecolor . ';' : ''; ?>
    }

    <?php if ($readmorebackcolor != '' || $readmorecolor != '') { ?>
        .bdp_blog_template a.more-tag:hover {
            <?php echo ($readmorecolor != '') ? 'background-color: ' . $readmorecolor . ';' : ''; ?>
            <?php echo ($readmorebackcolor != '') ? 'color: ' . $readmorebackcolor . ';' : ''; ?>
        }
    <?php } ?>

    <?php if ($color != '') { ?>
        .entry-content a,
        .meta_data_box .metacats a,
        .meta_data_box .metacomments a,
        .bdp_blog_template .categories a,
        .post_content a,
        .post_content a:hover,
        .tags a,
        span.category-link a,
        .bdp_blog_template a {
            color:<?php echo $color; ?>;
            font-size: 14px;
        }
    <?php } ?>

    <?php if ($background != '') { ?>
        .bdp_blog_template.evolution,
        .bdp_blog_template.lightbreeze {
            background: <?php echo $background; ?>;
        }
    <?php } ?>

    <?php
    if ($template_alternativebackground == '0') {
        if ($alterbackground != '') {
            ?>
            .bdp_blog_template.evolution.alternative-back,
            .bdp_blog_template.lightbreeze.alternative-back {
                background: <?php echo $alterbackground; ?>;
            }
        <?php } else { ?>
            .bdp_blog_template.evolution.alternative-back,
            .bdp_blog_template.lightbreeze.alternative-back {
                background: transparent;
            }
            <?php
        }
    }
    ?>

    /**
     * 4.0 - Classical Template
     */

    .bdp_blog_template.classical {
        border-bottom: 1px dashed rgb(204, 204, 204);
        padding: 0 0 40px;
        background: none;
    }

    .bdp_blog_template.classical .post-image {
        margin:0;
    }

    .bdp_blog_template.classical .post-image img {
        width: 100%;
    }

    .bdp_blog_template.classical .post-image img:hover {
        opacity: 0.8;
    }

    .bdp_blog_template.classical .blog_header h1 {
        border-radius: 0;
        padding: 0;
    }

    .bdp_blog_template.classical .blog_header .tags {
        background: none;
        border-radius: 0px;
        padding: 0px;
        <?php echo ($color != '') ? 'color: ' . $color . ';' : ''; ?>
    }

    .bdp_blog_template.classical .category-link {
        font-size: 14px;
    }

    /**
     * 5.0 - Light Breeze Template
     */

    .bdp_blog_template.lightbreeze {
        border-radius: 3px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 15px;
        border: 1px solid #ccc;
    }

    .bdp_blog_template.lightbreeze .post-image {
        overflow: hidden;
        margin: 0;
    }

    .bdp_blog_template.lightbreeze .post-image img {
        transform: scale(1);
        transition: all 1s ease 0s;
        height: auto;
        max-width: 100%;
        width: 100%;
    }

    .bdp_blog_template.lightbreeze .post-image img:hover {
        transform: scale(1.2);
    }

    .bdp_blog_template.lightbreeze .blog_header h1 {
        padding: 0;
    }

    .bdp_blog_template.lightbreeze .meta_data_box {
        margin: 10px 0 0;
        padding-bottom: 15px;
    }

    .bdp_blog_template.lightbreeze .tags {
        padding: 5px 0;
    }

    .bdp_blog_template.lightbreeze .social-component{
        width: 100%;
        display: inline-block;
    }

    /**
     * 6.0 - Spektrum Template
     */

    .bdp_blog_template.spektrum {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        background: none;
        border: none;
        border-radius: 0px;
        padding: 0px;
    }

    .bdp_blog_template.spektrum .spektrum_content_div {
        box-shadow: 0 3px 5px rgba(196, 196, 196, 0.3);
        float: left;
        padding: 15px;
        max-width: 100%;
    }

    .bdp_blog_template.spektrum img {
        float: left;
        width: 100%;
    }

    .bdp_blog_template.spektrum .post-image {
        position: relative;
        float: left;
        width: 100%;
        margin: 0;
    }

    .bdp_blog_template.spektrum .post-image .overlay {
        background-color: rgba(0, 0, 0, 0.8);
        color: #ffffff;
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        text-align: center;
        top: 0;
        transform: rotateY(180deg) scale(0.5, 0.5);
        transition: all 450ms ease-out 0s;
        width: 100%;
    }

    .bdp_blog_template.spektrum .post-image:hover .overlay {
        opacity: 1;
        transform: rotateY(0deg) scale(1, 1);
        height: 100%;
    }

    .bdp_blog_template.spektrum .post-image .overlay a {
        color: rgba(255, 255, 255, 0.8);
        font-size: 25px;
        padding: 15px;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -o-transform: translate3d(-50%, -50%, 0px);
        position:absolute;
        left:50%;
        top:50%;
    }

    .bdp_blog_template.spektrum .blog_header.disable_date{
        padding-left: 0;
    }

    .bdp_blog_template.spektrum .blog_header {
        <?php echo ($titlebackcolor != '') ? 'background:' . $titlebackcolor . ';' : ''; ?>
        position: relative;
        float: left;
        max-width: 100%;
        margin-top: 0;
        padding-left: 70px;
        min-height: 55px;
    }

    .bdp_blog_template.spektrum .blog_header h1 {
        border-radius: 0;
        box-sizing: border-box;
        padding: 0px 10px 0 0;
        font-size: 30px;

    }

    .bdp_blog_template.spektrum .date {
        box-sizing: border-box;
        display: inline-block;
        float: left;
        font-size: 10px;
        height: 55px;
        margin: 0;
        padding: 5px;
        text-align: center;
        min-width: 60px;
        position: absolute;
        left: 0;
        color: #fff;
    }

    .bdp_blog_template.spektrum .number-date {
        display: block;
        font-size: 20px;
        line-height: 14px;
        padding: 5px;
    }

    .bdp_blog_template.spektrum .post-bottom {
        clear: both;
        margin-top: 15px;
        position: relative;
        width: 100%;
        float: left;
    }

    .bdp_blog_template.spektrum .post-bottom .categories,
    .bdp_blog_template.spektrum .post-bottom .metacomments,
    .bdp_blog_template.spektrum .post-bottom .post-by,
    .bdp_blog_template.spektrum .post-bottom .tags {
        display: inline-block;
        font-size: 14px;
        margin-right: 20px;
        padding: 0;
    }

    .bdp_blog_template.spektrum .details a {
        display: inline-block;
        padding: 4px 10px;
        text-decoration: none;
    }

    .bdp_blog_template.spektrum .post_content{
        width: 100%;
        display: inline-block;
    }

    .bdp_blog_template.spektrum .icon-cats {
        background-position: -70px -49px;
    }

    .bdp_blog_template.spektrum .icon-author {
        background-position: -168px -1px;
    }

    .bdp_blog_template.spektrum .icon-comment {
        background-position: -241px -120px;
    }

    <?php if ($titlecolor != '') { ?>
        .spektrum .date {
            background-color: <?php echo $titlecolor; ?>;
        }
        <?php
    }
    if ($color != '') {
        ?>
        .spektrum .post-bottom .categories a {
            color: <?php echo $color; ?>;
        }
        <?php
    }
    if ($readmorecolor != '') {
        ?>
        .spektrum .details a {
            color :<?php echo $readmorecolor; ?>;
        }
        <?php
    }
    if ($readmorebackcolor != '') {
        ?>
        .spektrum .details a:hover {
            color :<?php echo $readmorebackcolor; ?>;
        }
    <?php } ?>

    /**
     * 7.0 - Evolution Template
     */
    .bdp_blog_template.evolution .post-entry-meta .icon-date {
        background-position: -48px -25px;
    }

    .bdp_blog_template.evolution .post-entry-meta .icon-author {
        background-position: -168px -1px;
        margin-right: 0;
    }

    .bdp_blog_template.evolution .post-entry-meta .icon-comment {
        background-position: -241px -120px;
    }

    .bdp_blog_template.evolution .post-entry-meta .icon-tags {
        background-position: -25px -48px;
    }

    .bdp_blog_template.evolution {
        border: none;
        border-radius: 0px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 15px;
    }

    .bdp_blog_template.evolution .blog_header {
        margin: 10px 0;
        text-align: center;
    }

    .bdp_blog_template.evolution .post-image {
        overflow: hidden;
        margin: 0;
        position: relative;
    }

    .bdp_blog_template.evolution .post-image img {
        transform: scale(1);
        transition: all 1s ease 0s;
        height: auto;
        max-width: 100%;
        width: 100%;
    }

    .bdp_blog_template.evolution .post-image:hover img {
        transform: scale(1.08);
    }

    .bdp_blog_template.evolution .post-image .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        bottom: 0;
        display: block;
        height: 0;
        position: absolute;
        transition: all 0.2s ease 0s;
        width: 100%;
    }

    .bdp_blog_template.evolution .post-image:hover .overlay {
        height: 100%;
        transition: all 0.1s ease 0s;
    }

    .bdp_blog_template.evolution .post_content {
        margin-top: 10px;
    }

    .bdp_blog_template.evolution .post_content p {
        margin-bottom: 10px;
    }

    .bdp_blog_template.evolution .post-entry-meta > span {
        display: inline-block;
        margin: 0 5px;
    }

    .bdp_blog_template.evolution .tags {
        padding: 0;
    }

    .bdp_blog_template.evolution .categories,
    .bdp_blog_template.evolution .post-entry-meta {
        text-align: center;
        margin-bottom: 10px;
        display: block;
        font-size: 15px;
    }

    .bdp_blog_template.evolution .categories a {
        font-size: 15px;
    }

    .bdp_blog_template.evolution .social-component {
        float: left;
        width: 100%;
    }

    /**
     * 8.0 - Timeline Template
     */

    .bdp_blog_template.timeline {
        margin-bottom: 0;
        border-radius: 0;
        box-shadow: none;
        padding: 0;
        border: none;
        box-sizing: border-box;
        background:none;
    }

    .timeline_bg_wrap:before {
        background: none repeat scroll 0 0 <?php echo $templatecolor; ?>;
        content: "";
        height: 100%;
        left: 50%;
        margin-left: -1px;
        position: absolute;
        top: 0;
        width: 3px;
    }

    .bdp_blog_template.timeline .post-image {
        position: relative;
    }

    .bdp_blog_template.timeline .post-image .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        top: 0;
        display: block;
        height: 0;
        position: absolute;
        transition: all 0.2s ease-out 0s;
        width: 100%;
    }

    .bdp_blog_template.timeline .post-image:hover .overlay {
        height: 100%;
        transition: all 0.1s ease-out 0s;
    }

    .bdp_blog_template.timeline .photo {
        text-align:center;
    }

    .bdp_blog_template.timeline .desc {        
        margin-top: 15px;
    }

    .timeline_bg_wrap {
        padding: 0 0 50px;
        position: relative;
    }

    .clearfix:before,
    .clearfix:after {
        content: "";
        display: table;
    }

    .timeline_bg_wrap .timeline_back {
        margin: 0 auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .datetime {
        background: none repeat scroll 0 0 <?php echo $templatecolor; ?>;
        border-radius: 100%;
        color: #fff;
        font-size: 12px;
        height: 70px;
        line-height: 1;
        position: absolute;
        text-align: center;
        top: -30px;
        width: 70px;
        z-index: 1;
    }

    .timeline.blog-wrap:nth-child(2n+1) .datetime {
        left: -30px;
    }

    .timeline.blog-wrap:nth-child(2n) .datetime {
        left: inherit;
        right: -30px;
    }

    .timeline .datetime .month {
        font-size:15px;
        color:#fff;
        float:left;
        width:100%;
        padding:12px 0 0 0;
    }

    .timeline .datetime .date {
        font-size:26px;
        color:#fff;
        float:left;
        width:100%;
        padding:5px 0 0 0;
    }

    .bdp_blog_template.timeline:nth-child(2) {
        margin-top: 100px;
    }

    .timeline_bg_wrap .timeline_back .timeline.blog-wrap {
        display: block;
        padding-bottom: 45px;
        padding-top: 45px;
        position: relative;
        width: 50%;
    }

    .timeline_bg_wrap .timeline_back .timeline.blog-wrap:nth-child(2n) {
        clear: right;
        float: right;
        padding-left: 50px;
        padding-right: 30px;
        margin-top: 100px;
    }

    .timeline_bg_wrap .timeline_back .timeline.blog-wrap:nth-child(2n+1) {
        clear: left;
        float: left;
        padding-right: 50px;
        padding-left: 30px;
    }

    .post_hentry {
        margin: 0 auto;
        padding: 0;
        position: relative;
    }

    .post_hentry:before {
        <?php echo ($templatecolor != '') ? 'background: ' . $templatecolor . ';' : ''; ?>
        box-shadow:0 0 0 4px white, 0 1px 0 rgba(0, 0, 0, 0.2) inset, -3px 3px 8px 5px rgba(0, 0, 0, 0.22);
        border-radius: 50%;
        content: "\f040";
        height: 35px;
        position: absolute;
        right: -68px;
        top: 0;
        width: 35px;
        box-sizing: unset;
        font-family: FontAwesome;
        color:#fff;
        display: block;
        font-family: FontAwesome;
        font-size: 24px;
        text-align: center;
        line-height: 1.3;
    }

    .bdp_blog_template.timeline:nth-child(2n) .post_hentry:before {
        left: -68px;
        right: auto;
    }

    .bdp_blog_template.timeline {
        border: none;
        box-shadow: none;
        margin: 0;
    }

    .bdp_blog_template.timeline:nth-child(2n+1) .post_content_wrap:before,
    .bdp_blog_template.timeline:nth-child(2n+1) .post_content_wrap:after {
        border-bottom: 8px solid transparent;
        border-left: 8px solid <?php echo $templatecolor; ?>;
        border-top: 8px dashed transparent;
        content: "";
        position: absolute;
        right: -8px;
        top: 13px;
    }

    .bdp_blog_template.timeline:nth-child(2n) .post_content_wrap:before,
    .bdp_blog_template.timeline:nth-child(2n) .post_content_wrap:after {
        border-bottom: 8px solid transparent;
        border-right: 8px solid <?php echo $templatecolor; ?>;
        border-top: 8px dashed transparent;
        content: "";
        left: -8px;
        position: absolute;
        top: 13px;
    }

    .bdp_blog_template.timeline:nth-child(2n+1) .post_content_wrap {
        float: right;
        margin-left: 0;
    }

    .post_content_wrap {
        border-radius: 3px;
        margin: 0;
        border:1px solid <?php echo $templatecolor; ?>;
        word-wrap: break-word;
        font-weight: normal;
        float: left;
        width: 100%;
    }

    .bdp_blog_template.timeline .post_wrapper.box-blog {
        float: left;
        padding: 15px;
        max-width: 100%;
    }

    .clearfix:after {
        clear: both;
    }

    .bdp_blog_template.timeline:nth-child(1),
    .bdp_blog_template.timeline:nth-child(2) {
        padding-top: 100px;
    }

    .blog-wrap .desc a.desc_content {
        display: block;
        padding: 15px 15px 5px;
        position: relative;
        text-align: center;
    }

    .blog_footer, .blog_div {
        background: none repeat scroll 0 0 #ffffff;
    }

    .post_content_wrap .blog_footer {
        border-top: 1px solid <?php echo $templatecolor; ?> ;
        padding-left: 5px;
        width: 100%;
    }

    .blog_footer span {
        padding: 5px;
        text-transform:none;
        display: inherit;
        font-size: 15px;
    }

    .date_wrap span{
        text-transform:capitalize;
    }

    span.leave-reply i,
    .blog_footer span i {
        padding-right: 5px;
    }

    .bdp_blog_template.timeline .read_more {
        display: block;
        text-align: center;
    }

    .bdp_blog_template.timeline .more-tag {
        float: none;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 15px;
    }

    .post-icon {
        <?php echo ($titlebackcolor != '') ? 'background:' . $titlebackcolor . ';' : ''; ?>
        color: #ffffff;
    }

    .date_wrap {
        padding-bottom: 5px;
    }

    .datetime span.month{
        color:#555;
    }

    .bdp_blog_template.timeline {
        box-sizing: border-box;
    }

    .bdp_blog_template.timeline .blog_footer {
        box-sizing: border-box;
        float: left;
        padding: 15px;
        width: 100%;
    }

    .bdp_blog_template.timeline .post_content{
        padding-bottom:10px;
        margin: 0;
    }

    .bdp_blog_template.timeline .post_content p {
        margin: 0;
    }

    .bdp_blog_template.timeline .post_content a.more-link{
        display: none;
    }

    .bdp_blog_template.timeline .desc a h3 {
        <?php echo ($titlecolor != '') ? 'color: ' . $titlecolor . ';' : ''; ?>
        <?php echo ($titlebackcolor != '') ? 'background:' . $titlebackcolor . ';' : ''; ?>
        margin-bottom: 10px;
        <?php echo ($template_titlefontsize != '') ? 'font-size: ' . $template_titlefontsize . 'px;' : ''; ?>
    }

    .bdp_blog_template.timeline .tags {
        padding: 5px;
    }

    /**
     * 9.0 - News Template
     */
    .bdp_blog_template.news{
        padding: 10px;
    }
    .bdp_blog_template.news .post-image{
        float: left;
        height: auto;
        width: 40%;
    }
    .bdp_blog_template.news .post-content-div.full_with_class{
        width: 100%;
        padding: 0;
    }
    .bdp_blog_template.news .post-content-div{
        border: medium none;
        color: #9b9999;
        float: right;
        margin-top: 0;
        padding: 0 0 0 2%;
        width: 58%;
    }
    .bdp_blog_template.news .post-content-div .category-link .fa-bookmark{
        margin-right: 5px;
    }
    .bdp_blog_template.news .blog_header .metadatabox{
        margin-top: 0;
        margin-bottom: 5px;
    }
    .bdp_blog_template.news .blog_header{
        margin: 0;
    }
    .bdp_blog_template.news .blog_header .date{
        margin-bottom: 5px;
        font-size: 14px;
    }
    .bdp_blog_template.news .blog_header h2.title a{
        color: #333;
        font-size: 30px;
    }
    <?php if ($titlecolor != '' || $template_titlefontsize != '') { ?>
        .bdp_blog_template.news .blog_header h2.title a{
            <?php echo ($titlecolor != '') ? 'color: ' . $titlecolor . ';' : ''; ?>
            <?php echo ($template_titlefontsize != '') ? 'font-size: ' . $template_titlefontsize . 'px;' : ''; ?>
        }
    <?php } ?>
    .bdp_blog_template.news .blog_header h2.title{
        margin: 5px 0;
        width: 100%;
        <?php
        if ($titlebackcolor != '') {
            echo "background: " . $titlebackcolor;
        }
        ?>
    }
    .bdp_blog_template.news .blog_header .metadatabox a{
        font-size: 14px;
        text-transform: capitalize;
        margin-right: 10px;
    }
    .bdp_blog_template.news .post-content-div .post_cat_tag > span i{
        color: #333;
        font-size: 14px;
    }
    .bdp_blog_template.news .post-content-div .post_cat_tag > span{
        display: block;
        margin-bottom: 5px;
        padding: 0;
    }
    .bdp_blog_template.news .post_content{
        width: 100%;
        display: inline-block;
    }
    .bdp_blog_template.news .post-image:hover{
        opacity: 0.8;
    }
    <?php echo $custom_css; ?>

    /**
     * 9.0 - Media Queries
     */

    @media screen and (max-width: 992px){

        .bdp_blog_template .timeline_bg_wrap:before {
            left: 6%;
        }

        .bdp_blog_template .timeline_bg_wrap .timeline_back .timeline.blog-wrap:nth-child(2n+1) {
            clear: right;
            float: right;
            padding-left: 50px;
            padding-right: 30px;
        }

        .bdp_blog_template .timeline_bg_wrap .timeline_back .timeline.blog-wrap {
            width: 94%;
        }

        .bdp_blog_template.timeline:nth-child(n) .post_hentry:before {
            left: -68px;
            right: auto;
        }

        .bdp_blog_template.timeline:nth-child(2n+1) .post_content_wrap:before,
        .bdp_blog_template.timeline:nth-child(2n+1) .post_content_wrap:after {
            left: -8px;
            border-right: 8px solid #000000;
            border-left: none;
            right:auto;
        }

        .bdp_blog_template .datetime {
            height: 60px;
            width: 60px;
        }

        .bdp_blog_template.timeline .datetime .month {
            font-size: 14px;
        }

        .bdp_blog_template.timeline .datetime .date {
            font-size: 20px;
        }

        .bdp_blog_template.timeline:nth-child(2n+1) .datetime,
        .bdp_blog_template.timeline:nth-child(2n) .datetime {
            left: inherit;
            right: -30px;
        }

        .bdp_blog_template.timeline:nth-child(2) {
            margin-top: 0;
            padding-top: 45px;
        }

        .bdp_blog_template.timeline:nth-child(2n+1) .post_content_wrap {
            float: left;
        }


        .timeline_bg_wrap:before {
            left: 10%;
        }
        .timeline_bg_wrap .timeline_back .timeline.blog-wrap:nth-child(2n+1),
        .timeline_bg_wrap .timeline_back .timeline.blog-wrap:nth-child(2n) {
            float: right;
            padding-left: 50px;
            padding-right: 50px;
        }
        .timeline_bg_wrap .timeline_back .timeline.blog-wrap {
            width: 90%;
        }
    }

    @media screen and (max-width: 640px){
        .bdp_blog_template.news .post-image {
            width: 100%;
        }
        .bdp_blog_template.news .post-content-div {
            width: 100%;
            padding: 0;
            margin-top: 15px;
        }
    }

</style>