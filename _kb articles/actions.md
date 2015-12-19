---
ID: 26
post_title: Actions
author:
  - WeFoster
post_date:
  - 2015-10-07 21:19:19
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - /kb/actions/
published: true
page_hero_section:
  - "1"
activate_wf_builder:
  - "1"
further_reading:
  - ""
required_reading:
  - ""
link_snippet_to_kb_article:
  - ""
page_header:
  - ""
subheader:
  - ""
hero_height:
  - "80"
background_image:
  - post-thumbnail
image_effect:
  - default
image_opacity:
  - "0.2"
show_call_to_action_button:
  - 'No'
add_block:
  - ""
---
So now that we have learned about filter and constants, let’s look at how we can use actions to easily add new content (HTML/PHP/Loops etc) to your theme.

## When should I use actions.

*   When you want to add custom content to your theme.

You can easily add content to your theme using one of the 50+ do_actions found inside the theme templates . Every time you see an action inside a template you can use that action to add new content at that place without having to overwrite the template. Sweet!

## What actions are available inside the theme?

Simply do a search for do_action inside our GitHub repository to quick see an overview of all the places where you can insert custom content. Here’s a shortcut to that search:

[Show WeFoster do_actions][1]

## Why you should actions instead of overwriting templates

*So why should I use actions instead of just adding my custom HTML or using get_template_part directly inside the templates*

Maybe you are used to overwrite a template from your parent theme and then adding the html/php in the template inside your child theme. Like this:

[gistpen id=210]

This is some custom content after my page content is shown. I'm adding this by overwriting my template via a Child Theme!

Actions are a much better way to do the same! You can simply add the following to functions.php of your Child Theme.

This is a much better solution because overwriting templates means more maintenance! More important your templates will not be updated when the WeFoster Theme is updated so your template files need maintenance and might get out of date. So use actions to add your custom content to.

Take a look at some of the examples below.

## Code Examples

### Insert HTML using an action

### Load a template part using an action

### Load a template part conditionally

### Show message to a logged in user

 [1]: https://github.com/WeFoster/wefoster/search?utf8=%E2%9C%93&q=do_action