(function(){"use strict";function d(n,o,i,g,s,a,l,m){var e=typeof n=="function"?n.options:n;o&&(e.render=o,e.staticRenderFns=i,e._compiled=!0),g&&(e.functional=!0),a&&(e._scopeId="data-v-"+a);var r;if(l?(r=function(t){t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext,!t&&typeof __VUE_SSR_CONTEXT__<"u"&&(t=__VUE_SSR_CONTEXT__),s&&s.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(l)},e._ssrRegister=r):s&&(r=m?function(){s.call(this,(e.functional?this.parent:this).$root.$options.shadowRoot)}:s),r)if(e.functional){e._injectStyles=r;var C=e.render;e.render=function(k,c){return r.call(c),C(k,c)}}else{var f=e.beforeCreate;e.beforeCreate=f?[].concat(f,r):[r]}return{exports:n,options:e}}const u={computed:{computedColor(){const n={success:"#3c763d",info:"#31708f",warning:"#8a6d3b",danger:"#a94442"};return this.content.alerttype in n?n[this.content.alerttype]:"#000"},computedBackgroundColor(){const n={success:"#dff0d8",info:"#d9edf7",warning:"#fcf8e3",danger:"#f2dede"};return this.content.alerttype in n?n[this.content.alerttype]:"#fff"}}};var p=function(){var o=this,i=o._self._c;return i("k-block-figure",{style:{backgroundColor:o.computedBackgroundColor}},[i("div",{style:{display:"flex",gap:"1em"}},[i("k-icon",{attrs:{type:"alert",color:o.computedColor}}),i("p",{domProps:{innerHTML:o._s(o.content.text)}})],1)])},_=[],h=d(u,p,_,!1,null,null,null,null);const v=h.exports;panel.plugin("eXpl0it3r/kirby-bootstrap-blocks",{blocks:{alert:v}})})();
