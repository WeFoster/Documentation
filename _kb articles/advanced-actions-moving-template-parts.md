---
ID: 28
post_title: >
  Using the Hookr Plugin to easily find
  and use actions and filters
author:
  - Bowe Frankema
post_date:
  - 2015-12-12 21:21:24
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - >
    https://documentation.wefoster.co/kb/using-hookr-to-easily-find-and-use-actions-and-filters.md/
published: true
required_reading:
  - ""
further_reading:
  - ""
link_snippet_to_kb_article:
  - ""
page_hero_section:
  - "0"
activate_wf_builder:
  - "0"
---
All our WeFoster Themes and Plugins contain hooks and filters which you can use to easily customise the plugin or theme to your needs. The hardest thing about using these hooks and filters is usually finding the right ones to use. Normally you would either look into the documentation or browse through the source code to find the action/filter you need and this quickly becomes time consuming. But luckily there is a solution!

The Hookr.io plugin displays the actions and filters that fired as the page loaded. This means it shows you exactly where an action or filter is being used on the front-end on your site. This tutorial will show you exatly how to set it ip.

## Install the Hookr.io Plugin

1.  Download the Hookr.io Plugin here: http://hookr.io/plugin/
2.  Upload, Install & Activate in your WordPress Admin Dashboard.

As soon as you activate the plugin you will see that it displays all of the hooks and filters available inside the WordPress admin and on the front-end of your website.

## Changing the Hookr Plugin settings

Now that you have enabled the plugin you'll see a lot of information on every page, and chances are that most of them are not needed for the customisations that you are planning to make. Luckily the Hookr plugin makes it very easy to customise what it shown and hidden on every page. For example to only show the WeFoster & BuddyPress hooks and filters.

Take a look at the screenshot below.

![Hookr Setting][1]

Here's the settings we use in this screenshot:

**Watch Hooks**

<pre>open_*
close_*
inside_*
after_*
before_*
wf*
</pre>

## Adding Content/Modifying Hooks and Filters

Now that you have set up the plugin it becomes a lot easier to add your custom content, even if you are not a developer. Please take a look at our documentation regarding how to use hooks and filters by following the links below.

 [1]: https://raw.githubusercontent.com/WeFoster/Documentation/master/screenshots/hookr-settings.png