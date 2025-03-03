<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
03/03/2025 10:44:58 -->

<html>
<!-- Mirrored from solitary-band-5104.animaapp.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Mar 2025 10:47:24 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="{{ asset('landing/animaproject.s3.amazonaws.com/home/favicon.png') }}">
  <meta name="og:type" content="website">
  <meta name="twitter:card" content="photo">
  <!-- <script id="anima-load-script" src="load.html"></script>
  <script id="anima-hotspots-script" src="hotspots.js') }}"></script>
  <script id="anima-overrides-script" src="overrides.js') }}"></script> -->
  <script src="{{ asset('landing/animaapp.s3.amazonaws.com/js/timeline.js') }}"></script>
  <style>
    @import url("{{ asset('landing/cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css') }}");

    @import url("https://fonts.googleapis.com/css?family=Roboto:900,400,600,800,500,700");

    /* The following line is used to measure usage of this code. You can remove it if you want. */
    @import url("{{ asset('landing/px.animaapp.com/656b131b6922aedfb93f70b8.656b131c6922aedfb93f70bb.mwh6PRc.hch.png') }}");


    .screen textarea:focus,
    .screen input:focus {
      outline: none;
    }

    .screen * {
      -webkit-font-smoothing: antialiased;
      box-sizing: border-box;
    }

    .screen div {
      -webkit-text-size-adjust: none;
    }

    .component-wrapper a {
      display: contents;
      pointer-events: auto;
      text-decoration: none;
    }

    .component-wrapper * {
      -webkit-font-smoothing: antialiased;
      box-sizing: border-box;
      pointer-events: none;
    }

    .component-wrapper a *,
    .component-wrapper input,
    .component-wrapper video,
    .component-wrapper iframe {
      pointer-events: auto;
    }

    .component-wrapper.not-ready,
    .component-wrapper.not-ready * {
      visibility: hidden !important;
    }

    .screen a {
      display: contents;
      text-decoration: none;
    }

    .full-width-a {
      width: 100%;
    }

    .full-height-a {
      height: 100%;
    }

    .container-center-vertical {
      align-items: center;
      display: flex;
      flex-direction: row;
      height: 100%;
      pointer-events: none;
    }

    .container-center-vertical>* {
      flex-shrink: 0;
      pointer-events: auto;
    }

    .container-center-horizontal {
      display: flex;
      flex-direction: row;
      justify-content: center;
      pointer-events: none;
      width: 100%;
    }

    .container-center-horizontal>* {
      flex-shrink: 0;
      pointer-events: auto;
    }

    .auto-animated div {
      --z-index: -1;
      opacity: 0;
      position: absolute;
    }

    .auto-animated input {
      --z-index: -1;
      opacity: 0;
      position: absolute;
    }

    .auto-animated .container-center-vertical,
    .auto-animated .container-center-horizontal {
      opacity: 1;
    }

    .overlay-base {
      display: none;
      height: 100%;
      opacity: 0;
      position: fixed;
      top: 0;
      width: 100%;
    }

    .overlay-base.animate-appear {
      align-items: center;
      animation: reveal 0.3s ease-in-out 1 normal forwards;
      display: flex;
      flex-direction: column;
      justify-content: center;
      opacity: 0;
    }

    .overlay-base.animate-disappear {
      animation: reveal 0.3s ease-in-out 1 reverse forwards;
      display: block;
      opacity: 1;
      pointer-events: none;
    }

    .overlay-base.animate-disappear * {
      pointer-events: none;
    }

    @keyframes reveal {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }

    .animate-nodelay {
      animation-delay: 0s;
    }

    .align-self-flex-start {
      align-self: flex-start;
    }

    .align-self-flex-end {
      align-self: flex-end;
    }

    .align-self-flex-center {
      align-self: flex-center;
    }

    .valign-text-middle {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .valign-text-bottom {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    input:focus {
      outline: none;
    }

    .listeners-active,
    .listeners-active * {
      pointer-events: auto;
    }

    .hidden,
    .hidden * {
      pointer-events: none;
      visibility: hidden;
    }

    .smart-layers-pointers,
    .smart-layers-pointers * {
      pointer-events: auto;
      visibility: visible;
    }

    .listeners-active-click,
    .listeners-active-click * {
      cursor: pointer;
    }

    * {
      box-sizing: border-box;
    }

    :root {
      --alto: #d9d9d9;
      --black: #000000;
      --black-2: #0000008a;
      --boulder: #7a7a7a;
      --chicago: #595959;
      --eerie-black: #1a1a1a99;
      --gray: #808080;
      --green-kelp: #26461d;
      --selective-yellow: #f4ba00;
      --shamrock: #34e0a1;
      --wheatfield: #f4e7c9;
      --white: #ffffff;

      --font-size-64px: 64px;
      --font-size-l: 18px;
      --font-size-m: 16px;
      --font-size-s: 12px;
      --font-size-xl: 20px;
      --font-size-xxl: 24px;
      --font-size-xxxl: 26px;
      --font-size-xxxxl: 48px;

      --font-family-roboto: "Roboto", Helvetica;
    }

    .h3 {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xxl);
      font-style: normal;
      font-weight: 700;
      letter-spacing: 0px;
    }

    .paragraph {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-m);
      font-style: normal;
      font-weight: 500;
      letter-spacing: 0px;
    }

    .h4 {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xl);
      font-style: normal;
      font-weight: 600;
      letter-spacing: 0px;
    }

    .paragraph-bold {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-m);
      font-style: normal;
      font-weight: 700;
      letter-spacing: 0px;
    }

    .tagline {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-s);
      font-style: normal;
      font-weight: 400;
      letter-spacing: 0px;
    }

    .h1 {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-64px);
      font-style: normal;
      font-weight: 800;
      letter-spacing: 0px;
    }

    .h2 {
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xxxxl);
      font-style: normal;
      font-weight: 900;
      letter-spacing: 0px;
    }

    .roboto-semi-bold-boulder-18px {
      color: var(--boulder);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-l);
      font-style: normal;
      font-weight: 600;
    }

    .roboto-black-white-26px {
      color: var(--white);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xxxl);
      font-style: normal;
      font-weight: 900;
    }

    .roboto-bold-green-kelp-36px {
      color: var(--green-kelp);
      font-family: var(--font-family-roboto);
      font-size: 36px;
      font-style: normal;
      font-weight: 700;
    }

    .roboto-medium-green-kelp-18px {
      color: var(--green-kelp);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-l);
      font-style: normal;
      font-weight: 500;
    }

    .roboto-semi-bold-black-26px {
      color: var(--black);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xxxl);
      font-style: normal;
      font-weight: 600;
    }

    .roboto-black-black-16px {
      color: var(--black);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-m);
      font-style: normal;
      font-weight: 900;
    }

    .roboto-black-green-kelp-18px {
      color: var(--green-kelp);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-l);
      font-style: normal;
      font-weight: 900;
    }

    .roboto-extra-bold-wheatfield-48px {
      color: var(--wheatfield);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xxxxl);
      font-style: normal;
      font-weight: 800;
    }

    .roboto-normal-green-kelp-16px {
      color: var(--green-kelp);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-m);
      font-style: normal;
      font-weight: 400;
    }

    .roboto-extra-bold-wheatfield-20px {
      color: var(--wheatfield);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xl);
      font-style: normal;
      font-weight: 800;
    }

    .roboto-black-white-42px {
      color: var(--white);
      font-family: var(--font-family-roboto);
      font-size: 42px;
      font-style: normal;
      font-weight: 900;
    }

    .roboto-normal-white-18px {
      color: var(--white);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-l);
      font-style: normal;
      font-weight: 400;
    }

    .roboto-semi-bold-black-18px {
      color: var(--black);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-l);
      font-style: normal;
      font-weight: 600;
    }

    .roboto-medium-gray-18px {
      color: var(--gray);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-l);
      font-style: normal;
      font-weight: 500;
    }

    :root {}


    .amaizing-experience {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 700;
      height: auto;
      line-height: normal;
      position: absolute;
      text-align: left;
    }

    .comfort-safari-and-beach-vacation {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .conquer-the-roof-of {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .customer-centric {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 600;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .desitanation-card {
      align-items: flex-start;
      background-color: var(--white);
      border-radius: 8px;
      box-shadow: 3px 5px 11px 4px #0c0c0d1f;
      display: flex;
      flex-direction: column;
      gap: 23px;
      height: 550px;
      overflow: hidden;
      position: relative;
      width: 352px;
    }

    .duration {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 23px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 19px;
      white-space: nowrap;
      width: auto;
    }

    .ellipse-27 {
      background-color: var(--alto);
      border-radius: 33px;
      height: 66px;
      left: 0px;
      position: relative;
      top: 0px;
      width: 66px;
    }

    .features-icon {
      background-color: transparent;
      height: 66px;
      left: 26px;
      position: absolute;
      top: -40px;
      width: 66px;
    }

    .frame-10 {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 23px;
      height: 251px;
      padding: 0px 18px;
      position: relative;
      width: 100%;
    }

    .frame-4 {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 8px;
      position: relative;
      width: 100%;
    }

    .frame-58 {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 4px;
      position: relative;
      width: 104px;
    }

    .frame-59 {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 22px;
      padding: 0px 16px;
      position: relative;
      width: 100%;
    }

    .frame-60 {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      justify-content: space-between;
      position: relative;
      width: 100%;
    }

    .frame-62 {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      position: relative;
      width: 100%;
    }

    .hero-content {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 1;
      flex-direction: column;
      flex-grow: 1;
      gap: 21px;
      position: relative;
      width: 100%;
    }

    .kilimanjaro-mountain-climbing {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .line-15 {
      align-self: stretch;
      background-color: transparent;
      height: 5px;
      position: relative;
      width: 100%;
    }

    .line-16 {
      background-color: transparent;
      height: 1px;
      left: 0px;
      object-fit: cover;
      position: absolute;
      top: 8px;
      width: 49px;
    }

    .rectangle-69 {
      align-self: stretch;
      background-color: transparent;
      flex: 1;
      flex-grow: 1;
      object-fit: cover;
      position: relative;
      width: 100%;
    }

    .rectangle-7 {
      align-self: stretch;
      background-color: var(--alto);
      border-radius: 18px 18px 0px 0px;
      flex: 1;
      flex-grow: 1;
      position: relative;
      width: 100%;
    }

    .the-team-led-by-stan {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      width: 308px;
    }

    .we-are-a-customer-focused-travel-agency {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .x3900 {
      align-self: stretch;
      background-color: transparent;
      color: var(--black-2);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .x500 {
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      text-align: left;
    }

    /* screen - ipad-pro-11u34-1 */

    .ipad-pro-11u34-1 {
      background-color: var(--white);
      height: 8773px;
      overflow: hidden;
      overflow-x: hidden;
      position: relative;
      width: 834px;
    }

    .ipad-pro-11u34-1 .frame-57-LmQtYc {
      align-items: center;
      background-color: transparent;
      display: flex;
      justify-content: space-between;
      left: 32px;
      position: absolute;
      top: 56px;
      width: 770px;
    }

    .ipad-pro-11u34-1 .logo-ebTjAf {
      height: 43.223876953125px;
      width: 181px;
    }

    .ipad-pro-11u34-1 .menu-ebTjAf {
      background-color: transparent;
      margin-right: -1.50px;
      position: relative;
      width: 37px;
    }

    .ipad-pro-11u34-1 .hero-section-LmQtYc {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      height: 99px;
      left: 0px;
      padding: 0px 32px;
      position: absolute;
      top: 278px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .hero-content-BubjTr {
      padding: 22px 0px;
    }

    .ipad-pro-11u34-1 .rectangle-3-LmQtYc {
      background-color: transparent;
      height: 654px;
      left: 0px;
      object-fit: cover;
      position: absolute;
      top: 141px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .rectangle-40-LmQtYc {
      background-color: var(--green-kelp);
      height: 654px;
      left: 0px;
      opacity: 0.45;
      position: absolute;
      top: 141px;
      width: 836px;
    }

    .ipad-pro-11u34-1 .hero-section-content-LmQtYc {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      height: 225px;
      left: 0px;
      padding: 16px;
      position: absolute;
      top: 243px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .hero-content-YscPti {
      padding: 66px 0px;
    }

    .ipad-pro-11u34-1 .frame-37-LmQtYc {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 12px;
      left: 33px;
      padding: 29px 0px;
      position: absolute;
      top: 863px;
      width: 770px;
    }

    .ipad-pro-11u34-1 .inspiring-tanzania-safari-journeys-await-JE7Fxh {
      margin-top: -1.00px;
      width: 672px;
    }

    .ipad-pro-11u34-1 .frame-36-JE7Fxh {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex-wrap: wrap;
      gap: 64px 64px;
      height: 461px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .frame-39-LmQtYc {
      align-items: flex-start;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      gap: 53px;
      left: 0px;
      padding: 57px 0px 92px;
      position: absolute;
      top: 1478px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .frame-14-Zxw9Gi {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 8px;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .travel-the-world-YdPkic {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .ipad-pro-11u34-1 .inspiring-tanzania-safari-journeys-await-YdPkic {
      align-self: stretch;
    }

    .ipad-pro-11u34-1 .frame-38-Zxw9Gi {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 32px 32px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .button-5E84XB {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 315px;
    }

    .ipad-pro-11u34-1 .button-text-BPGoWu {
      color: var(--white);
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-BPGoWu {
      height: 12.008041381835938px;
    }

    .ipad-pro-11u34-1 .button-JoYbuQ {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 315px;
    }

    .ipad-pro-11u34-1 .button-text-RZd73w {
      color: var(--white);
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-RZd73w {
      height: 12.008041381835938px;
    }

    .ipad-pro-11u34-1 .button-l6YXg8 {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 315px;
    }

    .ipad-pro-11u34-1 .button-text-0KBKb9 {
      color: var(--white);
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-0KBKb9 {
      height: 12.008056640625px;
    }

    .ipad-pro-11u34-1 .about-us-section-responsive-LmQtYc {
      align-items: center;
      background-color: var(--green-kelp);
      display: flex;
      flex-wrap: wrap;
      gap: 52px 52px;
      justify-content: center;
      left: -1px;
      padding: 64px 53px;
      position: absolute;
      top: 2960px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .frame-41-plwfw8 {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 41px;
      margin-left: -19.00px;
      margin-right: -19.00px;
      position: relative;
      width: 766px;
    }

    .ipad-pro-11u34-1 .at-camelleon-safaris-2hzYfQ {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .your-partner-to-seam-2hzYfQ {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .join-us-at-camel-leo-2hzYfQ {
      align-self: stretch;
      background-color: transparent;
      height: 96px;
      letter-spacing: 0.00px;
      line-height: 24px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .frame-40-2hzYfQ {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .x100-VCaL9C {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .x500-VCaL9C {
      flex: 1;
      height: 43px;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
    }

    .ipad-pro-11u34-1 .x50-VCaL9C {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .x5-VCaL9C {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .button-2hzYfQ {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 204px;
    }

    .ipad-pro-11u34-1 .button-text-biSOyp {
      color: var(--white);
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-biSOyp {
      height: 12.008056640625px;
    }

    .ipad-pro-11u34-1 .about-us_photo-plwfw8 {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-left: -20.50px;
      margin-right: -20.50px;
      position: relative;
      width: 769px;
    }

    .ipad-pro-11u34-1 .untitled-1-4-KNh6UT {
      align-self: stretch;
      background-color: transparent;
      height: 527px;
      object-fit: cover;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .safari-card-LmQtYc {
      left: 33px;
      top: 4396px;
      width: 376px;
    }

    .ipad-pro-11u34-1 .button-XmAHxT {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-QthrWQ {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-QthrWQ {
      height: 12.008056640625px;
      margin-right: -5.50px;
    }

    .ipad-pro-11u34-1 .safari-card-7A1txE {
      left: 425px;
      top: 4396px;
      width: 377px;
    }

    .ipad-pro-11u34-1 .button-EpfmQG {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-2uI9lw {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-2uI9lw {
      height: 12.008056640625px;
      margin-right: -5.50px;
    }

    .ipad-pro-11u34-1 .safari-card-h0Swsi {
      left: 33px;
      top: 5073px;
      width: 376px;
    }

    .ipad-pro-11u34-1 .button-h0mTal {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-re6UvN {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-re6UvN {
      height: 12.008056640625px;
      margin-right: -5.50px;
    }

    .ipad-pro-11u34-1 .safari-card-pDee2q {
      left: 33px;
      top: 5750px;
      width: 376px;
    }

    .ipad-pro-11u34-1 .button-ZUxoI7 {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-XopGtW {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-XopGtW {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .ipad-pro-11u34-1 .safari-card-PrIXjS {
      left: 425px;
      top: 5073px;
      width: 377px;
    }

    .ipad-pro-11u34-1 .button-Y4z9HK {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-LcxQeT {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-LcxQeT {
      height: 12.008056640625px;
      margin-right: -5.50px;
    }

    .ipad-pro-11u34-1 .safari-card-4wDbQZ {
      left: 425px;
      top: 5750px;
      width: 377px;
    }

    .ipad-pro-11u34-1 .button-zVBO9u {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-zw7Q9C {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-zw7Q9C {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .ipad-pro-11u34-1 .frame-63-LmQtYc {
      align-items: center;
      background-color: transparent;
      display: inline-flex;
      gap: 10px;
      justify-content: center;
      left: 300px;
      padding: 10px;
      position: absolute;
      top: 4198px;
    }

    .ipad-pro-11u34-1 .our-popular-packages-NQ0DkI {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 600;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
      white-space: nowrap;
      width: fit-content;
    }

    .ipad-pro-11u34-1 .east-african-safaris-LmQtYc {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 900;
      height: auto;
      left: 132px;
      line-height: normal;
      position: absolute;
      text-align: center;
      top: 4247px;
      width: auto;
    }

    .ipad-pro-11u34-1 .frame-64-LmQtYc {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 26px;
      left: 184px;
      position: absolute;
      top: 6616px;
      width: 460px;
    }

    .ipad-pro-11u34-1 .images-1-bEpFmR {
      background-color: transparent;
      height: 126px;
      position: relative;
      width: 141px;
    }

    .ipad-pro-11u34-1 .camelleon-ranked-3-bEpFmR {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 900;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .group-10-bEpFmR {
      background-color: transparent;
      height: 21px;
      position: relative;
      width: 217px;
    }

    .ipad-pro-11u34-1 .x500-APC2Xv {
      height: auto;
      left: 174px;
      position: absolute;
      top: 0px;
      white-space: nowrap;
      width: auto;
    }

    .ipad-pro-11u34-1 .group-9-APC2Xv {
      background-color: transparent;
      height: 19px;
      left: 0px;
      position: absolute;
      top: 0px;
      width: 151px;
    }

    .ipad-pro-11u34-1 .ellipse-1-pXrTIr {
      background-color: var(--shamrock);
      border-radius: 9.5px;
      height: 19px;
      left: 0px;
      position: absolute;
      top: 0px;
      width: 19px;
    }

    .ipad-pro-11u34-1 .ellipse-2-pXrTIr {
      background-color: var(--shamrock);
      border-radius: 10px/9.5px;
      height: 19px;
      left: 33px;
      position: absolute;
      top: 0px;
      width: 20px;
    }

    .ipad-pro-11u34-1 .ellipse-3-pXrTIr {
      background-color: var(--shamrock);
      border-radius: 10.5px/9.5px;
      height: 19px;
      left: 65px;
      position: absolute;
      top: 0px;
      width: 21px;
    }

    .ipad-pro-11u34-1 .ellipse-4-pXrTIr {
      background-color: var(--shamrock);
      border-radius: 10px/9.5px;
      height: 19px;
      left: 98px;
      position: absolute;
      top: 0px;
      width: 20px;
    }

    .ipad-pro-11u34-1 .ellipse-5-pXrTIr {
      background-color: var(--shamrock);
      border-radius: 9.5px;
      height: 19px;
      left: 132px;
      position: absolute;
      top: 0px;
      width: 19px;
    }

    .ipad-pro-11u34-1 .button-LmQtYc {
      background-color: var(--selective-yellow);
      border-radius: 42px;
      left: 334px;
      padding: 16px 32px;
      position: absolute;
      top: 6459px;
      width: 150px;
    }

    .ipad-pro-11u34-1 .button-text-MyxHNx {
      color: var(--white);
      margin-left: -8.61px;
      margin-top: -3.00px;
    }

    .ipad-pro-11u34-1 .vector-MyxHNx {
      height: 12.0078125px;
      margin-right: -8.50px;
    }

    .ipad-pro-11u34-1 .frame-67-LmQtYc::-webkit-scrollbar {
      display: none;
      width: 0;
    }

    .ipad-pro-11u34-1 .frame-67-LmQtYc {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-wrap: nowrap;
      gap: 32px;
      left: 32px;
      overflow: scroll;
      position: absolute;
      top: 6977px;
      width: 802px;
    }

    .ipad-pro-11u34-1 .rectangle-29-WwN7Y2 {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      position: relative;
      width: 352px;
    }

    .ipad-pro-11u34-1 .rectangle-30-WwN7Y2 {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      position: relative;
      width: 352px;
    }

    .ipad-pro-11u34-1 .rectangle-31-WwN7Y2 {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      position: relative;
      width: 352px;
    }

    .ipad-pro-11u34-1 .mask-group-WwN7Y2 {
      left: 28px;
    }

    .ipad-pro-11u34-1 .mask-group-GXtTQH {
      left: 411px;
    }

    .ipad-pro-11u34-1 .mask-group-QDaNQN {
      left: 794px;
    }

    .ipad-pro-11u34-1 .vic-WwN7Y2 {
      left: 113px;
    }

    .ipad-pro-11u34-1 .vic-GXtTQH {
      left: 496px;
    }

    .ipad-pro-11u34-1 .vic-QDaNQN {
      left: 879px;
    }

    .ipad-pro-11u34-1 .jan2024-WwN7Y2 {
      left: 112px;
    }

    .ipad-pro-11u34-1 .jan2024-GXtTQH {
      left: 495px;
    }

    .ipad-pro-11u34-1 .jan2024-QDaNQN {
      left: 878px;
    }

    .ipad-pro-11u34-1 .the-team-led-by-stan-WwN7Y2 {
      left: 24px;
      top: 201px;
    }

    .ipad-pro-11u34-1 .the-team-led-by-stan-GXtTQH {
      left: 406px;
      top: 188px;
    }

    .ipad-pro-11u34-1 .the-team-led-by-stan-QDaNQN {
      left: 790px;
      top: 184px;
    }

    .ipad-pro-11u34-1 .amazing-experience-WwN7Y2 {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 700;
      height: auto;
      left: 24px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 132px;
      width: 308px;
    }

    .ipad-pro-11u34-1 .amaizing-experience-WwN7Y2 {
      left: 407px;
      top: 127px;
      width: 244px;
    }

    .ipad-pro-11u34-1 .amaizing-experience-GXtTQH {
      left: 790px;
      top: 124px;
      width: 245px;
    }

    .ipad-pro-11u34-1 .booking-form-responsive-LmQtYc {
      align-items: center;
      background-color: var(--white);
      border-radius: 8px;
      display: flex;
      flex-wrap: wrap;
      gap: 8px 8px;
      height: 183px;
      justify-content: center;
      left: 32px;
      padding: 18px 32px;
      position: absolute;
      top: 452px;
      width: 769px;
    }

    .ipad-pro-11u34-1 .frame-54-7lCC1x {
      background-color: var(--wheatfield);
      border-radius: 8px;
      flex: 0 0 auto;
      height: 59px;
      position: relative;
    }

    .ipad-pro-11u34-1 .destination-z4FbM2 {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 19px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 19px;
      white-space: nowrap;
      width: auto;
    }

    .ipad-pro-11u34-1 .frame-55-7lCC1x {
      background-color: var(--wheatfield);
      border-radius: 8px;
      flex: 0 0 auto;
      height: 59px;
      position: relative;
    }

    .ipad-pro-11u34-1 .frame-56-7lCC1x {
      background-color: var(--wheatfield);
      border-radius: 8px;
      flex: 0 0 auto;
      height: 59px;
      position: relative;
    }

    .ipad-pro-11u34-1 .button-7lCC1x {
      background-color: var(--green-kelp);
      border-radius: 8px;
      height: 59px;
      padding: 16px;
      position: relative;
      width: 276px;
    }

    .ipad-pro-11u34-1 .button-text-thPt7v {
      color: var(--white);
    }

    .ipad-pro-11u34-1 .vector-thPt7v {
      height: 12.008056640625px;
    }

    .ipad-pro-11u34-1 .rectangle-32-LmQtYc {
      background-color: transparent;
      height: 462px;
      left: 0px;
      object-fit: cover;
      position: absolute;
      top: 7469px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .footer-section-LmQtYc {
      align-items: center;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      gap: 11px;
      height: 557px;
      justify-content: center;
      left: 0px;
      padding: 0px 29px;
      position: absolute;
      top: 8107px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .footer-content-TxPLMd {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 32px 16px;
      max-width: 1131px;
      min-width: 256px;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .frame-43-gkKCqc {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 256px;
      min-width: 160px;
      position: relative;
      width: 256px;
    }

    .ipad-pro-11u34-1 .frame-42-xv8AuE {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 24px;
      position: relative;
      width: 100%;
    }

    .ipad-pro-11u34-1 .logo-FjCyMy {
      height: 42.746246337890625px;
      width: 179px;
    }

    .ipad-pro-11u34-1 .camel-leon-safaris-l-FjCyMy {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 500;
      line-height: 20.6px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .frame-44-gkKCqc {
      align-items: flex-start;
      background-color: transparent;
      display: inline-flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 20px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
    }

    .ipad-pro-11u34-1 .travel-tips-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .entry-requirements-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .ipad-pro-11u34-1 .tanzania-safari-planning-guide-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .ipad-pro-11u34-1 .best-time-to-visit-tanzania-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .ipad-pro-11u34-1 .kilimanjaro-planning-guide-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .ipad-pro-11u34-1 .drones-photography-guide-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .ipad-pro-11u34-1 .tipping-guide-L4Dxbw {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .frame-45-gkKCqc {
      align-items: flex-start;
      background-color: transparent;
      display: inline-flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 19px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
    }

    .ipad-pro-11u34-1 .camelleon-safaris-PWTxEv {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .about-us-PWTxEv {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .terms-and-cionditions-PWTxEv {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .booking-process-PWTxEv {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .payment-details-PWTxEv {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .privacy-policy-PWTxEv {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .frame-46-gkKCqc {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 15px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
      width: 256px;
    }

    .ipad-pro-11u34-1 .contact-information-qcNuTE {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .sales-safari-expert-qcNuTE {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .x25568-655-5755-qcNuTE {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .infocamelleonsafariscom-qcNuTE {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .rectangle-33-LmQtYc {
      background-color: var(--wheatfield);
      height: 109px;
      left: 0px;
      position: absolute;
      top: 8664px;
      width: 834px;
    }

    .ipad-pro-11u34-1 .button {
      align-items: center;
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .ipad-pro-11u34-1 .button-text {
      background-color: transparent;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      position: relative;
      text-align: left;
      white-space: nowrap;
      width: fit-content;
    }

    .ipad-pro-11u34-1 .experience-colours-of-africa {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .ipad-pro-11u34-1 .features-card {
      align-items: flex-start;
      background-color: var(--wheatfield);
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding: 39px 26px 34px;
      position: relative;
      width: 350px;
    }

    .ipad-pro-11u34-1 .inspiring-tanzania-safari-journeys-await {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 900;
      line-height: normal;
      position: relative;
      text-align: center;
    }

    .ipad-pro-11u34-1 .jan2024 {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 84px;
      white-space: nowrap;
      width: auto;
    }

    .ipad-pro-11u34-1 .logo {
      background-color: transparent;
      position: relative;
    }

    .ipad-pro-11u34-1 .mask-group {
      background-color: transparent;
      height: 51px;
      position: absolute;
      top: 51px;
      width: 51px;
    }

    .ipad-pro-11u34-1 .safari-card {
      align-items: flex-start;
      background-color: var(--white);
      border-radius: 16px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      height: 641px;
      max-width: 406px;
      min-width: 256px;
      padding: 0px 0px 32px;
      position: absolute;
    }

    .ipad-pro-11u34-1 .vector {
      background-color: transparent;
      position: relative;
      width: 11.99853515625px;
    }

    .ipad-pro-11u34-1 .vic {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 56px;
      white-space: nowrap;
      width: auto;
    }

    .ipad-pro-11u34-1 .x10-days {
      align-self: stretch;
      background-color: transparent;
      color: var(--eerie-black);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .ipad-pro-11u34-1 .x3300 {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: 31px;
      position: relative;
      text-align: left;
    }

    /* screen - iphone-14-u38-15-pro-max-1 */

    .iphone-14-u38-15-pro-max-1 {
      background-color: var(--white);
      height: 12271px;
      overflow: hidden;
      overflow-x: hidden;
      position: relative;
      width: 430px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-57-Q862b3 {
      align-items: center;
      background-color: transparent;
      display: flex;
      justify-content: space-between;
      left: 12px;
      position: absolute;
      top: 61px;
      width: 406px;
    }

    .iphone-14-u38-15-pro-max-1 .logo-fPnQqx {
      height: 43.223876953125px;
      width: 181px;
    }

    .iphone-14-u38-15-pro-max-1 .menu-fPnQqx {
      background-color: transparent;
      margin-right: -1.50px;
      position: relative;
      width: 37px;
    }

    .iphone-14-u38-15-pro-max-1 .hero-section-Q862b3 {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      height: 99px;
      left: 0px;
      padding: 0px 32px;
      position: absolute;
      top: 287px;
      width: 429px;
    }

    .iphone-14-u38-15-pro-max-1 .hero-content-cGNgEt {
      padding: 22px 0px;
    }

    .iphone-14-u38-15-pro-max-1 .title-B0kOda {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-bottom: -112.00px;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-3-Q862b3 {
      background-color: transparent;
      height: 654px;
      left: 0px;
      object-fit: cover;
      position: absolute;
      top: 150px;
      width: 429px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-39-Q862b3 {
      align-items: flex-start;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      gap: 53px;
      left: 12px;
      padding: 57px 0px 92px;
      position: absolute;
      top: 1920px;
      width: 406px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-14-mJWLbj {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 8px;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .travel-the-world-h4HxFZ {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .frame-38-mJWLbj {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 32px 32px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .button-l7tlpl {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 315px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-rIWHy1 {
      color: var(--white);
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-rIWHy1 {
      height: 12.008056640625px;
    }

    .iphone-14-u38-15-pro-max-1 .button-BPiYe1 {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 315px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-KmHG2f {
      color: var(--white);
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-KmHG2f {
      height: 12.008056640625px;
    }

    .iphone-14-u38-15-pro-max-1 .button-cfgSuS {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 315px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-QSnxb9 {
      color: var(--white);
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-QSnxb9 {
      height: 12.008056640625px;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-40-Q862b3 {
      background-color: var(--green-kelp);
      height: 654px;
      left: 0px;
      opacity: 0.45;
      position: absolute;
      top: 150px;
      width: 430px;
    }

    .iphone-14-u38-15-pro-max-1 .hero-section-content-Q862b3 {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      height: 225px;
      left: 0px;
      padding: 16px;
      position: absolute;
      top: 184px;
      width: 429px;
    }

    .iphone-14-u38-15-pro-max-1 .hero-content-Ocvp5I {
      padding: 66px 0px;
    }

    .iphone-14-u38-15-pro-max-1 .experience-colours-of-africa-Lu0eWK {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-bottom: -50.00px;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .booking-form-responsive-Q862b3 {
      align-items: center;
      background-color: var(--white);
      border-radius: 8px;
      display: flex;
      flex-wrap: wrap;
      gap: 8px 8px;
      height: 339px;
      justify-content: center;
      left: 44px;
      padding: 0px 32px;
      position: absolute;
      top: 423px;
      width: 343px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-54-EiMxqM {
      background-color: var(--wheatfield);
      border-radius: 8px;
      height: 59px;
      position: relative;
      width: 279px;
    }

    .iphone-14-u38-15-pro-max-1 .destination-8tUh01 {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 19px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 19px;
      white-space: nowrap;
      width: auto;
    }

    .iphone-14-u38-15-pro-max-1 .frame-55-EiMxqM {
      background-color: var(--wheatfield);
      border-radius: 8px;
      height: 59px;
      position: relative;
      width: 279px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-56-EiMxqM {
      background-color: var(--wheatfield);
      border-radius: 8px;
      height: 59px;
      position: relative;
      width: 279px;
    }

    .iphone-14-u38-15-pro-max-1 .button-EiMxqM {
      background-color: var(--green-kelp);
      border-radius: 8px;
      height: 59px;
      padding: 16px;
      position: relative;
      width: 276px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-7zHAhn {
      color: var(--white);
    }

    .iphone-14-u38-15-pro-max-1 .vector-7zHAhn {
      height: 12.008056640625px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-37-Q862b3 {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 253px;
      height: 1009px;
      left: 12px;
      padding: 29px 0px;
      position: absolute;
      top: 884px;
      width: 406px;
    }

    .iphone-14-u38-15-pro-max-1 .inspiring-tanzania-safari-journeys-await-JL1z5x {
      margin-top: -1.00px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-36-JL1z5x {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex-wrap: wrap;
      gap: 64px 64px;
      height: 461px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .features-card-2zMiDI {
      margin-top: -114.50px;
      width: 399px;
    }

    .iphone-14-u38-15-pro-max-1 .features-card-AUvvx2 {
      width: 403px;
    }

    .iphone-14-u38-15-pro-max-1 .features-card-w5LvSw {
      width: 401px;
    }

    .iphone-14-u38-15-pro-max-1 .features-card-zcz6Xk {
      margin-bottom: -114.50px;
      width: 406px;
    }

    .iphone-14-u38-15-pro-max-1 .about-us-section-responsive-Q862b3 {
      align-items: center;
      background-color: var(--green-kelp);
      display: flex;
      flex-wrap: wrap;
      gap: 52px 52px;
      justify-content: center;
      left: 1px;
      padding: 64px 53px;
      position: absolute;
      top: 3912px;
      width: 429px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-41-7RZBjM {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 41px;
      margin-left: -42.00px;
      margin-right: -42.00px;
      position: relative;
      width: 407px;
    }

    .iphone-14-u38-15-pro-max-1 .at-camelleon-safaris-pYxcE6 {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .your-partner-to-seam-pYxcE6 {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .join-us-at-camel-leo-pYxcE6 {
      align-self: stretch;
      background-color: transparent;
      height: 96px;
      letter-spacing: 0.00px;
      line-height: 24px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .frame-40-pYxcE6 {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .x100-7NxGow {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .x500-7NxGow {
      flex: 1;
      height: 43px;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
    }

    .iphone-14-u38-15-pro-max-1 .x50-7NxGow {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .x5-7NxGow {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .button-pYxcE6 {
      background-color: var(--selective-yellow);
      border-radius: 8px;
      flex: 0 0 auto;
      padding: 16px 32px;
      position: relative;
      width: 204px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-BFEVo6 {
      color: var(--white);
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-BFEVo6 {
      height: 12.008056640625px;
    }

    .iphone-14-u38-15-pro-max-1 .about-us_photo-7RZBjM {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-left: -43.00px;
      margin-right: -43.00px;
      position: relative;
      width: 409px;
    }

    .iphone-14-u38-15-pro-max-1 .untitled-1-4-h785bJ {
      align-self: stretch;
      background-color: transparent;
      height: 527px;
      object-fit: cover;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .safari-pakages-responsive-Q862b3 {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 37px;
      height: 4475px;
      left: 12px;
      max-width: 1120px;
      position: absolute;
      top: 5235px;
      width: 406px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-66-tGMCYw {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 17px;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .our-popular-packages-sTaxKg {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xl);
      font-style: normal;
      font-weight: 500;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .east-african-safaris-sTaxKg {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-family: var(--font-family-roboto);
      font-size: 32px;
      font-style: normal;
      font-weight: 900;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .button-9GIjrF {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-Sxwwbg {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-Sxwwbg {
      height: 12.008056640625px;
      margin-right: -5.50px;
    }

    .iphone-14-u38-15-pro-max-1 .button-v0mafR {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-b8SIOW {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-b8SIOW {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .iphone-14-u38-15-pro-max-1 .button-snzWIH {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-wLzOs6 {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-wLzOs6 {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .iphone-14-u38-15-pro-max-1 .button-XIqBqf {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-wQn2W4 {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-wQn2W4 {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .iphone-14-u38-15-pro-max-1 .button-SJcAiz {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-4ZzQdx {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-4ZzQdx {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .iphone-14-u38-15-pro-max-1 .button-IX9K4l {
      background-color: transparent;
      border: 3px solid;
      border-color: var(--green-kelp);
      border-radius: 42px;
      padding: 16px 32px;
      position: relative;
      width: 150px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-O2BBBW {
      color: var(--green-kelp);
      margin-left: -5.61px;
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-O2BBBW {
      height: 12.0078125px;
      margin-right: -5.50px;
    }

    .iphone-14-u38-15-pro-max-1 .button-tGMCYw {
      background-color: var(--green-kelp);
      border-radius: 42px;
      left: 86px;
      padding: 16px 32px;
      position: absolute;
      top: 4338px;
      width: 200px;
    }

    .iphone-14-u38-15-pro-max-1 .button-text-cO5GKX {
      color: var(--white);
      margin-top: -3.00px;
    }

    .iphone-14-u38-15-pro-max-1 .vector-cO5GKX {
      height: 12.0078125px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-64-Q862b3 {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 26px;
      left: 12px;
      position: absolute;
      top: 9710px;
      width: 406px;
    }

    .iphone-14-u38-15-pro-max-1 .images-1-IZL8vo {
      background-color: transparent;
      height: 126px;
      position: relative;
      width: 141px;
    }

    .iphone-14-u38-15-pro-max-1 .camelleon-ranked-3-IZL8vo {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-family: var(--font-family-roboto);
      font-size: 32px;
      font-style: normal;
      font-weight: 900;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .group-10-IZL8vo {
      background-color: transparent;
      height: 21px;
      position: relative;
      width: 217px;
    }

    .iphone-14-u38-15-pro-max-1 .x500-iysV9w {
      height: auto;
      left: 174px;
      position: absolute;
      top: 0px;
      white-space: nowrap;
      width: auto;
    }

    .iphone-14-u38-15-pro-max-1 .group-9-iysV9w {
      background-color: transparent;
      height: 19px;
      left: 0px;
      position: absolute;
      top: 0px;
      width: 151px;
    }

    .iphone-14-u38-15-pro-max-1 .ellipse-1-iTSC82 {
      background-color: var(--shamrock);
      border-radius: 9.5px;
      height: 19px;
      left: 0px;
      position: absolute;
      top: 0px;
      width: 19px;
    }

    .iphone-14-u38-15-pro-max-1 .ellipse-2-iTSC82 {
      background-color: var(--shamrock);
      border-radius: 10px/9.5px;
      height: 19px;
      left: 33px;
      position: absolute;
      top: 0px;
      width: 20px;
    }

    .iphone-14-u38-15-pro-max-1 .ellipse-3-iTSC82 {
      background-color: var(--shamrock);
      border-radius: 10.5px/9.5px;
      height: 19px;
      left: 65px;
      position: absolute;
      top: 0px;
      width: 21px;
    }

    .iphone-14-u38-15-pro-max-1 .ellipse-4-iTSC82 {
      background-color: var(--shamrock);
      border-radius: 10px/9.5px;
      height: 19px;
      left: 98px;
      position: absolute;
      top: 0px;
      width: 20px;
    }

    .iphone-14-u38-15-pro-max-1 .ellipse-5-iTSC82 {
      background-color: var(--shamrock);
      border-radius: 9.5px;
      height: 19px;
      left: 132px;
      position: absolute;
      top: 0px;
      width: 19px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-67-Q862b3::-webkit-scrollbar {
      display: none;
      width: 0;
    }

    .iphone-14-u38-15-pro-max-1 .frame-67-Q862b3 {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-wrap: nowrap;
      gap: 32px;
      left: 12px;
      overflow: scroll;
      position: absolute;
      top: 10061px;
      width: 802px;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-29-DeJo4E {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      position: relative;
      width: 352px;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-30-DeJo4E {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      position: relative;
      width: 352px;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-31-DeJo4E {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      position: relative;
      width: 352px;
    }

    .iphone-14-u38-15-pro-max-1 .mask-group-DeJo4E {
      left: 28px;
    }

    .iphone-14-u38-15-pro-max-1 .mask-group-HuaJDI {
      left: 411px;
    }

    .iphone-14-u38-15-pro-max-1 .mask-group-XAAZ7z {
      left: 794px;
    }

    .iphone-14-u38-15-pro-max-1 .vic-DeJo4E {
      left: 113px;
    }

    .iphone-14-u38-15-pro-max-1 .vic-HuaJDI {
      left: 496px;
    }

    .iphone-14-u38-15-pro-max-1 .vic-XAAZ7z {
      left: 879px;
    }

    .iphone-14-u38-15-pro-max-1 .jan2024-DeJo4E {
      left: 112px;
    }

    .iphone-14-u38-15-pro-max-1 .jan2024-HuaJDI {
      left: 495px;
    }

    .iphone-14-u38-15-pro-max-1 .jan2024-XAAZ7z {
      left: 878px;
    }

    .iphone-14-u38-15-pro-max-1 .the-team-led-by-stan-DeJo4E {
      left: 24px;
      top: 201px;
    }

    .iphone-14-u38-15-pro-max-1 .the-team-led-by-stan-HuaJDI {
      left: 406px;
      top: 188px;
    }

    .iphone-14-u38-15-pro-max-1 .the-team-led-by-stan-XAAZ7z {
      left: 790px;
      top: 184px;
    }

    .iphone-14-u38-15-pro-max-1 .amazing-experience-DeJo4E {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 700;
      height: auto;
      left: 24px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 132px;
      width: 308px;
    }

    .iphone-14-u38-15-pro-max-1 .amaizing-experience-DeJo4E {
      left: 407px;
      top: 127px;
      width: 244px;
    }

    .iphone-14-u38-15-pro-max-1 .amaizing-experience-HuaJDI {
      left: 790px;
      top: 124px;
      width: 245px;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-32-Q862b3 {
      background-color: transparent;
      height: 462px;
      left: -2px;
      object-fit: cover;
      position: absolute;
      top: 10637px;
      width: 432px;
    }

    .iphone-14-u38-15-pro-max-1 .footer-section-Q862b3 {
      align-items: center;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      gap: 11px;
      justify-content: center;
      left: 0px;
      padding: 0px 29px;
      position: absolute;
      top: 11199px;
      width: 431px;
    }

    .iphone-14-u38-15-pro-max-1 .footer-content-QraANb {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 32px 16px;
      max-width: 1131px;
      min-width: 256px;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .frame-43-ezHY5Z {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 256px;
      min-width: 160px;
      position: relative;
      width: 256px;
    }

    .iphone-14-u38-15-pro-max-1 .frame-42-xrAFsv {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 24px;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .logo-uxDONl {
      height: 42.746246337890625px;
      width: 179px;
    }

    .iphone-14-u38-15-pro-max-1 .camel-leon-safaris-l-uxDONl {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 500;
      line-height: 20.6px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .frame-44-ezHY5Z {
      align-items: flex-start;
      background-color: transparent;
      display: inline-flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 20px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
    }

    .iphone-14-u38-15-pro-max-1 .travel-tips-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .entry-requirements-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .iphone-14-u38-15-pro-max-1 .tanzania-safari-planning-guide-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .iphone-14-u38-15-pro-max-1 .best-time-to-visit-tanzania-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .iphone-14-u38-15-pro-max-1 .kilimanjaro-planning-guide-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .iphone-14-u38-15-pro-max-1 .drones-photography-guide-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .iphone-14-u38-15-pro-max-1 .tipping-guide-1jykJJ {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .frame-45-ezHY5Z {
      align-items: flex-start;
      background-color: transparent;
      display: inline-flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 19px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
    }

    .iphone-14-u38-15-pro-max-1 .camelleon-safaris-Emc986 {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .about-us-Emc986 {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .terms-and-cionditions-Emc986 {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .booking-process-Emc986 {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .payment-details-Emc986 {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .privacy-policy-Emc986 {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .frame-46-ezHY5Z {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 15px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
      width: 256px;
    }

    .iphone-14-u38-15-pro-max-1 .contact-information-5iokWf {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .sales-safari-expert-5iokWf {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .x25568-655-5755-5iokWf {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .infocamelleonsafariscom-5iokWf {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .rectangle-33-Q862b3 {
      background-color: var(--wheatfield);
      height: 98px;
      left: 0px;
      position: absolute;
      top: 12173px;
      width: 430px;
    }

    .iphone-14-u38-15-pro-max-1 .button {
      align-items: center;
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .iphone-14-u38-15-pro-max-1 .button-text {
      background-color: transparent;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      position: relative;
      text-align: left;
      white-space: nowrap;
      width: fit-content;
    }

    .iphone-14-u38-15-pro-max-1 .features-card {
      align-items: flex-start;
      background-color: var(--wheatfield);
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding: 39px 26px 34px;
      position: relative;
    }

    .iphone-14-u38-15-pro-max-1 .inspiring-tanzania-safari-journeys-await {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-family: var(--font-family-roboto);
      font-size: 32px;
      font-style: normal;
      font-weight: 900;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: center;
    }

    .iphone-14-u38-15-pro-max-1 .jan2024 {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 84px;
      white-space: nowrap;
      width: auto;
    }

    .iphone-14-u38-15-pro-max-1 .logo {
      background-color: transparent;
      position: relative;
    }

    .iphone-14-u38-15-pro-max-1 .mask-group {
      background-color: transparent;
      height: 51px;
      position: absolute;
      top: 51px;
      width: 51px;
    }

    .iphone-14-u38-15-pro-max-1 .safari-card {
      align-items: flex-start;
      background-color: var(--white);
      border-radius: 16px;
      display: flex;
      flex-direction: column;
      gap: 16px;
      height: 641px;
      max-width: 406px;
      min-width: 256px;
      padding: 0px 0px 32px;
      position: relative;
      width: 100%;
    }

    .iphone-14-u38-15-pro-max-1 .vector {
      background-color: transparent;
      position: relative;
      width: 11.998291015625px;
    }

    .iphone-14-u38-15-pro-max-1 .vic {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 56px;
      white-space: nowrap;
      width: auto;
    }

    .iphone-14-u38-15-pro-max-1 .x10-days {
      align-self: stretch;
      background-color: transparent;
      color: var(--eerie-black);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .iphone-14-u38-15-pro-max-1 .x3300 {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: 31px;
      position: relative;
      text-align: left;
    }

    /* screen - landing-page */

    .landing-page {
      background-color: var(--white);
      height: 6935px;
      mix-blend-mode: normal;
      overflow: hidden;
      overflow-x: hidden;
      position: relative;
      width: 1440px;
    }

    .landing-page .rectangle-3-0MUxxh {
      background-color: transparent;
      height: 712px;
      left: 1px;
      object-fit: cover;
      position: absolute;
      top: 136px;
      width: 1439px;
    }

    .landing-page .rectangle-40-0MUxxh {
      background-color: var(--green-kelp);
      height: 712px;
      left: 1px;
      opacity: 0.45;
      position: absolute;
      top: 136px;
      width: 1440px;
    }

    .landing-page .frame-37-0MUxxh {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 64px;
      left: 160px;
      position: absolute;
      top: 941px;
      width: 1120px;
    }

    .landing-page .inspiring-tanzania-safari-journeys-await-z870ex {
      margin-top: -1.00px;
    }

    .landing-page .frame-36-z870ex {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex-wrap: wrap;
      gap: 33px 33px;
      height: 146px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .landing-page .features-card-hOXDFM {
      width: 256px;
    }

    .landing-page .features-card-HkFXWx {
      width: 255px;
    }

    .landing-page .features-card-BMXo83 {
      width: 255px;
    }

    .landing-page .features-card-YFehXD {
      width: 255px;
    }

    .landing-page .rectangle-32-0MUxxh {
      background-color: transparent;
      height: 462px;
      left: -6px;
      object-fit: cover;
      position: absolute;
      top: 5807px;
      width: 1451px;
    }

    .landing-page .rectangle-33-0MUxxh {
      background-color: var(--wheatfield);
      height: 109px;
      left: 1px;
      position: absolute;
      top: 6826px;
      width: 1450px;
    }

    .landing-page .frame-63-0MUxxh {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 26px;
      left: 493px;
      position: absolute;
      top: 5005px;
      width: 460px;
    }

    .landing-page .images-1-j1iU3L {
      background-color: transparent;
      height: 126px;
      position: relative;
      width: 141px;
    }

    .landing-page .camelleon-ranked-3-j1iU3L {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 900;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .group-10-j1iU3L {
      background-color: transparent;
      height: 21px;
      position: relative;
      width: 217px;
    }

    .landing-page .x500-BwLK2i {
      height: auto;
      left: 174px;
      position: absolute;
      top: 0px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .group-9-BwLK2i {
      height: 19px;
      left: 0px;
      top: 0px;
      width: 151px;
    }

    .landing-page .ellipse-1-mg3zry {
      border-radius: 9.5px;
      height: 19px;
      width: 19px;
    }

    .landing-page .ellipse-2-mg3zry {
      border-radius: 10px/9.5px;
      height: 19px;
      left: 33px;
      width: 20px;
    }

    .landing-page .ellipse-3-mg3zry {
      border-radius: 10.5px/9.5px;
      height: 19px;
      left: 65px;
      width: 21px;
    }

    .landing-page .ellipse-4-mg3zry {
      border-radius: 10px/9.5px;
      height: 19px;
      left: 98px;
      width: 20px;
    }

    .landing-page .ellipse-5-mg3zry {
      border-radius: 9.5px;
      height: 19px;
      left: 132px;
      width: 19px;
    }

    .landing-page .rectangle-29-0MUxxh {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      left: 160px;
      position: absolute;
      top: 5323px;
      width: 352px;
    }

    .landing-page .rectangle-30-0MUxxh {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      left: 544px;
      position: absolute;
      top: 5323px;
      width: 352px;
    }

    .landing-page .rectangle-31-0MUxxh {
      background-color: var(--wheatfield);
      border-radius: 17px;
      height: 389px;
      left: 928px;
      position: absolute;
      top: 5323px;
      width: 352px;
    }

    .landing-page .group-9-0MUxxh {
      height: 13px;
      left: 393px;
      top: 5385px;
      width: 100px;
    }

    .landing-page .ellipse-1-LcemJb {
      border-radius: 6.32px;
      height: 13px;
      width: 13px;
    }

    .landing-page .ellipse-2-LcemJb {
      border-radius: 6.65px/6.32px;
      height: 13px;
      left: 23px;
      width: 13px;
    }

    .landing-page .ellipse-3-LcemJb {
      border-radius: 6.98px/6.32px;
      height: 13px;
      left: 43px;
      width: 14px;
    }

    .landing-page .ellipse-4-LcemJb {
      border-radius: 6.65px/6.32px;
      height: 13px;
      left: 65px;
      width: 13px;
    }

    .landing-page .ellipse-5-LcemJb {
      border-radius: 6.32px;
      height: 13px;
      left: 88px;
      width: 13px;
    }

    .landing-page .group-11-0MUxxh {
      background-color: transparent;
      height: 13px;
      left: 775px;
      position: absolute;
      top: 5385px;
      width: 100px;
    }

    .landing-page .ellipse-1-QxYU8j {
      border-radius: 6.32px;
      height: 13px;
      width: 13px;
    }

    .landing-page .ellipse-2-QxYU8j {
      border-radius: 6.65px/6.32px;
      height: 13px;
      left: 22px;
      width: 13px;
    }

    .landing-page .ellipse-3-QxYU8j {
      border-radius: 6.98px/6.32px;
      height: 13px;
      left: 43px;
      width: 14px;
    }

    .landing-page .ellipse-4-QxYU8j {
      border-radius: 6.65px/6.32px;
      height: 13px;
      left: 65px;
      width: 13px;
    }

    .landing-page .ellipse-5-QxYU8j {
      border-radius: 6.32px;
      height: 13px;
      left: 88px;
      width: 13px;
    }

    .landing-page .group-12-0MUxxh {
      background-color: transparent;
      height: 13px;
      left: 1159px;
      position: absolute;
      top: 5385px;
      width: 100px;
    }

    .landing-page .ellipse-1-6hDjCC {
      border-radius: 6.32px;
      height: 13px;
      width: 13px;
    }

    .landing-page .ellipse-2-6hDjCC {
      border-radius: 6.65px/6.32px;
      height: 13px;
      left: 22px;
      width: 13px;
    }

    .landing-page .ellipse-3-6hDjCC {
      border-radius: 6.98px/6.32px;
      height: 13px;
      left: 43px;
      width: 14px;
    }

    .landing-page .ellipse-4-6hDjCC {
      border-radius: 6.65px/6.32px;
      height: 13px;
      left: 65px;
      width: 13px;
    }

    .landing-page .ellipse-5-6hDjCC {
      border-radius: 6.32px;
      height: 13px;
      left: 88px;
      width: 13px;
    }

    .landing-page .mask-group-0MUxxh {
      left: 188px;
    }

    .landing-page .mask-group-gwJAt7 {
      left: 571px;
    }

    .landing-page .mask-group-JZkvxC {
      left: 954px;
    }

    .landing-page .vic-0MUxxh {
      left: 273px;
    }

    .landing-page .vic-gwJAt7 {
      left: 656px;
    }

    .landing-page .vic-JZkvxC {
      left: 1039px;
    }

    .landing-page .jan2024-0MUxxh {
      left: 272px;
    }

    .landing-page .jan2024-gwJAt7 {
      left: 655px;
    }

    .landing-page .jan2024-JZkvxC {
      left: 1038px;
    }

    .landing-page .the-team-led-by-stan-0MUxxh {
      left: 184px;
      top: 5524px;
    }

    .landing-page .the-team-led-by-stan-gwJAt7 {
      left: 566px;
      top: 5511px;
    }

    .landing-page .the-team-led-by-stan-JZkvxC {
      left: 950px;
      top: 5507px;
    }

    .landing-page .amazing-experience-0MUxxh {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 700;
      height: auto;
      left: 184px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 5455px;
      width: 308px;
    }

    .landing-page .amaizing-experience-0MUxxh {
      left: 567px;
      top: 5450px;
      width: 244px;
    }

    .landing-page .amaizing-experience-gwJAt7 {
      left: 950px;
      top: 5447px;
      width: 245px;
    }

    .landing-page .our-popular-packages-0MUxxh {
      background-color: transparent;
      color: var(--black);
      font-family: var(--font-family-roboto);
      font-size: var(--font-size-xl);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 621px;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 3135px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .east-african-safaris-0MUxxh {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 900;
      height: auto;
      left: 443px;
      line-height: normal;
      position: absolute;
      text-align: center;
      top: 3175px;
      width: auto;
    }

    .landing-page .rectangle-7-0MUxxh {
      background-color: var(--white);
      border-radius: 18px;
      box-shadow: 4px 4px 6.099999904632568px 1px #00000040;
      height: 702px;
      left: 160px;
      position: absolute;
      top: 3344px;
      width: 352px;
    }

    .landing-page .rectangle-8-0MUxxh {
      background-color: var(--white);
      border-radius: 18px;
      box-shadow: 4px 4px 6.099999904632568px 1px #00000040;
      height: 702px;
      left: 541px;
      position: absolute;
      top: 3344px;
      width: 352px;
    }

    .landing-page .rectangle-9-0MUxxh {
      background-color: var(--white);
      border-radius: 18px;
      box-shadow: 4px 4px 6.099999904632568px 1px #00000040;
      height: 702px;
      left: 928px;
      position: absolute;
      top: 3344px;
      width: 352px;
    }

    .landing-page .x3-days-authentic-hun-0MUxxh {
      left: 180px;
      top: 3720px;
    }

    .landing-page .x3-days-authentic-hun-gwJAt7 {
      left: 564px;
      top: 3720px;
    }

    .landing-page .x3-days-authentic-hun-JZkvxC {
      left: 941px;
      top: 3720px;
    }

    .landing-page .rectangle-4-0MUxxh {
      background-color: transparent;
      height: 334px;
      left: 160px;
      object-fit: cover;
      position: absolute;
      top: 3350px;
      width: 352px;
    }

    .landing-page .rectangle-5-0MUxxh {
      background-color: transparent;
      height: 334px;
      left: 544px;
      object-fit: cover;
      position: absolute;
      top: 3350px;
      width: 352px;
    }

    .landing-page .join-us-for-an-extra-0MUxxh {
      left: 179px;
      top: 3798px;
    }

    .landing-page .rectangle-6-0MUxxh {
      background-color: transparent;
      height: 334px;
      left: 928px;
      object-fit: cover;
      position: absolute;
      top: 3350px;
      width: 352px;
    }

    .landing-page .join-us-for-an-extra-gwJAt7 {
      left: 563px;
      top: 3798px;
    }

    .landing-page .join-us-for-an-extra-JZkvxC {
      left: 940px;
      top: 3798px;
    }

    .landing-page .vector-0MUxxh {
      background-color: transparent;
      height: 8px;
      left: 179px;
      position: absolute;
      top: 3603px;
      width: 10px;
    }

    .landing-page .vector-gwJAt7 {
      background-color: transparent;
      height: 8px;
      left: 564px;
      position: absolute;
      top: 3603px;
      width: 10px;
    }

    .landing-page .vector-JZkvxC {
      background-color: transparent;
      height: 8px;
      left: 941px;
      position: absolute;
      top: 3603px;
      width: 10px;
    }

    .landing-page .x10-days-0MUxxh {
      left: 201px;
      top: 3941px;
    }

    .landing-page .x10-days-gwJAt7 {
      left: 586px;
      top: 3941px;
    }

    .landing-page .x10-days-JZkvxC {
      left: 963px;
      top: 3941px;
    }

    .landing-page .x2-7-people-0MUxxh {
      left: 201px;
      top: 3975px;
    }

    .landing-page .x2-7-people-gwJAt7 {
      left: 586px;
      top: 3975px;
    }

    .landing-page .x2-7-people-JZkvxC {
      left: 963px;
      top: 3975px;
    }

    .landing-page .vector-o9mxaa {
      background-color: transparent;
      height: 8px;
      left: 179px;
      position: absolute;
      top: 3631px;
      width: 13px;
    }

    .landing-page .vector-vQepBx {
      background-color: transparent;
      height: 8px;
      left: 564px;
      position: absolute;
      top: 3631px;
      width: 13px;
    }

    .landing-page .vector-h3ngGw {
      background-color: transparent;
      height: 8px;
      left: 941px;
      position: absolute;
      top: 3631px;
      width: 13px;
    }

    .landing-page .x3300-0MUxxh {
      left: 423px;
      top: 3971px;
    }

    .landing-page .x1000-0MUxxh {
      left: 808px;
      top: 3971px;
    }

    .landing-page .x2200-0MUxxh {
      left: 1185px;
      top: 3971px;
    }

    .landing-page .group-2-0MUxxh {
      background-color: transparent;
      height: 702px;
      left: 160px;
      position: absolute;
      top: 4069px;
      width: 1150px;
    }

    .landing-page .rectangle-10-7KdOzf {
      background-color: var(--white);
      border-radius: 18px;
      box-shadow: 4px 4px 6.099999904632568px 1px #00000040;
      height: 702px;
      left: 0px;
      position: absolute;
      top: 0px;
      width: 352px;
    }

    .landing-page .rectangle-11-7KdOzf {
      background-color: var(--white);
      border-radius: 18px;
      box-shadow: 4px 4px 6.099999904632568px 1px #00000040;
      height: 702px;
      left: 381px;
      position: absolute;
      top: 0px;
      width: 352px;
    }

    .landing-page .rectangle-12-7KdOzf {
      background-color: var(--white);
      border-radius: 18px;
      box-shadow: 4px 4px 6.099999904632568px 1px #00000040;
      height: 702px;
      left: 768px;
      position: absolute;
      top: 0px;
      width: 352px;
    }

    .landing-page .x3-days-authentic-hun-7KdOzf {
      left: 20px;
      top: 377px;
    }

    .landing-page .x3-days-authentic-hun-qAuZ02 {
      left: 404px;
      top: 377px;
    }

    .landing-page .x3-days-authentic-hun-6Z44ux {
      left: 781px;
      top: 377px;
    }

    .landing-page .rectangle-13-7KdOzf {
      background-color: transparent;
      height: 334px;
      left: 0px;
      object-fit: cover;
      position: absolute;
      top: 6px;
      width: 352px;
    }

    .landing-page .rectangle-14-7KdOzf {
      background-color: transparent;
      height: 334px;
      left: 384px;
      object-fit: cover;
      position: absolute;
      top: 6px;
      width: 352px;
    }

    .landing-page .join-us-for-an-extra-7KdOzf {
      left: 19px;
      top: 455px;
    }

    .landing-page .rectangle-15-7KdOzf {
      background-color: transparent;
      height: 334px;
      left: 768px;
      object-fit: cover;
      position: absolute;
      top: 6px;
      width: 352px;
    }

    .landing-page .join-us-for-an-extra-qAuZ02 {
      left: 403px;
      top: 455px;
    }

    .landing-page .join-us-for-an-extra-6Z44ux {
      left: 780px;
      top: 455px;
    }

    .landing-page .vector-7KdOzf {
      background-color: transparent;
      height: 8px;
      left: 19px;
      position: absolute;
      top: 132px;
      width: 10px;
    }

    .landing-page .vector-qAuZ02 {
      background-color: transparent;
      height: 8px;
      left: 404px;
      position: absolute;
      top: 132px;
      width: 10px;
    }

    .landing-page .vector-6Z44ux {
      background-color: transparent;
      height: 8px;
      left: 781px;
      position: absolute;
      top: 132px;
      width: 10px;
    }

    .landing-page .x10-days-7KdOzf {
      left: 41px;
      top: 598px;
    }

    .landing-page .x10-days-qAuZ02 {
      left: 426px;
      top: 598px;
    }

    .landing-page .x10-days-6Z44ux {
      left: 803px;
      top: 598px;
    }

    .landing-page .x2-7-people-7KdOzf {
      left: 41px;
      top: 632px;
    }

    .landing-page .x2-7-people-qAuZ02 {
      left: 426px;
      top: 632px;
    }

    .landing-page .x2-7-people-6Z44ux {
      left: 803px;
      top: 632px;
    }

    .landing-page .vector-qTRWmH {
      background-color: transparent;
      height: 8px;
      left: 19px;
      position: absolute;
      top: 160px;
      width: 13px;
    }

    .landing-page .vector-KxDZv7 {
      background-color: transparent;
      height: 8px;
      left: 404px;
      position: absolute;
      top: 160px;
      width: 13px;
    }

    .landing-page .vector-3SXxxm {
      background-color: transparent;
      height: 8px;
      left: 781px;
      position: absolute;
      top: 160px;
      width: 13px;
    }

    .landing-page .x3300-7KdOzf {
      left: 263px;
      top: 628px;
    }

    .landing-page .x1000-7KdOzf {
      left: 648px;
      top: 628px;
    }

    .landing-page .x2200-7KdOzf {
      left: 1025px;
      top: 628px;
    }

    .landing-page .hero-section-content-0MUxxh {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      height: 225px;
      left: 1px;
      padding: 10px;
      position: absolute;
      top: 297px;
      width: 1440px;
    }

    .landing-page .hero-content-aoZlt7 {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 1;
      flex-direction: column;
      flex-grow: 1;
      gap: 21px;
      padding: 66px 0px;
      position: relative;
      width: 100%;
    }

    .landing-page .title-KxyNQt {
      align-self: stretch;
      background-color: transparent;
      color: var(--wheatfield);
      font-style: normal;
      font-weight: 800;
      line-height: normal;
      margin-bottom: -1.00px;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .landing-page .frame-13-0MUxxh {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      justify-content: center;
      left: -9px;
      padding: 10px;
      position: absolute;
      top: 522px;
      width: 1440px;
    }

    .landing-page .booking-form-GAx4E1 {
      align-items: center;
      background-color: var(--white);
      border-radius: 8px;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 15px;
      justify-content: center;
      max-width: 1189px;
      padding: 16px 20px;
      position: relative;
      width: 100%;
    }

    .landing-page .frame-53-eIo6ja {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 15px 15px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .landing-page .rectangle-24-WUOGxI {
      background-color: var(--wheatfield);
      border-radius: 8px 9px 9px 8px;
      flex: 1;
      flex-grow: 1;
      height: 59px;
      position: relative;
    }

    .landing-page .destination-WUOGxI {
      background-color: transparent;
      color: var(--chicago);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 17px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 21px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .rectangle-41-WUOGxI {
      background-color: var(--wheatfield);
      border-radius: 8px 9px 9px 8px;
      flex: 1;
      flex-grow: 1;
      height: 59px;
      position: relative;
    }

    .landing-page .duration-WUOGxI {
      background-color: transparent;
      color: var(--chicago);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 292px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 21px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .rectangle-42-WUOGxI {
      background-color: var(--wheatfield);
      border-radius: 8px 9px 9px 8px;
      flex: 1;
      flex-grow: 1;
      height: 59px;
      position: relative;
    }

    .landing-page .budget-WUOGxI {
      background-color: transparent;
      color: var(--chicago);
      font-style: normal;
      font-weight: 500;
      height: auto;
      left: 572px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 21px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .button-WUOGxI {
      background-color: var(--green-kelp);
      flex: 1;
      flex-grow: 1;
      height: 59px;
    }

    .landing-page .vector-6XI1sd {
      background-color: transparent;
      height: 12.008056640625px;
      position: relative;
      width: 11.99853515625px;
    }

    .landing-page .frame-39-0MUxxh {
      align-items: flex-start;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      gap: 53px;
      left: 0px;
      padding: 57px 0px 92px;
      position: absolute;
      top: 1276px;
      width: 1440px;
    }

    .landing-page .frame-14-fa5GQB {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 8px;
      position: relative;
      width: 100%;
    }

    .landing-page .travel-the-world-l1DKA6 {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: center;
    }

    .landing-page .frame-38-fa5GQB {
      align-items: center;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 32px 32px;
      justify-content: center;
      position: relative;
      width: 100%;
    }

    .landing-page .button-Q9TKjl {
      background-color: var(--selective-yellow);
      flex: 0 0 auto;
      width: 315px;
    }

    .landing-page .button-text-PO9aWi {
      margin-top: -3.00px;
    }

    .landing-page .vector-PO9aWi {
      background-color: transparent;
      height: 12.00804615020752px;
      position: relative;
      width: 11.998291015625px;
    }

    .landing-page .button-MXKC7C {
      background-color: var(--selective-yellow);
      flex: 0 0 auto;
      width: 315px;
    }

    .landing-page .button-text-7PCGO7 {
      margin-top: -3.00px;
    }

    .landing-page .vector-7PCGO7 {
      background-color: transparent;
      height: 12.00804615020752px;
      position: relative;
      width: 11.99853515625px;
    }

    .landing-page .button-x1sDt2 {
      background-color: var(--selective-yellow);
      flex: 0 0 auto;
      width: 315px;
    }

    .landing-page .button-text-qTQgdx {
      margin-top: -3.00px;
    }

    .landing-page .vector-qTQgdx {
      background-color: transparent;
      height: 12.00804615020752px;
      position: relative;
      width: 11.99853515625px;
    }

    .landing-page .header-0MUxxh {
      align-items: center;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      justify-content: center;
      left: 0px;
      padding: 20px 0px;
      position: absolute;
      top: 45px;
      width: 1440px;
    }

    .landing-page .header-navigation-container-TL0pTC {
      align-items: center;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      justify-content: space-between;
      position: relative;
      width: 1120px;
    }

    .landing-page .navigation-Qlx5vr {
      align-items: center;
      background-color: transparent;
      display: inline-flex;
      flex: 0 0 auto;
      gap: 16px;
      position: relative;
    }

    .landing-page .menu-item-WE261m {
      align-items: center;
      justify-content: center;
      padding: 16px 20px;
    }

    .landing-page .menu-AiaLPB {
      margin-top: -1.00px;
    }

    .landing-page .menu-item-NNgFpw {
      align-items: center;
      border-radius: 8px;
      padding: 16px 35px 16px 20px;
    }

    .landing-page .menu-ObZa2e {
      margin-top: -1.00px;
    }

    .landing-page .vector-ObZa2e {
      background-color: transparent;
      height: 9px;
      left: 68px;
      position: absolute;
      top: 21px;
      width: 15px;
    }

    .landing-page .menu-item-fqls2x {
      align-items: center;
      border-radius: 8px;
      padding: 16px 35px 16px 20px;
    }

    .landing-page .menu-hhsWBw {
      margin-top: -1.00px;
    }

    .landing-page .vector-hhsWBw {
      background-color: transparent;
      height: 9px;
      left: 139px;
      position: absolute;
      top: 21px;
      width: 15px;
    }

    .landing-page .menu-item-nsPk3W {
      align-items: center;
      justify-content: center;
      padding: 16px 20px;
    }

    .landing-page .menu-2vxSaU {
      margin-top: -1.00px;
    }

    .landing-page .menu-item-PtjLTf {
      align-items: center;
      justify-content: center;
      padding: 16px 20px;
    }

    .landing-page .menu-PT71o0 {
      margin-top: -1.00px;
    }

    .landing-page .menu-item-RrAug2 {
      align-items: flex-start;
      border: 3px solid;
      border-color: var(--selective-yellow);
      border-radius: 42px;
      padding: 16px 20px;
    }

    .landing-page .menu-cdhCoo {
      margin-top: -3.00px;
    }

    .landing-page .about-us-section-responsive-0MUxxh {
      align-items: center;
      background-color: var(--green-kelp);
      display: flex;
      flex-wrap: wrap;
      gap: 52px 52px;
      height: 905px;
      justify-content: center;
      left: 0px;
      padding: 148px 53px 166px;
      position: absolute;
      top: 2175px;
      width: 1440px;
    }

    .landing-page .frame-41-7Qk4Of {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 41px;
      position: relative;
      width: 532px;
    }

    .landing-page .at-camelleon-safaris-m4QdHa {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .your-partner-to-seam-m4QdHa {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .join-us-at-camel-leo-m4QdHa {
      align-self: stretch;
      background-color: transparent;
      height: 96px;
      letter-spacing: 0.00px;
      line-height: 24px;
      position: relative;
      text-align: left;
    }

    .landing-page .frame-40-m4QdHa {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      position: relative;
      width: 100%;
    }

    .landing-page .x100-NrJRIW {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .x500-NrJRIW {
      flex: 1;
      height: 43px;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
    }

    .landing-page .x50-NrJRIW {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .x5-NrJRIW {
      background-color: transparent;
      flex: 1;
      height: 43px;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-left: -132px;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .button-m4QdHa {
      background-color: var(--selective-yellow);
      flex: 0 0 auto;
      width: 204px;
    }

    .landing-page .button-text-bc4vs1 {
      margin-top: -3.00px;
    }

    .landing-page .vector-bc4vs1 {
      background-color: transparent;
      height: 12.008056640625px;
      position: relative;
      width: 11.998046875px;
    }

    .landing-page .about-us_photo-7Qk4Of {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      position: relative;
      width: 533px;
    }

    .landing-page .untitled-1-4-x3MDIx {
      align-self: stretch;
      background-color: transparent;
      height: 527px;
      object-fit: cover;
      position: relative;
      width: 100%;
    }

    .landing-page .footer-section-0MUxxh {
      align-items: center;
      background-color: var(--white);
      display: flex;
      flex-direction: column;
      gap: 11px;
      height: 557px;
      justify-content: center;
      left: 0px;
      position: absolute;
      top: 6269px;
      width: 1429px;
    }

    .landing-page .footer-content-MIDAxP {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-wrap: wrap;
      gap: 32px 32px;
      justify-content: center;
      max-width: 1131px;
      min-width: 256px;
      position: relative;
      width: 1131px;
    }

    .landing-page .frame-43-oNLHTK {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 256px;
      min-width: 160px;
      position: relative;
      width: 256px;
    }

    .landing-page .frame-42-MLEaSj {
      align-items: flex-start;
      align-self: stretch;
      background-color: transparent;
      display: flex;
      flex: 0 0 auto;
      flex-direction: column;
      gap: 24px;
      position: relative;
      width: 100%;
    }

    .landing-page .camel-leon-safaris-l-m4wVrL {
      align-self: stretch;
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 500;
      line-height: 20.6px;
      position: relative;
      text-align: left;
    }

    .landing-page .frame-44-oNLHTK {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
      width: 256px;
    }

    .landing-page .travel-tips-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .entry-requirements-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .landing-page .tanzania-safari-planning-guide-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .landing-page .best-time-to-visit-tanzania-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .landing-page .kilimanjaro-planning-guide-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .landing-page .drones-photography-guide-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      cursor: pointer;
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      text-decoration: underline;
    }

    .landing-page .tipping-guide-xtLN0G {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .frame-45-oNLHTK {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 19px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
      width: 256px;
    }

    .landing-page .camelleon-safaris-DiZAVS {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .about-us-DiZAVS {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .terms-and-cionditions-DiZAVS {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .booking-process-DiZAVS {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .payment-details-DiZAVS {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .privacy-policy-DiZAVS {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .frame-46-oNLHTK {
      align-items: flex-start;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      gap: 15px;
      max-width: 256px;
      min-width: 160px;
      padding: 0px 0px 0px 16px;
      position: relative;
      width: 256px;
    }

    .landing-page .contact-information-XCinXh {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      margin-top: -1.00px;
      position: relative;
      text-align: left;
    }

    .landing-page .sales-safari-expert-XCinXh {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .x25568-655-5755-XCinXh {
      align-self: stretch;
      background-color: transparent;
      letter-spacing: 0.00px;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .infocamelleonsafariscom-XCinXh {
      align-self: stretch;
      background-color: transparent;
      color: var(--gray);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
    }

    .landing-page .button {
      align-items: center;
      border-radius: 8px;
      display: flex;
      gap: 8px;
      justify-content: center;
      padding: 16px 32px;
      position: relative;
    }

    .landing-page .button-text {
      background-color: transparent;
      color: var(--white);
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      position: relative;
      text-align: left;
      white-space: nowrap;
      width: fit-content;
    }

    .landing-page .ellipse-1 {
      background-color: var(--shamrock);
      left: 0px;
      position: absolute;
      top: 0px;
    }

    .landing-page .ellipse-2 {
      background-color: var(--shamrock);
      position: absolute;
      top: 0px;
    }

    .landing-page .ellipse-3 {
      background-color: var(--shamrock);
      position: absolute;
      top: 0px;
    }

    .landing-page .ellipse-4 {
      background-color: var(--shamrock);
      position: absolute;
      top: 0px;
    }

    .landing-page .ellipse-5 {
      background-color: var(--shamrock);
      position: absolute;
      top: 0px;
    }

    .landing-page .features-card {
      align-items: flex-start;
      background-color: var(--wheatfield);
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding: 39px 26px 34px;
      position: relative;
    }

    .landing-page .group-9 {
      background-color: transparent;
      position: absolute;
    }

    .landing-page .inspiring-tanzania-safari-journeys-await {
      align-self: stretch;
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 900;
      line-height: normal;
      position: relative;
      text-align: center;
    }

    .landing-page .jan2024 {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 5407px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .join-us-for-an-extra {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 500;
      height: auto;
      line-height: 24px;
      position: absolute;
      text-align: left;
      width: 313px;
    }

    .landing-page .logo {
      background-color: transparent;
      height: 42.746246337890625px;
      position: relative;
      width: 179px;
    }

    .landing-page .mask-group {
      background-color: transparent;
      height: 51px;
      position: absolute;
      top: 5374px;
      width: 51px;
    }

    .landing-page .menu {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      position: relative;
      text-align: left;
      white-space: nowrap;
      width: fit-content;
    }

    .landing-page .menu-item {
      background-color: transparent;
      display: inline-flex;
      flex: 0 0 auto;
      gap: 10px;
      position: relative;
    }

    .landing-page .vic {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: normal;
      position: absolute;
      text-align: left;
      top: 5379px;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .x10-days {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 400;
      height: auto;
      line-height: 31px;
      position: absolute;
      text-align: left;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .x1000 {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      height: auto;
      line-height: 31px;
      position: absolute;
      text-align: left;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .x2-7-people {
      background-color: transparent;
      color: var(--black);
      font-style: normal;
      font-weight: 400;
      height: auto;
      line-height: 31px;
      position: absolute;
      text-align: left;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .x2200 {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      height: auto;
      line-height: 31px;
      position: absolute;
      text-align: left;
      white-space: nowrap;
      width: auto;
    }

    .landing-page .x3-days-authentic-hun {
      background-color: transparent;
      height: auto;
      letter-spacing: 0.00px;
      line-height: 31px;
      position: absolute;
      text-align: left;
      width: 312px;
    }

    .landing-page .x3300 {
      background-color: transparent;
      color: var(--green-kelp);
      font-style: normal;
      font-weight: 700;
      height: auto;
      line-height: 31px;
      position: absolute;
      text-align: left;
      white-space: nowrap;
      width: auto;
    }

    @media screen and (max-width: 833px) {
      .screen.landing-page {
        display: none;
      }

      .screen.ipad-pro-11u34-1 {
        display: none;
      }
    }

    @media screen and (min-width: 834px) and (max-width: 1439px) {
      .screen.iphone-14-u38-15-pro-max-1 {
        display: none;
      }

      .screen.landing-page {
        display: none;
      }
    }

    @media screen and (min-width: 1440px) {
      .screen.iphone-14-u38-15-pro-max-1 {
        display: none;
      }

      .screen.ipad-pro-11u34-1 {
        display: none;
      }
    }
  </style>
</head>

<body style="margin: 0;background: #ffffff;"><input type="hidden" id="anPageName" name="page" value="landing-page">
  <div class="container-center-horizontal">
    <div class="iphone-14-u38-15-pro-max-1 screen " data-id="361:524">
      <div class="frame-57-Q862b3" data-id="400:694"><img class="logo-fPnQqx logo" data-id="400:695"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/logo-3.svg"
          alt="logo"><img class="menu-fPnQqx" data-id="400:696"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/menu.svg"
          alt="Menu"></div>
      <div class="hero-section-Q862b3" data-id="400:732">
        <div class="hero-content-cGNgEt hero-content" data-id="400:733">
          <h1 class="title-B0kOda roboto-extra-bold-wheatfield-48px" data-id="I400:733;234:344">Experience Colours of
            Africa</h1>
        </div>
      </div><img class="rectangle-3-Q862b3" data-id="400:734"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-3.gif"
        alt="Rectangle 3">
      <div class="frame-39-Q862b3" data-id="400:779">
        <div class="frame-14-mJWLbj" data-id="400:780">
          <h3 class="travel-the-world-h4HxFZ h3" data-id="400:781">Travel the world</h3>
          <p class="inspiring-tanzania-safari-journeys-await" data-id="400:782">Inspiring Tanzania Safari Journeys Await
          </p>
        </div>
        <div class="frame-38-mJWLbj" data-id="400:783">
          <article class="desitanation-card" data-id="400:784"><img class="rectangle-69" data-id="I400:784;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I400:784;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I400:784;255:464">Zanzibar beaches</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I400:784;255:465">Discover the pristine white sands and
                turquoise waters of Zanzibar&#39;s world-famous beaches.</p>
              <div class="button-l7tlpl button" data-id="I400:784;255:466">
                <div class="button-text-rIWHy1 button-text paragraph-bold" data-id="I400:784;255:466;221:298">Learn more
                </div><img class="vector-rIWHy1 vector" data-id="I400:784;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-18.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
          <article class="desitanation-card" data-id="400:785"><img class="rectangle-69" data-id="I400:785;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69-1@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I400:785;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I400:785;255:464">Mount Kilimanjaro</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I400:785;255:465">Conquer the Roof of Africa, experience
                the awe-inspiring beauty and challenge of Mount Kilimanjaro, the highest peak in Africa.</p>
              <div class="button-BPiYe1 button" data-id="I400:785;255:466">
                <div class="button-text-KmHG2f button-text paragraph-bold" data-id="I400:785;255:466;221:298">Learn more
                </div><img class="vector-KmHG2f vector" data-id="I400:785;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-18.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
          <article class="desitanation-card" data-id="400:786"><img class="rectangle-69" data-id="I400:786;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69-2@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I400:786;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I400:786;255:464">Safari Adventures</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I400:786;255:465">Dive into the heart of Tanzania&#39;s
                stunning landscapes with our expertly guided safari tours. Witness the Great Migration, and explore the
                lush Ngorongoro Crater.</p>
              <div class="button-cfgSuS button" data-id="I400:786;255:466">
                <div class="button-text-QSnxb9 button-text paragraph-bold" data-id="I400:786;255:466;221:298">Learn more
                </div><img class="vector-QSnxb9 vector" data-id="I400:786;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-18.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="rectangle-40-Q862b3" data-id="400:735"></div>
      <div class="hero-section-content-Q862b3" data-id="400:736">
        <div class="hero-content-Ocvp5I hero-content" data-id="400:737">
          <div class="experience-colours-of-africa-Lu0eWK roboto-extra-bold-wheatfield-48px" data-id="I400:737;234:344">
            Experience Colours of Africa</div>
        </div>
      </div>
      <div class="booking-form-responsive-Q862b3" data-id="400:738">
        <div class="frame-54-EiMxqM" data-id="I400:738;398:775">
          <div class="destination-8tUh01 paragraph" data-id="I400:738;398:767">Destination</div>
        </div>
        <div class="frame-55-EiMxqM" data-id="I400:738;398:776">
          <div class="duration paragraph" data-id="I400:738;398:769">Duration</div>
        </div>
        <div class="frame-56-EiMxqM" data-id="I400:738;398:777">
          <div class="duration paragraph" data-id="I400:738;398:778">Duration</div>
        </div>
        <div class="button-EiMxqM button" data-id="I400:738;398:772">
          <div class="button-text-7zHAhn button-text paragraph-bold" data-id="I400:738;398:772;392:589">Search Trip
          </div><img class="vector-7zHAhn vector" data-id="I400:738;398:772;392:590"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-15.svg"
            alt="Vector">
        </div>
      </div>
      <div class="frame-37-Q862b3" data-id="400:752">
        <p class="inspiring-tanzania-safari-journeys-await-JL1z5x inspiring-tanzania-safari-journeys-await"
          data-id="400:753">Inspiring Tanzania Safari Journeys Await</p>
        <div class="frame-36-JL1z5x" data-id="400:754">
          <article class="features-card-2zMiDI features-card" data-id="400:755">
            <div class="frame-4" data-id="I400:755;335:791">
              <h4 class="customer-centric h4" data-id="I400:755;335:792">Customer Centric</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-normal-green-kelp-16px"
                data-id="I400:755;335:793">We are a customer-focused travel agency.</p>
            </div>
            <div class="features-icon" data-id="I400:755;337:406">
              <div class="ellipse-27" data-id="I400:755;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card-AUvvx2 features-card" data-id="400:756">
            <div class="frame-4" data-id="I400:756;335:791">
              <h4 class="customer-centric h4" data-id="I400:756;335:792">Personalized</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I400:756;335:793">Tailored itineraries suitable for you.</p>
            </div>
            <div class="features-icon" data-id="I400:756;337:406">
              <div class="ellipse-27" data-id="I400:756;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card-w5LvSw features-card" data-id="400:757">
            <div class="frame-4" data-id="I400:757;335:791">
              <h4 class="customer-centric h4" data-id="I400:757;335:792">Trusted</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I400:757;335:793">4.3 stars from 500+ Google reviews.</p>
            </div>
            <div class="features-icon" data-id="I400:757;337:406">
              <div class="ellipse-27" data-id="I400:757;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card-zcz6Xk features-card" data-id="400:758">
            <div class="frame-4" data-id="I400:758;335:791">
              <h4 class="customer-centric h4" data-id="I400:758;335:792">Experienced</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I400:758;335:793">Expertise in local culture and attractions.</p>
            </div>
            <div class="features-icon" data-id="I400:758;337:406">
              <div class="ellipse-27" data-id="I400:758;337:406;336:799"></div>
            </div>
          </article>
        </div>
      </div>
      <div class="about-us-section-responsive-Q862b3" data-id="400:808">
        <div class="frame-41-7RZBjM" data-id="400:809">
          <div class="at-camelleon-safaris-pYxcE6 roboto-extra-bold-wheatfield-20px" data-id="400:810">At camelleon
            safaris</div>
          <p class="your-partner-to-seam-pYxcE6 roboto-black-white-42px" data-id="400:811">Your Partner to Seamless
            Safari Experiences</p>
          <p class="join-us-at-camel-leo-pYxcE6 roboto-normal-white-18px" data-id="400:812">Join us at Camel Leon
            Safaris and let us guide you through the breathtaking wonders of Tanzania. Discover the magic of adapting to
            the wild and create memories that will last a lifetime.</p>
          <div class="frame-40-pYxcE6" data-id="400:813">
            <div class="x100-7NxGow roboto-black-white-26px" data-id="400:814">100+</div>
            <div class="x500-7NxGow x500 roboto-black-white-26px" data-id="400:815">500+</div>
            <div class="x50-7NxGow roboto-black-white-26px" data-id="400:816">50+</div>
            <div class="x5-7NxGow roboto-black-white-26px" data-id="400:817">5+</div>
          </div>
          <div class="button-pYxcE6 button" data-id="400:818">
            <div class="button-text-BFEVo6 button-text paragraph-bold" data-id="I400:818;221:298">learn more</div><img
              class="vector-BFEVo6 vector" data-id="I400:818;221:302"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-16.svg"
              alt="Vector">
          </div>
        </div>
        <div class="about-us_photo-7RZBjM" data-id="400:819"><img class="untitled-1-4-h785bJ" data-id="400:820"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/untitled-1-4-1.png') }}"
            alt="Untitled-1 4"></div>
      </div>
      <div class="safari-pakages-responsive-Q862b3" data-id="411:1739">
        <div class="frame-66-tGMCYw" data-id="411:1738">
          <div class="our-popular-packages-sTaxKg" data-id="411:1736">Our Popular Packages</div>
          <p class="east-african-safaris-sTaxKg" data-id="411:1737">East African Safaris Best <br>Holiday Packages</p>
        </div>
        <div class="safari-card" data-id="411:1645">
          <div class="rectangle-7" data-id="I411:1645;405:830"></div>
          <div class="frame-59" data-id="I411:1645;410:971">
            <div class="frame-62" data-id="I411:1645;410:974">
              <div class="x10-days paragraph" data-id="I411:1645;405:834">10 Days</div>
              <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1645;405:831">Comfort&nbsp;&nbsp;Safari and
                Beach Vacation</h3>
            </div><img class="line-15" data-id="I411:1645;406:846"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/line-15-6.svg"
              alt="Line 15">
            <div class="frame-60" data-id="I411:1645;410:972">
              <div class="frame-58" data-id="I411:1645;410:970">
                <div class="x3900 paragraph" data-id="I411:1645;410:964">$3900</div>
                <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1645;405:836">$3300</div><img
                  class="line-16" data-id="I411:1645;410:966"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                  alt="Line 16">
              </div>
              <div class="button-9GIjrF button" data-id="I411:1645;405:837">
                <div class="button-text-Sxwwbg button-text paragraph-bold" data-id="I411:1645;405:837;221:314">View More
                </div><img class="vector-Sxwwbg vector" data-id="I411:1645;405:837;221:315"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-17.svg"
                  alt="Vector">
              </div>
            </div>
          </div>
        </div>
        <div class="safari-card" data-id="411:1646">
          <div class="rectangle-7" data-id="I411:1646;405:830"></div>
          <div class="frame-59" data-id="I411:1646;410:971">
            <div class="frame-62" data-id="I411:1646;410:974">
              <div class="x10-days paragraph" data-id="I411:1646;405:834">10 Days</div>
              <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1646;405:831">Comfort&nbsp;&nbsp;Safari and
                Beach Vacation</h3>
            </div><img class="line-15" data-id="I411:1646;406:846"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/line-15-6.svg"
              alt="Line 15">
            <div class="frame-60" data-id="I411:1646;410:972">
              <div class="frame-58" data-id="I411:1646;410:970">
                <div class="x3900 paragraph" data-id="I411:1646;410:964">$3900</div>
                <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1646;405:836">$3300</div><img
                  class="line-16" data-id="I411:1646;410:966"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                  alt="Line 16">
              </div>
              <div class="button-v0mafR button" data-id="I411:1646;405:837">
                <div class="button-text-b8SIOW button-text paragraph-bold" data-id="I411:1646;405:837;221:314">View More
                </div><img class="vector-b8SIOW vector" data-id="I411:1646;405:837;221:315"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-17.svg"
                  alt="Vector">
              </div>
            </div>
          </div>
        </div>
        <div class="safari-card" data-id="411:1647">
          <div class="rectangle-7" data-id="I411:1647;405:830"></div>
          <div class="frame-59" data-id="I411:1647;410:971">
            <div class="frame-62" data-id="I411:1647;410:974">
              <div class="x10-days paragraph" data-id="I411:1647;405:834">10 Days</div>
              <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1647;405:831">Comfort&nbsp;&nbsp;Safari and
                Beach Vacation</h3>
            </div><img class="line-15" data-id="I411:1647;406:846"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/line-15-6.svg"
              alt="Line 15">
            <div class="frame-60" data-id="I411:1647;410:972">
              <div class="frame-58" data-id="I411:1647;410:970">
                <div class="x3900 paragraph" data-id="I411:1647;410:964">$3900</div>
                <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1647;405:836">$3300</div><img
                  class="line-16" data-id="I411:1647;410:966"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                  alt="Line 16">
              </div>
              <div class="button-snzWIH button" data-id="I411:1647;405:837">
                <div class="button-text-wLzOs6 button-text paragraph-bold" data-id="I411:1647;405:837;221:314">View More
                </div><img class="vector-wLzOs6 vector" data-id="I411:1647;405:837;221:315"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-17.svg"
                  alt="Vector">
              </div>
            </div>
          </div>
        </div>
        <div class="safari-card" data-id="411:1649">
          <div class="rectangle-7" data-id="I411:1649;405:830"></div>
          <div class="frame-59" data-id="I411:1649;410:971">
            <div class="frame-62" data-id="I411:1649;410:974">
              <div class="x10-days paragraph" data-id="I411:1649;405:834">10 Days</div>
              <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1649;405:831">Comfort&nbsp;&nbsp;Safari and
                Beach Vacation</h3>
            </div><img class="line-15" data-id="I411:1649;406:846"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/line-15-6.svg"
              alt="Line 15">
            <div class="frame-60" data-id="I411:1649;410:972">
              <div class="frame-58" data-id="I411:1649;410:970">
                <div class="x3900 paragraph" data-id="I411:1649;410:964">$3900</div>
                <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1649;405:836">$3300</div><img
                  class="line-16" data-id="I411:1649;410:966"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                  alt="Line 16">
              </div>
              <div class="button-XIqBqf button" data-id="I411:1649;405:837">
                <div class="button-text-wQn2W4 button-text paragraph-bold" data-id="I411:1649;405:837;221:314">View More
                </div><img class="vector-wQn2W4 vector" data-id="I411:1649;405:837;221:315"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-17.svg"
                  alt="Vector">
              </div>
            </div>
          </div>
        </div>
        <div class="safari-card" data-id="411:1648">
          <div class="rectangle-7" data-id="I411:1648;405:830"></div>
          <div class="frame-59" data-id="I411:1648;410:971">
            <div class="frame-62" data-id="I411:1648;410:974">
              <div class="x10-days paragraph" data-id="I411:1648;405:834">10 Days</div>
              <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1648;405:831">Comfort&nbsp;&nbsp;Safari and
                Beach Vacation</h3>
            </div><img class="line-15" data-id="I411:1648;406:846"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/line-15-6.svg"
              alt="Line 15">
            <div class="frame-60" data-id="I411:1648;410:972">
              <div class="frame-58" data-id="I411:1648;410:970">
                <div class="x3900 paragraph" data-id="I411:1648;410:964">$3900</div>
                <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1648;405:836">$3300</div><img
                  class="line-16" data-id="I411:1648;410:966"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                  alt="Line 16">
              </div>
              <div class="button-SJcAiz button" data-id="I411:1648;405:837">
                <div class="button-text-4ZzQdx button-text paragraph-bold" data-id="I411:1648;405:837;221:314">View More
                </div><img class="vector-4ZzQdx vector" data-id="I411:1648;405:837;221:315"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-17.svg"
                  alt="Vector">
              </div>
            </div>
          </div>
        </div>
        <div class="safari-card" data-id="411:1650">
          <div class="rectangle-7" data-id="I411:1650;405:830"></div>
          <div class="frame-59" data-id="I411:1650;410:971">
            <div class="frame-62" data-id="I411:1650;410:974">
              <div class="x10-days paragraph" data-id="I411:1650;405:834">10 Days</div>
              <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1650;405:831">Comfort&nbsp;&nbsp;Safari and
                Beach Vacation</h3>
            </div><img class="line-15" data-id="I411:1650;406:846"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/line-15-6.svg"
              alt="Line 15">
            <div class="frame-60" data-id="I411:1650;410:972">
              <div class="frame-58" data-id="I411:1650;410:970">
                <div class="x3900 paragraph" data-id="I411:1650;410:964">$3900</div>
                <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1650;405:836">$3300</div><img
                  class="line-16" data-id="I411:1650;410:966"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                  alt="Line 16">
              </div>
              <div class="button-IX9K4l button" data-id="I411:1650;405:837">
                <div class="button-text-O2BBBW button-text paragraph-bold" data-id="I411:1650;405:837;221:314">View More
                </div><img class="vector-O2BBBW vector" data-id="I411:1650;405:837;221:315"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-17.svg"
                  alt="Vector">
              </div>
            </div>
          </div>
        </div>
        <div class="button-tGMCYw button" data-id="411:1746">
          <div class="button-text-cO5GKX button-text paragraph-bold" data-id="I411:1746;250:304">View all Tours</div>
          <img class="vector-cO5GKX vector" data-id="I411:1746;250:305"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/vector-23.svg"
            alt="Vector">
        </div>
      </div>
      <div class="frame-64-Q862b3" data-id="411:1761"><img class="images-1-IZL8vo" data-id="411:1762"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/images-1@2x.png') }}"
          alt="images 1">
        <div class="camelleon-ranked-3-IZL8vo" data-id="411:1763">Camelleon ranked #3</div>
        <div class="group-10-IZL8vo" data-id="411:1764">
          <div class="x500-iysV9w x500 roboto-semi-bold-black-18px" data-id="411:1765">500+</div>
          <div class="group-9-iysV9w" data-id="411:1766">
            <div class="ellipse-1-iTSC82" data-id="411:1767"></div>
            <div class="ellipse-2-iTSC82" data-id="411:1768"></div>
            <div class="ellipse-3-iTSC82" data-id="411:1769"></div>
            <div class="ellipse-4-iTSC82" data-id="411:1770"></div>
            <div class="ellipse-5-iTSC82" data-id="411:1771"></div>
          </div>
        </div>
      </div>
      <div class="frame-67-Q862b3" data-id="419:3638">
        <div class="rectangle-29-DeJo4E" data-id="419:3639"></div>
        <div class="rectangle-30-DeJo4E" data-id="419:3640"></div>
        <div class="rectangle-31-DeJo4E" data-id="419:3641"></div><img class="mask-group-DeJo4E mask-group"
          data-id="419:3642" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/mask-group@2x.png') }}"
          alt="Mask group"><img class="mask-group-HuaJDI mask-group" data-id="419:3645"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/mask-group-1@2x.png') }}"
          alt="Mask group"><img class="mask-group-XAAZ7z mask-group" data-id="419:3648"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/mask-group-2@2x.png') }}"
          alt="Mask group">
        <div class="vic-DeJo4E vic roboto-semi-bold-black-26px" data-id="419:3651">Vic</div>
        <div class="vic-HuaJDI vic roboto-semi-bold-black-26px" data-id="419:3652">Vic</div>
        <div class="vic-XAAZ7z vic roboto-semi-bold-black-26px" data-id="419:3653">Vic</div>
        <div class="jan2024-DeJo4E jan2024 roboto-semi-bold-boulder-18px" data-id="419:3654">Jan/2024</div>
        <div class="jan2024-HuaJDI jan2024 roboto-semi-bold-boulder-18px" data-id="419:3655">Jan/2024</div>
        <div class="jan2024-XAAZ7z jan2024 roboto-semi-bold-boulder-18px" data-id="419:3656">Jan/2024</div>
        <p class="the-team-led-by-stan-DeJo4E the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="419:3657">The
          team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our
          amazing <br>experience. Their professionalism and</p>
        <p class="the-team-led-by-stan-HuaJDI the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="419:3658">The
          team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our
          amazing <br>experience. Their professionalism and</p>
        <p class="the-team-led-by-stan-XAAZ7z the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="419:3659">The
          team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our
          amazing <br>experience. Their professionalism and</p>
        <h3 class="amazing-experience-DeJo4E h3" data-id="419:3660">Amazing experience!</h3>
        <h3 class="amaizing-experience-DeJo4E amaizing-experience h3" data-id="419:3661">Amaizing experience!</h3>
        <h3 class="amaizing-experience-HuaJDI amaizing-experience h3" data-id="419:3662">Amaizing experience!</h3>
      </div><img class="rectangle-32-Q862b3" data-id="419:3663"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-32.png') }}"
        alt="Rectangle 32">
      <div class="footer-section-Q862b3" data-id="419:3664">
        <div class="footer-content-QraANb" data-id="I419:3664;416:3522">
          <div class="frame-43-ezHY5Z" data-id="I419:3664;416:3523">
            <div class="frame-42-xrAFsv" data-id="I419:3664;416:3524"><img class="logo-uxDONl logo"
                data-id="I419:3664;416:3525"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c58737ddf86de7e8d5d2df/img/logo-2.svg"
                alt="logo">
              <p class="camel-leon-safaris-l-uxDONl paragraph" data-id="I419:3664;416:3526">Camel Leon Safaris Ltd. was
                born out of a love for the idea of adapting to various environments, mirroring the chameleon&#39;s
                ability. Our founders wanted to share this experience with people in the wilds of Africa, highlighting
                the beauty of nature when one immerses and adapts to it.</p>
            </div>
          </div>
          <div class="frame-44-ezHY5Z" data-id="I419:3664;416:3527">
            <div class="travel-tips-1jykJJ roboto-black-black-16px" data-id="I419:3664;416:3528">Travel Tips</div><a
              href="https://serengeticlarity.com/tanzania-entry-requirements/" target="_blank">
              <div class="entry-requirements-1jykJJ paragraph" data-id="I419:3664;416:3529">Entry Requirements</div>
            </a><a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/" target="_blank">
              <div class="tanzania-safari-planning-guide-1jykJJ paragraph" data-id="I419:3664;416:3530">Tanzania Safari
                Planning Guide</div>
            </a><a href="https://serengeticlarity.com/best-time-to-visit-tanzania/" target="_blank">
              <p class="best-time-to-visit-tanzania-1jykJJ paragraph" data-id="I419:3664;416:3531">Best time to visit
                Tanzania</p>
            </a><a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/" target="_blank">
              <div class="kilimanjaro-planning-guide-1jykJJ paragraph" data-id="I419:3664;416:3532">Kilimanjaro Planning
                Guide</div>
            </a><a href="https://serengeticlarity.com/drones-photography-guidelines/" target="_blank">
              <div class="drones-photography-guide-1jykJJ paragraph" data-id="I419:3664;416:3533"> Drones &amp;
                Photography Guide</div>
            </a>
            <div class="tipping-guide-1jykJJ paragraph" data-id="I419:3664;416:3534">Tipping Guide</div>
          </div>
          <div class="frame-45-ezHY5Z" data-id="I419:3664;416:3535">
            <div class="camelleon-safaris-Emc986 roboto-black-black-16px" data-id="I419:3664;416:3536">Camelleon Safaris
            </div>
            <div class="about-us-Emc986 paragraph" data-id="I419:3664;416:3537">About US</div>
            <div class="terms-and-cionditions-Emc986 paragraph" data-id="I419:3664;416:3538">Terms And Cionditions</div>
            <div class="booking-process-Emc986 paragraph" data-id="I419:3664;416:3539">Booking Process</div>
            <div class="payment-details-Emc986 paragraph" data-id="I419:3664;416:3540">Payment Details</div>
            <div class="privacy-policy-Emc986 paragraph" data-id="I419:3664;416:3541">Privacy Policy</div>
          </div>
          <div class="frame-46-ezHY5Z" data-id="I419:3664;416:3542">
            <div class="contact-information-5iokWf roboto-black-black-16px" data-id="I419:3664;416:3543">Contact
              Information</div>
            <div class="sales-safari-expert-5iokWf paragraph" data-id="I419:3664;416:3544">Sales &amp; Safari Expert
            </div>
            <div class="x25568-655-5755-5iokWf roboto-medium-gray-18px" data-id="I419:3664;416:3545">+25568 655 5755
            </div>
            <div class="infocamelleonsafariscom-5iokWf paragraph" data-id="I419:3664;416:3546">info@camelleonsafaris.com
            </div>
          </div>
        </div>
      </div>
      <div class="rectangle-33-Q862b3" data-id="419:3722"></div>
    </div>
  </div>
  <div class="container-center-horizontal">
    <div class="landing-page screen " data-id="9:3"><img class="rectangle-3-0MUxxh" data-id="14:3"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-3.gif"
        alt="Rectangle 3">
      <div class="rectangle-40-0MUxxh" data-id="156:3"></div>
      <div class="frame-37-0MUxxh" data-id="337:466">
        <h2 class="inspiring-tanzania-safari-journeys-await-z870ex inspiring-tanzania-safari-journeys-await h2"
          data-id="70:282">Inspiring Tanzania Safari Journeys Await</h2>
        <div class="frame-36-z870ex" data-id="337:445">
          <article class="features-card-hOXDFM features-card" data-id="337:421">
            <div class="frame-4" data-id="I337:421;335:791">
              <h4 class="customer-centric h4" data-id="I337:421;335:792">Customer Centric</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-normal-green-kelp-16px"
                data-id="I337:421;335:793">We are a customer-focused travel agency.</p>
            </div>
            <div class="features-icon" data-id="I337:421;337:406">
              <div class="ellipse-27" data-id="I337:421;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card-HkFXWx features-card" data-id="337:427">
            <div class="frame-4" data-id="I337:427;335:791">
              <h4 class="customer-centric h4" data-id="I337:427;335:792">Personalized</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I337:427;335:793">Tailored itineraries suitable for you.</p>
            </div>
            <div class="features-icon" data-id="I337:427;337:406">
              <div class="ellipse-27" data-id="I337:427;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card-BMXo83 features-card" data-id="337:433">
            <div class="frame-4" data-id="I337:433;335:791">
              <h4 class="customer-centric h4" data-id="I337:433;335:792">Trusted</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I337:433;335:793">4.3 stars from 500+ Google reviews.</p>
            </div>
            <div class="features-icon" data-id="I337:433;337:406">
              <div class="ellipse-27" data-id="I337:433;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card-YFehXD features-card" data-id="337:439">
            <div class="frame-4" data-id="I337:439;335:791">
              <h4 class="customer-centric h4" data-id="I337:439;335:792">Experienced</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I337:439;335:793">Expertise in local culture and attractions.</p>
            </div>
            <div class="features-icon" data-id="I337:439;337:406">
              <div class="ellipse-27" data-id="I337:439;337:406;336:799"></div>
            </div>
          </article>
        </div>
      </div><img class="rectangle-32-0MUxxh" data-id="94:442"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-32.png') }}"
        alt="Rectangle 32">
      <div class="rectangle-33-0MUxxh" data-id="94:443"></div>
      <div class="frame-63-0MUxxh" data-id="411:1571"><img class="images-1-j1iU3L" data-id="94:390"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/images-1@2x.png') }}"
          alt="images 1">
        <h2 class="camelleon-ranked-3-j1iU3L h2" data-id="94:391">Camelleon ranked #3</h2>
        <div class="group-10-j1iU3L" data-id="94:400">
          <div class="x500-BwLK2i x500 roboto-semi-bold-black-18px" data-id="94:399">500+</div>
          <div class="group-9-BwLK2i group-9" data-id="94:398">
            <div class="ellipse-1-mg3zry ellipse-1" data-id="94:393"></div>
            <div class="ellipse-2-mg3zry ellipse-2" data-id="94:394"></div>
            <div class="ellipse-3-mg3zry ellipse-3" data-id="94:395"></div>
            <div class="ellipse-4-mg3zry ellipse-4" data-id="94:396"></div>
            <div class="ellipse-5-mg3zry ellipse-5" data-id="94:397"></div>
          </div>
        </div>
      </div>
      <div class="rectangle-29-0MUxxh" data-id="94:389"></div>
      <div class="rectangle-30-0MUxxh" data-id="94:414"></div>
      <div class="rectangle-31-0MUxxh" data-id="94:428"></div>
      <div class="group-9-0MUxxh group-9" data-id="94:401">
        <div class="ellipse-1-LcemJb ellipse-1" data-id="94:402"></div>
        <div class="ellipse-2-LcemJb ellipse-2" data-id="94:403"></div>
        <div class="ellipse-3-LcemJb ellipse-3" data-id="94:404"></div>
        <div class="ellipse-4-LcemJb ellipse-4" data-id="94:405"></div>
        <div class="ellipse-5-LcemJb ellipse-5" data-id="94:406"></div>
      </div>
      <div class="group-11-0MUxxh" data-id="94:415">
        <div class="ellipse-1-QxYU8j ellipse-1" data-id="94:416"></div>
        <div class="ellipse-2-QxYU8j ellipse-2" data-id="94:417"></div>
        <div class="ellipse-3-QxYU8j ellipse-3" data-id="94:418"></div>
        <div class="ellipse-4-QxYU8j ellipse-4" data-id="94:419"></div>
        <div class="ellipse-5-QxYU8j ellipse-5" data-id="94:420"></div>
      </div>
      <div class="group-12-0MUxxh" data-id="94:429">
        <div class="ellipse-1-6hDjCC ellipse-1" data-id="94:430"></div>
        <div class="ellipse-2-6hDjCC ellipse-2" data-id="94:431"></div>
        <div class="ellipse-3-6hDjCC ellipse-3" data-id="94:432"></div>
        <div class="ellipse-4-6hDjCC ellipse-4" data-id="94:433"></div>
        <div class="ellipse-5-6hDjCC ellipse-5" data-id="94:434"></div>
      </div><img class="mask-group-0MUxxh mask-group" data-id="94:409"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/mask-group@2x.png') }}"
        alt="Mask group"><img class="mask-group-gwJAt7 mask-group" data-id="94:421"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/mask-group-1@2x.png') }}"
        alt="Mask group"><img class="mask-group-JZkvxC mask-group" data-id="94:435"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/mask-group-2@2x.png') }}"
        alt="Mask group">
      <div class="vic-0MUxxh vic roboto-semi-bold-black-26px" data-id="94:410">Vic</div>
      <div class="vic-gwJAt7 vic roboto-semi-bold-black-26px" data-id="94:424">Vic</div>
      <div class="vic-JZkvxC vic roboto-semi-bold-black-26px" data-id="94:438">Vic</div>
      <div class="jan2024-0MUxxh jan2024 roboto-semi-bold-boulder-18px" data-id="94:411">Jan/2024</div>
      <div class="jan2024-gwJAt7 jan2024 roboto-semi-bold-boulder-18px" data-id="94:425">Jan/2024</div>
      <div class="jan2024-JZkvxC jan2024 roboto-semi-bold-boulder-18px" data-id="94:439">Jan/2024</div>
      <p class="the-team-led-by-stan-0MUxxh the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="94:413">The
        team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our amazing
        <br>experience. Their professionalism and</p>
      <p class="the-team-led-by-stan-gwJAt7 the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="94:426">The
        team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our amazing
        <br>experience. Their professionalism and</p>
      <p class="the-team-led-by-stan-JZkvxC the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="94:440">The
        team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our amazing
        <br>experience. Their professionalism and</p>
      <h3 class="amazing-experience-0MUxxh h3" data-id="94:412">Amazing experience!</h3>
      <h3 class="amaizing-experience-0MUxxh amaizing-experience h3" data-id="94:427">Amaizing experience!</h3>
      <h3 class="amaizing-experience-gwJAt7 amaizing-experience h3" data-id="94:441">Amaizing experience!</h3>
      <div class="our-popular-packages-0MUxxh" data-id="126:267">Our Popular Packages</div>
      <h2 class="east-african-safaris-0MUxxh h2" data-id="126:268">East African Safaris Best <br>Holiday Packages</h2>
      <div class="rectangle-7-0MUxxh" data-id="126:270"></div>
      <div class="rectangle-8-0MUxxh" data-id="126:271"></div>
      <div class="rectangle-9-0MUxxh" data-id="126:272"></div>
      <p class="x3-days-authentic-hun-0MUxxh x3-days-authentic-hun roboto-black-green-kelp-18px" data-id="126:273">3
        Days Authentic Hunting Experience with the Hadzabe Tribe</p>
      <p class="x3-days-authentic-hun-gwJAt7 x3-days-authentic-hun roboto-black-green-kelp-18px" data-id="126:274">3
        Days Authentic Hunting Experience with the Hadzabe Tribe</p>
      <p class="x3-days-authentic-hun-JZkvxC x3-days-authentic-hun roboto-black-green-kelp-18px" data-id="126:275">3
        Days Authentic Hunting Experience with the Hadzabe Tribe</p><img class="rectangle-4-0MUxxh" data-id="126:276"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-4-2.png') }}"
        alt="Rectangle 4"><img class="rectangle-5-0MUxxh" data-id="126:277"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-5-2.png') }}"
        alt="Rectangle 5">
      <p class="join-us-for-an-extra-0MUxxh join-us-for-an-extra paragraph" data-id="126:278">Join us for an
        extraordinary 3-day adventure immersing you in the fascinating world of the Hadzabe tribe, one of
        Tanzania&#39;s…</p><img class="rectangle-6-0MUxxh" data-id="126:279"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-6.png') }}"
        alt="Rectangle 6">
      <p class="join-us-for-an-extra-gwJAt7 join-us-for-an-extra paragraph" data-id="126:280">Join us for an
        extraordinary 3-day adventure immersing you in the fascinating world of the Hadzabe tribe, one of
        Tanzania&#39;s…</p>
      <p class="join-us-for-an-extra-JZkvxC join-us-for-an-extra paragraph" data-id="126:281">Join us for an
        extraordinary 3-day adventure immersing you in the fascinating world of the Hadzabe tribe, one of
        Tanzania&#39;s…</p><img class="vector-0MUxxh" data-id="126:282"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector.svg"
        alt="Vector"><img class="vector-gwJAt7" data-id="126:283"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector.svg"
        alt="Vector"><img class="vector-JZkvxC" data-id="126:284"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector.svg"
        alt="Vector">
      <div class="x10-days-0MUxxh x10-days tagline" data-id="126:285">10 Days</div>
      <div class="x10-days-gwJAt7 x10-days tagline" data-id="126:286">10 Days</div>
      <div class="x10-days-JZkvxC x10-days tagline" data-id="126:287">10 Days</div>
      <div class="x2-7-people-0MUxxh x2-7-people tagline" data-id="126:288">2-7 People</div>
      <div class="x2-7-people-gwJAt7 x2-7-people tagline" data-id="126:289">2-7 People</div>
      <div class="x2-7-people-JZkvxC x2-7-people tagline" data-id="126:290">2-7 People</div><img class="vector-o9mxaa"
        data-id="126:291" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-3.svg"
        alt="Vector"><img class="vector-vQepBx" data-id="126:292"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-3.svg"
        alt="Vector"><img class="vector-h3ngGw" data-id="126:293"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-3.svg"
        alt="Vector">
      <h3 class="x3300-0MUxxh x3300 h3" data-id="126:294">$3300</h3>
      <h3 class="x1000-0MUxxh x1000 h3" data-id="126:295">$1000</h3>
      <h3 class="x2200-0MUxxh x2200 h3" data-id="126:296">$2200</h3>
      <div class="group-2-0MUxxh" data-id="126:297">
        <div class="rectangle-10-7KdOzf" data-id="126:298"></div>
        <div class="rectangle-11-7KdOzf" data-id="126:299"></div>
        <div class="rectangle-12-7KdOzf" data-id="126:300"></div>
        <p class="x3-days-authentic-hun-7KdOzf x3-days-authentic-hun roboto-black-green-kelp-18px" data-id="126:301">3
          Days Authentic Hunting Experience with the Hadzabe Tribe</p>
        <p class="x3-days-authentic-hun-qAuZ02 x3-days-authentic-hun roboto-black-green-kelp-18px" data-id="126:302">3
          Days Authentic Hunting Experience with the Hadzabe Tribe</p>
        <p class="x3-days-authentic-hun-6Z44ux x3-days-authentic-hun roboto-black-green-kelp-18px" data-id="126:303">3
          Days Authentic Hunting Experience with the Hadzabe Tribe</p><img class="rectangle-13-7KdOzf" data-id="126:304"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-13-2.png') }}"
          alt="Rectangle 13"><img class="rectangle-14-7KdOzf" data-id="126:305"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-14-2.png') }}"
          alt="Rectangle 14">
        <p class="join-us-for-an-extra-7KdOzf join-us-for-an-extra paragraph" data-id="126:306">Join us for an
          extraordinary 3-day adventure immersing you in the fascinating world of the Hadzabe tribe, one of
          Tanzania&#39;s…</p><img class="rectangle-15-7KdOzf" data-id="126:307"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-15-2.png') }}"
          alt="Rectangle 15">
        <p class="join-us-for-an-extra-qAuZ02 join-us-for-an-extra paragraph" data-id="126:308">Join us for an
          extraordinary 3-day adventure immersing you in the fascinating world of the Hadzabe tribe, one of
          Tanzania&#39;s…</p>
        <p class="join-us-for-an-extra-6Z44ux join-us-for-an-extra paragraph" data-id="126:309">Join us for an
          extraordinary 3-day adventure immersing you in the fascinating world of the Hadzabe tribe, one of
          Tanzania&#39;s…</p><img class="vector-7KdOzf" data-id="126:313"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-6.svg"
          alt="Vector"><img class="vector-qAuZ02" data-id="126:314"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-6.svg"
          alt="Vector"><img class="vector-6Z44ux" data-id="126:315"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-6.svg"
          alt="Vector">
        <div class="x10-days-7KdOzf x10-days tagline" data-id="126:316">10 Days</div>
        <div class="x10-days-qAuZ02 x10-days tagline" data-id="126:317">10 Days</div>
        <div class="x10-days-6Z44ux x10-days tagline" data-id="126:318">10 Days</div>
        <div class="x2-7-people-7KdOzf x2-7-people tagline" data-id="126:319">2-7 People</div>
        <div class="x2-7-people-qAuZ02 x2-7-people tagline" data-id="126:320">2-7 People</div>
        <div class="x2-7-people-6Z44ux x2-7-people tagline" data-id="126:321">2-7 People</div><img class="vector-qTRWmH"
          data-id="126:322" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-9.svg"
          alt="Vector"><img class="vector-KxDZv7" data-id="126:323"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-9.svg"
          alt="Vector"><img class="vector-3SXxxm" data-id="126:324"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-9.svg"
          alt="Vector">
        <h3 class="x3300-7KdOzf x3300 h3" data-id="126:325">$3300</h3>
        <h3 class="x1000-7KdOzf x1000 h3" data-id="126:326">$1000</h3>
        <h3 class="x2200-7KdOzf x2200 h3" data-id="126:327">$2200</h3>
      </div>
      <div class="hero-section-content-0MUxxh" data-id="254:411">
        <div class="hero-content-aoZlt7" data-id="240:371">
          <h1 class="title-KxyNQt h1" data-id="I240:371;234:344">Experience Colours of Africa</h1>
        </div>
      </div>
      <div class="frame-13-0MUxxh" data-id="261:328">
        <div class="booking-form-GAx4E1" data-id="240:398">
          <div class="frame-53-eIo6ja" data-id="I240:398;392:634">
            <div class="rectangle-24-WUOGxI" data-id="I240:398;240:389"></div>
            <div class="destination-WUOGxI paragraph" data-id="I240:398;335:421">Destination</div>
            <div class="rectangle-41-WUOGxI" data-id="I240:398;240:390"></div>
            <div class="duration-WUOGxI paragraph" data-id="I240:398;335:441">Duration</div>
            <div class="rectangle-42-WUOGxI" data-id="I240:398;240:391"></div>
            <div class="budget-WUOGxI paragraph" data-id="I240:398;335:449">Budget</div>
            <div class="button-WUOGxI button" data-id="I240:398;392:594">
              <div class="button-text paragraph-bold" data-id="I240:398;392:594;392:589">Search Trip</div><img
                class="vector-6XI1sd" data-id="I240:398;392:594;392:590"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-12.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="frame-39-0MUxxh" data-id="337:471">
        <div class="frame-14-fa5GQB" data-id="261:329">
          <h3 class="travel-the-world-l1DKA6 h3" data-id="47:171">Travel the world</h3>
          <h2 class="inspiring-tanzania-safari-journeys-await h2" data-id="337:472">Inspiring Tanzania Safari Journeys
            Await</h2>
        </div>
        <div class="frame-38-fa5GQB" data-id="337:469">
          <article class="desitanation-card" data-id="258:489"><img class="rectangle-69" data-id="I258:489;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I258:489;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I258:489;255:464">Zanzibar beaches</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I258:489;255:465">Discover the pristine white sands and
                turquoise waters of Zanzibar&#39;s world-famous beaches.</p>
              <div class="button-Q9TKjl button" data-id="I258:489;255:466">
                <div class="button-text-PO9aWi button-text paragraph-bold" data-id="I258:489;255:466;221:298">Learn more
                </div><img class="vector-PO9aWi" data-id="I258:489;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-13.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
          <article class="desitanation-card" data-id="258:505"><img class="rectangle-69" data-id="I258:505;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69-1@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I258:505;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I258:505;255:464">Mount Kilimanjaro</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I258:505;255:465">Conquer the Roof of Africa, experience
                the awe-inspiring beauty and challenge of Mount Kilimanjaro, the highest peak in Africa.</p>
              <div class="button-MXKC7C button" data-id="I258:505;255:466">
                <div class="button-text-7PCGO7 button-text paragraph-bold" data-id="I258:505;255:466;221:298">Learn more
                </div><img class="vector-7PCGO7" data-id="I258:505;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-13.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
          <article class="desitanation-card" data-id="258:513"><img class="rectangle-69" data-id="I258:513;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69-2@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I258:513;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I258:513;255:464">Safari Adventures</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I258:513;255:465">Dive into the heart of Tanzania&#39;s
                stunning landscapes with our expertly guided safari tours. Witness the Great Migration, and explore the
                lush Ngorongoro Crater.</p>
              <div class="button-x1sDt2 button" data-id="I258:513;255:466">
                <div class="button-text-qTQgdx button-text paragraph-bold" data-id="I258:513;255:466;221:298">Learn more
                </div><img class="vector-qTQgdx" data-id="I258:513;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-13.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
        </div>
      </div>
      <header class="header-0MUxxh" data-id="248:589">
        <div class="header-navigation-container-TL0pTC" data-id="I248:589;219:49"><img class="logo"
            data-id="I248:589;219:16"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/logo.svg"
            alt="logo">
          <div class="navigation-Qlx5vr" data-id="I248:589;219:15">
            <article class="menu-item-WE261m menu-item" data-id="I248:589;218:17">
              <div class="menu-AiaLPB menu paragraph" data-id="I248:589;218:17;218:2">Home</div>
            </article>
            <article class="menu-item-NNgFpw menu-item" data-id="I248:589;218:19">
              <div class="menu-ObZa2e menu paragraph" data-id="I248:589;218:19;242:459">Tours</div><img
                class="vector-ObZa2e" data-id="I248:589;218:19;242:460"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-45.svg"
                alt="Vector">
            </article>
            <article class="menu-item-fqls2x menu-item" data-id="I248:589;218:21">
              <div class="menu-hhsWBw menu paragraph" data-id="I248:589;218:21;242:459">Mount Trekking</div><img
                class="vector-hhsWBw" data-id="I248:589;218:21;242:460"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-45.svg"
                alt="Vector">
            </article>
            <article class="menu-item-nsPk3W menu-item" data-id="I248:589;218:23">
              <div class="menu-2vxSaU menu paragraph" data-id="I248:589;218:23;218:2">About Us</div>
            </article>
            <article class="menu-item-PtjLTf menu-item" data-id="I248:589;219:8">
              <div class="menu-PT71o0 menu paragraph" data-id="I248:589;219:8;218:2">Contant Us</div>
            </article>
            <article class="menu-item-RrAug2 menu-item" data-id="I248:589;219:10">
              <div class="menu-cdhCoo menu paragraph" data-id="I248:589;219:10;218:12">Book&nbsp;&nbsp;a Tour</div>
            </article>
          </div>
        </div>
      </header>
      <div class="about-us-section-responsive-0MUxxh" data-id="400:677">
        <div class="frame-41-7Qk4Of" data-id="400:663">
          <div class="at-camelleon-safaris-m4QdHa roboto-extra-bold-wheatfield-20px" data-id="400:664">At camelleon
            safaris</div>
          <p class="your-partner-to-seam-m4QdHa roboto-black-white-42px" data-id="400:665">Your Partner to Seamless
            Safari Experiences</p>
          <p class="join-us-at-camel-leo-m4QdHa roboto-normal-white-18px" data-id="400:666">Join us at Camel Leon
            Safaris and let us guide you through the breathtaking wonders of Tanzania. Discover the magic of adapting to
            the wild and create memories that will last a lifetime.</p>
          <div class="frame-40-m4QdHa" data-id="400:667">
            <div class="x100-NrJRIW roboto-black-white-26px" data-id="400:668">100+</div>
            <div class="x500-NrJRIW x500 roboto-black-white-26px" data-id="400:669">500+</div>
            <div class="x50-NrJRIW roboto-black-white-26px" data-id="400:670">50+</div>
            <div class="x5-NrJRIW roboto-black-white-26px" data-id="400:671">5+</div>
          </div>
          <div class="button-m4QdHa button" data-id="400:672">
            <div class="button-text-bc4vs1 button-text paragraph-bold" data-id="I400:672;221:298">learn more</div><img
              class="vector-bc4vs1" data-id="I400:672;221:302"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/vector-18.svg"
              alt="Vector">
          </div>
        </div>
        <div class="about-us_photo-7Qk4Of" data-id="400:673"><img class="untitled-1-4-x3MDIx" data-id="400:674"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/untitled-1-4.png') }}"
            alt="Untitled-1 4"></div>
      </div>
      <div class="footer-section-0MUxxh" data-id="407:847">
        <div class="footer-content-MIDAxP" data-id="407:848">
          <div class="frame-43-oNLHTK" data-id="407:849">
            <div class="frame-42-MLEaSj" data-id="407:850"><img class="logo" data-id="407:851"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/logo-1.svg"
                alt="logo">
              <p class="camel-leon-safaris-l-m4wVrL paragraph" data-id="407:852">Camel Leon Safaris Ltd. was born out of
                a love for the idea of adapting to various environments, mirroring the chameleon&#39;s ability. Our
                founders wanted to share this experience with people in the wilds of Africa, highlighting the beauty of
                nature when one immerses and adapts to it.</p>
            </div>
          </div>
          <div class="frame-44-oNLHTK" data-id="407:854">
            <div class="travel-tips-xtLN0G roboto-black-black-16px" data-id="407:855">Travel Tips</div><a
              href="https://serengeticlarity.com/tanzania-entry-requirements/" target="_blank">
              <div class="entry-requirements-xtLN0G paragraph" data-id="407:856">Entry Requirements</div>
            </a><a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/" target="_blank">
              <div class="tanzania-safari-planning-guide-xtLN0G paragraph" data-id="407:857">Tanzania Safari Planning
                Guide</div>
            </a><a href="https://serengeticlarity.com/best-time-to-visit-tanzania/" target="_blank">
              <p class="best-time-to-visit-tanzania-xtLN0G paragraph" data-id="407:858">Best time to visit Tanzania</p>
            </a><a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/" target="_blank">
              <div class="kilimanjaro-planning-guide-xtLN0G paragraph" data-id="407:859">Kilimanjaro Planning Guide
              </div>
            </a><a href="https://serengeticlarity.com/drones-photography-guidelines/" target="_blank">
              <div class="drones-photography-guide-xtLN0G paragraph" data-id="407:860"> Drones &amp; Photography Guide
              </div>
            </a>
            <div class="tipping-guide-xtLN0G paragraph" data-id="407:861">Tipping Guide</div>
          </div>
          <div class="frame-45-oNLHTK" data-id="407:862">
            <div class="camelleon-safaris-DiZAVS roboto-black-black-16px" data-id="407:863">Camelleon Safaris</div>
            <div class="about-us-DiZAVS paragraph" data-id="407:864">About US</div>
            <div class="terms-and-cionditions-DiZAVS paragraph" data-id="407:865">Terms And Cionditions</div>
            <div class="booking-process-DiZAVS paragraph" data-id="407:866">Booking Process</div>
            <div class="payment-details-DiZAVS paragraph" data-id="407:867">Payment Details</div>
            <div class="privacy-policy-DiZAVS paragraph" data-id="407:868">Privacy Policy</div>
          </div>
          <div class="frame-46-oNLHTK" data-id="407:869">
            <div class="contact-information-XCinXh roboto-black-black-16px" data-id="407:870">Contact Information</div>
            <div class="sales-safari-expert-XCinXh paragraph" data-id="407:871">Sales &amp; Safari Expert</div>
            <div class="x25568-655-5755-XCinXh roboto-medium-gray-18px" data-id="407:872">+25568 655 5755</div>
            <div class="infocamelleonsafariscom-XCinXh paragraph" data-id="407:873">info@camelleonsafaris.com</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-center-horizontal">
    <div class="ipad-pro-11u34-1 screen " data-id="361:523">
      <div class="frame-57-LmQtYc" data-id="400:693"><img class="logo-ebTjAf logo" data-id="390:531"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/logo-1.svg"
          alt="logo"><img class="menu-ebTjAf" data-id="399:582"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/menu.svg"
          alt="Menu"></div>
      <div class="hero-section-LmQtYc" data-id="399:578">
        <div class="hero-content-BubjTr hero-content" data-id="399:579">
          <div class="experience-colours-of-africa roboto-extra-bold-wheatfield-48px" data-id="I399:579;234:344">
            Experience Colours of Africa</div>
        </div>
      </div><img class="rectangle-3-LmQtYc" data-id="399:583"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-3.gif"
        alt="Rectangle 3">
      <div class="rectangle-40-LmQtYc" data-id="400:588"></div>
      <div class="hero-section-content-LmQtYc" data-id="400:584">
        <div class="hero-content-YscPti hero-content" data-id="400:585">
          <div class="experience-colours-of-africa roboto-extra-bold-wheatfield-48px" data-id="I400:585;234:344">
            Experience Colours of Africa</div>
        </div>
      </div>
      <div class="frame-37-LmQtYc" data-id="400:589">
        <h2 class="inspiring-tanzania-safari-journeys-await-JE7Fxh inspiring-tanzania-safari-journeys-await h2"
          data-id="400:590">Inspiring Tanzania Safari Journeys Await</h2>
        <div class="frame-36-JE7Fxh" data-id="400:591">
          <article class="features-card" data-id="400:592">
            <div class="frame-4" data-id="I400:592;335:791">
              <h4 class="customer-centric h4" data-id="I400:592;335:792">Customer Centric</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-normal-green-kelp-16px"
                data-id="I400:592;335:793">We are a customer-focused travel agency.</p>
            </div>
            <div class="features-icon" data-id="I400:592;337:406">
              <div class="ellipse-27" data-id="I400:592;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card" data-id="400:593">
            <div class="frame-4" data-id="I400:593;335:791">
              <h4 class="customer-centric h4" data-id="I400:593;335:792">Personalized</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I400:593;335:793">Tailored itineraries suitable for you.</p>
            </div>
            <div class="features-icon" data-id="I400:593;337:406">
              <div class="ellipse-27" data-id="I400:593;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card" data-id="400:594">
            <div class="frame-4" data-id="I400:594;335:791">
              <h4 class="customer-centric h4" data-id="I400:594;335:792">Trusted</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I400:594;335:793">4.3 stars from 500+ Google reviews.</p>
            </div>
            <div class="features-icon" data-id="I400:594;337:406">
              <div class="ellipse-27" data-id="I400:594;337:406;336:799"></div>
            </div>
          </article>
          <article class="features-card" data-id="400:595">
            <div class="frame-4" data-id="I400:595;335:791">
              <h4 class="customer-centric h4" data-id="I400:595;335:792">Experienced</h4>
              <p class="we-are-a-customer-focused-travel-agency roboto-medium-green-kelp-18px"
                data-id="I400:595;335:793">Expertise in local culture and attractions.</p>
            </div>
            <div class="features-icon" data-id="I400:595;337:406">
              <div class="ellipse-27" data-id="I400:595;337:406;336:799"></div>
            </div>
          </article>
        </div>
      </div>
      <div class="frame-39-LmQtYc" data-id="400:616">
        <div class="frame-14-Zxw9Gi" data-id="400:617">
          <h3 class="travel-the-world-YdPkic h3" data-id="400:618">Travel the world</h3>
          <h2 class="inspiring-tanzania-safari-journeys-await-YdPkic inspiring-tanzania-safari-journeys-await h2"
            data-id="400:619">Inspiring Tanzania Safari Journeys Await</h2>
        </div>
        <div class="frame-38-Zxw9Gi" data-id="400:620">
          <article class="desitanation-card" data-id="400:621"><img class="rectangle-69" data-id="I400:621;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I400:621;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I400:621;255:464">Zanzibar beaches</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I400:621;255:465">Discover the pristine white sands and
                turquoise waters of Zanzibar&#39;s world-famous beaches.</p>
              <div class="button-5E84XB button" data-id="I400:621;255:466">
                <div class="button-text-BPGoWu button-text paragraph-bold" data-id="I400:621;255:466;221:298">Learn more
                </div><img class="vector-BPGoWu vector" data-id="I400:621;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-47.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
          <article class="desitanation-card" data-id="400:622"><img class="rectangle-69" data-id="I400:622;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69-1@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I400:622;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I400:622;255:464">Mount Kilimanjaro</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I400:622;255:465">Conquer the Roof of Africa, experience
                the awe-inspiring beauty and challenge of Mount Kilimanjaro, the highest peak in Africa.</p>
              <div class="button-JoYbuQ button" data-id="I400:622;255:466">
                <div class="button-text-RZd73w button-text paragraph-bold" data-id="I400:622;255:466;221:298">Learn more
                </div><img class="vector-RZd73w vector" data-id="I400:622;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-47.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
          <article class="desitanation-card" data-id="400:623"><img class="rectangle-69" data-id="I400:623;255:470"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/rectangle-69-2@2x.png') }}"
              alt="Rectangle 69">
            <div class="frame-10" data-id="I400:623;255:463">
              <h3 class="kilimanjaro-mountain-climbing h3" data-id="I400:623;255:464">Safari Adventures</h3>
              <p class="conquer-the-roof-of paragraph" data-id="I400:623;255:465">Dive into the heart of Tanzania&#39;s
                stunning landscapes with our expertly guided safari tours. Witness the Great Migration, and explore the
                lush Ngorongoro Crater.</p>
              <div class="button-l6YXg8 button" data-id="I400:623;255:466">
                <div class="button-text-0KBKb9 button-text paragraph-bold" data-id="I400:623;255:466;221:298">Learn more
                </div><img class="vector-0KBKb9 vector" data-id="I400:623;255:466;221:302"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                  anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-47.svg"
                  alt="Vector">
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="about-us-section-responsive-LmQtYc" data-id="400:678">
        <div class="frame-41-plwfw8" data-id="400:679">
          <div class="at-camelleon-safaris-2hzYfQ roboto-extra-bold-wheatfield-20px" data-id="400:680">At camelleon
            safaris</div>
          <p class="your-partner-to-seam-2hzYfQ roboto-black-white-42px" data-id="400:681">Your Partner to Seamless
            Safari Experiences</p>
          <p class="join-us-at-camel-leo-2hzYfQ roboto-normal-white-18px" data-id="400:682">Join us at Camel Leon
            Safaris and let us guide you through the breathtaking wonders of Tanzania. Discover the magic of adapting to
            the wild and create memories that will last a lifetime.</p>
          <div class="frame-40-2hzYfQ" data-id="400:683">
            <div class="x100-VCaL9C roboto-black-white-26px" data-id="400:684">100+</div>
            <div class="x500-VCaL9C x500 roboto-black-white-26px" data-id="400:685">500+</div>
            <div class="x50-VCaL9C roboto-black-white-26px" data-id="400:686">50+</div>
            <div class="x5-VCaL9C roboto-black-white-26px" data-id="400:687">5+</div>
          </div>
          <div class="button-2hzYfQ button" data-id="400:688">
            <div class="button-text-biSOyp button-text paragraph-bold" data-id="I400:688;221:298">learn more</div><img
              class="vector-biSOyp vector" data-id="I400:688;221:302"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
              anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/vector-3.svg"
              alt="Vector">
          </div>
        </div>
        <div class="about-us_photo-plwfw8" data-id="400:689"><img class="untitled-1-4-KNh6UT" data-id="400:690"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/untitled-1-4.png') }}"
            alt="Untitled-1 4"></div>
      </div>
      <div class="safari-card-LmQtYc safari-card" data-id="410:1478">
        <div class="rectangle-7" data-id="I410:1478;405:830"></div>
        <div class="frame-59" data-id="I410:1478;410:971">
          <div class="frame-62" data-id="I410:1478;410:974">
            <div class="x10-days paragraph" data-id="I410:1478;405:834">10 Days</div>
            <h3 class="comfort-safari-and-beach-vacation h3" data-id="I410:1478;405:831">Comfort&nbsp;&nbsp;Safari and
              Beach Vacation</h3>
          </div><img class="line-15" data-id="I410:1478;406:846"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/line-15.svg"
            alt="Line 15">
          <div class="frame-60" data-id="I410:1478;410:972">
            <div class="frame-58" data-id="I410:1478;410:970">
              <div class="x3900 paragraph" data-id="I410:1478;410:964">$3900</div>
              <div class="x3300 roboto-bold-green-kelp-36px" data-id="I410:1478;405:836">$3300</div><img class="line-16"
                data-id="I410:1478;410:966"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                alt="Line 16">
            </div>
            <div class="button-XmAHxT button" data-id="I410:1478;405:837">
              <div class="button-text-QthrWQ button-text paragraph-bold" data-id="I410:1478;405:837;221:314">View More
              </div><img class="vector-QthrWQ vector" data-id="I410:1478;405:837;221:315"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-39.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="safari-card-7A1txE safari-card" data-id="411:1493">
        <div class="rectangle-7" data-id="I411:1493;405:830"></div>
        <div class="frame-59" data-id="I411:1493;410:971">
          <div class="frame-62" data-id="I411:1493;410:974">
            <div class="x10-days paragraph" data-id="I411:1493;405:834">10 Days</div>
            <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1493;405:831">Comfort&nbsp;&nbsp;Safari and
              Beach Vacation</h3>
          </div><img class="line-15" data-id="I411:1493;406:846"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/line-15-1.svg"
            alt="Line 15">
          <div class="frame-60" data-id="I411:1493;410:972">
            <div class="frame-58" data-id="I411:1493;410:970">
              <div class="x3900 paragraph" data-id="I411:1493;410:964">$3900</div>
              <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1493;405:836">$3300</div><img class="line-16"
                data-id="I411:1493;410:966"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                alt="Line 16">
            </div>
            <div class="button-EpfmQG button" data-id="I411:1493;405:837">
              <div class="button-text-2uI9lw button-text paragraph-bold" data-id="I411:1493;405:837;221:314">View More
              </div><img class="vector-2uI9lw vector" data-id="I411:1493;405:837;221:315"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-39.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="safari-card-h0Swsi safari-card" data-id="411:1509">
        <div class="rectangle-7" data-id="I411:1509;405:830"></div>
        <div class="frame-59" data-id="I411:1509;410:971">
          <div class="frame-62" data-id="I411:1509;410:974">
            <div class="x10-days paragraph" data-id="I411:1509;405:834">10 Days</div>
            <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1509;405:831">Comfort&nbsp;&nbsp;Safari and
              Beach Vacation</h3>
          </div><img class="line-15" data-id="I411:1509;406:846"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/line-15.svg"
            alt="Line 15">
          <div class="frame-60" data-id="I411:1509;410:972">
            <div class="frame-58" data-id="I411:1509;410:970">
              <div class="x3900 paragraph" data-id="I411:1509;410:964">$3900</div>
              <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1509;405:836">$3300</div><img class="line-16"
                data-id="I411:1509;410:966"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                alt="Line 16">
            </div>
            <div class="button-h0mTal button" data-id="I411:1509;405:837">
              <div class="button-text-re6UvN button-text paragraph-bold" data-id="I411:1509;405:837;221:314">View More
              </div><img class="vector-re6UvN vector" data-id="I411:1509;405:837;221:315"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-39.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="safari-card-pDee2q safari-card" data-id="411:1539">
        <div class="rectangle-7" data-id="I411:1539;405:830"></div>
        <div class="frame-59" data-id="I411:1539;410:971">
          <div class="frame-62" data-id="I411:1539;410:974">
            <div class="x10-days paragraph" data-id="I411:1539;405:834">10 Days</div>
            <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1539;405:831">Comfort&nbsp;&nbsp;Safari and
              Beach Vacation</h3>
          </div><img class="line-15" data-id="I411:1539;406:846"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/line-15.svg"
            alt="Line 15">
          <div class="frame-60" data-id="I411:1539;410:972">
            <div class="frame-58" data-id="I411:1539;410:970">
              <div class="x3900 paragraph" data-id="I411:1539;410:964">$3900</div>
              <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1539;405:836">$3300</div><img class="line-16"
                data-id="I411:1539;410:966"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                alt="Line 16">
            </div>
            <div class="button-ZUxoI7 button" data-id="I411:1539;405:837">
              <div class="button-text-XopGtW button-text paragraph-bold" data-id="I411:1539;405:837;221:314">View More
              </div><img class="vector-XopGtW vector" data-id="I411:1539;405:837;221:315"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-39.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="safari-card-PrIXjS safari-card" data-id="411:1508">
        <div class="rectangle-7" data-id="I411:1508;405:830"></div>
        <div class="frame-59" data-id="I411:1508;410:971">
          <div class="frame-62" data-id="I411:1508;410:974">
            <div class="x10-days paragraph" data-id="I411:1508;405:834">10 Days</div>
            <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1508;405:831">Comfort&nbsp;&nbsp;Safari and
              Beach Vacation</h3>
          </div><img class="line-15" data-id="I411:1508;406:846"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/line-15-1.svg"
            alt="Line 15">
          <div class="frame-60" data-id="I411:1508;410:972">
            <div class="frame-58" data-id="I411:1508;410:970">
              <div class="x3900 paragraph" data-id="I411:1508;410:964">$3900</div>
              <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1508;405:836">$3300</div><img class="line-16"
                data-id="I411:1508;410:966"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                alt="Line 16">
            </div>
            <div class="button-Y4z9HK button" data-id="I411:1508;405:837">
              <div class="button-text-LcxQeT button-text paragraph-bold" data-id="I411:1508;405:837;221:314">View More
              </div><img class="vector-LcxQeT vector" data-id="I411:1508;405:837;221:315"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-39.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="safari-card-4wDbQZ safari-card" data-id="411:1540">
        <div class="rectangle-7" data-id="I411:1540;405:830"></div>
        <div class="frame-59" data-id="I411:1540;410:971">
          <div class="frame-62" data-id="I411:1540;410:974">
            <div class="x10-days paragraph" data-id="I411:1540;405:834">10 Days</div>
            <h3 class="comfort-safari-and-beach-vacation h3" data-id="I411:1540;405:831">Comfort&nbsp;&nbsp;Safari and
              Beach Vacation</h3>
          </div><img class="line-15" data-id="I411:1540;406:846"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/line-15-1.svg"
            alt="Line 15">
          <div class="frame-60" data-id="I411:1540;410:972">
            <div class="frame-58" data-id="I411:1540;410:970">
              <div class="x3900 paragraph" data-id="I411:1540;410:964">$3900</div>
              <div class="x3300 roboto-bold-green-kelp-36px" data-id="I411:1540;405:836">$3300</div><img class="line-16"
                data-id="I411:1540;410:966"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/line-16-7.svg"
                alt="Line 16">
            </div>
            <div class="button-zVBO9u button" data-id="I411:1540;405:837">
              <div class="button-text-zw7Q9C button-text paragraph-bold" data-id="I411:1540;405:837;221:314">View More
              </div><img class="vector-zw7Q9C vector" data-id="I411:1540;405:837;221:315"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/vector-39.svg"
                alt="Vector">
            </div>
          </div>
        </div>
      </div>
      <div class="frame-63-LmQtYc" data-id="411:1572">
        <h4 class="our-popular-packages-NQ0DkI h4" data-id="411:1569">Our Popular Packages</h4>
      </div>
      <h2 class="east-african-safaris-LmQtYc h2" data-id="411:1570">East African Safaris Best <br>Holiday Packages</h2>
      <div class="frame-64-LmQtYc" data-id="411:1573"><img class="images-1-bEpFmR" data-id="411:1574"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c57fadadeb6b0a2408a1c0/img/images-1@2x.png') }}"
          alt="images 1">
        <h2 class="camelleon-ranked-3-bEpFmR h2" data-id="411:1575">Camelleon ranked #3</h2>
        <div class="group-10-bEpFmR" data-id="411:1576">
          <div class="x500-APC2Xv x500 roboto-semi-bold-black-18px" data-id="411:1577">500+</div>
          <div class="group-9-APC2Xv" data-id="411:1578">
            <div class="ellipse-1-pXrTIr" data-id="411:1579"></div>
            <div class="ellipse-2-pXrTIr" data-id="411:1580"></div>
            <div class="ellipse-3-pXrTIr" data-id="411:1581"></div>
            <div class="ellipse-4-pXrTIr" data-id="411:1582"></div>
            <div class="ellipse-5-pXrTIr" data-id="411:1583"></div>
          </div>
        </div>
      </div>
      <div class="button-LmQtYc button" data-id="411:1584">
        <div class="button-text-MyxHNx button-text paragraph-bold" data-id="I411:1584;250:301">Button Text</div><img
          class="vector-MyxHNx vector" data-id="I411:1584;250:302"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/vector-10.svg"
          alt="Vector">
      </div>
      <div class="frame-67-LmQtYc" data-id="411:1796">
        <div class="rectangle-29-WwN7Y2" data-id="411:1772"></div>
        <div class="rectangle-30-WwN7Y2" data-id="411:1773"></div>
        <div class="rectangle-31-WwN7Y2" data-id="411:1774"></div><img class="mask-group-WwN7Y2 mask-group"
          data-id="411:1775" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/mask-group@2x.png') }}"
          alt="Mask group"><img class="mask-group-GXtTQH mask-group" data-id="411:1778"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/mask-group-1@2x.png') }}"
          alt="Mask group"><img class="mask-group-QDaNQN mask-group" data-id="411:1781"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
          anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/mask-group-2@2x.png') }}"
          alt="Mask group">
        <div class="vic-WwN7Y2 vic roboto-semi-bold-black-26px" data-id="411:1784">Vic</div>
        <div class="vic-GXtTQH vic roboto-semi-bold-black-26px" data-id="411:1785">Vic</div>
        <div class="vic-QDaNQN vic roboto-semi-bold-black-26px" data-id="411:1786">Vic</div>
        <div class="jan2024-WwN7Y2 jan2024 roboto-semi-bold-boulder-18px" data-id="411:1787">Jan/2024</div>
        <div class="jan2024-GXtTQH jan2024 roboto-semi-bold-boulder-18px" data-id="411:1788">Jan/2024</div>
        <div class="jan2024-QDaNQN jan2024 roboto-semi-bold-boulder-18px" data-id="411:1789">Jan/2024</div>
        <p class="the-team-led-by-stan-WwN7Y2 the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="411:1790">The
          team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our
          amazing <br>experience. Their professionalism and</p>
        <p class="the-team-led-by-stan-GXtTQH the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="411:1791">The
          team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our
          amazing <br>experience. Their professionalism and</p>
        <p class="the-team-led-by-stan-QDaNQN the-team-led-by-stan roboto-semi-bold-boulder-18px" data-id="411:1792">The
          team led by Stanford (head guide), Agrey, Joseph, <br>Michael, Lihiru and Honest were the reason for our
          amazing <br>experience. Their professionalism and</p>
        <h3 class="amazing-experience-WwN7Y2 h3" data-id="411:1793">Amazing experience!</h3>
        <h3 class="amaizing-experience-WwN7Y2 amaizing-experience h3" data-id="411:1794">Amaizing experience!</h3>
        <h3 class="amaizing-experience-GXtTQH amaizing-experience h3" data-id="411:1795">Amaizing experience!</h3>
      </div>
      <div class="booking-form-responsive-LmQtYc" data-id="414:2825">
        <div class="frame-54-7lCC1x" data-id="I414:2825;398:775">
          <div class="destination-z4FbM2 paragraph" data-id="I414:2825;398:767">Destination</div>
        </div>
        <div class="frame-55-7lCC1x" data-id="I414:2825;398:776">
          <div class="duration paragraph" data-id="I414:2825;398:769">Duration</div>
        </div>
        <div class="frame-56-7lCC1x" data-id="I414:2825;398:777">
          <div class="duration paragraph" data-id="I414:2825;398:778">Duration</div>
        </div>
        <div class="button-7lCC1x button" data-id="I414:2825;398:772">
          <div class="button-text-thPt7v button-text paragraph-bold" data-id="I414:2825;398:772;392:589">Search Trip
          </div><img class="vector-thPt7v vector" data-id="I414:2825;398:772;392:590"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/vector-11.svg"
            alt="Vector">
        </div>
      </div><img class="rectangle-32-LmQtYc" data-id="416:3520"
        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/678fbe96f55fb2cbde826d8a/img/rectangle-32.png') }}"
        alt="Rectangle 32">
      <div class="footer-section-LmQtYc" data-id="416:3580">
        <div class="footer-content-TxPLMd" data-id="I416:3580;416:3522">
          <div class="frame-43-gkKCqc" data-id="I416:3580;416:3523">
            <div class="frame-42-xv8AuE" data-id="I416:3580;416:3524"><img class="logo-FjCyMy logo"
                data-id="I416:3580;416:3525"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/668160955990fdfa8f253c6f/releases/67c583b08a5e3f073e1b3af7/img/logo.svg"
                alt="logo">
              <p class="camel-leon-safaris-l-FjCyMy paragraph" data-id="I416:3580;416:3526">Camel Leon Safaris Ltd. was
                born out of a love for the idea of adapting to various environments, mirroring the chameleon&#39;s
                ability. Our founders wanted to share this experience with people in the wilds of Africa, highlighting
                the beauty of nature when one immerses and adapts to it.</p>
            </div>
          </div>
          <div class="frame-44-gkKCqc" data-id="I416:3580;416:3527">
            <div class="travel-tips-L4Dxbw roboto-black-black-16px" data-id="I416:3580;416:3528">Travel Tips</div><a
              href="https://serengeticlarity.com/tanzania-entry-requirements/" target="_blank">
              <div class="entry-requirements-L4Dxbw paragraph" data-id="I416:3580;416:3529">Entry Requirements</div>
            </a><a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/" target="_blank">
              <div class="tanzania-safari-planning-guide-L4Dxbw paragraph" data-id="I416:3580;416:3530">Tanzania Safari
                Planning Guide</div>
            </a><a href="https://serengeticlarity.com/best-time-to-visit-tanzania/" target="_blank">
              <p class="best-time-to-visit-tanzania-L4Dxbw paragraph" data-id="I416:3580;416:3531">Best time to visit
                Tanzania</p>
            </a><a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/" target="_blank">
              <div class="kilimanjaro-planning-guide-L4Dxbw paragraph" data-id="I416:3580;416:3532">Kilimanjaro Planning
                Guide</div>
            </a><a href="https://serengeticlarity.com/drones-photography-guidelines/" target="_blank">
              <div class="drones-photography-guide-L4Dxbw paragraph" data-id="I416:3580;416:3533"> Drones &amp;
                Photography Guide</div>
            </a>
            <div class="tipping-guide-L4Dxbw paragraph" data-id="I416:3580;416:3534">Tipping Guide</div>
          </div>
          <div class="frame-45-gkKCqc" data-id="I416:3580;416:3535">
            <div class="camelleon-safaris-PWTxEv roboto-black-black-16px" data-id="I416:3580;416:3536">Camelleon Safaris
            </div>
            <div class="about-us-PWTxEv paragraph" data-id="I416:3580;416:3537">About US</div>
            <div class="terms-and-cionditions-PWTxEv paragraph" data-id="I416:3580;416:3538">Terms And Cionditions</div>
            <div class="booking-process-PWTxEv paragraph" data-id="I416:3580;416:3539">Booking Process</div>
            <div class="payment-details-PWTxEv paragraph" data-id="I416:3580;416:3540">Payment Details</div>
            <div class="privacy-policy-PWTxEv paragraph" data-id="I416:3580;416:3541">Privacy Policy</div>
          </div>
          <div class="frame-46-gkKCqc" data-id="I416:3580;416:3542">
            <div class="contact-information-qcNuTE roboto-black-black-16px" data-id="I416:3580;416:3543">Contact
              Information</div>
            <div class="sales-safari-expert-qcNuTE paragraph" data-id="I416:3580;416:3544">Sales &amp; Safari Expert
            </div>
            <div class="x25568-655-5755-qcNuTE roboto-medium-gray-18px" data-id="I416:3580;416:3545">+25568 655 5755
            </div>
            <div class="infocamelleonsafariscom-qcNuTE paragraph" data-id="I416:3580;416:3546">info@camelleonsafaris.com
            </div>
          </div>
        </div>
      </div>
      <div class="rectangle-33-LmQtYc" data-id="419:3723"></div>
    </div>
  </div>
  <script src="launchpad-js/launchpad-banner.html" async></script>
  <script defer src="{{ asset('landing/animaapp.s3.amazonaws.com/static/restart-btn.min.js') }}"></script>
</body>
<!-- Mirrored from solitary-band-5104.animaapp.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Mar 2025 10:47:36 GMT -->

</html>