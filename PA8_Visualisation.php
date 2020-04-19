<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />

<title>PA8_Visualisation</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>



<style type="text/css">
    /*!
*
* Twitter Bootstrap
*
*/
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot');
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 1.42857143;
  color: #000;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 3px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 18px;
  margin-bottom: 9px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 9px;
  margin-bottom: 9px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 33px;
}
h2,
.h2 {
  font-size: 27px;
}
h3,
.h3 {
  font-size: 23px;
}
h4,
.h4 {
  font-size: 17px;
}
h5,
.h5 {
  font-size: 13px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 19.5px;
  }
}
small,
.small {
  font-size: 92%;
}
mark,
.mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 9px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 541px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  font-size: inherit;
  border-left: 5px solid #eeeeee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 2px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #888;
  background-color: transparent;
  border-radius: 1px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 2px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
@media (min-width: 768px) {
  .container {
    width: 768px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 940px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1140px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
.row {
  margin-left: 0px;
  margin-right: 0px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 0px;
  padding-right: 0px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 18px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 13.5px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  border: 0;
  background-color: transparent;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eeeeee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 32px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 45px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 18px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 31px;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 30px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-lg {
  height: 45px;
  line-height: 45px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.form-group-lg select.form-control {
  height: 45px;
  line-height: 45px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 45px;
  min-height: 35px;
  padding: 11px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 40px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 45px;
  height: 45px;
  line-height: 45px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 23px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #404040;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 25px;
}
.form-horizontal .form-group {
  margin-left: 0px;
  margin-right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 17px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  border-radius: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 2px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 541px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  line-height: 45px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 2px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 1px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 17px;
  border-radius: 3px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #777777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 2px 2px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 2px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 30px;
  margin-bottom: 18px;
  border: 1px solid transparent;
}
@media (min-width: 541px) {
  .navbar {
    border-radius: 2px;
  }
}
@media (min-width: 541px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 0px;
  padding-left: 0px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 541px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 540px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: 0px;
  margin-left: 0px;
}
@media (min-width: 541px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 541px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 541px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 6px 0px;
  font-size: 17px;
  line-height: 18px;
  height: 30px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 541px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 0px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 0px;
  padding: 9px 10px;
  margin-top: -2px;
  margin-bottom: -2px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 2px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 541px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 3px 0px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 18px;
}
@media (max-width: 540px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 18px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 541px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 6px;
    padding-bottom: 6px;
  }
}
.navbar-form {
  margin-left: 0px;
  margin-right: 0px;
  padding: 10px 0px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: -1px;
  margin-bottom: -1px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 540px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 541px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: -1px;
  margin-bottom: -1px;
}
.navbar-btn.btn-sm {
  margin-top: 0px;
  margin-bottom: 0px;
}
.navbar-btn.btn-xs {
  margin-top: 4px;
  margin-bottom: 4px;
}
.navbar-text {
  margin-top: 6px;
  margin-bottom: 6px;
}
@media (min-width: 541px) {
  .navbar-text {
    float: left;
    margin-left: 0px;
    margin-right: 0px;
  }
}
@media (min-width: 541px) {
  .navbar-left {
    float: left !important;
    float: left;
  }
  .navbar-right {
    float: right !important;
    float: right;
    margin-right: 0px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 540px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #fff;
}
@media (max-width: 540px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 2px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #5e5e5e;
}
.breadcrumb > .active {
  color: #777777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 2px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 1px;
  border-top-left-radius: 1px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 1px;
  border-top-right-radius: 1px;
}
.pager {
  padding-left: 0;
  margin: 18px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777777;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  line-height: 1;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 3px;
  padding-left: 0px;
  padding-right: 0px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 59px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 18px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #000;
}
.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 2px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: #f5f5f5;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 18px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  zoom: 1;
  overflow: hidden;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 18px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 2px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 1px;
  border-top-right-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 1px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 1px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 18px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 2px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 3px;
}
.well-sm {
  padding: 9px;
  border-radius: 1px;
}
.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 12px;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 2px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 13px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 13px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 2px 2px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -moz-transition: -moz-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    -moz-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  margin-top: -10px;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  line-height: 1;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after,
.item_buttons:before,
.item_buttons:after {
  content: " ";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after,
.item_buttons:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*!
*
* Font Awesome
*
*/
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../components/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../components/font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../components/font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../components/font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-handshake-o:before {
  content: "\f2b5";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-o:before {
  content: "\f2b7";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-book-o:before {
  content: "\f2ba";
}
.fa-vcard:before,
.fa-address-card:before {
  content: "\f2bb";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: "\f2bc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-circle-o:before {
  content: "\f2be";
}
.fa-user-o:before {
  content: "\f2c0";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: "\f2c3";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: "\f2cd";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f2d3";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: "\f2d4";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-eercast:before {
  content: "\f2da";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-snowflake-o:before {
  content: "\f2dc";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-meetup:before {
  content: "\f2e0";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
/*!
*
* IPython base
*
*/
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
code {
  color: #000;
}
pre {
  font-size: inherit;
  line-height: inherit;
}
label {
  font-weight: normal;
}
/* Make the page background atleast 100% the height of the view port */
/* Make the page itself atleast 70% the height of the view port */
.border-box-sizing {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.corner-all {
  border-radius: 2px;
}
.no-padding {
  padding: 0px;
}
/* Flexible box model classes */
/* Taken from Alex Russell http://infrequently.org/2009/08/css-3-progress/ */
/* This file is a compatability layer.  It allows the usage of flexible box 
model layouts accross multiple browsers, including older browsers.  The newest,
universal implementation of the flexible box model is used when available (see
`Modern browsers` comments below).  Browsers that are known to implement this 
new spec completely include:

    Firefox 28.0+
    Chrome 29.0+
    Internet Explorer 11+ 
    Opera 17.0+

Browsers not listed, including Safari, are supported via the styling under the
`Old browsers` comments below.
*/
.hbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
.hbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.vbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
.vbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.hbox.reverse,
.vbox.reverse,
.reverse {
  /* Old browsers */
  -webkit-box-direction: reverse;
  -moz-box-direction: reverse;
  box-direction: reverse;
  /* Modern browsers */
  flex-direction: row-reverse;
}
.hbox.box-flex0,
.vbox.box-flex0,
.box-flex0 {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
  width: auto;
}
.hbox.box-flex1,
.vbox.box-flex1,
.box-flex1 {
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex,
.vbox.box-flex,
.box-flex {
  /* Old browsers */
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex2,
.vbox.box-flex2,
.box-flex2 {
  /* Old browsers */
  -webkit-box-flex: 2;
  -moz-box-flex: 2;
  box-flex: 2;
  /* Modern browsers */
  flex: 2;
}
.box-group1 {
  /*  Deprecated */
  -webkit-box-flex-group: 1;
  -moz-box-flex-group: 1;
  box-flex-group: 1;
}
.box-group2 {
  /* Deprecated */
  -webkit-box-flex-group: 2;
  -moz-box-flex-group: 2;
  box-flex-group: 2;
}
.hbox.start,
.vbox.start,
.start {
  /* Old browsers */
  -webkit-box-pack: start;
  -moz-box-pack: start;
  box-pack: start;
  /* Modern browsers */
  justify-content: flex-start;
}
.hbox.end,
.vbox.end,
.end {
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
}
.hbox.center,
.vbox.center,
.center {
  /* Old browsers */
  -webkit-box-pack: center;
  -moz-box-pack: center;
  box-pack: center;
  /* Modern browsers */
  justify-content: center;
}
.hbox.baseline,
.vbox.baseline,
.baseline {
  /* Old browsers */
  -webkit-box-pack: baseline;
  -moz-box-pack: baseline;
  box-pack: baseline;
  /* Modern browsers */
  justify-content: baseline;
}
.hbox.stretch,
.vbox.stretch,
.stretch {
  /* Old browsers */
  -webkit-box-pack: stretch;
  -moz-box-pack: stretch;
  box-pack: stretch;
  /* Modern browsers */
  justify-content: stretch;
}
.hbox.align-start,
.vbox.align-start,
.align-start {
  /* Old browsers */
  -webkit-box-align: start;
  -moz-box-align: start;
  box-align: start;
  /* Modern browsers */
  align-items: flex-start;
}
.hbox.align-end,
.vbox.align-end,
.align-end {
  /* Old browsers */
  -webkit-box-align: end;
  -moz-box-align: end;
  box-align: end;
  /* Modern browsers */
  align-items: flex-end;
}
.hbox.align-center,
.vbox.align-center,
.align-center {
  /* Old browsers */
  -webkit-box-align: center;
  -moz-box-align: center;
  box-align: center;
  /* Modern browsers */
  align-items: center;
}
.hbox.align-baseline,
.vbox.align-baseline,
.align-baseline {
  /* Old browsers */
  -webkit-box-align: baseline;
  -moz-box-align: baseline;
  box-align: baseline;
  /* Modern browsers */
  align-items: baseline;
}
.hbox.align-stretch,
.vbox.align-stretch,
.align-stretch {
  /* Old browsers */
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  box-align: stretch;
  /* Modern browsers */
  align-items: stretch;
}
div.error {
  margin: 2em;
  text-align: center;
}
div.error > h1 {
  font-size: 500%;
  line-height: normal;
}
div.error > p {
  font-size: 200%;
  line-height: normal;
}
div.traceback-wrapper {
  text-align: left;
  max-width: 800px;
  margin: auto;
}
div.traceback-wrapper pre.traceback {
  max-height: 600px;
  overflow: auto;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
body {
  background-color: #fff;
  /* This makes sure that the body covers the entire window and needs to
       be in a different element than the display: box in wrapper below */
  position: absolute;
  left: 0px;
  right: 0px;
  top: 0px;
  bottom: 0px;
  overflow: visible;
}
body > #header {
  /* Initially hidden to prevent FLOUC */
  display: none;
  background-color: #fff;
  /* Display over codemirror */
  position: relative;
  z-index: 100;
}
body > #header #header-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 5px;
  padding-bottom: 5px;
  padding-top: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
body > #header .header-bar {
  width: 100%;
  height: 1px;
  background: #e7e7e7;
  margin-bottom: -1px;
}
@media print {
  body > #header {
    display: none !important;
  }
}
#header-spacer {
  width: 100%;
  visibility: hidden;
}
@media print {
  #header-spacer {
    display: none;
  }
}
#ipython_notebook {
  padding-left: 0px;
  padding-top: 1px;
  padding-bottom: 1px;
}
[dir="rtl"] #ipython_notebook {
  margin-right: 10px;
  margin-left: 0;
}
[dir="rtl"] #ipython_notebook.pull-left {
  float: right !important;
  float: right;
}
.flex-spacer {
  flex: 1;
}
#noscript {
  width: auto;
  padding-top: 16px;
  padding-bottom: 16px;
  text-align: center;
  font-size: 22px;
  color: red;
  font-weight: bold;
}
#ipython_notebook img {
  height: 28px;
}
#site {
  width: 100%;
  display: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  overflow: auto;
}
@media print {
  #site {
    height: auto !important;
  }
}
/* Smaller buttons */
.ui-button .ui-button-text {
  padding: 0.2em 0.8em;
  font-size: 77%;
}
input.ui-button {
  padding: 0.3em 0.9em;
}
span#kernel_logo_widget {
  margin: 0 10px;
}
span#login_widget {
  float: right;
}
[dir="rtl"] span#login_widget {
  float: left;
}
span#login_widget > .button,
#logout {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button:focus,
#logout:focus,
span#login_widget > .button.focus,
#logout.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
span#login_widget > .button:hover,
#logout:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active:hover,
#logout:active:hover,
span#login_widget > .button.active:hover,
#logout.active:hover,
.open > .dropdown-togglespan#login_widget > .button:hover,
.open > .dropdown-toggle#logout:hover,
span#login_widget > .button:active:focus,
#logout:active:focus,
span#login_widget > .button.active:focus,
#logout.active:focus,
.open > .dropdown-togglespan#login_widget > .button:focus,
.open > .dropdown-toggle#logout:focus,
span#login_widget > .button:active.focus,
#logout:active.focus,
span#login_widget > .button.active.focus,
#logout.active.focus,
.open > .dropdown-togglespan#login_widget > .button.focus,
.open > .dropdown-toggle#logout.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  background-image: none;
}
span#login_widget > .button.disabled:hover,
#logout.disabled:hover,
span#login_widget > .button[disabled]:hover,
#logout[disabled]:hover,
fieldset[disabled] span#login_widget > .button:hover,
fieldset[disabled] #logout:hover,
span#login_widget > .button.disabled:focus,
#logout.disabled:focus,
span#login_widget > .button[disabled]:focus,
#logout[disabled]:focus,
fieldset[disabled] span#login_widget > .button:focus,
fieldset[disabled] #logout:focus,
span#login_widget > .button.disabled.focus,
#logout.disabled.focus,
span#login_widget > .button[disabled].focus,
#logout[disabled].focus,
fieldset[disabled] span#login_widget > .button.focus,
fieldset[disabled] #logout.focus {
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button .badge,
#logout .badge {
  color: #fff;
  background-color: #333;
}
.nav-header {
  text-transform: none;
}
#header > span {
  margin-top: 10px;
}
.modal_stretch .modal-dialog {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  min-height: 80vh;
}
.modal_stretch .modal-dialog .modal-body {
  max-height: calc(100vh - 200px);
  overflow: auto;
  flex: 1;
}
.modal-header {
  cursor: move;
}
@media (min-width: 768px) {
  .modal .modal-dialog {
    width: 700px;
  }
}
@media (min-width: 768px) {
  select.form-control {
    margin-left: 12px;
    margin-right: 12px;
  }
}
/*!
*
* IPython auth
*
*/
.center-nav {
  display: inline-block;
  margin-bottom: -4px;
}
[dir="rtl"] .center-nav form.pull-left {
  float: right !important;
  float: right;
}
[dir="rtl"] .center-nav .navbar-text {
  float: right;
}
[dir="rtl"] .navbar-inner {
  text-align: right;
}
[dir="rtl"] div.text-left {
  text-align: right;
}
/*!
*
* IPython tree view
*
*/
/* We need an invisible input field on top of the sentense*/
/* "Drag file onto the list ..." */
.alternate_upload {
  background-color: none;
  display: inline;
}
.alternate_upload.form {
  padding: 0;
  margin: 0;
}
.alternate_upload input.fileinput {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  overflow: hidden;
  cursor: pointer;
  opacity: 0;
  z-index: 2;
}
.alternate_upload .btn-xs > input.fileinput {
  margin: -1px -5px;
}
.alternate_upload .btn-upload {
  position: relative;
  height: 22px;
}
::-webkit-file-upload-button {
  cursor: pointer;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
ul#tabs {
  margin-bottom: 4px;
}
ul#tabs a {
  padding-top: 6px;
  padding-bottom: 4px;
}
[dir="rtl"] ul#tabs.nav-tabs > li {
  float: right;
}
[dir="rtl"] ul#tabs.nav.nav-tabs {
  padding-right: 0;
}
ul.breadcrumb a:focus,
ul.breadcrumb a:hover {
  text-decoration: none;
}
ul.breadcrumb i.icon-home {
  font-size: 16px;
  margin-right: 4px;
}
ul.breadcrumb span {
  color: #5e5e5e;
}
.list_toolbar {
  padding: 4px 0 4px 0;
  vertical-align: middle;
}
.list_toolbar .tree-buttons {
  padding-top: 1px;
}
[dir="rtl"] .list_toolbar .tree-buttons .pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .list_toolbar .col-sm-4,
[dir="rtl"] .list_toolbar .col-sm-8 {
  float: right;
}
.dynamic-buttons {
  padding-top: 3px;
  display: inline-block;
}
.list_toolbar [class*="span"] {
  min-height: 24px;
}
.list_header {
  font-weight: bold;
  background-color: #EEE;
}
.list_placeholder {
  font-weight: bold;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
}
.list_container {
  margin-top: 4px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 2px;
}
.list_container > div {
  border-bottom: 1px solid #ddd;
}
.list_container > div:hover .list-item {
  background-color: red;
}
.list_container > div:last-child {
  border: none;
}
.list_item:hover .list_item {
  background-color: #ddd;
}
.list_item a {
  text-decoration: none;
}
.list_item:hover {
  background-color: #fafafa;
}
.list_header > div,
.list_item > div {
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
.list_header > div input,
.list_item > div input {
  margin-right: 7px;
  margin-left: 14px;
  vertical-align: text-bottom;
  line-height: 22px;
  position: relative;
  top: -1px;
}
.list_header > div .item_link,
.list_item > div .item_link {
  margin-left: -1px;
  vertical-align: baseline;
  line-height: 22px;
}
[dir="rtl"] .list_item > div input {
  margin-right: 0;
}
.new-file input[type=checkbox] {
  visibility: hidden;
}
.item_name {
  line-height: 22px;
  height: 24px;
}
.item_icon {
  font-size: 14px;
  color: #5e5e5e;
  margin-right: 7px;
  margin-left: 7px;
  line-height: 22px;
  vertical-align: baseline;
}
.item_modified {
  margin-right: 7px;
  margin-left: 7px;
}
[dir="rtl"] .item_modified.pull-right {
  float: left !important;
  float: left;
}
.item_buttons {
  line-height: 1em;
  margin-left: -5px;
}
.item_buttons .btn,
.item_buttons .btn-group,
.item_buttons .input-group {
  float: left;
}
.item_buttons > .btn,
.item_buttons > .btn-group,
.item_buttons > .input-group {
  margin-left: 5px;
}
.item_buttons .btn {
  min-width: 13ex;
}
.item_buttons .running-indicator {
  padding-top: 4px;
  color: #5cb85c;
}
.item_buttons .kernel-name {
  padding-top: 4px;
  color: #5bc0de;
  margin-right: 7px;
  float: left;
}
[dir="rtl"] .item_buttons.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .item_buttons .kernel-name {
  margin-left: 7px;
  float: right;
}
.toolbar_info {
  height: 24px;
  line-height: 24px;
}
.list_item input:not([type=checkbox]) {
  padding-top: 3px;
  padding-bottom: 3px;
  height: 22px;
  line-height: 14px;
  margin: 0px;
}
.highlight_text {
  color: blue;
}
#project_name {
  display: inline-block;
  padding-left: 7px;
  margin-left: -2px;
}
#project_name > .breadcrumb {
  padding: 0px;
  margin-bottom: 0px;
  background-color: transparent;
  font-weight: bold;
}
.sort_button {
  display: inline-block;
  padding-left: 7px;
}
[dir="rtl"] .sort_button.pull-right {
  float: left !important;
  float: left;
}
#tree-selector {
  padding-right: 0px;
}
#button-select-all {
  min-width: 50px;
}
[dir="rtl"] #button-select-all.btn {
  float: right ;
}
#select-all {
  margin-left: 7px;
  margin-right: 2px;
  margin-top: 2px;
  height: 16px;
}
[dir="rtl"] #select-all.pull-left {
  float: right !important;
  float: right;
}
.menu_icon {
  margin-right: 2px;
}
.tab-content .row {
  margin-left: 0px;
  margin-right: 0px;
}
.folder_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f114";
}
.folder_icon:before.fa-pull-left {
  margin-right: .3em;
}
.folder_icon:before.fa-pull-right {
  margin-left: .3em;
}
.folder_icon:before.pull-left {
  margin-right: .3em;
}
.folder_icon:before.pull-right {
  margin-left: .3em;
}
.notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
}
.notebook_icon:before.fa-pull-left {
  margin-right: .3em;
}
.notebook_icon:before.fa-pull-right {
  margin-left: .3em;
}
.notebook_icon:before.pull-left {
  margin-right: .3em;
}
.notebook_icon:before.pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
  color: #5cb85c;
}
.running_notebook_icon:before.fa-pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.fa-pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before.pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.pull-right {
  margin-left: .3em;
}
.file_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f016";
  position: relative;
  top: -2px;
}
.file_icon:before.fa-pull-left {
  margin-right: .3em;
}
.file_icon:before.fa-pull-right {
  margin-left: .3em;
}
.file_icon:before.pull-left {
  margin-right: .3em;
}
.file_icon:before.pull-right {
  margin-left: .3em;
}
#notebook_toolbar .pull-right {
  padding-top: 0px;
  margin-right: -1px;
}
ul#new-menu {
  left: auto;
  right: 0;
}
#new-menu .dropdown-header {
  font-size: 10px;
  border-bottom: 1px solid #e5e5e5;
  padding: 0 0 3px;
  margin: -3px 20px 0;
}
.kernel-menu-icon {
  padding-right: 12px;
  width: 24px;
  content: "\f096";
}
.kernel-menu-icon:before {
  content: "\f096";
}
.kernel-menu-icon-current:before {
  content: "\f00c";
}
#tab_content {
  padding-top: 20px;
}
#running .panel-group .panel {
  margin-top: 3px;
  margin-bottom: 1em;
}
#running .panel-group .panel .panel-heading {
  background-color: #EEE;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
