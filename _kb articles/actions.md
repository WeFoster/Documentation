---
ID: 26
post_title: Actions
author: WeFoster
post_date: 2015-09-07 21:19:19
post_excerpt: ""
layout: wpkb-article
permalink: >
  http://documentation.wefoster.dev/kb/actions/
published: true
page_hero_section:
  - "0"
activate_wf_builder:
  - "0"
further_reading:
  - ""
---
So now that we have learned about filter and constants, let’s look at how we can use actions to easily add new content (HTML/PHP/Loops etc) to your theme.
<h2>When should I use actions.</h2>
<ul>
	<li>When you want to add custom content to your theme.</li>
</ul>
You can easily add content to your theme using one of the 50+ do_actions found inside the theme templates . Every time you see an action inside a template you can use that action to add new content at that place without having to overwrite the template. Sweet!
<h2>What actions are available inside the theme?</h2>
Simply do a search for do_action inside our GitHub repository to quick see an overview of all the places where you can insert custom content. Here’s a shortcut to that search:

<a href="https://github.com/WeFoster/wefoster/search?utf8=%E2%9C%93&amp;q=do_action">Show WeFoster do_actions</a>
<h2>Why you should actions instead of overwriting templates</h2>
<em>So why should I use actions instead of just adding my custom HTML or using get_template_part directly inside the templates</em>

Maybe you are used to overwrite a template from your parent theme and then adding the html/php in the template inside your child theme. Like this:

[gistpen id=210]

This is some custom content after my page content is shown. I'm adding this by overwriting my template via a Child Theme!

Actions are a much better way to do the same! You can simply add the following to functions.php of your Child Theme.

This is a much better solution because overwriting templates means more maintenance! More important your templates will not be updated when the WeFoster Theme is updated so your template files need maintenance and might get out of date. So use actions to add your custom content to.

Take a look at some of the examples below.
<h2>Code Examples</h2>
<h3>Insert HTML using an action</h3>
<h3>Load a template part using an action</h3>
<h3>Load a template part conditionally</h3>
<h3>Show message to a logged in user</h3>