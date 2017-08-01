<?php
define('NOTIFIER_XML_FILE', 'https://www.solwininfotech.com/documents/assets/plugin_theme.xml');
$response = wp_remote_post(NOTIFIER_XML_FILE);
$body = wp_remote_retrieve_body($response);
$xml = simplexml_load_string($body);
?>
<div class="wrap about-us-section-bd">
    <img style="margin-top: 20px;display: block;" width="150" src="<?php echo BLOGDESIGNER_URL . '/images/logo.png'; ?>" alt="Blog Designer Logo" title="Blog Designer Logo" />

    <div class="bd_text_header">
        <div class="bd-text">
            <?php _e('Blog Designer is a step ahead WordPress plugin that allows you to modify your blog layout and designs.', 'blog-designer'); ?>
        </div>
    </div>
    <div class="updated notice notice-success" id="message">
        <p><?php _e('Blog Designer', 'blog-designer'); ?> : <a href="https://www.solwininfotech.com/documents/wordpress/blogdesigner-lite"><?php _e('Live Documentation', 'blog-designer'); ?></a> <?php _e('and', 'blog-designer'); ?> <a href="http://blogdesigner.solwininfotech.com" target="blank"><?php _e('Live Demo', 'blog-designer'); ?></a></p>
        <p><?php _e('Want more blog designer support for all type of archive pages, single post page and much more?', 'blog-designer'); ?> <b><a href="https://codecanyon.net/item/blog-designer-pro-for-wordpress/17069678?ref=solwin" target="blank"><?php _e('Upgrade to PRO', 'blog-designer'); ?></a></b></p>
    </div>
    <div class="bd-features">
        <div class="bd-info-heading"><?php _e('Feature Overview', 'blog-designer'); ?></div>
        <div class="bd-info-content">
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-toggle-on"></i><?php _e('Fully Customizable Admin Interface', 'blog-designer'); ?></strong>
                <p><?php _e('Plugin provides an easy-to-use and user friendly admin interface.', 'blog-designer'); ?></p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-crosshairs"></i><?php _e('Multiple Browser Compatibility', 'blog-designer'); ?></strong>
                <p><?php _e('Blog Designer plugin is compatible with multiple web browsers like Firefox, Chrome, etc.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-css3"></i><?php _e('Custom CSS', 'blog-designer'); ?></strong>
                <p>
                    <?php _e('Support of Custom CSS to override the style of selected blog template.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-paperclip"></i><?php _e('Show/Hide post meta fields', 'blog-designer'); ?></strong>
                <p>
                    <?php _e('Manage post meta of post using show/hide option.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-language"></i><?php _e('Multilingual Translation Ready', 'blog-designer'); ?></strong>
                <p>
                    <?php _e('Blog Designer is ready to use with any language.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-th-large"></i><?php _e('33 Different and Unique Blog Templates', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('Blog Designer PRO offers 33 blog templates to make your blog page more attractive.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-share-square-o"></i><?php _e('Import & Export Layout', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('User can easily import layout and export layout setting.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-files-o"></i><?php _e('Easily Duplicate Layout', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('PRO plugin offers duplicate layout feature to duplicate your favorite blog layout anytime.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-file-text-o"></i><?php _e('Support of Single Post Design', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('User can change single post design with 30 different and unique template.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-search"></i><?php _e('Live Preview before save settings', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('User can preview each and every layout at the time of creation and modification.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-columns"></i><?php _e('Template with Two, Three and Four Columns', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('Plugin provides an option to select column for blog design.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <strong class="feature-heading"><i class="fa fa-spinner"></i><?php _e('Pagination with load more', 'blog-designer'); ?><strong class="highlight_pro"><?php _e('PRO', 'blog-designer'); ?></strong></strong>
                <p>
                    <?php _e('Choose pagination type to show previous-next blog pages.', 'blog-designer'); ?>
                </p>
            </div>
            <div class="bd-feature-upper">
                <a href="http://blogdesigner.solwininfotech.com/features/" target="_blank" class="view-all-features"><?php _e('View All Features'); ?></a>
                <a href="https://codecanyon.net/item/blog-designer-pro-for-wordpress/17069678?ref=solwin" target="_blank" class="buy-now"><?php _e('Buy PRO now on Codecanyon'); ?></a>
            </div>
        </div>
    </div>
    <div style="height: 30px;"></div>
    <div class="bd-out-other-work">
        <div class="bd-info-heading"><?php _e('Our Other Products', 'blog-designer'); ?></div>
        <div class="bd-info-content">
            <ul class="bd_theme_plugin">
                <li class="active"><a href="#" data-toggle="plugins"><?php _e('Plugins', 'blog-designer'); ?></a></li>
                <li><a href="#" data-toggle="themes"><?php _e('Themes', 'blog-designer'); ?></a></li>
            </ul>
            <div id="plugins">
                <?php
                if ($xml->plugins) {
                    foreach ($xml->plugins as $single_plugin) {
                        unset($single_plugin->blog_designer);
                        foreach ($single_plugin as $value) {
                            ?>
                            <div class="image_div_upper">
                                <a href="<?php echo $value->link; ?>" target="_blank">
                                    <img src="<?php echo $value->img; ?>" alt="<?php echo $value->name; ?>">
                                    <div class="bd_theme_plugin_name"><span><?php echo $value->name; ?></span></div>
                                    <div class="bd_theme_plugin_desc"><span><?php echo $value->desc; ?></span></div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
            </div>
            <div id="themes" style="display: none">
                <?php
                if ($xml->themes) {
                    foreach ($xml->themes as $single_theme) {
                        foreach ($single_theme as $value) {
                            ?>
                            <div class="image_div_upper">
                                <a href="<?php echo $value->link; ?>" target="_blank">
                                    <img src="<?php echo $value->img; ?>" alt="<?php echo $value->name; ?>">
                                    <div class="bd_theme_plugin_name"><span><?php echo $value->name; ?></span></div>
                                    <div class="bd_theme_plugin_desc"><span><?php echo $value->desc; ?></span></div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>