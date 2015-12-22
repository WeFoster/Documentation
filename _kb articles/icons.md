---
ID: 21
post_title: Using Icons
author:
  - WeFoster
post_date:
  - 2015-09-07 21:14:26
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - >
    http://documentation.wefoster.co/kb/using-icons/
published: true
---

Icons are a great way to improve navigation and improve the experience of your users when interacting with your community. By default the WeFoster theme uses icons in various places across your site. The icon font we use is called Font Awesome, and there are a lot of icons to choose from to further customise your site.

This document shows you how to add your own icons to menus, post/pages and widgets.

## How to find and select icons to use
You can find all the available icons on the Font Awesome website.

[Browse Icons on the Font Awesome site](https://fontawesome.io/icons/)

When you see an icon that you like click on it and on the individual icon page you see the HTML that you need to use to insert the icon. This looks something like this.

`<i class="fa fa-heart"></i>`

This is the code you need to use in the following sections.

## Adding Icons to your Menus

To add an icon to a menu link do the following.

1. Go to Appearance > **Menus**
2. Go to the Menu item you would like to add the icon to.
3. Paste the HTML code of the icon before the text. See the screenshot below for an example.

![Using Icons in Menus](https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/icon-menus.png)

## Adding Icons to Your Post Content

1. When you are in the Post Editor, click on the **Text Tab**
2. Paste the HTML of the icon where you want to insert it. See the screenshot below.

![Using Icons in Content](https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/icon-content.png)

## Replacing Existing Icons

If you don't like some of the icons we have chosen you can replace them with others by adding some custom CSS to your theme CSS. In order to do this you first need to figure out the right CSS selector to target.

Sounds complicated? Please read the following **excellent** tutorials about using Firefox or Google Chrome to easily find the CSS rule you need to use.

TODO: Insert Links to Firebug / Chrome Dev Tools Tutorials.

Done reading and all up to speed about finding your CSS selectors? Now you have all you need to replace icons.

### Step 1: Find the CSS selector that contains the icon.

Using Firebug or Google Dev Tools find the icon you would like to change and copy the CSS rule.

![Changing Icons](https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/icon-change.png)