#running .panel-group .panel .panel-heading a:focus,
#running .panel-group .panel .panel-heading a:hover {
  text-decoration: none;
}
#running .panel-group .panel .panel-body {
  padding: 0px;
}
#running .panel-group .panel .panel-body .list_container {
  margin-top: 0px;
  margin-bottom: 0px;
  border: 0px;
  border-radius: 0px;
}
#running .panel-group .panel .panel-body .list_container .list_item {
  border-bottom: 1px solid #ddd;
}
#running .panel-group .panel .panel-body .list_container .list_item:last-child {
  border-bottom: 0px;
}
.delete-button {
  display: none;
}
.duplicate-button {
  display: none;
}
.rename-button {
  display: none;
}
.move-button {
  display: none;
}
.download-button {
  display: none;
}
.shutdown-button {
  display: none;
}
.dynamic-instructions {
  display: inline-block;
  padding-top: 4px;
}
/*!
*
* IPython text editor webapp
*
*/
.selected-keymap i.fa {
  padding: 0px 5px;
}
.selected-keymap i.fa:before {
  content: "\f00c";
}
#mode-menu {
  overflow: auto;
  max-height: 20em;
}
.edit_app #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.edit_app #menubar .navbar {
  /* Use a negative 1 bottom margin, so the border overlaps the border of the
    header */
  margin-bottom: -1px;
}
.dirty-indicator {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator.pull-left {
  margin-right: .3em;
}
.dirty-indicator.pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-dirty.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty.pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-clean.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00c";
}
.dirty-indicator-clean:before.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.pull-right {
  margin-left: .3em;
}
#filename {
  font-size: 16pt;
  display: table;
  padding: 0px 5px;
}
#current-mode {
  padding-left: 5px;
  padding-right: 5px;
}
#texteditor-backdrop {
  padding-top: 20px;
  padding-bottom: 20px;
}
@media not print {
  #texteditor-backdrop {
    background-color: #EEE;
  }
}
@media print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container {
    padding: 0px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
.CodeMirror-dialog {
  background-color: #fff;
}
/*!
*
* IPython notebook
*
*/
/* CSS font colors for translated ANSI escape sequences */
/* The color values are a mix of
   http://www.xcolors.net/dl/baskerville-ivorylight and
   http://www.xcolors.net/dl/euphrasia */
.ansi-black-fg {
  color: #3E424D;
}
.ansi-black-bg {
  background-color: #3E424D;
}
.ansi-black-intense-fg {
  color: #282C36;
}
.ansi-black-intense-bg {
  background-color: #282C36;
}
.ansi-red-fg {
  color: #E75C58;
}
.ansi-red-bg {
  background-color: #E75C58;
}
.ansi-red-intense-fg {
  color: #B22B31;
}
.ansi-red-intense-bg {
  background-color: #B22B31;
}
.ansi-green-fg {
  color: #00A250;
}
.ansi-green-bg {
  background-color: #00A250;
}
.ansi-green-intense-fg {
  color: #007427;
}
.ansi-green-intense-bg {
  background-color: #007427;
}
.ansi-yellow-fg {
  color: #DDB62B;
}
.ansi-yellow-bg {
  background-color: #DDB62B;
}
.ansi-yellow-intense-fg {
  color: #B27D12;
}
.ansi-yellow-intense-bg {
  background-color: #B27D12;
}
.ansi-blue-fg {
  color: #208FFB;
}
.ansi-blue-bg {
  background-color: #208FFB;
}
.ansi-blue-intense-fg {
  color: #0065CA;
}
.ansi-blue-intense-bg {
  background-color: #0065CA;
}
.ansi-magenta-fg {
  color: #D160C4;
}
.ansi-magenta-bg {
  background-color: #D160C4;
}
.ansi-magenta-intense-fg {
  color: #A03196;
}
.ansi-magenta-intense-bg {
  background-color: #A03196;
}
.ansi-cyan-fg {
  color: #60C6C8;
}
.ansi-cyan-bg {
  background-color: #60C6C8;
}
.ansi-cyan-intense-fg {
  color: #258F8F;
}
.ansi-cyan-intense-bg {
  background-color: #258F8F;
}
.ansi-white-fg {
  color: #C5C1B4;
}
.ansi-white-bg {
  background-color: #C5C1B4;
}
.ansi-white-intense-fg {
  color: #A1A6B2;
}
.ansi-white-intense-bg {
  background-color: #A1A6B2;
}
.ansi-default-inverse-fg {
  color: #FFFFFF;
}
.ansi-default-inverse-bg {
  background-color: #000000;
}
.ansi-bold {
  font-weight: bold;
}
.ansi-underline {
  text-decoration: underline;
}
/* The following styles are deprecated an will be removed in a future version */
.ansibold {
  font-weight: bold;
}
.ansi-inverse {
  outline: 0.5px dotted;
}
/* use dark versions for foreground, to improve visibility */
.ansiblack {
  color: black;
}
.ansired {
  color: darkred;
}
.ansigreen {
  color: darkgreen;
}
.ansiyellow {
  color: #c4a000;
}
.ansiblue {
  color: darkblue;
}
.ansipurple {
  color: darkviolet;
}
.ansicyan {
  color: steelblue;
}
.ansigray {
  color: gray;
}
/* and light for background, for the same reason */
.ansibgblack {
  background-color: black;
}
.ansibgred {
  background-color: red;
}
.ansibggreen {
  background-color: green;
}
.ansibgyellow {
  background-color: yellow;
}
.ansibgblue {
  background-color: blue;
}
.ansibgpurple {
  background-color: magenta;
}
.ansibgcyan {
  background-color: cyan;
}
.ansibggray {
  background-color: gray;
}
div.cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  border-radius: 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  border-width: 1px;
  border-style: solid;
  border-color: transparent;
  width: 100%;
  padding: 5px;
  /* This acts as a spacer between cells, that is outside the border */
  margin: 0px;
  outline: none;
  position: relative;
  overflow: visible;
}
div.cell:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: transparent;
}
div.cell.jupyter-soft-selected {
  border-left-color: #E3F2FD;
  border-left-width: 1px;
  padding-left: 5px;
  border-right-color: #E3F2FD;
  border-right-width: 1px;
  background: #E3F2FD;
}
@media print {
  div.cell.jupyter-soft-selected {
    border-color: transparent;
  }
}
div.cell.selected,
div.cell.selected.jupyter-soft-selected {
  border-color: #ababab;
}
div.cell.selected:before,
div.cell.selected.jupyter-soft-selected:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: #42A5F5;
}
@media print {
  div.cell.selected,
  div.cell.selected.jupyter-soft-selected {
    border-color: transparent;
  }
}
.edit_mode div.cell.selected {
  border-color: #66BB6A;
}
.edit_mode div.cell.selected:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: #66BB6A;
}
@media print {
  .edit_mode div.cell.selected {
    border-color: transparent;
  }
}
.prompt {
  /* This needs to be wide enough for 3 digit prompt numbers: In[100]: */
  min-width: 14ex;
  /* This padding is tuned to match the padding on the CodeMirror editor. */
  padding: 0.4em;
  margin: 0px;
  font-family: monospace;
  text-align: right;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
  /* Don't highlight prompt number selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* Use default cursor */
  cursor: default;
}
@media (max-width: 540px) {
  .prompt {
    text-align: left;
  }
}
div.inner_cell {
  min-width: 0;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_area {
  border: 1px solid #cfcfcf;
  border-radius: 2px;
  background: #f7f7f7;
  line-height: 1.21429em;
}
/* This is needed so that empty prompt areas can collapse to zero height when there
   is no content in the output_subarea and the prompt. The main purpose of this is
   to make sure that empty JavaScript output_subareas have no height. */
div.prompt:empty {
  padding-top: 0;
  padding-bottom: 0;
}
div.unrecognized_cell {
  padding: 5px 5px 5px 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.unrecognized_cell .inner_cell {
  border-radius: 2px;
  padding: 5px;
  font-weight: bold;
  color: red;
  border: 1px solid #cfcfcf;
  background: #eaeaea;
}
div.unrecognized_cell .inner_cell a {
  color: inherit;
  text-decoration: none;
}
div.unrecognized_cell .inner_cell a:hover {
  color: inherit;
  text-decoration: none;
}
@media (max-width: 540px) {
  div.unrecognized_cell > div.prompt {
    display: none;
  }
}
div.code_cell {
  /* avoid page breaking on code cells when printing */
}
@media print {
  div.code_cell {
    page-break-inside: avoid;
  }
}
/* any special styling for code cells that are currently running goes here */
div.input {
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.input {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_prompt {
  color: #303F9F;
  border-top: 1px solid transparent;
}
div.input_area > div.highlight {
  margin: 0.4em;
  border: none;
  padding: 0px;
  background-color: transparent;
}
div.input_area > div.highlight > pre {
  margin: 0px;
  border: none;
  padding: 0px;
  background-color: transparent;
}
/* The following gets added to the <head> if it is detected that the user has a
 * monospace font with inconsistent normal/bold/italic height.  See
 * notebookmain.js.  Such fonts will have keywords vertically offset with
 * respect to the rest of the text.  The user should select a better font.
 * See: https://github.com/ipython/ipython/issues/1503
 *
 * .CodeMirror span {
 *      vertical-align: bottom;
 * }
 */
.CodeMirror {
  line-height: 1.21429em;
  /* Changed from 1em to our global default */
  font-size: 14px;
  height: auto;
  /* Changed to auto to autogrow */
  background: none;
  /* Changed from white to allow our bg to show through */
}
.CodeMirror-scroll {
  /*  The CodeMirror docs are a bit fuzzy on if overflow-y should be hidden or visible.*/
  /*  We have found that if it is visible, vertical scrollbars appear with font size changes.*/
  overflow-y: hidden;
  overflow-x: auto;
}
.CodeMirror-lines {
  /* In CM2, this used to be 0.4em, but in CM3 it went to 4px. We need the em value because */
  /* we have set a different line-height and want this to scale with that. */
  /* Note that this should set vertical padding only, since CodeMirror assumes
       that horizontal padding will be set on CodeMirror pre */
  padding: 0.4em 0;
}
.CodeMirror-linenumber {
  padding: 0 8px 0 4px;
}
.CodeMirror-gutters {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.CodeMirror pre {
  /* In CM3 this went to 4px from 0 in CM2. This sets horizontal padding only,
    use .CodeMirror-lines for vertical */
  padding: 0 0.4em;
  border: 0;
  border-radius: 0;
}
.CodeMirror-cursor {
  border-left: 1.4px solid black;
}
@media screen and (min-width: 2138px) and (max-width: 4319px) {
  .CodeMirror-cursor {
    border-left: 2px solid black;
  }
}
@media screen and (min-width: 4320px) {
  .CodeMirror-cursor {
    border-left: 4px solid black;
  }
}
/*

Original style from softwaremaniacs.org (c) Ivan Sagalaev <Maniac@SoftwareManiacs.Org>
Adapted from GitHub theme

*/
.highlight-base {
  color: #000;
}
.highlight-variable {
  color: #000;
}
.highlight-variable-2 {
  color: #1a1a1a;
}
.highlight-variable-3 {
  color: #333333;
}
.highlight-string {
  color: #BA2121;
}
.highlight-comment {
  color: #408080;
  font-style: italic;
}
.highlight-number {
  color: #080;
}
.highlight-atom {
  color: #88F;
}
.highlight-keyword {
  color: #008000;
  font-weight: bold;
}
.highlight-builtin {
  color: #008000;
}
.highlight-error {
  color: #f00;
}
.highlight-operator {
  color: #AA22FF;
  font-weight: bold;
}
.highlight-meta {
  color: #AA22FF;
}
/* previously not defined, copying from default codemirror */
.highlight-def {
  color: #00f;
}
.highlight-string-2 {
  color: #f50;
}
.highlight-qualifier {
  color: #555;
}
.highlight-bracket {
  color: #997;
}
.highlight-tag {
  color: #170;
}
.highlight-attribute {
  color: #00c;
}
.highlight-header {
  color: blue;
}
.highlight-quote {
  color: #090;
}
.highlight-link {
  color: #00c;
}
/* apply the same style to codemirror */
.cm-s-ipython span.cm-keyword {
  color: #008000;
  font-weight: bold;
}
.cm-s-ipython span.cm-atom {
  color: #88F;
}
.cm-s-ipython span.cm-number {
  color: #080;
}
.cm-s-ipython span.cm-def {
  color: #00f;
}
.cm-s-ipython span.cm-variable {
  color: #000;
}
.cm-s-ipython span.cm-operator {
  color: #AA22FF;
  font-weight: bold;
}
.cm-s-ipython span.cm-variable-2 {
  color: #1a1a1a;
}
.cm-s-ipython span.cm-variable-3 {
  color: #333333;
}
.cm-s-ipython span.cm-comment {
  color: #408080;
  font-style: italic;
}
.cm-s-ipython span.cm-string {
  color: #BA2121;
}
.cm-s-ipython span.cm-string-2 {
  color: #f50;
}
.cm-s-ipython span.cm-meta {
  color: #AA22FF;
}
.cm-s-ipython span.cm-qualifier {
  color: #555;
}
.cm-s-ipython span.cm-builtin {
  color: #008000;
}
.cm-s-ipython span.cm-bracket {
  color: #997;
}
.cm-s-ipython span.cm-tag {
  color: #170;
}
.cm-s-ipython span.cm-attribute {
  color: #00c;
}
.cm-s-ipython span.cm-header {
  color: blue;
}
.cm-s-ipython span.cm-quote {
  color: #090;
}
.cm-s-ipython span.cm-link {
  color: #00c;
}
.cm-s-ipython span.cm-error {
  color: #f00;
}
.cm-s-ipython span.cm-tab {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAMCAYAAAAkuj5RAAAAAXNSR0IArs4c6QAAAGFJREFUSMft1LsRQFAQheHPowAKoACx3IgEKtaEHujDjORSgWTH/ZOdnZOcM/sgk/kFFWY0qV8foQwS4MKBCS3qR6ixBJvElOobYAtivseIE120FaowJPN75GMu8j/LfMwNjh4HUpwg4LUAAAAASUVORK5CYII=);
  background-position: right;
  background-repeat: no-repeat;
}
div.output_wrapper {
  /* this position must be relative to enable descendents to be absolute within it */
  position: relative;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  z-index: 1;
}
/* class for the output area when it should be height-limited */
div.output_scroll {
  /* ideally, this would be max-height, but FF barfs all over that */
  height: 24em;
  /* FF needs this *and the wrapper* to specify full width, or it will shrinkwrap */
  width: 100%;
  overflow: auto;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  display: block;
}
/* output div while it is collapsed */
div.output_collapsed {
  margin: 0px;
  padding: 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
div.out_prompt_overlay {
  height: 100%;
  padding: 0px 0.4em;
  position: absolute;
  border-radius: 2px;
}
div.out_prompt_overlay:hover {
  /* use inner shadow to get border that is computed the same on WebKit/FF */
  -webkit-box-shadow: inset 0 0 1px #000;
  box-shadow: inset 0 0 1px #000;
  background: rgba(240, 240, 240, 0.5);
}
div.output_prompt {
  color: #D84315;
}
/* This class is the outer container of all output sections. */
div.output_area {
  padding: 0px;
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.output_area .MathJax_Display {
  text-align: left !important;
}
div.output_area .rendered_html table {
  margin-left: 0;
  margin-right: 0;
}
div.output_area .rendered_html img {
  margin-left: 0;
  margin-right: 0;
}
div.output_area img,
div.output_area svg {
  max-width: 100%;
  height: auto;
}
div.output_area img.unconfined,
div.output_area svg.unconfined {
  max-width: none;
}
div.output_area .mglyph > img {
  max-width: none;
}
/* This is needed to protect the pre formating from global settings such
   as that of bootstrap */
.output {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.output_area {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
div.output_area pre {
  margin: 0;
  padding: 1px 0 1px 0;
  border: 0;
  vertical-align: baseline;
  color: black;
  background-color: transparent;
  border-radius: 0;
}
/* This class is for the output subarea inside the output_area and after
   the prompt div. */
div.output_subarea {
  overflow-x: auto;
  padding: 0.4em;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
  max-width: calc(100% - 14ex);
}
div.output_scroll div.output_subarea {
  overflow-x: visible;
}
/* The rest of the output_* classes are for special styling of the different
   output types */
/* all text output has this class: */
div.output_text {
  text-align: left;
  color: #000;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
}
/* stdout/stderr are 'text' as well as 'stream', but execute_result/error are *not* streams */
div.output_stderr {
  background: #fdd;
  /* very light red background for stderr */
}
div.output_latex {
  text-align: left;
}
/* Empty output_javascript divs should have no height */
div.output_javascript:empty {
  padding: 0;
}
.js-error {
  color: darkred;
}
/* raw_input styles */
div.raw_input_container {
  line-height: 1.21429em;
  padding-top: 5px;
}
pre.raw_input_prompt {
  /* nothing needed here. */
}
input.raw_input {
  font-family: monospace;
  font-size: inherit;
  color: inherit;
  width: auto;
  /* make sure input baseline aligns with prompt */
  vertical-align: baseline;
  /* padding + margin = 0.5em between prompt and cursor */
  padding: 0em 0.25em;
  margin: 0em 0.25em;
}
input.raw_input:focus {
  box-shadow: none;
}
p.p-space {
  margin-bottom: 10px;
}
div.output_unrecognized {
  padding: 5px;
  font-weight: bold;
  color: red;
}
div.output_unrecognized a {
  color: inherit;
  text-decoration: none;
}
div.output_unrecognized a:hover {
  color: inherit;
  text-decoration: none;
}
.rendered_html {
  color: #000;
  /* any extras will just be numbers: */
}
.rendered_html em {
  font-style: italic;
}
.rendered_html strong {
  font-weight: bold;
}
.rendered_html u {
  text-decoration: underline;
}
.rendered_html :link {
  text-decoration: underline;
}
.rendered_html :visited {
  text-decoration: underline;
}
.rendered_html h1 {
  font-size: 185.7%;
  margin: 1.08em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h2 {
  font-size: 157.1%;
  margin: 1.27em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h3 {
  font-size: 128.6%;
  margin: 1.55em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h4 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h5 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h6 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h1:first-child {
  margin-top: 0.538em;
}
.rendered_html h2:first-child {
  margin-top: 0.636em;
}
.rendered_html h3:first-child {
  margin-top: 0.777em;
}
.rendered_html h4:first-child {
  margin-top: 1em;
}
.rendered_html h5:first-child {
  margin-top: 1em;
}
.rendered_html h6:first-child {
  margin-top: 1em;
}
.rendered_html ul:not(.list-inline),
.rendered_html ol:not(.list-inline) {
  padding-left: 2em;
}
.rendered_html ul {
  list-style: disc;
}
.rendered_html ul ul {
  list-style: square;
  margin-top: 0;
}
.rendered_html ul ul ul {
  list-style: circle;
}
.rendered_html ol {
  list-style: decimal;
}
.rendered_html ol ol {
  list-style: upper-alpha;
  margin-top: 0;
}
.rendered_html ol ol ol {
  list-style: lower-alpha;
}
.rendered_html ol ol ol ol {
  list-style: lower-roman;
}
.rendered_html ol ol ol ol ol {
  list-style: decimal;
}
.rendered_html * + ul {
  margin-top: 1em;
}
.rendered_html * + ol {
  margin-top: 1em;
}
.rendered_html hr {
  color: black;
  background-color: black;
}
.rendered_html pre {
  margin: 1em 2em;
  padding: 0px;
  background-color: #fff;
}
.rendered_html code {
  background-color: #eff0f1;
}
.rendered_html p code {
  padding: 1px 5px;
}
.rendered_html pre code {
  background-color: #fff;
}
.rendered_html pre,
.rendered_html code {
  border: 0;
  color: #000;
  font-size: 100%;
}
.rendered_html blockquote {
  margin: 1em 2em;
}
.rendered_html table {
  margin-left: auto;
  margin-right: auto;
  border: none;
  border-collapse: collapse;
  border-spacing: 0;
  color: black;
  font-size: 12px;
  table-layout: fixed;
}
.rendered_html thead {
  border-bottom: 1px solid black;
  vertical-align: bottom;
}
.rendered_html tr,
.rendered_html th,
.rendered_html td {
  text-align: right;
  vertical-align: middle;
  padding: 0.5em 0.5em;
  line-height: normal;
  white-space: normal;
  max-width: none;
  border: none;
}
.rendered_html th {
  font-weight: bold;
}
.rendered_html tbody tr:nth-child(odd) {
  background: #f5f5f5;
}
.rendered_html tbody tr:hover {
  background: rgba(66, 165, 245, 0.2);
}
.rendered_html * + table {
  margin-top: 1em;
}
.rendered_html p {
  text-align: left;
}
.rendered_html * + p {
  margin-top: 1em;
}
.rendered_html img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.rendered_html * + img {
  margin-top: 1em;
}
.rendered_html img,
.rendered_html svg {
  max-width: 100%;
  height: auto;
}
.rendered_html img.unconfined,
.rendered_html svg.unconfined {
  max-width: none;
}
.rendered_html .alert {
  margin-bottom: initial;
}
.rendered_html * + .alert {
  margin-top: 1em;
}
[dir="rtl"] .rendered_html p {
  text-align: right;
}
div.text_cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.text_cell > div.prompt {
    display: none;
  }
}
div.text_cell_render {
  /*font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;*/
  outline: none;
  resize: none;
  width: inherit;
  border-style: none;
  padding: 0.5em 0.5em 0.5em 0.4em;
  color: #000;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
a.anchor-link:link {
  text-decoration: none;
  padding: 0px 20px;
  visibility: hidden;
}
h1:hover .anchor-link,
h2:hover .anchor-link,
h3:hover .anchor-link,
h4:hover .anchor-link,
h5:hover .anchor-link,
h6:hover .anchor-link {
  visibility: visible;
}
.text_cell.rendered .input_area {
  display: none;
}
.text_cell.rendered .rendered_html {
  overflow-x: auto;
  overflow-y: hidden;
}
.text_cell.rendered .rendered_html tr,
.text_cell.rendered .rendered_html th,
.text_cell.rendered .rendered_html td {
  max-width: none;
}
.text_cell.unrendered .text_cell_render {
  display: none;
}
.text_cell .dropzone .input_area {
  border: 2px dashed #bababa;
  margin: -1px;
}
.cm-header-1,
.cm-header-2,
.cm-header-3,
.cm-header-4,
.cm-header-5,
.cm-header-6 {
  font-weight: bold;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.cm-header-1 {
  font-size: 185.7%;
}
.cm-header-2 {
  font-size: 157.1%;
}
.cm-header-3 {
  font-size: 128.6%;
}
.cm-header-4 {
  font-size: 110%;
}
.cm-header-5 {
  font-size: 100%;
  font-style: italic;
}
.cm-header-6 {
  font-size: 100%;
  font-style: italic;
}
/*!
*
* IPython notebook webapp
*
*/
@media (max-width: 767px) {
  .notebook_app {
    padding-left: 0px;
    padding-right: 0px;
  }
}
#ipython-main-app {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook_panel {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook {
  font-size: 14px;
  line-height: 20px;
  overflow-y: hidden;
  overflow-x: auto;
  width: 100%;
  /* This spaces the page away from the edge of the notebook area */
  padding-top: 20px;
  margin: 0px;
  outline: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  min-height: 100%;
}
@media not print {
  #notebook-container {
    padding: 15px;
    background-color: #fff;
    min-height: 0;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
@media print {
  #notebook-container {
    width: 100%;
  }
}
div.ui-widget-content {
  border: 1px solid #ababab;
  outline: none;
}
pre.dialog {
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 0.4em;
  padding-left: 2em;
}
p.dialog {
  padding: 0.2em;
}
/* Word-wrap output correctly.  This is the CSS3 spelling, though Firefox seems
   to not honor it correctly.  Webkit browsers (Chrome, rekonq, Safari) do.
 */
pre,
code,
kbd,
samp {
  white-space: pre-wrap;
}
#fonttest {
  font-family: monospace;
}
p {
  margin-bottom: 0;
}
.end_space {
  min-height: 100px;
  transition: height .2s ease;
}
.notebook_app > #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
@media not print {
  .notebook_app {
    background-color: #EEE;
  }
}
kbd {
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  margin: 2px;
  padding-left: 2px;
  padding-right: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
.jupyter-keybindings {
  padding: 1px;
  line-height: 24px;
  border-bottom: 1px solid gray;
}
.jupyter-keybindings input {
  margin: 0;
  padding: 0;
  border: none;
}
.jupyter-keybindings i {
  padding: 6px;
}
.well code {
  background-color: #ffffff;
  border-color: #ababab;
  border-width: 1px;
  border-style: solid;
  padding: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
/* CSS for the cell toolbar */
.celltoolbar {
  border: thin solid #CFCFCF;
  border-bottom: none;
  background: #EEE;
  border-radius: 2px 2px 0px 0px;
  width: 100%;
  height: 29px;
  padding-right: 4px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
  display: -webkit-flex;
}
@media print {
  .celltoolbar {
    display: none;
  }
}
.ctb_hideshow {
  display: none;
  vertical-align: bottom;
}
/* ctb_show is added to the ctb_hideshow div to show the cell toolbar.
   Cell toolbars are only shown when the ctb_global_show class is also set.
*/
.ctb_global_show .ctb_show.ctb_hideshow {
  display: block;
}
.ctb_global_show .ctb_show + .input_area,
.ctb_global_show .ctb_show + div.text_cell_input,
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border: 1px solid #cfcfcf;
}
.celltoolbar {
  font-size: 87%;
  padding-top: 3px;
}
.celltoolbar select {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  width: inherit;
  font-size: inherit;
  height: 22px;
  padding: 0px;
  display: inline-block;
}
.celltoolbar select:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.celltoolbar select::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.celltoolbar select:-ms-input-placeholder {
  color: #999;
}
.celltoolbar select::-webkit-input-placeholder {
  color: #999;
}
.celltoolbar select::-ms-expand {
  border: 0;
  background-color: transparent;
}
.celltoolbar select[disabled],
.celltoolbar select[readonly],
fieldset[disabled] .celltoolbar select {
  background-color: #eeeeee;
  opacity: 1;
}
.celltoolbar select[disabled],
fieldset[disabled] .celltoolbar select {
  cursor: not-allowed;
}
textarea.celltoolbar select {
  height: auto;
}
select.celltoolbar select {
  height: 30px;
  line-height: 30px;
}
textarea.celltoolbar select,
select[multiple].celltoolbar select {
  height: auto;
}
.celltoolbar label {
  margin-left: 5px;
  margin-right: 5px;
}
.tags_button_container {
  width: 100%;
  display: flex;
}
.tag-container {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
  overflow: hidden;
  position: relative;
}
.tag-container > * {
  margin: 0 4px;
}
.remove-tag-btn {
  margin-left: 4px;
}
.tags-input {
  display: flex;
}
.cell-tag:last-child:after {
  content: "";
  position: absolute;
  right: 0;
  width: 40px;
  height: 100%;
  /* Fade to background color of cell toolbar */
  background: linear-gradient(to right, rgba(0, 0, 0, 0), #EEE);
}
.tags-input > * {
  margin-left: 4px;
}
.cell-tag,
.tags-input input,
.tags-input button {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  box-shadow: none;
  width: inherit;
  font-size: inherit;
  height: 22px;
  line-height: 22px;
  padding: 0px 4px;
  display: inline-block;
}
.cell-tag:focus,
.tags-input input:focus,
.tags-input button:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.cell-tag::-moz-placeholder,
.tags-input input::-moz-placeholder,
.tags-input button::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.cell-tag:-ms-input-placeholder,
.tags-input input:-ms-input-placeholder,
.tags-input button:-ms-input-placeholder {
  color: #999;
}
.cell-tag::-webkit-input-placeholder,
.tags-input input::-webkit-input-placeholder,
.tags-input button::-webkit-input-placeholder {
  color: #999;
}
.cell-tag::-ms-expand,
.tags-input input::-ms-expand,
.tags-input button::-ms-expand {
  border: 0;
  background-color: transparent;
}
.cell-tag[disabled],
.tags-input input[disabled],
.tags-input button[disabled],
.cell-tag[readonly],
.tags-input input[readonly],
.tags-input button[readonly],
fieldset[disabled] .cell-tag,
fieldset[disabled] .tags-input input,
fieldset[disabled] .tags-input button {
  background-color: #eeeeee;
  opacity: 1;
}
.cell-tag[disabled],
.tags-input input[disabled],
.tags-input button[disabled],
fieldset[disabled] .cell-tag,
fieldset[disabled] .tags-input input,
fieldset[disabled] .tags-input button {
  cursor: not-allowed;
}
textarea.cell-tag,
textarea.tags-input input,
textarea.tags-input button {
  height: auto;
}
select.cell-tag,
select.tags-input input,
select.tags-input button {
  height: 30px;
  line-height: 30px;
}
textarea.cell-tag,
textarea.tags-input input,
textarea.tags-input button,
select[multiple].cell-tag,
select[multiple].tags-input input,
select[multiple].tags-input button {
  height: auto;
}
.cell-tag,
.tags-input button {
  padding: 0px 4px;
}
.cell-tag {
  background-color: #fff;
  white-space: nowrap;
}
.tags-input input[type=text]:focus {
  outline: none;
  box-shadow: none;
  border-color: #ccc;
}
.completions {
  position: absolute;
  z-index: 110;
  overflow: hidden;
  border: 1px solid #ababab;
  border-radius: 2px;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  line-height: 1;
}
.completions select {
  background: white;
  outline: none;
  border: none;
  padding: 0px;
  margin: 0px;
  overflow: auto;
  font-family: monospace;
  font-size: 110%;
  color: #000;
  width: auto;
}
.completions select option.context {
  color: #286090;
}
#kernel_logo_widget .current_kernel_logo {
  display: none;
  margin-top: -1px;
  margin-bottom: -1px;
  width: 32px;
  height: 32px;
}
[dir="rtl"] #kernel_logo_widget {
  float: left !important;
  float: left;
}
.modal .modal-body .move-path {
  display: flex;
  flex-direction: row;
  justify-content: space;
  align-items: center;
}
.modal .modal-body .move-path .server-root {
  padding-right: 20px;
}
.modal .modal-body .move-path .path-input {
  flex: 1;
}
#menubar {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin-top: 1px;
}
#menubar .navbar {
  border-top: 1px;
  border-radius: 0px 0px 2px 2px;
  margin-bottom: 0px;
}
#menubar .navbar-toggle {
  float: left;
  padding-top: 7px;
  padding-bottom: 7px;
  border: none;
}
#menubar .navbar-collapse {
  clear: left;
}
[dir="rtl"] #menubar .navbar-toggle {
  float: right;
}
[dir="rtl"] #menubar .navbar-collapse {
  clear: right;
}
[dir="rtl"] #menubar .navbar-nav {
  float: right;
}
[dir="rtl"] #menubar .nav {
  padding-right: 0px;
}
[dir="rtl"] #menubar .navbar-nav > li {
  float: right;
}
[dir="rtl"] #menubar .navbar-right {
  float: left !important;
}
[dir="rtl"] ul.dropdown-menu {
  text-align: right;
  left: auto;
}
[dir="rtl"] ul#new-menu.dropdown-menu {
  right: auto;
  left: 0;
}
.nav-wrapper {
  border-bottom: 1px solid #e7e7e7;
}
i.menu-icon {
  padding-top: 4px;
}
[dir="rtl"] i.menu-icon.pull-right {
  float: left !important;
  float: left;
}
ul#help_menu li a {
  overflow: hidden;
  padding-right: 2.2em;
}
ul#help_menu li a i {
  margin-right: -1.2em;
}
[dir="rtl"] ul#help_menu li a {
  padding-left: 2.2em;
}
[dir="rtl"] ul#help_menu li a i {
  margin-right: 0;
  margin-left: -1.2em;
}
[dir="rtl"] ul#help_menu li a i.pull-right {
  float: left !important;
  float: left;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
}
[dir="rtl"] .dropdown-submenu > .dropdown-menu {
  right: 100%;
  margin-right: -1px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu > a:after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: block;
  content: "\f0da";
  float: right;
  color: #333333;
  margin-top: 2px;
  margin-right: -10px;
}
.dropdown-submenu > a:after.fa-pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.fa-pull-right {
  margin-left: .3em;
}
.dropdown-submenu > a:after.pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.pull-right {
  margin-left: .3em;
}
[dir="rtl"] .dropdown-submenu > a:after {
  float: left;
  content: "\f0d9";
  margin-right: 0;
  margin-left: -10px;
}
.dropdown-submenu:hover > a:after {
  color: #262626;
}
.dropdown-submenu.pull-left {
  float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}
#notification_area {
  float: right !important;
  float: right;
  z-index: 10;
}
[dir="rtl"] #notification_area {
  float: left !important;
  float: left;
}
.indicator_area {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
[dir="rtl"] .indicator_area {
  float: left !important;
  float: left;
}
#kernel_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  border-left: 1px solid;
}
#kernel_indicator .kernel_indicator_name {
  padding-left: 5px;
  padding-right: 5px;
}
[dir="rtl"] #kernel_indicator {
  float: left !important;
  float: left;
  border-left: 0;
  border-right: 1px solid;
}
#modal_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
[dir="rtl"] #modal_indicator {
  float: left !important;
  float: left;
}
#readonly-indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  margin-top: 2px;
  margin-bottom: 0px;
  margin-left: 0px;
  margin-right: 0px;
  display: none;
}
.modal_indicator:before {
  width: 1.28571429em;
  text-align: center;
}
.edit_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f040";
}
.edit_mode .modal_indicator:before.fa-pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.fa-pull-right {
  margin-left: .3em;
}
.edit_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: ' ';
}
.command_mode .modal_indicator:before.fa-pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.fa-pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f10c";
}
.kernel_idle_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f111";
}
.kernel_busy_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f1e2";
}
.kernel_dead_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f127";
}
.kernel_disconnected_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.pull-right {
  margin-left: .3em;
}
.notification_widget {
  color: #777;
  z-index: 10;
  background: rgba(240, 240, 240, 0.5);
  margin-right: 4px;
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget:focus,
.notification_widget.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.notification_widget:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active:hover,
.notification_widget.active:hover,
.open > .dropdown-toggle.notification_widget:hover,
.notification_widget:active:focus,
.notification_widget.active:focus,
.open > .dropdown-toggle.notification_widget:focus,
.notification_widget:active.focus,
.notification_widget.active.focus,
.open > .dropdown-toggle.notification_widget.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  background-image: none;
}
.notification_widget.disabled:hover,
.notification_widget[disabled]:hover,
fieldset[disabled] .notification_widget:hover,
.notification_widget.disabled:focus,
.notification_widget[disabled]:focus,
fieldset[disabled] .notification_widget:focus,
.notification_widget.disabled.focus,
.notification_widget[disabled].focus,
fieldset[disabled] .notification_widget.focus {
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget .badge {
  color: #fff;
  background-color: #333;
}
.notification_widget.warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning:focus,
.notification_widget.warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.notification_widget.warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active:hover,
.notification_widget.warning.active:hover,
.open > .dropdown-toggle.notification_widget.warning:hover,
.notification_widget.warning:active:focus,
.notification_widget.warning.active:focus,
.open > .dropdown-toggle.notification_widget.warning:focus,
.notification_widget.warning:active.focus,
.notification_widget.warning.active.focus,
.open > .dropdown-toggle.notification_widget.warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  background-image: none;
}
.notification_widget.warning.disabled:hover,
.notification_widget.warning[disabled]:hover,
fieldset[disabled] .notification_widget.warning:hover,
.notification_widget.warning.disabled:focus,
.notification_widget.warning[disabled]:focus,
fieldset[disabled] .notification_widget.warning:focus,
.notification_widget.warning.disabled.focus,
.notification_widget.warning[disabled].focus,
fieldset[disabled] .notification_widget.warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.notification_widget.success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success:focus,
.notification_widget.success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.notification_widget.success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active:hover,
.notification_widget.success.active:hover,
.open > .dropdown-toggle.notification_widget.success:hover,
.notification_widget.success:active:focus,
.notification_widget.success.active:focus,
.open > .dropdown-toggle.notification_widget.success:focus,
.notification_widget.success:active.focus,
.notification_widget.success.active.focus,
.open > .dropdown-toggle.notification_widget.success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  background-image: none;
}
.notification_widget.success.disabled:hover,
.notification_widget.success[disabled]:hover,
fieldset[disabled] .notification_widget.success:hover,
.notification_widget.success.disabled:focus,
.notification_widget.success[disabled]:focus,
fieldset[disabled] .notification_widget.success:focus,
.notification_widget.success.disabled.focus,
.notification_widget.success[disabled].focus,
fieldset[disabled] .notification_widget.success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.notification_widget.info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info:focus,
.notification_widget.info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.notification_widget.info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active:hover,
.notification_widget.info.active:hover,
.open > .dropdown-toggle.notification_widget.info:hover,
.notification_widget.info:active:focus,
.notification_widget.info.active:focus,
.open > .dropdown-toggle.notification_widget.info:focus,
.notification_widget.info:active.focus,
.notification_widget.info.active.focus,
.open > .dropdown-toggle.notification_widget.info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  background-image: none;
}
.notification_widget.info.disabled:hover,
.notification_widget.info[disabled]:hover,
fieldset[disabled] .notification_widget.info:hover,
.notification_widget.info.disabled:focus,
.notification_widget.info[disabled]:focus,
fieldset[disabled] .notification_widget.info:focus,
.notification_widget.info.disabled.focus,
.notification_widget.info[disabled].focus,
fieldset[disabled] .notification_widget.info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.notification_widget.danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger:focus,
.notification_widget.danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.notification_widget.danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active:hover,
.notification_widget.danger.active:hover,
.open > .dropdown-toggle.notification_widget.danger:hover,
.notification_widget.danger:active:focus,
.notification_widget.danger.active:focus,
.open > .dropdown-toggle.notification_widget.danger:focus,
.notification_widget.danger:active.focus,
.notification_widget.danger.active.focus,
.open > .dropdown-toggle.notification_widget.danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  background-image: none;
}
.notification_widget.danger.disabled:hover,
.notification_widget.danger[disabled]:hover,
fieldset[disabled] .notification_widget.danger:hover,
.notification_widget.danger.disabled:focus,
.notification_widget.danger[disabled]:focus,
fieldset[disabled] .notification_widget.danger:focus,
.notification_widget.danger.disabled.focus,
.notification_widget.danger[disabled].focus,
fieldset[disabled] .notification_widget.danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger .badge {
  color: #d9534f;
  background-color: #fff;
}
div#pager {
  background-color: #fff;
  font-size: 14px;
  line-height: 20px;
  overflow: hidden;
  display: none;
  position: fixed;
  bottom: 0px;
  width: 100%;
  max-height: 50%;
  padding-top: 8px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  /* Display over codemirror */
  z-index: 100;
  /* Hack which prevents jquery ui resizable from changing top. */
  top: auto !important;
}
div#pager pre {
  line-height: 1.21429em;
  color: #000;
  background-color: #f7f7f7;
  padding: 0.4em;
}
div#pager #pager-button-area {
  position: absolute;
  top: 8px;
  right: 20px;
}
div#pager #pager-contents {
  position: relative;
  overflow: auto;
  width: 100%;
  height: 100%;
}
div#pager #pager-contents #pager-container {
  position: relative;
  padding: 15px 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
