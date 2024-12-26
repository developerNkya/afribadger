<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from bda1aad9-cb58-401a-8a47-526b318e3266.yotako.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 22:22:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="max-image-preview:large" />
    <style>
        img:is([sizes="auto" i],
        [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px;
        }
    </style>
    <title>developernkya@gmail.com</title>
    <link rel="dns-prefetch" href="http://unpkg.com/" />
    <link rel="dns-prefetch" href="http://storage.googleapis.com/" />
    <link rel="alternate" type="application/rss+xml" title="developernkya@gmail.com &raquo; Feed"
        href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="developernkya@gmail.com &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <script>
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/bda1aad9-cb58-401a-8a47-526b318e3266.yotako.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1') }}",
            },
        };
        /*! This file is auto-generated */
        !(function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: new Date().valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t));
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                var t = new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ),
                    r =
                    (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(n, 0, 0),
                        new Uint32Array(
                            e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                        ));
                return t.every(function(e, t) {
                    return e === r[t];
                });
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(
                                e,
                                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                            ) ?
                            !1 :
                            !n(
                                e,
                                "\ud83c\uddfa\ud83c\uddf3",
                                "\ud83c\uddfa\u200b\ud83c\uddf3"
                            ) &&
                            !n(
                                e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(
                            e,
                            "\ud83d\udc26\u200d\u2b1b",
                            "\ud83d\udc26\u200b\u2b1b"
                        );
                }
                return !1;
            }

            function f(e, t, n) {
                var r =
                    "undefined" != typeof WorkerGlobalScope &&
                    self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) :
                    i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                return (
                    e.forEach(function(e) {
                        o[e] = t(a, e, n);
                    }),
                    o
                );
            }

            function t(e) {
                var t = i.createElement("script");
                (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
                ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }),
                    (e = new Promise(function(e) {
                        i.addEventListener("DOMContentLoaded", e, {
                            once: !0
                        });
                    })),
                    new Promise(function(t) {
                        var n = (function() {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if (
                                    "object" == typeof e &&
                                    "number" == typeof e.timestamp &&
                                    new Date().valueOf() < e.timestamp + 604800 &&
                                    "object" == typeof e.supportTests
                                )
                                    return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if (
                                "undefined" != typeof Worker &&
                                "undefined" != typeof OffscreenCanvas &&
                                "undefined" != typeof URL &&
                                URL.createObjectURL &&
                                "undefined" != typeof Blob
                            )
                                try {
                                    var e =
                                        "postMessage(" +
                                        f.toString() +
                                        "(" + [JSON.stringify(s), u.toString(), p.toString()].join(
                                            ","
                                        ) +
                                        "));",
                                        r = new Blob([e], {
                                            type: "text/javascript"
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: "wpTestEmojiSupports",
                                        });
                                    return void(a.onmessage = function(e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                    .then(function(e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                            (n.supports.everything =
                                n.supports.everything && n.supports[t]),
                            "flag" !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag && n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && !n.supports.flag),
                        (n.DOMReady = !1),
                        (n.readyCallback = function() {
                            n.DOMReady = !0;
                        });
                    })
                    .then(function() {
                        return e;
                    })
                    .then(function() {
                        var e;
                        n.supports.everything ||
                            (n.readyCallback(),
                                (e = n.source || {}).concatemoji ?
                                t(e.concatemoji) :
                                e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                    }));
        })((window, document), window._wpemojiSettings);
    </script>
    <style id="wp-block-spacer-inline-css">
        .wp-block-spacer {
            clear: both;
        }
    </style>
    <style id="wp-block-group-inline-css">
        .wp-block-group {
            box-sizing: border-box;
        }

        :where(.wp-block-group.wp-block-group-is-layout-constrained) {
            position: relative;
        }
    </style>
    <style id="wp-block-image-inline-css">
        .wp-block-image a {
            display: inline-block;
        }

        .wp-block-image img {
            box-sizing: border-box;
            height: auto;
            max-width: 100%;
            vertical-align: bottom;
        }

        @media (prefers-reduced-motion: no-preference) {
            .wp-block-image img.hide {
                visibility: hidden;
            }

            .wp-block-image img.show {
                animation: show-content-image 0.4s;
            }
        }

        .wp-block-image[style*="border-radius"] img,
        .wp-block-image[style*="border-radius"]>a {
            border-radius: inherit;
        }

        .wp-block-image.has-custom-border img {
            box-sizing: border-box;
        }

        .wp-block-image.aligncenter {
            text-align: center;
        }

        .wp-block-image.alignfull a,
        .wp-block-image.alignwide a {
            width: 100%;
        }

        .wp-block-image.alignfull img,
        .wp-block-image.alignwide img {
            height: auto;
            width: 100%;
        }

        .wp-block-image .aligncenter,
        .wp-block-image .alignleft,
        .wp-block-image .alignright,
        .wp-block-image.aligncenter,
        .wp-block-image.alignleft,
        .wp-block-image.alignright {
            display: table;
        }

        .wp-block-image .aligncenter>figcaption,
        .wp-block-image .alignleft>figcaption,
        .wp-block-image .alignright>figcaption,
        .wp-block-image.aligncenter>figcaption,
        .wp-block-image.alignleft>figcaption,
        .wp-block-image.alignright>figcaption {
            caption-side: bottom;
            display: table-caption;
        }

        .wp-block-image .alignleft {
            float: left;
            margin: 0.5em 1em 0.5em 0;
        }

        .wp-block-image .alignright {
            float: right;
            margin: 0.5em 0 0.5em 1em;
        }

        .wp-block-image .aligncenter {
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-image :where(figcaption) {
            margin-bottom: 1em;
            margin-top: 0.5em;
        }

        .wp-block-image.is-style-circle-mask img {
            border-radius: 9999px;
        }

      

        :root :where(.wp-block-image.is-style-rounded img,
            .wp-block-image .is-style-rounded img) {
            border-radius: 9999px;
        }

        .wp-block-image figure {
            margin: 0;
        }

        .wp-lightbox-container {
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .wp-lightbox-container img {
            cursor: zoom-in;
        }

        .wp-lightbox-container img:hover+button {
            opacity: 1;
        }

        .wp-lightbox-container button {
            align-items: center;
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            backdrop-filter: blur(16px) saturate(180%);
            background-color: #5a5a5a40;
            border: none;
            border-radius: 4px;
            cursor: zoom-in;
            display: flex;
            height: 20px;
            justify-content: center;
            opacity: 0;
            padding: 0;
            position: absolute;
            right: 16px;
            text-align: center;
            top: 16px;
            transition: opacity 0.2s ease;
            width: 20px;
            z-index: 100;
        }

        .wp-lightbox-container button:focus-visible {
            outline: 3px auto #5a5a5a40;
            outline: 3px auto -webkit-focus-ring-color;
            outline-offset: 3px;
        }

        .wp-lightbox-container button:hover {
            cursor: pointer;
            opacity: 1;
        }

        .wp-lightbox-container button:focus {
            opacity: 1;
        }

        .wp-lightbox-container button:focus,
        .wp-lightbox-container button:hover,
        .wp-lightbox-container button:not(:hover):not(:active):not(.has-background) {
            background-color: #5a5a5a40;
            border: none;
        }

        .wp-lightbox-overlay {
            box-sizing: border-box;
            cursor: zoom-out;
            height: 100vh;
            left: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            visibility: hidden;
            width: 100%;
            z-index: 100000;
        }

        .wp-lightbox-overlay .close-button {
            align-items: center;
            cursor: pointer;
            display: flex;
            justify-content: center;
            min-height: 40px;
            min-width: 40px;
            padding: 0;
            position: absolute;
            right: calc(env(safe-area-inset-right) + 16px);
            top: calc(env(safe-area-inset-top) + 16px);
            z-index: 5000000;
        }

        .wp-lightbox-overlay .close-button:focus,
        .wp-lightbox-overlay .close-button:hover,
        .wp-lightbox-overlay .close-button:not(:hover):not(:active):not(.has-background) {
            background: none;
            border: none;
        }

        .wp-lightbox-overlay .lightbox-image-container {
            height: var(--wp--lightbox-container-height);
            left: 50%;
            overflow: hidden;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transform-origin: top left;
            width: var(--wp--lightbox-container-width);
            z-index: 9999999999;
        }

        .wp-lightbox-overlay .wp-block-image {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            height: 100%;
            justify-content: center;
            margin: 0;
            position: relative;
            transform-origin: 0 0;
            width: 100%;
            z-index: 3000000;
        }

        .wp-lightbox-overlay .wp-block-image img {
            height: var(--wp--lightbox-image-height);
            min-height: var(--wp--lightbox-image-height);
            min-width: var(--wp--lightbox-image-width);
            width: var(--wp--lightbox-image-width);
        }

        .wp-lightbox-overlay .wp-block-image figcaption {
            display: none;
        }

        .wp-lightbox-overlay button {
            background: none;
            border: none;
        }

        .wp-lightbox-overlay .scrim {
            background-color: #fff;
            height: 100%;
            opacity: 0.9;
            position: absolute;
            width: 100%;
            z-index: 2000000;
        }

        .wp-lightbox-overlay.active {
            animation: turn-on-visibility 0.25s both;
            visibility: visible;
        }

        .wp-lightbox-overlay.active img {
            animation: turn-on-visibility 0.35s both;
        }

        .wp-lightbox-overlay.show-closing-animation:not(.active) {
            animation: turn-off-visibility 0.35s both;
        }

        .wp-lightbox-overlay.show-closing-animation:not(.active) img {
            animation: turn-off-visibility 0.25s both;
        }

        @media (prefers-reduced-motion: no-preference) {
            .wp-lightbox-overlay.zoom.active {
                animation: none;
                opacity: 1;
                visibility: visible;
            }

            .wp-lightbox-overlay.zoom.active .lightbox-image-container {
                animation: lightbox-zoom-in 0.4s;
            }

            .wp-lightbox-overlay.zoom.active .lightbox-image-container img {
                animation: none;
            }

            .wp-lightbox-overlay.zoom.active .scrim {
                animation: turn-on-visibility 0.4s forwards;
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) {
                animation: none;
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container {
                animation: lightbox-zoom-out 0.4s;
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container img {
                animation: none;
            }

            .wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .scrim {
                animation: turn-off-visibility 0.4s forwards;
            }
        }

        @keyframes show-content-image {
            0% {
                visibility: hidden;
            }

            99% {
                visibility: hidden;
            }

            to {
                visibility: visible;
            }
        }

        @keyframes turn-on-visibility {
            0% {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes turn-off-visibility {
            0% {
                opacity: 1;
                visibility: visible;
            }

            99% {
                opacity: 0;
                visibility: visible;
            }

            to {
                opacity: 0;
                visibility: hidden;
            }
        }

        @keyframes lightbox-zoom-in {
            0% {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width)) / 2 + var(--wp--lightbox-initial-left-position)),
                        calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale));
            }

            to {
                transform: translate(-50%, -50%) scale(1);
            }
        }

        @keyframes lightbox-zoom-out {
            0% {
                transform: translate(-50%, -50%) scale(1);
                visibility: visible;
            }

            99% {
                visibility: visible;
            }

            to {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width)) / 2 + var(--wp--lightbox-initial-left-position)),
                        calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale));
                visibility: hidden;
            }
        }
    </style>
    <style id="wp-block-heading-inline-css">
        h1.has-background,
        h2.has-background,
        h3.has-background,
        h4.has-background,
        h5.has-background,
        h6.has-background {
            padding: 1.25em 2.375em;
        }

        h1.has-text-align-left[style*="writing-mode"]:where([style*="vertical-lr"]),
        h1.has-text-align-right[style*="writing-mode"]:where([style*="vertical-rl"]),
        h2.has-text-align-left[style*="writing-mode"]:where([style*="vertical-lr"]),
        h2.has-text-align-right[style*="writing-mode"]:where([style*="vertical-rl"]),
        h3.has-text-align-left[style*="writing-mode"]:where([style*="vertical-lr"]),
        h3.has-text-align-right[style*="writing-mode"]:where([style*="vertical-rl"]),
        h4.has-text-align-left[style*="writing-mode"]:where([style*="vertical-lr"]),
        h4.has-text-align-right[style*="writing-mode"]:where([style*="vertical-rl"]),
        h5.has-text-align-left[style*="writing-mode"]:where([style*="vertical-lr"]),
        h5.has-text-align-right[style*="writing-mode"]:where([style*="vertical-rl"]),
        h6.has-text-align-left[style*="writing-mode"]:where([style*="vertical-lr"]),
        h6.has-text-align-right[style*="writing-mode"]:where([style*="vertical-rl"]) {
            rotate: 180deg;
        }
    </style>
    <style id="wp-block-paragraph-inline-css">
        .is-small-text {
            font-size: 0.875em;
        }

        .is-regular-text {
            font-size: 1em;
        }

        .is-large-text {
            font-size: 2.25em;
        }

        .is-larger-text {
            font-size: 3em;
        }

        .has-drop-cap:not(:focus):first-letter {
            float: left;
            font-size: 8.4em;
            font-style: normal;
            font-weight: 100;
            line-height: 0.68;
            margin: 0.05em 0.1em 0 0;
            text-transform: uppercase;
        }

        body.rtl .has-drop-cap:not(:focus):first-letter {
            float: none;
            margin-left: 0.1em;
        }

        p.has-drop-cap.has-background {
            overflow: hidden;
        }

        :root :where(p.has-background) {
            padding: 1.25em 2.375em;
        }

        :where(p.has-text-color:not(.has-link-color)) a {
            color: inherit;
        }

        p.has-text-align-left[style*="writing-mode:vertical-lr"],
        p.has-text-align-right[style*="writing-mode:vertical-rl"] {
            rotate: 180deg;
        }
    </style>
    <style id="yotako-block-anchor-style-inline-css">
        .wp-block-yotako-block-blocka {
            background-color: #21759b;
            color: #fff;
            padding: 2px;
        }
    </style>
    <style id="wp-block-post-content-inline-css">
        .wp-block-post-content {
            display: flow-root;
        }
    </style>
    <style id="wp-emoji-styles-inline-css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id="wp-block-library-inline-css">
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: var(--wp-block-synced-color);
        }

        @media (min-resolution: 192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px;
            }
        }

        .wp-element-button {
            cursor: pointer;
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px;
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee;
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131;
        }

        :root .has-very-light-gray-color {
            color: #eee;
        }

        :root .has-very-dark-gray-color {
            color: #313131;
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3);
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe);
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec);
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671);
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59);
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf);
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc);
        }

        .has-regular-font-size {
            font-size: 1em;
        }

        .has-larger-font-size {
            font-size: 2.625em;
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal);
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge);
        }

        .has-text-align-center {
            text-align: center;
        }

        .has-text-align-left {
            text-align: left;
        }

        .has-text-align-right {
            text-align: right;
        }

        #end-resizable-editor-section {
            display: none;
        }

        .aligncenter {
            clear: both;
        }

        .items-justified-left {
            justify-content: flex-start;
        }

        .items-justified-center {
            justify-content: center;
        }

        .items-justified-right {
            justify-content: flex-end;
        }

        .items-justified-space-between {
            justify-content: space-between;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
        }

        html :where(.has-border-color) {
            border-style: solid;
        }

        html :where([style*="border-top-color"]) {
            border-top-style: solid;
        }

        html :where([style*="border-right-color"]) {
            border-right-style: solid;
        }

        html :where([style*="border-bottom-color"]) {
            border-bottom-style: solid;
        }

        html :where([style*="border-left-color"]) {
            border-left-style: solid;
        }

        html :where([style*="border-width"]) {
            border-style: solid;
        }

        html :where([style*="border-top-width"]) {
            border-top-style: solid;
        }

        html :where([style*="border-right-width"]) {
            border-right-style: solid;
        }

        html :where([style*="border-bottom-width"]) {
            border-bottom-style: solid;
        }

        html :where([style*="border-left-width"]) {
            border-left-style: solid;
        }

        html :where(img[class*="wp-image-"]) {
            height: auto;
            max-width: 100%;
        }

        :where(figure) {
            margin: 0 0 1em;
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height,
                    0px);
        }

        @media screen and (max-width: 600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px;
            }
        }
    </style>
    <style id="global-styles-inline-css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <style id="wp-block-template-skip-link-inline-css">
        .skip-link.screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
        }

        .skip-link.screen-reader-text:focus {
            background-color: #eee;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
        }
    </style>
    <link rel="stylesheet" id="style-css"
        href="{{ asset('wp-content/themes/yotako-theme-8c762f7c-a6c2-4968-a5c0-7b8325a8ebde-oAUAPj/style9704.css?ver=6.7.1') }}"
        media="all" />
    <link rel="stylesheet" id="Roboto-css"
        href="{{ asset('storage.googleapis.com/yotako-fonts/CdnFonts/css/Roboto9704.css?ver=6.7.1') }}"
        media="all" />
        <link rel="stylesheet"
        href="{{ asset('css/home.css') }}"
        media="all" />
    <link rel="stylesheet" id="Bobaland-css"
        href="{{ asset('storage.googleapis.com/yotako-fonts/CdnFonts/css/Bobaland9704.css?ver=6.7.1') }}"
        media="all" />
    <script
        src="{{ asset('wp-content/themes/yotako-theme-8c762f7c-a6c2-4968-a5c0-7b8325a8ebde-oAUAPj/script9704.js?ver=6.7.1') }}"
        id="custom-script-js"></script>
    <script src="{{ asset('unpkg.com/js-alert%402.0.0/dist/jsalert.min.js?ver=6.7.1') }}" id="js-alert-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/9.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.7.1" />
    <link rel="canonical" href="index.html" />
    <link rel="shortlink" href="index.html" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="wp-json/oembed/1.0/embedf995.json?url=https%3A%2F%2Fbda1aad9-cb58-401a-8a47-526b318e3266.yotako.com%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed2703?url=https%3A%2F%2Fbda1aad9-cb58-401a-8a47-526b318e3266.yotako.com%2F&amp;format=xml" />
