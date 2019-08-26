!function(o,f,p){var a=[],e={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){a.push({name:e,fn:t,options:n})},addAsyncTest:function(e){a.push({name:null,fn:e})}},l=function(){};l.prototype=e,l=new l;var d=[];function g(e,t){return typeof e===t}var m=f.documentElement,h="svg"===m.nodeName.toLowerCase();function i(e){var t=m.className,n=l._config.classPrefix||"";if(h&&(t=t.baseVal),l._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}l._config.enableClasses&&(t+=" "+n+e.join(" "+n),h?m.className.baseVal=t:m.className=t)}function v(){return"function"!=typeof f.createElement?f.createElement(arguments[0]):h?f.createElementNS.call(f,"http://www.w3.org/2000/svg",arguments[0]):f.createElement.apply(f,arguments)}l.addTest("bgpositionshorthand",function(){var e=v("a").style,t="right 10px bottom 10px";return e.cssText="background-position: "+t+";",e.backgroundPosition===t});var t="Moz O ms Webkit",u=e._config.usePrefixes?t.split(" "):[];e._cssomPrefixes=u;var n={elem:v("modernizr")};l._q.push(function(){delete n.elem});var y={style:n.elem.style};function s(e,t,n,r){var s,o,i,a,l,d="modernizr",u=v("div"),c=((l=f.body)||((l=v(h?"svg":"body")).fake=!0),l);if(parseInt(n,10))for(;n--;)(i=v("div")).id=r?r[n]:d+(n+1),u.appendChild(i);return(s=v("style")).type="text/css",s.id="s"+d,(c.fake?c:u).appendChild(s),c.appendChild(u),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(f.createTextNode(e)),u.id=d,c.fake&&(c.style.background="",c.style.overflow="hidden",a=m.style.overflow,m.style.overflow="hidden",m.appendChild(c)),o=t(u,e),c.fake?(c.parentNode.removeChild(c),m.style.overflow=a,m.offsetHeight):u.parentNode.removeChild(u),!!o}function c(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function w(e,t){var n=e.length;if("CSS"in o&&"supports"in o.CSS){for(;n--;)if(o.CSS.supports(c(e[n]),t))return!0;return!1}if("CSSSupportsRule"in o){for(var r=[];n--;)r.push("("+c(e[n])+":"+t+")");return s("@supports ("+(r=r.join(" or "))+") { #modernizr { position: absolute; } }",function(e){return"absolute"==function(e,t,n){var r;if("getComputedStyle"in o){r=getComputedStyle.call(o,e,t);var s=o.console;null!==r?n&&(r=r.getPropertyValue(n)):s&&s[s.error?"error":"log"].call(s,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}else r=!t&&e.currentStyle&&e.currentStyle[n];return r}(e,null,"position")})}return p}l._q.unshift(function(){delete y.style});var S=e._config.usePrefixes?t.toLowerCase().split(" "):[];function T(e,t){return function(){return e.apply(t,arguments)}}function r(e,t,n,r,s){var o=e.charAt(0).toUpperCase()+e.slice(1),i=(e+" "+u.join(o+" ")+o).split(" ");return g(t,"string")||g(t,"undefined")?function(e,t,n,r){if(r=!g(r,"undefined")&&r,!g(n,"undefined")){var s=w(e,n);if(!g(s,"undefined"))return s}for(var o,i,a,l,d,u=["modernizr","tspan","samp"];!y.style&&u.length;)o=!0,y.modElem=v(u.shift()),y.style=y.modElem.style;function c(){o&&(delete y.style,delete y.modElem)}for(a=e.length,i=0;i<a;i++)if(l=e[i],d=y.style[l],~(""+l).indexOf("-")&&(l=l.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")),y.style[l]!==p){if(r||g(n,"undefined"))return c(),"pfx"!=t||l;try{y.style[l]=n}catch(e){}if(y.style[l]!=d)return c(),"pfx"!=t||l}return c(),!1}(i,t,r,s):function(e,t,n){var r;for(var s in e)if(e[s]in t)return!1===n?e[s]:g(r=t[e[s]],"function")?T(r,n||t):r;return!1}(i=(e+" "+S.join(o+" ")+o).split(" "),t,n)}function b(e,t,n){return r(e,p,p,t,n)}e._domPrefixes=S,e.testAllProps=r,e.testAllProps=b,l.addTest("bgpositionxy",function(){return b("backgroundPositionX","3px",!0)&&b("backgroundPositionY","5px",!0)}),l.addTest("bgrepeatround",b("backgroundRepeat","round")),l.addTest("bgrepeatspace",b("backgroundRepeat","space")),l.addTest("bgsizecover",b("backgroundSize","cover")),l.addTest("borderradius",b("borderRadius","0px",!0)),l.addTest("cssanimations",b("animationName","a",!0));var x=e._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];e._prefixes=x,l.addTest("csscalc",function(){var e=v("a");return e.style.cssText="width:"+x.join("calc(10px);width:"),!!e.style.length}),l.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&b("transform","scale(1)",!0)});var C="CSS"in o&&"supports"in o.CSS,_="supportsCSS"in o;l.addTest("supports",C||_),l.addTest("csstransforms3d",function(){return!!b("perspective","1px",!0)}),l.addTest("preserve3d",function(){var e,t,n=o.CSS,r=!1;return!!(n&&n.supports&&n.supports("(transform-style: preserve-3d)"))||(e=v("a"),t=v("a"),e.style.cssText="display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);",t.style.cssText="display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);",e.appendChild(t),m.appendChild(e),r=t.getBoundingClientRect(),m.removeChild(e),r=r.width&&r.width<4)}),l.addTest("csstransitions",b("transition","all",!0)),l.addTest("flexboxtweener",b("flexAlign","end",!0));var E,P,k,N,R,z=e.testStyles=s;function A(e,t){if("object"==typeof e)for(var n in e)N(e,n)&&A(n,e[n]);else{var r=(e=e.toLowerCase()).split("."),s=l[r[0]];if(2==r.length&&(s=s[r[1]]),void 0!==s)return l;t="function"==typeof t?t():t,1==r.length?l[r[0]]=t:(!l[r[0]]||l[r[0]]instanceof Boolean||(l[r[0]]=new Boolean(l[r[0]])),l[r[0]][r[1]]=t),i([(t&&0!=t?"":"no-")+r.join("-")]),l._trigger(e,t)}return l}(E=navigator.userAgent,P=E.match(/w(eb)?osbrowser/gi),k=E.match(/windows phone/gi)&&E.match(/iemobile\/([0-9])+/gi)&&9<=parseFloat(RegExp.$1),P||k)?l.addTest("fontface",!1):z('@font-face {font-family:"font";src:url("https://")}',function(e,t){var n=f.getElementById("smodernizr"),r=n.sheet||n.styleSheet,s=r?r.cssRules&&r.cssRules[0]?r.cssRules[0].cssText:r.cssText||"":"",o=/src/i.test(s)&&0===s.indexOf(t.split(" ")[0]);l.addTest("fontface",o)}),l.addTest("svg",!!f.createElementNS&&!!f.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),N=g(R={}.hasOwnProperty,"undefined")||g(R.call,"undefined")?function(e,t){return t in e&&g(e.constructor.prototype[t],"undefined")}:function(e,t){return R.call(e,t)},e._l={},e.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),l.hasOwnProperty(e)&&setTimeout(function(){l._trigger(e,l[e])},0)},e._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e;for(e=0;e<n.length;e++)(0,n[e])(t)},0),delete this._l[e]}},l._q.push(function(){e.addTest=A}),l.addTest("svgasimg",f.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var j={}.toString;l.addTest("svgclippaths",function(){return!!f.createElementNS&&/SVGClipPath/.test(j.call(f.createElementNS("http://www.w3.org/2000/svg","clipPath")))}),l.addTest("svgfilters",function(){var e=!1;try{e="SVGFEColorMatrixElement"in o&&2==SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE}catch(e){}return e}),l.addTest("svgforeignobject",function(){return!!f.createElementNS&&/SVGForeignObject/.test(j.call(f.createElementNS("http://www.w3.org/2000/svg","foreignObject")))}),l.addTest("inlinesvg",function(){var e=v("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)}),l.addTest("smil",function(){return!!f.createElementNS&&/SVGAnimate/.test(j.call(f.createElementNS("http://www.w3.org/2000/svg","animate")))}),l.addTest("localstorage",function(){var e="modernizr";try{return localStorage.setItem(e,e),localStorage.removeItem(e),!0}catch(e){return!1}}),l.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(e){return!1}}),l.addTest("websqldatabase","openDatabase"in o),l.addTest("multiplebgs",function(){var e=v("a").style;return e.cssText="background:url(https://),url(https://),red url(https://)",/(url\s*\(.*?){3}/.test(e.background)}),function(){var e,t,n,r,s,o;for(var i in a)if(a.hasOwnProperty(i)){if(e=[],(t=a[i]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=g(t.fn,"function")?t.fn():t.fn,s=0;s<e.length;s++)1===(o=e[s].split(".")).length?l[o[0]]=r:(!l[o[0]]||l[o[0]]instanceof Boolean||(l[o[0]]=new Boolean(l[o[0]])),l[o[0]][o[1]]=r),d.push((r?"":"no-")+o.join("-"))}}(),i(d),delete e.addTest,delete e.addAsyncTest;for(var V=0;V<l._q.length;V++)l._q[V]();o.Modernizr=l}(window,document);