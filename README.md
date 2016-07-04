Infinite Scroll Plugin for Mecha CMS
====================================

> Endless pages.

Infinite scroll is a [web design technique](https://en.wiktionary.org/wiki/infinite_scroll) that prevents the browser scroll bar from scrolling to the bottom of the page, causing the page to grow with additional content instead.

This plugin requires you to determine three elements as the JavaScript target. The posts, the posts container and the navigation container. The default elements are:

 - `.posts`
 - `.post`
 - `.blog-pager`

You can adjust them later based on the HTML markup of your shield.

~~~ .html
<main class="posts">
  <article class="post"> … </article>
  <article class="post"> … </article>
  <article class="post"> … </article>
</main>
<nav class="blog-pager"> … </nav>
~~~