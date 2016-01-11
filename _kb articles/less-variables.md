---
ID: 31
post_title: LESS Variables
author:
  - Bowe Frankema
post_date:
  - 2015-10-07 21:23:47
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - >
    https://documentation.wefoster.co/kb/less-variables/
published: true
wpkb_rating_perc:
  - "90"
required_reading:
  - 'a:1:{i:0;s:2:"30";}'
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
So now that you learned about installing Node & Grunt to compile your LESS files and how to compile a custom LESS stylesheet inside our Child Theme that replaces the default CSS, let’s take a look at how we can use the LESS variables in the WeFoster theme to quickly generate completely custom themes.

This is one of the coolest features of the WeFoster framework and can save you countless hours if you want to create a custom theme.

## Overwriting variables

<a href="http://documentation.wefoster.co/kb/using-less-and-grunt-to-generate-custom-stylesheets/" title="Using LESS and Grunt to generate custom stylesheets" target="_blank"><strong>Note: Make sure that you have followed all the steps described in our setting up LESS and Grunt documentation files.</strong></a>

If you take a look at wefoster/assets/less/variables.less you’ll see that there are a lot of variables available you can overwrite inside your child theme. So what are LESS variables?

TODO: Add a quote about LESS variables

So this means that as soon as you add a variable inside

    your-child-themes/assets/less/custom.less 
    

your stylesheet will get recompiled by Grunt using the new variable value. Check out the code examples below for some inspiration.

## Code Examples

### Change the margin and padding

TODO: Padding/Margin

### Change color scheme and links

TODO: Color values

### Change Typography

TODO: Typography

### Change the BuddyPress Navigation

TODO: BuddyPress Navigation

### Change the BuddyPress Avatar sizes

## Adding Custom CSS

When you write completely custom CSS we advise you to use the same LESS variables. This keeps things consistent and saves you a lot of headaches when upgrading your child theme after we release and update to the WeFoster theme. So for example you could do this:

    my-custom-div { 
      background: @white; 
      padding: @padding-full; 
      color: @brand-primary; 
      font-size: 110%; 
    }
    

Of course you can also add custom variables or make variations on existing variables. Like this:

    //Custom Variable
    @custom-color: #2f4g45;
    
    // Variable based on existing variable  
    @custom-variation: lighten(@brand-primary, 10%);
    

The added benefit of the last example is that it changes as soon as you change the @brand-primary variable. Inside the WeFoster theme we use this tactic a lot to link variables together that all change as soon as the “parent” variable is changed.

## Sharing stylesheets with the community

If you have created a custom theme using variables you can share it with the community so others can use it. You can easily submit them on https://wefoster.co and visiting the WeFoster Theme Group.

TODO: Set up theme submission