<?php header("Content-type: text/css"); ?>
<?php 
$ur = urldecode($_GET['url']);
?>
@font-face {
  font-family: 'Elusive-Icons';
  src:url('<?php echo $ur; ?>/inc/fonts/Elusive-Icons.eot');
  src:url('<?php echo $ur; ?>/inc/fonts/Elusive-Icons.eot?#iefix') format('embedded-opentype'),
url('<?php echo $ur; ?>/inc/fonts/Elusive-Icons.woff') format('woff'),
url('<?php echo $ur; ?>/inc/fonts/Elusive-Icons.ttf') format('truetype'),
url('<?php echo $ur; ?>/inc/fonts/Elusive-Icons.svg#Elusive-Icons') format('svg');
  font-weight: normal;
  font-style: normal;
}

/* Use the following CSS code if you want to use data attributes for inserting your icons */
[data-icon]:before {
  font-family: 'Elusive-Icons';
  content: attr(data-icon);
  speak: none;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
}

/* Use the following CSS code if you want to have a class per icon */
/*
Instead of a list of all class selectors,
you can use the generic selector below, but it's slower:
[class*="icon-"] {
*/
.icon-move, .icon-music, .icon-network, .icon-off, .icon-ok, .icon-ok-circle, .icon-ok-sign, .icon-paper-clip, .icon-paper-clip-alt, .icon-path, .icon-plus-sign, .icon-print, .icon-qrcode, .icon-question, .icon-question-sign, .icon-quotes, .icon-quotes-alt, .icon-random, .icon-record, .icon-reddit, .icon-refresh, .icon-screenshot, .icon-search, .icon-search-alt, .icon-share, .icon-share-alt, .icon-shopping-cart, .icon-shopping-cart-sign, .icon-signal, .icon-skype, .icon-slideshare, .icon-smiley, .icon-th-large, .icon-th-list, .icon-thumbs-down, .icon-thumbs-up, .icon-time, .icon-time-alt, .icon-tint, .icon-torso, .icon-trash, .icon-trash-alt, .icon-tumblr, .icon-w3c, .icon-warning-sign, .icon-website, .icon-website-alt, .icon-wheelchair, .icon-wordpress, .icon-wrench, .icon-wrench-alt, .icon-youtube, .icon-zoom-in, .icon-zoom-out, .icon-pause-alt, .icon-pencil, .icon-pencil-alt, .icon-person, .icon-phone, .icon-phone-alt, .icon-photo, .icon-photo-alt, .icon-picasa, .icon-picture, .icon-pinterest, .icon-plane, .icon-play-alt, .icon-play-circle, .icon-plus, .icon-remove, .icon-remove-circle, .icon-remove-sign, .icon-repeat, .icon-repeat-alt, .icon-resize-full, .icon-resize-horizontal, .icon-resize-small, .icon-resize-vertical, .icon-retweet, .icon-reverse-alt, .icon-road, .icon-rss, .icon-screen, .icon-screen-alt, .icon-smiley-alt, .icon-speaker, .icon-stackoverflow, .icon-star, .icon-star-alt, .icon-star-empty, .icon-stop-alt, .icon-stumbleupon, .icon-tag, .icon-tags, .icon-tasks, .icon-text-height, .icon-text-width, .icon-th, .icon-twitter, .icon-universal-access, .icon-unlock, .icon-unlock-alt, .icon-upload, .icon-user, .icon-video, .icon-video-alt, .icon-video-chat, .icon-view-mode, .icon-vimeo, .icon-vkontakte, .icon-volume-down, .icon-volume-off, .icon-volume-up, .icon-backward, .icon-fast-backward, .icon-fast-forward, .icon-forward, .icon-play, .icon-step-backward, .icon-step-forward, .icon-briefcase, .icon-bullhorn, .icon-calendar, .icon-calendar-sign, .icon-address-book, .icon-address-book-alt, .icon-adjust, .icon-adult, .icon-align-center, .icon-align-justify, .icon-align-left, .icon-align-right, .icon-arrow-down, .icon-arrow-left, .icon-arrow-right, .icon-arrow-up, .icon-asl, .icon-asterisk, .icon-ban-circle, .icon-barcode, .icon-behance, .icon-bell, .icon-blind, .icon-blogger, .icon-bold, .icon-book, .icon-bookmark, .icon-bookmark-empty, .icon-braille, .icon-camera, .icon-cc, .icon-certificate, .icon-check, .icon-check-empty, .icon-chevron-down, .icon-chevron-left, .icon-chevron-right, .icon-chevron-up, .icon-child, .icon-circle-arrow-down, .icon-circle-arrow-left, .icon-circle-arrow-right, .icon-circle-arrow-up, .icon-cloud, .icon-cloud-alt, .icon-cog, .icon-cog-alt, .icon-cogs, .icon-comment, .icon-comment-alt, .icon-compass, .icon-compass-alt, .icon-credit-card, .icon-css, .icon-dashboard, .icon-delicious, .icon-deviantart, .icon-digg, .icon-download, .icon-download-alt, .icon-dribble, .icon-edit, .icon-eject, .icon-envelope, .icon-envelope-alt, .icon-error, .icon-error-alt, .icon-exclamation-sign, .icon-eye-close, .icon-eye-open, .icon-facebook, .icon-facetime-video, .icon-female, .icon-file, .icon-file-alt, .icon-file-edit, .icon-file-edit-alt, .icon-file-new, .icon-file-new-alt, .icon-film, .icon-filter, .icon-fire, .icon-flag, .icon-flag-alt, .icon-flickr, .icon-folder, .icon-folder-close, .icon-folder-open, .icon-folder-sign, .icon-font, .icon-fontsize, .icon-forward-alt, .icon-foursquare, .icon-friendfeed, .icon-friendfeed-rect, .icon-fullscreen, .icon-gift, .icon-github, .icon-github-text, .icon-glass, .icon-glasses, .icon-globe, .icon-globe-alt, .icon-googleplus, .icon-graph, .icon-graph-alt, .icon-group, .icon-group-alt, .icon-guidedog, .icon-hand-down, .icon-hand-left, .icon-hand-right, .icon-hand-up, .icon-hdd, .icon-headphones, .icon-hearing-impaired, .icon-heart, .icon-heart-alt, .icon-heart-empty, .icon-home, .icon-home-alt, .icon-idea, .icon-idea-alt, .icon-inbox, .icon-inbox-alt, .icon-inbox-box, .icon-indent-left, .icon-indent-right, .icon-info-sign, .icon-instagram, .icon-iphone-home, .icon-italic, .icon-key, .icon-laptop, .icon-laptop-alt, .icon-leaf, .icon-linkedin, .icon-list, .icon-list-alt, .icon-lock, .icon-lock-alt, .icon-magnet, .icon-male, .icon-map-marker, .icon-map-marker-alt, .icon-mic, .icon-mic-alt, .icon-minus, .icon-minus-sign, .icon-pause, .icon-fork, .icon-broom, .icon-return-key, .icon-lastfm, .icon-livejournal, .icon-myspace, .icon-soundcloud, .icon-viadeo, .icon-spotify, .icon-caret-left, .icon-caret-up, .icon-caret-right, .icon-caret-down, .icon-stop {
  font-family: 'Elusive-Icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
}
.icon-move:before {
  content: "\e074";
}
.icon-music:before {
  content: "\e073";
}
.icon-network:before {
  content: "\e072";
}
.icon-off:before {
  content: "\e071";
}
.icon-ok:before {
  content: "\e070";
}
.icon-ok-circle:before {
  content: "\e06f";
}
.icon-ok-sign:before {
  content: "\e06e";
}
.icon-paper-clip:before {
  content: "\e06d";
}
.icon-paper-clip-alt:before {
  content: "\e06c";
}
.icon-path:before {
  content: "\e06b";
}
.icon-plus-sign:before {
  content: "\e059";
}
.icon-print:before {
  content: "\e058";
}
.icon-qrcode:before {
  content: "\e057";
}
.icon-question:before {
  content: "\e056";
}
.icon-question-sign:before {
  content: "\e055";
}
.icon-quotes:before {
  content: "\e054";
}
.icon-quotes-alt:before {
  content: "\e053";
}
.icon-random:before {
  content: "\e052";
}
.icon-record:before {
  content: "\e051";
}
.icon-reddit:before {
  content: "\e050";
}
.icon-refresh:before {
  content: "\e04f";
}
.icon-screenshot:before {
  content: "\e03f";
}
.icon-search:before {
  content: "\e03e";
}
.icon-search-alt:before {
  content: "\e03d";
}
.icon-share:before {
  content: "\e03c";
}
.icon-share-alt:before {
  content: "\e03b";
}
.icon-shopping-cart:before {
  content: "\e03a";
}
.icon-shopping-cart-sign:before {
  content: "\e039";
}
.icon-signal:before {
  content: "\e038";
}
.icon-skype:before {
  content: "\e037";
}
.icon-slideshare:before {
  content: "\e036";
}
.icon-smiley:before {
  content: "\e035";
}
.icon-th-large:before {
  content: "\e023";
}
.icon-th-list:before {
  content: "\e022";
}
.icon-thumbs-down:before {
  content: "\e021";
}
.icon-thumbs-up:before {
  content: "\e020";
}
.icon-time:before {
  content: "\e01f";
}
.icon-time-alt:before {
  content: "\e01e";
}
.icon-tint:before {
  content: "\e01d";
}
.icon-torso:before {
  content: "\e01c";
}
.icon-trash:before {
  content: "\e01b";
}
.icon-trash-alt:before {
  content: "\e01a";
}
.icon-tumblr:before {
  content: "\e019";
}
.icon-w3c:before {
  content: "\e00a";
}
.icon-warning-sign:before {
  content: "\e009";
}
.icon-website:before {
  content: "\e008";
}
.icon-website-alt:before {
  content: "\e007";
}
.icon-wheelchair:before {
  content: "\e006";
}
.icon-wordpress:before {
  content: "\e005";
}
.icon-wrench:before {
  content: "\e004";
}
.icon-wrench-alt:before {
  content: "\e003";
}
.icon-youtube:before {
  content: "\e002";
}
.icon-zoom-in:before {
  content: "\e001";
}
.icon-zoom-out:before {
  content: "\e000";
}
.icon-pause-alt:before {
  content: "\e069";
}
.icon-pencil:before {
  content: "\e068";
}
.icon-pencil-alt:before {
  content: "\e067";
}
.icon-person:before {
  content: "\e066";
}
.icon-phone:before {
  content: "\e065";
}
.icon-phone-alt:before {
  content: "\e064";
}
.icon-photo:before {
  content: "\e063";
}
.icon-photo-alt:before {
  content: "\e062";
}
.icon-picasa:before {
  content: "\e061";
}
.icon-picture:before {
  content: "\e060";
}
.icon-pinterest:before {
  content: "\e05f";
}
.icon-plane:before {
  content: "\e05e";
}
.icon-play-alt:before {
  content: "\e05c";
}
.icon-play-circle:before {
  content: "\e05b";
}
.icon-plus:before {
  content: "\e05a";
}
.icon-remove:before {
  content: "\e04e";
}
.icon-remove-circle:before {
  content: "\e04d";
}
.icon-remove-sign:before {
  content: "\e04c";
}
.icon-repeat:before {
  content: "\e04b";
}
.icon-repeat-alt:before {
  content: "\e04a";
}
.icon-resize-full:before {
  content: "\e049";
}
.icon-resize-horizontal:before {
  content: "\e048";
}
.icon-resize-small:before {
  content: "\e047";
}
.icon-resize-vertical:before {
  content: "\e046";
}
.icon-retweet:before {
  content: "\e045";
}
.icon-reverse-alt:before {
  content: "\e044";
}
.icon-road:before {
  content: "\e043";
}
.icon-rss:before {
  content: "\e042";
}
.icon-screen:before {
  content: "\e041";
}
.icon-screen-alt:before {
  content: "\e040";
}
.icon-smiley-alt:before {
  content: "\e034";
}
.icon-speaker:before {
  content: "\e033";
}
.icon-stackoverflow:before {
  content: "\e032";
}
.icon-star:before {
  content: "\e031";
}
.icon-star-alt:before {
  content: "\e030";
}
.icon-star-empty:before {
  content: "\e02f";
}
.icon-stop-alt:before {
  content: "\e02b";
}
.icon-stumbleupon:before {
  content: "\e02a";
}
.icon-tag:before {
  content: "\e029";
}
.icon-tags:before {
  content: "\e028";
}
.icon-tasks:before {
  content: "\e027";
}
.icon-text-height:before {
  content: "\e026";
}
.icon-text-width:before {
  content: "\e025";
}
.icon-th:before {
  content: "\e024";
}
.icon-twitter:before {
  content: "\e018";
}
.icon-universal-access:before {
  content: "\e017";
}
.icon-unlock:before {
  content: "\e016";
}
.icon-unlock-alt:before {
  content: "\e015";
}
.icon-upload:before {
  content: "\e014";
}
.icon-user:before {
  content: "\e013";
}
.icon-video:before {
  content: "\e012";
}
.icon-video-alt:before {
  content: "\e011";
}
.icon-video-chat:before {
  content: "\e010";
}
.icon-view-mode:before {
  content: "\e00f";
}
.icon-vimeo:before {
  content: "\e00e";
}
.icon-vkontakte:before {
  content: "\e10e";
}
.icon-volume-down:before {
  content: "\e00d";
}
.icon-volume-off:before {
  content: "\e00c";
}
.icon-volume-up:before {
  content: "\e00b";
}
.icon-backward:before {
  content: "\e0ab";
}
.icon-fast-backward:before {
  content: "\e09a";
}
.icon-fast-forward:before {
  content: "\e099";
}
.icon-forward:before {
  content: "\e093";
}
.icon-play:before {
  content: "\e05d";
}
.icon-step-backward:before {
  content: "\e02e";
}
.icon-step-forward:before {
  content: "\e02d";
}
.icon-briefcase:before {
  content: "\e10d";
}
.icon-bullhorn:before {
  content: "\e10c";
}
.icon-calendar:before {
  content: "\e10b";
}
.icon-calendar-sign:before {
  content: "\e10a";
}
.icon-address-book:before {
  content: "\e0dd";
}
.icon-address-book-alt:before {
  content: "\e0dc";
}
.icon-adjust:before {
  content: "\e0db";
}
.icon-adult:before {
  content: "\e0da";
}
.icon-align-center:before {
  content: "\e0d9";
}
.icon-align-justify:before {
  content: "\e0d8";
}
.icon-align-left:before {
  content: "\e0d7";
}
.icon-align-right:before {
  content: "\e0d6";
}
.icon-arrow-down:before {
  content: "\e0d5";
}
.icon-arrow-left:before {
  content: "\e0d4";
}
.icon-arrow-right:before {
  content: "\e0af";
}
.icon-arrow-up:before {
  content: "\e0ae";
}
.icon-asl:before {
  content: "\e0ad";
}
.icon-asterisk:before {
  content: "\e0ac";
}
.icon-ban-circle:before {
  content: "\e0aa";
}
.icon-barcode:before {
  content: "\e0d3";
}
.icon-behance:before {
  content: "\e0d2";
}
.icon-bell:before {
  content: "\e0d1";
}
.icon-blind:before {
  content: "\e0d0";
}
.icon-blogger:before {
  content: "\e0cf";
}
.icon-bold:before {
  content: "\e0ce";
}
.icon-book:before {
  content: "\e0f5";
}
.icon-bookmark:before {
  content: "\e0f4";
}
.icon-bookmark-empty:before {
  content: "\e0f3";
}
.icon-braille:before {
  content: "\e0f2";
}
.icon-camera:before {
  content: "\e0a9";
}
.icon-cc:before {
  content: "\e0a8";
}
.icon-certificate:before {
  content: "\e0a7";
}
.icon-check:before {
  content: "\e0a6";
}
.icon-check-empty:before {
  content: "\e0a5";
}
.icon-chevron-down:before {
  content: "\e0a4";
}
.icon-chevron-left:before {
  content: "\e0cd";
}
.icon-chevron-right:before {
  content: "\e0cc";
}
.icon-chevron-up:before {
  content: "\e0cb";
}
.icon-child:before {
  content: "\e0ca";
}
.icon-circle-arrow-down:before {
  content: "\e0c9";
}
.icon-circle-arrow-left:before {
  content: "\e0c8";
}
.icon-circle-arrow-right:before {
  content: "\e0f1";
}
.icon-circle-arrow-up:before {
  content: "\e0f0";
}
.icon-cloud:before {
  content: "\e0ef";
}
.icon-cloud-alt:before {
  content: "\e0ee";
}
.icon-cog:before {
  content: "\e109";
}
.icon-cog-alt:before {
  content: "\e108";
}
.icon-cogs:before {
  content: "\e107";
}
.icon-comment:before {
  content: "\e106";
}
.icon-comment-alt:before {
  content: "\e0a3";
}
.icon-compass:before {
  content: "\e0a2";
}
.icon-compass-alt:before {
  content: "\e0a1";
}
.icon-credit-card:before {
  content: "\e0a0";
}
.icon-css:before {
  content: "\e09f";
}
.icon-dashboard:before {
  content: "\e09e";
}
.icon-delicious:before {
  content: "\e0c7";
}
.icon-deviantart:before {
  content: "\e0c6";
}
.icon-digg:before {
  content: "\e0c5";
}
.icon-download:before {
  content: "\e0c4";
}
.icon-download-alt:before {
  content: "\e0c3";
}
.icon-dribble:before {
  content: "\e0c2";
}
.icon-edit:before {
  content: "\e0ed";
}
.icon-eject:before {
  content: "\e0ec";
}
.icon-envelope:before {
  content: "\e0eb";
}
.icon-envelope-alt:before {
  content: "\e0ea";
}
.icon-error:before {
  content: "\e105";
}
.icon-error-alt:before {
  content: "\e104";
}
.icon-exclamation-sign:before {
  content: "\e103";
}
.icon-eye-close:before {
  content: "\e102";
}
.icon-eye-open:before {
  content: "\e09d";
}
.icon-facebook:before {
  content: "\e09c";
}
.icon-facetime-video:before {
  content: "\e09b";
}
.icon-female:before {
  content: "\e098";
}
.icon-file:before {
  content: "\e0c1";
}
.icon-file-alt:before {
  content: "\e0c0";
}
.icon-file-edit:before {
  content: "\e0bf";
}
.icon-file-edit-alt:before {
  content: "\e0be";
}
.icon-file-new:before {
  content: "\e0bd";
}
.icon-file-new-alt:before {
  content: "\e0bc";
}
.icon-film:before {
  content: "\e0e9";
}
.icon-filter:before {
  content: "\e0e8";
}
.icon-fire:before {
  content: "\e0e7";
}
.icon-flag:before {
  content: "\e0e6";
}
.icon-flag-alt:before {
  content: "\e101";
}
.icon-flickr:before {
  content: "\e100";
}
.icon-folder:before {
  content: "\e0ff";
}
.icon-folder-close:before {
  content: "\e0fe";
}
.icon-folder-open:before {
  content: "\e097";
}
.icon-folder-sign:before {
  content: "\e096";
}
.icon-font:before {
  content: "\e095";
}
.icon-fontsize:before {
  content: "\e094";
}
.icon-forward-alt:before {
  content: "\e092";
}
.icon-foursquare:before {
  content: "\e0bb";
}
.icon-friendfeed:before {
  content: "\e0ba";
}
.icon-friendfeed-rect:before {
  content: "\e0b9";
}
.icon-fullscreen:before {
  content: "\e0b8";
}
.icon-gift:before {
  content: "\e0b7";
}
.icon-github:before {
  content: "\e0b6";
}
.icon-github-text:before {
  content: "\e0e5";
}
.icon-glass:before {
  content: "\e0e4";
}
.icon-glasses:before {
  content: "\e0e3";
}
.icon-globe:before {
  content: "\e0e2";
}
.icon-globe-alt:before {
  content: "\e0fd";
}
.icon-googleplus:before {
  content: "\e0fc";
}
.icon-graph:before {
  content: "\e0fb";
}
.icon-graph-alt:before {
  content: "\e0fa";
}
.icon-group:before {
  content: "\e091";
}
.icon-group-alt:before {
  content: "\e090";
}
.icon-guidedog:before {
  content: "\e08f";
}
.icon-hand-down:before {
  content: "\e08e";
}
.icon-hand-left:before {
  content: "\e08d";
}
.icon-hand-right:before {
  content: "\e08c";
}
.icon-hand-up:before {
  content: "\e0b5";
}
.icon-hdd:before {
  content: "\e0b4";
}
.icon-headphones:before {
  content: "\e0b3";
}
.icon-hearing-impaired:before {
  content: "\e0b2";
}
.icon-heart:before {
  content: "\e0b1";
}
.icon-heart-alt:before {
  content: "\e0b0";
}
.icon-heart-empty:before {
  content: "\e0e1";
}
.icon-home:before {
  content: "\e0e0";
}
.icon-home-alt:before {
  content: "\e0df";
}
.icon-idea:before {
  content: "\e0de";
}
.icon-idea-alt:before {
  content: "\e0f9";
}
.icon-inbox:before {
  content: "\e0f8";
}
.icon-inbox-alt:before {
  content: "\e0f7";
}
.icon-inbox-box:before {
  content: "\e0f6";
}
.icon-indent-left:before {
  content: "\e08b";
}
.icon-indent-right:before {
  content: "\e08a";
}
.icon-info-sign:before {
  content: "\e089";
}
.icon-instagram:before {
  content: "\e088";
}
.icon-iphone-home:before {
  content: "\e087";
}
.icon-italic:before {
  content: "\e086";
}
.icon-key:before {
  content: "\e085";
}
.icon-laptop:before {
  content: "\e084";
}
.icon-laptop-alt:before {
  content: "\e083";
}
.icon-leaf:before {
  content: "\e082";
}
.icon-linkedin:before {
  content: "\e081";
}
.icon-list:before {
  content: "\e080";
}
.icon-list-alt:before {
  content: "\e07f";
}
.icon-lock:before {
  content: "\e07e";
}
.icon-lock-alt:before {
  content: "\e07d";
}
.icon-magnet:before {
  content: "\e07c";
}
.icon-male:before {
  content: "\e07b";
}
.icon-map-marker:before {
  content: "\e07a";
}
.icon-map-marker-alt:before {
  content: "\e079";
}
.icon-mic:before {
  content: "\e078";
}
.icon-mic-alt:before {
  content: "\e077";
}
.icon-minus:before {
  content: "\e076";
}
.icon-minus-sign:before {
  content: "\e075";
}
.icon-pause:before {
  content: "\e06a";
}
.icon-fork:before {
  content: "\e10f";
}
.icon-broom:before {
  content: "\e110";
}
.icon-return-key:before {
  content: "\e111";
}
.icon-lastfm:before {
  content: "\e112";
}
.icon-livejournal:before {
  content: "\e113";
}
.icon-myspace:before {
  content: "\e114";
}
.icon-soundcloud:before {
  content: "\e115";
}
.icon-viadeo:before {
  content: "\e116";
}
.icon-spotify:before {
  content: "\e117";
}
.icon-caret-left:before {
  content: "\e119";
}
.icon-caret-up:before {
  content: "\e02c";
}
.icon-caret-right:before {
  content: "\e118";
}
.icon-caret-down:before {
  content: "\e11a";
}
.icon-stop:before {
  content: "\e11b";
}