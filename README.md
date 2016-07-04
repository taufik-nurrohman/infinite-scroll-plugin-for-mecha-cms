Infinite Scroll Plugin for Mecha CMS
====================================

> Endless pages.

Infinite scroll is a web design technique that prevents the browser scroll bar from scrolling to the bottom of the page, causing the page to grow with additional content instead. —[Wiktionary](https://en.wiktionary.org/wiki/infinite_scroll)

This plugin requires you to determine three elements as the JavaScript target. The posts, the posts container and the navigation container. The default elements are:

 - `.posts`
 - `.post`
 - `.blog-pager`

You can change the value later through the plugin manager page to adjust them based on the HTML markup of your shield.

~~~ .php
<main class="posts">
  <article class="post"> … </article>
  <article class="post"> … </article>
  <article class="post"> … </article>
</main>
<nav class="blog-pager">
  <a href=" … " rel="next">Next Posts</a>
</nav>
~~~