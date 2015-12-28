---
ID: 361
post_title: Using Shortcodes
author: WeFoster
post_date: 2015-12-26 15:41:01
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/using-shortcodes/
published: true
required_reading:
  - 'a:1:{i:0;s:2:"37";}'
further_reading:
  - ""
additional_reading:
  - ""
link_snippet_to_kb_article:
  - ""
page_hero_section:
  - "0"
activate_wf_builder:
  - "0"
---
Shortcodes allow you to insert custom content easily. Sadly a lot of theme developers misuse shortcodes and add every shortcode they can think of to their theme. This is bad practice and leads to problems down the road. For example if you decide to switch themes on your site all of your shortcodes stop working and you end up with lots of broken content across your posts and pages.

That being said we realize that shortcodes are incredibly useful and this is why we are recommending an excellent shortcode plugin that is 100% compatible with the WeFoster Theme.

## Installing the Bootstrap Shortcodes plugin.

The WeFoster theme is powered by Bootstrap, the most popular and flexible framework in the world. The Bootstrap Shortcode plugin provides you with a set of shortcodes that allow you to quickly insert custom content directly from your Post Editor. Here's how.

1.  Go to Plugins > **Add New**
2.  Search for *Bootrap Shortcodes*
3.  Install and Activate the plugin called **Bootstrap Shortcodes** by Filip Stefansson, Simon Yeldon, and Michael W. Delane.

## Using the Shortcodes

Now that you have activated the Bootstrap Shortcodes plugin you can easily insert shortcodes via your post editor page. All shortcodes come with usage examples and a list of available shortcode options. Sweet!

![Shortcodes][1]

## Available Shortcodes

Please refer to the Bootstrap Shortcodes documentation to see the shortcodes that are available. Some of our **favorites** are..

1.  **Columns**: Split your content in columns.
2.  **Alerts**: Highlight important content.
3.  **Tooltips**: Show extra information on mouse hover.
4.  **Tabs**: Put your content into different tabs.
5.  **Modals**: Show a Modal Window on Click.

## Using Shortcodes in Widgets

By default Shortcodes do not work in widgets but this can be easily solved. All you need to do is install a tiny plugin.

[Download the Shortcodes in Widgets Plugin from WP.org][2]

After installing and activating this plugin you can use Shortcodes inside your widgets without a problem, but with one exception.

**The Tooltip and Popover Shortcodes might not work as expected** This is because the javascript is only loaded when the shortcode is present inside your post or page content. If you add these shortcodes to your sidebar widgets and not to your post/page content the javascript will not be loaded. If you would like to use these shortcodes inside your widgets add the following to functions.php of your child theme.

    // Load the Shortcode Scripts for on all pages.
    if (class_exists('BoostrapShortcodes')) {
      function wfd_load_shortcode_scripts() {
        // Bootstrap tooltip js
        wp_enqueue_script( 'bootstrap-shortcodes-tooltip', BS_SHORTCODES_URL . 'js/bootstrap-shortcodes-tooltip.js', array( 'jquery' ), false, true );
        // Bootstrap popover js
        wp_enqueue_script( 'bootstrap-shortcodes-popover', BS_SHORTCODES_URL . 'js/bootstrap-shortcodes-popover.js', array( 'jquery' ), false, true );
     }
     add_action('wp_enqueue_scripts', 'wfd_load_shortcode_scripts');
    }

 [1]: https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/shortcodes.gif
 [2]: https://wordpress.org/plugins/shortcodes-in-sidebar-widgets/