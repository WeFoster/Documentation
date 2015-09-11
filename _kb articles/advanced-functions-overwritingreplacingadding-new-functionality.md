---
ID: 32
post_title: 'Functions &#8211; Overwriting/Replacing/Adding new functionality'
author: Bowe Frankema
post_date: 2015-09-07 21:24:36
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/advanced-functions-overwritingreplacingadding-new-functionality/
published: true
---
On this page we’re going to look at a few ways you can modify, overwrite and extend some of the functions included in the WeFoster theme.

## When should I use functions.

*   When you want to prevent certain functions inside the WeFoster parent theme from loading.
*   When you want to modify an existing function in the parent theme.
*   To add completely new functionality to your theme.

## What functions can I change or remove?

We’ve made sure that all our non-critical functions can be removed, extended or replaced with your own custom functionality. If you take a look across the function files in the WeFoster theme you’ll see that a lot of the functions are wrapped inside a **if function_exists** check. This allows you to overwrite this function by adding a function with the same name inside your child theme (or style kit).

### Replacing/Overwriting a function

So let’s say you want to replace the default excerpt function that can be found in wefoster/lib/setup/init.php.

**The function as found in WeFoster** TODO: Gist

**Your Excerpt Custom Function** wff_excerpt_more

TODO: Gist

### Removing a function

Removing a function is a matter of doing the same as the example above, but instead of return new functionality, you return nothing.

One of the best use cases is preventing a template from loading. Look at the example below that shows you how to disable post thumbnails inside your child theme.

    lib/layout/actions.php
    

wff_post_thumbnail_location

        TODO: Gist.
    

## Some examples of using filters the right way.

**Changing the main and sidebar sizes for a specific page**. TODO GIST

**Changing the post thumbnails sizes for a specific post type** TODO GIST

**Loading a different template part on a page template** TODO GIST

**Using a customiser value to apply a filter** TODO GIST