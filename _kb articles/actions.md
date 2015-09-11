---
ID: 26
post_title: Actions
author: Bowe Frankema
post_date: 2015-09-07 21:19:19
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/actions/
published: true
---
So now that we have learned about filter and constants, let’s look at how we can use actions to easily add new content (HTML/PHP/Loops etc) to your theme.

## When should I use actions.

*   When you want to add custom content to your theme.

You can easily add content to your theme using one of the 50+ do_actions found inside the theme templates . Every time you see an action inside a template you can use that action to add new content at that place without having to overwrite the template. Sweet!

## What actions are available inside the theme?

Simply do a search for do_action inside our GitHub repository to quick see an overview of all the places where you can insert custom content. Here’s a shortcut to that search:

TODO: Insert GitHub search

## Why you should actions instead of overwriting templates

*So why should I use actions instead of just adding my custom HTML or using get_template_part directly inside the templates*

Maybe you are used to overwrite a template from your parent theme and then adding the html/php in the template inside your child theme. Like this:

TODO: Insert code example of wrong method

Actions are a much better way to do the same.

Overwriting templates means more maintenance because these templates will not be updated when you upgrade your parent theme. It is much better to use the available actions to add your content.

Sounds confusing? Take a look at some of the examples below.

## Code Examples

### Insert HTML using an action

TODO INSERT GIST

### Load a template part using an action

TODO INSERT GIST

### Load a template part conditionally

TODO INSERT GIST

### Show message to a logged in user

TODO INSERT GIST

### Add custom HTML before BuddyPress Member Directory