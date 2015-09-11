---
ID: 25
post_title: Filters
author: Bowe Frankema
post_date: 2015-09-07 21:18:38
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/filters/
published: true
---
So now that we have learned about constants, let’s look at how we can use filters to build more advanced layouts. When you are building themes in most cases you will need to get of the grid for certain sections of your site. This is where filters come in handy.

## What do Filters do in the WeFoster theme?

Filters allow you to easily overwrite the default values that you have set using your CONSTANTS on a per page/post basis. It greatly helps if you have an understanding of how WordPress conditionals work to get the most out of using filters. You can also take a sneak peak at

    wefoster/lib/layout/filters.php
    

To see how we are them to apply the CONSTANT values to the filters available across the theme.

## When should I use filters.

*   When you want to change the layout of a specific page/post or section of your site. 
*   When you need to load a different template (sidebar, header, footer etc) on a specific section(s) of your site.
*   To modify certain front-end aspects (displayed text, featured images sizes etc) of the WeFoster theme.

As you’ve probably noticed filters are most useful to change things on a per section based and should ideally not be used to apply layout changes for all sections of your theme. We recommend to use constants for that.

Take a look at our advanced developer page that tells you more about when to use filters, constants or actions to achieve something.

## Code Examples

### Changing the main and sidebar sizes for a specific page.

TODO GIST

### Changing the post thumbnails sizes for a specific post type

TODO GIST

### Loading a different template part on a page template

TODO GIST

### Using a customiser value to apply a filter

TODO GIST