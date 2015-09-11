---
ID: 28
post_title: 'Advanced Actions &#8211; Moving template parts around'
author: Bowe Frankema
post_date: 2015-09-07 21:21:24
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/advanced-actions-moving-template-parts/
published: true
---
Besides giving you a lot of actions you can use to hook new content into the theme, we are also using some of these actions to load certain template parts. So you might be wondering.. why?!

*Why don’t you just use get_template_part inside the templates when loading those templates*?

Because by “hardcoding” the location of these template parts you are unable to move them around without needing to overwrite templates. Overwriting templates means more maintenance because these templates will not be updated when you upgrade your parent theme. Sounds confusing? Take a look at the gists.

Hardcoded Template TODO INSERT GIST