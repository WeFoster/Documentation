---
ID: 24
post_title: Constants
author: Bowe Frankema
post_date: 2015-09-07 21:18:11
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/constants/
published: true
further_reading:
  - ""
---
CONSTANTS are for setting default values that are defined inside your Child THEME or STYLEKIT functions.php file. Constants are being used for setting default path (where to look for assets) and for building layouts (sidebar position, fixed or fluid layouts etc).

Every constant has a default value that is being used by the WeFoster parent theme to build the default theme. By changing the values of these constants in your child theme or style kit you can quickly build custom themes. It’s pretty sweet and super accessible.

**Agencies/White Label active license holders**: There are also a few constants available that allow you to disable the WeFoster Dashboard and easily white label your theme.

## Where can I find the available constants

You can find all the available constants in the file

    wefoster/lib/constants.php
    

Or for the lazy just look at the gist below:

TODO: GIST

## Some usage examples

Below are some examples of how these constants can be used to generate layouts.

**Building a Basic Layout using constants** TODO: GIST EXAMPLE 1

**Building an Advanced Layout using constants** TODO GIST EXAMPLE

**Overwriting the Default Logos** TODO: GIST EXAMPLE

**Overwriting the Default Logos**