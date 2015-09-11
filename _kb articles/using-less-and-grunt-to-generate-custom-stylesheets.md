---
ID: 30
post_title: >
  Using LESS and Grunt to generate custom
  stylesheets
author: Bowe Frankema
post_date: 2015-09-07 21:23:14
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/using-less-and-grunt-to-generate-custom-stylesheets/
published: true
---
Every project has different needs and thus we wanted to provide you with a flexible solution to quickly generate CSS files that only contain the compiled CSS that you need.

Stop overwriting CSS from your child theme, simply compile one optimised CSS file using Grunt and LESS.

## Node.JS and Grunt installation

TODO: Add instructions from the development repo.

## Using LESS in your Child Theme

Instead of writing regular ol’ CSS you can make your life a lot easier by writing your CSS in LESS and extending the WeFoster parent theme. This is a much cleaner and flexible way to create completely custom stylesheets for your theme.

Instead of having to add another stylesheet that contains all your style changes, you import the WeFoster .less files and use that to generate a custom stylesheet. You then a few lines of code to your Child Theme functions.php file that removes (deregisters) the parent stylesheet and load your custom stylesheet.

TODO: Download the WeFoster Child Theme Example.

## Example Code

Note: Please make sure that you have the followed the Getting Started tutorial and Node.js and Grunt are installed on your computer.

If you are using the WeFoster Child Theme the code below is already present in your theme :-)

### Importing the WeFoster less styles into your LESS file.

In your child theme create a new file:

    assets/less/main.less
    

Inside this file import the LESS styles from the WeFoster theme.

TODO: IMPORT LESS

### Using Grunt to compile your new stylesheet

Now open up or create your grunt configuration file “gruntfile.js” and add some lines to configure grunt properly.

### Adding a function to your child theme

The function below deregisters the WeFoster parent stylesheet and enqueues your custom stylesheet that only contains the CSS you need for your project.

TODO: FUNCTIONS.PHP EXAMPLE

## Adding Your Own Custom CSS

Now that you have enqueued a custom stylesheet from your child theme you can easily add new CSS inside this .LESS file. Take a look at our LESS documentation to learn more.

## Alternative Workflows

There are other ways to compile LESS files into CSS like CodeKit, Gulp and PHP, so feel free to pick the tools that fit your workflow. Also take a look at our documentation regarding using Child Themes.