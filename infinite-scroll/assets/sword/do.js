/*! Simple AJAX infinite scroll by Taufik Nurrohman <http://latitudu.com> */
!function(e,t){function n(e,n){return n=n||t,n.querySelectorAll(e)}function i(){return d.innerHTML=o.text.loading,f=!0,p?(g.classList.add("infinite-scroll-state-loading"),void s(p,function(e){g.className=T,r=t.createElement("div"),r.innerHTML=e;var i=n("title",r)[0].innerHTML,s=n(o.target.post,r),l=n(o.target.posts_nav+" a[rel=next]",r),d=n(o.target.post,c);if(s.length&&d.length){var u=d[d.length-1];t.title=i,u.insertAdjacentHTML("afterend",'<span class="fi" id="#fi:'+M+'"></span>'),r=t.createElement("div");for(var h=0,H=s.length;H>h;++h)r.appendChild(s[h]);u.insertAdjacentHTML("afterend",r.innerHTML),a(),p=l.length?l[0].href:!1,f=!1,M++}},function(){g.className=T,f=!1,a()})):(g.classList.add("infinite-scroll-state-loaded"),d.innerHTML=o.text.loaded)}function a(){if(d.innerHTML="",l){r.innerHTML=o.text.load;var e=r.firstChild;e.onclick=function(){return 2===o.type&&(l=!1),i(),!1},d.appendChild(e)}}var r=null,s=function(t,n,i){if(e.XMLHttpRequest){var a=new XMLHttpRequest;a.onreadystatechange=function(){if(4===a.readyState){if(200!==a.status)return void(i&&"function"==typeof i&&i(a.responseText,a));n&&"function"==typeof n&&n(a.responseText,a)}},a.open("GET",t),a.send()}},o=plugin_infinite_scroll_config,l=1!==o.type,f=!1,c=n(o.target.posts)[0],d=n(o.target.posts_nav)[0],p=n("a[rel=next]",d),u=t.body,g=t.documentElement,T=g.className,h=c.offsetTop+c.offsetHeight,H=e.innerHeight,v=0,L=null,M=1;if(p.length){p=p[0].href,c.insertAdjacentHTML("afterbegin",'<span class="fi" id="#fi:0"></span>'),r=t.createElement("div"),a();var m=function(){h=c.offsetTop+c.offsetHeight,H=e.innerHeight,v=u.scrollTop||g.scrollTop,f||h>v+H||i()};m(),0!==o.type&&e.addEventListener("scroll",function(){l||(L&&e.clearTimeout(L),L=e.setTimeout(m,500))},!1)}}(window,document);