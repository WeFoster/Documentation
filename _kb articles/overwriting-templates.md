---
ID: 29
post_title: Overwriting Templates
author: Bowe Frankema
post_date: 2015-10-07 21:22:08
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/overwriting-templates/
published: true
---
# Overwriting Templates

Sometimes it’s necessary to completely overwrite a template from the WeFoster parent theme. We always recommend to first try to get the achieved results by using hooks, constants, actions or filters but sometimes you simply need to have full control over the HTML and PHP inside a template file.

## When should I overwrite a template?

*   Overwriting templates is something you should only do if you can not achieve the results you need by using actions, filters or constants. 

## How to overwrite templates

If you want to overwrite a template you simply need to copy over the template file you want to overwrite from the WeFoster parent theme into your Child Theme.

For example:

    wefoster/single.php
    

You copy to

    my-child-theme/single.php
    

You can now change the template as you wish. It’s as easy as that.

## Overwriting BuddyPress Templates

You can overwrite BuddyPress templates the exact same way. The only difference is that you need to put your BuddyPress template files inside a **buddypress** folder inside your child theme before they are overwritten. So:

    plugins/buddypress/bp-templates/bp-legacy/buddypress/members/members-loop.php
    

Can be overwritten by copying *members-loop* into

     my-child-theme/buddypress/members/members-loop.php
    

Note: Take a look at our BuddyPress documentation for a full overview.