div#pager .ui-resizable-handle {
  top: 0px;
  height: 8px;
  background: #f7f7f7;
  border-top: 1px solid #cfcfcf;
  border-bottom: 1px solid #cfcfcf;
  /* This injects handle bars (a short, wide = symbol) for 
        the resize handle. */
}
div#pager .ui-resizable-handle::after {
  content: '';
  top: 2px;
  left: 50%;
  height: 3px;
  width: 30px;
  margin-left: -15px;
  position: absolute;
  border-top: 1px solid #cfcfcf;
}
.quickhelp {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  line-height: 1.8em;
}
.shortcut_key {
  display: inline-block;
  width: 21ex;
  text-align: right;
  font-family: monospace;
}
.shortcut_descr {
  display: inline-block;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
span.save_widget {
  height: 30px;
  margin-top: 4px;
  display: flex;
  justify-content: flex-start;
  align-items: baseline;
  width: 50%;
  flex: 1;
}
span.save_widget span.filename {
  height: 100%;
  line-height: 1em;
  margin-left: 16px;
  border: none;
  font-size: 146.5%;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  border-radius: 2px;
}
span.save_widget span.filename:hover {
  background-color: #e6e6e6;
}
[dir="rtl"] span.save_widget.pull-left {
  float: right !important;
  float: right;
}
[dir="rtl"] span.save_widget span.filename {
  margin-left: 0;
  margin-right: 16px;
}
span.checkpoint_status,
span.autosave_status {
  font-size: small;
  white-space: nowrap;
  padding: 0 5px;
}
@media (max-width: 767px) {
  span.save_widget {
    font-size: small;
    padding: 0 0 0 5px;
  }
  span.checkpoint_status,
  span.autosave_status {
    display: none;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  span.checkpoint_status {
    display: none;
  }
  span.autosave_status {
    font-size: x-small;
  }
}
.toolbar {
  padding: 0px;
  margin-left: -5px;
  margin-top: 2px;
  margin-bottom: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.toolbar select,
.toolbar label {
  width: auto;
  vertical-align: middle;
  margin-right: 2px;
  margin-bottom: 0px;
  display: inline;
  font-size: 92%;
  margin-left: 0.3em;
  margin-right: 0.3em;
  padding: 0px;
  padding-top: 3px;
}
.toolbar .btn {
  padding: 2px 8px;
}
.toolbar .btn-group {
  margin-top: 0px;
  margin-left: 5px;
}
.toolbar-btn-label {
  margin-left: 6px;
}
#maintoolbar {
  margin-bottom: -3px;
  margin-top: -8px;
  border: 0px;
  min-height: 27px;
  margin-left: 0px;
  padding-top: 11px;
  padding-bottom: 3px;
}
#maintoolbar .navbar-text {
  float: none;
  vertical-align: middle;
  text-align: right;
  margin-left: 5px;
  margin-right: 0px;
  margin-top: 0px;
}
.select-xs {
  height: 24px;
}
[dir="rtl"] .btn-group > .btn,
.btn-group-vertical > .btn {
  float: right;
}
.pulse,
.dropdown-menu > li > a.pulse,
li.pulse > a.dropdown-toggle,
li.pulse.open > a.dropdown-toggle {
  background-color: #F37626;
  color: white;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
/** WARNING IF YOU ARE EDITTING THIS FILE, if this is a .css file, It has a lot
 * of chance of beeing generated from the ../less/[samename].less file, you can
 * try to get back the less file by reverting somme commit in history
 **/
/*
 * We'll try to get something pretty, so we
 * have some strange css to have the scroll bar on
 * the left with fix button on the top right of the tooltip
 */
@-moz-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-moz-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
/*properties of tooltip after "expand"*/
.bigtooltip {
  overflow: auto;
  height: 200px;
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
}
/*properties of tooltip before "expand"*/
.smalltooltip {
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
  text-overflow: ellipsis;
  overflow: hidden;
  height: 80px;
}
.tooltipbuttons {
  position: absolute;
  padding-right: 15px;
  top: 0px;
  right: 0px;
}
.tooltiptext {
  /*avoid the button to overlap on some docstring*/
  padding-right: 30px;
}
.ipython_tooltip {
  max-width: 700px;
  /*fade-in animation when inserted*/
  -webkit-animation: fadeOut 400ms;
  -moz-animation: fadeOut 400ms;
  animation: fadeOut 400ms;
  -webkit-animation: fadeIn 400ms;
  -moz-animation: fadeIn 400ms;
  animation: fadeIn 400ms;
  vertical-align: middle;
  background-color: #f7f7f7;
  overflow: visible;
  border: #ababab 1px solid;
  outline: none;
  padding: 3px;
  margin: 0px;
  padding-left: 7px;
  font-family: monospace;
  min-height: 50px;
  -moz-box-shadow: 0px 6px 10px -1px #adadad;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  border-radius: 2px;
  position: absolute;
  z-index: 1000;
}
.ipython_tooltip a {
  float: right;
}
.ipython_tooltip .tooltiptext pre {
  border: 0;
  border-radius: 0;
  font-size: 100%;
  background-color: #f7f7f7;
}
.pretooltiparrow {
  left: 0px;
  margin: 0px;
  top: -16px;
  width: 40px;
  height: 16px;
  overflow: hidden;
  position: absolute;
}
.pretooltiparrow:before {
  background-color: #f7f7f7;
  border: 1px #ababab solid;
  z-index: 11;
  content: "";
  position: absolute;
  left: 15px;
  top: 10px;
  width: 25px;
  height: 25px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}
ul.typeahead-list i {
  margin-left: -10px;
  width: 18px;
}
[dir="rtl"] ul.typeahead-list i {
  margin-left: 0;
  margin-right: -10px;
}
ul.typeahead-list {
  max-height: 80vh;
  overflow: auto;
}
ul.typeahead-list > li > a {
  /** Firefox bug **/
  /* see https://github.com/jupyter/notebook/issues/559 */
  white-space: normal;
}
ul.typeahead-list  > li > a.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .typeahead-list {
  text-align: right;
}
.cmd-palette .modal-body {
  padding: 7px;
}
.cmd-palette form {
  background: white;
}
.cmd-palette input {
  outline: none;
}
.no-shortcut {
  min-width: 20px;
  color: transparent;
}
[dir="rtl"] .no-shortcut.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .command-shortcut.pull-right {
  float: left !important;
  float: left;
}
.command-shortcut:before {
  content: "(command mode)";
  padding-right: 3px;
  color: #777777;
}
.edit-shortcut:before {
  content: "(edit)";
  padding-right: 3px;
  color: #777777;
}
[dir="rtl"] .edit-shortcut.pull-right {
  float: left !important;
  float: left;
}
#find-and-replace #replace-preview .match,
#find-and-replace #replace-preview .insert {
  background-color: #BBDEFB;
  border-color: #90CAF9;
  border-style: solid;
  border-width: 1px;
  border-radius: 0px;
}
[dir="ltr"] #find-and-replace .input-group-btn + .form-control {
  border-left: none;
}
[dir="rtl"] #find-and-replace .input-group-btn + .form-control {
  border-right: none;
}
#find-and-replace #replace-preview .replace .match {
  background-color: #FFCDD2;
  border-color: #EF9A9A;
  border-radius: 0px;
}
#find-and-replace #replace-preview .replace .insert {
  background-color: #C8E6C9;
  border-color: #A5D6A7;
  border-radius: 0px;
}
#find-and-replace #replace-preview {
  max-height: 60vh;
  overflow: auto;
}
#find-and-replace #replace-preview pre {
  padding: 5px 10px;
}
.terminal-app {
  background: #EEE;
}
.terminal-app #header {
  background: #fff;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.terminal-app .terminal {
  width: 100%;
  float: left;
  font-family: monospace;
  color: white;
  background: black;
  padding: 0.4em;
  border-radius: 2px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
}
.terminal-app .terminal,
.terminal-app .terminal dummy-screen {
  line-height: 1em;
  font-size: 14px;
}
.terminal-app .terminal .xterm-rows {
  padding: 10px;
}
.terminal-app .terminal-cursor {
  color: black;
  background: white;
}
.terminal-app #terminado-container {
  margin-top: 20px;
}
/*# sourceMappingURL=style.min.css.map */
    </style>
