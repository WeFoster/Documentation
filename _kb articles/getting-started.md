---
ID: 23
post_title: Getting Started
author:
  - Bowe Frankema
post_date:
  - 2015-10-07 21:17:22
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - >
    https://documentation.wefoster.co/kb/getting-started/
published: true
required_reading:
  - ""
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
This guide will take you through all the steps needed to quickly create a custom WeFoster Theme. We’ll show you exactly how you can easy customise the default theme and make them in a upgrade safe manner.

**But before we start please read this document carefully so that you’ll get an idea of what prior knowledge is expected of you as a developer**.

Need some help? Visit our Developer forums and we’ll gladly help you get started!

Let’s do this?

## Introduction to the basic concepts of WeFoster Theming

The most important concept you need to learn about before you get started is the concept of Child Theming. Child Theming is a powerful WordPress feature that allows you to overwrite templates and functionality from a “parent theme”. The WeFoster Theme is developed to make this process is easy as possible, allowing you to overwrite pretty much every single aspect of the theme.

*A WordPress child theme is a theme that inherits the functionality of another theme, called the parent theme, and allows you to modify, or add to, the functionality of that parent theme.*

The parent/child structure has been a very popular method to harness the power of WordPress themes because it allows you to modify the styling and layout of a parent theme to any extent without editing the files of the parent theme itself. That way, when the parent theme is updated, your modifications are preserved.

We advise you to not make changes to the WeFoster Parent Theme unless you’re planning to use Git for version control and having a (white labeled) parent theme is absolutely required for your project.

If this is the case please check out our “White Label / Forking Page.”

If you make changes to the WeFoster parent theme you will lose all these changes when you update the theme. Without version control you’ll end up with a big headache maintaining your theme over time and lose out on the constant improvements and new features that are added by our community of developers.

*Utilise the power of Child Themes and you’ll end up with a custom theme that fits your needs that is easy to upgrade and benefits from all functionality presents in the parent theme*!

Note: If you are deciding to fork the WeFoster theme please do so by cloning the GitHub repository so it’s much easier for you merge upstream changes back into your theme.

### **Is using Child Themes with WeFoster different than any other theme?**

No it’s not. But we have taken extra care in making sure that you can modify almost everything without having to touch the parent theme. Especially because we realise that developing themes for BuddyPress community comes with extra challenges because of all the extra templates and inherited dependancies.

This is why we think it’s worth reading this documentation before you start developing your theme :-)

## Using Functions

If you have ever build a custom theme or even added some code snippets to a functions.php in a theme, you are familiar with the concept of functions. Across our developer documentation we will be covering a lot of ways to customise your WeFoster theme and most of them rely on using functions in one way or another.

Functions are the back bone of all custom theme development and it’s essential that you learn the basics of using functions within WordPress.

Here’s a few resources that can quickly get you up to speed:

All caught up? Sweet! Now here are some quick guidelines at how we recommend you to add functionality to your Child Theme.

## Structure

Download the WeFoster Child Theme to see how our recommended structure.

1.  Mimic the file structure of the WeFoster parent theme as close as possible.

2.  Do not put all your functions inside functions.php but organise them into separate files based on the type of function you’re adding (action/hook, filters, general) and then reference those file from your functions.php.

3.  Need to add custom fields, custom post types or theme options to your theme? Take a look at our external library and plugin recommendations.

## Your Development Toolbox: An overview

Here’s a short summary of the things you can modify/overwrite or disable without having to touch the parent theme. Click on the titles to jump to the documentation.

*   [**Constants**][1]: By simply defining a few constants in your theme you can build an entire custom layout easily and quiclky ooverwrite logo’s, avatars and other assets.
*   [**LESS Stylesheets and Javascript files**][2] All styles are compiled using LESS and allow you to mix and match exactly the components you need for your theme. Stop overwriting CSS from your child theme, simply compile one optimised CSS file.
*   [**Actions**][3]: Overwrite actions to change where template parts (post meta, thumbnails, navigation) are displayed across the theme.
*   [**Filters**][4]: Use filters to change layouts based on WordPress conditionals (hide the sidebar on archive pages, make the sidebar on single post pages wider etc). Filters can also be used to load different template parts conditionally.
*   [**Templates**][5] (Overwrite any (BuddyPress) template or extend them using over 50 do_actions available in the templates.)
*   [**Function Overwrites**][6] Overwrite existing functions to modify their functionality or prevent them from being loaded. Unload template parts or register additional sidebars for your theme. 

## Download a pre-made WeFoster Child Theme

To help you get started quickly we’ve created a pre-made Child Theme that has some inline documentation and pre-made folder structures. This allows you to learn as you go and develop your child themes the same way as we do for our clients. **We strongly recommend you to use this as a starting point.**

[Download the WeFoster Child Theme][7]

 [1]: https://documentation.wefoster.co/kb/constants/
 [2]: https://documentation.wefoster.co/kb/using-less-and-grunt-to-generate-custom-stylesheets/
 [3]: https://documentation.wefoster.co/kb/actions
 [4]: https://documentation.wefoster.co/kb/filters
 [5]: https://documentation.wefoster.co/kb/overwriting-templates/
 [6]: https://documentation.wefoster.co/kb/advanced-functions-overwritingreplacingadding-new-functionality/
 [7]: https://github.com/WeFoster/wefoster-child/archive/master.zip