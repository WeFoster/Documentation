---
ID: 33
post_title: >
  When to use Constants, Filters and
  Actions
author: Bowe Frankema
post_date: 2015-10-07 21:25:52
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/when-to-use-constants-filters-and-actions-to-build-page-layouts/
published: true
---
Because there are multiple ways to achieve the same results using either a constant, action or a filter, keep the following in mind when you’re building a layout for your WeFoster Theme

TODO: GIST EXAMPLE

*   **CONSTANTS** are for setting **default values** that are set globally (across your theme). They are inflexible and are the foundation of your layout across your theme.

TODO: GIST EXAMPLE

*   **FILTERS** can **overwrite** your CONTANT values on a per page basis. For example if you need a different layout for a certain page/post-type or page template. 

TODO: GIST EXAMPLE

*   **ACTIONS** Are use to **add** additional content to your layout. So instead of overwriting a value (like a filter does) you add something extra to it. For example an additional CSS class!

TODO: GIST EXAMPLE

*   **SETTINGS/OPTIONS** serve as a an easy way to apply filters or actions across the theme based on their value set inside the customizer.
