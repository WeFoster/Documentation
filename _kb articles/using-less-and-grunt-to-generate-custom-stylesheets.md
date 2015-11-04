---
ID: 30
post_title: >
  Using LESS and Grunt to generate custom
  stylesheets
author:
  - Bowe Frankema
post_date:
  - 2015-09-07 21:23:14
post_excerpt:
  - ""
layout: wpkb-article
permalink:
  - ""
published: true
further_reading:
  - ""
---
Every project has different needs and thus we wanted to provide you with a flexible solution to quickly generate CSS files that only contain the compiled CSS that you need.

Stop overwriting CSS from your child theme, simply compile one optimised CSS file using Grunt and LESS.

## How to enable LESS in your Child Theme.

Open up `functions.php` in the WeFoster Child Theme and uncomment/add the following to the top of the file:

`define('WEFOSTER_LESS_TYPE', 'less');`

Now we are ready to start compiling the actually LESS!.

## Using a LESS Compiler

Currently there are two supported methods to quickly start using LESS in the WeFoster Theme. If you are new to LESS we recommend the Simple method with PrePros, for experienced developers Node/Grunt might be more powerful.

## LESS Compiling with PrePros (simple)

1.  Grab the WeFoster Child Theme and put it directly into your /wp-content/themes/ folder. [Download the WeFoster Child Theme][1]
2.  Download and install [PrePros; a free LESS/JS compiler. ][2]
3.  Open PrePros and click "Add Project". Select the `wefoster-child` folder you just downloaded.
4.  PrePros is now set up. 
5.  Type `grunt watch` to start developing your custom child theme

## LESS Compiling with Node.js and Grunt (advanced)

1.  Grab the WeFoster Child Theme and put it directly into your /wp-content/themes/ folder. [Download the WeFoster Child Theme][1]
2.  Make sure you have **node.js** installed on your computer
3.  Using the terminal go inside a your new theme folder `cd wefoster-child` 
4.  Run the following command `npm install -g npm@latest`
5.  Type `grunt watch` to start developing your custom child theme

## Using LESS in your Child Theme

Now that we are all set up, it's time to start writing some LESS!

### Completely Replacing the WeFoster Parent Style (Recommended)

In your LESS file you can import the WeFoster Parent Theme .less files and use that to generate a completely custom stylesheet. This allows you to pick exactly the CSS you want for your site and lets you create custom themes within minutes.

`define('WEFOSTER_LESS_METHOD', 'replace');`

1.  Open up `assets/less/main.less` in your Child Theme.
2.  At the top of the file uncomment `@import "replace.less";`
3.  Save your main.less file and PrePros or Grunt will automatically generate your CSS.

### Extending the WeFoster Parent Style (For Small Changes only)

This method allows you to extend the Default CSS and will NOT remove the WeFoster Parent CSS styles. This means that your custom CSS will be loaded after the Parent CSS but you can still use LESS and our theme variables easily. This is how virtually all other WordPress themes currently work.

`define('WEFOSTER_LESS_METHOD', 'extend');`

1.  Open up `assets/less/main.less` in your Child Theme.
2.  At the top of the file uncomment `@import "extend.less";`
3.  Save your main.less file and PrePros or Grunt will automatically generate your CSS.

## Example Code

Note: Please make sure that you have the followed the Getting Started tutorial and Node.js and Grunt are installed on your computer.

If you are using the WeFoster Child Theme the code below is already present in your theme :-)

### Importing the WeFoster less styles into your LESS file.

In your child theme create a new file:

    assets/less/main.less
    

Inside this file import the LESS styles from the WeFoster theme.

TODO: IMPORT LESS

### Using Grunt to compile your new stylesheet

Now open up or create your grunt configuration file bgruntfile.jsb and add some lines to configure grunt properly.

### Adding a function to your child theme

The function below deregisters the WeFoster parent stylesheet and enqueues your custom stylesheet that only contains the CSS you need for your project.

TODO: FUNCTIONS.PHP EXAMPLE

## Adding Your Own Custom CSS

Now that you have enqueued a custom stylesheet from your child theme you can easily add new CSS inside this .LESS file. Take a look at our LESS documentation to learn more.

## Alternative Workflows

There are other ways to compile LESS files into CSS like CodeKit, Gulp and PHP, so feel free to pick the tools that fit your workflow. Also take a look at our documentation regarding using Child Themes.

 [1]: https://github.com/WeFoster/wefoster-child/archive/master.zip
 [2]: https://prepros.io/