<style type="text/css">
    .highlight .hll { background-color: #ffffcc }
.highlight  { background: #f8f8f8; }
.highlight .c { color: #408080; font-style: italic } /* Comment */
.highlight .err { border: 1px solid #FF0000 } /* Error */
.highlight .k { color: #008000; font-weight: bold } /* Keyword */
.highlight .o { color: #666666 } /* Operator */
.highlight .ch { color: #408080; font-style: italic } /* Comment.Hashbang */
.highlight .cm { color: #408080; font-style: italic } /* Comment.Multiline */
.highlight .cp { color: #BC7A00 } /* Comment.Preproc */
.highlight .cpf { color: #408080; font-style: italic } /* Comment.PreprocFile */
.highlight .c1 { color: #408080; font-style: italic } /* Comment.Single */
.highlight .cs { color: #408080; font-style: italic } /* Comment.Special */
.highlight .gd { color: #A00000 } /* Generic.Deleted */
.highlight .ge { font-style: italic } /* Generic.Emph */
.highlight .gr { color: #FF0000 } /* Generic.Error */
.highlight .gh { color: #000080; font-weight: bold } /* Generic.Heading */
.highlight .gi { color: #00A000 } /* Generic.Inserted */
.highlight .go { color: #888888 } /* Generic.Output */
.highlight .gp { color: #000080; font-weight: bold } /* Generic.Prompt */
.highlight .gs { font-weight: bold } /* Generic.Strong */
.highlight .gu { color: #800080; font-weight: bold } /* Generic.Subheading */
.highlight .gt { color: #0044DD } /* Generic.Traceback */
.highlight .kc { color: #008000; font-weight: bold } /* Keyword.Constant */
.highlight .kd { color: #008000; font-weight: bold } /* Keyword.Declaration */
.highlight .kn { color: #008000; font-weight: bold } /* Keyword.Namespace */
.highlight .kp { color: #008000 } /* Keyword.Pseudo */
.highlight .kr { color: #008000; font-weight: bold } /* Keyword.Reserved */
.highlight .kt { color: #B00040 } /* Keyword.Type */
.highlight .m { color: #666666 } /* Literal.Number */
.highlight .s { color: #BA2121 } /* Literal.String */
.highlight .na { color: #7D9029 } /* Name.Attribute */
.highlight .nb { color: #008000 } /* Name.Builtin */
.highlight .nc { color: #0000FF; font-weight: bold } /* Name.Class */
.highlight .no { color: #880000 } /* Name.Constant */
.highlight .nd { color: #AA22FF } /* Name.Decorator */
.highlight .ni { color: #999999; font-weight: bold } /* Name.Entity */
.highlight .ne { color: #D2413A; font-weight: bold } /* Name.Exception */
.highlight .nf { color: #0000FF } /* Name.Function */
.highlight .nl { color: #A0A000 } /* Name.Label */
.highlight .nn { color: #0000FF; font-weight: bold } /* Name.Namespace */
.highlight .nt { color: #008000; font-weight: bold } /* Name.Tag */
.highlight .nv { color: #19177C } /* Name.Variable */
.highlight .ow { color: #AA22FF; font-weight: bold } /* Operator.Word */
.highlight .w { color: #bbbbbb } /* Text.Whitespace */
.highlight .mb { color: #666666 } /* Literal.Number.Bin */
.highlight .mf { color: #666666 } /* Literal.Number.Float */
.highlight .mh { color: #666666 } /* Literal.Number.Hex */
.highlight .mi { color: #666666 } /* Literal.Number.Integer */
.highlight .mo { color: #666666 } /* Literal.Number.Oct */
.highlight .sa { color: #BA2121 } /* Literal.String.Affix */
.highlight .sb { color: #BA2121 } /* Literal.String.Backtick */
.highlight .sc { color: #BA2121 } /* Literal.String.Char */
.highlight .dl { color: #BA2121 } /* Literal.String.Delimiter */
.highlight .sd { color: #BA2121; font-style: italic } /* Literal.String.Doc */
.highlight .s2 { color: #BA2121 } /* Literal.String.Double */
.highlight .se { color: #BB6622; font-weight: bold } /* Literal.String.Escape */
.highlight .sh { color: #BA2121 } /* Literal.String.Heredoc */
.highlight .si { color: #BB6688; font-weight: bold } /* Literal.String.Interpol */
.highlight .sx { color: #008000 } /* Literal.String.Other */
.highlight .sr { color: #BB6688 } /* Literal.String.Regex */
.highlight .s1 { color: #BA2121 } /* Literal.String.Single */
.highlight .ss { color: #19177C } /* Literal.String.Symbol */
.highlight .bp { color: #008000 } /* Name.Builtin.Pseudo */
.highlight .fm { color: #0000FF } /* Name.Function.Magic */
.highlight .vc { color: #19177C } /* Name.Variable.Class */
.highlight .vg { color: #19177C } /* Name.Variable.Global */
.highlight .vi { color: #19177C } /* Name.Variable.Instance */
.highlight .vm { color: #19177C } /* Name.Variable.Magic */
.highlight .il { color: #666666 } /* Literal.Number.Integer.Long */
    </style>


<style type="text/css">
/* Overrides of notebook CSS for static HTML export */
body {
  overflow: visible;
  padding: 8px;
}

div#notebook {
  overflow: visible;
  border-top: none;
}@media print {
  div.cell {
    display: block;
    page-break-inside: avoid;
  } 
  div.output_wrapper { 
    display: block;
    page-break-inside: avoid; 
  }
  div.output { 
    display: block;
    page-break-inside: avoid; 
  }
}
</style>

<!-- Custom stylesheet, it must be in the same directory as the html file -->
<link rel="stylesheet" href="custom.css">

<!-- Loading mathjax macro -->
<!-- Load mathjax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-AMS_HTML"></script>
    <!-- MathJax configuration -->
    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true,
            processEnvironments: true
        },
        // Center justify equations in code and markdown cells. Elsewhere
        // we use CSS to left justify single line equations in code cells.
        displayAlign: 'center',
        "HTML-CSS": {
            styles: {'.MathJax_Display': {"margin": 0}},
            linebreaks: { automatic: true }
        }
    });
    </script>
    <!-- End of mathjax configuration --></head>
<body>
  <div tabindex="-1" id="notebook" class="border-box-sizing">
    <div class="container" id="notebook-container">

<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[116]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">seaborn</span> <span class="k">as</span> <span class="nn">sns</span>
<span class="kn">import</span> <span class="nn">matplotlib</span>
<span class="kn">import</span> <span class="nn">warnings</span>
<span class="n">warnings</span><span class="o">.</span><span class="n">filterwarnings</span><span class="p">(</span><span class="s1">&#39;ignore&#39;</span><span class="p">)</span>
<span class="o">%</span><span class="k">pylab</span> inline
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Populating the interactive namespace from numpy and matplotlib
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[1]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">IPython.display</span> <span class="k">import</span> <span class="n">HTML</span>
<span class="kn">import</span> <span class="nn">random</span>

<span class="k">def</span> <span class="nf">hide_toggle</span><span class="p">(</span><span class="n">for_next</span><span class="o">=</span><span class="kc">False</span><span class="p">):</span>
    <span class="n">this_cell</span> <span class="o">=</span> <span class="s2">&quot;&quot;&quot;$(&#39;div.cell.code_cell.rendered.selected&#39;)&quot;&quot;&quot;</span>
    <span class="n">next_cell</span> <span class="o">=</span> <span class="n">this_cell</span> <span class="o">+</span> <span class="s1">&#39;.next()&#39;</span>

    <span class="n">toggle_text</span> <span class="o">=</span> <span class="s1">&#39;Toggle show/hide&#39;</span>  <span class="c1"># text shown on toggle link</span>
    <span class="n">target_cell</span> <span class="o">=</span> <span class="n">this_cell</span>  <span class="c1"># target cell to control with toggle</span>
    <span class="n">js_hide_current</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span>  <span class="c1"># bit of JS to permanently hide code in current cell (only when toggling next cell)</span>

    <span class="k">if</span> <span class="n">for_next</span><span class="p">:</span>
        <span class="n">target_cell</span> <span class="o">=</span> <span class="n">next_cell</span>
        <span class="n">toggle_text</span> <span class="o">+=</span> <span class="s1">&#39; next cell&#39;</span>
        <span class="n">js_hide_current</span> <span class="o">=</span> <span class="n">this_cell</span> <span class="o">+</span> <span class="s1">&#39;.find(&quot;div.input&quot;).hide();&#39;</span>

    <span class="n">js_f_name</span> <span class="o">=</span> <span class="s1">&#39;code_toggle_</span><span class="si">{}</span><span class="s1">&#39;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="nb">str</span><span class="p">(</span><span class="n">random</span><span class="o">.</span><span class="n">randint</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="o">**</span><span class="mi">64</span><span class="p">)))</span>

    <span class="n">html</span> <span class="o">=</span> <span class="s2">&quot;&quot;&quot;</span>
<span class="s2">        &lt;script&gt;</span>
<span class="s2">            function </span><span class="si">{f_name}</span><span class="s2">() {{</span>
<span class="s2">                </span><span class="si">{cell_selector}</span><span class="s2">.find(&#39;div.input&#39;).toggle();</span>
<span class="s2">            }}</span>

<span class="s2">            </span><span class="si">{js_hide_current}</span><span class="s2"></span>
<span class="s2">        &lt;/script&gt;</span>

<span class="s2">        &lt;a href=&quot;javascript:</span><span class="si">{f_name}</span><span class="s2">()&quot;&gt;</span><span class="si">{toggle_text}</span><span class="s2">&lt;/a&gt;</span>
<span class="s2">    &quot;&quot;&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span>
        <span class="n">f_name</span><span class="o">=</span><span class="n">js_f_name</span><span class="p">,</span>
        <span class="n">cell_selector</span><span class="o">=</span><span class="n">target_cell</span><span class="p">,</span>
        <span class="n">js_hide_current</span><span class="o">=</span><span class="n">js_hide_current</span><span class="p">,</span> 
        <span class="n">toggle_text</span><span class="o">=</span><span class="n">toggle_text</span>
    <span class="p">)</span>

    <span class="k">return</span> <span class="n">HTML</span><span class="p">(</span><span class="n">html</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[2]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">HTML</span><span class="p">(</span><span class="s1">&#39;&#39;&#39;&lt;script&gt;</span>
<span class="s1">code_show=true; </span>
<span class="s1">function code_toggle() {</span>
<span class="s1"> if (code_show){</span>
<span class="s1"> $(&#39;div.input&#39;).hide();</span>
<span class="s1"> } else {</span>
<span class="s1"> $(&#39;div.input&#39;).show();</span>
<span class="s1"> }</span>
<span class="s1"> code_show = !code_show</span>
<span class="s1">} </span>
<span class="s1">$( document ).ready(code_toggle);</span>
<span class="s1">&lt;/script&gt;</span>
<span class="s1">The raw code for this IPython notebook is by default hidden for easier reading.</span>
<span class="s1">To toggle on/off the raw code, click &lt;a href=&quot;javascript:code_toggle()&quot;&gt;here&lt;/a&gt;.&#39;&#39;&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[2]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<script>
code_show=true; 
function code_toggle() {
 if (code_show){
 $('div.input').hide();
 } else {
 $('div.input').show();
 }
 code_show = !code_show
} 
$( document ).ready(code_toggle);
</script>
The raw code for this IPython notebook is by default hidden for easier reading.
To toggle on/off the raw code, click <a href="javascript:code_toggle()">here</a>.
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[132]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df</span><span class="o">=</span><span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="sa">r</span><span class="s2">&quot;C:\Users\Farida\Desktop\Alexis.csv&quot;</span><span class="p">,</span><span class="n">encoding</span><span class="o">=</span><span class="s2">&quot;ISO-8859-1&quot;</span><span class="p">,</span><span class="n">sep</span><span class="o">=</span><span class="s2">&quot;;&quot;</span><span class="p">)</span>
<span class="n">df</span><span class="o">.</span><span class="n">head</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[132]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Temperature</th>
      <th>Humidite</th>
      <th>Date</th>
      <th>Heure</th>
      <th>Saison</th>
      <th>Periode</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0</td>
      <td>17.7</td>
      <td>76.3</td>
      <td>01/01/2018</td>
      <td>00:00:25</td>
      <td>Hiver</td>
      <td>Matin</td>
    </tr>
    <tr>
      <td>1</td>
      <td>17.7</td>
      <td>76.4</td>
      <td>01/01/2018</td>
      <td>00:01:14</td>
      <td>Hiver</td>
      <td>Matin</td>
    </tr>
    <tr>
      <td>2</td>
      <td>17.7</td>
      <td>76.4</td>
      <td>01/01/2018</td>
      <td>00:02:13</td>
      <td>Hiver</td>
      <td>Matin</td>
    </tr>
    <tr>
      <td>3</td>
      <td>17.7</td>
      <td>76.5</td>
      <td>01/01/2018</td>
      <td>00:03:12</td>
      <td>Hiver</td>
      <td>Matin</td>
    </tr>
    <tr>
      <td>4</td>
      <td>17.7</td>
      <td>76.7</td>
      <td>01/01/2018</td>
      <td>00:04:13</td>
      <td>Hiver</td>
      <td>Matin</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[37]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">temperature_group</span><span class="o">=</span><span class="n">df</span><span class="o">.</span><span class="n">groupby</span><span class="p">(</span><span class="s2">&quot;Temperature&quot;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[145]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">8</span><span class="p">,</span><span class="mi">8</span><span class="p">))</span>
<span class="n">ax</span> <span class="o">=</span> <span class="n">sns</span><span class="o">.</span><span class="n">countplot</span><span class="p">(</span><span class="n">y</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s2">&quot;Periode&quot;</span><span class="p">],</span>
                   <span class="n">order</span><span class="o">=</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;Periode&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span><span class="o">.</span><span class="n">index</span><span class="p">,</span>
                   <span class="n">linewidth</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span>
                   <span class="n">edgecolor</span> <span class="o">=</span> <span class="s2">&quot;k&quot;</span><span class="o">*</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;Periode&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">nunique</span><span class="p">()</span>
                 <span class="p">)</span>
<span class="k">for</span> <span class="n">i</span><span class="p">,</span><span class="n">j</span> <span class="ow">in</span> <span class="nb">enumerate</span><span class="p">(</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;Periode&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span><span class="o">.</span><span class="n">values</span><span class="p">):</span>
    <span class="n">ax</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="o">.</span><span class="mi">7</span><span class="p">,</span><span class="n">i</span><span class="p">,</span><span class="n">j</span><span class="p">,</span><span class="n">weight</span> <span class="o">=</span> <span class="s2">&quot;bold&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">&quot;Repartition of Temperature mesure&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span> 
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[115]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">15</span><span class="p">,</span><span class="mi">10</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">barplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="n">df</span><span class="p">[</span><span class="s1">&#39;Date&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span><span class="n">df</span><span class="p">[</span><span class="s1">&#39;Temperature&#39;</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s2">&quot;Reds_r&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;</span><span class="se">\n</span><span class="s1"> Date&#39;</span><span class="p">,</span> <span class="n">fontsize</span><span class="o">=</span><span class="mi">17</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">&#39;#c0392b&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s2">&quot;Temperature</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="n">fontsize</span><span class="o">=</span><span class="mi">15</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">&#39;#c0392b&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">&quot;Temperature en fonction des dates</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="n">fontsize</span><span class="o">=</span><span class="mi">18</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">&#39;#e74c3c&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="n">rotation</span><span class="o">=</span> <span class="mi">45</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[61]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># visualization</span>
<span class="n">f</span><span class="p">,</span><span class="n">ax1</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">figsize</span> <span class="o">=</span><span class="p">(</span><span class="mi">20</span><span class="p">,</span><span class="mi">10</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">pointplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span><span class="n">y</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span><span class="n">data</span><span class="o">=</span><span class="n">df</span><span class="p">,</span><span class="n">color</span><span class="o">=</span><span class="s1">&#39;blue&#39;</span><span class="p">,</span><span class="n">alpha</span><span class="o">=</span><span class="mf">0.8</span><span class="p">)</span>
<span class="n">sns</span><span class="o">.</span><span class="n">pointplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span><span class="n">y</span><span class="o">=</span><span class="s1">&#39;Humidite&#39;</span><span class="p">,</span><span class="n">data</span><span class="o">=</span><span class="n">df</span><span class="p">,</span><span class="n">color</span><span class="o">=</span><span class="s1">&#39;red&#39;</span><span class="p">,</span><span class="n">alpha</span><span class="o">=</span><span class="mf">0.8</span><span class="p">)</span>



<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span><span class="n">fontsize</span> <span class="o">=</span> <span class="mi">15</span><span class="p">,</span><span class="n">color</span><span class="o">=</span><span class="s1">&#39;blue&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">&#39;Temperature/Humidite&#39;</span><span class="p">,</span><span class="n">fontsize</span> <span class="o">=</span> <span class="mi">15</span><span class="p">,</span><span class="n">color</span><span class="o">=</span><span class="s1">&#39;blue&#39;</span><span class="p">)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="n">rotation</span><span class="o">=</span> <span class="mi">60</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s1">&#39;Evolution of Temperature and Humidite according to Date&#39;</span><span class="p">,</span><span class="n">fontsize</span> <span class="o">=</span> <span class="mi">20</span><span class="p">,</span><span class="n">color</span><span class="o">=</span><span class="s1">&#39;green&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">grid</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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MXvsYSUMwCZgWbo0s+0RERGRpJWvJFO1ajYTXJUqO1ZtCk6JW706PPpowaLeIiIiIpId+va16/x8mDgxs20RERGRpJWvJBNYce7p0+G006BBA2aOGGHdr2fOhMMOy3TrRERERCSeM84I/SCoIXMiIiJlTvlLMgEccAC8+CKsWmX1l555Bjp2zHSrRERERKQwTZtCnz62PHs2zJmT2faIiIhIUspnkklEREREyqbgkDlQbyYREZEyRkkmEREREckeJ50EtWrZ8rPPgnOZbY+IiIgkTEkmEREREcketWpZoglgwQKrtSkiIiJlgpJMIiIiIpJdoofMHXkkXc89F448MnNtEhERkSJVznQDREREREQi/Otf0KQJrFgBL7wADRpQc9EiqFEj0y0TERGRQqgnk4iIiIhkl8qV4cwzbfmff2DTpsy2R0RERBKiJJOIiIiIZJ/wIXPr1mWuHSIiIpIwJZlEREREJPsccAC0bGnLGzbY9dKlMHt25tokIiIihVKSSURERESyz1tvweLFkes2bIDu3eG99zLTJhERESmUkkwiIiIikl22bYMLL4T8/Nj3XXAB5OaWfrtERESkUEoyiYiIiEh2ef99WL48/v2LF8NHH5Vee0RERCQhSjKJiIiISHZZtqxkthEREZFSpSSTiIiIiGSXtm1LZhsREREpVUoyiYiIiEh26dUL9tgj/v17720FwEVERCSrKMkkIiIiItklJweefx4aNCh4n+fBhAl2LSIiIllFSSYRERERyT777w8//ADDh0P16qH1zllhcBEREck6SjKJiIiISHbaZRe4+WZo2dJu5wS+uo4fD//8k7l2iYiISExKMomIiIhI2VCvnl2vXw933ZXZtoiIiEgBSjKJiIiISNlQvz7UqWPL99wDq1dntj0iIiISQUkmERERESkbcnLgqqtsed06GDcus+0RERGRCEoyiYiIiEjZMXAg1K5ty3ffDWvWZLY9IiIisoOSTCIiIiKS3Vq3ZlOLFtC6NTRsCFdeaevXrrVEk4iIiGQFJZlEREREJLtNnszMp5+GyZPt9rXXQq1atjxunCWbREREJOOUZBIRERGRsqVRI7j8cltes8aKgIuIiEjGKckkIiIiImXPoEFQs6Yt33WXFQIXERGRjFKSSURERETKnsaN4bLLbHn1arj33sy2R0RERJRkEhEREZEyatAgqFHD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m0p9R4+OL3F8167w4YeS6D1E06ZiPo0Y4V1v4MDIrokDB07Lnz/iCOjZ05teZiZMngzt20eW164NL74oeb4URVEURSn/aCSToiiKoihlktRUaNdODKIGDRLTqldP8kM9+qjkVFq8OLEugiARVZ06yTRlSmK5skAiuDp3hn//la54CxfGP9Jho0YyuuGAAZIzC8Rs691bRg8MmW1eaNYMvv9eEr3/9psYTMuWSXc6RVEURVEqBhrJpCiKoiiK4lC9OrRoEb95EzTGQJMmkjcr0To2bQrjx0verYMOktH7HnpIRp9LpH5t20KvXjKSnBpMiqIoilKxUJNJURRFURSlAlO1quTMSk8v7ZooiqIoilLWUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRg1mRRFURRFURRFURRFUZSEUZNJURRFURRFURRFURRFSRhjrS3tOsSFMWY1sDiGj2YBa3z8ab/1gtCsaHpBaCa7XhCaFU0vCM1k1wtCs6LpBaGZ7HpBaCa7XhCaFU0vCM1k1wtCs6LpBaGZ7HpBaFY0vSA0k10vCM1k1wtCs6LpedHcw1pbL54fKLMmU6wYY2Zaa9skq14QmhVNLwjNZNcLQrOi6QWhmex6QWhWNL0gNJNdLwjNZNcLQrOi6QWhmex6QWhWNL0gNJNdLwjNiqYXhGay6wWhmex6QWhWNL2gNKPR7nKKoiiKoiiKoiiKoihKwqjJpCiKoiiKoiiKoiiKoiRMRTCZnk5yvSA0K5peEJrJrheEZkXTC0Iz2fWC0KxoekFoJrteEJrJrheEZkXTC0Iz2fWC0KxoekFoJrteEJoVTS8IzWTXC0Iz2fWC0KxoekFpRlDuczIp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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[69]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">labels</span><span class="o">=</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;Saison&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span><span class="o">.</span><span class="n">index</span> <span class="c1">## Content Rating values names</span>
<span class="n">sizes</span><span class="o">=</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;Saison&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span><span class="o">.</span><span class="n">values</span>  <span class="c1">## each Content Rating counts</span>
<span class="n">explode</span><span class="o">=</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span> 
<span class="n">colors</span> <span class="o">=</span> <span class="p">[</span><span class="s1">&#39;green&#39;</span><span class="p">,</span><span class="s1">&#39;blue&#39;</span><span class="p">,</span><span class="s1">&#39;red&#39;</span><span class="p">,</span><span class="s1">&#39;yellow&#39;</span><span class="p">]</span>
<span class="nb">print</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">sizes</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span> <span class="o">=</span> <span class="p">(</span><span class="mi">8</span><span class="p">,</span><span class="mi">8</span><span class="p">))</span>
<span class="n">plt</span><span class="o">.</span><span class="n">pie</span><span class="p">(</span><span class="n">sizes</span><span class="p">,</span> <span class="n">explode</span><span class="o">=</span><span class="n">explode</span><span class="p">,</span> <span class="n">labels</span><span class="o">=</span><span class="n">labels</span><span class="p">,</span> <span class="n">colors</span><span class="o">=</span><span class="n">colors</span><span class="p">,</span> <span class="n">autopct</span><span class="o">=</span><span class="s1">&#39;</span><span class="si">%1.1f%%</span><span class="s1">&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s1">&#39;Repartition des mesures en fonction des saisons&#39;</span><span class="p">,</span><span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;red&#39;</span><span class="p">,</span><span class="n">fontsize</span> <span class="o">=</span> <span class="mi">15</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Index([&#39;Automne&#39;, &#39;Hiver&#39;, &#39;Été&#39;, &#39;Printemps&#39;], dtype=&#39;object&#39;)
[595 440 295 110]
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt output_prompt">Out[69]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>Text(0.5, 1.0, &#39;Repartition des mesures en fonction des saisons&#39;)</pre>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[98]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Standard plotly imports</span>

<span class="kn">import</span> <span class="nn">plotly.graph_objs</span> <span class="k">as</span> <span class="nn">go</span>
<span class="kn">import</span> <span class="nn">chart_studio.plotly</span> <span class="k">as</span> <span class="nn">py</span>
<span class="kn">from</span> <span class="nn">plotly.offline</span> <span class="k">import</span> <span class="n">iplot</span><span class="p">,</span> <span class="n">init_notebook_mode</span>
<span class="c1"># Using plotly + cufflinks in offline mode</span>
<span class="kn">import</span> <span class="nn">cufflinks</span>
<span class="n">cufflinks</span><span class="o">.</span><span class="n">go_offline</span><span class="p">(</span><span class="n">connected</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">init_notebook_mode</span><span class="p">(</span><span class="n">connected</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">df</span><span class="p">[</span><span class="s1">&#39;Temperature&#39;</span><span class="p">]</span><span class="o">.</span><span class="n">iplot</span><span class="p">(</span><span class="n">kind</span><span class="o">=</span><span class="s1">&#39;hist&#39;</span><span class="p">,</span> <span class="n">xTitle</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span>
                  <span class="n">yTitle</span><span class="o">=</span><span class="s1">&#39;count&#39;</span><span class="p">,</span> <span class="n">title</span><span class="o">=</span><span class="s1">&#39;Claps Distribution&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
        <script type="text/javascript">
        window.PlotlyConfig = {MathJaxConfig: 'local'};
        if (window.MathJax) {MathJax.Hub.Config({SVG: {font: "STIX-Web"}});}
        if (typeof require !== 'undefined') {
        require.undef("plotly");
        requirejs.config({
            paths: {
                'plotly': ['https://cdn.plot.ly/plotly-latest.min']
            }
        });
        require(['plotly'], function(Plotly) {
            window._Plotly = Plotly;
        });
        }
        </script>
        
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
        <script type="text/javascript">
        window.PlotlyConfig = {MathJaxConfig: 'local'};
        if (window.MathJax) {MathJax.Hub.Config({SVG: {font: "STIX-Web"}});}
        if (typeof require !== 'undefined') {
        require.undef("plotly");
        requirejs.config({
            paths: {
                'plotly': ['https://cdn.plot.ly/plotly-latest.min']
            }
        });
        require(['plotly'], function(Plotly) {
            window._Plotly = Plotly;
        });
        }
        </script>
        
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div>
        
        
            <div id="6cfde462-7480-4745-bd53-5dafad496a2c" class="plotly-graph-div" style="height:525px; width:100%;"></div>
            <script type="text/javascript">
                require(["plotly"], function(Plotly) {
                    window.PLOTLYENV=window.PLOTLYENV || {};
                    window.PLOTLYENV.BASE_URL='https://plot.ly';
                    
                if (document.getElementById("6cfde462-7480-4745-bd53-5dafad496a2c")) {
                    Plotly.newPlot(
                        '6cfde462-7480-4745-bd53-5dafad496a2c',
                        [{"histfunc": "count", "histnorm": "", "marker": {"color": "rgba(255, 153, 51, 1.0)", "line": {"color": "#4D5663", "width": 1.3}}, "name": "Temperature", "opacity": 0.8, "orientation": "v", "type": "histogram", "x": [17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.6, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.2, 17.2, 17.2, 17.1, 17.1, 17.1, 17.1, 17.1, 17.0, 17.0, 17.0, 17.1, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.8, 16.8, 16.8, 16.7, 16.7, 16.7, 16.7, 16.6, 16.5, 16.4, 16.3, 16.3, 16.2, 16.2, 16.1, 16.1, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 16.2, 16.2, 16.2, 16.2, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.9, 15.9, 16.0, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.8, 15.8, 15.8, 15.7, 15.7, 15.7, 15.7, 15.7, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.5, 15.5, 15.5, 15.5, 15.5, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.3, 15.3, 15.3, 15.4, 15.4, 15.4, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 15.0, 14.9, 15.0, 15.0, 15.0, 15.1, 15.1, 15.0, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 15.0, 15.0, 15.0, 15.0, 15.0, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.5, 15.6, 15.7, 15.7, 15.8, 15.8, 15.8, 15.8, 15.9, 15.9, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.2, 16.5, 16.8, 17.0, 17.1, 17.3, 17.3, 17.4, 17.5, 17.6, 17.5, 17.5, 17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.7, 17.8, 17.8, 18.0, 18.0, 18.1, 18.1, 18.1, 18.2, 18.4, 18.7, 18.9, 19.1, 19.0, 19.0, 19.2, 19.4, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.5, 19.5, 19.7, 19.8, 19.9, 19.9, 19.9, 19.9, 19.9, 19.9, 20.0, 20.0, 20.0, 20.0, 20.2, 20.4, 20.5, 20.7, 20.7, 20.7, 20.6, 20.7, 21.0, 21.1, 21.3, 21.4, 21.4, 21.4, 21.5, 21.4, 21.4, 21.5, 21.6, 21.7, 21.7, 21.7, 21.6, 21.6, 21.7, 21.9, 21.6, 21.6, 21.6, 21.5, 21.6, 21.7, 21.6, 21.7, 21.9, 22.1, 22.0, 22.2, 22.3, 22.2, 22.0, 21.9, 21.8, 21.9, 21.8, 21.4, 21.2, 21.1, 21.1, 21.0, 21.0, 21.2, 21.3, 21.5, 21.4, 21.1, 21.0, 21.0, 21.1, 21.1, 21.1, 21.1, 21.1, 21.2, 21.4, 21.5, 21.6, 21.7, 21.6, 21.5, 21.7, 21.8, 21.8, 21.7, 21.8, 22.1, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.1, 22.1, 22.2, 22.2, 22.2, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.5, 22.7, 22.8, 22.9, 22.8, 22.7, 22.6, 22.6, 22.4, 22.4, 22.3, 22.3, 22.4, 22.5, 22.5, 22.6, 22.6, 22.6, 22.6, 22.7, 22.6, 22.6, 22.6, 22.7, 22.7, 22.7, 22.8, 22.6, 22.6, 22.5, 22.4, 22.4, 22.4, 22.5, 22.6, 22.6, 22.5, 22.3, 22.2, 22.1, 22.2, 22.4, 22.6, 22.7, 22.6, 22.6, 22.8, 23.0, 23.3, 23.6, 23.7, 23.5, 23.3, 23.2, 23.1, 23.0, 22.9, 22.9, 22.8, 22.7, 22.6, 22.6, 22.5, 22.5, 22.6, 22.7, 22.7, 22.9, 23.0, 22.9, 22.9, 23.0, 23.0, 23.0, 23.1, 23.3, 23.5, 23.6, 23.7, 23.9, 24.0, 23.8, 23.6, 23.6, 23.5, 23.6, 23.5, 23.3, 23.2, 23.3, 23.5, 23.6, 23.7, 23.8, 23.9, 24.0, 24.0, 24.1, 24.3, 24.3, 24.2, 24.2, 24.1, 23.9, 23.9, 23.8, 23.8, 23.9, 23.9, 24.0, 24.2, 24.3, 24.1, 24.1, 24.1, 24.1, 24.1, 24.2, 24.4, 24.5, 24.5, 24.4, 24.5, 24.3, 24.2, 24.3, 24.3, 24.3, 24.1, 24.1, 24.1, 24.1, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.8, 24.8, 24.8, 24.7, 24.4, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.4, 24.3, 24.3, 24.4, 24.6, 24.8, 24.9, 25.0, 25.1, 25.2, 25.3, 25.4, 25.1, 24.9, 24.8, 24.8, 24.8, 24.8, 24.6, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.6, 24.6, 24.5, 24.3, 24.2, 24.3, 24.4, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.4, 24.4, 24.3, 24.4, 24.6, 24.5, 24.4, 24.4, 24.4, 24.3, 24.4, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.6, 24.7, 24.8, 24.8, 24.8, 24.9, 25.0, 25.0, 25.0, 25.0, 25.0, 24.9, 24.8, 24.7, 24.6, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.4, 24.3, 24.3, 24.3, 24.4, 24.4, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.5, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.7, 24.7, 24.7, 24.7, 24.7, 24.6, 24.6, 24.6, 24.6, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.1, 24.1, 24.1, 24.1, 24.1, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.6, 23.6, 23.6, 23.6, 23.6, 23.5, 23.5, 23.5, 23.5, 23.5, 23.4, 23.4, 23.4, 23.4, 23.3, 23.3, 23.4, 23.4, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.2, 23.2, 23.2, 23.2, 23.2, 23.1, 23.1, 23.1, 23.1, 23.0, 23.0, 23.0, 22.9, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.7, 22.7, 22.7, 22.7, 22.7, 22.7, 22.6, 22.6, 22.6, 22.6, 22.6, 22.6, 22.5, 22.5, 22.5, 22.5, 22.5, 22.4, 22.4, 22.4, 22.4, 22.4, 22.3, 22.3, 22.3, 22.3, 22.3, 22.2, 22.2, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 21.9, 21.9, 21.9, 21.9, 21.8, 21.8, 21.8, 21.8, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.6, 21.6, 21.6, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.3, 21.3, 21.3, 21.3, 21.3, 21.3, 21.2, 21.2, 21.2, 21.2, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 20.9, 20.9, 20.9, 20.9, 20.9, 20.8, 20.8, 20.8, 20.7, 20.7, 20.7, 20.7, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.5, 20.5, 20.5, 20.4, 20.4, 20.4, 20.4, 20.4, 20.3, 20.3, 20.3, 20.3, 20.3, 20.2, 20.2, 20.2, 20.2, 20.2, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 19.9, 19.9, 19.9, 19.9, 19.9, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.5, 19.5, 19.5, 19.5, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.6, 18.7, 18.6, 18.6, 18.6, 18.6, 18.6, 18.5, 18.5, 18.5, 18.5]}],
                        {"barmode": "overlay", "legend": {"bgcolor": "#F5F6F9", "font": {"color": "#4D5663"}}, "paper_bgcolor": "#F5F6F9", "plot_bgcolor": "#F5F6F9", "template": {"data": {"bar": [{"error_x": {"color": "#2a3f5f"}, "error_y": {"color": "#2a3f5f"}, "marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "bar"}], "barpolar": [{"marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "barpolar"}], "carpet": [{"aaxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "baxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "type": "carpet"}], "choropleth": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "choropleth"}], "contour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "contour"}], "contourcarpet": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "contourcarpet"}], "heatmap": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmap"}], "heatmapgl": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmapgl"}], "histogram": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "histogram"}], "histogram2d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2d"}], "histogram2dcontour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2dcontour"}], "mesh3d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "mesh3d"}], "parcoords": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "parcoords"}], "pie": [{"automargin": true, "type": "pie"}], "scatter": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter"}], "scatter3d": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter3d"}], "scattercarpet": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattercarpet"}], "scattergeo": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergeo"}], "scattergl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergl"}], "scattermapbox": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattermapbox"}], "scatterpolar": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolar"}], "scatterpolargl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolargl"}], "scatterternary": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterternary"}], "surface": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "surface"}], "table": [{"cells": {"fill": {"color": "#EBF0F8"}, "line": {"color": "white"}}, "header": {"fill": {"color": "#C8D4E3"}, "line": {"color": "white"}}, "type": "table"}]}, "layout": {"annotationdefaults": {"arrowcolor": "#2a3f5f", "arrowhead": 0, "arrowwidth": 1}, "coloraxis": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "colorscale": {"diverging": [[0, "#8e0152"], [0.1, "#c51b7d"], [0.2, "#de77ae"], [0.3, "#f1b6da"], [0.4, "#fde0ef"], [0.5, "#f7f7f7"], [0.6, "#e6f5d0"], [0.7, "#b8e186"], [0.8, "#7fbc41"], [0.9, "#4d9221"], [1, "#276419"]], "sequential": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "sequentialminus": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]]}, "colorway": ["#636efa", "#EF553B", "#00cc96", "#ab63fa", "#FFA15A", "#19d3f3", "#FF6692", "#B6E880", "#FF97FF", "#FECB52"], "font": {"color": "#2a3f5f"}, "geo": {"bgcolor": "white", "lakecolor": "white", "landcolor": "#E5ECF6", "showlakes": true, "showland": true, "subunitcolor": "white"}, "hoverlabel": {"align": "left"}, "hovermode": "closest", "mapbox": {"style": "light"}, "paper_bgcolor": "white", "plot_bgcolor": "#E5ECF6", "polar": {"angularaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "radialaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "scene": {"xaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "yaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "zaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}}, "shapedefaults": {"line": {"color": "#2a3f5f"}}, "ternary": {"aaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "baxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "caxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "title": {"x": 0.05}, "xaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}, "yaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}}}, "title": {"font": {"color": "#4D5663"}, "text": "Claps Distribution"}, "xaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Temperature"}, "zerolinecolor": "#E1E5ED"}, "yaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "count"}, "zerolinecolor": "#E1E5ED"}},
                        {"showLink": true, "linkText": "Export to plot.ly", "plotlyServerURL": "https://plot.ly", "responsive": true}
                    ).then(function(){
                            
var gd = document.getElementById('6cfde462-7480-4745-bd53-5dafad496a2c');
var x = new MutationObserver(function (mutations, observer) {{
        var display = window.getComputedStyle(gd).display;
        if (!display || display === 'none') {{
            console.log([gd, 'removed!']);
            Plotly.purge(gd);
            observer.disconnect();
        }}
}});

// Listen for the removal of the full notebook cells
var notebookContainer = gd.closest('#notebook-container');
if (notebookContainer) {{
    x.observe(notebookContainer, {childList: true});
}}

// Listen for the clearing of the current output cell
var outputEl = gd.closest('.output');
if (outputEl) {{
    x.observe(outputEl, {childList: true});
}}

                        })
                };
                });
            </script>
        </div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[110]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Resample to monthly frequency and plot </span>
<span class="n">df2</span> <span class="o">=</span> <span class="n">df</span><span class="p">[[</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span><span class="s1">&#39;Humidite&#39;</span><span class="p">,</span><span class="s1">&#39;Date&#39;</span><span class="p">]]</span><span class="o">.</span>\
      <span class="n">set_index</span><span class="p">(</span><span class="s1">&#39;Date&#39;</span><span class="p">)</span>
         
<span class="n">df2</span><span class="o">.</span><span class="n">iplot</span><span class="p">(</span><span class="n">kind</span><span class="o">=</span><span class="s1">&#39;bar&#39;</span><span class="p">,</span> <span class="n">xTitle</span><span class="o">=</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span> <span class="n">yTitle</span><span class="o">=</span><span class="s1">&#39;Mesure&#39;</span><span class="p">,</span>
    <span class="n">title</span><span class="o">=</span><span class="s1">&#39;Temperature and Humidite according to the Date&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div>
        
        
            <div id="95c2ecb5-ae8c-491a-a596-b4f0d635487e" class="plotly-graph-div" style="height:525px; width:100%;"></div>
            <script type="text/javascript">
                require(["plotly"], function(Plotly) {
                    window.PLOTLYENV=window.PLOTLYENV || {};
                    window.PLOTLYENV.BASE_URL='https://plot.ly';
                    
                if (document.getElementById("95c2ecb5-ae8c-491a-a596-b4f0d635487e")) {
                    Plotly.newPlot(
                        '95c2ecb5-ae8c-491a-a596-b4f0d635487e',
                        [{"marker": {"color": "rgba(255, 153, 51, 0.6)", "line": {"color": "rgba(255, 153, 51, 1.0)", "width": 1}}, "name": "Temperature", "orientation": "v", "text": "", "type": "bar", "x": ["01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "21/12/2018", "21/12/2018", "21/12/2018", "21/12/2018", "21/12/2018", "21/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "06/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "13/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019"], "y": [17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.6, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.2, 17.2, 17.2, 17.1, 17.1, 17.1, 17.1, 17.1, 17.0, 17.0, 17.0, 17.1, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.8, 16.8, 16.8, 16.7, 16.7, 16.7, 16.7, 16.6, 16.5, 16.4, 16.3, 16.3, 16.2, 16.2, 16.1, 16.1, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 16.2, 16.2, 16.2, 16.2, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.9, 15.9, 16.0, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.8, 15.8, 15.8, 15.7, 15.7, 15.7, 15.7, 15.7, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.5, 15.5, 15.5, 15.5, 15.5, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.3, 15.3, 15.3, 15.4, 15.4, 15.4, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 15.0, 14.9, 15.0, 15.0, 15.0, 15.1, 15.1, 15.0, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 15.0, 15.0, 15.0, 15.0, 15.0, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.5, 15.6, 15.7, 15.7, 15.8, 15.8, 15.8, 15.8, 15.9, 15.9, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.2, 16.5, 16.8, 17.0, 17.1, 17.3, 17.3, 17.4, 17.5, 17.6, 17.5, 17.5, 17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.7, 17.8, 17.8, 18.0, 18.0, 18.1, 18.1, 18.1, 18.2, 18.4, 18.7, 18.9, 19.1, 19.0, 19.0, 19.2, 19.4, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.5, 19.5, 19.7, 19.8, 19.9, 19.9, 19.9, 19.9, 19.9, 19.9, 20.0, 20.0, 20.0, 20.0, 20.2, 20.4, 20.5, 20.7, 20.7, 20.7, 20.6, 20.7, 21.0, 21.1, 21.3, 21.4, 21.4, 21.4, 21.5, 21.4, 21.4, 21.5, 21.6, 21.7, 21.7, 21.7, 21.6, 21.6, 21.7, 21.9, 21.6, 21.6, 21.6, 21.5, 21.6, 21.7, 21.6, 21.7, 21.9, 22.1, 22.0, 22.2, 22.3, 22.2, 22.0, 21.9, 21.8, 21.9, 21.8, 21.4, 21.2, 21.1, 21.1, 21.0, 21.0, 21.2, 21.3, 21.5, 21.4, 21.1, 21.0, 21.0, 21.1, 21.1, 21.1, 21.1, 21.1, 21.2, 21.4, 21.5, 21.6, 21.7, 21.6, 21.5, 21.7, 21.8, 21.8, 21.7, 21.8, 22.1, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.1, 22.1, 22.2, 22.2, 22.2, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.5, 22.7, 22.8, 22.9, 22.8, 22.7, 22.6, 22.6, 22.4, 22.4, 22.3, 22.3, 22.4, 22.5, 22.5, 22.6, 22.6, 22.6, 22.6, 22.7, 22.6, 22.6, 22.6, 22.7, 22.7, 22.7, 22.8, 22.6, 22.6, 22.5, 22.4, 22.4, 22.4, 22.5, 22.6, 22.6, 22.5, 22.3, 22.2, 22.1, 22.2, 22.4, 22.6, 22.7, 22.6, 22.6, 22.8, 23.0, 23.3, 23.6, 23.7, 23.5, 23.3, 23.2, 23.1, 23.0, 22.9, 22.9, 22.8, 22.7, 22.6, 22.6, 22.5, 22.5, 22.6, 22.7, 22.7, 22.9, 23.0, 22.9, 22.9, 23.0, 23.0, 23.0, 23.1, 23.3, 23.5, 23.6, 23.7, 23.9, 24.0, 23.8, 23.6, 23.6, 23.5, 23.6, 23.5, 23.3, 23.2, 23.3, 23.5, 23.6, 23.7, 23.8, 23.9, 24.0, 24.0, 24.1, 24.3, 24.3, 24.2, 24.2, 24.1, 23.9, 23.9, 23.8, 23.8, 23.9, 23.9, 24.0, 24.2, 24.3, 24.1, 24.1, 24.1, 24.1, 24.1, 24.2, 24.4, 24.5, 24.5, 24.4, 24.5, 24.3, 24.2, 24.3, 24.3, 24.3, 24.1, 24.1, 24.1, 24.1, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.8, 24.8, 24.8, 24.7, 24.4, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.4, 24.3, 24.3, 24.4, 24.6, 24.8, 24.9, 25.0, 25.1, 25.2, 25.3, 25.4, 25.1, 24.9, 24.8, 24.8, 24.8, 24.8, 24.6, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.6, 24.6, 24.5, 24.3, 24.2, 24.3, 24.4, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.4, 24.4, 24.3, 24.4, 24.6, 24.5, 24.4, 24.4, 24.4, 24.3, 24.4, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.6, 24.7, 24.8, 24.8, 24.8, 24.9, 25.0, 25.0, 25.0, 25.0, 25.0, 24.9, 24.8, 24.7, 24.6, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.4, 24.3, 24.3, 24.3, 24.4, 24.4, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.5, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.7, 24.7, 24.7, 24.7, 24.7, 24.6, 24.6, 24.6, 24.6, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.1, 24.1, 24.1, 24.1, 24.1, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.6, 23.6, 23.6, 23.6, 23.6, 23.5, 23.5, 23.5, 23.5, 23.5, 23.4, 23.4, 23.4, 23.4, 23.3, 23.3, 23.4, 23.4, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.2, 23.2, 23.2, 23.2, 23.2, 23.1, 23.1, 23.1, 23.1, 23.0, 23.0, 23.0, 22.9, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.7, 22.7, 22.7, 22.7, 22.7, 22.7, 22.6, 22.6, 22.6, 22.6, 22.6, 22.6, 22.5, 22.5, 22.5, 22.5, 22.5, 22.4, 22.4, 22.4, 22.4, 22.4, 22.3, 22.3, 22.3, 22.3, 22.3, 22.2, 22.2, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 21.9, 21.9, 21.9, 21.9, 21.8, 21.8, 21.8, 21.8, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.6, 21.6, 21.6, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.3, 21.3, 21.3, 21.3, 21.3, 21.3, 21.2, 21.2, 21.2, 21.2, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 20.9, 20.9, 20.9, 20.9, 20.9, 20.8, 20.8, 20.8, 20.7, 20.7, 20.7, 20.7, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.5, 20.5, 20.5, 20.4, 20.4, 20.4, 20.4, 20.4, 20.3, 20.3, 20.3, 20.3, 20.3, 20.2, 20.2, 20.2, 20.2, 20.2, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 19.9, 19.9, 19.9, 19.9, 19.9, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.5, 19.5, 19.5, 19.5, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.6, 18.7, 18.6, 18.6, 18.6, 18.6, 18.6, 18.5, 18.5, 18.5, 18.5]}, {"marker": {"color": "rgba(55, 128, 191, 0.6)", "line": {"color": "rgba(55, 128, 191, 1.0)", "width": 1}}, "name": "Humidite", "orientation": "v", "text": "", "type": "bar", "x": ["01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "01/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "30/01/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "21/02/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "14/04/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/06/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "07/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "24/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "30/07/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "18/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "31/08/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "13/10/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "10/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "14/11/2018", "21/12/2018", "21/12/2018", "21/12/2018", "21/12/2018", "21/12/2018", "21/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "31/12/2018", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "19/02/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "01/03/2019", "06/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "10/03/2019", "13/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "31/03/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "15/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "28/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "31/05/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "15/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "16/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "20/06/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "01/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "16/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "29/07/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "08/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "24/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "25/08/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "25/12/2019", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "01/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "09/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "11/01/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "15/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "28/02/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "02/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "03/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "04/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "05/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "06/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "07/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "08/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "14/03/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "15/04/2020", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019"], "y": [76.3, 76.4, 76.4, 76.5, 76.7, 76.8, 76.9, 77.0, 77.1, 77.1, 77.1, 77.2, 77.2, 77.2, 77.3, 77.4, 77.5, 77.5, 77.6, 77.7, 77.8, 77.9, 78.0, 78.2, 78.3, 78.4, 78.4, 78.4, 78.4, 78.5, 78.5, 78.5, 78.5, 78.4, 78.4, 78.4, 78.5, 78.4, 78.4, 78.4, 78.4, 78.4, 78.4, 78.3, 78.3, 78.3, 78.3, 78.4, 78.5, 78.6, 78.7, 78.8, 78.8, 78.7, 78.7, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.9, 79.1, 79.1, 79.0, 79.0, 79.0, 79.1, 79.1, 79.2, 79.2, 79.3, 79.5, 79.5, 79.6, 79.8, 79.8, 79.8, 79.9, 79.9, 80.0, 80.0, 80.1, 80.1, 80.1, 80.1, 80.1, 80.1, 80.2, 80.2, 80.2, 80.3, 80.4, 80.4, 80.5, 80.6, 80.6, 80.7, 80.7, 80.8, 80.8, 80.8, 80.9, 81.0, 81.1, 81.1, 81.2, 81.2, 81.3, 81.4, 81.5, 81.6, 81.7, 81.8, 81.9, 82.0, 81.9, 81.7, 81.4, 81.4, 81.6, 82.0, 82.5, 82.9, 83.2, 83.4, 83.5, 83.7, 83.9, 84.1, 84.1, 84.1, 84.1, 84.0, 83.8, 83.7, 83.7, 83.6, 83.6, 83.5, 83.4, 83.3, 83.3, 83.2, 83.1, 83.0, 82.9, 82.8, 82.7, 82.5, 82.4, 82.3, 82.3, 82.3, 82.3, 82.3, 82.4, 82.4, 82.5, 82.5, 82.6, 82.5, 82.5, 82.5, 82.5, 82.5, 82.5, 82.4, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.4, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.4, 82.4, 82.5, 82.5, 82.5, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.7, 82.7, 82.8, 82.8, 82.9, 83.0, 83.0, 83.1, 83.1, 83.2, 83.3, 83.3, 83.4, 83.5, 83.5, 83.6, 83.7, 83.7, 83.8, 83.8, 83.8, 83.7, 83.7, 83.7, 83.6, 83.6, 83.6, 83.6, 83.6, 83.6, 83.7, 83.7, 83.8, 83.9, 83.9, 84.0, 84.0, 84.1, 84.2, 84.2, 84.2, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.4, 84.5, 84.5, 84.6, 84.6, 84.6, 84.6, 84.6, 84.5, 84.5, 84.5, 84.5, 84.4, 84.4, 84.3, 84.3, 84.1, 83.9, 83.7, 83.6, 83.4, 83.3, 83.2, 83.1, 83.1, 83.0, 83.0, 82.9, 82.9, 82.9, 82.8, 82.7, 82.5, 82.4, 82.3, 82.3, 82.2, 82.2, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.2, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.0, 82.0, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.8, 81.8, 81.8, 81.9, 81.9, 81.9, 82.0, 82.0, 82.1, 82.2, 82.2, 82.2, 82.3, 82.4, 82.5, 82.5, 82.6, 82.7, 82.9, 82.9, 82.9, 82.9, 82.9, 82.9, 83.0, 83.0, 82.9, 82.8, 82.8, 82.8, 82.7, 82.7, 82.7, 82.7, 82.8, 82.8, 82.8, 82.8, 82.8, 82.9, 82.9, 82.9, 82.9, 83.0, 83.0, 83.0, 83.0, 83.1, 83.1, 83.2, 83.2, 83.3, 83.3, 83.4, 83.5, 83.5, 83.6, 83.7, 83.7, 83.7, 83.8, 83.8, 83.8, 83.8, 83.8, 83.8, 83.9, 83.9, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.1, 84.1, 84.1, 84.0, 84.1, 84.1, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 83.9, 83.9, 83.8, 83.8, 83.8, 83.6, 83.6, 83.5, 83.5, 83.5, 83.4, 83.4, 83.4, 83.3, 83.3, 83.3, 83.3, 83.2, 83.2, 83.2, 83.1, 83.0, 82.9, 82.9, 82.8, 82.7, 82.6, 82.4, 82.3, 82.2, 81.9, 81.7, 81.6, 81.4, 81.0, 80.9, 80.8, 80.8, 80.7, 80.6, 80.4, 80.2, 80.2, 80.1, 79.9, 79.9, 79.8, 79.5, 79.3, 78.9, 78.8, 78.6, 78.4, 78.1, 78.0, 77.9, 77.8, 77.8, 77.5, 77.3, 77.2, 76.8, 76.7, 76.6, 76.5, 76.3, 76.2, 75.7, 75.0, 74.3, 73.8, 72.8, 72.5, 72.0, 71.1, 70.3, 70.4, 70.2, 69.0, 68.8, 68.3, 68.1, 67.7, 67.6, 67.8, 67.4, 67.2, 66.8, 66.8, 66.5, 66.6, 66.7, 66.6, 66.1, 65.5, 64.4, 63.9, 64.0, 64.0, 63.0, 62.1, 61.5, 61.1, 60.8, 60.6, 60.6, 60.0, 60.1, 60.1, 60.0, 59.5, 59.2, 57.8, 57.8, 57.7, 57.0, 56.9, 56.9, 56.5, 56.5, 56.4, 56.4, 55.4, 55.6, 55.2, 54.2, 54.1, 54.2, 54.5, 54.0, 53.4, 52.9, 52.3, 51.9, 52.1, 51.5, 51.5, 51.7, 51.9, 51.5, 51.1, 50.9, 51.0, 51.1, 51.3, 51.4, 50.5, 50.5, 51.0, 50.5, 50.7, 50.5, 50.2, 50.6, 50.6, 50.3, 49.5, 49.7, 50.0, 49.5, 48.7, 49.2, 49.5, 49.9, 50.0, 49.2, 49.7, 50.6, 50.5, 50.9, 51.0, 51.3, 51.1, 51.2, 51.2, 50.0, 50.7, 51.2, 51.4, 51.4, 51.2, 51.3, 51.5, 51.5, 51.6, 51.4, 51.5, 51.2, 51.2, 50.8, 51.2, 51.3, 51.1, 50.4, 50.4, 51.1, 50.9, 50.3, 50.3, 50.6, 50.2, 50.0, 49.9, 49.8, 50.2, 49.8, 49.4, 49.2, 49.5, 49.2, 49.4, 49.2, 49.1, 49.1, 49.3, 48.9, 49.0, 49.6, 49.2, 48.8, 48.1, 47.5, 47.5, 47.6, 47.5, 48.0, 48.2, 48.6, 48.3, 48.3, 48.0, 48.1, 48.0, 47.9, 47.5, 47.3, 47.4, 46.9, 47.1, 47.5, 46.9, 46.6, 47.1, 46.5, 46.6, 46.8, 46.8, 47.3, 47.3, 47.7, 47.6, 47.5, 47.1, 47.3, 47.6, 48.0, 48.2, 48.4, 48.7, 48.1, 47.1, 47.5, 47.4, 48.0, 48.1, 47.8, 46.9, 46.2, 45.6, 46.3, 46.3, 46.3, 47.0, 47.2, 47.1, 47.3, 47.6, 48.0, 48.1, 47.9, 48.1, 48.1, 47.8, 47.7, 47.8, 47.3, 47.4, 47.4, 46.7, 46.9, 46.8, 46.9, 47.2, 46.3, 46.3, 46.3, 46.3, 45.7, 45.7, 46.3, 46.1, 46.3, 45.8, 45.3, 45.5, 45.7, 45.9, 45.3, 45.2, 44.5, 44.9, 44.5, 44.1, 44.3, 44.5, 44.0, 42.7, 43.0, 43.0, 43.0, 43.0, 43.1, 43.3, 43.6, 43.6, 43.5, 43.6, 44.0, 43.0, 43.1, 43.2, 43.2, 43.1, 43.2, 43.6, 43.5, 43.4, 42.8, 42.5, 42.5, 43.0, 42.9, 43.0, 43.3, 42.9, 42.7, 43.3, 42.9, 43.1, 43.4, 42.8, 42.4, 42.1, 42.4, 42.4, 42.5, 42.6, 42.3, 42.2, 42.2, 42.0, 42.6, 43.3, 43.0, 42.4, 42.3, 42.8, 42.4, 42.6, 42.6, 42.9, 42.9, 43.0, 43.4, 43.2, 42.8, 42.5, 42.9, 43.4, 43.4, 43.7, 43.5, 42.9, 42.8, 42.8, 42.7, 42.0, 41.2, 41.8, 41.3, 41.5, 41.6, 41.0, 40.9, 40.8, 41.4, 40.8, 41.1, 41.1, 41.0, 41.0, 40.8, 40.8, 41.0, 41.4, 41.8, 41.7, 41.4, 41.6, 41.4, 41.8, 41.8, 41.8, 41.8, 41.5, 41.9, 41.8, 41.6, 41.3, 41.7, 41.8, 41.7, 41.8, 42.2, 41.8, 41.7, 42.0, 41.9, 42.0, 41.5, 41.9, 42.3, 42.3, 42.0, 42.0, 42.0, 42.3, 41.8, 42.6, 41.2, 40.7, 40.9, 40.8, 41.2, 41.2, 41.7, 41.8, 42.0, 41.9, 42.1, 41.8, 41.8, 42.2, 42.2, 42.6, 42.3, 42.3, 42.7, 42.6, 42.6, 42.4, 42.4, 42.6, 42.6, 42.8, 42.8, 43.0, 43.2, 43.4, 43.5, 43.4, 43.2, 43.5, 43.5, 43.5, 43.1, 43.2, 43.3, 43.4, 43.5, 43.0, 43.1, 42.6, 43.2, 43.2, 43.3, 43.3, 43.3, 43.4, 43.5, 43.7, 43.9, 44.0, 43.4, 43.4, 43.8, 43.6, 43.3, 43.6, 43.9, 44.0, 44.0, 43.8, 43.9, 43.7, 43.8, 43.9, 43.7, 43.8, 43.8, 43.3, 42.9, 43.1, 43.3, 43.2, 43.0, 42.9, 42.5, 41.7, 41.7, 40.9, 40.7, 40.9, 40.9, 41.0, 41.1, 41.2, 41.5, 41.6, 41.6, 41.8, 41.8, 41.8, 41.8, 42.1, 42.3, 42.2, 42.3, 42.0, 42.2, 42.2, 41.6, 41.5, 41.6, 41.6, 41.6, 41.8, 41.6, 41.6, 41.7, 41.5, 41.6, 42.0, 41.8, 41.8, 41.8, 41.6, 41.7, 41.7, 41.8, 42.0, 41.9, 42.1, 42.2, 42.3, 42.0, 42.1, 42.3, 42.3, 42.3, 42.4, 42.6, 42.6, 42.4, 42.4, 42.4, 42.6, 42.3, 42.3, 42.4, 42.4, 42.5, 42.6, 42.4, 42.1, 42.0, 42.1, 41.7, 41.8, 41.9, 42.0, 41.9, 41.8, 41.6, 41.7, 41.9, 42.0, 42.2, 42.2, 42.1, 42.3, 42.3, 42.4, 42.2, 42.4, 41.7, 41.8, 41.9, 41.8, 41.5, 41.5, 41.5, 41.3, 41.3, 41.4, 41.0, 40.8, 40.7, 40.0, 40.5, 40.6, 40.7, 40.8, 41.2, 41.1, 41.1, 41.1, 40.9, 40.9, 40.9, 41.0, 41.2, 41.2, 41.3, 41.1, 41.1, 41.2, 41.4, 41.5, 41.6, 41.7, 41.7, 41.7, 41.9, 42.0, 42.1, 42.4, 42.5, 42.4, 42.7, 42.7, 42.8, 43.3, 43.4, 43.6, 43.7, 43.8, 43.8, 44.0, 44.2, 44.4, 44.6, 44.9, 44.9, 45.0, 45.2, 45.4, 45.5, 45.6, 45.8, 46.0, 46.2, 46.4, 46.7, 46.9, 47.0, 47.2, 47.3, 47.3, 47.5, 47.5, 47.6, 47.7, 47.8, 47.8, 47.9, 48.0, 48.1, 48.0, 48.1, 48.2, 48.2, 48.3, 48.3, 48.2, 48.2, 48.5, 48.5, 48.6, 48.6, 48.7, 48.5, 48.5, 48.6, 48.4, 48.4, 48.5, 48.8, 48.9, 48.8, 48.7, 49.0, 48.9, 48.9, 49.0, 49.1, 49.3, 48.6, 48.3, 48.1, 48.0, 47.9, 47.5, 47.5, 47.3, 47.3, 47.3, 47.3, 47.0, 46.6, 46.7, 46.6, 46.8, 46.7, 46.7, 46.6, 46.8, 46.6, 46.9, 46.8, 46.7, 47.0, 46.8, 47.0, 47.0, 47.1, 46.8, 46.7, 46.0, 46.2, 46.4, 46.4, 46.3, 46.4, 46.1, 46.0, 46.2, 45.8, 46.8, 46.3, 46.2, 46.1, 46.0, 46.0, 46.2, 46.3, 46.5, 46.5, 46.5, 46.6, 46.6, 46.6, 46.6, 46.5, 46.5, 46.6, 46.6, 46.6, 46.6, 46.8, 47.1, 47.0, 47.1, 47.5, 47.6, 48.1, 47.9, 47.8, 47.7, 47.7, 48.0, 48.0, 48.5, 48.5, 48.6, 48.8, 49.0, 49.3, 49.2, 49.5, 49.6, 49.8, 49.9, 50.2, 50.3, 50.5, 50.7, 51.0, 51.1, 51.7, 51.9, 52.1, 52.3, 52.3, 52.5, 52.6, 52.9, 53.3, 53.4, 53.5, 53.7, 53.9, 54.1, 54.3, 54.3, 54.5, 54.7, 54.9, 55.0, 55.1, 55.4, 55.6, 55.6, 56.0, 56.1, 56.3, 56.5, 56.6, 56.8, 56.9, 57.1, 57.2, 57.2, 57.4, 57.6, 57.8, 58.0, 58.1, 58.1, 58.2, 58.5, 58.6, 58.7, 58.7, 58.9, 59.2, 59.2, 59.3, 59.5, 59.7, 59.9, 60.0, 60.1, 60.2, 60.3, 60.3, 60.4, 60.5, 60.6, 60.7, 60.9, 60.9, 61.0, 61.1, 61.2, 61.3, 61.4, 61.5, 61.7, 61.8, 61.9, 62.0, 62.1, 62.1, 62.3, 62.4, 62.4, 62.6, 62.6, 62.8, 62.9, 62.9, 63.1, 63.2, 63.3, 63.5, 63.6, 63.7, 63.7, 64.0, 64.0, 64.0, 64.1, 64.1, 64.3, 64.3, 64.4, 64.6, 64.7, 64.8, 64.9, 64.9, 65.1, 65.2, 65.3, 65.4, 65.5, 65.7, 65.8, 66.0, 66.0, 66.0, 66.0, 66.1, 66.2, 66.2, 66.2, 66.4, 66.4, 66.5, 66.6, 66.6, 66.7, 66.8, 66.9, 67.0, 67.1, 67.2, 67.2, 67.4, 67.4, 67.4, 67.5, 67.4, 67.4, 67.5, 67.6, 67.7, 67.8, 67.8, 67.8, 67.8, 67.9, 67.9, 67.9, 68.0, 68.1, 68.2, 68.3, 68.3, 68.3, 68.3, 68.3, 68.4, 68.4, 68.4, 68.5, 68.6, 68.6, 68.6, 68.7, 68.8, 68.8, 68.9, 68.9, 68.9, 69.0, 69.1, 69.1, 69.2, 69.3, 69.4, 69.5, 69.6, 69.7, 69.9, 69.8, 69.9, 70.0, 70.1, 70.3, 70.4, 70.5, 70.7, 70.8, 70.8, 70.9]}],
                        {"legend": {"bgcolor": "#F5F6F9", "font": {"color": "#4D5663"}}, "paper_bgcolor": "#F5F6F9", "plot_bgcolor": "#F5F6F9", "template": {"data": {"bar": [{"error_x": {"color": "#2a3f5f"}, "error_y": {"color": "#2a3f5f"}, "marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "bar"}], "barpolar": [{"marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "barpolar"}], "carpet": [{"aaxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "baxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "type": "carpet"}], "choropleth": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "choropleth"}], "contour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "contour"}], "contourcarpet": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "contourcarpet"}], "heatmap": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmap"}], "heatmapgl": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmapgl"}], "histogram": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "histogram"}], "histogram2d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2d"}], "histogram2dcontour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2dcontour"}], "mesh3d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "mesh3d"}], "parcoords": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "parcoords"}], "pie": [{"automargin": true, "type": "pie"}], "scatter": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter"}], "scatter3d": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter3d"}], "scattercarpet": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattercarpet"}], "scattergeo": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergeo"}], "scattergl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergl"}], "scattermapbox": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattermapbox"}], "scatterpolar": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolar"}], "scatterpolargl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolargl"}], "scatterternary": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterternary"}], "surface": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "surface"}], "table": [{"cells": {"fill": {"color": "#EBF0F8"}, "line": {"color": "white"}}, "header": {"fill": {"color": "#C8D4E3"}, "line": {"color": "white"}}, "type": "table"}]}, "layout": {"annotationdefaults": {"arrowcolor": "#2a3f5f", "arrowhead": 0, "arrowwidth": 1}, "coloraxis": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "colorscale": {"diverging": [[0, "#8e0152"], [0.1, "#c51b7d"], [0.2, "#de77ae"], [0.3, "#f1b6da"], [0.4, "#fde0ef"], [0.5, "#f7f7f7"], [0.6, "#e6f5d0"], [0.7, "#b8e186"], [0.8, "#7fbc41"], [0.9, "#4d9221"], [1, "#276419"]], "sequential": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "sequentialminus": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]]}, "colorway": ["#636efa", "#EF553B", "#00cc96", "#ab63fa", "#FFA15A", "#19d3f3", "#FF6692", "#B6E880", "#FF97FF", "#FECB52"], "font": {"color": "#2a3f5f"}, "geo": {"bgcolor": "white", "lakecolor": "white", "landcolor": "#E5ECF6", "showlakes": true, "showland": true, "subunitcolor": "white"}, "hoverlabel": {"align": "left"}, "hovermode": "closest", "mapbox": {"style": "light"}, "paper_bgcolor": "white", "plot_bgcolor": "#E5ECF6", "polar": {"angularaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "radialaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "scene": {"xaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "yaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "zaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}}, "shapedefaults": {"line": {"color": "#2a3f5f"}}, "ternary": {"aaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "baxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "caxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "title": {"x": 0.05}, "xaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}, "yaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}}}, "title": {"font": {"color": "#4D5663"}, "text": "Temperature and Humidite according to the Date"}, "xaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Date"}, "zerolinecolor": "#E1E5ED"}, "yaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Mesure"}, "zerolinecolor": "#E1E5ED"}},
                        {"showLink": true, "linkText": "Export to plot.ly", "plotlyServerURL": "https://plot.ly", "responsive": true}
                    ).then(function(){
                            
var gd = document.getElementById('95c2ecb5-ae8c-491a-a596-b4f0d635487e');
var x = new MutationObserver(function (mutations, observer) {{
        var display = window.getComputedStyle(gd).display;
        if (!display || display === 'none') {{
            console.log([gd, 'removed!']);
            Plotly.purge(gd);
            observer.disconnect();
        }}
}});

// Listen for the removal of the full notebook cells
var notebookContainer = gd.closest('#notebook-container');
if (notebookContainer) {{
    x.observe(notebookContainer, {childList: true});
}}

// Listen for the clearing of the current output cell
var outputEl = gd.closest('.output');
if (outputEl) {{
    x.observe(outputEl, {childList: true});
}}

                        })
                };
                });
            </script>
        </div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[133]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df</span><span class="o">.</span><span class="n">pivot</span><span class="p">(</span><span class="n">columns</span><span class="o">=</span><span class="s1">&#39;Periode&#39;</span><span class="p">,</span> <span class="n">values</span><span class="o">=</span><span class="s1">&#39;Humidite&#39;</span><span class="p">)</span><span class="o">.</span><span class="n">iplot</span><span class="p">(</span>
        <span class="n">kind</span><span class="o">=</span><span class="s1">&#39;box&#39;</span><span class="p">,</span>
        <span class="n">yTitle</span><span class="o">=</span><span class="s1">&#39;Humidite&#39;</span><span class="p">,</span>
        <span class="n">title</span><span class="o">=</span><span class="s1">&#39;Repartition of Humidite according to the time&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div>
        
        
            <div id="97a15f82-6abe-4e74-8103-d2a77d69d209" class="plotly-graph-div" style="height:525px; width:100%;"></div>
            <script type="text/javascript">
                require(["plotly"], function(Plotly) {
                    window.PLOTLYENV=window.PLOTLYENV || {};
                    window.PLOTLYENV.BASE_URL='https://plot.ly';
                    
                if (document.getElementById("97a15f82-6abe-4e74-8103-d2a77d69d209")) {
                    Plotly.newPlot(
                        '97a15f82-6abe-4e74-8103-d2a77d69d209',
                        [{"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(255, 153, 51, 1.0)"}, "name": "Aprem", "orientation": "v", "type": "box", "y": [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 48.0, 48.1, 47.9, 48.1, 48.1, 47.8, 47.7, 47.8, 47.3, 47.4, 47.4, 46.7, 46.9, 46.8, 46.9, 47.2, 46.3, 46.3, 46.3, 46.3, 45.7, 45.7, 46.3, 46.1, 46.3, 45.8, 45.3, 45.5, 45.7, 45.9, 45.3, 45.2, 44.5, 44.9, 44.5, 44.1, 44.3, 44.5, 44.0, 42.7, 43.0, 43.0, 43.0, 43.0, 43.1, 43.3, 43.6, 43.6, 43.5, 43.6, 44.0, 43.0, 43.1, 43.2, 43.2, 43.1, 43.2, 43.6, 43.5, 43.4, 42.8, 42.5, 42.5, 43.0, 42.9, 43.0, 43.3, 42.9, 42.7, 43.3, 42.9, 43.1, 43.4, 42.8, 42.4, 42.1, 42.4, 42.4, 42.5, 42.6, 42.3, 42.2, 42.2, 42.0, 42.6, 43.3, 43.0, 42.4, 42.3, 42.8, 42.4, 42.6, 42.6, 42.9, 42.9, 43.0, 43.4, 43.2, 42.8, 42.5, 42.9, 43.4, 43.4, 43.7, 43.5, 42.9, 42.8, 42.8, 42.7, 42.0, 41.2, 41.8, 41.3, 41.5, 41.6, 41.0, 40.9, 40.8, 41.4, 40.8, 41.1, 41.1, 41.0, 41.0, 40.8, 40.8, 41.0, 41.4, 41.8, 41.7, 41.4, 41.6, 41.4, 41.8, 41.8, 41.8, 41.8, 41.5, 41.9, 41.8, 41.6, 41.3, 41.7, 41.8, 41.7, 41.8, 42.2, 41.8, 41.7, 42.0, 41.9, 42.0, 41.5, 41.9, 42.3, 42.3, 42.0, 42.0, 42.0, 42.3, 41.8, 42.6, 41.2, 40.7, 40.9, 40.8, 41.2, 41.2, 41.7, 41.8, 42.0, 41.9, 42.1, 41.8, 41.8, 42.2, 42.2, 42.6, 42.3, 42.3, 42.7, 42.6, 42.6, 42.4, 42.4, 42.6, 42.6, 42.8, 42.8, 43.0, 43.2, 43.4, 43.5, 43.4, 43.2, 43.5, 43.5, 43.5, 43.1, 43.2, 43.3, 43.4, 43.5, 43.0, 43.1, 42.6, 43.2, 43.2, 43.3, 43.3, 43.3, 43.4, 43.5, 43.7, 43.9, 44.0, 43.4, 43.4, 43.8, 43.6, 43.3, 43.6, 43.9, 44.0, 44.0, 43.8, 43.9, 43.7, 43.8, 43.9, 43.7, 43.8, 43.8, 43.3, 42.9, 43.1, 43.3, 43.2, 43.0, 42.9, 42.5, 41.7, 41.7, 40.9, 40.7, 40.9, 40.9, 41.0, 41.1, 41.2, 41.5, 41.6, 41.6, 41.8, 41.8, 41.8, 41.8, 42.1, 42.3, 42.2, 42.3, 42.0, 42.2, 42.2, 41.6, 41.5, 41.6, 41.6, 41.6, 41.8, 41.6, 41.6, 41.7, 41.5, 41.6, 42.0, 41.8, 41.8, 41.8, 41.6, 41.7, 41.7, 41.8, 42.0, 41.9, 42.1, 42.2, 42.3, 42.0, 42.1, 42.3, 42.3, 42.3, 42.4, 42.6, 42.6, 42.4, 42.4, 42.4, 42.6, 42.3, 42.3, 42.4, 42.4, 42.5, 42.6, 42.4, 42.1, 42.0, 42.1, 41.7, 41.8, 41.9, 42.0, 41.9, 41.8, 41.6, 41.7, 41.9, 42.0, 42.2, 42.2, 42.1, 42.3, 42.3, 42.4, 42.2, 42.4, 41.7, 41.8, 41.9, 41.8, 41.5, 41.5, 41.5, 41.3, 41.3, 41.4, 41.0, 40.8, 40.7, 40.0, 40.5, 40.6, 40.7, 40.8, 41.2, 41.1, 41.1, 41.1, 40.9, 40.9, 40.9, 41.0, 41.2, 41.2, 41.3, 41.1, 41.1, 41.2, 41.4, 41.5, 41.6, 41.7, 41.7, 41.7, 41.9, 42.0, 42.1, 42.4, 42.5, 42.4, 42.7, 42.7, 42.8, 43.3, 43.4, 43.6, 43.7, 43.8, 43.8, 44.0, 44.2, 44.4, 44.6, 44.9, 44.9, 45.0, 45.2, 45.4, 45.5, 45.6, 45.8, 46.0, 46.2, 46.4, 46.7, 46.9, 47.0, 47.2, 47.3, 47.3, 47.5, 47.5, 47.6, 47.7, 47.8, 47.8, 47.9, 48.0, 48.1, 48.0, 48.1, 48.2, 48.2, 48.3, 48.3, 48.2, 48.2, 48.5, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]}, {"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(55, 128, 191, 1.0)"}, "name": "Matin", "orientation": "v", "type": "box", "y": [76.3, 76.4, 76.4, 76.5, 76.7, 76.8, 76.9, 77.0, 77.1, 77.1, 77.1, 77.2, 77.2, 77.2, 77.3, 77.4, 77.5, 77.5, 77.6, 77.7, 77.8, 77.9, 78.0, 78.2, 78.3, 78.4, 78.4, 78.4, 78.4, 78.5, 78.5, 78.5, 78.5, 78.4, 78.4, 78.4, 78.5, 78.4, 78.4, 78.4, 78.4, 78.4, 78.4, 78.3, 78.3, 78.3, 78.3, 78.4, 78.5, 78.6, 78.7, 78.8, 78.8, 78.7, 78.7, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.8, 78.9, 79.1, 79.1, 79.0, 79.0, 79.0, 79.1, 79.1, 79.2, 79.2, 79.3, 79.5, 79.5, 79.6, 79.8, 79.8, 79.8, 79.9, 79.9, 80.0, 80.0, 80.1, 80.1, 80.1, 80.1, 80.1, 80.1, 80.2, 80.2, 80.2, 80.3, 80.4, 80.4, 80.5, 80.6, 80.6, 80.7, 80.7, 80.8, 80.8, 80.8, 80.9, 81.0, 81.1, 81.1, 81.2, 81.2, 81.3, 81.4, 81.5, 81.6, 81.7, 81.8, 81.9, 82.0, 81.9, 81.7, 81.4, 81.4, 81.6, 82.0, 82.5, 82.9, 83.2, 83.4, 83.5, 83.7, 83.9, 84.1, 84.1, 84.1, 84.1, 84.0, 83.8, 83.7, 83.7, 83.6, 83.6, 83.5, 83.4, 83.3, 83.3, 83.2, 83.1, 83.0, 82.9, 82.8, 82.7, 82.5, 82.4, 82.3, 82.3, 82.3, 82.3, 82.3, 82.4, 82.4, 82.5, 82.5, 82.6, 82.5, 82.5, 82.5, 82.5, 82.5, 82.5, 82.4, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.4, 82.3, 82.3, 82.3, 82.3, 82.3, 82.3, 82.4, 82.4, 82.5, 82.5, 82.5, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.6, 82.7, 82.7, 82.8, 82.8, 82.9, 83.0, 83.0, 83.1, 83.1, 83.2, 83.3, 83.3, 83.4, 83.5, 83.5, 83.6, 83.7, 83.7, 83.8, 83.8, 83.8, 83.7, 83.7, 83.7, 83.6, 83.6, 83.6, 83.6, 83.6, 83.6, 83.7, 83.7, 83.8, 83.9, 83.9, 84.0, 84.0, 84.1, 84.2, 84.2, 84.2, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.3, 84.4, 84.5, 84.5, 84.6, 84.6, 84.6, 84.6, 84.6, 84.5, 84.5, 84.5, 84.5, 84.4, 84.4, 84.3, 84.3, 84.1, 83.9, 83.7, 83.6, 83.4, 83.3, 83.2, 83.1, 83.1, 83.0, 83.0, 82.9, 82.9, 82.9, 82.8, 82.7, 82.5, 82.4, 82.3, 82.3, 82.2, 82.2, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.2, 82.1, 82.1, 82.1, 82.1, 82.1, 82.1, 82.0, 82.0, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.9, 81.8, 81.8, 81.8, 81.9, 81.9, 81.9, 82.0, 82.0, 82.1, 82.2, 82.2, 82.2, 82.3, 82.4, 82.5, 82.5, 82.6, 82.7, 82.9, 82.9, 82.9, 82.9, 82.9, 82.9, 83.0, 83.0, 82.9, 82.8, 82.8, 82.8, 82.7, 82.7, 82.7, 82.7, 82.8, 82.8, 82.8, 82.8, 82.8, 82.9, 82.9, 82.9, 82.9, 83.0, 83.0, 83.0, 83.0, 83.1, 83.1, 83.2, 83.2, 83.3, 83.3, 83.4, 83.5, 83.5, 83.6, 83.7, 83.7, 83.7, 83.8, 83.8, 83.8, 83.8, 83.8, 83.8, 83.9, 83.9, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.1, 84.1, 84.1, 84.0, 84.1, 84.1, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 83.9, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 84.0, 83.9, 83.9, 83.8, 83.8, 83.8, 83.6, 83.6, 83.5, 83.5, 83.5, 83.4, 83.4, 83.4, 83.3, 83.3, 83.3, 83.3, 83.2, 83.2, 83.2, 83.1, 83.0, 82.9, 82.9, 82.8, 82.7, 82.6, 82.4, 82.3, 82.2, 81.9, 81.7, 81.6, 81.4, 81.0, 80.9, 80.8, 80.8, 80.7, 80.6, 80.4, 80.2, 80.2, 80.1, 79.9, 79.9, 79.8, 79.5, 79.3, 78.9, 78.8, 78.6, 78.4, 78.1, 78.0, 77.9, 77.8, 77.8, 77.5, 77.3, 77.2, 76.8, 76.7, 76.6, 76.5, 76.3, 76.2, 75.7, 75.0, 74.3, 73.8, 72.8, 72.5, 72.0, 71.1, 70.3, 70.4, 70.2, 69.0, 68.8, 68.3, 68.1, 67.7, 67.6, 67.8, 67.4, 67.2, 66.8, 66.8, 66.5, 66.6, 66.7, 66.6, 66.1, 65.5, 64.4, 63.9, 64.0, 64.0, 63.0, 62.1, 61.5, 61.1, 60.8, 60.6, 60.6, 60.0, 60.1, 60.1, 60.0, 59.5, 59.2, 57.8, 57.8, 57.7, 57.0, 56.9, 56.9, 56.5, 56.5, 56.4, 56.4, 55.4, 55.6, 55.2, 54.2, 54.1, 54.2, 54.5, 54.0, 53.4, 52.9, 52.3, 51.9, 52.1, 51.5, 51.5, 51.7, 51.9, 51.5, 51.1, 50.9, 51.0, 51.1, 51.3, 51.4, 50.5, 50.5, 51.0, 50.5, 50.7, 50.5, 50.2, 50.6, 50.6, 50.3, 49.5, 49.7, 50.0, 49.5, 48.7, 49.2, 49.5, 49.9, 50.0, 49.2, 49.7, 50.6, 50.5, 50.9, 51.0, 51.3, 51.1, 51.2, 51.2, 50.0, 50.7, 51.2, 51.4, 51.4, 51.2, 51.3, 51.5, 51.5, 51.6, 51.4, 51.5, 51.2, 51.2, 50.8, 51.2, 51.3, 51.1, 50.4, 50.4, 51.1, 50.9, 50.3, 50.3, 50.6, 50.2, 50.0, 49.9, 49.8, 50.2, 49.8, 49.4, 49.2, 49.5, 49.2, 49.4, 49.2, 49.1, 49.1, 49.3, 48.9, 49.0, 49.6, 49.2, 48.8, 48.1, 47.5, 47.5, 47.6, 47.5, 48.0, 48.2, 48.6, 48.3, 48.3, 48.0, 48.1, 48.0, 47.9, 47.5, 47.3, 47.4, 46.9, 47.1, 47.5, 46.9, 46.6, 47.1, 46.5, 46.6, 46.8, 46.8, 47.3, 47.3, 47.7, 47.6, 47.5, 47.1, 47.3, 47.6, 48.0, 48.2, 48.4, 48.7, 48.1, 47.1, 47.5, 47.4, 48.0, 48.1, 47.8, 46.9, 46.2, 45.6, 46.3, 46.3, 46.3, 47.0, 47.2, 47.1, 47.3, 47.6, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]}, {"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(50, 171, 96, 1.0)"}, "name": "Soir", "orientation": "v", "type": "box", "y": [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 48.5, 48.6, 48.6, 48.7, 48.5, 48.5, 48.6, 48.4, 48.4, 48.5, 48.8, 48.9, 48.8, 48.7, 49.0, 48.9, 48.9, 49.0, 49.1, 49.3, 48.6, 48.3, 48.1, 48.0, 47.9, 47.5, 47.5, 47.3, 47.3, 47.3, 47.3, 47.0, 46.6, 46.7, 46.6, 46.8, 46.7, 46.7, 46.6, 46.8, 46.6, 46.9, 46.8, 46.7, 47.0, 46.8, 47.0, 47.0, 47.1, 46.8, 46.7, 46.0, 46.2, 46.4, 46.4, 46.3, 46.4, 46.1, 46.0, 46.2, 45.8, 46.8, 46.3, 46.2, 46.1, 46.0, 46.0, 46.2, 46.3, 46.5, 46.5, 46.5, 46.6, 46.6, 46.6, 46.6, 46.5, 46.5, 46.6, 46.6, 46.6, 46.6, 46.8, 47.1, 47.0, 47.1, 47.5, 47.6, 48.1, 47.9, 47.8, 47.7, 47.7, 48.0, 48.0, 48.5, 48.5, 48.6, 48.8, 49.0, 49.3, 49.2, 49.5, 49.6, 49.8, 49.9, 50.2, 50.3, 50.5, 50.7, 51.0, 51.1, 51.7, 51.9, 52.1, 52.3, 52.3, 52.5, 52.6, 52.9, 53.3, 53.4, 53.5, 53.7, 53.9, 54.1, 54.3, 54.3, 54.5, 54.7, 54.9, 55.0, 55.1, 55.4, 55.6, 55.6, 56.0, 56.1, 56.3, 56.5, 56.6, 56.8, 56.9, 57.1, 57.2, 57.2, 57.4, 57.6, 57.8, 58.0, 58.1, 58.1, 58.2, 58.5, 58.6, 58.7, 58.7, 58.9, 59.2, 59.2, 59.3, 59.5, 59.7, 59.9, 60.0, 60.1, 60.2, 60.3, 60.3, 60.4, 60.5, 60.6, 60.7, 60.9, 60.9, 61.0, 61.1, 61.2, 61.3, 61.4, 61.5, 61.7, 61.8, 61.9, 62.0, 62.1, 62.1, 62.3, 62.4, 62.4, 62.6, 62.6, 62.8, 62.9, 62.9, 63.1, 63.2, 63.3, 63.5, 63.6, 63.7, 63.7, 64.0, 64.0, 64.0, 64.1, 64.1, 64.3, 64.3, 64.4, 64.6, 64.7, 64.8, 64.9, 64.9, 65.1, 65.2, 65.3, 65.4, 65.5, 65.7, 65.8, 66.0, 66.0, 66.0, 66.0, 66.1, 66.2, 66.2, 66.2, 66.4, 66.4, 66.5, 66.6, 66.6, 66.7, 66.8, 66.9, 67.0, 67.1, 67.2, 67.2, 67.4, 67.4, 67.4, 67.5, 67.4, 67.4, 67.5, 67.6, 67.7, 67.8, 67.8, 67.8, 67.8, 67.9, 67.9, 67.9, 68.0, 68.1, 68.2, 68.3, 68.3, 68.3, 68.3, 68.3, 68.4, 68.4, 68.4, 68.5, 68.6, 68.6, 68.6, 68.7, 68.8, 68.8, 68.9, 68.9, 68.9, 69.0, 69.1, 69.1, 69.2, 69.3, 69.4, 69.5, 69.6, 69.7, 69.9, 69.8, 69.9, 70.0, 70.1, 70.3, 70.4, 70.5, 70.7, 70.8, 70.8, 70.9]}],
                        {"legend": {"bgcolor": "#F5F6F9", "font": {"color": "#4D5663"}}, "paper_bgcolor": "#F5F6F9", "plot_bgcolor": "#F5F6F9", "template": {"data": {"bar": [{"error_x": {"color": "#2a3f5f"}, "error_y": {"color": "#2a3f5f"}, "marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "bar"}], "barpolar": [{"marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "barpolar"}], "carpet": [{"aaxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "baxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "type": "carpet"}], "choropleth": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "choropleth"}], "contour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "contour"}], "contourcarpet": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "contourcarpet"}], "heatmap": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmap"}], "heatmapgl": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmapgl"}], "histogram": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "histogram"}], "histogram2d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2d"}], "histogram2dcontour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2dcontour"}], "mesh3d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "mesh3d"}], "parcoords": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "parcoords"}], "pie": [{"automargin": true, "type": "pie"}], "scatter": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter"}], "scatter3d": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter3d"}], "scattercarpet": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattercarpet"}], "scattergeo": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergeo"}], "scattergl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergl"}], "scattermapbox": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattermapbox"}], "scatterpolar": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolar"}], "scatterpolargl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolargl"}], "scatterternary": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterternary"}], "surface": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "surface"}], "table": [{"cells": {"fill": {"color": "#EBF0F8"}, "line": {"color": "white"}}, "header": {"fill": {"color": "#C8D4E3"}, "line": {"color": "white"}}, "type": "table"}]}, "layout": {"annotationdefaults": {"arrowcolor": "#2a3f5f", "arrowhead": 0, "arrowwidth": 1}, "coloraxis": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "colorscale": {"diverging": [[0, "#8e0152"], [0.1, "#c51b7d"], [0.2, "#de77ae"], [0.3, "#f1b6da"], [0.4, "#fde0ef"], [0.5, "#f7f7f7"], [0.6, "#e6f5d0"], [0.7, "#b8e186"], [0.8, "#7fbc41"], [0.9, "#4d9221"], [1, "#276419"]], "sequential": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "sequentialminus": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]]}, "colorway": ["#636efa", "#EF553B", "#00cc96", "#ab63fa", "#FFA15A", "#19d3f3", "#FF6692", "#B6E880", "#FF97FF", "#FECB52"], "font": {"color": "#2a3f5f"}, "geo": {"bgcolor": "white", "lakecolor": "white", "landcolor": "#E5ECF6", "showlakes": true, "showland": true, "subunitcolor": "white"}, "hoverlabel": {"align": "left"}, "hovermode": "closest", "mapbox": {"style": "light"}, "paper_bgcolor": "white", "plot_bgcolor": "#E5ECF6", "polar": {"angularaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "radialaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "scene": {"xaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "yaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "zaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}}, "shapedefaults": {"line": {"color": "#2a3f5f"}}, "ternary": {"aaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "baxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "caxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "title": {"x": 0.05}, "xaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}, "yaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}}}, "title": {"font": {"color": "#4D5663"}, "text": "Repartition of Humidite according to the time"}, "xaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": ""}, "zerolinecolor": "#E1E5ED"}, "yaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Humidite"}, "zerolinecolor": "#E1E5ED"}},
                        {"showLink": true, "linkText": "Export to plot.ly", "plotlyServerURL": "https://plot.ly", "responsive": true}
                    ).then(function(){
                            
var gd = document.getElementById('97a15f82-6abe-4e74-8103-d2a77d69d209');
var x = new MutationObserver(function (mutations, observer) {{
        var display = window.getComputedStyle(gd).display;
        if (!display || display === 'none') {{
            console.log([gd, 'removed!']);
            Plotly.purge(gd);
            observer.disconnect();
        }}
}});

// Listen for the removal of the full notebook cells
var notebookContainer = gd.closest('#notebook-container');
if (notebookContainer) {{
    x.observe(notebookContainer, {childList: true});
}}

// Listen for the clearing of the current output cell
var outputEl = gd.closest('.output');
if (outputEl) {{
    x.observe(outputEl, {childList: true});
}}

                        })
                };
                });
            </script>
        </div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[112]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df</span><span class="o">.</span><span class="n">pivot</span><span class="p">(</span><span class="n">columns</span><span class="o">=</span><span class="s1">&#39;Saison&#39;</span><span class="p">,</span> <span class="n">values</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">)</span><span class="o">.</span><span class="n">iplot</span><span class="p">(</span>
        <span class="n">kind</span><span class="o">=</span><span class="s1">&#39;box&#39;</span><span class="p">,</span>
        <span class="n">yTitle</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span>
        <span class="n">title</span><span class="o">=</span><span class="s1">&#39;Repartition of Temperature according to the seasons&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div>
        
        
            <div id="95963409-ce66-4101-9228-bc0e1e2b6528" class="plotly-graph-div" style="height:525px; width:100%;"></div>
            <script type="text/javascript">
                require(["plotly"], function(Plotly) {
                    window.PLOTLYENV=window.PLOTLYENV || {};
                    window.PLOTLYENV.BASE_URL='https://plot.ly';
                    
                if (document.getElementById("95963409-ce66-4101-9228-bc0e1e2b6528")) {
                    Plotly.newPlot(
                        '95963409-ce66-4101-9228-bc0e1e2b6528',
                        [{"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(255, 153, 51, 1.0)"}, "name": "Automne", "orientation": "v", "type": "box", "y": [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 17.8, 18.0, 18.0, 18.1, 18.1, 18.1, 18.2, 18.4, 18.7, 18.9, 19.1, 19.0, 19.0, 19.2, 19.4, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.5, 19.5, 19.7, 19.8, 19.9, 19.9, 19.9, 19.9, 19.9, 19.9, 20.0, 20.0, 20.0, 20.0, 20.2, 20.4, 20.5, 20.7, 20.7, 20.7, 20.6, 20.7, 21.0, 21.1, 21.3, 21.4, 21.4, 21.4, 21.5, 21.4, 21.4, 21.5, 21.6, 21.7, 21.7, 21.7, 21.6, 21.6, 21.7, 21.9, 21.6, 21.6, 21.6, 21.5, 21.6, 21.7, 21.6, 21.7, 21.9, 22.1, 22.0, 22.2, 22.3, 22.2, 22.0, 21.9, 21.8, 21.9, 21.8, 21.4, 21.2, 21.1, 21.1, 21.0, 21.0, 21.2, 21.3, 21.5, 21.4, 21.1, 21.0, 21.0, 21.1, 21.1, 21.1, 21.1, 21.1, 21.2, 21.4, 21.5, 21.6, 21.7, 21.6, 21.5, 21.7, 21.8, 21.8, 21.7, 21.8, 22.1, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.1, 22.1, 22.2, 22.2, 22.2, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.5, 22.7, 22.8, 22.9, 22.8, 22.7, 22.6, 22.6, 22.4, 22.4, 22.3, 22.3, 22.4, 22.5, 22.5, 22.6, 22.6, 22.6, 22.6, 22.7, 22.6, 22.6, 22.6, 22.7, 22.7, 22.7, 22.8, 22.6, 22.6, 22.5, 22.4, 22.4, 22.4, 22.5, 22.6, 22.6, 22.5, 22.3, 22.2, 22.1, 22.2, 22.4, 22.6, 22.7, 22.6, 22.6, 22.8, 23.0, 23.3, 23.6, 23.7, 23.5, 23.3, 23.2, 23.1, 23.0, 22.9, 22.9, 22.8, 22.7, 22.6, 22.6, 22.5, 22.5, 22.6, 22.7, 22.7, 22.9, 23.0, 22.9, 22.9, 23.0, 23.0, 23.0, 23.1, 23.3, 23.5, 23.6, 23.7, 23.9, 24.0, 23.8, 23.6, 23.6, 23.5, 23.6, 23.5, 23.3, 23.2, 23.3, 23.5, 23.6, 23.7, 23.8, 23.9, 24.0, 24.0, 24.1, 24.3, 24.3, 24.2, 24.2, 24.1, 23.9, 23.9, 23.8, 23.8, 23.9, 23.9, 24.0, 24.2, 24.3, 24.1, 24.1, 24.1, 24.1, 24.1, 24.2, 24.4, 24.5, 24.5, 24.4, 24.5, 24.3, 24.2, 24.3, 24.3, 24.3, 24.1, 24.1, 24.1, 24.1, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.8, 24.8, 24.8, 24.7, 24.4, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.4, 24.3, 24.3, 24.4, 24.6, 24.8, 24.9, 25.0, 25.1, 25.2, 25.3, 25.4, 25.1, 24.9, 24.8, 24.8, 24.8, 24.8, 24.6, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.6, 24.6, 24.5, 24.3, 24.2, 24.3, 24.4, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.4, 24.4, 24.3, 24.4, 24.6, 24.5, 24.4, 24.4, 24.4, 24.3, 24.4, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.6, 24.7, 24.8, 24.8, 24.8, 24.9, 25.0, 25.0, 25.0, 25.0, 25.0, 24.9, 24.8, 24.7, 24.6, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.4, 24.3, 24.3, 24.3, 24.4, 24.4, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.5, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.7, 24.7, 24.7, 24.7, 24.7, 24.6, 24.6, 24.6, 24.6, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 19.4, 19.4, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.6, 18.7, 18.6, 18.6, 18.6, 18.6, 18.6, 18.5, 18.5, 18.5, 18.5]}, {"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(55, 128, 191, 1.0)"}, "name": "Hiver", "orientation": "v", "type": "box", "y": [17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.6, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.4, 17.4, 17.4, 17.4, 17.4, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 16.9, 16.8, 16.8, 16.8, 16.7, 16.7, 16.7, 16.7, 16.6, 16.5, 16.4, 16.3, 16.3, 16.2, 16.2, 16.1, 16.1, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 24.2, 24.2, 24.2, 24.2, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.1, 24.1, 24.1, 24.1, 24.1, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.6, 23.6, 23.6, 23.6, 23.6, 23.5, 23.5, 23.5, 23.5, 23.5, 23.4, 23.4, 23.4, 23.4, 23.3, 23.3, 23.4, 23.4, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.2, 23.2, 23.2, 23.2, 23.2, 23.1, 23.1, 23.1, 23.1, 23.0, 23.0, 23.0, 22.9, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.7, 22.7, 22.7, 22.7, 22.7, 22.7, 22.6, 22.6, 22.6, 22.6, 22.6, 22.6, 22.5, 22.5, 22.5, 22.5, 22.5, 22.4, 22.4, 22.4, 22.4, 22.4, 22.3, 22.3, 22.3, 22.3, 22.3, 22.2, 22.2, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 21.9, 21.9, 21.9, 21.9, 21.8, 21.8, 21.8, 21.8, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.6, 21.6, 21.6, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.3, 21.3, 21.3, 21.3, 21.3, 21.3, 21.2, 21.2, 21.2, 21.2, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 20.9, 20.9, 20.9, 20.9, 20.9, 20.8, 20.8, 20.8, 20.7, 20.7, 20.7, 20.7, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.5, 20.5, 20.5, 20.4, 20.4, 20.4, 20.4, 20.4, 20.3, 20.3, 20.3, 20.3, 20.3, 20.2, 20.2, 20.2, 20.2, 20.2, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 19.9, 19.9, 19.9, 19.9, 19.9, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.5, 19.5, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]}, {"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(50, 171, 96, 1.0)"}, "name": "Printemps", "orientation": "v", "type": "box", "y": [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 16.2, 16.2, 16.2, 16.2, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.9, 15.9, 16.0, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.8, 15.8, 15.8, 15.7, 15.7, 15.7, 15.7, 15.7, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.5, 15.5, 15.5, 15.5, 15.5, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 19.5, 19.5, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]}, {"boxpoints": false, "line": {"width": 1.3}, "marker": {"color": "rgba(128, 0, 128, 1.0)"}, "name": "\u00c9t\u00e9", "orientation": "v", "type": "box", "y": [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 17.3, 17.3, 17.3, 17.3, 17.2, 17.2, 17.2, 17.1, 17.1, 17.1, 17.1, 17.1, 17.0, 17.0, 17.0, 17.1, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 15.2, 15.2, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.3, 15.3, 15.3, 15.4, 15.4, 15.4, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 15.0, 14.9, 15.0, 15.0, 15.0, 15.1, 15.1, 15.0, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 15.0, 15.0, 15.0, 15.0, 15.0, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.5, 15.6, 15.7, 15.7, 15.8, 15.8, 15.8, 15.8, 15.9, 15.9, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.2, 16.5, 16.8, 17.0, 17.1, 17.3, 17.3, 17.4, 17.5, 17.6, 17.5, 17.5, 17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.7, 17.8, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]}],
                        {"legend": {"bgcolor": "#F5F6F9", "font": {"color": "#4D5663"}}, "paper_bgcolor": "#F5F6F9", "plot_bgcolor": "#F5F6F9", "template": {"data": {"bar": [{"error_x": {"color": "#2a3f5f"}, "error_y": {"color": "#2a3f5f"}, "marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "bar"}], "barpolar": [{"marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "barpolar"}], "carpet": [{"aaxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "baxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "type": "carpet"}], "choropleth": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "choropleth"}], "contour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "contour"}], "contourcarpet": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "contourcarpet"}], "heatmap": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmap"}], "heatmapgl": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmapgl"}], "histogram": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "histogram"}], "histogram2d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2d"}], "histogram2dcontour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2dcontour"}], "mesh3d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "mesh3d"}], "parcoords": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "parcoords"}], "pie": [{"automargin": true, "type": "pie"}], "scatter": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter"}], "scatter3d": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter3d"}], "scattercarpet": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattercarpet"}], "scattergeo": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergeo"}], "scattergl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergl"}], "scattermapbox": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattermapbox"}], "scatterpolar": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolar"}], "scatterpolargl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolargl"}], "scatterternary": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterternary"}], "surface": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "surface"}], "table": [{"cells": {"fill": {"color": "#EBF0F8"}, "line": {"color": "white"}}, "header": {"fill": {"color": "#C8D4E3"}, "line": {"color": "white"}}, "type": "table"}]}, "layout": {"annotationdefaults": {"arrowcolor": "#2a3f5f", "arrowhead": 0, "arrowwidth": 1}, "coloraxis": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "colorscale": {"diverging": [[0, "#8e0152"], [0.1, "#c51b7d"], [0.2, "#de77ae"], [0.3, "#f1b6da"], [0.4, "#fde0ef"], [0.5, "#f7f7f7"], [0.6, "#e6f5d0"], [0.7, "#b8e186"], [0.8, "#7fbc41"], [0.9, "#4d9221"], [1, "#276419"]], "sequential": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "sequentialminus": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]]}, "colorway": ["#636efa", "#EF553B", "#00cc96", "#ab63fa", "#FFA15A", "#19d3f3", "#FF6692", "#B6E880", "#FF97FF", "#FECB52"], "font": {"color": "#2a3f5f"}, "geo": {"bgcolor": "white", "lakecolor": "white", "landcolor": "#E5ECF6", "showlakes": true, "showland": true, "subunitcolor": "white"}, "hoverlabel": {"align": "left"}, "hovermode": "closest", "mapbox": {"style": "light"}, "paper_bgcolor": "white", "plot_bgcolor": "#E5ECF6", "polar": {"angularaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "radialaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "scene": {"xaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "yaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "zaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}}, "shapedefaults": {"line": {"color": "#2a3f5f"}}, "ternary": {"aaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "baxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "caxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "title": {"x": 0.05}, "xaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}, "yaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}}}, "title": {"font": {"color": "#4D5663"}, "text": "Repartition of Temperature according to the seasons"}, "xaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": ""}, "zerolinecolor": "#E1E5ED"}, "yaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Temperature"}, "zerolinecolor": "#E1E5ED"}},
                        {"showLink": true, "linkText": "Export to plot.ly", "plotlyServerURL": "https://plot.ly", "responsive": true}
                    ).then(function(){
                            
var gd = document.getElementById('95963409-ce66-4101-9228-bc0e1e2b6528');
var x = new MutationObserver(function (mutations, observer) {{
        var display = window.getComputedStyle(gd).display;
        if (!display || display === 'none') {{
            console.log([gd, 'removed!']);
            Plotly.purge(gd);
            observer.disconnect();
        }}
}});

// Listen for the removal of the full notebook cells
var notebookContainer = gd.closest('#notebook-container');
if (notebookContainer) {{
    x.observe(notebookContainer, {childList: true});
}}

// Listen for the clearing of the current output cell
var outputEl = gd.closest('.output');
if (outputEl) {{
    x.observe(outputEl, {childList: true});
}}

                        })
                };
                });
            </script>
        </div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[129]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">tds</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s1">&#39;Saison&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;Automne&#39;</span><span class="p">]</span><span class="o">.</span>\
         <span class="n">set_index</span><span class="p">(</span><span class="s1">&#39;Date&#39;</span><span class="p">)</span>
<span class="c1"># Plot read time as a time series</span>
<span class="n">tds</span><span class="p">[[</span><span class="s1">&#39;Humidite&#39;</span><span class="p">,</span> <span class="s1">&#39;Temperature&#39;</span><span class="p">]]</span><span class="o">.</span><span class="n">iplot</span><span class="p">(</span>
    <span class="n">y</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span> <span class="n">mode</span><span class="o">=</span><span class="s1">&#39;lines&#39;</span><span class="p">,</span> <span class="n">secondary_y</span> <span class="o">=</span> <span class="s1">&#39;Humidite&#39;</span><span class="p">,</span>
    <span class="n">secondary_y_title</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span> <span class="n">xTitle</span><span class="o">=</span><span class="s1">&#39;Date&#39;</span><span class="p">,</span> <span class="n">yTitle</span><span class="o">=</span><span class="s1">&#39;Humidite&#39;</span><span class="p">,</span>
    <span class="n">title</span><span class="o">=</span><span class="s1">&#39;Temperature and Humidite over Time&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div>
        
        
            <div id="45d6bfb7-cfae-43bc-bd35-fd264e65c447" class="plotly-graph-div" style="height:525px; width:100%;"></div>
            <script type="text/javascript">
                require(["plotly"], function(Plotly) {
                    window.PLOTLYENV=window.PLOTLYENV || {};
                    window.PLOTLYENV.BASE_URL='https://plot.ly';
                    
                if (document.getElementById("45d6bfb7-cfae-43bc-bd35-fd264e65c447")) {
                    Plotly.newPlot(
                        '45d6bfb7-cfae-43bc-bd35-fd264e65c447',
                        [{"line": {"color": "rgba(255, 153, 51, 1.0)", "dash": "solid", "shape": "linear", "width": 1.3}, "mode": "lines", "name": "Temperature", "text": "", "type": "scatter", "x": ["26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019"], "y": [17.8, 18.0, 18.0, 18.1, 18.1, 18.1, 18.2, 18.4, 18.7, 18.9, 19.1, 19.0, 19.0, 19.2, 19.4, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.5, 19.5, 19.7, 19.8, 19.9, 19.9, 19.9, 19.9, 19.9, 19.9, 20.0, 20.0, 20.0, 20.0, 20.2, 20.4, 20.5, 20.7, 20.7, 20.7, 20.6, 20.7, 21.0, 21.1, 21.3, 21.4, 21.4, 21.4, 21.5, 21.4, 21.4, 21.5, 21.6, 21.7, 21.7, 21.7, 21.6, 21.6, 21.7, 21.9, 21.6, 21.6, 21.6, 21.5, 21.6, 21.7, 21.6, 21.7, 21.9, 22.1, 22.0, 22.2, 22.3, 22.2, 22.0, 21.9, 21.8, 21.9, 21.8, 21.4, 21.2, 21.1, 21.1, 21.0, 21.0, 21.2, 21.3, 21.5, 21.4, 21.1, 21.0, 21.0, 21.1, 21.1, 21.1, 21.1, 21.1, 21.2, 21.4, 21.5, 21.6, 21.7, 21.6, 21.5, 21.7, 21.8, 21.8, 21.7, 21.8, 22.1, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.1, 22.1, 22.2, 22.2, 22.2, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.5, 22.7, 22.8, 22.9, 22.8, 22.7, 22.6, 22.6, 22.4, 22.4, 22.3, 22.3, 22.4, 22.5, 22.5, 22.6, 22.6, 22.6, 22.6, 22.7, 22.6, 22.6, 22.6, 22.7, 22.7, 22.7, 22.8, 22.6, 22.6, 22.5, 22.4, 22.4, 22.4, 22.5, 22.6, 22.6, 22.5, 22.3, 22.2, 22.1, 22.2, 22.4, 22.6, 22.7, 22.6, 22.6, 22.8, 23.0, 23.3, 23.6, 23.7, 23.5, 23.3, 23.2, 23.1, 23.0, 22.9, 22.9, 22.8, 22.7, 22.6, 22.6, 22.5, 22.5, 22.6, 22.7, 22.7, 22.9, 23.0, 22.9, 22.9, 23.0, 23.0, 23.0, 23.1, 23.3, 23.5, 23.6, 23.7, 23.9, 24.0, 23.8, 23.6, 23.6, 23.5, 23.6, 23.5, 23.3, 23.2, 23.3, 23.5, 23.6, 23.7, 23.8, 23.9, 24.0, 24.0, 24.1, 24.3, 24.3, 24.2, 24.2, 24.1, 23.9, 23.9, 23.8, 23.8, 23.9, 23.9, 24.0, 24.2, 24.3, 24.1, 24.1, 24.1, 24.1, 24.1, 24.2, 24.4, 24.5, 24.5, 24.4, 24.5, 24.3, 24.2, 24.3, 24.3, 24.3, 24.1, 24.1, 24.1, 24.1, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.8, 24.8, 24.8, 24.7, 24.4, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.4, 24.3, 24.3, 24.4, 24.6, 24.8, 24.9, 25.0, 25.1, 25.2, 25.3, 25.4, 25.1, 24.9, 24.8, 24.8, 24.8, 24.8, 24.6, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.6, 24.6, 24.5, 24.3, 24.2, 24.3, 24.4, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.4, 24.4, 24.3, 24.4, 24.6, 24.5, 24.4, 24.4, 24.4, 24.3, 24.4, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.6, 24.7, 24.8, 24.8, 24.8, 24.9, 25.0, 25.0, 25.0, 25.0, 25.0, 24.9, 24.8, 24.7, 24.6, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.4, 24.3, 24.3, 24.3, 24.4, 24.4, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.5, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.7, 24.7, 24.7, 24.7, 24.7, 24.6, 24.6, 24.6, 24.6, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 19.4, 19.4, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.6, 18.7, 18.6, 18.6, 18.6, 18.6, 18.6, 18.5, 18.5, 18.5, 18.5]}, {"line": {"color": "rgba(55, 128, 191, 1.0)", "dash": "solid", "shape": "linear", "width": 1.3}, "mode": "lines", "name": "Humidite", "text": "", "type": "scatter", "x": ["26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "26/09/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "11/10/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "25/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "27/11/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "08/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "18/12/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019", "31/09/2019"], "xaxis": "x", "y": [67.4, 67.2, 66.8, 66.8, 66.5, 66.6, 66.7, 66.6, 66.1, 65.5, 64.4, 63.9, 64.0, 64.0, 63.0, 62.1, 61.5, 61.1, 60.8, 60.6, 60.6, 60.0, 60.1, 60.1, 60.0, 59.5, 59.2, 57.8, 57.8, 57.7, 57.0, 56.9, 56.9, 56.5, 56.5, 56.4, 56.4, 55.4, 55.6, 55.2, 54.2, 54.1, 54.2, 54.5, 54.0, 53.4, 52.9, 52.3, 51.9, 52.1, 51.5, 51.5, 51.7, 51.9, 51.5, 51.1, 50.9, 51.0, 51.1, 51.3, 51.4, 50.5, 50.5, 51.0, 50.5, 50.7, 50.5, 50.2, 50.6, 50.6, 50.3, 49.5, 49.7, 50.0, 49.5, 48.7, 49.2, 49.5, 49.9, 50.0, 49.2, 49.7, 50.6, 50.5, 50.9, 51.0, 51.3, 51.1, 51.2, 51.2, 50.0, 50.7, 51.2, 51.4, 51.4, 51.2, 51.3, 51.5, 51.5, 51.6, 51.4, 51.5, 51.2, 51.2, 50.8, 51.2, 51.3, 51.1, 50.4, 50.4, 51.1, 50.9, 50.3, 50.3, 50.6, 50.2, 50.0, 49.9, 49.8, 50.2, 49.8, 49.4, 49.2, 49.5, 49.2, 49.4, 49.2, 49.1, 49.1, 49.3, 48.9, 49.0, 49.6, 49.2, 48.8, 48.1, 47.5, 47.5, 47.6, 47.5, 48.0, 48.2, 48.6, 48.3, 48.3, 48.0, 48.1, 48.0, 47.9, 47.5, 47.3, 47.4, 46.9, 47.1, 47.5, 46.9, 46.6, 47.1, 46.5, 46.6, 46.8, 46.8, 47.3, 47.3, 47.7, 47.6, 47.5, 47.1, 47.3, 47.6, 48.0, 48.2, 48.4, 48.7, 48.1, 47.1, 47.5, 47.4, 48.0, 48.1, 47.8, 46.9, 46.2, 45.6, 46.3, 46.3, 46.3, 47.0, 47.2, 47.1, 47.3, 47.6, 48.0, 48.1, 47.9, 48.1, 48.1, 47.8, 47.7, 47.8, 47.3, 47.4, 47.4, 46.7, 46.9, 46.8, 46.9, 47.2, 46.3, 46.3, 46.3, 46.3, 45.7, 45.7, 46.3, 46.1, 46.3, 45.8, 45.3, 45.5, 45.7, 45.9, 45.3, 45.2, 44.5, 44.9, 44.5, 44.1, 44.3, 44.5, 44.0, 42.7, 43.0, 43.0, 43.0, 43.0, 43.1, 43.3, 43.6, 43.6, 43.5, 43.6, 44.0, 43.0, 43.1, 43.2, 43.2, 43.1, 43.2, 43.6, 43.5, 43.4, 42.8, 42.5, 42.5, 43.0, 42.9, 43.0, 43.3, 42.9, 42.7, 43.3, 42.9, 43.1, 43.4, 42.8, 42.4, 42.1, 42.4, 42.4, 42.5, 42.6, 42.3, 42.2, 42.2, 42.0, 42.6, 43.3, 43.0, 42.4, 42.3, 42.8, 42.4, 42.6, 42.6, 42.9, 42.9, 43.0, 43.4, 43.2, 42.8, 42.5, 42.9, 43.4, 43.4, 43.7, 43.5, 42.9, 42.8, 42.8, 42.7, 42.0, 41.2, 41.8, 41.3, 41.5, 41.6, 41.0, 40.9, 40.8, 41.4, 40.8, 41.1, 41.1, 41.0, 41.0, 40.8, 40.8, 41.0, 41.4, 41.8, 41.7, 41.4, 41.6, 41.4, 41.8, 41.8, 41.8, 41.8, 41.5, 41.9, 41.8, 41.6, 41.3, 41.7, 41.8, 41.7, 41.8, 42.2, 41.8, 41.7, 42.0, 41.9, 42.0, 41.5, 41.9, 42.3, 42.3, 42.0, 42.0, 42.0, 42.3, 41.8, 42.6, 41.2, 40.7, 40.9, 40.8, 41.2, 41.2, 41.7, 41.8, 42.0, 41.9, 42.1, 41.8, 41.8, 42.2, 42.2, 42.6, 42.3, 42.3, 42.7, 42.6, 42.6, 42.4, 42.4, 42.6, 42.6, 42.8, 42.8, 43.0, 43.2, 43.4, 43.5, 43.4, 43.2, 43.5, 43.5, 43.5, 43.1, 43.2, 43.3, 43.4, 43.5, 43.0, 43.1, 42.6, 43.2, 43.2, 43.3, 43.3, 43.3, 43.4, 43.5, 43.7, 43.9, 44.0, 43.4, 43.4, 43.8, 43.6, 43.3, 43.6, 43.9, 44.0, 44.0, 43.8, 43.9, 43.7, 43.8, 43.9, 43.7, 43.8, 43.8, 43.3, 42.9, 43.1, 43.3, 43.2, 43.0, 42.9, 42.5, 41.7, 41.7, 40.9, 40.7, 40.9, 40.9, 41.0, 41.1, 41.2, 41.5, 41.6, 41.6, 41.8, 41.8, 41.8, 41.8, 42.1, 42.3, 42.2, 42.3, 42.0, 42.2, 42.2, 41.6, 41.5, 41.6, 41.6, 41.6, 41.8, 41.6, 41.6, 41.7, 41.5, 41.6, 42.0, 41.8, 41.8, 41.8, 41.6, 41.7, 41.7, 41.8, 42.0, 41.9, 42.1, 42.2, 42.3, 42.0, 42.1, 42.3, 42.3, 42.3, 42.4, 42.6, 42.6, 42.4, 42.4, 42.4, 42.6, 42.3, 42.3, 42.4, 42.4, 42.5, 42.6, 42.4, 42.1, 42.0, 42.1, 41.7, 64.3, 64.4, 64.6, 64.7, 64.8, 64.9, 64.9, 65.1, 65.2, 65.3, 65.4, 65.5, 65.7, 65.8, 66.0, 66.0, 66.0, 66.0, 66.1, 66.2, 66.2, 66.2, 66.4, 66.4, 66.5, 66.6, 66.6, 66.7, 66.8, 66.9, 67.0, 67.1, 67.2, 67.2, 67.4, 67.4, 67.4, 67.5, 67.4, 67.4, 67.5, 67.6, 67.7, 67.8, 67.8, 67.8, 67.8, 67.9, 67.9, 67.9, 68.0, 68.1, 68.2, 68.3, 68.3, 68.3, 68.3, 68.3, 68.4, 68.4, 68.4, 68.5, 68.6, 68.6, 68.6, 68.7, 68.8, 68.8, 68.9, 68.9, 68.9, 69.0, 69.1, 69.1, 69.2, 69.3, 69.4, 69.5, 69.6, 69.7, 69.9, 69.8, 69.9, 70.0, 70.1, 70.3, 70.4, 70.5, 70.7, 70.8, 70.8, 70.9], "yaxis": "y2"}],
                        {"legend": {"bgcolor": "#F5F6F9", "font": {"color": "#4D5663"}}, "paper_bgcolor": "#F5F6F9", "plot_bgcolor": "#F5F6F9", "template": {"data": {"bar": [{"error_x": {"color": "#2a3f5f"}, "error_y": {"color": "#2a3f5f"}, "marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "bar"}], "barpolar": [{"marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "barpolar"}], "carpet": [{"aaxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "baxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "type": "carpet"}], "choropleth": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "choropleth"}], "contour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "contour"}], "contourcarpet": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "contourcarpet"}], "heatmap": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmap"}], "heatmapgl": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmapgl"}], "histogram": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "histogram"}], "histogram2d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2d"}], "histogram2dcontour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2dcontour"}], "mesh3d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "mesh3d"}], "parcoords": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "parcoords"}], "pie": [{"automargin": true, "type": "pie"}], "scatter": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter"}], "scatter3d": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter3d"}], "scattercarpet": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattercarpet"}], "scattergeo": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergeo"}], "scattergl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergl"}], "scattermapbox": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattermapbox"}], "scatterpolar": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolar"}], "scatterpolargl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolargl"}], "scatterternary": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterternary"}], "surface": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "surface"}], "table": [{"cells": {"fill": {"color": "#EBF0F8"}, "line": {"color": "white"}}, "header": {"fill": {"color": "#C8D4E3"}, "line": {"color": "white"}}, "type": "table"}]}, "layout": {"annotationdefaults": {"arrowcolor": "#2a3f5f", "arrowhead": 0, "arrowwidth": 1}, "coloraxis": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "colorscale": {"diverging": [[0, "#8e0152"], [0.1, "#c51b7d"], [0.2, "#de77ae"], [0.3, "#f1b6da"], [0.4, "#fde0ef"], [0.5, "#f7f7f7"], [0.6, "#e6f5d0"], [0.7, "#b8e186"], [0.8, "#7fbc41"], [0.9, "#4d9221"], [1, "#276419"]], "sequential": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "sequentialminus": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]]}, "colorway": ["#636efa", "#EF553B", "#00cc96", "#ab63fa", "#FFA15A", "#19d3f3", "#FF6692", "#B6E880", "#FF97FF", "#FECB52"], "font": {"color": "#2a3f5f"}, "geo": {"bgcolor": "white", "lakecolor": "white", "landcolor": "#E5ECF6", "showlakes": true, "showland": true, "subunitcolor": "white"}, "hoverlabel": {"align": "left"}, "hovermode": "closest", "mapbox": {"style": "light"}, "paper_bgcolor": "white", "plot_bgcolor": "#E5ECF6", "polar": {"angularaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "radialaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "scene": {"xaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "yaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "zaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}}, "shapedefaults": {"line": {"color": "#2a3f5f"}}, "ternary": {"aaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "baxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "caxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "title": {"x": 0.05}, "xaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}, "yaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}}}, "title": {"font": {"color": "#4D5663"}, "text": "Temperature and Humidite over Time"}, "xaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Date"}, "zerolinecolor": "#E1E5ED"}, "yaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Humidite"}, "zerolinecolor": "#E1E5ED"}, "yaxis2": {"anchor": "x", "gridcolor": "#E1E5ED", "overlaying": "y", "showgrid": true, "side": "right", "tickfont": {"color": "#4D5663"}, "title": {"text": "Temperature"}, "zerolinecolor": "#E1E5ED"}},
                        {"showLink": true, "linkText": "Export to plot.ly", "plotlyServerURL": "https://plot.ly", "responsive": true}
                    ).then(function(){
                            
var gd = document.getElementById('45d6bfb7-cfae-43bc-bd35-fd264e65c447');
var x = new MutationObserver(function (mutations, observer) {{
        var display = window.getComputedStyle(gd).display;
        if (!display || display === 'none') {{
            console.log([gd, 'removed!']);
            Plotly.purge(gd);
            observer.disconnect();
        }}
}});

// Listen for the removal of the full notebook cells
var notebookContainer = gd.closest('#notebook-container');
if (notebookContainer) {{
    x.observe(notebookContainer, {childList: true});
}}

// Listen for the clearing of the current output cell
var outputEl = gd.closest('.output');
if (outputEl) {{
    x.observe(outputEl, {childList: true});
}}

                        })
                };
                });
            </script>
        </div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[131]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df</span><span class="o">.</span><span class="n">iplot</span><span class="p">(</span>
    <span class="n">x</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span>
    <span class="n">y</span><span class="o">=</span><span class="s1">&#39;Heure&#39;</span><span class="p">,</span>
    <span class="c1"># Specify the category</span>
    <span class="n">categories</span><span class="o">=</span><span class="s1">&#39;Saison&#39;</span><span class="p">,</span>
    <span class="n">xTitle</span><span class="o">=</span><span class="s1">&#39;Temperature&#39;</span><span class="p">,</span>
    <span class="n">yTitle</span><span class="o">=</span><span class="s1">&#39;Heure&#39;</span><span class="p">,</span>
    <span class="n">title</span><span class="o">=</span><span class="s1">&#39;Temperature according to the time&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div>
        
        
            <div id="b527daa6-f029-4a32-b830-f8487033a3cb" class="plotly-graph-div" style="height:525px; width:100%;"></div>
            <script type="text/javascript">
                require(["plotly"], function(Plotly) {
                    window.PLOTLYENV=window.PLOTLYENV || {};
                    window.PLOTLYENV.BASE_URL='https://plot.ly';
                    
                if (document.getElementById("b527daa6-f029-4a32-b830-f8487033a3cb")) {
                    Plotly.newPlot(
                        'b527daa6-f029-4a32-b830-f8487033a3cb',
                        [{"marker": {"color": "rgba(255, 153, 51, 1.0)", "line": {"width": 1.3}, "opacity": 0.8, "size": 12, "symbol": "circle"}, "mode": "markers", "name": "Hiver", "textfont": {"color": "#4D5663"}, "type": "scatter", "x": [17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.6, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.4, 17.4, 17.4, 17.4, 17.4, 16.9, 16.8, 16.8, 16.8, 16.7, 16.7, 16.7, 16.7, 16.6, 16.5, 16.4, 16.3, 16.3, 16.2, 16.2, 16.1, 16.1, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.6, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.4, 16.5, 16.5, 16.5, 16.5, 16.4, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 16.3, 16.3, 16.2, 16.2, 16.2, 16.3, 16.3, 16.3, 16.4, 16.4, 16.3, 16.3, 16.3, 16.3, 24.2, 24.2, 24.2, 24.2, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.1, 24.1, 24.1, 24.1, 24.1, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.9, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.8, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.7, 23.6, 23.6, 23.6, 23.6, 23.6, 23.5, 23.5, 23.5, 23.5, 23.5, 23.4, 23.4, 23.4, 23.4, 23.3, 23.3, 23.4, 23.4, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.3, 23.2, 23.2, 23.2, 23.2, 23.2, 23.1, 23.1, 23.1, 23.1, 23.0, 23.0, 23.0, 22.9, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.8, 22.7, 22.7, 22.7, 22.7, 22.7, 22.7, 22.6, 22.6, 22.6, 22.6, 22.6, 22.6, 22.5, 22.5, 22.5, 22.5, 22.5, 22.4, 22.4, 22.4, 22.4, 22.4, 22.3, 22.3, 22.3, 22.3, 22.3, 22.2, 22.2, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 22.0, 21.9, 21.9, 21.9, 21.9, 21.8, 21.8, 21.8, 21.8, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.7, 21.6, 21.6, 21.6, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.5, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.4, 21.3, 21.3, 21.3, 21.3, 21.3, 21.3, 21.2, 21.2, 21.2, 21.2, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.1, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 21.0, 20.9, 20.9, 20.9, 20.9, 20.9, 20.8, 20.8, 20.8, 20.7, 20.7, 20.7, 20.7, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.6, 20.5, 20.5, 20.5, 20.4, 20.4, 20.4, 20.4, 20.4, 20.3, 20.3, 20.3, 20.3, 20.3, 20.2, 20.2, 20.2, 20.2, 20.2, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.1, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 20.0, 19.9, 19.9, 19.9, 19.9, 19.9, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.8, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.7, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.6, 19.5, 19.5], "y": ["00:00:25", "00:01:14", "00:02:13", "00:03:12", "00:04:13", "00:05:12", "00:06:13", "00:07:12", "00:08:12", "00:09:13", "00:10:20", "00:11:15", "00:12:12", "00:13:12", "00:14:12", "00:15:13", "00:16:12", "00:17:12", "00:18:13", "00:19:12", "00:20:23", "00:21:13", "00:22:12", "00:23:12", "00:24:12", "00:25:12", "00:26:13", "00:27:12", "00:28:13", "00:29:12", "00:30:23", "00:31:12", "00:32:11", "00:33:11", "00:34:12", "00:35:12", "00:36:13", "00:37:12", "00:38:12", "00:39:12", "01:55:12", "01:56:13", "01:57:11", "01:58:12", "01:59:12", "02:00:23", "02:01:13", "02:02:12", "02:03:12", "02:04:13", "02:05:12", "02:06:13", "02:07:12", "02:08:12", "02:09:13", "02:10:25", "02:11:13", "02:12:13", "02:13:12", "02:14:12", "02:15:13", "02:16:12", "02:17:13", "02:18:12", "02:19:12", "02:20:23", "02:21:13", "02:22:11", "02:23:11", "02:24:12", "02:25:12", "02:26:13", "02:27:12", "02:28:12", "02:29:12", "02:30:28", "02:31:12", "02:32:13", "02:33:11", "02:34:11", "02:35:12", "02:36:12", "02:37:12", "02:38:12", "02:39:12", "02:40:22", "02:41:13", "02:42:13", "02:43:12", "02:44:12", "02:45:12", "02:46:13", "02:47:12", "02:48:12", "02:49:12", "02:50:25", "02:51:12", "02:52:12", "02:53:12", "02:54:12", "02:55:13", "02:56:12", "02:57:13", "02:58:12", "02:59:12", "03:00:25", "03:01:12", "03:02:12", "03:03:12", "03:04:12", "03:05:13", "03:06:12", "03:07:13", "03:08:12", "03:09:12", "03:10:27", "03:11:12", "03:12:12", "03:13:11", "03:14:11", "03:15:12", "03:16:12", "03:17:12", "03:18:12", "03:19:11", "03:20:25", "03:21:12", "03:22:12", "03:23:12", "03:24:12", "03:25:13", "03:26:13", "03:27:12", "03:28:12", "03:29:12", "03:30:26", "17:11:11", "17:12:12", "17:13:11", "17:14:11", "17:15:12", "17:16:12", "17:17:11", "17:18:11", "17:19:11", "17:20:15", "17:21:12", "17:22:11", "17:23:11", "17:24:11", "17:25:12", "17:26:12", "17:27:11", "17:28:11", "17:29:11", "17:30:17", "17:31:11", "17:32:11", "17:33:11", "17:34:12", "17:35:11", "17:36:12", "17:37:11", "17:38:11", "17:39:12", "17:40:15", "17:41:12", "17:42:11", "17:43:11", "17:44:11", "17:45:12", "17:46:11", "17:47:11", "17:48:11", "17:49:11", "17:50:13", "17:51:12", "17:52:11", "17:53:11", "17:54:11", "17:55:11", "17:56:12", "17:57:11", "17:58:11", "17:59:12", "18:00:14", "18:01:12", "18:02:11", "18:03:11", "18:04:11", "18:05:11", "18:06:12", "18:07:11", "18:08:11", "18:09:12", "18:10:15", "18:11:12", "18:12:11", "18:13:11", "18:14:11", "18:15:12", "18:16:11", "18:17:12", "18:18:11", "18:19:11", "18:20:13", "18:21:12", "18:22:11", "18:23:11", "18:24:11", "18:25:11", "18:26:12", "18:27:11", "18:28:11", "18:29:10", "18:30:17", "18:31:11", "18:32:11", "18:33:11", "18:34:11", "18:35:12", "18:36:11", "18:37:12", "18:38:11", "18:39:12", "18:40:15", "18:41:11", "18:42:12", "18:43:11", "18:44:11", "18:45:12", "18:46:11", "18:47:11", "18:48:12", "18:49:11", "18:50:14", "18:51:12", "18:52:11", "18:53:11", "18:54:11", "18:55:12", "18:56:11", "18:57:11", "18:58:12", "18:59:11", "19:00:13", "19:01:13", "19:02:11", "19:03:11", "19:04:11", "19:05:12", "19:06:11", "19:07:12", "19:08:11", "19:09:12", "19:10:14", "19:11:12", "19:12:11", "19:13:12", "19:14:11", "19:15:11", "19:16:12", "19:17:11", "19:18:11", "19:19:11", "19:20:15", "19:21:12", "19:22:11", "19:23:11", "19:24:12", "19:25:11", "19:26:12", "19:27:11", "19:28:11", "19:29:11", "19:30:15", "19:31:12", "19:32:11", "19:33:11", "19:34:11", "19:35:11", "19:36:12", "19:37:11", "19:38:11", "19:39:12", "19:40:15", "19:41:12", "19:42:11", "19:43:12", "19:44:11", "19:45:11", "19:46:12", "19:47:11", "19:48:11", "19:49:11", "19:50:14", "19:51:11", "19:52:12", "19:53:11", "19:54:11", "19:55:12", "19:56:11", "19:57:12", "19:58:11", "19:59:11", "20:00:14", "20:01:11", "20:02:12", "20:03:11", "20:04:11", "20:05:11", "20:06:11", "20:07:11", "20:08:12", "20:09:11", "20:10:12", "20:11:12", "20:12:11", "20:13:11", "20:14:11", "20:15:11", "20:16:12", "20:17:11", "20:18:12", "20:19:11", "20:20:16", "20:21:12", "20:22:11", "20:23:12", "20:24:11", "20:25:11", "20:26:12", "20:27:11", "20:28:12", "20:29:11", "20:30:13", "20:31:12", "20:32:11", "20:33:11", "20:34:11", "20:35:11", "20:36:11", "20:37:11", "20:38:12", "20:39:11", "20:40:17", "20:41:12", "20:42:11", "20:43:11", "20:44:11", "20:45:11", "20:46:12", "20:47:11", "20:48:11", "20:49:12", "20:50:17", "20:51:11", "20:52:11", "20:53:12", "20:54:11", "20:55:11", "20:56:12", "20:57:12", "20:58:11", "20:59:11", "21:00:12", "21:01:12", "21:02:12", "21:03:11", "21:04:11", "21:05:11", "21:06:11", "21:07:12", "21:08:11", "21:09:12", "21:10:18", "21:11:12", "21:12:11", "21:13:11", "21:14:11", "21:15:11", "21:16:12", "21:17:12", "21:18:11", "21:19:11", "21:20:14", "21:21:12", "21:22:11", "21:23:12", "21:24:11", "21:25:11", "21:26:12", "21:27:11", "21:28:11", "21:29:11", "21:30:18", "21:31:11", "21:32:11", "21:33:11", "21:34:12", "21:35:11", "21:36:12", "21:37:11", "21:38:11", "21:39:11", "21:40:16", "21:41:11", "21:42:12", "21:43:11", "21:44:11", "21:45:11", "21:46:12", "21:47:11", "21:48:12", "21:49:11", "21:50:14", "21:51:12", "21:52:11", "21:53:11", "21:54:11", "21:55:11", "21:56:12", "21:57:11", "21:58:11", "21:59:12", "22:00:14", "22:01:12", "22:02:11", "22:03:12", "22:04:11", "22:05:11", "22:06:12", "22:07:11", "22:08:11", "22:09:12", "22:10:15", "22:11:11", "22:12:12", "22:13:11", "22:14:11"]}, {"marker": {"color": "rgba(55, 128, 191, 1.0)", "line": {"width": 1.3}, "opacity": 0.8, "size": 12, "symbol": "circle"}, "mode": "markers", "name": "Printemps", "textfont": {"color": "#4D5663"}, "type": "scatter", "x": [17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.4, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 17.3, 16.2, 16.2, 16.2, 16.2, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.9, 15.9, 16.0, 16.1, 16.1, 16.1, 16.1, 16.1, 16.1, 16.0, 16.0, 15.9, 15.9, 15.9, 15.8, 15.8, 15.8, 15.7, 15.7, 15.7, 15.7, 15.7, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.6, 15.5, 15.5, 15.5, 15.5, 15.5, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 19.5, 19.5, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4, 19.4], "y": ["00:40:25", "00:41:12", "00:42:12", "00:43:12", "00:44:12", "00:45:12", "00:46:13", "00:47:11", "00:48:11", "00:49:11", "00:50:21", "00:51:12", "00:52:12", "00:53:12", "00:54:12", "00:55:12", "00:56:12", "00:57:12", "00:58:12", "00:59:12", "01:00:22", "03:31:13", "03:32:12", "03:33:12", "03:34:12", "03:35:12", "03:36:13", "03:37:12", "03:38:12", "03:39:13", "03:40:26", "03:41:13", "03:42:12", "03:43:12", "03:44:12", "03:45:12", "03:46:13", "03:47:12", "03:48:12", "03:49:12", "03:50:25", "03:51:12", "03:52:12", "03:53:12", "03:54:12", "03:55:13", "03:56:13", "03:57:12", "03:58:12", "03:59:12", "04:00:26", "04:01:13", "04:02:12", "04:03:12", "04:04:12", "04:05:12", "04:06:12", "04:07:12", "04:08:12", "04:09:12", "04:10:27", "04:11:12", "04:12:12", "04:13:12", "04:14:12", "04:15:12", "04:16:12", "04:17:12", "04:18:12", "04:19:12", "04:20:25", "04:21:12", "04:22:12", "04:23:12", "04:24:12", "04:25:23", "04:26:16", "04:27:12", "04:28:13", "04:29:12", "04:30:30", "04:31:14", "04:32:14", "04:33:12", "04:34:15", "04:35:13", "04:36:14", "04:37:16", "04:38:13", "04:39:13", "04:40:27", "04:41:12", "04:42:12", "04:43:12", "04:44:12", "04:45:13", "04:46:12", "22:15:12", "22:16:11", "22:17:11", "22:18:11", "22:19:11", "22:20:14", "22:21:12", "22:22:11", "22:23:11", "22:24:11", "22:25:11", "22:26:12", "22:27:11"]}, {"marker": {"color": "rgba(50, 171, 96, 1.0)", "line": {"width": 1.3}, "opacity": 0.8, "size": 12, "symbol": "circle"}, "mode": "markers", "name": "\u00c9t\u00e9", "textfont": {"color": "#4D5663"}, "type": "scatter", "x": [17.3, 17.3, 17.3, 17.3, 17.2, 17.2, 17.2, 17.1, 17.1, 17.1, 17.1, 17.1, 17.0, 17.0, 17.0, 17.1, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 17.0, 16.9, 17.0, 17.0, 17.0, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 16.9, 15.2, 15.2, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.3, 15.3, 15.3, 15.4, 15.4, 15.4, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.3, 15.4, 15.4, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.3, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 15.0, 14.9, 15.0, 15.0, 15.0, 15.1, 15.1, 15.0, 15.1, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 15.0, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.8, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 14.9, 15.0, 15.0, 15.0, 15.0, 15.0, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.1, 15.1, 15.1, 15.1, 15.1, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.2, 15.3, 15.3, 15.4, 15.4, 15.4, 15.4, 15.4, 15.4, 15.5, 15.6, 15.7, 15.7, 15.8, 15.8, 15.8, 15.8, 15.9, 15.9, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.0, 16.2, 16.5, 16.8, 17.0, 17.1, 17.3, 17.3, 17.4, 17.5, 17.6, 17.5, 17.5, 17.7, 17.7, 17.7, 17.7, 17.7, 17.6, 17.7, 17.8], "y": ["01:01:12", "01:02:12", "01:03:12", "01:04:12", "01:05:12", "01:06:13", "01:07:12", "01:08:12", "01:09:13", "01:10:26", "01:11:12", "01:12:12", "01:13:12", "01:14:12", "01:15:11", "01:16:12", "01:17:12", "01:18:12", "01:19:12", "01:20:26", "01:21:13", "01:22:12", "01:23:12", "01:24:12", "01:25:12", "01:26:13", "01:27:12", "01:28:12", "01:29:12", "01:30:23", "01:31:12", "01:32:12", "01:33:12", "01:34:12", "01:35:12", "01:36:13", "01:37:12", "01:38:12", "01:39:13", "01:40:24", "01:41:12", "01:42:11", "01:43:11", "01:44:12", "01:45:12", "01:46:12", "01:47:12", "01:48:12", "01:49:12", "01:50:26", "01:51:12", "01:52:12", "01:53:13", "01:54:12", "04:47:12", "04:48:12", "04:49:20", "04:50:55", "04:51:48", "04:52:48", "04:53:32", "04:54:30", "04:55:30", "04:56:14", "04:57:12", "04:58:12", "04:59:23", "05:00:26", "05:01:13", "05:02:42", "05:03:12", "05:04:11", "05:05:11", "05:06:11", "05:07:12", "05:08:11", "05:09:12", "05:10:19", "05:11:12", "05:12:11", "05:13:11", "05:14:11", "05:15:11", "05:16:12", "05:17:11", "05:18:12", "05:19:11", "05:20:15", "05:21:12", "05:22:11", "05:23:12", "05:24:11", "05:25:11", "05:26:12", "05:27:11", "05:28:11", "05:29:11", "05:30:17", "05:31:11", "05:32:11", "05:33:12", "05:34:11", "05:35:11", "05:36:12", "05:37:11", "05:38:11", "05:39:12", "05:40:18", "05:41:11", "05:42:11", "05:43:11", "05:44:11", "05:45:11", "05:46:12", "05:47:11", "05:48:11", "05:49:11", "05:50:15", "05:51:11", "05:52:11", "05:53:11", "05:54:11", "05:55:11", "05:56:12", "05:57:11", "05:58:11", "05:59:11", "06:00:15", "06:01:12", "06:02:11", "06:03:11", "06:04:11", "06:05:12", "06:06:11", "06:07:12", "06:08:11", "06:09:12", "06:10:17", "06:11:12", "06:12:11", "06:13:11", "06:14:11", "06:15:11", "06:16:11", "06:17:12", "06:18:11", "06:19:11", "06:20:17", "06:21:12", "06:22:11", "06:23:11", "06:24:11", "06:25:21", "06:26:12", "06:27:11", "06:28:12", "06:29:11", "06:30:16", "06:31:12", "06:32:11", "06:33:11", "06:34:11", "06:35:11", "06:36:12", "06:37:11", "06:38:11", "06:39:11", "06:40:17", "06:41:11", "06:42:11", "06:43:12", "06:44:11", "06:45:11", "06:46:12", "06:47:11", "06:48:11", "06:49:11", "06:50:17", "06:51:11", "06:52:11", "06:53:11", "06:54:11", "06:55:12", "06:56:11", "06:57:11", "06:58:11", "06:59:10", "07:00:14", "07:01:11", "07:02:11", "07:03:11", "07:04:11", "07:05:12", "07:06:11", "07:07:11", "07:08:11", "07:09:11", "07:10:17", "07:11:11", "07:12:11", "07:13:11", "07:14:11", "07:15:11", "07:16:12", "07:17:11", "07:18:11", "07:19:11", "07:20:17", "07:21:12", "07:22:11", "07:23:11", "07:24:12", "07:25:11", "07:26:12", "07:27:11", "07:28:11", "07:29:11", "07:30:17", "07:31:11", "07:32:11", "07:33:11", "07:34:11", "07:35:11", "07:36:11", "07:37:11", "07:38:11", "07:39:11", "07:40:17", "07:41:12", "07:42:11", "07:43:11", "07:44:11", "07:45:12", "07:46:12", "07:47:11", "07:48:11", "07:49:11", "07:50:17", "07:51:12", "07:52:11", "07:53:11", "07:54:12", "07:55:11", "07:56:11", "07:57:12", "07:58:11", "07:59:11", "08:00:14", "08:01:12", "08:02:11", "08:03:12", "08:04:11", "08:05:11", "08:06:12", "08:07:11", "08:08:12", "08:09:11", "08:10:17", "08:11:12", "08:12:11", "08:13:12", "08:14:11", "08:15:11", "08:16:12", "08:17:11", "08:18:11", "08:19:12", "08:20:17", "08:21:11", "08:22:12", "08:23:11", "08:24:11", "08:25:12", "08:26:11", "08:27:11", "08:28:12", "08:29:11", "08:30:17", "08:31:12", "08:32:11", "08:33:11", "08:34:11", "08:35:11", "08:36:12", "08:37:11", "08:38:12", "08:39:11", "08:40:18", "08:41:11", "08:42:12", "08:43:11", "08:44:11", "08:45:11", "08:46:12", "08:47:12"]}, {"marker": {"color": "rgba(128, 0, 128, 1.0)", "line": {"width": 1.3}, "opacity": 0.8, "size": 12, "symbol": "circle"}, "mode": "markers", "name": "Automne", "textfont": {"color": "#4D5663"}, "type": "scatter", "x": [17.8, 18.0, 18.0, 18.1, 18.1, 18.1, 18.2, 18.4, 18.7, 18.9, 19.1, 19.0, 19.0, 19.2, 19.4, 19.5, 19.5, 19.5, 19.4, 19.4, 19.4, 19.4, 19.5, 19.5, 19.7, 19.8, 19.9, 19.9, 19.9, 19.9, 19.9, 19.9, 20.0, 20.0, 20.0, 20.0, 20.2, 20.4, 20.5, 20.7, 20.7, 20.7, 20.6, 20.7, 21.0, 21.1, 21.3, 21.4, 21.4, 21.4, 21.5, 21.4, 21.4, 21.5, 21.6, 21.7, 21.7, 21.7, 21.6, 21.6, 21.7, 21.9, 21.6, 21.6, 21.6, 21.5, 21.6, 21.7, 21.6, 21.7, 21.9, 22.1, 22.0, 22.2, 22.3, 22.2, 22.0, 21.9, 21.8, 21.9, 21.8, 21.4, 21.2, 21.1, 21.1, 21.0, 21.0, 21.2, 21.3, 21.5, 21.4, 21.1, 21.0, 21.0, 21.1, 21.1, 21.1, 21.1, 21.1, 21.2, 21.4, 21.5, 21.6, 21.7, 21.6, 21.5, 21.7, 21.8, 21.8, 21.7, 21.8, 22.1, 22.2, 22.1, 22.1, 22.1, 22.1, 22.1, 22.0, 22.0, 22.1, 22.1, 22.2, 22.2, 22.2, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.3, 22.5, 22.7, 22.8, 22.9, 22.8, 22.7, 22.6, 22.6, 22.4, 22.4, 22.3, 22.3, 22.4, 22.5, 22.5, 22.6, 22.6, 22.6, 22.6, 22.7, 22.6, 22.6, 22.6, 22.7, 22.7, 22.7, 22.8, 22.6, 22.6, 22.5, 22.4, 22.4, 22.4, 22.5, 22.6, 22.6, 22.5, 22.3, 22.2, 22.1, 22.2, 22.4, 22.6, 22.7, 22.6, 22.6, 22.8, 23.0, 23.3, 23.6, 23.7, 23.5, 23.3, 23.2, 23.1, 23.0, 22.9, 22.9, 22.8, 22.7, 22.6, 22.6, 22.5, 22.5, 22.6, 22.7, 22.7, 22.9, 23.0, 22.9, 22.9, 23.0, 23.0, 23.0, 23.1, 23.3, 23.5, 23.6, 23.7, 23.9, 24.0, 23.8, 23.6, 23.6, 23.5, 23.6, 23.5, 23.3, 23.2, 23.3, 23.5, 23.6, 23.7, 23.8, 23.9, 24.0, 24.0, 24.1, 24.3, 24.3, 24.2, 24.2, 24.1, 23.9, 23.9, 23.8, 23.8, 23.9, 23.9, 24.0, 24.2, 24.3, 24.1, 24.1, 24.1, 24.1, 24.1, 24.2, 24.4, 24.5, 24.5, 24.4, 24.5, 24.3, 24.2, 24.3, 24.3, 24.3, 24.1, 24.1, 24.1, 24.1, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.8, 24.8, 24.8, 24.7, 24.4, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.4, 24.3, 24.3, 24.4, 24.6, 24.8, 24.9, 25.0, 25.1, 25.2, 25.3, 25.4, 25.1, 24.9, 24.8, 24.8, 24.8, 24.8, 24.6, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.6, 24.6, 24.5, 24.3, 24.2, 24.3, 24.4, 24.5, 24.5, 24.6, 24.5, 24.5, 24.5, 24.4, 24.4, 24.3, 24.4, 24.6, 24.5, 24.4, 24.4, 24.4, 24.3, 24.4, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.6, 24.7, 24.8, 24.8, 24.8, 24.9, 25.0, 25.0, 25.0, 25.0, 25.0, 24.9, 24.8, 24.7, 24.6, 24.5, 24.5, 24.6, 24.7, 24.7, 24.7, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.4, 24.3, 24.3, 24.3, 24.4, 24.4, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.5, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.6, 24.6, 24.6, 24.6, 24.6, 24.6, 24.7, 24.7, 24.7, 24.7, 24.7, 24.6, 24.6, 24.6, 24.6, 24.5, 24.6, 24.6, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.5, 24.4, 24.4, 24.4, 24.4, 24.4, 24.4, 24.3, 24.3, 24.3, 24.3, 24.3, 24.3, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 24.2, 19.4, 19.4, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.3, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.2, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.1, 19.1, 19.1, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 19.0, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.9, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.8, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.7, 18.6, 18.7, 18.6, 18.6, 18.6, 18.6, 18.6, 18.5, 18.5, 18.5, 18.5], "y": ["08:48:11", "08:49:11", "08:50:14", "08:51:12", "08:52:11", "08:53:11", "08:54:11", "08:55:11", "08:56:12", "08:57:11", "08:58:11", "08:59:11", "09:00:17", "09:01:12", "09:02:11", "09:03:11", "09:04:11", "09:05:12", "09:06:11", "09:07:12", "09:08:11", "09:09:12", "09:10:18", "09:11:12", "09:12:11", "09:13:12", "09:14:11", "09:15:12", "09:16:11", "09:17:12", "09:18:11", "09:19:11", "09:20:18", "09:21:12", "09:22:11", "09:23:11", "09:24:11", "09:25:12", "09:26:12", "09:27:11", "09:28:11", "09:29:11", "09:30:18", "09:31:12", "09:32:11", "09:33:11", "09:34:11", "09:35:11", "09:36:11", "09:37:11", "09:38:11", "09:39:12", "09:40:18", "09:41:12", "09:42:11", "09:43:11", "09:44:11", "09:45:11", "09:46:11", "09:47:12", "09:48:11", "09:49:11", "09:50:19", "09:51:12", "09:52:11", "09:53:11", "09:54:11", "09:55:12", "09:56:12", "09:57:11", "09:58:11", "09:59:11", "10:00:18", "10:01:12", "10:02:12", "10:03:11", "10:04:11", "10:05:11", "10:06:11", "10:07:11", "10:08:11", "10:09:11", "10:10:19", "10:11:12", "10:12:11", "10:13:11", "10:14:11", "10:15:11", "10:16:11", "10:17:12", "10:18:11", "10:19:11", "10:20:18", "10:21:12", "10:22:11", "10:23:11", "10:24:11", "10:25:12", "10:26:11", "10:27:12", "10:28:11", "10:29:11", "10:30:18", "10:31:12", "10:32:11", "10:33:11", "10:34:11", "10:35:11", "10:36:11", "10:37:12", "10:38:11", "10:39:11", "10:40:13", "10:41:12", "10:42:11", "10:43:11", "10:44:11", "10:45:12", "10:46:11", "10:47:11", "10:48:11", "10:49:11", "10:50:18", "10:51:11", "10:52:12", "10:53:11", "10:54:11", "10:55:12", "10:56:12", "10:57:11", "10:58:11", "10:59:12", "11:00:19", "11:01:11", "11:02:12", "11:03:11", "11:04:11", "11:05:11", "11:06:12", "11:07:12", "11:08:11", "11:09:12", "11:10:18", "11:11:12", "11:12:11", "11:13:11", "11:14:11", "11:15:11", "11:16:12", "11:17:11", "11:18:11", "11:19:11", "11:20:18", "11:21:11", "11:22:11", "11:23:11", "11:24:11", "11:25:12", "11:26:12", "11:27:11", "11:28:11", "11:29:11", "11:30:18", "11:31:12", "11:32:11", "11:33:11", "11:34:11", "11:35:11", "11:36:12", "11:37:11", "11:38:11", "11:39:12", "11:40:20", "11:41:12", "11:42:11", "11:43:11", "11:44:11", "11:45:11", "11:46:12", "11:47:11", "11:48:11", "11:49:11", "11:50:18", "11:51:11", "11:52:11", "11:53:11", "11:54:11", "11:55:11", "11:56:12", "11:57:11", "11:58:11", "11:59:12", "12:00:18", "12:01:12", "12:02:11", "12:03:12", "12:04:11", "12:05:11", "12:06:12", "12:07:11", "12:08:11", "12:09:12", "12:10:19", "12:11:12", "12:12:11", "12:13:12", "12:14:11", "12:15:11", "12:16:12", "12:17:11", "12:18:11", "12:19:11", "12:20:17", "12:21:12", "12:22:11", "12:23:12", "12:24:11", "12:25:11", "12:26:12", "12:27:11", "12:28:11", "12:29:11", "12:30:17", "12:31:12", "12:32:11", "12:33:11", "12:34:12", "12:35:11", "12:36:12", "12:37:11", "12:38:11", "12:39:12", "12:40:18", "12:41:11", "12:42:11", "12:43:11", "12:44:11", "12:45:11", "12:46:11", "12:47:11", "12:48:11", "12:49:11", "12:50:14", "12:51:12", "12:52:11", "12:53:11", "12:54:11", "12:55:12", "12:56:12", "12:57:11", "12:58:11", "12:59:11", "13:00:14", "13:01:12", "13:02:11", "13:03:12", "13:04:11", "13:05:11", "13:06:11", "13:07:11", "13:08:12", "13:09:11", "13:10:12", "13:11:12", "13:12:11", "13:13:11", "13:14:11", "13:15:12", "13:16:11", "13:17:11", "13:18:11", "13:19:12", "13:20:18", "13:21:12", "13:22:11", "13:23:11", "13:24:12", "13:25:11", "13:26:12", "13:27:11", "13:28:11", "13:29:12", "13:30:14", "13:31:12", "13:32:11", "13:33:11", "13:34:11", "13:35:12", "13:36:12", "13:37:12", "13:38:11", "13:39:12", "13:40:18", "13:41:12", "13:42:11", "13:43:11", "13:44:12", "13:45:11", "13:46:12", "13:47:12", "13:48:11", "13:49:11", "13:50:17", "13:51:12", "13:52:11", "13:53:11", "13:54:11", "13:55:12", "13:56:12", "13:57:11", "13:58:11", "13:59:11", "14:00:14", "14:01:12", "14:02:11", "14:03:11", "14:04:12", "14:05:11", "14:06:12", "14:07:12", "14:08:11", "14:09:12", "14:10:16", "14:11:11", "14:12:12", "14:13:11", "14:14:11", "14:15:11", "14:16:11", "14:17:12", "14:18:11", "14:19:11", "14:20:17", "14:21:12", "14:22:11", "14:23:11", "14:24:11", "14:25:12", "14:26:12", "14:27:11", "14:28:11", "14:29:11", "14:30:14", "14:31:11", "14:32:12", "14:33:11", "14:34:11", "14:35:11", "14:36:11", "14:37:11", "14:38:11", "14:39:12", "14:40:16", "14:41:12", "14:42:11", "14:43:11", "14:44:12", "14:45:11", "14:46:12", "14:47:11", "14:48:11", "14:49:11", "14:50:17", "14:51:12", "14:52:11", "14:53:11", "14:54:12", "14:55:11", "14:56:12", "14:57:11", "14:58:12", "14:59:11", "15:00:13", "15:01:12", "15:02:12", "15:03:11", "15:04:11", "15:05:12", "15:06:11", "15:07:11", "15:08:12", "15:09:11", "15:10:14", "15:11:12", "15:12:11", "15:13:12", "15:14:11", "15:15:11", "15:16:12", "15:17:11", "15:18:11", "15:19:11", "15:20:12", "15:21:12", "15:22:11", "15:23:11", "15:24:11", "15:25:12", "15:26:12", "15:27:11", "15:28:11", "15:29:12", "15:30:15", "15:31:12", "15:32:11", "15:33:11", "15:34:11", "15:35:11", "15:36:12", "15:37:12", "15:38:11", "15:39:12", "15:40:13", "15:41:11", "15:42:11", "15:43:11", "15:44:11", "15:45:12", "15:46:11", "15:47:11", "15:48:11", "15:49:11", "15:50:17", "15:51:11", "15:52:11", "15:53:11", "15:54:11", "15:55:11", "15:56:12", "15:57:11", "15:58:11", "15:59:11", "16:00:15", "16:01:12", "16:02:11", "16:03:11", "16:04:11", "16:05:11", "16:06:12", "16:07:11", "16:08:11", "16:09:12", "16:10:17", "16:11:11", "16:12:12", "16:13:11", "16:14:11", "16:15:12", "16:16:11", "16:17:11", "16:18:11", "16:19:12", "16:20:17", "16:21:12", "16:22:11", "16:23:11", "16:24:11", "16:25:11", "16:26:12", "16:27:11", "16:28:11", "16:29:11", "16:30:16", "16:31:11", "16:32:11", "16:33:11", "16:34:11", "16:35:11", "16:36:12", "16:37:11", "16:38:11", "16:39:11", "16:40:17", "16:41:12", "16:42:11", "16:43:11", "16:44:11", "16:45:12", "16:46:11", "16:47:12", "16:48:11", "16:49:11", "16:50:14", "16:51:12", "16:52:11", "16:53:11", "16:54:12", "16:55:11", "16:56:12", "16:57:12", "16:58:11", "16:59:11", "17:00:14", "17:01:12", "17:02:12", "17:03:11", "17:04:11", "17:05:11", "17:06:12", "17:07:11", "17:08:11", "17:09:12", "17:10:16", "22:28:11", "22:29:11", "22:30:14", "22:31:11", "22:32:11", "22:33:11", "22:34:11", "22:35:12", "22:36:11", "22:37:12", "22:38:11", "22:39:11", "22:40:12", "22:41:12", "22:42:11", "22:43:12", "22:44:11", "22:45:11", "22:46:12", "22:47:11", "22:48:12", "22:49:11", "22:50:13", "22:51:11", "22:52:11", "22:53:11", "22:54:11", "22:55:11", "22:56:12", "22:57:11", "22:58:11", "22:59:11", "23:00:12", "23:01:12", "23:02:11", "23:03:11", "23:04:11", "23:05:11", "23:06:12", "23:07:11", "23:08:11", "23:09:12", "23:10:15", "23:11:11", "23:12:12", "23:13:11", "23:14:11", "23:15:11", "23:16:11", "23:17:12", "23:18:11", "23:19:11", "23:20:13", "23:21:12", "23:22:11", "23:23:11", "23:24:11", "23:25:12", "23:26:12", "23:27:11", "23:28:12", "23:29:11", "23:30:14", "23:31:12", "23:32:11", "23:33:11", "23:34:11", "23:35:11", "23:36:12", "23:37:11", "23:38:11", "23:39:12", "23:40:15", "23:41:11", "23:42:12", "23:43:11", "23:44:11", "23:45:12", "23:46:12", "23:47:11", "23:48:11", "23:49:11", "23:50:14", "23:51:12", "23:52:11", "23:53:11", "23:54:11", "23:55:12", "23:56:12", "23:57:11", "23:58:11", "23:59:11"]}],
                        {"legend": {"bgcolor": "#F5F6F9", "font": {"color": "#4D5663"}}, "paper_bgcolor": "#F5F6F9", "plot_bgcolor": "#F5F6F9", "template": {"data": {"bar": [{"error_x": {"color": "#2a3f5f"}, "error_y": {"color": "#2a3f5f"}, "marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "bar"}], "barpolar": [{"marker": {"line": {"color": "#E5ECF6", "width": 0.5}}, "type": "barpolar"}], "carpet": [{"aaxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "baxis": {"endlinecolor": "#2a3f5f", "gridcolor": "white", "linecolor": "white", "minorgridcolor": "white", "startlinecolor": "#2a3f5f"}, "type": "carpet"}], "choropleth": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "choropleth"}], "contour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "contour"}], "contourcarpet": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "contourcarpet"}], "heatmap": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmap"}], "heatmapgl": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "heatmapgl"}], "histogram": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "histogram"}], "histogram2d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2d"}], "histogram2dcontour": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "histogram2dcontour"}], "mesh3d": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "type": "mesh3d"}], "parcoords": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "parcoords"}], "pie": [{"automargin": true, "type": "pie"}], "scatter": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter"}], "scatter3d": [{"line": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatter3d"}], "scattercarpet": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattercarpet"}], "scattergeo": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergeo"}], "scattergl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattergl"}], "scattermapbox": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scattermapbox"}], "scatterpolar": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolar"}], "scatterpolargl": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterpolargl"}], "scatterternary": [{"marker": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "type": "scatterternary"}], "surface": [{"colorbar": {"outlinewidth": 0, "ticks": ""}, "colorscale": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "type": "surface"}], "table": [{"cells": {"fill": {"color": "#EBF0F8"}, "line": {"color": "white"}}, "header": {"fill": {"color": "#C8D4E3"}, "line": {"color": "white"}}, "type": "table"}]}, "layout": {"annotationdefaults": {"arrowcolor": "#2a3f5f", "arrowhead": 0, "arrowwidth": 1}, "coloraxis": {"colorbar": {"outlinewidth": 0, "ticks": ""}}, "colorscale": {"diverging": [[0, "#8e0152"], [0.1, "#c51b7d"], [0.2, "#de77ae"], [0.3, "#f1b6da"], [0.4, "#fde0ef"], [0.5, "#f7f7f7"], [0.6, "#e6f5d0"], [0.7, "#b8e186"], [0.8, "#7fbc41"], [0.9, "#4d9221"], [1, "#276419"]], "sequential": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]], "sequentialminus": [[0.0, "#0d0887"], [0.1111111111111111, "#46039f"], [0.2222222222222222, "#7201a8"], [0.3333333333333333, "#9c179e"], [0.4444444444444444, "#bd3786"], [0.5555555555555556, "#d8576b"], [0.6666666666666666, "#ed7953"], [0.7777777777777778, "#fb9f3a"], [0.8888888888888888, "#fdca26"], [1.0, "#f0f921"]]}, "colorway": ["#636efa", "#EF553B", "#00cc96", "#ab63fa", "#FFA15A", "#19d3f3", "#FF6692", "#B6E880", "#FF97FF", "#FECB52"], "font": {"color": "#2a3f5f"}, "geo": {"bgcolor": "white", "lakecolor": "white", "landcolor": "#E5ECF6", "showlakes": true, "showland": true, "subunitcolor": "white"}, "hoverlabel": {"align": "left"}, "hovermode": "closest", "mapbox": {"style": "light"}, "paper_bgcolor": "white", "plot_bgcolor": "#E5ECF6", "polar": {"angularaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "radialaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "scene": {"xaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "yaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}, "zaxis": {"backgroundcolor": "#E5ECF6", "gridcolor": "white", "gridwidth": 2, "linecolor": "white", "showbackground": true, "ticks": "", "zerolinecolor": "white"}}, "shapedefaults": {"line": {"color": "#2a3f5f"}}, "ternary": {"aaxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "baxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}, "bgcolor": "#E5ECF6", "caxis": {"gridcolor": "white", "linecolor": "white", "ticks": ""}}, "title": {"x": 0.05}, "xaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}, "yaxis": {"automargin": true, "gridcolor": "white", "linecolor": "white", "ticks": "", "title": {"standoff": 15}, "zerolinecolor": "white", "zerolinewidth": 2}}}, "title": {"font": {"color": "#4D5663"}, "text": "Temperature according to the time"}, "xaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Temperature"}, "zerolinecolor": "#E1E5ED"}, "yaxis": {"gridcolor": "#E1E5ED", "showgrid": true, "tickfont": {"color": "#4D5663"}, "title": {"font": {"color": "#4D5663"}, "text": "Heure"}, "zerolinecolor": "#E1E5ED"}},
                        {"showLink": true, "linkText": "Export to plot.ly", "plotlyServerURL": "https://plot.ly", "responsive": true}
                    ).then(function(){
                            
var gd = document.getElementById('b527daa6-f029-4a32-b830-f8487033a3cb');
var x = new MutationObserver(function (mutations, observer) {{
        var display = window.getComputedStyle(gd).display;
        if (!display || display === 'none') {{
            console.log([gd, 'removed!']);
            Plotly.purge(gd);
            observer.disconnect();
        }}
}});

// Listen for the removal of the full notebook cells
var notebookContainer = gd.closest('#notebook-container');
if (notebookContainer) {{
    x.observe(notebookContainer, {childList: true});
}}

// Listen for the clearing of the current output cell
var outputEl = gd.closest('.output');
if (outputEl) {{
    x.observe(outputEl, {childList: true});
}}

                        })
                };
                });
            </script>
        </div>
</div>

</div>

</div>
</div>

</div>
    </div>
  </div>
</body>

<a href="membre.php"><h3>Retour</h3></a> 


</html>
