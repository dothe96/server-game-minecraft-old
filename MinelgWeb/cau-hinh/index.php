<?php error_reporting(0);
 ?>
 <?php
function curPageURL() {
$pageURL = "http";
if ($_SERVER["HTTPS"] == "on") {
$pageURL .= "s";
}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
$pageURL .= $_SERVER[“SERVER_NAME”].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
} else {
$pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
}
return $pageURL;
}
?>
<!doctype html>
<!--[if lt IE 7]><html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js"><!--<![endif]-->
	<head>
	<link rel="shortcut icon" href="..//imglg/iconlg.ico" type="image/x-icon" />
	<link rel="icon" href="../imglg/iconlg.png" type="image/x-icon" />
	<link href="../assetslg/css/bootstrap.css" rel="stylesheet">
		<link href="../assetslg/css/menulg.css" rel="stylesheet">
		<!-- Minelg CSS -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
        <link href="../assetslg/css/mymc.css" rel="stylesheet">



                <meta http-equiv="content-language" content="vi" />	

		<meta charset="utf-8">

				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Cấu Hình - Server Minecraft Việt Nam - Minelg.com</title>

				<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

				
<!-- This site is optimized with the Yoast SEO plugin v3.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Minecraft là một trò chơi điện tử độc lập trong một Thế giới mở. Ban đầu nó được tạo ra bởi lập trình viên người Thụy Điển Markus &quot;Notch&quot; Persson"/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="/" />
<link rel="publisher" href="https://plus.google.com/u/0/104911943888978251884"/>
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Trang Chủ - Server Minecraft Việt Nam" />
<meta property="og:description" content="Minecraft là một trò chơi điện tử độc lập trong một Thế giới mở. Ban đầu nó được tạo ra bởi lập trình viên người Thụy Điển Markus &quot;Notch&quot; Persson" />
<meta property="og:url" content="/" />
<meta property="og:site_name" content="Minecraft Việt Nam - Minelg.com" />
<meta property="fb:app_id" content="240048193115665" />
<meta property="og:image" content="../wp-content/uploads/2016/04/minecraft.png" />
<meta property="og:image:width" content="1363" />
<meta property="og:image:height" content="683" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Minecraft là một trò chơi điện tử độc lập trong một Thế giới mở. Ban đầu nó được tạo ra bởi lập trình viên người Thụy Điển Markus &quot;Notch&quot; Persson" />
<meta name="twitter:title" content="Trang Chủ - Minecraft Việt Nam" />
<meta name="twitter:site" content="@MinecraftNam" />
<meta name="twitter:image" content="https://i1.wp.com/minelg.com/wp-content/uploads/2016/04/minecraft.png?fit=1363%2C683&#038;ssl=1" />
<meta name="twitter:creator" content="@MinecraftNam" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/minelg.tk\/","name":"Minecraft Vi\u1ec7t Nam","potentialAction":{"@type":"SearchAction","target":"https:\/\/minelg.tk\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/minelg.tk\/","sameAs":["https:\/\/www.facebook.com\/minelg.tk\/","https:\/\/plus.google.com\/u\/0\/104911943888978251884","https:\/\/twitter.com\/MinecraftNam"],"@id":"#organization","name":"VM Group","logo":""}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//www.google.com' />
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//secure.gravatar.com' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Minecraft Việt Nam &raquo;" href="/feed/" />
<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Minecraft Việt Nam &raquo;" href="/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/minelg.tk\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var c,d,e,f,g,h=b.createElement("canvas"),i=h.getContext&&h.getContext("2d"),j=String.fromCharCode;if(!i||!i.fillText)return!1;switch(i.textBaseline="top",i.font="600 32px Arial",a){case"flag":return i.fillText(j(55356,56806,55356,56826),0,0),!(h.toDataURL().length<3e3)&&(i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,65039,8205,55356,57096),0,0),c=h.toDataURL(),i.clearRect(0,0,h.width,h.height),i.fillText(j(55356,57331,55356,57096),0,0),d=h.toDataURL(),c!==d);case"diversity":return i.fillText(j(55356,57221),0,0),e=i.getImageData(16,16,1,1).data,f=e[0]+","+e[1]+","+e[2]+","+e[3],i.fillText(j(55356,57221,55356,57343),0,0),e=i.getImageData(16,16,1,1).data,g=e[0]+","+e[1]+","+e[2]+","+e[3],f!==g;case"simple":return i.fillText(j(55357,56835),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode8":return i.fillText(j(55356,57135),0,0),0!==i.getImageData(16,16,1,1).data[0];case"unicode9":return i.fillText(j(55358,56631),0,0),0!==i.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity","unicode9"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='um_recaptcha-css'  href='../wp-content/plugins/um-recaptcha1/assets/css/um-recaptcha.css' type='text/css' media='all' />
<link rel='stylesheet' id='bhittani_plugin_kksr-css'  href='../wp-content/plugins/kk-star-ratings/css.css' type='text/css' media='all' />
<link rel='stylesheet' id='pp-bootstrap-css'  href='../wp-content/plugins/ppress/assets/css/flat-ui/bs/css/bs.css' type='text/css' media='all' />
<link rel='stylesheet' id='pp-flat-ui-css'  href='../wp-content/plugins/ppress/assets/css/flat-ui/css/flat-ui.css' type='text/css' media='all' />
<link rel='stylesheet' id='ppcore-css'  href='../wp-content/plugins/ppress/assets/css/ppcore.css' type='text/css' media='all' />
<link rel='stylesheet' id='um_minified-css'  href='../wp-content/plugins/ultimate-member/assets/css/um.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bones-stylesheet-css'  href='../wp-content/themes/magicraft/library/css/style.css' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='bones-ie-only-css'  href='wp-content/themes/magicraft/library/css/ie.css' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='social-logos-css'  href='../wp-content/plugins/jetpack/_inc/social-logos/social-logos.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='../wp-content/plugins/jetpack/css/jetpack.css' type='text/css' media='all' />
      <!--<script>
      if (document.location.protocol != "https:") {
          document.location = document.URL.replace(/^http:/i, "https:");
      }
      </script>-->
      <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script type='text/javascript' src='../wp-content/plugins/kk-star-ratings/js.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/magicraft/library/js/libs/modernizr.custom.min.js'></script>
<script type='text/javascript' async defer src='https://apis.google.com/js/platform.js'></script>
<link rel='canonical' href='/' />
<link rel='https://api.w.org/' href='../wp-json/' />
<link rel='shortlink' href='https://wp.me/P7uASS-11' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed?url=https%3A%2F%2Fminelg.tk%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed?url=https%3A%2F%2Fminelg.tk%2F&#038;format=xml" />
<style>.kk-star-ratings { width:120px; }.kk-star-ratings .kksr-stars a { width:24px; }.kk-star-ratings .kksr-stars, .kk-star-ratings .kksr-stars .kksr-fuel, .kk-star-ratings .kksr-stars a { height:24px; }.kk-star-ratings .kksr-star.gray { background-image: url(../wp-content/plugins/kk-star-ratings/gray.png); }.kk-star-ratings .kksr-star.yellow { background-image: url(../wp-content/plugins/kk-star-ratings/yellow.png); }.kk-star-ratings .kksr-star.orange { background-image: url(../wp-content/plugins/kk-star-ratings/orange.png); }</style>
<link rel='dns-prefetch' href='//v0.wordpress.com'>
<link rel='dns-prefetch' href='//i0.wp.com'>
<link rel='dns-prefetch' href='//i1.wp.com'>
<link rel='dns-prefetch' href='//i2.wp.com'>
<style type='text/css'>img#wpstats{display:none}</style>
<style type="text/css">

		.creepy-main-border .border-left {	background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_main_left.png') top left no-repeat; }
		.creepy-main-border .border-right{	background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_main_right.png') top right no-repeat; }
		.creepy-main-border .border-middle span { background-color: #3d2b1a; }
		.creepy-content-border .border-left {	background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_content_left.png') top left no-repeat; }
		.creepy-content-border .border-right{	background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_content_right.png') top right no-repeat; }
		.creepy-content-border .border-middle span { background-color: #c6c6bd; }
    	.creepy-footer-border .border-left {	background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_footer_left.png') top left no-repeat; }
		.creepy-footer-border .border-right{	background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_footer_right.png') top right no-repeat; }
		.creepy-footer-border .border-middle span { background-color: #25160b; }
    	#inner-content {background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_text.jpg')repeat top left; border-bottom: 7px outset white; border-bottom-right-radius: 30px; border-bottom-left-radius: 30px; padding-bottom: 30px;}
		#inner-lg {background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_text.jpg')repeat top left;}
    	.widgettitle .inner-title{background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_widget_title.jpg') repeat top center;}
    	.menu-wrapper {background: url('../imglg/menubg.jpg') repeat top left; opacity: 0.9;}
    	#main .slider-wrap .inner-bg{ background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_bg.jpg') repeat top left; }
    	.widgettitle .inner-title,#minecraftsv-status .btn, .widget_wp_sidebarlogin .button-primary, #lwa_wp-submit, .mcserver-solo-online, .mcserver-multi-online, .mcserver-solo-offline, .mcserver-multi-offline { color: #FEFEFE ;}
    	.widget .inner-widget { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_side_bg.png') no-repeat top left white;}
    	.menu-wrapper a:hover{background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_m_hover.png') repeat top left; }
    	.mcserver-solo-online, #minecraftsv-status .btn-success, .widget_wp_sidebarlogin .button-primary { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_online.png') no-repeat top center; }
    	.mcserver-multi-online, #lwa_wp-submit { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_multi_online.png') no-repeat top center; }
    	.mcserver-solo-offline, #minecraftsv-status .btn-danger { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_offline.png') no-repeat top center; }
    	.mcserver-multi-offline { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_multi_offline.png') no-repeat top center; }
       	.nav li ul.sub-menu { background: url('../imglg/menubg.jpg') repeat top left; }
    	
    	.vcard .author{ background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_author.png') no-repeat center left; }
		.vcard .comment-number{ background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_comments.png') no-repeat center left; }
		.mcserver-online { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_sml_online.png') no-repeat center center; }
		.mcserver-offline { background: url('../wp-content/themes/magicraft/library/skins/wooden/wooden_sml_offline.png') no-repeat center center; }
		.mcplayers-solo{ background: url('../wp-content/themes/magicraft/library/skins/wooden/online-players.png') no-repeat center left; }
		.mcip-solo{ background: url('../wp-content/themes/magicraft/library/skins/wooden/world-cube.png') no-repeat center left; }

					#inner-footer .mcserver-solo-online, #inner-footer .mcserver-multi-online { color:#eeeddd }
		
					#inner-footer .mcserver-solo-offline, #inner-footer .mcserver-multi-offline { color:#eeeddd }
		

    	
		@media only screen and (min-width: 768px) {
							#main{}
				.sidebar{ float: right;}
					}	

		.widget ul li {border-bottom: 1px dotted #959595;}
		#inner-footer .widget-title { border-bottom: 1px solid #959595;}


		
			TEST
			@media screen and (max-width: 768px) {
				.menu-wrapper .nav a{ border-bottom: 1px solid #744926;}
				.menu-wrapper .nav a:hover{ border-bottom: 1px solid #e1e1e1; }
				.nav li ul.sub-menu { background: none;}
				#main-menu{background: url('../imglg/menubg.jpg') repeat top left; }
			}


	    	
	        a { color: #058207; }
	        a:hover, .vcard a:hover, .pagination li a:hover { color: #876302; }

	        .button{
	        	background: #058207;
	        	color:;
	        	-webkit-box-shadow: 0px 4px 0px 0px #876302;
				-moz-box-shadow:    0px 4px 0px 0px #876302;
				box-shadow:         0px 4px 0px 0px #876302;
	        }
	        .button:hover, .button:focus{
	        	-webkit-box-shadow: 0px 3px 0px 0px #876302;
				-moz-box-shadow:    0px 3px 0px 0px #876302;
				box-shadow:         0px 3px 0px 0px #876302;
	        }
	        .button:active{
	        	-webkit-box-shadow: 0px 0px 0px 0px #876302;
				-moz-box-shadow:    0px 0px 0px 0px #876302;
				box-shadow:         0px 0px 0px 0px #876302;
	        }

	        #main .inner-bg, .widget .inner-widget, .inner-bg{ background: url('../imglg/nenpagemini.jpg') top left #f4f3ed; border-bottom: 7px outset white; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;}

	        h1, h1 a, h2, h2 a, h3, h3 a, h4, h4 a, h5, h5 a, h6, h6 a, .mcplayers-solo, .mcversion-solo, .mcip-solo{ color:#512000; }

	        .nav li a, nav a, a.menu-link{color: #ceba8a;}
	        .nav li a:hover, nav a:hover, a.menu-link:hover{color: #e1e1e1;}


			 
	        #slidr-div div{ color: #ece9d9; }
	        aside#slidr-div-breadcrumbs .slidr-breadcrumbs li.normal, aside#slidr-div-breadcrumbs .slidr-breadcrumbs li.active { border-color: #ece9d9 !important; background-color: #ece9d9 !important; }
	        
	        .slider-content, .slider-content h1, .slider-content h2, .slider-content h3, .slider-content h4 { color: #ece9d9 ; }
	        .slider-nav__item{ background: #ece9d9; }

	        .vcard a{ color: #3a0000; }
			body {	color: #3a0000;
			}

						#inner-footer {background-image: url('../imglg/bgfooter.jpg'); background-repeat: no-repeat; background-position: top center; border-radius: 10px; border: 1px solid white;}
			#inner-footer, #inner-footer a, #inner-footer h1, #inner-footer h2, #inner-footer h3, #inner-footer h4, #inner-footer h5, #inner-footer h6{color: #071907;}
			.widget_archive ul li a:hover, .widget_meta ul li a:hover, .widget_nav_menu ul li a:hover, .widget_categories ul li a:hover {
				background: ;	
				color:  !important;
			}

		
		body{

		/* Font section */
			 font-family: '','Open Sans', 'Helvetica', 'Arial' sans-serif; 		} 

		 body.custom-background{ background-size: cover; }	
    </style>
    	<script>

		var ajaxurl = '../wp-admin/admin-ajax.php';

	</script>
 
		<script type="text/javascript">

		var ultimatemember_image_upload_url = '../wp-content/plugins/ultimate-member/core/lib/upload/um-image-upload.php';
		var ultimatemember_file_upload_url = '../wp-content/plugins/ultimate-member/core/lib/upload/um-file-upload.php';
		var ultimatemember_ajax_url = '../wp-admin/admin-ajax.php';

		</script>

	
		<style type="text/css">.request_name { display: none !important; }</style>

	<style type="text/css">.broken_link, a.broken_link {
	text-decoration: line-through;
}</style><style type="text/css" id="custom-background-css">
body.custom-background { background-image: url('../imglg/bglg.jpg'); background-repeat: no-repeat; background-position: top center; background-attachment: fixed; }
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.menutoggle').click(function(){
			$('.menulg1').slideToggle(300);
			$(this).toggleClass('xz');
		});
	$(window).resize(function(){
		if( $(window).width() > 600){
			$('.menulg1').removeAttr('style');
		}
	});
	});
</script>	
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66097002-2', 'auto');
  ga('send', 'pageview');

</script>
			</head>
	<body class="home page page-id-63 page-template-default custom-background"itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=240048193115665";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script type='text/javascript'>

//<![CDATA[

var Nanobar=function(){var a,b,c,d,e,f,g={width:"100%",height:"2px",zIndex:9999,top:"0"},h={width:0,height:"100%",clear:"both",transition:"height .3s"};return a=function(a,b){for(var c in b)a.style[c]=b[c];a.style["float"]="left"},d=function(){var a=this,b=this.width-this.here;.1>b&&-.1<b?(e.call(this,this.here),this.moving=!1,100==this.width&&(this.el.style.height=0,setTimeout(function(){a.cont.el.removeChild(a.el)},100))):(e.call(this,this.width-b/4),setTimeout(function(){a.go()},16))},e=function(a){this.width=a,this.el.style.width=this.width+"%"},f=function(){var a=new b(this);this.bars.unshift(a)},b=function(b){this.el=document.createElement("div"),this.el.style.backgroundColor="#B40404",this.here=this.width=0,this.moving=!1,this.cont=b,a(this.el,h),b.el.appendChild(this.el)},b.prototype.go=function(a){a?(this.here=a,this.moving||(this.moving=!0,d.call(this))):this.moving&&d.call(this)},c=function(b){b=this.opts=b||{};var c;b.bg=b.bg||"#2980B9",this.bars=[],c=this.el=document.createElement("div"),a(this.el,g),b.id&&(c.id=b.id),c.style.position=b.target?"relative":"fixed",b.target?b.target.insertBefore(c,b.target.firstChild):document.getElementsByTagName("body")[0].appendChild(c),f.call(this)},c.prototype.go=function(a){this.bars[0].go(a),100==a&&f.call(this)},c}(),nanobar=new Nanobar;nanobar.go(30),nanobar.go(60),nanobar.go(100);

//]]>

</script>
		<div id="container">

			<header class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">

				<div id="inner-header" class="wrap clearfix">
				<nav class="navlg">
		<div class="container1">
                <div class="menutong">
                    <ul class="menulg1"> <!--edit mac dinh-->
                        <li><a href="http://minelg.com"><i class="fa fa-home"></i> Home</a></li>
						<li class="macdinhlg"><a><i class="fa fa-book"></i> Hướng Dẫn</a><span class="dropBottom">
							<ul class="submenu1">
									<li><a href="http://minelg.com/huong-dan">Hướng Dẫn</a></li>
									<li><a href="http://minelg.com/gioi-thieu">Giới Thiệu</a></li>
									<li><a href="http://minelg.com/che-tao">Chế Tạo</a></li>
									<li><a href="http://minelg.com/cau-hinh">Cấu Hình</a></li>
							</ul>
						</li>
                        <li><a href="http://minelg.com/dang-ky"><i class="fa fa-user"></i> Đăng ký</a></li>
                        <li><a href="http://minelg.com/donate"><i class="fa fa-star"></i> Donate</a></li>
                        <li><a href="http://minelg.com/tai-game"><i class="fa fa-download"></i> Tải Game</a></li>
                        <li><a href="http://youtube.com" target="_blank"><i class="fa fa-play" target="_blank"></i> Youtube</a></li>
						<li><a href="http://facebook.com/groups/minelg" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    </ul>
                </div>
				<div class="menutoggle"></div>
					<div class="logocl">
						<a href="http://minelg.com"><img class="logodidong" src="../imglg/logo3.png"/></a>
					</div>
				<div class="clear"></div>
		</div>
        </nav>				
				</div>				
			</header> 
<!--noidung-->

	<div id="content">
		<div id="inner-lg" class="wrap2 clearfix">
			<div class="nentrangdad nentrang">
					<font size="5"><i class="fa fa-user"></i> title edit</font>
			</div>
		</div>
	</div>
	<div id="content2">
		<div id="inner-content" class="wrap clearfix">
<div id="main" class="ninecol first clearfix" role="main">
	<div class="inner-bg">
		<article id="post-63" class="clearfix post-63 page type-page status-publish has-post-thumbnail hentry" role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<h1><span style="color: #424242; font-weight: bold;"><div class="minimenu"><font color="#F2F2F2"><i class="fa fa-user-md"></i></font> đề mục edit</div></span></h1>
				<div class="bovien">
						edit noi dung
				</div><!--bovien-->
				<p></p>
				<div class="fb-comments" data-href="http://minelg.com" data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
		</article>
	</div> 
</div> 
		
<!--endnoidung-->

<div id="sidebar1" class="sidebar threecol last clearfix" role="complementary">
<div class="nenpage">
				<div class="daupagenho">
					<font size="4"><font color="#ffffff"><i class="fa fa-globe"></i></font> Thông Tin Server</font>
				</div>
				<div class="thanhnho">
					<font size="3"><font color="#585858"><i class="fa fa-star-o"></i></font> Tên : Minecraft Legend</font>
				</div>
				<div class="thanhnho">
					<font size="3"><font color="#585858"><i class="fa fa-signal"></i></font> Online :&nbsp;&nbsp; <font style="color: #04B404; font-weight: bold;"><?php require('../tructuyen.php') ?></font></font>
				</div>
				<div class="thanhnho">
					<font size="3"><font color="#585858"><i class="fa fa-flag"></i></font> Ip : play.minelg.com</font>
				</div>
				<div class="thanhnho">
					<font size="3"><font color="#585858"><i class="fa fa-sign-in"></i></font> Phiên Bản : 1.10.x</font>
				</div>
				<div class="thanhnho">
					<font size="3"><font color="#585858"><i class="fa fa-check-circle"></i></font> Tình Trạng : Hoạt Động</font>
				</div>
				<div class="cangiua">
					<font size="3" color="#585858">Hãy tham gia vào cộng đồng Minecraft Việt nam, bạn có thể tự do xây dựng ước mơ của mình, làm chủ thế giới riêng, kết bạn với nhiều người chung sở thích. Còn chờ gì nữa hãy tham gia ngay bây giờ!</font>
				</div>
			</div>
<?php require('../require/baiviet.php') ?>
<div id="text-3" class=" widget widget_text">
<span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span></div>		<div id="recent-posts-2" class=" widget widget_recent_entries">
<div class="nenpage">
				<div class="daupagenho">
					<font size="4"><font color="#ffffff"><i class="fa fa-facebook-square"></i></font> Groups MineLG</font>
				</div>
			<div class="cangiua">
			<a href="http://facebook.com/groups/minelg" target="_blank"><img class="chenanhfb" src="../imglg/groupfacebook.jpg"/></a>
			</div>
			</div>
<?php require('../require/tags.php') ?>
<span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span></div>
					
				</div>
		</div> 
		
			<span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span>
		<!--Nhúng plugins command facebook
		<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '336916586672532',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-comments" data-href="http://minelg.tk" data-colorscheme="light" data-numposts="5" data-width="500"></div>
<!--end fb-->

	</div>
			<footer class="footer" role="contentinfo">
					<div id="inner-footer" class="wrap clearfix">
						<div class="cantraif">
							<strong>&copy; 2016 Minecraft Việt Nam - Minecraft legend</br><i class="fa fa-cog"></i> Administrator: <font style="color: #a9112d; font-size: 125%;">Đỗ Thế</font></strong><span id="copyright-message"></span>
						</div>
						<div class="canphaif"><strong>Contact: <i class="fa fa-phone-square"></i> 01683262466 (sms)</br><i class="fa fa-envelope"></i> hotro.minelg@gmail.com</strong><span id="copyright-message"></span></div>
					</div> 
					<span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span>

			</footer> 
		</div> 
				<div id="um_upload_single" style="display:none">
	
</div><div id="um_view_photo" style="display:none">

	<a href="#" data-action="um_remove_modal" class="um-modal-close"><i class="um-faicon-times"></i></a>
	
	<div class="um-modal-body photo">
	
		<div class="um-modal-photo">

		</div>

	</div>
	
</div>	<div style="display:none">
	</div>

	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"https:\/\/minelg.com\/":63};
	</script>
	<div id="sharing_email" style="display: none;">
		<form action="/" method="post">
			<label for="target_email">Send to Email Address</label>
			<input type="email" name="target_email" id="target_email" value="" />

			
				<label for="source_name">Your Name</label>
				<input type="text" name="source_name" id="source_name" value="" />

				<label for="source_email">Your Email Address</label>
				<input type="email" name="source_email" id="source_email" value="" />

						<input type="text" id="jetpack-source_f_name" name="source_f_name" class="input" value="" size="25" autocomplete="off" />
			<script> document.getElementById('jetpack-source_f_name').value = ''; </script>
			
			<img style="float: right; display: none" class="loading" src="../wp-content/plugins/jetpack/modules/sharedaddy/images/loading.gif" alt="loading" width="16" height="16" />
			<input type="submit" value="Send Email" class="sharing_send" />
			<a rel="nofollow" href="#cancel" class="sharing_cancel">Hủy bỏ</a>

			<div class="errors errors-1" style="display: none;">
				Post was not sent - check your email addresses!			</div>

			<div class="errors errors-2" style="display: none;">
				Email check failed, please try again			</div>

			<div class="errors errors-3" style="display: none;">
				Sorry, your blog cannot share posts by email.			</div>
		</form>
	</div>
<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
<script type='text/javascript' src='../wp-content/plugins/jetpack/modules/photon/photon.js'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/js/devicepx-jetpack.js'></script>
<script type='text/javascript' src='https://secure.gravatar.com/js/gprofiles.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/jetpack/modules/wpgroho.js'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='../wp-includes/js/masonry.min.js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var um_scripts = {"ajaxurl":"https:\/\/minelg.tk\/wp-admin\/admin-ajax.php","fileupload":"https:\/\/minelg.tk\/wp-content\/plugins\/ultimate-member\/core\/lib\/upload\/um-file-upload.php","imageupload":"https:\/\/minelg.tk\/wp-content\/plugins\/ultimate-member\/core\/lib\/upload\/um-image-upload.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/ultimate-member/assets/js/um.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/magicraft/library/js/scripts.js'></script>
<script type='text/javascript' src='../wp-content/themes/magicraft/library/js/mccreepy-server.js'></script>
<script type='text/javascript' src='../wp-content/themes/magicraft/library/js/jquery.glide.js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var sharing_js_options = {"lang":"en","counts":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/jetpack/modules/sharedaddy/sharing.js'></script>
<script type='text/javascript'>
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-facebook', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomfacebook', 'menubar=1,resizable=1,width=600,height=400' );
				return false;
			});
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-google-plus-1', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomgoogle-plus-1', 'menubar=1,resizable=1,width=480,height=550' );
				return false;
			});
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-twitter', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomtwitter', 'menubar=1,resizable=1,width=600,height=350' );
				return false;
			});
</script>
<script type='text/javascript' src='https://stats.wp.com/e-201644.js' async defer></script>
<script type='text/javascript'>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:4.3.2',blog:'110725978',post:'63',tz:'0',srv:'minelg.tk'} ]);
	_stq.push([ 'clickTrackerInit', '110725978', '63' ]);
</script>

		<script type="text/javascript">jQuery( '#request' ).val( '' );</script>

	
	<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

</html> <!-- Really Simple SSL mixed content fixer active -->
