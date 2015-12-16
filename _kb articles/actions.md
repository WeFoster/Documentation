---
ID: 26
post_title: Actions
author:
  - Bowe Frankema
post_date:
  - 2015-09-07 21:19:19
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - ""
published: true
page_hero_section:
  - "0"
activate_wf_builder:
  - "0"
further_reading:
  - ""
---
## When should I use actions.

*   When you want to add custom content to your theme.

You can easily add content to your theme using one of the 50+ do_actions found inside the theme templates . Every time you see an action inside a template you can use that action to add new content at that place without having to overwrite the template. Sweet!

## What actions are available inside the theme?

Simply do a search for do_action inside our GitHub repository to quick see an overview of all the places where you can insert custom content. Here’s a shortcut to that search:

<a target="_blank" href="https://github.com/WeFoster/wefoster/search?utf8=%E2%9C%93&q=do_action">Show WeFoster do_actions</a>

## Why you should actions instead of overwriting templates

*So why should I use actions instead of just adding my custom HTML or using get_template_part directly inside the templates*

Maybe you are used to overwrite a template from your parent theme and then adding the html/php in the template inside your child theme. Like this:

<pre><?php get_template_part('templates/loops/content', 'page'); ?>


<!-- Doing it Wrong -->
      


<p>
  This is some custom content after my page content is shown. I'm adding this by overwriting my template via a Child Theme!
  
</p>
        



<!-- Doing it Wrong -->

        



<?php do_action('close_page_content'); ?>
</pre>

Actions are a much better way to do the same! You can simply add the following to functions.php of your Child Theme.

<pre>/**
* Add Custom HTML after our page content
*
*/
function wfc_after_page_example() { ?>

  <p>
  This is some custom content after my page content is shown. I'm adding this by overwriting my template via a Child Theme!
  
</p>

  



<?php
}
add_action( 'close_page_content','wfc_after_page_example' );
</pre>

This is a much better solution because overwriting templates means more maintenance! More important your templates will not be updated when the WeFoster Theme is updated so your template files need maintenance and might get out of date. So use actions to add your custom content to.

Take a look at some of the examples below.

## Code Examples

### Insert HTML using an action





<pre>
/**
* Add Custom HTML after our page content
*
*/
function wfc_after_page_example() { ?>

  <p>
  This is some custom content after my page content is shown. I'm adding this by overwriting my template via a Child Theme!
  
</p>

  



<?php
}
add_action( 'close_page_content','wfc_after_page_example' );
</pre>

### Load a template part using an action





<pre>
  function wfc_template_part_example()
  {
    get_template_part( 'templates/header/primary-navigation' );
  }
  add_action( 'before_header_navigation', 'wfc_template_part_example' );
</pre>

### Load a template part conditionally




<pre>
  function wfc_template_part_condition_example()
  {   
      //This template part will only be loaded on Single Pages
      if ( is_single() ):
          get_template_part( 'templates/thank-you-for-reading' );
      endif;
  }
  add_action( 'after_content', 'wfc_template_part_condition_example' );
</pre>

### Show message to a logged in user




<pre>
  function wfc_logged_in_message_example()
  {
      if ( is_user_logged_in() ): ?>

        <div class="logged-in-message">
  Welcome back! This message is shown for logged in users only.     
  
</div>



<?php endif;
  }
  add_action( 'open_body', 'wfc_logged_in_message_example' );
</pre>