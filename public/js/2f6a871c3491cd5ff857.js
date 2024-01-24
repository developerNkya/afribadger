(window.webpackJsonp=window.webpackJsonp||[]).push([[29],{397:function(t,e,n){"use strict";e.a={getHappeningNow:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:20,o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"user{full_name,username,profile_image,verification_status};discovery_item{:all}";return t.$get("/v1/discovery/now",{params:{fields:"post.page(".concat(e,").limit(").concat(n,").order(created_at,desc);").concat(o)}})},getItems:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return t.$get("/v1/discovery/items",{params:{fields:e}})},getPopular:function(t){return t.$get("/v1/discovery/items").then((function(t){var e=t.popular;return void 0===e?[]:e}))},getTravelTips:function(t){return t.$get("/v1/discovery/items").then((function(t){var e=t.travel_tip;return void 0===e?[]:e}))},getJourneys:function(t){return t.$get("/v1/discovery/items").then((function(t){var e=t.journey;return void 0===e?[]:e}))},getArticle:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"discovery_item{:all}";return t.$get("/v1/discovery/items/".concat(e),{params:{fields:n}})},getUsers:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"discovery_item{:all};post{:default,community_group}";return t.$get("/v1/discovery/users",{params:{fields:e}}).then((function(t){return t.filter((function(t){var e=t.post,n=t.user;return e&&n}))}))},getNearby:function(t){return t.$get("/v1/users/self/nearby",{params:{"polygon[0][lat]":90,"polygon[0][lng]":-180,"polygon[1][lat]":90,"polygon[1][lng]":180,"polygon[2][lat]":-90,"polygon[2][lng]":180,"polygon[3][lat]":-90,"polygon[3][lng]":-180,fields:"user{id,full_name,username,email,profile_image,visible_location}"}})},getDocumentaries:function(t){return t.$get("/v1/discovery/documentaries")}}},398:function(t,e,n){"use strict";var o=n(29),r=n(16),l={components:{CommonContainer:o.a,CommonHeading:r.a},props:{hasContentBorder:{type:Boolean,default:!1},hasOutsideBorder:{type:Boolean,default:!1},hasOutsideShadow:{type:Boolean,default:!1}},computed:{sectionClass:function(){return{"pb-30":this.$slots.button,"pt-30":this.$slots.heading,"md:pt-60":this.$slots.heading,"border-t-1":this.hasOutsideBorder,"border-black-5":this.hasOutsideBorder,"md:shadow-section":this.hasOutsideShadow,relative:this.hasOutsideBorder,"z-above":this.hasOutsideBorder}},contentClass:function(){return{"md:border-t-1":this.hasContentBorder,"md:border-b-1":this.hasContentBorder&&this.$slots.button,"md:border-black-5":this.hasContentBorder}},buttonClass:function(){return{"text-center":!0,"mt-20":this.$slots.heading&&this.$slots.content,"md:mt-30":this.$slots.heading&&this.$slots.content}}}},c=n(0),component=Object(c.a)(l,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",{class:t.sectionClass},[t.$slots.heading?[n("common-heading",{staticClass:"text-center text-brown-primary mb-20 md:mb-30",attrs:{type:"secondary"}},[t._t("heading")],2)]:t._e(),t._v(" "),t.$slots.content?n("div",{class:t.contentClass},[t._t("content")],2):t._e(),t._v(" "),t.$slots.button?n("div",{class:t.buttonClass},[n("common-container",{attrs:{size:"lg"}},[t._t("button")],2)],1):t._e()],2)}),[],!1,null,null,null);e.a=component.exports},425:function(t,e,n){"use strict";var o=n(437),r=n(0),l=Object(r.a)({},(function(){var t=this.$createElement,e=this._self._c||t;return e("svg",this._g({attrs:{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 40 40"}},this.$listeners),[e("g",{attrs:{fill:"none","fill-rule":"evenodd"}},[e("path",{attrs:{fill:"var(--yellow)","fill-rule":"nonzero",d:"M0 38V2a2 2 0 012-2h36a2 2 0 012 2v36a2 2 0 01-2 2H2a2 2 0 01-2-2z"}}),e("g",{attrs:{stroke:"var(--white-hex)","stroke-width":"1.5",transform:"translate(8 8)"}},[e("path",{attrs:{"stroke-linecap":"square",d:"M12.5 12.5h6.75"}}),e("circle",{attrs:{cx:"12",cy:"12",r:"12"}}),e("path",{attrs:{"stroke-linecap":"square",d:"M12 4.773V12.5"}})])])])}),[],!1,null,null,null).exports,c=n(433),d=n(407),m=n(399),f={components:{IconUserFollow:o.a,IconUserFollowRequested:l,IconUserFollowing:c.a,CommonPost:d.a,CommonToggleFollow:m.a},props:{user:{type:Object,required:!0},post:{type:Object,required:!0}}},h=Object(r.a)(f,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("common-post",{staticClass:"h-400",attrs:{post:t.post,"are-interaction-labels-shown":!1},scopedSlots:t._u([{key:"actions",fn:function(){return[n("common-toggle-follow",{attrs:{user:t.user},scopedSlots:t._u([{key:"follow-requestable",fn:function(){return[n("button",{staticClass:"text-pink-primary hover:text-brown-primary"},[n("icon-user-follow",{staticClass:"h-40 w-40"})],1)]},proxy:!0},{key:"follow-requested",fn:function(){return[n("button",{attrs:{disabled:""}},[n("icon-user-follow-requested",{staticClass:"h-40 w-40"})],1)]},proxy:!0},{key:"followable",fn:function(){return[n("button",{staticClass:"text-pink-primary hover:text-brown-primary"},[n("icon-user-follow",{staticClass:"h-40 w-40"})],1)]},proxy:!0},{key:"following",fn:function(){return[n("button",{staticClass:"text-pink-primary hover:text-brown-primary"},[n("icon-user-following",{staticClass:"h-40 w-40"})],1)]},proxy:!0}])})]},proxy:!0}])})}),[],!1,null,null,null);e.a=h.exports},447:function(t,e,n){"use strict";n(147);var o=n(29),r=n(7),l=n(398),c=n(425),d={components:{CommonContainer:o.a,CommonButton:r.a,CommonBlockSection:l.a,DiscoverNomadiItem:c.a},props:{items:{type:Array,required:!0},isStandalone:{type:Boolean,required:!0}},computed:{filteredItems:function(){var t=this.items.filter((function(t){var e=t.post,n=t.user;return e&&n}));return this.isStandalone?t:t.slice(0,4)},sectionName:function(){return this.$t("discover.submenu.featured_nomadi")}},created:function(){this.$bus.$on("after.user.follow",this.markUserAsFollowed),this.$bus.$on("after.user.request_follow",this.markUserAsRequestedToFollow),this.$bus.$on("after.user.unfollow",this.markUserAsUnfollowed)},beforeDestroy:function(){this.$bus.$off("after.user.follow",this.markUserAsFollowed),this.$bus.$off("after.user.request_follow",this.markUserAsRequestedToFollow),this.$bus.$off("after.user.unfollow",this.markUserAsUnfollowed)},methods:{markUserAsFollowed:function(t){var e=this.findIndex(t);-1!==e&&(this.items[e].user.followed_by_current_status="approved")},markUserAsRequestedToFollow:function(t){var e=this.findIndex(t);-1!==e&&(this.items[e].user.followed_by_current_status="pending")},markUserAsUnfollowed:function(t){var e=this.findIndex(t);-1!==e&&(this.items[e].user.followed_by_current_status=null)},findIndex:function(t){return this.items.findIndex((function(e){return e.user_id===t.id}))},itemClass:function(t){return{"py-5":!0,"md:py-10":!0,"px-10":!0,"w-full":!0,"md:w-6/12":!0,"lg:w-4/12":!0,"xl:w-3/12":!0,hidden:!this.isStandalone&&t>0,"md:block":!this.isStandalone&&t<2,"lg:block":!this.isStandalone&&t<3,"xl:block":!0,"md:hidden":!this.isStandalone&&t>1,"lg:hidden":!this.isStandalone&&t>2}}}},m=n(0),component=Object(m.a)(d,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("common-block-section",{scopedSlots:t._u([t.isStandalone?null:{key:"heading",fn:function(){return[t._v("\n        "+t._s(t.sectionName)+"\n    ")]},proxy:!0},{key:"content",fn:function(){return[n("common-container",{staticClass:"mx-10 md:mx-30",attrs:{"has-margin":!1,size:"xxl"}},[n("div",{staticClass:"flex flex-wrap -mx-10 -my-5 md:-my-10"},t._l(t.filteredItems,(function(e,o){var r=e.user,l=e.post;return n("div",{key:o,class:t.itemClass(o)},[n("discover-nomadi-item",{attrs:{user:r,post:l}})],1)})),0)])]},proxy:!0},t.isStandalone?null:{key:"button",fn:function(){return[n("common-button",{attrs:{label:t.$t("discover.view_all",{section:t.sectionName}),route:"/discover/nomadi",type:"secondary"},nativeOn:{click:function(e){return t.$bus.$emit("discovery.featured_nomadi.more_clicked")}}})]},proxy:!0}],null,!0)})}),[],!1,null,null,null);e.a=component.exports},529:function(t,e,n){"use strict";n.r(e);n(10);var o=n(5),r=n(397),l={scrollToTop:!0,components:{DiscoverNomadi:n(447).a},asyncData:function(t){return Object(o.a)(regeneratorRuntime.mark((function e(){var n,o;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.$axios,e.next=3,r.a.getUsers(n);case 3:return o=e.sent,e.abrupt("return",{items:o});case 5:case"end":return e.stop()}}),e)})))()},head:function(){return{title:this.$t("discover.submenu.featured_nomadi")}}},c=n(0),component=Object(c.a)(l,(function(){var t=this.$createElement;return(this._self._c||t)("discover-nomadi",{staticClass:"mb-10 md:mb-60",attrs:{items:this.items,"is-standalone":!0}})}),[],!1,null,null,null);e.default=component.exports}}]);