</head>

<body class="home page-template-default page page-id-9 wp-embed-responsive">
    <div class="wp-site-blocks">
        <main class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
            <div
                class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">
                <div class="wp-block-group All_tours is-layout-flow wp-block-group-is-layout-flow">
                    <div
                        class="vp_1440 size_1440 viewport_ab465fe8651d wp-block-group yotako-main is-layout-flow wp-block-group-is-layout-flow">
                        <div class="wp-block-group container_44a28b75ef26 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <figure class="imageview_246bbe19a2b8 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/97:1636.webp" />
                        </figure>

                        <figure class="imageview_919f97286a77 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3123.webp" />
                        </figure>

                        <div
                            class="wp-block-group container_567b824f6977 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <h2 class="text_62665caea419 has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 63.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Safari Tours in Tanzania
                        </h2>

                        <h2 class="text_6344d8c1205d has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 63.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Safari Tours in Tanzania
                        </h2>

                        <figure class="imageview_c73086d3db09 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/97:1670.svg" />
                        </figure>

                        <h2 class="text_651201c51c76 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 47.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                ">
                            Discover the Difference with <br />Camelleon Safaris
                        </h2>

                        <figure class="imageview_0971821a99a6 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/207:940.webp" />
                        </figure>

                        <div
                            class="wp-block-group container_2d078b63e8c6 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <p class="text_ba05be332dc5 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            Camel Leon Safaris Ltd. was born out of a love for the idea of
                            adapting to various environments, mirroring the chameleon&apos;s
                            ability. Our founders wanted to share this experience with
                            people in the wilds of Africa, highlighting the beauty of nature
                            when one immerses and adapts to it.
                        </p>

                        <p class="text_8d0d8f83f4fe has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            United Republic of Tanzania, Kilimanjaro Region Nshara,Aishi
                            Road, Plot 173A | P.O Box 938
                        </p>

                        <p class="text_a04e4035e2b8 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            Travel Tips
                        </p>

                        <p class="text_2c381a27ca80 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            Camelleon Safaris
                        </p>

                        <p class="text_622932141916 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            Contact Information
                        </p>

                        <div class="wp-block-yotako-block-anchor">
                            <a href="https://serengeticlarity.com/tanzania-entry-requirements/" class=""
                                target="_self" rel="noopener">
                                <p class="text_cd3f57e0ec96 has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 500;
                      text-decoration: underline;
                      letter-spacing: -0.5px;
                      color: #808080;
                      background-color: transparent;
                    ">
                                    Entry Requirements
                                </p>
                            </a>
                        </div>
                        <p class="text_38c52906d0f9 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            About US
                        </p>

                        <p class="text_a7e37cadc556 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            Sales &#038; Safari Expert
                        </p>

                        <div class="wp-block-yotako-block-anchor">
                            <a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/" class=""
                                target="_self" rel="noopener">
                                <p class="text_ffbc86a524ee has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 500;
                      text-decoration: underline;
                      letter-spacing: -0.5px;
                      color: #808080;
                      background-color: transparent;
                    ">
                                    Tanzania Safari Planning Guide
                                </p>
                            </a>
                        </div>
                        <p class="text_932eae8b3192 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            Terms And Cionditions
                        </p>

                        <p class="text_76660ae6989b has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 17.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            +25568 655 5755
                        </p>

                        <div class="wp-block-yotako-block-anchor">
                            <a href="https://serengeticlarity.com/best-time-to-visit-tanzania/" class=""
                                target="_self" rel="noopener">
                                <p class="text_4c41c790afca has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 500;
                      text-decoration: underline;
                      letter-spacing: -0.5px;
                      color: #808080;
                      background-color: transparent;
                    ">
                                    Best time to visit Tanzania
                                </p>
                            </a>
                        </div>
                        <p class="text_3e9c3d2258df has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            Booking Process
                        </p>

                        <div class="wp-block-yotako-block-anchor">
                            <a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/" class=""
                                target="_self" rel="noopener">
                                <p class="text_eef45d0c362b has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 500;
                      text-decoration: underline;
                      letter-spacing: -0.5px;
                      color: #808080;
                      background-color: transparent;
                    ">
                                    Kilimanjaro Planning Guide
                                </p>
                            </a>
                        </div>
                        <p class="text_6388ed16c6aa has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            Payment Details
                        </p>

                        <p class="text_d0ebb9f207a8 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            info@camelleonsafaris.com
                        </p>

                        <div class="wp-block-yotako-block-anchor">
                            <a href="https://serengeticlarity.com/drones-photography-guidelines/" class=""
                                target="_self" rel="noopener">
                                <p class="text_54dbe0fbe867 has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 500;
                      text-decoration: underline;
                      letter-spacing: -0.5px;
                      color: #808080;
                      background-color: transparent;
                    ">
                                    Drones &#038; Photography Guide
                                </p>
                            </a>
                        </div>
                        <p class="text_e2f387b1da31 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #808080;
                  background-color: transparent;
                ">
                            Privacy Policy
                        </p>

                        <h3 class="text_0117f92be670 has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 19.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                ">
                            Our Popular Packages
                        </h3>

                        <h2 class="text_89083e5e2df0 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 47.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            East African Safaris Best <br />Holiday Packages
                        </h2>


                          @include('home.home_tours');
                         

                        <p class="text_45c5efce2a2c has-text-color has-background has-text-align-left"
                            style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                            Tipping Guide
                        </p>

                        <p class="text_0d7e86c7c1b7 has-text-color has-background has-text-align-left"
                            style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 17.5px;
                            font-weight: 900;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                            <span class="text-2de067a4bb81_0d7e86c7c1b7 has-text-color has-background"
                                style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 17.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">Immersive,
                                fascinating wildlife adventures in the heart of
                                Africa. Private safari packages in Tanzania from the leading
                                wildlife experts.<br />Few places in the world rival Tanzania
                                as a wildlife destination. Ranked #1 country for an </span><span
                                class="text-83ad0b6cab38_0d7e86c7c1b7 has-text-color has-background"
                                style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 18px;
                                font-weight: 500;
                                text-decoration: underline;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              "><a
                                    href="https://altezza.travel/en" target="_blank"
                                    rel="noreferrer noopener">African
                                    safari</a></span><span
                                class="text-cbde5014e3bb_0d7e86c7c1b7 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 17.5px;
                    font-weight: 500;
                    letter-spacing: -0.5px;
                    color: #26461d;
                    background-color: transparent;
                  ">,
                                Tanzania hypnotizes with its pristine, wildest beauty. The
                                last sanctuary of the wildlife of such magnitude in the world,
                                Tanzania is a perfect spot for your vacation.<br />Altezza
                                Travel is a leading safari outfitter in Tanzania. Our
                                professional safari guiding experts, large safari fleet of the
                                newest comfortable Land Cruisers, modified for the expeditions
                                in the wilderness, and passionate travel consultants will make
                                your trip to Tanzania a lifetime adventure.</span>
                        </p>

                        <div
                            class="wp-block-group container_a8f119c87dec is-layout-flow wp-block-group-is-layout-flow">
                            <div
                                class="wp-block-group container_51c3b570696f is-layout-flow wp-block-group-is-layout-flow">
                                <figure class="imageview_c49d939a41ef wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I219:246;219:16.svg" />
                                </figure>

                                <div
                                    class="wp-block-group container_7102e5e4dcdf is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_50f8551c55f1 is-layout-flow wp-block-group-is-layout-flow">
                                        <p class="text_d5001500408f has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #26461d;
                          background-color: transparent;
                        ">
                                            Home
                                        </p>
                                    </div>

                                    <div
                                        class="wp-block-group container_6402411a7f33 is-layout-flow wp-block-group-is-layout-flow">
                                        <p class="text_bead69543599 has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #26461d;
                          background-color: transparent;
                        ">
                                            Tours
                                        </p>

                                        <figure class="imageview_61bc2f878625 wp-block-image">
                                            <img decoding="async"
                                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I219:246;218:19;242:460.svg" />
                                        </figure>
                                    </div>

                                    <div
                                        class="wp-block-group container_135cac80d3d4 is-layout-flow wp-block-group-is-layout-flow">
                                        <p class="text_086c942c373d has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #26461d;
                          background-color: transparent;
                        ">
                                            Mount Trekking
                                        </p>

                                        <figure class="imageview_04347264ab57 wp-block-image">
                                            <img decoding="async"
                                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I219:246;218:21;242:460.svg" />
                                        </figure>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="About_Us/index.html" class="" target="_self" rel="noopener">
                                            <div
                                                class="wp-block-group container_34c8747fc0cb is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_3cedf42755a7 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    About Us
                                                </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="Contact_Us/index.html" class="" target="_self"
                                            rel="noopener">
                                            <div
                                                class="wp-block-group container_df80c98a91b3 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_f9e4cb89395c has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    Contant Us
                                                </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor button_c63111f39e42">
                                        <a href="index.html" class="button_link_c63111f39e42" target="_self"
                                            rel="noopener">
                                            <p class="text_54b6702432cf has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Book&nbsp;&nbsp;a&nbsp;Tour
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="text_22bf21903cae has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Discover the Magical World of <br />Wildlife in Tanzania
                        </h2>

                        <h2 class="text_f7977b46e7c1 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Discover the Magical World of <br />Wildlife in Tanzania
                        </h2>

                        <div
                            class="wp-block-group container_7d73630aa6b1 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <h2 class="text_0ddc120d05cf has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            1
                        </h2>

                        <h2 class="text_f4756b5b15ef has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            2
                        </h2>

                        <h2 class="text_f75046a812ae has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            3
                        </h2>

                        <h2 class="text_70a9c6a95357 has-text-color has-background has-text-align-left wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            4
                        </h2>

                        <div class="wp-block-yotako-block-anchor button_92e7c2e8a7ab">
                            <a href="index.html" class="button_link_92e7c2e8a7ab" target="_self" rel="noopener">
                                <p class="text_63d5778232d1 has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 600;
                      letter-spacing: -0.5px;
                      color: #26461d;
                      background-color: transparent;
                    ">
                                    National Parks
                                </p>
                            </a>
                        </div>
                        <p class="text_20610c18bd72 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #717171;
                  background-color: transparent;
                ">
                            Beaches And Resorts
                        </p>

                        <p class="text_6ea2966bc63a has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #717171;
                  background-color: transparent;
                ">
                            Mountain Treaking
                        </p>
                    </div>

                    <div
                        class="vp_1007 size_834 viewport_9b5d192c8f42 wp-block-group yotako-main is-layout-flow wp-block-group-is-layout-flow">
                        <div
                            class="wp-block-group container_4bf5e645a196 is-layout-flow wp-block-group-is-layout-flow">
                            <h3 class="text_e2e6afc137cf has-text-color has-background has-text-align-left wp-block-heading"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 19.5px;
                    font-weight: 600;
                    letter-spacing: -0.5px;
                    color: #26461d;
                    background-color: transparent;
                  ">
                                Our Popular Packages
                            </h3>
                        </div>

                        <h2 class="text_971d320c6a36 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 47.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            East African Safaris Best <br />Holiday Packages
                        </h2>

                        <div class="wp-block-yotako-block-anchor button_2eb9caa90fe4">
                            <a href="index.html" class="button_link_2eb9caa90fe4" target="_self" rel="noopener">
                                <p class="text_5aefe5c37124 has-text-color has-background has-text-align-left"
                                    style="
                      text-transform: none;
                      font-style: normal;
                      font-size: 15.5px;
                      font-weight: 600;
                      letter-spacing: -0.5px;
                      color: #ffffff;
                      background-color: transparent;
                    ">
                                    Button Text
                                </p>

                                <figure class="imageview_db1aa438515d wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I413:1859;250:302.svg" />
                                </figure>
                            </a>
                        </div>

                        <figure class="imageview_39014710e4fb wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3127.webp" />
                        </figure>

                        <figure class="imageview_76cef5ddebb2 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3128.webp" />
                        </figure>

                        <div
                            class="wp-block-group container_df4069c657bc is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <h2 class="text_2425ae510f56 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 63.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Safari Tours in Tanzania
                        </h2>

                        <h2 class="text_745c1f55a2e9 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 400;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Discover the Magical World of <br />Wildlife in Tanzania
                        </h2>

                        <h2 class="text_4ea8e8d6cb25 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 47.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                ">
                            Discover the Difference with <br />Camelleon Safaris
                        </h2>

                        <p class="text_45afeb73ae26 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 17.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                ">
                            <span class="text-b62705cc3632_45afeb73ae26 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 17.5px;
                    font-weight: 500;
                    letter-spacing: -0.5px;
                    color: #26461d;
                    background-color: transparent;
                  ">Immersive,
                                fascinating wildlife adventures in the heart of
                                Africa. Private safari packages in Tanzania from the leading
                                wildlife experts. Few places in the world rival Tanzania as a
                                wildlife destination. Ranked #1 country for an </span><span
                                class="text-2c1f53ef203d_45afeb73ae26 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 18px;
                    font-weight: 500;
                    text-decoration: underline;
                    letter-spacing: -0.5px;
                    color: #26461d;
                    background-color: transparent;
                  "><a
                                    href="https://altezza.travel/en" target="_blank"
                                    rel="noreferrer noopener">African
                                    safari</a></span><span
                                class="text-e169c06c894b_45afeb73ae26 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 17.5px;
                    font-weight: 500;
                    letter-spacing: -0.5px;
                    color: #26461d;
                    background-color: transparent;
                  ">,&nbsp;Tanzania&nbsp;hypnotizes&nbsp;with&nbsp;its&nbsp;pristine,&nbsp;wildest&nbsp;beauty.&nbsp;The&nbsp;last&nbsp;sanctuary&nbsp;of&nbsp;the&nbsp;wildlife&nbsp;of&nbsp;such&nbsp;magnitude&nbsp;in&nbsp;the&nbsp;world,&nbsp;Tanzania&nbsp;is&nbsp;a&nbsp;perfect&nbsp;spot&nbsp;for&nbsp;your&nbsp;vacation.<br />Camelleon&nbsp;&nbsp;Travel&nbsp;is&nbsp;a&nbsp;leading&nbsp;safari&nbsp;outfitter&nbsp;in&nbsp;Tanzania.&nbsp;Our&nbsp;professional&nbsp;safari&nbsp;guiding&nbsp;experts,&nbsp;large&nbsp;safari&nbsp;fleet&nbsp;of&nbsp;the&nbsp;newest&nbsp;comfortable&nbsp;Land&nbsp;Cruisers,&nbsp;modified&nbsp;for&nbsp;the&nbsp;expeditions&nbsp;in&nbsp;the&nbsp;wilderness,&nbsp;and&nbsp;passionate&nbsp;travel&nbsp;consultants&nbsp;will&nbsp;make&nbsp;your&nbsp;trip&nbsp;to&nbsp;Tanzania&nbsp;a&nbsp;lifetime&nbsp;adventure.</span>
                        </p>

                        <figure class="imageview_5072149b035e wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3137.webp" />
                        </figure>

                        <div
                            class="wp-block-group container_39550c757905 is-layout-flow wp-block-group-is-layout-flow">
                            <div
                                class="wp-block-group container_c8a11a7e03ed is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_bfb9b8685d68 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_571af1729c1c is-layout-flow wp-block-group-is-layout-flow">
                                        <figure class="imageview_2f1a36e1593e wp-block-image">
                                            <img decoding="async"
                                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3142.svg" />
                                        </figure>

                                        <p class="text_654272eb8b22 has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #000000;
                          background-color: transparent;
                        ">
                                            Camel Leon Safaris Ltd. was born out of a love for the
                                            idea of adapting to various environments, mirroring the
                                            chameleon&apos;s ability. Our founders wanted to share
                                            this experience with people in the wilds of Africa,
                                            highlighting the beauty of nature when one immerses and
                                            adapts to it.
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="wp-block-group container_fbba48ffa871 is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_22b7df1669c4 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Travel Tips
                                    </p>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/tanzania-entry-requirements/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_e5f7a231efb7 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Entry Requirements
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_1f7d6ab90706 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Tanzania Safari Planning Guide
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/best-time-to-visit-tanzania/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_c30c094f1744 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Best time to visit Tanzania
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_882bec1a183c has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Kilimanjaro Planning Guide
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/drones-photography-guidelines/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_25c147501593 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Drones &#038; Photography Guide
                                            </p>
                                        </a>
                                    </div>
                                    <p class="text_95e2ee1d127e has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Tipping Guide
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group container_d06721a1562b is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_5400236ae562 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Camelleon Safaris
                                    </p>

                                    <p class="text_826370a02777 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        About US
                                    </p>

                                    <p class="text_95b116f9bfd8 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Terms And Cionditions
                                    </p>

                                    <p class="text_150fb267f618 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Booking Process
                                    </p>

                                    <p class="text_ee5c1702f9f4 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Payment Details
                                    </p>

                                    <p class="text_87245e8587f3 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Privacy Policy
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group container_cb8848659ba9 is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_05d1e98e737e has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Contact Information
                                    </p>

                                    <p class="text_ce401fb904b2 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Sales &#038; Safari Expert
                                    </p>

                                    <p class="text_f70e70f34048 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 17.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        +25568 655 5755
                                    </p>

                                    <p class="text_ba625137f4d4 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        info@camelleonsafaris.com
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="wp-block-group container_f5381a2b60c6 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <figure class="imageview_159656c786c9 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/457:1993.svg" />
                        </figure>

                        <div
                            class="wp-block-group container_651e584e5062 is-layout-flow wp-block-group-is-layout-flow">
                            <div
                                class="wp-block-group container_61d422b37207 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_5165c7888755 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_40c7664aceed is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_c1d0886a6a17 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_0e644db46723 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_da767501c476 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_7302bb210868 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_89763f932ff5 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_6110648ed565 is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_afc4ea32774a is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_7998301f53c2 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_2ba9d1546ee5 has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_433d8127d2a2 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_ed55a9e9efd9">
                                                <a href="View_Tour/index.html" class="button_link_ed55a9e9efd9"
                                                    target="_self" rel="noopener">
                                                    <p class="text_0d874b9bc9ed has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_f89143f53d1b wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2165;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_60e33659d255 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2166.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_78f648086c0a is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_79f5e12f2529 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_f2683dbcc308 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_5c6fab2b8014 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_36336854db70 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_a8febd9c1c0f has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_0c4ee6b1abd6 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_46ac84707136 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_b6c9bd465828 is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_461f7766e98a is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_f968f3908dd2 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_cc5302f39554 has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_ac8eb1555726 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_07def8d5b44f">
                                                <a href="View_Tour/index.html" class="button_link_07def8d5b44f"
                                                    target="_self" rel="noopener">
                                                    <p class="text_f9b7dfe52d2d has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_0e1f3ee1b8e2 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2168;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_6962fab1119c wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2169.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_35928d424c49 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_5ff2e2d2f88d is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_5c3a3f59f86a is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_18d2089fda62 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_fdd870a0d990 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_b8cb969d388c has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_6ad6a4fa364c has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_58f44a321f55 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_f8c32a88e6f2 is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_9107333dce50 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_8c725248a424 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_06f5ddf42acf has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_68435d743978 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_7cf40d49567f">
                                                <a href="View_Tour/index.html" class="button_link_7cf40d49567f"
                                                    target="_self" rel="noopener">
                                                    <p class="text_0aff1c25390f has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_94cdbc218e90 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2171;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_010380433299 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2172.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_dbef5ebaf842 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_014ee87a2a57 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_64f66afc0b48 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_8c0f28cde874 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_456f24cdb846 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_a392a49a9676 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_e93b3e212ba2 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_a658c7e6f7c1 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_c1644b8949ed is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_531d942c3074 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_c287ffc012aa has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_60e372ba8a5d has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_d7701364e37a is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_fdaf6347dbf5">
                                                <a href="View_Tour/index.html" class="button_link_fdaf6347dbf5"
                                                    target="_self" rel="noopener">
                                                    <p class="text_d2d4ea81927c has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_aef4c885ecf5 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2174;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_c3e6deed2ac2 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2175.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_e5dad31e534a is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_049c324a1ba4 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_5607e50b4e61 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_9bb2d5e9ff3f is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_95f09386c478 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_f2a8e7becdb0 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_dca7b32743d3 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_fc0811698c43 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_f48ef0d67bf5 is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_2dfe216a23aa is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_daad2e35de74 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_41b8e869c916 has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_11282321f83a is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_bbd8b73e26b9">
                                                <a href="View_Tour/index.html" class="button_link_bbd8b73e26b9"
                                                    target="_self" rel="noopener">
                                                    <p class="text_9867c076e2fa has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_c8fc31da3b36 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2177;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_00eed43b58c9 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2178.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_82c8253fb6f0 is-layout-flow wp-block-group-is-layout-flow">
                                <figure class="imageview_6460b51cce18 yt_cover_size wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2179;405:830.webp" />
                                </figure>

                                <div
                                    class="wp-block-group container_34ebc97c55ec is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_137584440322 is-layout-flow wp-block-group-is-layout-flow">
                                        <p class="text_4fe7f0c6b4af has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #1a1a1a99;
                          background-color: transparent;
                        ">
                                            10 Days
                                        </p>

                                        <h3 class="text_0147322a7bf3 has-text-color has-background has-text-align-left wp-block-heading"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 23.5px;
                          font-weight: 600;
                          letter-spacing: -0.5px;
                          color: #26461d;
                          background-color: transparent;
                        ">
                                            Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                        </h3>
                                    </div>

                                    <div
                                        class="wp-block-group container_43c62250a0c0 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_fa6f971e5d31 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_7de2d6e8d649 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_e71b5e269080 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #0000008a;
                            background-color: transparent;
                          ">
                                                $3900
                                            </p>

                                            <h2 class="text_5da949e250b4 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 35.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                $3300
                                            </h2>

                                            <div
                                                class="wp-block-group container_59de347d295d is-layout-flow wp-block-group-is-layout-flow">
                                                <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wp-block-yotako-block-anchor button_ec356eb81901">
                                            <a href="View_Tour/index.html" class="button_link_ec356eb81901"
                                                target="_self" rel="noopener">
                                                <p class="text_4635334f4f70 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    View More
                                                </p>

                                                <figure class="imageview_c587972b3048 wp-block-image">
                                                    <img decoding="async"
                                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2179;405:837;221:315.svg" />
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="vp_640 size_430 viewport_8a9748ce9efb wp-block-group yotako-main is-layout-flow wp-block-group-is-layout-flow">
                        <figure class="imageview_fb9295849a28 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3198.webp" />
                        </figure>

                        <figure class="imageview_9bf6ce52f39f wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3199.webp" />
                        </figure>

                        <div
                            class="wp-block-group container_538db218ab77 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <h2 class="text_63194caf0b8d has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Safari Tours in Tanzania
                        </h2>

                        <p class="text_191bdeae5c9b has-text-color has-background has-text-align-center"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #f4e7c9;
                  background-color: transparent;
                ">
                            Discover the Magical World of <br />Wildlife in Tanzania
                        </p>

                        <h3 class="text_5237a8afbca4 has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 23.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                ">
                            Discover&nbsp;the&nbsp;Difference&nbsp;with&nbsp;&nbsp;Camelleon&nbsp;Safaris
                        </h3>

                        <p class="text_3ab83d39ccf7 has-text-color has-background has-text-align-left"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 500;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                ">
                            <span class="text-a614e4a7aa28_3ab83d39ccf7 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 16px;
                    font-weight: 500;
                    letter-spacing: 0px;
                    color: #26461d;
                    background-color: transparent;
                  ">Immersive,
                                fascinating wildlife adventures in the heart of
                                Africa. Private safari packages in Tanzania from the leading
                                wildlife experts. Few places in the world rival Tanzania as a
                                wildlife destination. Ranked #1 country for an </span><span
                                class="text-bc9b7043f347_3ab83d39ccf7 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 16px;
                    font-weight: 500;
                    letter-spacing: 0px;
                    color: #26461d;
                    background-color: transparent;
                  "><a
                                    href="https://altezza.travel/en" target="_blank"
                                    rel="noreferrer noopener">African
                                    safari</a></span><span
                                class="text-f51cfa414465_3ab83d39ccf7 has-text-color has-background"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 16px;
                    font-weight: 500;
                    letter-spacing: 0px;
                    color: #26461d;
                    background-color: transparent;
                  ">,&nbsp;Tanzania&nbsp;hypnotizes&nbsp;with&nbsp;its&nbsp;pristine,&nbsp;wildest&nbsp;beauty.&nbsp;The&nbsp;last&nbsp;sanctuary&nbsp;of&nbsp;the&nbsp;wildlife&nbsp;of&nbsp;such&nbsp;magnitude&nbsp;in&nbsp;the&nbsp;world,&nbsp;Tanzania&nbsp;is&nbsp;a&nbsp;perfect&nbsp;spot&nbsp;for&nbsp;your&nbsp;vacation.<br />Camelleon&nbsp;&nbsp;Travel&nbsp;is&nbsp;a&nbsp;leading&nbsp;safari&nbsp;outfitter&nbsp;in&nbsp;Tanzania.&nbsp;Our&nbsp;professional&nbsp;safari&nbsp;guiding&nbsp;experts,&nbsp;large&nbsp;safari&nbsp;fleet&nbsp;of&nbsp;the&nbsp;newest&nbsp;comfortable&nbsp;Land&nbsp;Cruisers,&nbsp;modified&nbsp;for&nbsp;the&nbsp;expeditions&nbsp;in&nbsp;the&nbsp;wilderness,&nbsp;and&nbsp;passionate&nbsp;travel&nbsp;consultants&nbsp;will&nbsp;make&nbsp;your&nbsp;trip&nbsp;to&nbsp;Tanzania&nbsp;a&nbsp;lifetime&nbsp;adventure.</span>
                        </p>

                        <div
                            class="wp-block-group container_ac7b3dad5316 is-layout-flow wp-block-group-is-layout-flow">
                            <h3 class="text_1ae4f740adef has-text-color has-background has-text-align-left wp-block-heading"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 19.5px;
                    font-weight: 600;
                    letter-spacing: -0.5px;
                    color: #26461d;
                    background-color: transparent;
                  ">
                                Our Popular Packages
                            </h3>
                        </div>

                        <h2 class="text_adfec1fc0e4b has-text-color has-background has-text-align-center wp-block-heading"
                            style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 31.5px;
                  font-weight: 900;
                  letter-spacing: -0.5px;
                  color: #000000;
                  background-color: transparent;
                ">
                            East African Safaris Best <br />Holiday Packages
                        </h2>

                        <div
                            class="wp-block-group container_de73eda37d3c is-layout-flow wp-block-group-is-layout-flow">
                            <p class="text_7a81fd980c72 has-text-color has-background has-text-align-left"
                                style="
                    text-transform: none;
                    font-style: normal;
                    font-size: 15.5px;
                    font-weight: 600;
                    letter-spacing: -0.5px;
                    color: #ffffff;
                    background-color: transparent;
                  ">
                                Button Text
                            </p>

                            <figure class="imageview_4fe3ac4135f3 wp-block-image">
                                <img decoding="async"
                                    src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I414:3311;250:302.svg" />
                            </figure>
                        </div>

                        <figure class="imageview_20d5bcf66d22 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3400.webp" />
                        </figure>

                        <div
                            class="wp-block-group container_8386b6be2e26 is-layout-flow wp-block-group-is-layout-flow">
                            <div
                                class="wp-block-group container_2b3ee51a52a9 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_4e25fdca1d60 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_8ff7270dcb35 is-layout-flow wp-block-group-is-layout-flow">
                                        <figure class="imageview_428f49bd7a70 wp-block-image">
                                            <img decoding="async"
                                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3463.svg" />
                                        </figure>

                                        <p class="text_f4d9c4a32738 has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #000000;
                          background-color: transparent;
                        ">
                                            Camel Leon Safaris Ltd. was born out of a love for the
                                            idea of adapting to various environments, mirroring the
                                            chameleon&apos;s ability. Our founders wanted to share
                                            this experience with people in the wilds of Africa,
                                            highlighting the beauty of nature when one immerses and
                                            adapts to it.
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="wp-block-group container_ee74b7d3c5ad is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_c73e29187757 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Travel Tips
                                    </p>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/tanzania-entry-requirements/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_5ee0d52ddf09 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Entry Requirements
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_d8ef5977dac1 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Tanzania Safari Planning Guide
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/best-time-to-visit-tanzania/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_dbe539d25c06 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Best time to visit Tanzania
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_8ed14bbd5896 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Kilimanjaro Planning Guide
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/drones-photography-guidelines/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_15561e5f10cb has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Drones &#038; Photography Guide
                                            </p>
                                        </a>
                                    </div>
                                    <p class="text_a9bcdb1ef504 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Tipping Guide
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group container_34b4ce73d623 is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_1103452c6234 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Camelleon Safaris
                                    </p>

                                    <p class="text_2e5a6f0018fa has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        About US
                                    </p>

                                    <p class="text_88a67dcd7835 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Terms And Cionditions
                                    </p>

                                    <p class="text_fb1fcc3c38a6 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Booking Process
                                    </p>

                                    <p class="text_824c9002af25 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Payment Details
                                    </p>

                                    <p class="text_c9d5f9c246bf has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Privacy Policy
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group container_94cce4970034 is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_b185a61e76f7 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Contact Information
                                    </p>

                                    <p class="text_5d1dbab7c7c6 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Sales &#038; Safari Expert
                                    </p>

                                    <p class="text_8f2640d9b3e0 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 17.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        +25568 655 5755
                                    </p>

                                    <p class="text_eb413fd01e4d has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        info@camelleonsafaris.com
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="wp-block-group container_007e9be61514 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

                        <figure class="imageview_e402777db3d3 wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/457:2031.svg" />
                        </figure>

                        <div
                            class="wp-block-group container_b6d8498ddcd9 is-layout-flow wp-block-group-is-layout-flow">
                            <div
                                class="wp-block-group container_bafccdbda1d7 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_20e05685f91c is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_64a9209d043c is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_06af724dfb56 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_06bd13704c8c is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_cf006cf01f82 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_f2a63fd4eff1 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_521b9671c951 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_82a64d74776c is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_bd59f78cbcc9 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_d130aefbf216 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_8c0fbe6a0e6c has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_12dfb1da3b34 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_5706c6fe205c">
                                                <a href="View_Tour/index.html" class="button_link_5706c6fe205c"
                                                    target="_self" rel="noopener">
                                                    <p class="text_91536d186060 has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_846d44a3355b wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2266;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_4f006e820fa3 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2267.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_781276cb7f2f is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_9b63daa7447b is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_29fa4dc1b3a0 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_ff68cc2413f1 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_e12bb4504d98 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_95ecc650ae8f has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_be58751723d6 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_14d5c2559fd1 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_48bca086220c is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_6711790e0e59 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_eb128dc7fa57 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_36cab543b6eb has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_c64333f28d42 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_e67aaf6cd090">
                                                <a href="View_Tour/index.html" class="button_link_e67aaf6cd090"
                                                    target="_self" rel="noopener">
                                                    <p class="text_c78a14357f84 has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_b95dce7428f7 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2269;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_66b6e1f40dbe wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2270.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_602da9b99dd8 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_5c34e3701dce is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_a977efab4804 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_40d8ddc7e68c is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_f8cd04810f75 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_f47ac4fe696a has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_f0271e6e3a8f has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_9ebc3da00963 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_61f5def6ebff is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_300d2fff31a2 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_12862a696fbe has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_ad21cf23dd00 has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_b1f4e330f753 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_2381e0aab8b5">
                                                <a href="View_Tour/index.html" class="button_link_2381e0aab8b5"
                                                    target="_self" rel="noopener">
                                                    <p class="text_5928ad9cd730 has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_0f874b76d030 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2272;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_8cead3a5c008 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2273.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_e8d905f5baf0 is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_d7a48a1fc975 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_1dc89b25bd38 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_8594165d97dd is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_5d75f4b6ed59 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_df3b0101e92b has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_df82d6f68c18 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_41ba47f47663 is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_ff7fd9db5e9a is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_a606569836a1 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_8ab5c0def5a6 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_2a04b46b634f has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_907f319ca17a is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_e490e0568d57">
                                                <a href="View_Tour/index.html" class="button_link_e490e0568d57"
                                                    target="_self" rel="noopener">
                                                    <p class="text_11a7d3dc4f43 has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_e4f5655124ee wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2275;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_40fcb43e6a86 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2276.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_253129ad279e is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_231cf1f53ff7 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_cee000a18e71 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_76694f5a6abf is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_4a630f1916ec is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_280ef9391d3d has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #1a1a1a99;
                            background-color: transparent;
                          ">
                                                10 Days
                                            </p>

                                            <h3 class="text_262f97f07dd8 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 23.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                            </h3>
                                        </div>

                                        <div
                                            class="wp-block-group container_5e76ffb7f05e is-layout-flow wp-block-group-is-layout-flow">
                                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                            </div>
                                        </div>

                                        <div
                                            class="wp-block-group container_43c82b8577b1 is-layout-flow wp-block-group-is-layout-flow">
                                            <div
                                                class="wp-block-group container_68cefbf945b4 is-layout-flow wp-block-group-is-layout-flow">
                                                <p class="text_2c7421146ec7 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 500;
                              letter-spacing: -0.5px;
                              color: #0000008a;
                              background-color: transparent;
                            ">
                                                    $3900
                                                </p>

                                                <h2 class="text_a6342b76566b has-text-color has-background has-text-align-left wp-block-heading"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 35.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    $3300
                                                </h2>

                                                <div
                                                    class="wp-block-group container_9fb09c1d4a99 is-layout-flow wp-block-group-is-layout-flow">
                                                    <div class="wp-block-spacer" style="height: 0px"
                                                        aria-hidden="true"></div>
                                                </div>
                                            </div>

                                            <div class="wp-block-yotako-block-anchor button_716354fd4c66">
                                                <a href="View_Tour/index.html" class="button_link_716354fd4c66"
                                                    target="_self" rel="noopener">
                                                    <p class="text_c1af8c59c318 has-text-color has-background has-text-align-left"
                                                        style="
                                text-transform: none;
                                font-style: normal;
                                font-size: 15.5px;
                                font-weight: 600;
                                letter-spacing: -0.5px;
                                color: #26461d;
                                background-color: transparent;
                              ">
                                                        View More
                                                    </p>

                                                    <figure class="imageview_0ff1a49c1ea3 wp-block-image">
                                                        <img decoding="async"
                                                            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2278;405:837;221:315.svg" />
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="imageview_9e330a781741 wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2279.webp" />
                                </figure>
                            </div>

                            <div
                                class="wp-block-group container_4413061d4c9d is-layout-flow wp-block-group-is-layout-flow">
                                <figure class="imageview_5ffcb627f340 yt_cover_size wp-block-image">
                                    <img decoding="async"
                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2280;405:830.webp" />
                                </figure>

                                <div
                                    class="wp-block-group container_5468c1707290 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_22aa5bf8299a is-layout-flow wp-block-group-is-layout-flow">
                                        <p class="text_f807f1f0ebcc has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #1a1a1a99;
                          background-color: transparent;
                        ">
                                            10 Days
                                        </p>

                                        <h3 class="text_2c747c9d73bc has-text-color has-background has-text-align-left wp-block-heading"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 23.5px;
                          font-weight: 600;
                          letter-spacing: -0.5px;
                          color: #26461d;
                          background-color: transparent;
                        ">
                                            Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation
                                        </h3>
                                    </div>

                                    <div
                                        class="wp-block-group container_0b62e1467dc5 is-layout-flow wp-block-group-is-layout-flow">
                                        <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                                    </div>

                                    <div
                                        class="wp-block-group container_a8ce3ebbbf20 is-layout-flow wp-block-group-is-layout-flow">
                                        <div
                                            class="wp-block-group container_a25a1ae4dde8 is-layout-flow wp-block-group-is-layout-flow">
                                            <p class="text_4ba384d01dc2 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            letter-spacing: -0.5px;
                            color: #0000008a;
                            background-color: transparent;
                          ">
                                                $3900
                                            </p>

                                            <h2 class="text_9849cdf3f477 has-text-color has-background has-text-align-left wp-block-heading"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 35.5px;
                            font-weight: 600;
                            letter-spacing: -0.5px;
                            color: #26461d;
                            background-color: transparent;
                          ">
                                                $3300
                                            </h2>

                                            <div
                                                class="wp-block-group container_9b100ea6a21a is-layout-flow wp-block-group-is-layout-flow">
                                                <div class="wp-block-spacer" style="height: 0px" aria-hidden="true">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wp-block-yotako-block-anchor button_20f12270d8e9">
                                            <a href="View_Tour/index.html" class="button_link_20f12270d8e9"
                                                target="_self" rel="noopener">
                                                <p class="text_596114747778 has-text-color has-background has-text-align-left"
                                                    style="
                              text-transform: none;
                              font-style: normal;
                              font-size: 15.5px;
                              font-weight: 600;
                              letter-spacing: -0.5px;
                              color: #26461d;
                              background-color: transparent;
                            ">
                                                    View More
                                                </p>

                                                <figure class="imageview_d348b5dddc87 wp-block-image">
                                                    <img decoding="async"
                                                        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2280;405:837;221:315.svg" />
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script id="wp-block-template-skip-link-js-after">
        (function() {
            var skipLinkTarget = document.querySelector("main"),
                sibling,
                skipLinkTargetID,
                skipLink;

            // Early exit if a skip-link target can't be located.
            if (!skipLinkTarget) {
                return;
            }

            /*
             * Get the site wrapper.
             * The skip-link will be injected in the beginning of it.
             */
            sibling = document.querySelector(".wp-site-blocks");

            // Early exit if the root element was not found.
            if (!sibling) {
                return;
            }

            // Get the skip-link target's ID, and generate one if it doesn't exist.
            skipLinkTargetID = skipLinkTarget.id;
            if (!skipLinkTargetID) {
                skipLinkTargetID = "wp--skip-link--target";
                skipLinkTarget.id = skipLinkTargetID;
            }

            // Create the skip link.
            skipLink = document.createElement("a");
            skipLink.classList.add("skip-link", "screen-reader-text");
            skipLink.href = "#" + skipLinkTargetID;
            skipLink.innerHTML = "Skip to content";

            // Inject the skip link.
            sibling.parentElement.insertBefore(skipLink, sibling);
        })();
    </script>
</body>

<!-- Mirrored from bda1aad9-cb58-401a-8a47-526b318e3266.yotako.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 22:23:04 GMT -->

</html>
