---
ID: 8
post_title: 'Functions &#8211; An introduction'
author: Bowe Frankema
post_date: 2015-10-06 16:34:33
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/functions-an-introduction/
published: true
wpkb_rating_perc:
  - "100"
---
# Functions - An introduction

Let’s take a look at functions and how they fit into the theme development workflow. If you have ever build a custom theme or even added some code snippets to a functions.php in a theme, you are familiar with the concept of functions. Across our developer documentation we will be covering a lot of ways to customise your WeFoster theme and most of them all rely on using functions in one way or another.

Functions are the back bone of all custom theme development and it’s essential that you learn the basics of using functions within WordPress.

Here’s a few resources that can quickly get you up to speed:

All caught up? Sweet! Now here are some quick guidelines at how we recommend you to add functionality to your Child Theme.

[github file = "/WeFoster/developer-library/blob/master/filters/change-post-thumbnail-sizes.php" ]

## Structure

TODO: LINK TO WEFOSTER CHILD THEME

Download the WeFoster Child Theme to see how our recommended structure.

1.  Mimic the file structure of the WeFoster parent theme as close as possible.

2.  Do not put all your functions inside functions.php but organise them into separate files based on the type of function you’re adding (action/hook, filters, general) and then reference those file from your functions.php.

3.  Need to add custom fields, custom post types or theme options to your theme? Take a look at our external library and plugin recommendations.
