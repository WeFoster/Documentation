---
ID: 21
post_title: Introduction
author: Bowe Frankema
post_date: 2015-09-07 21:14:26
post_excerpt: ""
layout: wpkb-article
permalink: >
  https://documentation.wefoster.co/kb/introduction/
published: true
---
When we sat down to create a new theme framework written from the ground up with BuddyPress in mind, we already had 5 years of experience under our belts developing BuddyPress communities and products. It took us two years of development, several rewrites and extensive testing to get to the version of the theme you’re seeing today.

This theme serves as the foundation for our company, our clients and our customers on WeFoster.co. By making it freely available for you to use, we hope to foster a community of developers that are interested in building better communities for themselves and their clients.

We are a small but motivated team of BuddyPress aficionados that believe that making BuddyPress more accessible, prettier and embraced by agencies and developers leads to communities that can have a real impact in the world of Open Source and the real world.

We hope that our documentation serves as a starting point to help you build something great, and if you have any questions, suggestions or feedback please do not hesitate to get in touch with us.

Have fun building better BuddyPress communities, The WeFoster Team

## Philosophy

Before you dive into the nitty gritty details surrounding developing themes on the WeFoster theme, here’s a quick overview of the goals and philosophy behind the WeFoster theme.

### Compatibility

BuddyPress has an incredible community of developers that have released hundreds of actively maintained plugins. BuddyPress Core has made great strides in improving the theming experience but there are still many plugins that have custom templates and CSS that depend on BuddyPress base CSS. We’ve gone through great lengths to ensure compatibility with these plugins and deliver a theme that can be used to create a seamless experience for you or your clients, no matter the plugins you use. Please take a look at our curated repository of plugins we officially support to our customers and clients.

### Modular and Extensible CSS

We converted the BuddyPress base CSS into LESS and made everything modular. Take a look at wefoster/assets/less/buddypress/buddypress.less to see what we mean.

By using the power of Grunt and LESS you are able to quickly compile a CSS file inside your Child Theme that contains only the CSS you need and simply remove (dequeue) the parent stylesheet. This is the easiest and cleanest way to create completely custom themes simply by overwriting the variables.less in your child theme.

### Using Proven Foundations

Front-end frameworks have matured and provide a great starting point to rapidly build production ready solutions. We chose Twitter Bootstrap as the foundation for the WeFoster theme, and integrated it seamlessly with BuddyPress.

**Our reasoning**

1.  Documentation: Using Bootstrap means that you are able to find excellent documentation to compliment the ones you’re reading now.

2.  Resources: There are many excellent resources available that extend Bootstrap are greatly reduce the time spent on writing custom solutions.

3.  Maintenance: Because of the active developer community surrounding Bootstrap we’re able to utilise proven solutions that are supported and used by thousands of people worldwide. This frees up time in our team to focus on making better BuddyPress themes on top of that foundation.

Note: By default we are only including part of the available bootstrap LESS and JS modules. Our documentation has a section on how to add or remove the modules you need for your project.

### Automation and structured workflows

By utilising Grunt and Bower we’re giving you the tools to automate a lot of the grunt work and asset management that gets on your nerves after a while. Some of the stuff that is automatically taken care off:

*   LESS to CSS Compiling, Enqueueing, Versioning and Minification.
*   Javascript linting, Minification, Versioning and enqueuing
*   Generating PO/MO and POT translation files
*   Generating a clean “Release Build” for your clients.
*   Merging Parent/Child Theme into a standalone Parent theme (coming soon).

### Actions, Filters and Constants

Not many themes use filters and actions as heavily as the WeFoster theme. There might be a bit of a learning curve if you’re used to simply overwriting templates in your child theme all the time. This strategy is easy to learn but hard to maintain and we made a conscious decision to develop a theme development workflow that discourages overwriting templates from the parent theme.

On first look you might get lost trying to figure out how templates get load and from where, but once you get the hang of of it, we’ll know you’ll love it.

There’s a reason why products like Easy Digital Downloads, WooCommerce and the StudioPress framework use a lot of the same template foundations for their projects.

## Feedback, Support & Contributions

Take a day or so to play around with our proposed workflow, ask questions if you get stuck, and help us improve where needed.

All contributions are welcome!