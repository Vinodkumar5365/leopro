<?php include 'header.php';?>
<html lang="null">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
      <meta name="robots" content="index, follow">
      <meta name="description" content=". ">
      <meta property="og:title" content="Pay for Leosolv Mobile &amp; Laptop Care by Leosolv">
      <meta property="og:image" content="https://cdn.razorpay.com/logos/DoWDd3eoGoibSp_large.jpg">
      <meta property="og:image:width" content="276px">
      <meta property="og:image:height" content="276px">
      <meta property="og:description" content=". ">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="Pay for Leosolv Mobile &amp; Laptop Care by Leosolv">
      <meta name="twitter:description" content=". ">
      <meta name="twitter:image" content="https://cdn.razorpay.com/logos/DoWDd3eoGoibSp_large.jpg">
      <link rel="icon" href="https://razorpay.com/favicon.png" type="image/x-icon">
      <style>
         body {
         background-color: #efefef;
         }
      </style>
      <script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
         var paymentPageData = data.payment_link;
         paymentPageData.description = paymentPageData.description ? JSON.parse(paymentPageData.description).value : null;
         
         var requestParams = [];
         
         var templateData = {
             key_id: data.key_id,
             base_url: data.base_url,
             is_test_mode: data.is_test_mode,
             merchant: data.merchant,
             org: data.org,
             payment_page_data: data.payment_link,
             context: {
               page_title: data.payment_link.title,
               form_title: 'Payment Details'
             },
             requestParams: requestParams,
             view_preferences: data.view_preferences,
             keyless_header: data.keyless_header,
             checkout_2_enabled: data.checkout_2_enabled ?? false,
           };
      </script>
      <script>
         function renderPaymentPage() {
             window.RZP.renderApp('paymentpage-container', templateData);
         }
      </script>
      <!-- Temporary polyfill for analytics -->
      <script src="https://polyfill.io/v3/polyfill.min.js?features=URL%2CURLSearchParams"></script>
      <script src="https://cdn.razorpay.com/static/analytics/bundle.js" defer=""></script>
      <script src="https://cdn.razorpay.com/static/assets/color.js" defer=""></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link href="https://fonts.googleapis.com/css?family=Muli:400,700&amp;display=swap" rel="stylesheet">
      <script src="https://cdn.razorpay.com/static/assets/quilljs/1.3.6/quill.min.js" defer=""></script>
      <script src="https://cdn.razorpay.com/static/hosted/wysiwyg.js" onload="renderPaymentPage()" defer="" crossorigin=""></script>
      <link rel="stylesheet" href="https://cdn.razorpay.com/static/assets/social-share/icons.css">
      <style type="text/css">.UI-form.UI-form {
         position: relative;
         color: #515978;
         }
         .UI-form.UI-form.Form--inactive .Field-content {
         opacity: 0.5;
         cursor: not-allowed;
         }
         .UI-form.UI-form.Form--inactive .Field-content .Field-el {
         pointer-events: none;
         }
         .UI-form.UI-form .Field {
         position: relative;
         display: block;
         margin: 24px 0 -21px;
         transition: 0.12s;
         }
         .UI-form.UI-form .Field::after {
         content: '';
         display: table;
         clear: both;
         }
         .UI-form.UI-form .Field--small .Field-wrapper {
         width: 55%;
         }
         .UI-form.UI-form .Field .Field .Field-error,
         .UI-form.UI-form .Field .Field .Field-description {
         display: none;
         }
         .UI-form.UI-form .Field-wrapper {
         position: relative;
         height: 36px;
         min-width: 160px;
         max-width: 360px;
         color: #0d2366;
         }
         .UI-form.UI-form .Field-wrapper .Field-el label {
         line-height: 36px;
         }
         .UI-form.UI-form .Field-addon {
         position: absolute;
         top: 0;
         display: table;
         height: 100%;
         }
         .UI-form.UI-form .Field-addon > * {
         display: table-cell;
         vertical-align: middle;
         }
         .UI-form.UI-form .Field-addon > * > .Field-content {
         margin: 0;
         }
         .UI-form.UI-form .Field--amount div.Field-el {
         pointer-events: none;
         }
         .UI-form.UI-form .Field--amount div.Field-el,
         .UI-form.UI-form .Field--amount input.Field-el {
         background: #fcfcfc;
         border: 1px solid #e3e9eb;
         }
         .UI-form.UI-form .Field--amount--error div.Field-el,
         .UI-form.UI-form .Field--amount--error input.Field-el {
         background: #fffcfc;
         border: 1px solid #fcdada;
         }
         .UI-form.UI-form .Field-error {
         color: #f05050;
         opacity: 0;
         transition: 0.12s;
         min-height: 20px;
         }
         .UI-form.UI-form .Field-description {
         transform: translateY(-21px);
         transition: 0.12s;
         overflow-wrap: break-word;
         }
         .UI-form.UI-form .Field-error,
         .UI-form.UI-form .Field-description {
         font-size: 12px;
         margin: 4px 0;
         line-height: 16px;
         }
         .UI-form.UI-form .Field-addon--after {
         right: 9px;
         }
         .UI-form.UI-form .Field-addon--before {
         left: 10px;
         font-size: 14px;
         font-weight: bold;
         }
         .UI-form.UI-form .Field-addon--after--CheckBox {
         width: 100%;
         right: 0;
         }
         .UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox {
         text-align: right;
         }
         .UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox .Field-wrapper {
         height: 36px;
         }
         .UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox .Field-wrapper .Field-el {
         display: block;
         line-height: 36px;
         background: transparent;
         }
         .UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox .Field-wrapper .CheckBox-mark {
         margin-right: 9px;
         }
         .UI-form.UI-form .Field--currency-1 .Field-addon--before + .Field-el {
         padding-left: 20px;
         }
         .UI-form.UI-form .Field--currency-2 .Field-addon--before + .Field-el {
         padding-left: 30px;
         }
         .UI-form.UI-form .Field--currency-3 .Field-addon--before + .Field-el {
         padding-left: 40px;
         }
         .UI-form.UI-form .Field--currency-4 .Field-addon--before + .Field-el {
         padding-left: 50px;
         }
         .UI-form.UI-form .Field--currency-long .Field-addon--before + .Field-el {
         padding-left: 54px;
         }
         .UI-form.UI-form .Field-addon > span> * {
         display: inline-block;
         vertical-align: middle;
         }
         .UI-form.UI-form .Field--has-image img {
         height: 34px;
         margin-left: -9px;
         margin-top: 1px;
         margin-right: 4px;
         border-bottom-left-radius: 1px;
         border-top-left-radius: 1px;
         border-right: 1px solid #e3e9eb;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-1 .Field-addon--before + .Field-el {
         padding-left: 54px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-2 .Field-addon--before + .Field-el {
         padding-left: 64px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-3 .Field-addon--before + .Field-el {
         padding-left: 74px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-4 .Field-addon--before + .Field-el {
         padding-left: 84px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-long .Field-addon--before + .Field-el {
         padding-left: 94px;
         }
         .UI-form.UI-form .Field--amount--selected div.Field-el,
         .UI-form.UI-form .Field--amount--selected input.Field-el {
         background: #fcfdff;
         border: 1px solid #dae7fc;
         }
         .UI-form.UI-form .Field--amount--selected img {
         border-color: #dae7fc;
         }
         .UI-form.UI-form .Field-el {
         line-height: 16px;
         height: 100%;
         width: 100%;
         background: #fff;
         border: 1px solid #e2e2e2;
         border-radius: 2px;
         overflow: hidden;
         font-size: 14px;
         padding: 0 9px;
         outline: none;
         color: inherit;
         }
         .UI-form.UI-form .Field-el::placeholder {
         color: rgba(0,0,0,0.3);
         }
         .UI-form.UI-form .Field.has-error {
         margin-bottom: 0;
         }
         .UI-form.UI-form .Field.has-error .Field-el {
         border-color: #f05050;
         }
         .UI-form.UI-form .Field.has-error .Field-error {
         opacity: 1;
         }
         .UI-form.UI-form .Field.has-error .Field-error + .Field-description {
         transform: translateY(0);
         }
         .UI-form.UI-form .Field--disabled .Field-el {
         cursor: not-allowed;
         }
         .UI-form.UI-form .Field:not(.Field--disabled) .Field-el:hover {
         border-color: #c1c1c1;
         }
         .UI-form.UI-form .Field:not(.Field--disabled) .Field-el:focus {
         border-color: #528ff0;
         }
         .UI-form.UI-form .Field--select select {
         text-indent: 0.001px;
         text-overflow: '';
         cursor: pointer;
         }
         .UI-form.UI-form .Field--select .Field-wrapper::before {
         content: '';
         position: absolute;
         right: 12px;
         margin-top: 15px;
         width: 0;
         height: 0;
         border-top: 4px dashed;
         border-right: 4px solid transparent;
         border-left: 4px solid transparent;
         pointer-events: none;
         z-index: 2;
         }
         .UI-form.UI-form .Field--textarea .Field-wrapper {
         height: auto;
         font-size: 0;
         }
         .UI-form.UI-form .Field--textarea textarea.Field-el {
         padding: 8px 12px;
         height: 32px;
         min-height: 32px;
         max-height: 230px;
         line-height: 16px;
         resize: vertical;
         }
         .UI-form.UI-form .Field--textarea .Field-el--textarea-fake {
         width: 100%;
         height: 32px;
         overflow: hidden;
         padding: 0 16px 0 10px;
         line-height: 20px;
         font-size: 14px;
         visibility: hidden;
         position: absolute;
         left: 0;
         }
         .UI-form.UI-form .Field-label {
         position: relative;
         float: left;
         width: 140px;
         font-size: 14px;
         line-height: 20px;
         color: #515978;
         word-break: break-word;
         }
         .UI-form.UI-form .Field-label .text-optional {
         font-size: 12px;
         opacity: 0.7;
         }
         .UI-form.UI-form .Field .symbol--red {
         color: #f05050;
         display: none;
         }
         .UI-form.UI-form .Field--required .symbol--red {
         display: inline-block;
         }
         .UI-form.UI-form .Field-content {
         margin-left: 164px;
         }
         .UI-form.UI-form .Field--CheckBox {
         font-size: 0;
         }
         .UI-form.UI-form .Field--CheckBox .Field-wrapper {
         min-width: unset;
         max-width: unset;
         }
         .UI-form.UI-form .Field--CheckBox .Field-el {
         font-size: 0;
         }
         .UI-form.UI-form .Field--CheckBox .CheckBox-mark {
         margin: 0;
         width: 18px;
         height: 18px;
         }
         .UI-form.UI-form .Field--CheckBox .CheckBox-mark::after {
         margin: 4px 0 0 7px;
         }
         .UI-form.UI-form .Field--counter .Field-label {
         margin-bottom: 0;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper {
         min-width: 96px;
         max-width: 96px;
         height: 24px;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper button {
         position: absolute;
         width: 28px;
         height: 22px;
         font-size: 20px;
         background: transparent;
         padding: 0 0 3px 1px;
         user-select: none;
         outline: 0;
         -webkit-tap-highlight-color: transparent;
         cursor: pointer;
         top: 0;
         line-height: 100%;
         font-weight: bold;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper button:disabled,
         .UI-form.UI-form .Field--counter .Field-wrapper button[disabled] {
         opacity: 0.3;
         cursor: not-allowed;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper button:hover {
         background: #f6f6f6;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper button:active {
         background: #e3e3e3;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper button:nth-of-type(1) {
         left: 0;
         border-top-left-radius: 1px;
         border-bottom-left-radius: 1px;
         border: none;
         border-right: 1px solid #e2e2e2;
         margin: 1px 0 0 1px;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper button:nth-of-type(2) {
         right: 0;
         border-top-right-radius: 1px;
         border-bottom-right-radius: 1px;
         border: none;
         border-left: 1px solid #e2e2e2;
         margin: 1px 1px 0 0;
         }
         .UI-form.UI-form .Field--counter .Field-wrapper .counter-value {
         width: 100%;
         padding: 0 32px;
         display: block;
         text-align: center;
         background: #fff;
         }
         .UI-form.UI-form .Field-el[type=number]::-webkit-inner-spin-button,
         .UI-form.UI-form .Field-el[type=number]::-webkit-outer-spin-button {
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none;
         -moz-appearance: textfield;
         margin: 0;
         }
         .UI-form.UI-form .currency-symbol {
         margin-top: 2px;
         }
         @media (max-width: 1024px) {
         .UI-form.UI-form .Field {
         margin-top: 24px;
         }
         .UI-form.UI-form .Field-label {
         width: 100%;
         margin-bottom: 4px;
         text-align: left;
         float: unset;
         }
         .UI-form.UI-form .Field-label .text-optional {
         margin-left: 4px;
         display: inline-block;
         }
         .UI-form.UI-form .Field-content {
         margin-left: 0;
         }
         .UI-form.UI-form .Field-wrapper {
         height: 40px;
         max-width: unset;
         }
         .UI-form.UI-form .Field-wrapper div.Field-el {
         line-height: 40px;
         }
         .UI-form.UI-form .Field-wrapper .Field--CheckBox .Field-wrapper {
         height: 40px;
         line-height: 40px;
         }
         .UI-form.UI-form .Field-wrapper .Field--CheckBox .CheckBox-mark {
         width: 21px;
         height: 21px;
         }
         .UI-form.UI-form .Field-wrapper .Field--CheckBox .CheckBox-mark::after {
         margin: 6px 0 0 8px;
         }
         .UI-form.UI-form .Field--textarea textarea.Field-el {
         height: 40px;
         min-height: 40px;
         line-height: 20px;
         }
         .UI-form.UI-form .Field--select select {
         cursor: pointer;
         }
         .UI-form.UI-form .Field--select .Field-wrapper::before {
         margin-top: 18px;
         }
         .UI-form.UI-form .Field--has-image img {
         height: 38px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-1 .Field-addon--before + .Field-el {
         padding-left: 58px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-2 .Field-addon--before + .Field-el {
         padding-left: 68px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-3 .Field-addon--before + .Field-el {
         padding-left: 78px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-4 .Field-addon--before + .Field-el {
         padding-left: 88px;
         }
         .UI-form.UI-form .Field--has-image.Field--currency-long .Field-addon--before + .Field-el {
         padding-left: 98px;
         }
         }
      </style>
      <style type="text/css">.goal-tracker-amount-based {
         color: #515978;
         padding: 12px;
         margin-top: 12px;
         background: rgba(11,112,231,0.05);
         border: 1.4px solid #e7f1fd;
         border-radius: 1px;
         }
         .goal-tracker-amount-based .goal-tracker-amount-based-top {
         font-weight: normal;
         font-size: 14px;
         line-height: 20px;
         color: #515978;
         }
         .goal-tracker-amount-based .goal-tracker-amount-based-top span {
         color: #1b226a;
         font-weight: bold;
         font-size: 16px;
         line-height: 24px;
         }
         .goal-tracker-amount-based .goal-tracker-amount-based-bottom {
         display: flex;
         color: #2b4486;
         font-weight: normal;
         font-size: 14px;
         line-height: 20px;
         justify-content: space-between;
         }
         .goal-tracker-amount-based .goal-tracker-amount-based-bottom .goal-tracker-supporter-count {
         margin-right: 32px;
         }
         .goal-tracker-amount-based footer {
         right: 60px;
         }
         .goal-tracker-supporter-based {
         padding: 12px;
         background: rgba(11,112,231,0.05);
         border: 1.4px solid #e7f1fd;
         border-radius: 3px;
         margin-top: 12px;
         }
         .goal-tracker-supporter-based.goal-tracker-supporter-based-noslider {
         min-height: 75px;
         display: flex;
         justify-content: center;
         flex-direction: column;
         }
         .goal-tracker-supporter-based.goal-tracker-supporter-based-noslider .goal-tracker-supporter-based-bottom {
         justify-content: flex-start;
         }
         .goal-tracker-supporter-based.goal-tracker-supporter-based-noslider .goal-tracker-supporter-based-bottom .goal-tracker-supporter-count,
         .goal-tracker-supporter-based.goal-tracker-supporter-based-noslider .goal-tracker-supporter-based-bottom .goal-tracker-sold-count {
         margin-right: 32px;
         }
         .goal-tracker-supporter-based .goal-tracker-supporter-based-top {
         font-weight: normal;
         font-size: 14px;
         line-height: 20px;
         color: #515978;
         }
         .goal-tracker-supporter-based .goal-tracker-supporter-based-top span {
         font-size: 16px;
         line-height: 24px;
         font-weight: bold;
         color: #1b226a;
         }
         .goal-tracker-supporter-based .goal-tracker-supporter-based-bottom {
         display: flex;
         font-weight: normal;
         font-size: 14px;
         line-height: 20px;
         color: #2b4486;
         justify-content: space-between;
         }
         .goal-tracker-supporter-based .goal-tracker-supporter-based-bottom .goal-tracker-sold-count span {
         font-weight: bold;
         color: #1b226a;
         }
      </style>
      <style type="text/css">.range-slider-container {
         background: rgba(22,47,86,0.05);
         border-radius: 10px;
         width: 100%;
         height: 10px;
         position: relative;
         margin: 10px 0px;
         }
         .range-slider-container:hover {
         background: rgba(27,34,106,0.1);
         }
         .range-slider-container .range-slider-track {
         position: absolute;
         background: #ffa500;
         height: 10px;
         border-radius: 10px;
         }
         .range-slider-container .range-slider-thumb {
         width: 10px;
         height: 10px;
         position: absolute;
         border-radius: 10px;
         cursor: pointer;
         transform: translateX(-50%);
         }
      </style>
      <style type="text/css">.Field.Field--CheckBox {
         display: block;
         cursor: pointer;
         }
         .Field.Field--CheckBox .Field-el {
         border: none;
         padding: 0;
         cursor: inherit;
         }
         .Field.Field--CheckBox .Field-el:active {
         border: none;
         }
         .Field.Field--CheckBox.Field--disabled {
         cursor: not-allowed;
         opacity: 0.6;
         }
         .Field.Field--CheckBox .CheckBox-mark,
         .Field.Field--CheckBox .CheckBox-left {
         vertical-align: middle;
         display: inline-block;
         }
         .Field.Field--CheckBox .CheckBox-mark {
         width: 14px;
         height: 14px;
         border-radius: 1px;
         border: 1px solid #cad1d9;
         background-color: #fff;
         position: relative;
         vertical-align: middle;
         margin-right: 4px;
         }
         .Field.Field--CheckBox .CheckBox-mark::after {
         content: '';
         position: absolute;
         color: #fff;
         transition: 0.12s ease-in;
         opacity: 0;
         display: block;
         width: 2px;
         height: 5px;
         border: solid #fff;
         border-width: 0 1px 1px 0;
         transform: rotate(45deg);
         margin: 2px 0 0 5px;
         }
         .Field.Field--CheckBox [type="checkbox"]:checked + .CheckBox-mark {
         background-color: #429cff;
         border-color: rgba(0,0,0,0.05);
         }
         .Field.Field--CheckBox [type="checkbox"]:checked + .CheckBox-mark:after {
         opacity: 1;
         transform: rotate(45deg) scale(1.5);
         }
         .Field.Field--CheckBox .CheckBox-label {
         font-size: 13px;
         line-height: 16px;
         }
      </style>
      <style type="text/css">.flatpickr-calendar {
         background: transparent;
         opacity: 0;
         display: none;
         text-align: center;
         visibility: hidden;
         padding: 0;
         animation: none;
         direction: ltr;
         border: 0;
         font-size: 14px;
         line-height: 24px;
         border-radius: 5px;
         position: absolute;
         width: 307.875px;
         box-sizing: border-box;
         touch-action: manipulation;
         background: #fff;
         box-shadow: 1px 0 0 #eee, -1px 0 0 #eee, 0 1px 0 #eee, 0 -1px 0 #eee, 0 3px 13px rgba(0,0,0,0.08);
         }
         .flatpickr-calendar.open,
         .flatpickr-calendar.inline {
         opacity: 1;
         max-height: 640px;
         visibility: visible;
         }
         .flatpickr-calendar.open {
         display: inline-block;
         z-index: 99999;
         }
         .flatpickr-calendar.animate.open {
         animation: fpFadeInDown 300ms cubic-bezier(0.23, 1, 0.32, 1);
         }
         .flatpickr-calendar.inline {
         display: block;
         position: relative;
         top: 2px;
         }
         .flatpickr-calendar.static {
         position: absolute;
         top: calc(100% + 2px);
         }
         .flatpickr-calendar.static.open {
         z-index: 999;
         display: block;
         }
         .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7) {
         box-shadow: none !important;
         }
         .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1) {
         box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
         }
         .flatpickr-calendar .hasWeeks .dayContainer,
         .flatpickr-calendar .hasTime .dayContainer {
         border-bottom: 0;
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
         }
         .flatpickr-calendar .hasWeeks .dayContainer {
         border-left: 0;
         }
         .flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
         height: 40px;
         border-top: 1px solid #eee;
         }
         .flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
         height: auto;
         }
         .flatpickr-calendar:before,
         .flatpickr-calendar:after {
         position: absolute;
         display: block;
         pointer-events: none;
         border: solid transparent;
         content: '';
         height: 0;
         width: 0;
         left: 22px;
         }
         .flatpickr-calendar.rightMost:before,
         .flatpickr-calendar.rightMost:after {
         left: auto;
         right: 22px;
         }
         .flatpickr-calendar:before {
         border-width: 5px;
         margin: 0 -5px;
         }
         .flatpickr-calendar:after {
         border-width: 4px;
         margin: 0 -4px;
         }
         .flatpickr-calendar.arrowTop:before,
         .flatpickr-calendar.arrowTop:after {
         bottom: 100%;
         }
         .flatpickr-calendar.arrowTop:before {
         border-bottom-color: #eee;
         }
         .flatpickr-calendar.arrowTop:after {
         border-bottom-color: #fff;
         }
         .flatpickr-calendar.arrowBottom:before,
         .flatpickr-calendar.arrowBottom:after {
         top: 100%;
         }
         .flatpickr-calendar.arrowBottom:before {
         border-top-color: #eee;
         }
         .flatpickr-calendar.arrowBottom:after {
         border-top-color: #fff;
         }
         .flatpickr-calendar:focus {
         outline: 0;
         }
         .flatpickr-wrapper {
         position: relative;
         display: inline-block;
         }
         .flatpickr-months {
         display: flex;
         }
         .flatpickr-months .flatpickr-month {
         background: transparent;
         color: #3c3f40;
         fill: #3c3f40;
         height: 28px;
         line-height: 1;
         text-align: center;
         position: relative;
         user-select: none;
         overflow: hidden;
         flex: 1;
         }
         .flatpickr-months .flatpickr-prev-month,
         .flatpickr-months .flatpickr-next-month {
         text-decoration: none;
         cursor: pointer;
         position: absolute;
         top: 0px;
         line-height: 16px;
         height: 28px;
         padding: 10px;
         z-index: 3;
         color: #3c3f40;
         fill: #3c3f40;
         }
         .flatpickr-months .flatpickr-prev-month.disabled,
         .flatpickr-months .flatpickr-next-month.disabled {
         display: none;
         }
         .flatpickr-months .flatpickr-prev-month i,
         .flatpickr-months .flatpickr-next-month i {
         position: relative;
         }
         .flatpickr-months .flatpickr-prev-month.flatpickr-prev-month,
         .flatpickr-months .flatpickr-next-month.flatpickr-prev-month {
         /*
         /*rtl:begin:ignore*/
         /*
         */
         left: 0;
         /*
         /*rtl:end:ignore*/
         /*
         */
         }
         /*
         /*rtl:begin:ignore*/
         /*
         /*rtl:end:ignore*/
         .flatpickr-months .flatpickr-prev-month.flatpickr-next-month,
         .flatpickr-months .flatpickr-next-month.flatpickr-next-month {
         /*
         /*rtl:begin:ignore*/
         /*
         */
         right: 0;
         /*
         /*rtl:end:ignore*/
         /*
         */
         }
         /*
         /*rtl:begin:ignore*/
         /*
         /*rtl:end:ignore*/
         .flatpickr-months .flatpickr-prev-month:hover,
         .flatpickr-months .flatpickr-next-month:hover {
         color: #f64747;
         }
         .flatpickr-months .flatpickr-prev-month:hover svg,
         .flatpickr-months .flatpickr-next-month:hover svg {
         fill: #f64747;
         }
         .flatpickr-months .flatpickr-prev-month svg,
         .flatpickr-months .flatpickr-next-month svg {
         width: 14px;
         height: 14px;
         }
         .flatpickr-months .flatpickr-prev-month svg path,
         .flatpickr-months .flatpickr-next-month svg path {
         transition: fill 0.1s;
         fill: inherit;
         }
         .numInputWrapper {
         position: relative;
         height: auto;
         }
         .numInputWrapper input,
         .numInputWrapper span {
         display: inline-block;
         }
         .numInputWrapper input {
         width: 100%;
         }
         .numInputWrapper input::-ms-clear {
         display: none;
         }
         .numInputWrapper input::-webkit-outer-spin-button,
         .numInputWrapper input::-webkit-inner-spin-button {
         margin: 0;
         }
         .numInputWrapper span {
         position: absolute;
         right: 0;
         width: 14px;
         padding: 0 4px 0 2px;
         height: 50%;
         line-height: 50%;
         opacity: 0;
         cursor: pointer;
         border: 1px solid rgba(64,72,72,0.15);
         box-sizing: border-box;
         }
         .numInputWrapper span:hover {
         background: rgba(0,0,0,0.1);
         }
         .numInputWrapper span:active {
         background: rgba(0,0,0,0.2);
         }
         .numInputWrapper span:after {
         display: block;
         content: "";
         position: absolute;
         }
         .numInputWrapper span.arrowUp {
         top: 0;
         border-bottom: 0;
         }
         .numInputWrapper span.arrowUp:after {
         border-left: 4px solid transparent;
         border-right: 4px solid transparent;
         border-bottom: 4px solid rgba(64,72,72,0.6);
         top: 26%;
         }
         .numInputWrapper span.arrowDown {
         top: 50%;
         }
         .numInputWrapper span.arrowDown:after {
         border-left: 4px solid transparent;
         border-right: 4px solid transparent;
         border-top: 4px solid rgba(64,72,72,0.6);
         top: 40%;
         }
         .numInputWrapper span svg {
         width: inherit;
         height: auto;
         }
         .numInputWrapper span svg path {
         fill: rgba(60,63,64,0.5);
         }
         .numInputWrapper:hover {
         background: rgba(0,0,0,0.05);
         }
         .numInputWrapper:hover span {
         opacity: 1;
         }
         .flatpickr-current-month {
         font-size: 135%;
         line-height: inherit;
         font-weight: 300;
         color: inherit;
         position: absolute;
         width: 75%;
         left: 12.5%;
         padding: 6.16px 0 0 0;
         line-height: 1;
         height: 28px;
         display: inline-block;
         text-align: center;
         transform: translate3d(0px, 0px, 0px);
         }
         .flatpickr-current-month span.cur-month {
         font-family: inherit;
         font-weight: 700;
         color: inherit;
         display: inline-block;
         margin-left: 0.5ch;
         padding: 0;
         }
         .flatpickr-current-month span.cur-month:hover {
         background: rgba(0,0,0,0.05);
         }
         .flatpickr-current-month .numInputWrapper {
         width: 6ch;
         width: 7ch\0;
         display: inline-block;
         }
         .flatpickr-current-month .numInputWrapper span.arrowUp:after {
         border-bottom-color: #3c3f40;
         }
         .flatpickr-current-month .numInputWrapper span.arrowDown:after {
         border-top-color: #3c3f40;
         }
         .flatpickr-current-month input.cur-year {
         background: transparent;
         box-sizing: border-box;
         color: inherit;
         cursor: text;
         padding: 0 0 0 0.5ch;
         margin: 0;
         display: inline-block;
         font-size: inherit;
         font-family: inherit;
         font-weight: 300;
         line-height: inherit;
         height: auto;
         border: 0;
         border-radius: 0;
         vertical-align: initial;
         -webkit-appearance: textfield;
         -moz-appearance: textfield;
         appearance: textfield;
         }
         .flatpickr-current-month input.cur-year:focus {
         outline: 0;
         }
         .flatpickr-current-month input.cur-year[disabled],
         .flatpickr-current-month input.cur-year[disabled]:hover {
         font-size: 100%;
         color: rgba(60,63,64,0.5);
         background: transparent;
         pointer-events: none;
         }
         .flatpickr-weekdays {
         background: transparent;
         text-align: center;
         overflow: hidden;
         width: 100%;
         display: flex;
         align-items: center;
         height: 28px;
         }
         .flatpickr-weekdays .flatpickr-weekdaycontainer {
         display: flex;
         flex: 1;
         }
         span.flatpickr-weekday {
         cursor: default;
         font-size: 90%;
         background: transparent;
         color: rgba(0,0,0,0.54);
         line-height: 1;
         margin: 0;
         text-align: center;
         display: block;
         flex: 1;
         font-weight: bolder;
         }
         .dayContainer,
         .flatpickr-weeks {
         padding: 1px 0 0 0;
         }
         .flatpickr-days {
         position: relative;
         overflow: hidden;
         display: flex;
         align-items: flex-start;
         width: 307.875px;
         }
         .flatpickr-days:focus {
         outline: 0;
         }
         .dayContainer {
         padding: 0;
         outline: 0;
         text-align: left;
         width: 307.875px;
         min-width: 307.875px;
         max-width: 307.875px;
         box-sizing: border-box;
         display: inline-block;
         display: -ms-flexbox;
         display: flex;
         flex-wrap: wrap;
         -ms-flex-wrap: wrap;
         -ms-flex-pack: justify;
         justify-content: space-around;
         transform: translate3d(0px, 0px, 0px);
         opacity: 1;
         }
         .dayContainer + .dayContainer {
         box-shadow: -1px 0 0 #eee;
         }
         .flatpickr-day {
         background: none;
         border: 1px solid transparent;
         border-radius: 150px;
         box-sizing: border-box;
         color: #404848;
         cursor: pointer;
         font-weight: 400;
         width: 14.2857143%;
         flex-basis: 14.2857143%;
         max-width: 39px;
         height: 39px;
         line-height: 39px;
         margin: 0;
         display: inline-block;
         position: relative;
         justify-content: center;
         text-align: center;
         }
         .flatpickr-day.inRange,
         .flatpickr-day.prevMonthDay.inRange,
         .flatpickr-day.nextMonthDay.inRange,
         .flatpickr-day.today.inRange,
         .flatpickr-day.prevMonthDay.today.inRange,
         .flatpickr-day.nextMonthDay.today.inRange,
         .flatpickr-day:hover,
         .flatpickr-day.prevMonthDay:hover,
         .flatpickr-day.nextMonthDay:hover,
         .flatpickr-day:focus,
         .flatpickr-day.prevMonthDay:focus,
         .flatpickr-day.nextMonthDay:focus {
         cursor: pointer;
         outline: 0;
         background: #e9e9e9;
         border-color: #e9e9e9;
         }
         .flatpickr-day.today {
         border-color: #f64747;
         }
         .flatpickr-day.today:hover,
         .flatpickr-day.today:focus {
         border-color: #f64747;
         background: #f64747;
         color: #fff;
         }
         .flatpickr-day.selected,
         .flatpickr-day.startRange,
         .flatpickr-day.endRange,
         .flatpickr-day.selected.inRange,
         .flatpickr-day.startRange.inRange,
         .flatpickr-day.endRange.inRange,
         .flatpickr-day.selected:focus,
         .flatpickr-day.startRange:focus,
         .flatpickr-day.endRange:focus,
         .flatpickr-day.selected:hover,
         .flatpickr-day.startRange:hover,
         .flatpickr-day.endRange:hover,
         .flatpickr-day.selected.prevMonthDay,
         .flatpickr-day.startRange.prevMonthDay,
         .flatpickr-day.endRange.prevMonthDay,
         .flatpickr-day.selected.nextMonthDay,
         .flatpickr-day.startRange.nextMonthDay,
         .flatpickr-day.endRange.nextMonthDay {
         background: #4f99ff;
         box-shadow: none;
         color: #fff;
         border-color: #4f99ff;
         }
         .flatpickr-day.selected.startRange,
         .flatpickr-day.startRange.startRange,
         .flatpickr-day.endRange.startRange {
         border-radius: 50px 0 0 50px;
         }
         .flatpickr-day.selected.endRange,
         .flatpickr-day.startRange.endRange,
         .flatpickr-day.endRange.endRange {
         border-radius: 0 50px 50px 0;
         }
         .flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)),
         .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)),
         .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
         box-shadow: -10px 0 0 #4f99ff;
         }
         .flatpickr-day.selected.startRange.endRange,
         .flatpickr-day.startRange.startRange.endRange,
         .flatpickr-day.endRange.startRange.endRange {
         border-radius: 50px;
         }
         .flatpickr-day.inRange {
         border-radius: 0;
         box-shadow: -5px 0 0 #e9e9e9, 5px 0 0 #e9e9e9;
         }
         .flatpickr-day.disabled,
         .flatpickr-day.disabled:hover,
         .flatpickr-day.prevMonthDay,
         .flatpickr-day.nextMonthDay,
         .flatpickr-day.notAllowed,
         .flatpickr-day.notAllowed.prevMonthDay,
         .flatpickr-day.notAllowed.nextMonthDay {
         color: rgba(64,72,72,0.3);
         background: transparent;
         border-color: #e9e9e9;
         cursor: default;
         }
         .flatpickr-day.disabled,
         .flatpickr-day.disabled:hover {
         cursor: not-allowed;
         color: rgba(64,72,72,0.1);
         }
         .flatpickr-day.week.selected {
         border-radius: 0;
         box-shadow: -5px 0 0 #4f99ff, 5px 0 0 #4f99ff;
         }
         .flatpickr-day.hidden {
         visibility: hidden;
         }
         .rangeMode .flatpickr-day {
         margin-top: 1px;
         }
         .flatpickr-weekwrapper {
         display: inline-block;
         }
         .flatpickr-weekwrapper .flatpickr-weeks {
         padding: 0 12px;
         box-shadow: 1px 0 0 #eee;
         }
         .flatpickr-weekwrapper .flatpickr-weekday {
         float: none;
         width: 100%;
         line-height: 28px;
         }
         .flatpickr-weekwrapper span.flatpickr-day,
         .flatpickr-weekwrapper span.flatpickr-day:hover {
         display: block;
         width: 100%;
         max-width: none;
         color: rgba(64,72,72,0.3);
         background: transparent;
         cursor: default;
         border: none;
         }
         .flatpickr-innerContainer {
         display: block;
         display: flex;
         box-sizing: border-box;
         overflow: hidden;
         }
         .flatpickr-rContainer {
         display: inline-block;
         padding: 0;
         box-sizing: border-box;
         }
         .flatpickr-time {
         text-align: center;
         outline: 0;
         display: block;
         height: 0;
         line-height: 40px;
         max-height: 40px;
         box-sizing: border-box;
         overflow: hidden;
         display: flex;
         }
         .flatpickr-time:after {
         content: "";
         display: table;
         clear: both;
         }
         .flatpickr-time .numInputWrapper {
         flex: 1;
         width: 40%;
         height: 40px;
         float: left;
         }
         .flatpickr-time .numInputWrapper span.arrowUp:after {
         border-bottom-color: #404848;
         }
         .flatpickr-time .numInputWrapper span.arrowDown:after {
         border-top-color: #404848;
         }
         .flatpickr-time.hasSeconds .numInputWrapper {
         width: 26%;
         }
         .flatpickr-time.time24hr .numInputWrapper {
         width: 49%;
         }
         .flatpickr-time input {
         background: transparent;
         box-shadow: none;
         border: 0;
         border-radius: 0;
         text-align: center;
         margin: 0;
         padding: 0;
         height: inherit;
         line-height: inherit;
         color: #404848;
         font-size: 14px;
         position: relative;
         box-sizing: border-box;
         -webkit-appearance: textfield;
         -moz-appearance: textfield;
         appearance: textfield;
         }
         .flatpickr-time input.flatpickr-hour {
         font-weight: bold;
         }
         .flatpickr-time input.flatpickr-minute,
         .flatpickr-time input.flatpickr-second {
         font-weight: 400;
         }
         .flatpickr-time input:focus {
         outline: 0;
         border: 0;
         }
         .flatpickr-time .flatpickr-time-separator,
         .flatpickr-time .flatpickr-am-pm {
         height: inherit;
         display: inline-block;
         line-height: inherit;
         color: #404848;
         font-weight: bold;
         width: 2%;
         user-select: none;
         align-self: center;
         }
         .flatpickr-time .flatpickr-am-pm {
         outline: 0;
         width: 18%;
         cursor: pointer;
         text-align: center;
         font-weight: 400;
         }
         .flatpickr-time input:hover,
         .flatpickr-time .flatpickr-am-pm:hover,
         .flatpickr-time input:focus,
         .flatpickr-time .flatpickr-am-pm:focus {
         background: #f1f1f1;
         }
         .flatpickr-input[readonly] {
         cursor: pointer;
         }
         @-moz-keyframes fpFadeInDown {
         from {
         opacity: 0;
         transform: translate3d(0, -20px, 0);
         }
         to {
         opacity: 1;
         transform: translate3d(0, 0, 0);
         }
         }
         @-webkit-keyframes fpFadeInDown {
         from {
         opacity: 0;
         transform: translate3d(0, -20px, 0);
         }
         to {
         opacity: 1;
         transform: translate3d(0, 0, 0);
         }
         }
         @-o-keyframes fpFadeInDown {
         from {
         opacity: 0;
         transform: translate3d(0, -20px, 0);
         }
         to {
         opacity: 1;
         transform: translate3d(0, 0, 0);
         }
         }
         @keyframes fpFadeInDown {
         from {
         opacity: 0;
         transform: translate3d(0, -20px, 0);
         }
         to {
         opacity: 1;
         transform: translate3d(0, 0, 0);
         }
         }
         .flatpickr-calendar {
         width: 307.875px;
         }
         .dayContainer {
         padding: 0;
         border-right: 0;
         }
         span.flatpickr-day,
         span.flatpickr-day.prevMonthDay,
         span.flatpickr-day.nextMonthDay {
         border-radius: 0 !important;
         border: 1px solid #e9e9e9;
         max-width: none;
         border-right-color: transparent;
         }
         span.flatpickr-day:nth-child(n+8),
         span.flatpickr-day.prevMonthDay:nth-child(n+8),
         span.flatpickr-day.nextMonthDay:nth-child(n+8) {
         border-top-color: transparent;
         }
         span.flatpickr-day:nth-child(7n-6),
         span.flatpickr-day.prevMonthDay:nth-child(7n-6),
         span.flatpickr-day.nextMonthDay:nth-child(7n-6) {
         border-left: 0;
         }
         span.flatpickr-day:nth-child(n+36),
         span.flatpickr-day.prevMonthDay:nth-child(n+36),
         span.flatpickr-day.nextMonthDay:nth-child(n+36) {
         border-bottom: 0;
         }
         span.flatpickr-day:nth-child(-n+7),
         span.flatpickr-day.prevMonthDay:nth-child(-n+7),
         span.flatpickr-day.nextMonthDay:nth-child(-n+7) {
         margin-top: 0;
         }
         span.flatpickr-day.today:not(.selected),
         span.flatpickr-day.prevMonthDay.today:not(.selected),
         span.flatpickr-day.nextMonthDay.today:not(.selected) {
         border-color: #e9e9e9;
         border-right-color: transparent;
         border-top-color: transparent;
         border-bottom-color: #f64747;
         }
         span.flatpickr-day.today:not(.selected):hover,
         span.flatpickr-day.prevMonthDay.today:not(.selected):hover,
         span.flatpickr-day.nextMonthDay.today:not(.selected):hover {
         border: 1px solid #f64747;
         }
         span.flatpickr-day.startRange,
         span.flatpickr-day.prevMonthDay.startRange,
         span.flatpickr-day.nextMonthDay.startRange,
         span.flatpickr-day.endRange,
         span.flatpickr-day.prevMonthDay.endRange,
         span.flatpickr-day.nextMonthDay.endRange {
         border-color: #4f99ff;
         }
         span.flatpickr-day.today,
         span.flatpickr-day.prevMonthDay.today,
         span.flatpickr-day.nextMonthDay.today,
         span.flatpickr-day.selected,
         span.flatpickr-day.prevMonthDay.selected,
         span.flatpickr-day.nextMonthDay.selected {
         z-index: 2;
         }
         .rangeMode .flatpickr-day {
         margin-top: -1px;
         }
         .flatpickr-weekwrapper .flatpickr-weeks {
         box-shadow: none;
         }
         .flatpickr-weekwrapper span.flatpickr-day {
         border: 0;
         margin: -1px 0 0 -1px;
         }
         .hasWeeks .flatpickr-days {
         border-right: 0;
         }
      </style>
      <script async="" src="https://script.hotjar.com/modules.f1e65ef904544a33c6d0.js" charset="utf-8"></script>
      <style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
   </head>
   <body class="theme-desktop light">
      <iframe id="_hjSafeContext_24217456" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
      <div id="paymentpage-container">
      <div id="desktop-container">
      <div class="content-container">
         <div class="content">
            <div id="header-details">
               <div id="header-logo"><img src="assets/images/logo.png" alt="LOGO"></div>
               <div id="merchant-name">SOLVIT</div>
            </div>
            <div data-view-id="1" id="main-view" class="slider-view">
               <!---->
               <div class="title">
                  <a slot="before" href="#" class="back-btn" type="button"></a><!---->
                  Payment Details
                  <div class="title-underline"></div>
               </div>
               <div id="form-section" class="">
                  <form class="UI-form " novalidate="">
                     <div>
                        <div class="Field Field--required">
                           <div class="Field-label">Email id
                           </div>
                           <div class="Field-content">
                              <div class="Field-wrapper"><span class="Field-addon "></span>
                                 <input class="Field-el" name="email_id" required="" type="text">
                                 <span class="Field-addon "></span>
                              </div>
                              <div class="Field-error"></div>
                              <div class="Field-description"></div>
                           </div>
                        </div>
                        <!---->
                        <div class="Field Field--required">
                           <div class="Field-label">Mobile No
                           </div>
                           <div class="Field-content">
                              <div class="Field-wrapper"><span class="Field-addon "></span>
                                 <input class="Field-el" name="mobile_no" required="" type="tel" minlength="8">
                                 <span class="Field-addon "></span>
                              </div>
                              <div class="Field-error"></div>
                              <div class="Field-description"></div>
                           </div>
                        </div>
                        <!---->
                        <div class="Field Field--required">
                           <div class="Field-label">Full Name
                           </div>
                           <div class="Field-content">
                              <div class="Field-wrapper"><span class="Field-addon "></span>
                                 <input class="Field-el" name="full_name" required="" type="text">
                                 <span class="Field-addon "></span>
                              </div>
                              <div class="Field-error"></div>
                              <div class="Field-description"></div>
                           </div>
                        </div>
                        <!---->
                        <div class="Field Field--required">
                           <div class="Field-label">Customer id
                           </div>
                           <div class="Field-content">
                              <div class="Field-wrapper"><span class="Field-addon "></span>
                                 <input class="Field-el" name="customer_id" required="" type="text">
                                 <span class="Field-addon "></span>
                              </div>
                              <div class="Field-error"></div>
                              <div class="Field-description"></div>
                           </div>
                        </div>
                        <!---->
                        <div>
                           <div class="Field Field--required Field--amount Field--currency-1">
                              <div class="Field-label">Amount
                              </div>
                              <div class="Field-content">
                                 <div class="Field-wrapper"><span class="Field-addon Field-addon--before"><span slot="addonBefore">
                                    <b class="currency-symbol">₹</b></span></span>
                                    <input class="Field-el" type="number" placeholder="Enter Amount" required="">
                                    <span class="Field-addon Field-addon--after"><span slot="addonAfter" style="color: red; font-size: 12px;"></span></span>
                                 </div>
                                 <div class="Field-error"></div>
                                 <div class="Field-description"></div>
                              </div>
                           </div>
                        </div>
                        <!----><!---->
                     </div>
                     <!---->
                     <div slot="after">
                        <div id="form-footer" class="">
                           <div class="form-footer-payment">
                              <img id="fin-logo" alt="pay-methods" src="https://cdn.razorpay.com/static/assets/pay_methods_branding.png" width="180" height="10">
                              <button type="submit" class="btn btn--gradient" style="background-color: #4CAF50";>Pay<span style="margin-left: 4px;">₹ 0.00</span></button><!---->
                           </div>
                        </div>
                     </div>
                  </form>
                  <!---->
               </div>
            </div>
            <div id="details-view" class="">
               <div id="details-section">
                  <div id="description-details">
                     <div class="title title--big">
                        Leopro Mobile &amp; Laptop Care
                        <div class="title-underline"></div>
                     </div>
                     <!-- <div id="description" class="details-value text-line">
                        <div id="description-quill" class="ql-container ql-snow ql-disabled">
                           <div class="ql-editor" data-gramm="false" contenteditable="false">
                              <h2><br></h2>
                           </div>
                           <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                        </div>
                     </div> -->
                  <!-- </div> -->
                  <div id="share-details">
                     <label>Share this on:</label><!---->
                     <div class="share-icons"><a><span class="facebook"></span></a>
                        <a><span class="twitter"></span></a>
                        <a><span class="whatsapp"></span></a>
                     </div>
                  </div>
                  <div id="support-details">
                     <label>Contact Us:</label>
                     <div class="sub-detail">
                        <a href="mailto:support@leosolv.in?subject=Query for Payment Page Id: pl_DnrgwY2TZcr9Z3" target="_blank" rel="noopener noreferrer">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                              <path d="M0 0h24v24H0z" fill="none"></path>
                           </svg>
                           <div>          </div>
                        </a>
                     </div>
                     <br>
                     <div id="terms-details">
                        <label>Terms &amp; Conditions:</label>
                        <div class="details-value text-wrap">
                           <div class="terms-details-tnc">You agree to share information entered on this page with leopro (owner of this page) and Razorpay, adhering to applicable laws.</div>
                        </div>
                     </div>
                     <div class="details-footer ">
                        <div class="details-footer-top"><img id="rzp-logo" alt="rzp-logo" src="https://cdn.razorpay.com/logo.svg" width="98" height="21"></div>
                        <div class="details-footer-bottom">
                           Want to create page like this for your Business? Visit 
                           <a href="https://razorpay.com/payment-pages/?utm_source=hostedpage&amp;utm_medium=footer&amp;utm_campaign=paymentpage" target="_blank" rel="noopener noreferrer">
                              Razorpay Payment Pages 
                              <span class="Icon undefined" id="undefined">
                                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.83301 1.24998C5.83301 1.01986 6.01956 0.833313 6.24967 0.833313H8.74967C8.97979 0.833313 9.16634 1.01986 9.16634 1.24998V3.74998C9.16634 3.9801 8.97979 4.16665 8.74967 4.16665C8.51956 4.16665 8.33301 3.9801 8.33301 3.74998V2.2559L4.46097 6.12794C4.29825 6.29066 4.03443 6.29066 3.87171 6.12794C3.709 5.96522 3.709 5.7014 3.87171 5.53869L7.74375 1.66665H6.24967C6.01956 1.66665 5.83301 1.4801 5.83301 1.24998Z" fill="#2B83EA"></path>
                                    <path d="M2.08301 2.91665C1.85289 2.91665 1.66634 3.10319 1.66634 3.33331V7.91665C1.66634 8.14677 1.85289 8.33331 2.08301 8.33331H6.66634C6.89646 8.33331 7.08301 8.14677 7.08301 7.91665V5.41665C7.08301 5.18653 7.26956 4.99998 7.49967 4.99998C7.72979 4.99998 7.91634 5.18653 7.91634 5.41665V7.91665C7.91634 8.607 7.3567 9.16665 6.66634 9.16665H2.08301C1.39265 9.16665 0.833008 8.607 0.833008 7.91665V3.33331C0.833008 2.64296 1.39265 2.08331 2.08301 2.08331H4.58301C4.81313 2.08331 4.99967 2.26986 4.99967 2.49998C4.99967 2.7301 4.81313 2.91665 4.58301 2.91665H2.08301Z" fill="#2B83EA"></path>
                                 </svg>
                              </span>
                           </a>
                           to get started!
                           <div class="details-footer-bottom-actions">
                              <a href="https://razorpay.com/support/payments/report-merchant/?e=cGxfRG5yZ3dZMlRaY3I5WjM=&amp;s=aG9zdGVk" target="_blank" rel="noopener noreferrer" class="report-message black-link-text">
                                 <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 0.5C2.35404 0.5 1.84435 0.589692 1.46165 0.7108C1.09364 0.827257 0.809027 0.983866 0.646447 1.14645C0.552678 1.24021 0.5 1.36739 0.5 1.5V11C0.5 11.2761 0.723858 11.5 1 11.5C1.27614 11.5 1.5 11.2761 1.5 11V7.76687C1.5669 7.73449 1.65416 7.69875 1.76335 7.6642C2.03899 7.57698 2.44596 7.5 3 7.5C3.64035 7.5 4.18026 7.71062 4.8143 7.96424L4.84216 7.97538C5.44654 8.21721 6.14152 8.4953 6.97874 8.49994C7.33253 8.52617 7.78761 8.42323 8.15649 8.31865C8.55707 8.20509 8.94785 8.06172 9.18958 7.96267C9.37735 7.88572 9.5 7.70292 9.5 7.5V1.5C9.5 1.3078 9.38983 1.13261 9.21659 1.04935C9.04336 0.966088 8.83774 0.989498 8.68765 1.10957C8.53266 1.23356 8.25354 1.33939 7.90194 1.40971C7.56429 1.47724 7.22268 1.5 7 1.5C6.35965 1.5 5.81974 1.28938 5.1857 1.03576L5.15784 1.02462C4.54835 0.780742 3.84672 0.5 3 0.5Z" fill="#536582" fill-opacity="0.87"></path>
                                 </svg>
                                 Report Page
                              </a>
                              <!---->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include 'footer.php';?>