(window.webpackJsonp=window.webpackJsonp||[]).push([[26],{397:function(t,e,r){"use strict";e.a={getHappeningNow:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:20,n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"user{full_name,username,profile_image,verification_status};discovery_item{:all}";return t.$get("/v1/discovery/now",{params:{fields:"post.page(".concat(e,").limit(").concat(r,").order(created_at,desc);").concat(n)}})},getItems:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return t.$get("/v1/discovery/items",{params:{fields:e}})},getPopular:function(t){return t.$get("/v1/discovery/items").then((function(t){var e=t.popular;return void 0===e?[]:e}))},getTravelTips:function(t){return t.$get("/v1/discovery/items").then((function(t){var e=t.travel_tip;return void 0===e?[]:e}))},getJourneys:function(t){return t.$get("/v1/discovery/items").then((function(t){var e=t.journey;return void 0===e?[]:e}))},getArticle:function(t,e){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"discovery_item{:all}";return t.$get("/v1/discovery/items/".concat(e),{params:{fields:r}})},getUsers:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"discovery_item{:all};post{:default,community_group}";return t.$get("/v1/discovery/users",{params:{fields:e}}).then((function(t){return t.filter((function(t){var e=t.post,r=t.user;return e&&r}))}))},getNearby:function(t){return t.$get("/v1/users/self/nearby",{params:{"polygon[0][lat]":90,"polygon[0][lng]":-180,"polygon[1][lat]":90,"polygon[1][lng]":180,"polygon[2][lat]":-90,"polygon[2][lng]":180,"polygon[3][lat]":-90,"polygon[3][lng]":-180,fields:"user{id,full_name,username,email,profile_image,visible_location}"}})},getDocumentaries:function(t){return t.$get("/v1/discovery/documentaries")}}},414:function(t,e,r){"use strict";var n=r(0),component=Object(n.a)({},(function(){var t=this.$createElement,e=this._self._c||t;return e("svg",this._g({attrs:{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 288 144"}},this.$listeners),[e("g",{attrs:{fill:"var(--yellow)"}},[e("path",{attrs:{d:"M192 0l-24 24h48zM48 0L24 24h48zM24 24L0 48h48zM72 24L48 48h48zM24 72L0 96h48zM168 24L144 0v48zM24 120L0 96v48zM216 24l24 24V0zM72 120l24 24V96zM192 48l24-24h-48z"}}),e("path",{attrs:{d:"M48 48l24-24H24zM72 72l24-24H48zM24 120l24-24H0zM24 72l24-24H0zM72 24L96 0H48z"}})]),e("g",{attrs:{fill:"var(--pink-secondary)"}},[e("path",{attrs:{d:"M264 24l24-24h-48zM48 144l24-24H24zM48 96l-24 24h48zM144 48V0H96z"}})]),e("g",{attrs:{fill:"var(--brown-ornament-light)"}},[e("path",{attrs:{d:"M144 48L96 0v48zM0 48L48 0H0zM168 24l24-24h-48zM24 72L0 48v48z"}})]),e("g",{attrs:{fill:"var(--brown-ornament-dark)"}},[e("path",{attrs:{d:"M216 24l24-24h-48zM72 24l24 24V0zM24 72l24 24V48zM48 96l24 24V72zM72 72L48 48v48zM96 96L72 72v48z"}})])])}),[],!1,null,null,null);e.a=component.exports},503:function(t,e,r){"use strict";r.r(e);r(10);var n=r(5),l=r(397),o=r(29),c=(r(147),r(84)),d=r(16),m=r(7),h=r(22),v=r(82),f={components:{CommonMediaPhoto:h.a,CommonMediaVideo:v.a},props:{article:{type:Object,required:!0}},computed:{featuredMedia:function(){return this.$helpers.mediaByGroup(this.article.media,"article","featured",!0)}}},_=r(0),y=Object(_.a)(f,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return t.featuredMedia?r("div",{staticClass:"relative pt-8/12"},["image"===t.featuredMedia.type?r("common-media-photo",{attrs:{photo:t.featuredMedia}}):t._e(),t._v(" "),"video"===t.featuredMedia.type?r("common-media-video",{attrs:{video:t.featuredMedia,"is-zoomable":!0}}):t._e()],1):t._e()}),[],!1,null,null,null).exports,x=(r(61),r(18)),k=(r(53),r(156),{components:{CommonMediaPhoto:h.a},props:{media:{type:Object,required:!0}},computed:{description:function(){return this.media.meta.description||null},credits:function(){return this.media.meta.credits||null},classes:function(){var t=this.description||this.credits;return{"my-15":!0,"border-b-1":t,"border-gray-secondary":t,"pb-15":t}}}}),M=Object(_.a)(k,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{class:t.classes},[r("div",{staticClass:"relative pt-8/12"},[r("common-media-photo",{attrs:{photo:t.media,"is-zoomable":!0,alt:t.description,title:t.description}})],1),t._v(" "),t.description?r("p",{staticClass:"text-gray-primary font-bold"},[t._v("\n        "+t._s(t.description)+"\n    ")]):t._e(),t._v(" "),t.credits?r("p",{staticClass:"mt-0"},[t._v("\n        "+t._s(t.credits)+"\n    ")]):t._e()])}),[],!1,null,null,null).exports,w=r(414),C={components:{IconQuote:Object(_.a)({},(function(){var t=this.$createElement,e=this._self._c||t;return e("svg",this._g({attrs:{width:"31",height:"38"}},this.$listeners),[e("g",{attrs:{transform:"translate(1 1)",fill:"none","fill-rule":"evenodd"}},[e("text",{attrs:{"font-family":"RobotoSlab-Regular_Bold, Roboto Slab","font-size":"24","font-weight":"bold",fill:"currentColor"}},[e("tspan",{attrs:{x:"9",y:"30"}},[this._v("“")])]),e("circle",{attrs:{stroke:"currentColor",cx:"14.5",cy:"14.5",r:"14.5"}})])])}),[],!1,null,null,null).exports,ShapeOrnament2:w.a},props:{text:{type:String,required:!0}}},A=Object(_.a)(C,(function(){var t=this.$createElement,e=this._self._c||t;return e("blockquote",{staticClass:"my-20 font-bold bg-maize p-50 text-brown-primary text-25 text-center flex flex-col items-center relative"},[e("shape-ornament-2",{staticClass:"absolute left-0 top-0 block w-140"}),this._v(" "),e("shape-ornament-2",{staticClass:"absolute right-0 bottom-0 block w-140 transform scale-x-flip scale-y-flip"}),this._v(" "),e("icon-quote",{staticClass:"w-40 h-40 text-brown-primary"}),this._v(" "),e("div",{staticClass:"mt-10 mb-30",domProps:{innerHTML:this._s(this.$markdown.makeHtml(this.text))}})],1)}),[],!1,null,null,null).exports,$=[{regex:/!\[\]\(image\/\d+\)/g,type:"image",resolver:function(t,e){var r=parseInt(e.match(/\d+/g)[0]),n=t.article.media.findIndex((function(t){return parseInt(t.id)===r}));return-1!==n?t.article.media[n]:null}},{regex:/(\n(&gt;|>)(.*))+/g,type:"blockquote",resolver:function(t,e){return e.replace(/\n> /g,"\n")}}],z={components:{DiscoverArticleBlockquote:A,DiscoverArticlePhoto:M},props:{article:{type:Object,required:!0}},computed:{contentBlocks:function(){return this.parseMarkdown(this.article.text)}},methods:{parseMarkdown:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=$[e],n=r.type,l=r.resolver,o=this.matchNode(t,e),c=o.matches,d=o.parts,m=[];if(!c||0===c.length)return e<$.length-1?this.parseMarkdown(t,e+1):[{type:"markdown",content:t}];for(;d.length;)e<$.length-1?m.push.apply(m,Object(x.a)(this.parseMarkdown(d.shift(),e+1))):m.push({type:"markdown",content:d.shift()}),c&&c.length&&m.push({type:n,content:l(this,c.shift())});return m},matchNode:function(t,e){var r=$[e],n=r.regex,l=r.type,o=t.match(n),c="<<".concat(l,">>"),d=[];return o&&o.length>0&&(o.forEach((function(e){t=t.replace(e,c)})),d=t.split(c)),{matches:o,parts:d}}}},j={components:{DiscoverArticleInnerContent:Object(_.a)(z,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"discovery-article"},[t._l(t.contentBlocks,(function(e,n){return["markdown"===e.type?r("div",{key:n,domProps:{innerHTML:t._s(t.$markdown.makeHtml(e.content))}}):t._e(),t._v(" "),"blockquote"===e.type?r("discover-article-blockquote",{key:n,attrs:{text:e.content}}):t._e(),t._v(" "),"image"===e.type&&e.content?r("discover-article-photo",{key:n,attrs:{media:e.content}}):t._e()]}))],2)}),[],!1,null,null,null).exports,IconMenuBack:c.a,CommonHeading:d.a,CommonButton:m.a,DiscoverArticleFeaturedMedia:y},props:{article:{type:Object,required:!0},allArticles:{type:Array,required:!0}},computed:{backButton:function(){return{travel_tip:{label:this.$t("discover.submenu.travel_tips"),route:"/discover/travel-tips"},popular:{label:this.$t("discover.submenu.popular"),route:"/discover/popular"},journey:{label:this.$t("discover.submenu.journeys"),route:"/discover/journeys"}}[this.article.type]},currentArticleIndex:function(){var t=this;return this.allArticles.findIndex((function(e){var r=e.id;return t.article.id===r}))},previousArticle:function(){return 0!==this.currentArticleIndex&&this.allArticles[this.currentArticleIndex-1]},nextArticle:function(){return this.currentArticleIndex!==this.allArticles.length-1&&this.allArticles[this.currentArticleIndex+1]}}},O=Object(_.a)(j,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("main",[r("header",{staticClass:"mb-30 md:mb-40"},[r("nuxt-link",{staticClass:"px-20 -mx-20 h-55 inline-flex items-center text-pink-primary hover:text-brown-primary font-slab tracking-wider text-13 lg:text-14",attrs:{to:t.backButton.route}},[r("icon-menu-back",{staticClass:"h-20 w-20 mr-10"}),t._v(" "),r("span",[t._v(t._s(t.backButton.label))])],1),t._v(" "),r("common-heading",{staticClass:"mt-20 text-brown-primary",attrs:{type:"tertiary"}},[t._v("\n            "+t._s(t.article.title)+"\n        ")])],1),t._v(" "),r("discover-article-featured-media",{staticClass:"mb-30 -mx-30 md:mb-30 md:mx-0",attrs:{article:t.article}}),t._v(" "),r("discover-article-inner-content",{attrs:{article:t.article}}),t._v(" "),r("nav",{staticClass:"flex mt-30"},[r("common-button",{staticClass:"mr-5",attrs:{route:t.previousArticle?t.$link.showArticle(t.previousArticle):null,"is-stretched":!0,"is-disabled":!t.previousArticle,type:"secondary",size:"medium"},scopedSlots:t._u([{key:"label",fn:function(){return[r("span",{staticClass:"hidden sm:block"},[t._v("\n                    "+t._s(t.$t("discover.article.previous.long"))+"\n                ")]),t._v(" "),r("span",{staticClass:"sm:hidden"},[t._v("\n                    "+t._s(t.$t("discover.article.previous.short"))+"\n                ")])]},proxy:!0}])}),t._v(" "),r("common-button",{staticClass:"ml-5",attrs:{route:t.nextArticle?t.$link.showArticle(t.nextArticle):null,"is-stretched":!0,"is-disabled":!t.nextArticle,type:"primary",size:"medium"},scopedSlots:t._u([{key:"label",fn:function(){return[r("span",{staticClass:"hidden sm:block"},[t._v("\n                    "+t._s(t.$t("discover.article.next.long"))+"\n                ")]),t._v(" "),r("span",{staticClass:"sm:hidden"},[t._v("\n                    "+t._s(t.$t("discover.article.next.short"))+"\n                ")])]},proxy:!0}])})],1)],1)}),[],!1,null,null,null).exports,L={components:{CommonUserInfo:r(46).a,CommonMediaPhoto:h.a},props:{article:{type:Object,required:!0},allArticles:{type:Array,required:!0}},computed:{relatedArticles:function(){var t=this;return this.allArticles.filter((function(e){var r=e.id;return t.article.id!==r})).slice(0,3)},authorType:function(){return this.article.author_type||(this.article.author?"internal":"external")},authorSubtitle:function(){return{external:this.$t("discover.article.author_type.external"),internal:this.$t("discover.article.author_type.internal"),official:this.$t("discover.article.author_type.official")}[this.authorType]},authorProps:function(){return{user:{external:{full_name:this.article.author_name},internal:this.article.author,official:{full_name:this.$t("discover.article.author_official")}}[this.authorType],isLink:"internal"===this.authorType}},hasAuthor:function(){return"official"===this.authorType||this.article.author_name||this.article.author}},methods:{relatedArticlePoster:function(t){return this.$helpers.mediaByGroup(t.media,"article","featured",!0)}}},H=Object(_.a)(L,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("aside",{staticClass:"pt-30 md:pt-15 text-13"},[t.hasAuthor?r("section",[r("p",{staticClass:"mb-20"},[t._v("\n            "+t._s(t.$t("discover.article.posted_at_by",{date:t.$dayjs(t.article.published_at).format("DD MMMM YYYY")}))+"\n        ")]),t._v(" "),r("div",{staticClass:"min-h-80 px-20 py-15 bg-gray-sixfold border-1 border-black-5 flex items-center"},[r("common-user-info",t._b({scopedSlots:t._u([t.authorSubtitle?{key:"text",fn:function(){return[r("p",{staticClass:"font-slab tracking-wider text-brown-primary"},[t._v("\n                        "+t._s(t.authorSubtitle)+"\n                    ")])]},proxy:!0}:null],null,!0)},"common-user-info",t.authorProps,!1))],1)]):t._e(),t._v(" "),t.relatedArticles?r("section",{staticClass:"mt-20 first:mt-0"},[r("h4",{staticClass:"mb-15"},[t._v("\n            "+t._s(t.$t("discover.article.more_like_this"))+"\n        ")]),t._v(" "),t._l(t.relatedArticles,(function(e){return r("nuxt-link",{key:e.id,staticClass:"mt-5 bg-gray-sixfold border-1 border-black-5 flex items-center text-brown-primary hover:text-pink-primary",attrs:{to:t.$link.showArticle(e)}},[r("div",{staticClass:"relative h-70 min-w-70 w-70 -m-1 mr-15"},[r("common-media-photo",{attrs:{photo:t.relatedArticlePoster(e)}})],1),t._v(" "),r("div",{staticClass:"truncate pr-15"},[r("h5",{staticClass:"text-13 font-slab tracking-wider truncate w-full"},[t._v("\n                    "+t._s(e.title)+"\n                ")]),t._v(" "),r("p",{staticClass:"text-13 text-gray-primary"},[t._v("\n                    "+t._s(t.$dayjs(e.published_at).format("DD MMMM YYYY"))+"\n                ")])])])}))],2):t._e()])}),[],!1,null,null,null).exports,I={scrollToTop:!0,components:{CommonContainer:o.a,DiscoverArticleContent:O,DiscoverArticleSidebar:H},asyncData:function(t){return Object(n.a)(regeneratorRuntime.mark((function e(){var r,n,o,article,c;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.$axios,n=t.params,o=t.error,e.prev=1,e.next=4,l.a.getArticle(r,n.id);case 4:return article=e.sent,e.next=7,l.a[{journey:"getJourneys",travel_tip:"getTravelTips",popular:"getPopular"}[article.type]](r);case 7:return c=e.sent,e.abrupt("return",{article:article,allArticles:c});case 11:e.prev=11,e.t0=e.catch(1),o({statusCode:404});case 14:case"end":return e.stop()}}),e,null,[[1,11]])})))()},head:function(){return{title:this.article.title}}},T=Object(_.a)(I,(function(){var t=this.$createElement,e=this._self._c||t;return e("common-container",{attrs:{size:"lg"}},[e("article",{key:this.article.id,staticClass:"flex flex-col md:flex-row mb-30 md:mb-60"},[e("discover-article-content",{staticClass:"w-full md:max-w-620",attrs:{article:this.article,"all-articles":this.allArticles}}),this._v(" "),e("discover-article-sidebar",{staticClass:"md:min-w-300 md:w-300 md:ml-auto",attrs:{article:this.article,"all-articles":this.allArticles}})],1)])}),[],!1,null,null,null);e.default=T.exports}}]);