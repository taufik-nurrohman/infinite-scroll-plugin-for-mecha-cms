Infinite Scroll Plugin for Mecha CMS
====================================

> Endless pages.

Infinite scroll is a [web design technique](https://en.wiktionary.org/wiki/infinite_scroll) that prevents the browser scroll bar from scrolling to the bottom of the page, causing the page to grow with additional content instead.

This plugin requires you to determine four elements as the JavaScript target. The post, the posts container, the navigation container and the next navigation link. The default elements are:

 - `.posts`
 - `.post`
 - `.blog-pager`
 - `a[rel="next"]`

You can adjust them later based on the HTML markup of your shield.

~~~ .html
<main class="posts">
  <article class="post"> … </article>
  <article class="post"> … </article>
  <article class="post"> … </article>
</main>
<nav class="blog-pager">
  <a rel="next"> … </a>
</nav>
~~~

### Hooks

The available hooks are:

 - `load`
 - `loading`
 - `loaded`
 - `error`

Adding hooks:

~~~ .javascript
infinite_scroll.on('load', function() {
    alert('Posts loaded.');
});

infinite_scroll.on('loading', function() {
    alert('Loading posts...');
});

infinite_scroll.on('loaded', function() {
    alert('No more posts to load.');
});

infinite_scroll.on('error', function() {
    alert('Error loading posts.');
});
~~~

Adding hooks with custom ID:

~~~ .javascript
infinite_scroll.on('load', function() {
    alert('Posts loaded.');
}, 1234);
~~~

Removing hooks:

~~~ .javascript
infinite_scroll.off('load'); // remove all `load` hooks data
infinite_scroll.off('load', 1234); // remove `load` hook data with id `1234`
~~~

Retrieving hooks:

~~~ .javascript
console.log(infinite_scroll.on()); // retrieving all hooks data
console.log(infinite_scroll.on('load')); // retrieving all `load` hooks data
~~~