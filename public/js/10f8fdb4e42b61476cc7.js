(window.webpackJsonp=window.webpackJsonp||[]).push([[50],{537:function(e,t,n){"use strict";n.r(t);n(33),n(38),n(10);var r=n(5),o=n(148),c={components:{CommonMediaPhoto:n(22).a},layout:"auth",middleware:function(e){return Object(r.a)(regeneratorRuntime.mark((function t(){var n,r,o;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(n=e.route,r=e.app.$session,o=e.redirect,!["/sign/out","/sign/email"].includes(n.path)){t.next=3;break}return t.abrupt("return");case 3:r.isTokenPresent()&&o("/"),["/sign","/sign/"].includes(n.path)&&o("/sign/in");case 5:case"end":return t.stop()}}),t)})))()},asyncData:function(e){return Object(r.a)(regeneratorRuntime.mark((function t(){var n,r;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return n=e.$axios,t.next=3,o.a.getBackground(n);case 3:return r=t.sent,t.abrupt("return",{background:r});case 5:case"end":return t.stop()}}),t)})))()}},l=n(0),component=Object(l.a)(c,(function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"min-h-screen relative flex sm:items-center justify-center"},[t("common-media-photo",{attrs:{photo:this.background}}),this._v(" "),t("div",{staticClass:"relative pt-110 pb-30 sm:pt-100 sm:pb-60 px-10"},[t("nuxt-child")],1)],1)}),[],!1,null,null,null);t.default=component.exports}}]);