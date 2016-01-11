---
ID: 364
post_title: Using Icons
author: WeFoster
post_date: 2015-12-26 15:42:26
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/using-icons/
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
wpkb_rating_perc:
  - "10"
---
Icons are a great way to improve navigation and improve the experience of your users when interacting with your community. By default the WeFoster theme uses icons in various places across your site. The icon font we use is called Font Awesome, and there are a lot of icons to choose from to further customise your site.

This document shows you how to add your own icons to menus, post/pages and widgets.

## How to find and select icons to use

You can find all the available icons on the Font Awesome website.

[Browse Icons on the Font Awesome site][1]

When you see an icon that you like click on it and on the individual icon page you see the HTML that you need to use to insert the icon. This looks something like this.

`<i class="fa fa-heart"></i>`

This is the code you need to use in the following sections.

## Adding Icons to your Menus

To add an icon to a menu link do the following.

1.  Go to Appearance > **Menus**
2.  Go to the Menu item you would like to add the icon to.
3.  Paste the HTML code of the icon before the text. See the screenshot below for an example.

![Using Icons in Menus][2]

## Adding Icons to Your Post Content

1.  When you are in the Post Editor, click on the **Text Tab**
2.  Paste the HTML of the icon where you want to insert it. See the screenshot below.

## Using Icons in Widget Titles

To use your icons in widget titles you need to use a special shortcode. Here's an example of the shortcode to use:

    [fa-icon type=umbrella]
    

In the above example "umbrella" is the name of the icon class on FontAwesome. It should look something like this:

![Widget Shortcodes][3]

![Using Icons in Content][4]

 [1]: https://fontawesome.io/icons/
 [2]: https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/icon-menus.png
 [3]: https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/widget-shortcodes.png
 [4]: https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/icon-content.pn