---
ID: 33
post_title: >
  When to use Constants, Filters and
  Actions
author:
  - Bowe Frankema
post_date:
  - 2015-10-07 21:25:52
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - >
    https://documentation.wefoster.co/kb/when-to-use-constants-filters-and-actions-to-build-page-layouts/
published: true
wpkb_rating_perc:
  - "90"
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
Because there are multiple ways to achieve the same results using either a constant, action or a filter, keep the following in mind when you’re building a layout for your WeFoster Theme

*   **CONSTANTS** are for setting **default values** that are set globally (across your theme). They are inflexible and are the foundation of your layout across your theme.

[gistpen id=421]

*   **FILTERS** are a more flexible way to **modify** or overwrite default functionality. Whilst a constant is applied everywhere, a filter can be used only on a specific page/area of your site. The code snippet below shows how you can use filters to change the site layout for a certain page/post-type or page template only.

[gistpen id=274]

*   **ACTIONS** Are use to **add** additional content to your layout. So instead of overwriting a value (like a filter does) you add something extra to it. For example an additional CSS class!

[gistpen id=381]