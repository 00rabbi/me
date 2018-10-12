<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:css='false' b:defaultwidgetversion='2' b:layoutsVersion='3' b:responsive='true' b:templateVersion='1.0.0' expr:class='data:blog.languageDirection' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
    <meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' name='viewport'/>
    <title><data:view.title.escaped/></title>
    <b:include data='blog' name='all-head-content'/>

    <!-- Google Fonts -->
    <link href='//fonts.googleapis.com/css?family=Lato:400,400i,700,700i' media='all' rel='stylesheet' type='text/css'/>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>
  
<!-- Template Style CSS -->
<b:skin version='1.0.0'><![CDATA[/* 
-----------------------------------------------
Blogger Template Style
Name:        EasyCart
Version:     Free Version
Author:      Sora Templates
Author Url:  https://www.soratemplates.com/
----------------------------------------------- */

/*
<!-- Variable definitions -->
<Variable name="keycolor" description="Main Color" type="color" default="$(main.color)" value="#34BD5C"/>
<Variable name="followByEmail" description="Follow By Email Text" type="string" default="Get all latest content delivered straight to your inbox." value="Get all latest content delivered straight to your inbox."/>

<Group description="Theme Colors" selector="body">
 <Variable name="main.color" description="Main Theme Color" type="color" default="#34BD5C" value="#34BD5C"/>
  <Variable name="main.dark.color" description="Dark Color" type="color" default="#111111" value="#111111"/>
  <Variable name="header.bg" description="Header Background" type="color" default="$(main.dark.color)" value="#111111"/>
  <Variable name="header.color" description="Header Color" type="color" default="#ffffff" value="#ffffff"/>
  <Variable name="menu.bg" description="Menu Background" type="color" default="$(main.color)" value="#34BD5C"/>
  <Variable name="menu.color" description="Menu Color" type="color" default="#ffffff" value="#ffffff"/>
  <Variable name="title.color" description="Title Color" type="color" default="#111111" value="#111111"/>
  <Variable name="title.hover" description="Title Color on Hover" type="color" default="$(main.color)" value="#34BD5C"/>
  <Variable name="footer.color" description="Footer Color" type="color" default="#f1ffff" value="#f1ffff"/>
</Group>

<Group description="Theme Body" selector="body">
  <Variable name="body.background.color" description="Body Background Color" type="color" default="#f8f8f8"  value="#f8f8f8"/>
  <Variable name="body.background" description="Background" type="background" color="$(body.background.color)" default="$(color) url() repeat fixed top left" value="$(color) url() repeat fixed top left"/>
  <Variable name="body.text.color" description="Text Color" type="color" default="#656565"  value="#656565"/>
  <Variable name="body.link.color" description="Link Color" type="color" default="$(main.color)"  value="#34BD5C"/>
</Group>
 
<!-- Extra Variables -->
<Variable name="body.text.font" description="Font" hideEditor="true" type="font" default="14px Lato, sans-serif"  value="14px Lato, sans-serif"/>
<Variable name="posts.background.color" description="Post background color" hideEditor="true" type="color" default="#ffffff"  value="#ffffff"/>
<Variable name="tabs.font" description="Font 2" hideEditor="true" type="font" default="14px Lato, sans-serif"  value="14px Lato, sans-serif"/>
<Variable name="posts.title.color" description="Post title color" hideEditor="true" type="color" default="#111111"  value="#111111"/>
<Variable name="posts.text.color" description="Post text color" hideEditor="true" type="color" default="#656565"  value="#656565"/>
<Variable name="posts.icons.color" description="Post icons color" hideEditor="true" type="color" default="$(main.color)"  value="#34BD5C"/>
<Variable name="labels.background.color" description="Label background color" hideEditor="true" type="color" default="$(main.color)"  value="#34BD5C"/>
*/

/*-- Reset CSS --*/
a,abbr,acronym,address,applet,b,big,blockquote,body,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,form,h1,h2,h3,h4,h5,h6,html,i,iframe,img,ins,kbd,label,legend,li,object,p,pre,q,s,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,u,ul,var{padding:0;border:0;outline:0;vertical-align:baseline;background:0 0;text-decoration:none}form,textarea,input,button{-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:0}dl,ul{list-style-position:inside;font-weight:400;list-style:none}ul li{list-style:none}caption,th{text-align:center}img{border:none;position:relative}a,a:visited{text-decoration:none}.clearfix{clear:both}.section,.widget,.widget ul{margin:0;padding:0}a{color:$(body.link.color)}a img{border:0}abbr{text-decoration:none}.CSS_LIGHTBOX{z-index:999999!important}.separator a{clear:none!important;float:none!important;margin-left:0!important;margin-right:0!important}#navbar-iframe,.widget-item-control,a.quickedit,.home-link,.feed-links{display:none!important}.center{display:table;margin:0 auto;position:relative}.widget > h2,.widget > h3{display:none}::selection{color:#fff;background:$(main.color)}

/*-- Body Content CSS --*/
body{background:$(body.background);background-color:$(body.background.color);font-family:'Lato',sans-serif;font-size:14px;font-weight:400;color:$(body.text.color);word-wrap:break-word;margin:0;padding:0}
#outer-wrapper{margin:0 auto;background-color:#fff;box-shadow:0 0 5px rgba(0,0,0,.1)}
.row{width:1058px}
#content-wrapper{margin:30px auto 0;overflow:hidden}
#main-wrapper{float:left;overflow:hidden;width:calc(100% - 330px);box-sizing:border-box;word-wrap:break-word;padding:0;margin:0}
#sidebar-wrapper{float:right;overflow:hidden;width:300px;box-sizing:border-box;word-wrap:break-word;padding:0}
.post-image-wrap{position:relative;display:block}
.post-image-link,.comments .avatar-image-container{background-color:rgba(155,155,155,0.07);color:transparent!important}
.post-thumb{display:block;position:relative;width:100%;height:100%;object-fit:cover;z-index:1;transition:opacity .17s ease}
.post-image-link:hover .post-thumb,.post-image-wrap:hover .post-image-link .post-thumb,.hot-item-inner:hover .post-image-link .post-thumb{opacity:.9}
.post-title a{display:block}
.social a:before,.payment a:before{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400}
.social .blogger a:before{content:"\f37d"}
.social .facebook a:before{content:"\f09a"}
.social .twitter a:before{content:"\f099"}
.social .gplus a:before{content:"\f0d5"}
.social .rss a:before{content:"\f09e"}
.social .youtube a:before{content:"\f167"}
.social .skype a:before{content:"\f17e"}
.social .stumbleupon a:before{content:"\f1a4"}
.social .tumblr a:before{content:"\f173"}
.social .vk a:before{content:"\f189"}
.social .stack-overflow a:before{content:"\f16c"}
.social .github a:before{content:"\f09b"}
.social .linkedin a:before{content:"\f0e1"}
.social .dribbble a:before{content:"\f17d"}
.social .soundcloud a:before{content:"\f1be"}
.social .behance a:before{content:"\f1b4"}
.social .digg a:before{content:"\f1a6"}
.social .instagram a:before{content:"\f16d"}
.social .pinterest a:before{content:"\f0d2"}
.social .twitch a:before{content:"\f1e8"}
.social .delicious a:before{content:"\f1a5"}
.social .codepen a:before{content:"\f1cb"}
.social .reddit a:before{content:"\f1a1"}
.social .whatsapp a:before{content:"\f232"}
.social .snapchat a:before{content:"\f2ac"}
.social .email a:before{content:"\f0e0"}
.social .external-link a:before{content:"\f35d"}
.social-color .blogger a{background-color:#ff5722}
.social-color .facebook a{background-color:#3b5999}
.social-color .twitter a{background-color:#00acee}
.social-color .gplus a{background-color:#db4a39}
.social-color .youtube a{background-color:#f50000}
.social-color .instagram a{background:linear-gradient(15deg,#ffb13d,#dd277b,#4d5ed4)}
.social-color .pinterest a{background-color:#ca2127}
.social-color .dribbble a{background-color:#ea4c89}
.social-color .linkedin a{background-color:#0077b5}
.social-color .tumblr a{background-color:#365069}
.social-color .twitch a{background-color:#6441a5}
.social-color .rss a{background-color:#ffc200}
.social-color .skype a{background-color:#00aff0}
.social-color .stumbleupon a{background-color:#eb4823}
.social-color .vk a{background-color:#4a76a8}
.social-color .stack-overflow a{background-color:#f48024}
.social-color .github a{background-color:#24292e}
.social-color .soundcloud a{background:linear-gradient(#ff7400,#ff3400)}
.social-color .behance a{background-color:#191919}
.social-color .digg a{background-color:#1b1a19}
.social-color .delicious a{background-color:#0076e8}
.social-color .codepen a{background-color:#000}
.social-color .reddit a{background-color:#ff4500}
.social-color .whatsapp a{background-color:#3fbb50}
.social-color .snapchat a{background-color:#ffe700}
.social-color .email a{background-color:#888}
.social-color .external-link a{background-color:$(main.dark.color)}
.payment .visa a:before{content:"\f1f0"}
.payment .master a:before{content:"\f1f1"}
.payment .amex a:before{content:"\f1f3"}
.payment .diners a:before{content:"\f24c"}
.payment .discover a:before{content:"\f1f2"}
.payment .paypal a:before{content:"\f1f4"}
.payment .jcb a:before{content:"\f24b"}
#header-wrap{position:relative;margin:0}
.header-header{background-color:$(header.bg);width:100%;height:70px;position:relative;padding:0}
.header-header .container{position:relative;margin:0 auto;padding:0}
.header-logo{position:relative;float:left;width:auto;max-width:250px;max-height:40px;margin:0;padding:15px 0}
.header-logo .header-image-wrapper{display:block}
.header-logo img{max-width:100%;max-height:40px;margin:0}
.header-logo h1{color:$(header.color);font-size:20px;line-height:40px;margin:0}
.header-logo p{font-size:12px;margin:5px 0 0}
.header-right{position:relative;float:right;display:flex;flex-wrap:wrap;margin:18px 0 0}
#right-menu{float:right;margin:0 25px 0 0}
.right-menu ul li{float:left;margin:0 0 0 10px}
.right-menu ul li a{display:block;font-size:12px;color:$(header.color);line-height:34px;padding:0 5px;transition:opacity .17s ease}
.right-menu ul li a:hover{opacity:.7}
.header-menu{position:relative;float:left;width:100%;height:42px;background-color:$(menu.bg);z-index:10;font-size:13px;margin:0}
.header-menu .container{position:relative;margin:0 auto;padding:0}
#main-menu .widget,#main-menu .widget > .widget-title{display:none}
#main-menu .show-menu{display:block}
#main-menu{position:relative;height:42px;z-index:15}
#main-menu ul > li{float:left;position:relative;margin:0;padding:0;transition:background .17s}
#main-menu ul > li > a{position:relative;color:$(menu.color);font-size:14px;font-weight:700;line-height:42px;display:inline-block;margin:0;padding:0 13px;transition:color .17s ease}
#main-menu ul#main-menu-nav > li:first-child > a{padding:0 13px 0 0}
#main-menu ul#main-menu-nav > li > a{text-transform:uppercase}
#main-menu ul > li:hover > a{color:#fff}
#main-menu ul > li > ul{position:absolute;float:left;left:0;top:42px;width:180px;background-color:#fff;z-index:99999;margin:0;padding:0;border-bottom:2px solid $(menu.bg);box-shadow:0 3px 5px rgba(0,0,0,0.2);visibility:hidden;opacity:0}
#main-menu ul > li > ul > li > ul{position:absolute;float:left;top:0;left:100%;margin:0}
#main-menu ul > li > ul > li{display:block;float:none;position:relative;transition:all .17s ease}
#main-menu ul > li > ul > li a{display:block;height:36px;font-size:13px;color:$(title.color);font-weight:700;line-height:36px;box-sizing:border-box;margin:0;padding:0 15px;border-bottom:1px solid rgba(0,0,0,0.1);transition:all .17s ease}
#main-menu ul > li > ul > li:hover > a{color:$(main.color)}
#main-menu ul > li > ul > li:last-child a{border-bottom:0}
#main-menu ul > li.has-sub > a:after{content:'\f107';float:right;font-family:FontAwesome;font-size:14px;font-weight:400;margin:0 0 0 3px}
#main-menu ul > li > ul > li.has-sub > a:after{content:'\f105';float:right;margin:0}
#main-menu .mega-menu{position:static!important}
#main-menu .mega-menu > ul{width:100%;box-sizing:border-box;padding:20px 10px}
#main-menu .mega-menu > ul.mega-menu-inner{overflow:hidden}
#main-menu ul > li:hover > ul,#main-menu ul > li > ul > li:hover > ul{visibility:visible;opacity:1}
#main-menu ul ul{transition:all .17s ease}
.mega-menu-inner .mega-item{float:left;width:20%;box-sizing:border-box;padding:0 10px}
.mega-menu-inner .mega-content{position:relative;width:100%;overflow:hidden;padding:0}
.mega-content .post-image-wrap{width:100%;height:190px;overflow:hidden}
.mega-content .post-image-link{width:100%;height:100%;z-index:1;display:block;position:relative;overflow:hidden}
.mega-content .post-title{position:relative;font-size:14px;font-weight:700;text-transform:uppercase;margin:10px 0 5px}
.mega-content .post-title a{display:block;color:$(title.color);transition:color .17s}
.mega-content:hover .post-title a{color:$(title.hover)}
.meta-price{color:#aaa;font-size:12px;font-weight:700}
.no-posts{float:left;width:100%;height:100px;line-height:100px;text-align:center}
.mega-menu .no-posts{line-height:60px;color:$(title.color)}
.show-search,.hide-search{position:absolute;right:0;top:0;display:block;width:42px;height:42px;line-height:42px;z-index:20;color:$(menu.color);font-size:15px;text-align:right;cursor:pointer;transition:color .17s ease}
.show-search:before{content:"\f002";font-family:FontAwesome;font-weight:400}
.hide-search:before{content:"\f00d";font-family:FontAwesome;font-weight:400}
.show-search:hover,.hide-search:hover{color:#fff}
#nav-search{display:none;position:absolute;left:0;top:0;width:100%;height:42px;z-index:99;background-color:$(main.color);box-sizing:border-box;padding:0}
#nav-search .search-form{width:100%;height:42px;background-color:rgba(0,0,0,0);line-height:42px;overflow:hidden;padding:0}
#nav-search .search-input{width:100%;height:42px;font-family:inherit;color:$(menu.color);margin:0;padding:0 70px 0 0;background-color:rgba(0,0,0,0);font-size:14px;font-weight:400;box-sizing:border-box;border:0}
#nav-search .search-input:focus{color:$(menu.color);outline:none}
.slide-menu-toggle{display:none;position:absolute;line-height:42px;height:42px;width:42px;top:0;left:0;font-family:FontAwesome;color:#fff;font-size:17px;font-weight:400;text-align:left;cursor:pointer;z-index:4;padding:0}
.slide-menu-toggle:before{content:"\f0c9"}
.nav-active .slide-menu-toggle:before{content:"\f00d"}
.mobile-menu{display:none;position:absolute;top:42px;left:0;width:100%;background-color:$(main.dark.color);box-sizing:border-box;padding:20px;border-top:1px solid rgba(255,255,255,0.08);visibility:hidden;opacity:0;transform-origin:0 0;transform:scaleY(0);transition:all .17s ease}
.nav-active .mobile-menu{visibility:visible;opacity:1;transform:scaleY(1)}
.mobile-menu > ul{margin:0}
.mobile-menu .m-sub{display:none;padding:0}
.mobile-menu ul li{position:relative;display:block;overflow:hidden;float:left;width:100%;font-size:13px;font-weight:700;text-transform:uppercase;line-height:38px;margin:0;padding:0;border-top:1px solid rgba(255,255,255,0.15)}
.mobile-menu > ul li ul{overflow:hidden}
.mobile-menu > ul > li:first-child{border-top:0}
.mobile-menu ul li a{color:#fff;padding:0;display:block;transition:all .17s ease}
.mobile-menu ul li.has-sub .submenu-toggle{position:absolute;top:0;right:0;color:#fff;cursor:pointer}
.mobile-menu ul li.has-sub .submenu-toggle:after{content:'\f105';font-family:FontAwesome;font-weight:400;float:right;width:34px;font-size:16px;text-align:center;transition:all .17s ease}
.mobile-menu ul li.has-sub.show > .submenu-toggle:after{transform:rotate(90deg)}
.mobile-menu > ul > li > ul > li{border-color:rgba(255,255,255,0.05)}
.mobile-menu > ul > li > ul > li a{font-size:13px;text-transform:initial;font-weight:400}
.mobile-menu > ul > li > ul > li > a{color:#fff;opacity:.7;padding:0 0 0 15px}
.mobile-menu > ul > li > ul > li > ul > li{border-color:rgba(255,255,255,0.02)}
.mobile-menu > ul > li > ul > li > ul > li > a{color:#fff;opacity:.7;padding:0 0 0 30px}
.mobile-menu ul li a:hover,.mobile-menu ul > li > .submenu-toggle:hover{color:$(main.color)}
#hot-wrapper{margin:0 auto}
#hot-section .widget,#hot-section .widget > .widget-title{display:none}
#hot-section .show-hot{display:block!important}
#hot-section .show-hot .widget-content{position:relative;overflow:hidden;height:320px;margin:30px 0 0}
.hot-loader{position:relative;height:100%;overflow:hidden;display:block}
.hot-loader:after{content:'';position:absolute;top:50%;left:50%;width:26px;height:26px;margin:-15px 0 0 -15px;border:2px solid #ddd;border-left-color:$(main.color);border-top-color:$(main.color);border-radius:100%;animation:spinner .8s infinite linear;transform-origin:center}
@-webkit-keyframes spinner {
0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}
to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}
}
@keyframes spinner {
0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}
to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}
}
ul.hot-posts{position:relative;overflow:hidden;height:320px;margin:0 -15px}
.hot-posts .hot-item{position:relative;float:left;width:calc(100% / 4);height:320px;overflow:hidden;box-sizing:border-box;padding:0 15px}
.hot-item-inner{position:relative;float:left;width:100%;height:100%;overflow:hidden;display:block}
.hot-posts .post-image-link{width:100%;height:100%;position:relative;overflow:hidden;display:block}
.hot-posts .product-info{position:absolute;bottom:0;left:0;width:100%;background-image:linear-gradient(rgba(0,0,0,0),#000);overflow:hidden;z-index:5;box-sizing:border-box;padding:20px}
.hot-posts .post-title{display:block;font-size:14px;font-weight:700;text-transform:uppercase;line-height:1.5em;margin:5px 0}
.hot-posts .post-title a{color:#fff;display:block}
.hot-posts .meta-price{font-size:13px}
.show-hot .no-posts{position:absolute;top:calc(50% - 50px);left:0;width:100%}
.queryMessage{overflow:hidden;background-color:#fbfbfb;color:$(title.color);font-size:13px;font-weight:400;padding:8px 10px;margin:0 0 25px}
.queryMessage .query-info{margin:0 5px}
.queryMessage .search-query,.queryMessage .search-label{font-weight:700;text-transform:uppercase}
.queryMessage .search-query:before,.queryMessage .search-label:before{content:"\201c"}
.queryMessage .search-query:after,.queryMessage .search-label:after{content:"\201d"}
.queryMessage a.show-more{float:right;color:$(title.hover);text-decoration:underline;transition:opacity .17s}
.queryMessage a.show-more:hover{opacity:.8}
.queryEmpty{font-size:13px;font-weight:400;padding:10px 0;margin:0 0 25px;text-align:center}
.title-wrap{position:relative;float:left;width:100%;display:block;margin:0 0 20px;border-bottom:1px solid #ebebeb}
.title-wrap > h3{position:relative;float:left;font-size:14px;color:$(title.color);font-weight:700;text-transform:uppercase;padding:0 0 10px;margin:0}
.title-wrap > h3:after{position:absolute;content:'';background-color:$(main.color);width:55px;height:2px;bottom:-1px;left:0;margin:0}
.custom-widget li{overflow:hidden;padding:15px 0 0;margin:15px 0 0;border-top:1px dotted #ebebeb}
.custom-widget li:first-child{padding:0;margin:0;border:0}
.custom-widget .post-image-link{position:relative;width:70px;height:75px;float:left;overflow:hidden;display:block;vertical-align:middle;margin:0 12px 0 0}
.custom-widget .product-info{overflow:hidden}
.custom-widget .post-title{overflow:hidden;font-size:14px;font-weight:700;text-transform:uppercase;margin:0 0 5px}
.custom-widget .post-title a{display:block;color:$(title.color);transition:color .17s}
.custom-widget li:hover .post-title a{color:$(title.hover)}
.home-ad .widget > .widget-title{display:none}
.home-ad .widget{width:728px;max-width:100%;margin:0 auto}
.home-ad .widget .widget-content{position:relative;width:100%;max-height:initial;overflow:hidden;line-height:1;margin:0 0 30px}
.index-post-wrap{position:relative;float:left;width:100%}
.blog-post{display:block;overflow:hidden;word-wrap:break-word}
.grid-posts{display:flex;flex-wrap:wrap;margin:0 -15px}
.index-post{display:block;width:calc(100% / 3);box-sizing:border-box;padding:0 15px;margin:0 0 30px}
.index-post .post-image-wrap{float:left;width:100%;height:230px;overflow:hidden;margin:0 0 10px}
.index-post .post-image-wrap .post-image-link{width:100%;height:100%;position:relative;display:block;z-index:1;overflow:hidden}
.index-post .product-info{float:left;width:100%;overflow:hidden}
.index-post .product-info > h2{font-size:14px;font-weight:700;text-transform:uppercase;text-decoration:none;margin:0 0 8px}
.index-post .product-info > h2 > a{display:block;color:$(title.color);transition:color .17s}
.index-post:hover .product-info > h2 > a{color:$(title.hover)}
.index-post .item_price{margin:0 0 10px;display:none}
.index-post .item_price.show{display:block}
.index-post .meta-price{font-size:13px}
.index-post .item_add{display:block;background-color:$(main.dark.color);height:30px;font-size:14px;color:#fff;font-weight:700;line-height:30px;text-align:center;margin:0;transition:background .17s ease}
.index-post .item_add i{margin:0 5px 0 0}
.index-post .item_add:hover,.item_add.productad{background-color:$(main.color)}
.item_add .product_added,.item_add.productad .add_product{display:none}
.item_add.productad .product_added{display:block}
.product_off{position:absolute;top:15px;left:15px;height:30px;background-color:#f50000;font-size:14px;color:#fff;font-weight:700;text-align:center;line-height:30px;z-index:2;padding:0 10px}
.index-post .product_off,.FeaturedPost .product_off,.product-header .product_off{visibility:hidden;opacity:0;transition:all .17s ease}
.index-post .product_off.show,.FeaturedPost .product_off.show,.product-header .product_off.show{visibility:visible;opacity:1}
.widget iframe,.widget img{max-width:100%}
.date-header{display:block;overflow:hidden;font-weight:400;margin:0!important;padding:0}
#breadcrumb{font-size:12px;font-weight:400;color:#aaa;text-transform:capitalize;margin:0 0 15px}
#breadcrumb a{color:#aaa;transition:color .17s}
#breadcrumb a:hover{color:$(title.hover)}
#breadcrumb a,#breadcrumb em{display:inline-block}
#breadcrumb .delimiter:after{content:'\f054';font-family:FontAwesome;font-size:8px;font-weight:400;font-style:normal;vertical-align:middle;margin:0 3px}
.product-header{position:relative;float:left;width:100%;background-color:#fbfbfb;box-sizing:border-box;padding:15px;margin:0 0 30px}
.col-left{position:relative;float:left;width:250px}
.col-left .post-image-wrap{position:relative;width:100%;height:auto}
.col-right{position:relative;float:right;width:calc(100% - 265px)}
.product-post .post-body img{display:none}
.product-post h1.post-title{position:relative;display:block;font-size:18px;color:$(title.color);line-height:1.5em;font-weight:700;text-transform:uppercase;margin:10px 0 20px;padding:0 0 10px;border-bottom:1px solid #ebebeb}
.product-post h1.post-title:after{position:absolute;content:'';background-color:$(main.color);width:55px;height:2px;bottom:-1px;left:0;margin:0}
.static_page .item-post h1.post-title{position:relative;display:block;font-size:18px;color:$(title.color);line-height:1.5em;font-weight:700;text-transform:uppercase;margin:0 0 20px;padding:0 0 10px;border-bottom:1px solid #ebebeb}
.static_page .item-post h1.post-title:after{position:absolute;content:'';background-color:$(main.color);width:55px;height:2px;bottom:-1px;left:0;margin:0}
.col-right .item_price{display:none;margin:0 0 10px}
.col-right .item_price.show{display:block}
.col-right .item_price b{font-size:16px;color:$(title.color);font-weight:700;margin:0 5px 0 0}
.col-right .meta-price{font-size:16px}
.sora-product-buy-buttons{display:block;overflow:hidden;margin:0 0 30px}
.sora-product-buy-buttons a{float:left;background-color:$(main.dark.color);height:30px;font-size:14px;color:#fff;font-weight:700;line-height:30px;text-align:center;padding:0 15px;margin:10px 10px 0 0;transition:background .17s ease}
.sora-product-buy-buttons a i{margin:0 5px 0 0}
.sora-product-buy-buttons a:hover{background-color:$(main.color)}
.product-post .post-content{position:relative;float:left;widht:100%;margin:0}
.item-post .post-body{float:left;width:100%;font-size:15px;line-height:1.5em;overflow:hidden;box-sizing:border-box;padding:0;margin:0 0 30px}
.item-post .post-outer{padding:0}
.item-post .post-body img{max-width:100%}
.main .widget{margin:0}
.main .Blog{border-bottom-width:0}
.post-footer{position:relative;float:left;width:100%;margin:0}
.inline-ad{position:relative;display:block;max-height:60px;margin:0 0 30px}
.inline-ad > ins{display:block!important;margin:0 auto!important}
.item .inline-ad{float:left;width:100%;margin:20px 0 0}
.item-post-wrap > .inline-ad{margin:0 0 20px}
.post-labels{overflow:hidden;height:auto;position:relative;margin:0 0 30px;padding:0}
.post-labels span,.post-labels a{float:left;color:$(title.color);font-size:14px;font-weight:400;margin:0 4px 0 0;padding:0}
.post-labels span{font-weight:700}
.post-labels a{transition:color .17s ease}
.post-labels a:after{content:','}
.post-labels a:last-child:after{display:none}
.post-labels a:hover{color:$(title.hover);text-decoration:underline}
.post-share{position:relative;overflow:hidden;margin:0}
.share-title{position:relative;display:block;font-size:14px;color:$(title.color);text-transform:uppercase;font-weight:700;margin:0 0 10px}
ul.share-links{position:relative}
.share-links li{float:left;box-sizing:border-box;margin:0 5px 0 0}
.share-links li a{float:left;display:inline-block;cursor:pointer;width:30px;height:30px;line-height:30px;color:#fff;font-weight:400;font-size:13px;text-align:center;box-sizing:border-box;opacity:1;transition:all .17s ease}
.share-links li a:hover{opacity:.8}
ul.post-nav{position:relative;overflow:hidden;display:block;margin:0 0 30px}
.post-nav li{display:inline-block;width:50%}
.post-nav .post-prev{float:left;text-align:left;box-sizing:border-box;padding:0 10px}
.post-nav .post-next{float:right;text-align:right;box-sizing:border-box;padding:0 10px}
.post-nav li a{color:$(title.color);line-height:1.4em;display:block;overflow:hidden;transition:color .17s}
.post-nav li:hover a{color:$(title.hover)}
.post-nav li span{display:block;font-size:11px;color:#aaa;font-weight:700;text-transform:uppercase;padding:0 0 2px}
.post-nav .post-prev span:before{content:"\f053";float:left;font-family:FontAwesome;font-size:10px;font-weight:400;text-transform:none;margin:0 2px 0 0}
.post-nav .post-next span:after{content:"\f054";float:right;font-family:FontAwesome;font-size:10px;font-weight:400;text-transform:none;margin:0 0 0 2px}
.post-nav p{font-size:12px;font-weight:400;line-height:1.4em;margin:0}
.post-nav .post-nav-active p{color:#aaa}
#related-wrap{overflow:hidden;margin:0 0 30px}
#related-wrap .related-tag{display:none}
.related-ready{float:left;width:100%}
.related-ready .loader{height:178px}
ul.related-posts{position:relative;overflow:hidden;margin:0 -15px;padding:0}
.related-posts .related-item{width:calc(100% / 3);position:relative;overflow:hidden;float:left;display:block;box-sizing:border-box;padding:0 15px;margin:0}
.related-posts .post-image-link{width:100%;height:230px;position:relative;overflow:hidden;display:block}
.related-posts .post-title{display:block;font-size:14px;font-weight:700;text-transform:uppercase;margin:10px 0 5px}
.related-posts .post-title a{color:$(title.color);transition:color .17s}
.related-posts .related-item:hover .post-title a{color:$(title.hover)}
.related-posts .meta-price{font-size:13px}
#blog-pager{float:left;width:100%;overflow:hidden;clear:both;margin:0 0 30px}
.blog-pager a,.blog-pager span{float:left;display:block;min-width:30px;height:30px;background-color:#fff;color:$(title.color);font-size:13px;font-weight:700;line-height:30px;text-align:center;box-sizing:border-box;padding:0 10px;margin:0 5px 0 0;border:1px solid #ebebeb;transition:all .17s ease}
.blog-pager span.page-dots{min-width:20px;background-color:#fff;font-size:16px;color:$(body.text.color);font-weight:400;line-height:32px;padding:0;border:0}
.blog-pager .page-of{display:none}
.blog-pager .page-active,.blog-pager a:hover{background-color:$(main.dark.color);color:#fff;border-color:$(main.dark.color)}
.blog-pager .page-prev:before,.blog-pager .page-next:before{font-family:FontAwesome;font-size:11px;font-weight:400}
.blog-pager .page-prev:before{content:'\f053'}
.blog-pager .page-next:before{content:'\f054'}
.blog-pager .blog-pager-newer-link,.blog-pager .blog-pager-older-link{float:left;display:inline-block;width:auto;padding:0 10px;margin:0}
.blog-pager .blog-pager-older-link{float:right}
.archive #blog-pager,.home .blog-pager .blog-pager-newer-link,.home .blog-pager .blog-pager-older-link{display:none}
.blog-post-comments{display:none}
.blog-post-comments .comments-title{margin:0 0 20px}
.comments-system-disqus .comments-title,.comments-system-facebook .comments-title{margin:0}
#comments{margin:0}
#gpluscomments{float:left!important;width:100%!important;margin:0 0 25px!important}
#gpluscomments iframe{float:left!important;width:100%}
.comments-system-disqus,.comments-system-facebook{margin:0 0 20px}
.comments{display:block;clear:both;margin:0;color:$(title.color)}
.comments .comment-thread > ol{padding:0}
.comments > h3{font-size:14px;font-weight:400;font-style:italic;margin:0 0 10px}
.comments .comments-content .comment{list-style:none;margin:0;padding:0 0 8px}
.comments .comments-content .comment:first-child{padding-top:0}
.facebook-tab,.fb_iframe_widget_fluid span,.fb_iframe_widget iframe{width:100%!important}
.comments .item-control{position:static}
.comments .avatar-image-container{float:left;overflow:hidden;position:absolute}
.comments .avatar-image-container,.comments .avatar-image-container img{height:35px;max-height:35px;width:35px;max-width:35px;border-radius:100%}
.comments .comment-block{overflow:hidden;padding:0 0 10px}
.comments .comment-block,.comments .comments-content .comment-replies{margin:0 0 0 50px}
.comments .comments-content .inline-thread{padding:0}
.comments .comment-actions{float:left;width:100%;position:relative;margin:0}
.comments .comments-content .comment-header{font-size:15px;display:block;overflow:hidden;clear:both;margin:0 0 3px;padding:0 0 5px;border-bottom:1px dashed #d6d6d6}
.comments .comments-content .comment-header a{color:$(title.color);transition:color .17s}
.comments .comments-content .comment-header a:hover{color:$(title.hover)}
.comments .comments-content .user{font-style:normal;font-weight:700;display:block}
.comments .comments-content .icon.blog-author{display:none}
.comments .comments-content .comment-content{float:left;font-size:13px;color:#5E5E5E;font-weight:400;text-align:left;line-height:1.4em;margin:5px 0 9px}
.comments .comment .comment-actions a{margin-right:5px;padding:2px 5px;color:$(title.color);font-weight:400;background-color:#f2f2f2;font-size:10px;transition:all .17s ease}
.comments .comment .comment-actions a:hover{color:#fff;background-color:$(main.color);border-color:$(main.color);text-decoration:none}
.comments .comments-content .datetime{float:left;font-size:11px;font-weight:400;color:#aaa;position:relative;padding:0 1px;margin:4px 0 0;display:block}
.comments .comments-content .datetime a,.comments .comments-content .datetime a:hover{color:#aaa}
.comments .thread-toggle{margin-bottom:4px}
.comments .thread-toggle .thread-arrow{height:7px;margin:0 3px 2px 0}
.comments .thread-count a,.comments .continue a{transition:opacity .17s}
.comments .thread-count a:hover,.comments .continue a:hover{opacity:.8}
.comments .thread-expanded{padding:5px 0 0}
.comments .thread-chrome.thread-collapsed{display:none}
.thread-arrow:before{content:'';font-family:FontAwesome;color:$(title.color);font-weight:400;margin:0 2px 0 0}
.comments .thread-expanded .thread-arrow:before{content:'\f0d7'}
.comments .thread-collapsed .thread-arrow:before{content:'\f0da'}
.comments .comments-content .comment-thread{margin:0}
.comments .continue a{padding:0 0 0 60px;font-weight:400}
.comments .comments-content .loadmore.loaded{margin:0;padding:0}
.comments .comment-replybox-thread{margin:0}
.comments .comments-content .loadmore,.comments .comments-content .loadmore.loaded{display:none}
#comment-editor{margin:0 0 20px}
.post-body h1,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{color:$(title.color);font-weight:700;margin:0 0 15px}
.post-body h1,.post-body h2{font-size:24px}
.post-body h3{font-size:21px}
.post-body h4{font-size:18px}
.post-body h5{font-size:16px}
.post-body h6{font-size:13px}
blockquote{font-style:italic;padding:10px;margin:0;border-left:4px solid $(main.color)}
blockquote:before,blockquote:after{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;color:#aaa;line-height:1}
blockquote:before{content:'\f10d';margin:0 10px 0 0}
blockquote:after{content:'\f10e';margin:0 0 0 10px}
.widget .post-body ul,.widget .post-body ol{line-height:1.5;font-weight:400}
.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}
.post-body ul{padding:0 0 0 20px}
.post-body ul li:before{content:"\f105";font-family:FontAwesome;font-size:13px;font-weight:400;margin:0 5px 0 0}
.post-body u{text-decoration:underline}
.post-body a{transition:color .17s ease}
.post-body strike{text-decoration:line-through}
.contact-form{overflow:hidden}
.contact-form .widget-title{display:none}
.contact-form .contact-form-name{width:calc(50% - 5px)}
.contact-form .contact-form-email{width:calc(50% - 5px);float:right}
.sidebar .widget{position:relative;overflow:hidden;background-color:#fbfbfb;box-sizing:border-box;padding:0;margin:0 0 30px}
.sidebar .widget-title{position:relative;float:left;width:100%;height:30px;background-color:$(main.dark.color);display:block;margin:0}
.sidebar .widget-title > h3{position:relative;float:left;height:30px;font-size:12px;color:#fff;font-weight:700;line-height:30px;text-transform:uppercase;padding:0 15px;margin:0}
.sidebar .widget-content{float:left;width:100%;box-sizing:border-box;padding:15px;margin:0}
ul.social-counter{margin:0 -5px}
.social-counter li{float:left;width:25%;box-sizing:border-box;padding:0 5px;margin:10px 0 0}
.social-counter li:nth-child(1),.social-counter li:nth-child(2),.social-counter li:nth-child(3),.social-counter li:nth-child(4){margin-top:0}
.social-counter li a{display:block;height:40px;font-size:22px;color:#fff;text-align:center;line-height:40px;transition:opacity .17s}
.social-counter li a:hover{opacity:.8}
.list-label li{position:relative;display:block;padding:7px 0;border-top:1px dotted #ebebeb}
.list-label li:first-child{padding-top:0;border-top:0}
.list-label li:last-child{padding-bottom:0;border-bottom:0}
.list-label li a{display:block;color:$(title.color);font-size:12px;font-weight:400;text-transform:capitalize;transition:color .17s}
.list-label li a:before{content:"\f054";float:left;color:$(title.color);font-weight:400;font-family:FontAwesome;font-size:6px;margin:5px 3px 0 0;transition:color .17s}
.list-label li a:hover{color:$(title.hover)}
.list-label .label-count{position:relative;float:right;width:16px;height:16px;background-color:$(main.color);color:#fff;font-size:11px;font-weight:400;text-align:center;line-height:16px}
.cloud-label li{position:relative;float:left;margin:0 5px 5px 0}
.cloud-label li a{display:block;height:26px;background-color:#f2f2f2;color:$(title.color);font-size:12px;line-height:26px;font-weight:400;padding:0 10px;transition:all .17s ease}
.cloud-label li a:hover{color:#fff;background-color:$(main.color)}
.cloud-label .label-count{display:none}
.FollowByEmail .widget-content{position:relative;overflow:hidden}
.FollowByEmail .before-text{font-size:13px;line-height:1.5em;margin:0 0 15px;display:block;padding:0 30px 0 1px;overflow:hidden}
.FollowByEmail .widget-content:after{content:'\f0e0';position:absolute;top:-20px;right:-20px;font-family:FontAwesome;font-size:50px;color:#f0f0f0;transform:rotate(21deg)}
.FollowByEmail .follow-by-email-inner{position:relative}
.FollowByEmail .follow-by-email-inner .follow-by-email-address{width:100%;height:32px;color:$(title.color);font-size:11px;font-family:inherit;padding:0 10px;margin:0 0 10px;box-sizing:border-box;border:1px solid #f0f0f0;transition:all .17s ease}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit{width:100%;height:32px;font-family:inherit;font-size:11px;color:#fff;background-color:$(main.color);text-transform:uppercase;text-align:center;font-weight:700;cursor:pointer;margin:0;border:0;transition:background .17s ease}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover{background-color:$(main.dark.color)}
#ArchiveList ul.flat li{color:$(title.color);font-size:13px;font-weight:400;padding:7px 0;border-bottom:1px dotted #eaeaea}
#ArchiveList ul.flat li:first-child{padding-top:0}
#ArchiveList ul.flat li:last-child{padding-bottom:0;border-bottom:0}
#ArchiveList .flat li > a{display:block;color:$(title.color);transition:color .17s}
#ArchiveList .flat li > a:hover{color:$(title.hover)}
#ArchiveList .flat li > a:before{content:"\f054";float:left;color:#161619;font-weight:400;font-family:FontAwesome;font-size:6px;margin:5px 4px 0 0;display:inline-block;transition:color .17s}
#ArchiveList .flat li > a > span{position:relative;float:right;width:16px;height:16px;background-color:$(main.color);color:#fff;font-size:11px;font-weight:400;text-align:center;line-height:16px}
.PopularPosts .post{overflow:hidden;padding:15px 0 0;margin:15px 0 0;border-top:1px dotted #ebebeb}
.PopularPosts .post:first-child{padding:0;margin:0;border:0}
.PopularPosts .post-image-link{position:relative;width:70px;height:75px;float:left;overflow:hidden;display:block;vertical-align:middle;margin:0 12px 0 0}
.PopularPosts .product-info{overflow:hidden}
.PopularPosts .post-title{font-size:14px;font-weight:700;text-transform:uppercase;margin:0 0 5px}
.PopularPosts .post-title a{display:block;color:$(title.color);transition:color .17s}
.PopularPosts .post:hover .post-title a{color:$(title.hover)}
.FeaturedPost .post-image-link{display:block;position:relative;width:100%;height:300px;overflow:hidden;margin:0}
.FeaturedPost .post-title{font-size:14px;overflow:hidden;font-weight:700;text-transform:uppercase;margin:10px 0 5px}
.FeaturedPost .post-title a{color:$(title.color);display:block;transition:color .17s ease}
.FeaturedPost .post:hover .post-title a{color:$(title.hover)}
.FeaturedPost .meta-price{font-size:13px}
.Text{font-size:13px}
.contact-form-widget form{font-weight:400}
.contact-form-name{float:left;width:100%;height:30px;font-family:inherit;font-size:13px;line-height:30px;box-sizing:border-box;padding:5px 10px;margin:0 0 10px;border:1px solid #ebebeb}
.contact-form-email{float:left;width:100%;height:30px;font-family:inherit;font-size:13px;line-height:30px;box-sizing:border-box;padding:5px 10px;margin:0 0 10px;border:1px solid #ebebeb}
.contact-form-email-message{float:left;width:100%;font-family:inherit;font-size:13px;box-sizing:border-box;padding:5px 10px;margin:0 0 10px;border:1px solid #ebebeb}
.contact-form-button-submit{float:left;width:100%;height:30px;background-color:$(main.color);font-size:13px;color:#fff;line-height:30px;cursor:pointer;box-sizing:border-box;padding:0 10px;margin:0;border:0;transition:background .17s ease}
.contact-form-button-submit:hover{background-color:$(main.dark.color)}
.contact-form-error-message-with-border{float:left;width:100%;background-color:#fbe5e5;font-size:11px;text-align:center;line-height:11px;padding:3px 0;margin:10px 0;box-sizing:border-box;border:1px solid #fc6262}
.contact-form-success-message-with-border{float:left;width:100%;background-color:#eaf6ff;font-size:11px;text-align:center;line-height:11px;padding:3px 0;margin:10px 0;box-sizing:border-box;border:1px solid #5ab6f9}
.contact-form-cross{margin:0 0 0 3px}
.contact-form-error-message,.contact-form-success-message{margin:0}
.BlogSearch .search-input{float:left;width:75%;height:30px;background-color:#fff;font-weight:400;font-size:13px;line-height:30px;box-sizing:border-box;padding:5px 10px;border:1px solid #ebebeb;border-right-width:0;border-radius:2px 0 0 2px}
.BlogSearch .search-action{float:right;width:25%;height:30px;font-family:inherit;font-size:13px;line-height:30px;cursor:pointer;box-sizing:border-box;background-color:$(main.color);color:#fff;padding:0 5px;border:0;border-radius:0 2px 2px 0;transition:background .17s ease}
.BlogSearch .search-action:hover{background-color:$(main.dark.color)}
.Profile .profile-img{float:left;width:80px;height:80px;margin:0 15px 0 0;transition:all .17s ease}
.Profile .profile-datablock{margin:0}
.Profile .profile-data .g-profile{display:block;font-size:18px;color:$(title.color);font-weight:700;margin:0 0 5px;transition:color .17s ease}
.Profile .profile-data .g-profile:hover{color:$(title.hover)}
.Profile .profile-info > .profile-link{color:$(title.color);font-size:11px;margin:5px 0 0;transition:color .17s ease}
.Profile .profile-info > .profile-link:hover{color:$(title.hover)}
.Profile .profile-datablock .profile-textblock{display:none}
.common-widget .LinkList ul li,.common-widget .PageList ul li{width:calc(50% - 5px);padding:7px 0 0}
.common-widget .LinkList ul li:nth-child(odd),.common-widget .PageList ul li:nth-child(odd){float:left}
.common-widget .LinkList ul li:nth-child(even),.common-widget .PageList ul li:nth-child(even){float:right}
.common-widget .LinkList ul li a,.common-widget .PageList ul li a{display:block;color:$(title.color);font-size:13px;font-weight:400;transition:color .17s ease}
.common-widget .LinkList ul li a:hover,.common-widget .PageList ul li a:hover{color:$(title.hover)}
.common-widget .LinkList ul li:first-child,.common-widget .LinkList ul li:nth-child(2),.common-widget .PageList ul li:first-child,.common-widget .PageList ul li:nth-child(2){padding:0}
#footer-wrapper{background-color:$(main.dark.color)}
#footer-wrapper .container{position:relative;overflow:hidden;margin:0 auto;padding:25px 0}
.footer-widgets-wrap{position:relative;display:flex;margin:0 -15px}
#footer-wrapper .footer{display:inline-block;float:left;width:33.33333333%;box-sizing:border-box;padding:0 15px}
#footer-wrapper .footer .widget{float:left;width:100%;padding:0;margin:25px 0 0}
#footer-wrapper .footer .Text{margin:10px 0 0}
#footer-wrapper .footer .widget:first-child{margin:0}
.footer .widget > .widget-title > h3{position:relative;color:$(footer.color);font-size:12px;line-height:12px;font-weight:700;text-transform:uppercase;margin:0 0 20px;padding-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.05)}
.footer .widget > .widget-title > h3:before{position:absolute;content:'';background-color:$(main.color);width:35px;height:2px;bottom:-1px;left:0}
.footer .post-image-link{background-color:rgba(255,255,255,0.05)}
.footer .custom-widget .post-title a,.footer .PopularPosts .post-title a,.footer .FeaturedPost .post-title a,.footer .LinkList ul li a,.footer .PageList ul li a,.footer .Profile .profile-data .g-profile,.footer .Profile .profile-info > .profile-link{color:$(footer.color)}
.footer .custom-widget .post-title a:hover,.footer .PopularPosts .post-title a:hover,.footer .FeaturedPost .post-title a:hover,.footer .LinkList ul li a:hover,.footer .PageList ul li a:hover,.footer .Profile .profile-data .g-profile:hover,.footer .Profile .profile-info > .profile-link:hover{color:$(title.hover)}
.footer .no-posts{color:$(footer.color)}
.footer .FollowByEmail .before-text,#footer-wrapper .footer .Text{color:#aaa}
.footer .FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover{background:$(main.dark.color)}
.footer .FollowByEmail .follow-by-email-inner .follow-by-email-address{background-color:rgba(255,255,255,0.05);color:$(footer.color);border-color:rgba(255,255,255,0.05)}
.footer .FollowByEmail .widget-content:after{display:none}
.footer #ArchiveList .flat li > a{color:$(footer.color)}
.footer .custom-widget li,.footer .PopularPosts .post,.footer .list-label li,.footer .BlogArchive #ArchiveList ul.flat li{border-color:rgba(255,255,255,0.05)}
.footer .list-label li:first-child{padding-top:0}
.footer .list-label li a,.footer .list-label li a:before,.footer #ArchiveList .flat li > a,.footer #ArchiveList .flat li > a:before{color:$(footer.color)}
.footer .list-label li > a:hover,.footer #ArchiveList .flat li > a:hover{color:$(title.hover)}
.footer .list-label .label-count,.footer #ArchiveList .flat li > a > span{background-color:rgba(255,255,255,0.05);color:$(footer.color)}
.footer .cloud-label li a{background-color:rgba(255,255,255,0.05);color:$(footer.color)}
.footer .cloud-label li a:hover{background-color:$(main.color);color:#fff}
.footer .BlogSearch .search-input{background-color:rgba(255,255,255,0.05);color:$(footer.color);border-color:rgba(255,255,255,0.05)}
.footer .contact-form-name,.footer .contact-form-email,.footer .contact-form-email-message{background-color:rgba(255,255,255,0.05);color:$(footer.color);border-color:rgba(255,255,255,0.05)}
.footer .BlogSearch .search-action:hover,.footer .FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover,.footer .contact-form-button-submit:hover{background-color:rgba(0,0,0,0.3)}
#sub-footer-wrapper{color:$(footer.color);display:block;padding:0;width:100%;overflow:hidden;border-top:1px solid rgba(255,255,255,0.05)}
#sub-footer-wrapper .container{overflow:hidden;margin:0 auto;padding:10px 0}
#footer-payments{float:right;position:relative;display:block}
#footer-payments .widget > .widget-title{display:none}
#footer-payments ul li{float:left;display:inline-block;height:34px;padding:0;margin:0}
#footer-payments ul li a{font-size:19px;font-weight:400;display:block;color:$(footer.color);line-height:34px;padding:0 5px;margin:0 0 0 5px;transition:opacity .17s ease}
#footer-payments ul li:last-child a{padding:0 0 0 5px}
#footer-payments ul li a:hover{opacity:.8}
#sub-footer-wrapper .copyright-area{font-size:12px;float:left;height:34px;line-height:34px;font-weight:400}
#sub-footer-wrapper .copyright-area a{color:$(main.color);transition:color .17s}
.hidden-widgets{display:none;visibility:hidden}
.back-top{display:none;z-index:1010;width:32px;height:32px;position:fixed;bottom:25px;right:25px;cursor:pointer;overflow:hidden;font-size:13px;color:#fff;text-align:center;line-height:32px}
.back-top:before{content:'';position:absolute;top:0;left:0;right:0;bottom:0;background-color:$(main.color);opacity:.5;transition:opacity .17s ease}
.back-top:after{content:'\f077';position:relative;font-family:FontAwesome;font-weight:400;opacity:.8;transition:opacity .17s ease}
.back-top:hover:before,.back-top:hover:after,.nav-active .back-top:after,.nav-active .back-top:before{opacity:1}
.error404 #main-wrapper{width:100%!important;margin:0!important}
.error404 #sidebar-wrapper{display:none}
.errorWrap{color:$(title.color);text-align:center;padding:80px 0 100px}
.errorWrap h3{font-size:160px;line-height:1;margin:0 0 30px}
.errorWrap h4{font-size:25px;margin:0 0 20px}
.errorWrap p{margin:0 0 10px}
.errorWrap a{display:block;color:$(main.color);padding:10px 0 0}
.errorWrap a i{font-size:20px}
.errorWrap a:hover{text-decoration:underline}
.sora-cart{position:relative;float:right;height:34px;z-index:100;margin:0}
.sora-cart-details{height:34px;cursor:pointer}
.sora-cart-details:after{float:left;content:'\f290';font-family:FontAwesome;width:34px;height:34px;background-color:rgba(155,155,155,0.2);font-size:16px;color:$(header.color);line-height:34px;text-align:center;font-weight:400;margin:0}
.sora-cart .simpleCart_quantity{float:right;width:34px;height:34px;background-color:$(menu.bg);font-size:14px;color:$(menu.color);font-weight:700;line-height:34px;text-align:center;margin:0}
.sora-cart-description{position:absolute;right:0;top:34px;width:250px;background-color:#fff;padding:15px;border-bottom:2px solid $(menu.bg);box-shadow:0 3px 5px rgba(0,0,0,0.2);visibility:hidden;opacity:0;transition:all .17s ease}
.sora-cart:hover .sora-cart-description{visibility:visible;opacity:1}
.sora-cart-description .headerRow{display:none}
.sora-cart-description .itemRow{position:relative;display:block;overflow:hidden;background-color:#fff;color:$(title.color);padding:0 20px 15px 0;margin:0 0 15px;border-bottom:1px solid rgba(0,0,0,0.1)}
.sora-cart-description .itemRow:last-child{margin:0 0 10px}
.sora-cart-description .item-thumb{float:left;width:70px;margin-right:10px}
.sora-cart-description .item-thumb img{width:100%;vertical-align:middle;object-fit:cover}
.sora-cart-description .item-name{display:block;font-size:14px;color:$(title.color);font-weight:700;text-transform:uppercase;margin:0 0 10px}
.sora-cart-description .item-price{font-size:13px;color:#aaa;font-weight:700;margin:0 0 10px}
.sora-cart-description .item-decrement,.sora-cart-description .item-increment{width:16px;float:left;text-align:center}
.sora-cart-description .item-decrement,.sora-cart-description .item-quantity{float:left;margin-right:5px}
.sora-cart-description .item-decrement a,.sora-cart-description .item-increment a{display:block;width:16px;height:16px;background-color:$(main.dark.color);font-size:8px;color:#fff;text-align:center;line-height:16px;text-decoration:none;transition:background .17s ease}
.sora-cart-description .item-decrement a:hover,.sora-cart-description .item-increment a:hover{background-color:$(main.color)}
.sora-cart-description .item-quantity{font-size:14px;color:$(main.color);font-weight:700;margin:0 10px 0 5px}
.sora-cart-description .item-total{font-size:14px;color:#f50000;font-weight:700;margin:0}
.sora-cart-description .item-increment{margin-right:5px}
.sora-cart-description .item-remove{position:absolute;top:0;right:0}
.sora-cart-description .item-remove a{float:left;width:16px;height:16px;background-color:$(main.dark.color);font-size:11px;color:#fff;line-height:14px;text-align:center;transition:background .17s ease}
.sora-cart-description .item-remove a:hover{background-color:$(main.color)}
.sora-cart-buttons{text-align:center;display:block;clear:both}
.sora-cart-description .simpleCart_empty,.sora-cart-description .simpleCart_checkout{float:left;width:calc(50% - 5px);height:26px;background-color:#111;font-size:14px;color:#fff;font-weight:700;text-transform:capitalize;white-space:nowrap;line-height:26px;margin:10px 0 0;transition:background .17s ease}
.sora-cart-description .simpleCart_checkout{float:right}
.sora-cart-description .simpleCart_empty:hover,.sora-cart-description .simpleCart_checkout:hover{background-color:$(main.color)}
.sora-cart-description .simpleCart_empty:before,.sora-cart-description .simpleCart_checkout:before{content:'\f00d';font-family:FontAwesome;font-weight:400;margin-right:5px}
.sora-cart-description .simpleCart_checkout:before{content:'\f09d'}
.sora-cart-buttons-wrap .sora-cart-ammount{clear:both;font-size:14px;font-weight:700;text-transform:uppercase;margin:0}
.sora-cart-buttons-wrap .sora-cart-ammount .sora-cart-subtotal{float:left;color:$(title.color)}
.sora-cart-buttons-wrap .sora-cart-ammount .simpleCart_total{float:right;color:#f50000}
.sora-cart-review{position:relative;float:left;width:100%;background-color:#fbfbfb;box-sizing:border-box;padding:15px}
.post-custom-title .custom-title h2{color:$(title.color);font-size:21px;margin:0 0 10px}
.sora-cart-review-wrap{padding:0;box-sizing:border-box;display:flex;flex-wrap:wrap}
.sora-cart-review-wrap .itemRow{position:relative;display:block;margin-bottom:15px;overflow:hidden;border:1px solid #ebebeb;background-color:#fff;color:$(title.color);line-height:14px;padding:10px}
.sora-cart-review-wrap .item-thumb{float:left;width:70px;margin-right:10px}
.sora-cart-review-wrap .item-thumb img{width:100%;vertical-align:middle;object-fit:cover}
.sora-cart-review-wrap .item-name{display:block;font-size:14px;color:$(title.color);font-weight:700;text-transform:uppercase;margin:0 0 10px}
.sora-cart-review-wrap .item-price{font-size:13px;color:#aaa;font-weight:700;margin:0 0 10px}
.sora-cart-review-wrap .item-decrement,.sora-cart-review-wrap .item-increment{width:16px;float:left;text-align:center}
.sora-cart-review-wrap .item-decrement,.sora-cart-review-wrap .item-quantity{float:left;margin-right:5px}
.sora-cart-review-wrap .item-decrement a,.sora-cart-review-wrap .item-increment a{display:block;width:16px;height:16px;background-color:$(main.dark.color);font-size:8px;color:#fff;text-align:center;line-height:16px;text-decoration:none;transition:background .17s ease}
.sora-cart-review-wrap .item-decrement a:hover,.sora-cart-review-wrap .item-increment a:hover{background-color:$(main.color)}
.sora-cart-review-wrap .item-quantity{font-size:14px;color:$(main.color);font-weight:700;line-height:15px;margin:0 10px 0 5px}
.sora-cart-review-wrap .item-total{font-size:14px;color:#f50000;font-weight:700;margin:0}
.sora-cart-review-wrap .item-increment{margin-right:5px}
.sora-cart-review-wrap .item-remove{position:absolute;top:10px;right:10px}
.sora-cart-review-wrap .item-remove a{float:left;width:16px;height:16px;background-color:$(main.dark.color);font-size:11px;color:#fff;line-height:14px;text-align:center;transition:background .17s ease}
.sora-cart-review-wrap .item-remove a:hover{background-color:$(main.color)}
.sora-cart-review-wrap .simpleCart_items{display:block;width:100%;box-sizing:border-box}
.sora-cart-review-wrap .cart-bot-element{display:block;width:100%;box-sizing:border-box;margin:10px 0 0}
.sora-cart-review-wrap .sora-cart-ammount{float:left;font-size:14px;text-transform:uppercase;line-height:30px;margin:0}
.sora-cart-review-wrap .sora-cart-subtotal{font-size:14px;color:$(title.color);font-weight:700;margin:0 10px 0 0}
.sora-cart-review-wrap .simpleCart_total{font-size:14px;color:#f50000;font-weight:700}
.sora-cart-review-wrap .simpleCart_checkout{background-color:$(main.dark.color);padding:0 15px;display:inline-block;font-size:14px;color:#fff;font-weight:700;float:right;height:30px;line-height:30px;transition:all .17s ease}
.sora-cart-review-wrap .simpleCart_checkout:hover{background-color:$(main.color)}
.sora-cart-review-wrap .simpleCart_checkout:before{content:'\f09d';font-family:FontAwesome;font-weight:400;margin-right:5px}
.sora-cart-checkout{position:relative;float:left;width:100%;background-color:#fbfbfb;box-sizing:border-box;padding:15px}
.sora-cart-checkout-wrap{box-sizing:border-box;overflow:hidden}
.sora-checkout-wrap{display:block;width:100%;box-sizing:border-box}
.sora-cart-checkout-wrap .contact-form-name{width:calc(50% - 5px)}
.sora-cart-checkout-wrap .contact-form-email{width:calc(50% - 5px);float:right}
.sora-checkout-details{text-align:center;text-transform:capitalize;font-weight:700;font-size:14px}
.sora-checkout-wrap .itemRow{position:relative;display:block;margin-bottom:15px;overflow:hidden;border:1px solid #ebebeb;background-color:#fff;color:$(title.color);line-height:14px;padding:10px}
.sora-checkout-wrap .item-thumb{float:left;width:70px;margin-right:10px}
.sora-checkout-wrap .item-thumb img{width:100%;vertical-align:middle;object-fit:cover}
.sora-checkout-wrap .item-name{display:block;font-size:14px;color:$(title.color);font-weight:700;text-transform:uppercase;margin:0 0 10px}
.sora-checkout-wrap .item-price{font-size:13px;color:#aaa;font-weight:700;margin:0 0 10px}
.sora-checkout-wrap .item-decrement,.sora-checkout-wrap .item-increment{width:16px;float:left;text-align:center}
.sora-checkout-wrap .item-decrement,.sora-checkout-wrap .item-quantity{float:left;margin-right:5px}
.sora-checkout-wrap .item-decrement a,.sora-checkout-wrap .item-increment a{display:block;width:16px;height:16px;background-color:$(main.dark.color);font-size:8px;color:#fff;text-align:center;line-height:16px;text-decoration:none;transition:background .17s ease}
.sora-checkout-wrap .item-decrement a:hover,.sora-checkout-wrap .item-increment a:hover{background-color:$(main.color)}
.sora-checkout-wrap .item-quantity{font-size:14px;color:$(main.color);font-weight:700;line-height:15px;margin:0 10px 0 5px}
.sora-checkout-wrap .item-total{font-size:14px;color:#f50000;font-weight:700;line-height:14px;margin:0}
.sora-checkout-wrap .item-increment{margin-right:5px}
.sora-checkout-wrap .item-remove{position:absolute;top:10px;right:10px}
.sora-checkout-wrap .item-remove a{float:left;width:16px;height:16px;background-color:$(main.dark.color);font-size:11px;color:#fff;line-height:14px;text-align:center;transition:background .17s ease}
.sora-checkout-wrap .item-remove a:hover{background-color:$(main.color)}
.sora-checkout-wrap .simpleCart_items{display:block;width:100%;box-sizing:border-box}
.sora-checkout-wrap .cart-bot-element{display:block;width:100%;box-sizing:border-box;margin:20px 0 0}
.sora-checkout-wrap .sora-cart-ammount{float:left;font-size:14px;text-transform:uppercase;line-height:30px;margin:0}
.sora-checkout-wrap .sora-cart-subtotal{font-size:14px;color:$(title.color);font-weight:700;margin:0 10px 0 0}
.sora-checkout-wrap .simpleCart_total{font-size:14px;color:#f50000;font-weight:700}
.sora-checkout-wrap .simpleCart_checkout{background-color:$(main.dark.color);padding:0 15px;display:inline-block;font-size:14px;color:#fff;font-weight:700;float:right;height:30px;line-height:30px;transition:all .17s ease}
.sora-checkout-wrap .simpleCart_checkout:hover{background-color:$(main.color)}
.sora-checkout-wrap .simpleCart_checkout:before{content:'\f09d';font-family:FontAwesome;font-weight:400;margin-right:5px}
.sora-checkout-wrap .simpleCart_checkout .sora-checkout-bill{float:right;background:transparent;padding:0;color:#fff;font-size:14px;font-weight:700;font-family:inherit;line-height:30px;cursor:pointer;border:0}
@media screen and (max-width: 1100px) {
#outer-wrapper{max-width:100%}
.row{width:100%}
#hot-wrapper{box-sizing:border-box;padding:0 20px}
#header-wrap{height:auto}
.header-header{height:auto;box-sizing:border-box;float:left;padding:0 20px}
.header-logo{max-width:30%}
.header-menu{box-sizing:border-box;padding:0 20px}
#content-wrapper{position:relative;box-sizing:border-box;padding:0 20px;margin:30px 0 0}
#footer-wrapper .container{box-sizing:border-box;padding:25px 20px}
#sub-footer-wrapper .container{box-sizing:border-box;padding:10px 20px}
}
@media screen and (max-width: 980px) {
#content-wrapper > .container{margin:0}
.header-logo{max-width:100%;width:100%;text-align:center;padding:20px 0}
.header-logo .header-image-wrapper{display:inline-block}
#main-menu{display:none}
.slide-menu-toggle,.mobile-menu{display:block}
#header-wrap{padding:0}
.header-header{padding:0}
.header-header .container.row{width:100%;margin:0}
.header-right{width:100%;display:block;background-color:rgba(255,255,255,0.03);margin:0}
#right-menu{float:left;margin:0 0 0 5px}
#header-inner a{display:inline-block!important}
#main-wrapper,#sidebar-wrapper{width:100%;padding:0}
.item #sidebar-wrapper{margin-top:20px}
}
@media screen and (max-width: 880px) {
#hot-section .hot-loader,#hot-section .show-hot .widget-content,ul.hot-posts,.hot-posts .hot-item{height:250px}
.footer-widgets-wrap{display:block}
#footer-wrapper .footer{width:100%;margin-right:0}
#footer-sec2,#footer-sec3{margin-top:25px}
}
@media screen and (max-width: 680px) {
#hot-section .show-hot .widget-content,#hot-section .hot-posts{height:auto}
#hot-section .hot-loader{height:200px}
.hot-posts .hot-item{width:100%;height:230px;margin:10px 0 0}
.hot-posts .item-0{margin:0}
.index-post{width:50%}
.col-left{width:100%}
.col-right{width:100%;margin:5px 0 0}
.col-left .post-image-wrap{height:230px}
.related-posts .related-item{width:calc(100% / 2)}
.related-posts .item-2{margin:30px 0 0}
#footer-payments,#sub-footer-wrapper .copyright-area{width:100%;height:auto;line-height:inherit;text-align:center}
#footer-payments{margin:10px 0 0}
#sub-footer-wrapper .copyright-area{margin:10px 0}
#footer-payments ul li{float:none;height:auto}
#footer-payments ul li a{line-height:inherit;margin:0 3px 5px}
}
@media screen and (max-width: 560px) {
.sora-checkout-details{text-align:left}
}
@media screen and (max-width: 440px) {
.queryMessage{text-align:center}
.queryMessage a.show-more{width:100%;margin:10px 0 0}
#comments ol{padding:0}
.errorWrap{padding:70px 0 100px}
.errorWrap h3{font-size:120px}
}
@media screen and (max-width: 400px) {
.index-post,.related-posts .related-item{width:100%}
.related-posts .item-1{margin:30px 0 0}
}
]]></b:skin>
<style>
/*-------Typography and ShortCodes-------*/
.firstcharacter{float:left;color:#27ae60;font-size:75px;line-height:60px;padding-top:4px;padding-right:8px;padding-left:3px}.post-body h1,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{margin-bottom:15px;color:#2c3e50}blockquote{font-style:italic;color:#888;border-left:5px solid #27ae60;margin-left:0;padding:10px 15px}blockquote:before{content:&#39;\f10d&#39;;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-right:10px;color:#888}blockquote:after{content:&#39;\f10e&#39;;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-left:10px;color:#888}.button{background-color:#2c3e50;float:left;padding:5px 12px;margin:5px;color:#fff;text-align:center;border:0;cursor:pointer;border-radius:3px;display:block;text-decoration:none;font-weight:400;transition:all .3s ease-out !important;-webkit-transition:all .3s ease-out !important}a.button{color:#fff}.button:hover{background-color:#27ae60;color:#fff}.button.small{font-size:12px;padding:5px 12px}.button.medium{font-size:16px;padding:6px 15px}.button.large{font-size:18px;padding:8px 18px}.small-button{width:100%;overflow:hidden;clear:both}.medium-button{width:100%;overflow:hidden;clear:both}.large-button{width:100%;overflow:hidden;clear:both}.demo:before{content:&quot;\f06e&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.download:before{content:&quot;\f019&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.buy:before{content:&quot;\f09d&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.visit:before{content:&quot;\f14c&quot;;margin-right:5px;display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.widget .post-body ul,.widget .post-body ol{line-height:1.5;font-weight:400}.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}.post-body ul li:before{content:&quot;\f105&quot;;margin-right:5px;font-family:fontawesome}pre{font-family:Monaco, &quot;Andale Mono&quot;, &quot;Courier New&quot;, Courier, monospace;background-color:#2c3e50;background-image:-webkit-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:-moz-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:-ms-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:-o-linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);background-image:linear-gradient(rgba(0, 0, 0, 0.05) 50%, transparent 50%, transparent);-webkit-background-size:100% 50px;-moz-background-size:100% 50px;background-size:100% 50px;line-height:25px;color:#f1f1f1;position:relative;padding:0 7px;margin:15px 0 10px;overflow:hidden;word-wrap:normal;white-space:pre;position:relative}pre:before{content:&#39;Code&#39;;display:block;background:#F7F7F7;margin-left:-7px;margin-right:-7px;color:#2c3e50;padding-left:7px;font-weight:400;font-size:14px}pre code,pre .line-number{display:block}pre .line-number a{color:#27ae60;opacity:0.6}pre .line-number span{display:block;float:left;clear:both;width:20px;text-align:center;margin-left:-7px;margin-right:7px}pre .line-number span:nth-child(odd){background-color:rgba(0, 0, 0, 0.11)}pre .line-number span:nth-child(even){background-color:rgba(255, 255, 255, 0.05)}pre .cl{display:block;clear:both}#contact{background-color:#fff;margin:30px 0 !important}#contact .contact-form-widget{max-width:100% !important}#contact .contact-form-name,#contact .contact-form-email,#contact .contact-form-email-message{background-color:#FFF;border:1px solid #eee;border-radius:3px;padding:10px;margin-bottom:10px !important;max-width:100% !important}#contact .contact-form-name{width:47.7%;height:50px}#contact .contact-form-email{width:49.7%;height:50px}#contact .contact-form-email-message{height:150px}#contact .contact-form-button-submit{max-width:100%;width:100%;z-index:0;margin:4px 0 0;padding:10px !important;text-align:center;cursor:pointer;background:#27ae60;border:0;height:auto;-webkit-border-radius:2px;-moz-border-radius:2px;-ms-border-radius:2px;-o-border-radius:2px;border-radius:2px;text-transform:uppercase;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-o-transition:all .2s ease-out;-ms-transition:all .2s ease-out;transition:all .2s ease-out;color:#FFF}#contact .contact-form-button-submit:hover{background:#2c3e50}#contact .contact-form-email:focus,#contact .contact-form-name:focus,#contact .contact-form-email-message:focus{box-shadow:none !important}.alert-message{position:relative;display:block;background-color:#FAFAFA;padding:20px;margin:20px 0;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;color:#2f3239;border:1px solid}.alert-message p{margin:0 !important;padding:0;line-height:22px;font-size:13px;color:#2f3239}.alert-message span{font-size:14px !important}.alert-message i{font-size:16px;line-height:20px}.alert-message.success{background-color:#f1f9f7;border-color:#e0f1e9;color:#1d9d74}.alert-message.success a,.alert-message.success span{color:#1d9d74}.alert-message.alert{background-color:#DAEFFF;border-color:#8ED2FF;color:#378FFF}.alert-message.alert a,.alert-message.alert span{color:#378FFF}.alert-message.warning{background-color:#fcf8e3;border-color:#faebcc;color:#8a6d3b}.alert-message.warning a,.alert-message.warning span{color:#8a6d3b}.alert-message.error{background-color:#FFD7D2;border-color:#FF9494;color:#F55D5D}.alert-message.error a,.alert-message.error span{color:#F55D5D}.fa-check-circle:before{content:&quot;\f058&quot;}.fa-info-circle:before{content:&quot;\f05a&quot;}.fa-exclamation-triangle:before{content:&quot;\f071&quot;}.fa-exclamation-circle:before{content:&quot;\f06a&quot;}.post-table table{border-collapse:collapse;width:100%}.post-table th{background-color:#eee;font-weight:bold}.post-table th,.post-table td{border:0.125em solid #333;line-height:1.5;padding:0.75em;text-align:left}@media (max-width: 30em){.post-table thead tr{position:absolute;top:-9999em;left:-9999em}.post-table tr{border:0.125em solid #333;border-bottom:0}.post-table tr + tr{margin-top:1.5em}.post-table tr,.post-table td{display:block}.post-table td{border:none;border-bottom:0.125em solid #333;padding-left:50%}.post-table td:before{content:attr(data-label);display:inline-block;font-weight:bold;line-height:1.5;margin-left:-100%;width:100%}}@media (max-width: 20em){.post-table td{padding-left:0.75em}.post-table td:before{display:block;margin-bottom:0.75em;margin-left:0}}
.FollowByEmail {
    clear: both;
}
.widget .post-body ol {
    padding: 0 0 0 15px;
}
.post-body ul li {
    list-style: none;
}
</style>
<b:if cond='data:view.isLayoutMode'>
<b:template-skin>
<![CDATA[
/*------Layout (No Edit)----------*/
body#layout #outer-wrapper,body#layout .row{width:auto;padding:0}
body#layout{width:800px;position:relative;padding:95px 5px 0;margin:0}
body#layout div.section{margin:0 5px 10px!important;padding:16px 16px 18px!important}
body#layout .section h4{font-size:14px;margin:0}
body#layout .layout-widget-description{display:none}
body#layout .theme-options,body#layout #main-menu .widget{display:block!important}
body#layout div.sora-panel{background-color:#d7d7d7!important;overflow:hidden!important;border-color:#bcbcbc}
body#layout .sora-panel .widget{float:left;width:49%;margin-right:2%}
body#layout .sora-panel #LinkList69{width:100%;margin-right:0}
body#layout .sora-panel #LinkList71{margin-right:0}
body#layout #header-wrap{height:auto}
body#layout .header-header{float:left;width:100%;height:auto;padding:0}
body#layout .header-header .container{display:flex}
body#layout div.header-logo{float:left;width:50%;height:auto;max-width:none;max-height:none}
body#layout .header-right{width:50%;display:block;margin:0}
body#layout #right-menu{float:none}
body#layout .mobile-menu{display:none}
body#layout .header-menu{float:left;width:100%;height:auto}
body#layout #main-menu{height:auto}
body#layout #hot-wrapper .widget{display:block}
body#layout #content-wrapper{margin:0}
body#layout #content-wrapper > .container{display:flex;margin:0}
body#layout #main-wrapper{width:66.66%;padding:0}
body#layout #sidebar-wrapper{width:33.33%;padding:0}
body#layout .sidebar .widget,body#layout .sidebar .widget-content{float:none;overflow:visible}
body#layout .footer-widgets-wrap{display:flex}
body#layout .footer-widgets-wrap div.footer{width:100%}
/*------Layout (end)----------*/
]]></b:template-skin>
</b:if>

<!-- Global Variables -->
<script type='text/javascript'>
//<![CDATA[
// Global variables with content. "Available for Edit"
var monthFormat = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    noThumbnail = "https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png",
    postPerPage = 7,
    fixedSidebar = true,
    paymentOption = "PayPal",
    paypalMail = "templatemania@yahoo.com",
    currencyOption = "USD",
    commentsSystem = "blogger",
    disqusShortname = "soratemplates";
//]]>
</script>

<b:defaultmarkups>
  <b:defaultmarkup type='Common'>
    <b:includable id='widget-title'>
      <b:if cond='data:defaultTitle or data:title'>
        <div class='widget-title'>
          <h3 class='title'>
            <data:title/>
          </h3>
        </div>
      </b:if>
    </b:includable>    
  </b:defaultmarkup>
  <b:defaultmarkup type='PopularPosts'>
    <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <div class='widget-content'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='postContent'/>
        </b:loop>
      </div>
    </b:includable>
    <b:includable id='postContent' var='post'>
      <div class='post post-shop-info' expr:data-id='data:post.id'>
        <div class='post-content'>
          <a class='post-image-link' expr:href='data:post.url'>
            <b:if cond='data:post.featuredImage'>
              <img class='post-thumb' expr:alt='data:post.title' expr:src='data:post.featuredImage resizeImage 680'/>
              <b:else/>
              <img class='post-thumb' expr:alt='data:post.title' src='https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png'/>
            </b:if>
          </a>
          <div class='product-info'>
            <h2 class='post-title'>
              <a expr:href='data:post.url'><data:post.title/></a>
            </h2>
            <span class='meta-price'/>
          </div>
        </div>
      </div>
    </b:includable>
  </b:defaultmarkup>
  <b:defaultmarkup type='Header'>
    <b:includable id='main' var='this'>
      <div class='header-widget'>
        <b:include cond='data:imagePlacement in {&quot;REPLACE&quot;, &quot;BEFORE_DESCRIPTION&quot;}' name='image'/>
        <b:include cond='data:imagePlacement == &quot;BEHIND&quot;' name='title'/>
      </div>
    </b:includable>
    <b:includable id='image'>
      <a class='header-image-wrapper' expr:href='data:blog.homepageUrl'>
        <img expr:alt='data:blog.title.escaped' expr:data-height='data:height' expr:data-width='data:width' expr:src='data:image'/>
      </a>
    </b:includable>
  </b:defaultmarkup>
  <b:defaultmarkup type='FeaturedPost'>
    <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <div class='widget-content'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='postContent'/>
        </b:loop>
      </div>
    </b:includable>
    <b:includable id='postContent' var='post'>
      <div class='post post-shop-info' expr:data-id='data:post.id'>
        <div class='post-content'>
          <div class='post-image-wrap'>
            <a class='post-image-link' expr:href='data:post.url'>
              <b:if cond='data:post.featuredImage'>
                <img class='post-thumb' expr:alt='data:post.title' expr:src='data:post.featuredImage resizeImage 680'/>
                <b:else/>
                <img class='post-thumb' expr:alt='data:post.title' src='https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png'/>
              </b:if>
              <span class='post-tag'><data:post.labels.last.name/></span>
            </a>
            <span class='product_off'/>
          </div>
          <div class='product-info'>
            <h2 class='post-title'>
              <a expr:href='data:post.url'><data:post.title/></a>
            </h2>
            <span class='meta-price'/>
          </div>
        </div>
      </div>
    </b:includable>
  </b:defaultmarkup>
  <b:defaultmarkup type='Label'>
    <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
    <b:includable id='content'>
      <div class='widget-content'>
        <b:class expr:name='data:this.display + &quot;-label&quot;'/>
        <b:include cond='data:this.display == &quot;list&quot;' name='list'/>
        <b:include cond='data:this.display == &quot;cloud&quot;' name='list'/>
      </div>
    </b:includable>
    <b:includable id='list'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <a class='label-name' expr:href='data:label.url'>
              <data:label.name/>
              <b:if cond='data:this.showFreqNumbers'>
                <span class='label-count'><data:label.count/></span>
              </b:if>
            </a>
          </li>
        </b:loop>
      </ul>
    </b:includable>
  </b:defaultmarkup>
  <b:defaultmarkup type='FollowByEmail'>
    <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
    <b:includable id='content'>
      <div class='widget-content'>
        <span class='before-text'><data:skin.vars.followByEmail/></span>
        <div class='follow-by-email-inner'>
          <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
            <input autocomplete='off' class='follow-by-email-address' expr:placeholder='data:messages.emailAddress' name='email' type='email'/>
            <input class='follow-by-email-submit' expr:value='data:messages.subscribe' type='submit'/>
            <input expr:value='data:feedPath' name='uri' type='hidden'/>
            <input name='loc' type='hidden' value='en_US'/>
          </form>
        </div>
      </div>
    </b:includable>
  </b:defaultmarkup>
  <b:defaultmarkup type='BlogSearch'>
    <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
    <b:includable id='content'>
      <div class='widget-content' role='search'>
        <form class='search-form' expr:action='data:blog.searchUrl'>
          <b:attr cond='not data:view.isPreview' name='target' value='_top'/>
          <b:include name='urlParamsAsFormInput'/>
          <input autocomplete='off' class='search-input' expr:aria-label='data:messages.searchThisBlog' expr:placeholder='data:messages.searchThisBlog' expr:value='data:view.isSearch ? data:view.search.query.escaped : &quot;&quot;' name='q'/>
          <input class='search-action' expr:value='data:messages.search.escaped' type='submit'/>  
        </form>
      </div>
    </b:includable>
  </b:defaultmarkup>
  <b:defaultmarkup type='BlogArchive'>
    <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
    <b:includable id='content'>
      <div class='widget-content'>
        <div id='ArchiveList'>
          <div expr:id='data:widget.instanceId + &quot;_ArchiveList&quot;'>
            <b:include cond='data:this.style in {&quot;FLAT&quot;, &quot;MENU&quot;, &quot;HIERARCHY&quot;}' name='flat'/>
          </div>
        </div>
      </div>
    </b:includable>
    <b:includable id='flat'>
      <ul class='flat'>
        <b:loop values='data:data' var='i'>
          <li class='archivedate'>
            <a expr:href='data:i.url'>
              <data:i.name/><span class='post-count'><data:i.post-count/></span>
            </a>
          </li>
        </b:loop>
      </ul>
    </b:includable>
  </b:defaultmarkup>
</b:defaultmarkups>

    <!-- Google Analytics -->
    <b:include data='blog' name='google-analytics'/>

</head>
<body expr:class='data:blog.pageType'>
  <b:class cond='data:view.isHomepage' name='home'/>
  <b:class cond='data:view.isPage' name='item'/>
  <b:class cond='data:view.isArchive' name='index'/>
  <b:class cond='data:view.isError' name='error404'/>

<!-- Theme Options -->
  <div class='theme-options' style='display:none'>
    <b:section class='sora-panel' id='sora-panel' maxwidgets='1' name='Theme Options' showaddelement='no'>
      <b:widget id='LinkList69' locked='true' title='Payment Options' type='LinkList' version='2' visible='true'>
        <b:widget-settings>
          <b:widget-setting name='sorting'>NONE</b:widget-setting>
          <b:widget-setting name='text-1'>paymentOption</b:widget-setting>
          <b:widget-setting name='link-1'>PayPal</b:widget-setting>
          <b:widget-setting name='text-0'>paypalMail</b:widget-setting>
          <b:widget-setting name='link-2'>USD</b:widget-setting>
          <b:widget-setting name='link-0'>templatemania@yahoo.com</b:widget-setting>
          <b:widget-setting name='text-2'>currencyOption</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>
          <b:include name='content'/>
        </b:includable>
        <b:includable id='content'>
          &lt;script type=&#39;text/javascript&#39;&gt;
          //&lt;![CDATA[
          <b:loop values='data:links' var='link'>
            <b:if cond='data:link.name == &quot;paymentOption&quot;'>
              var paymentOption = &quot;<data:link.target/>&quot;;
            </b:if>
            <b:if cond='data:link.name == &quot;paypalMail&quot;'>
              var paypalMail = &quot;<data:link.target/>&quot;;
            </b:if>
            <b:if cond='data:link.name == &quot;currencyOption&quot;'>
              var currencyOption = &quot;<data:link.target/>&quot;;
            </b:if>
          </b:loop>
          //]]&gt;
          &lt;/script&gt;
        </b:includable>
      </b:widget>
      <b:widget id='LinkList70' locked='true' title='Boxed Version' type='LinkList' version='2' visible='true'>
        <b:widget-settings>
          <b:widget-setting name='sorting'>NONE</b:widget-setting>
          <b:widget-setting name='text-0'>boxedVersion</b:widget-setting>
          <b:widget-setting name='link-0'>false</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>
          <b:include name='content'/>
        </b:includable>
        <b:includable id='content'>
          &lt;style type=&#39;text/css&#39;&gt;
          <b:loop values='data:links' var='link'>
            <b:if cond='data:link.name == &quot;boxedVersion&quot;'>
              <b:if cond='data:link.target == &quot;true&quot;'>
                #outer-wrapper{max-width:1120px} 
              </b:if>
            </b:if>
          </b:loop>
          &lt;/style&gt;
        </b:includable>
      </b:widget>
      <b:widget id='LinkList71' locked='true' title='Default Variables' type='LinkList' version='2' visible='true'>
        <b:widget-settings>
          <b:widget-setting name='link-3'>9</b:widget-setting>
          <b:widget-setting name='sorting'>NONE</b:widget-setting>
          <b:widget-setting name='text-1'>commentsSystem</b:widget-setting>
          <b:widget-setting name='link-1'>blogger</b:widget-setting>
          <b:widget-setting name='text-0'>disqusShortname</b:widget-setting>
          <b:widget-setting name='link-2'>true</b:widget-setting>
          <b:widget-setting name='text-3'>postPerPage</b:widget-setting>
          <b:widget-setting name='link-0'>soratemplates</b:widget-setting>
          <b:widget-setting name='text-2'>fixedSidebar</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>
          <b:include name='content'/>
        </b:includable>
        <b:includable id='content'>
          &lt;script type=&#39;text/javascript&#39;&gt;
          //&lt;![CDATA[
          <b:loop values='data:links' var='link'>
            <b:if cond='data:link.name == &quot;postPerPage&quot;'>
              var postPerPage = <data:link.target/>;
            </b:if>
            <b:if cond='data:link.name == &quot;fixedSidebar&quot;'>
              var fixedSidebar = <data:link.target/>;
            </b:if>
            <b:if cond='data:link.name == &quot;commentsSystem&quot;'>
              var commentsSystem = &quot;<data:link.target/>&quot;;
            </b:if>
            <b:if cond='data:link.name == &quot;disqusShortname&quot;'>
              var disqusShortname = &quot;<data:link.target/>&quot;;
            </b:if>
          </b:loop>
          //]]&gt;
          &lt;/script&gt;
        </b:includable>
      </b:widget>
    </b:section>
  </div>

<!-- Outer Wrapper -->
<div id='outer-wrapper'>

  <!-- Header Wrapper -->
  <div id='header-wrap'>

    <div class='header-header'>    
      <div class='container row'>
          <b:section class='header-logo' id='header-logo' maxwidgets='1' name='Header Logo' showaddelement='yes'>
            <b:widget id='Header1' locked='true' title='EasyCart (Header)' type='Header' version='2' visible='true'>
              <b:widget-settings>
                <b:widget-setting name='displayUrl'>http://3.bp.blogspot.com/-5xo6R7PDZf0/W6psUYEdL-I/AAAAAAAADRQ/NXqelE8zPFwyNDnmGAj-F7Iz6j7w3WlygCK4BGAYYCw/s1600/logo.png</b:widget-setting>
                <b:widget-setting name='displayHeight'>40</b:widget-setting>
                <b:widget-setting name='sectionWidth'>150</b:widget-setting>
                <b:widget-setting name='useImage'>true</b:widget-setting>
                <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
                <b:widget-setting name='imagePlacement'>REPLACE</b:widget-setting>
                <b:widget-setting name='displayWidth'>150</b:widget-setting>
              </b:widget-settings>
              <b:includable id='main' var='this'>
      <div class='header-widget'>
        <b:include cond='data:imagePlacement in {&quot;REPLACE&quot;, &quot;BEFORE_DESCRIPTION&quot;}' name='image'/>
        <b:include cond='data:imagePlacement == &quot;BEHIND&quot;' name='title'/>
      </div>
    </b:includable>
              <b:includable id='behindImageStyle'>
    <b:if cond='data:sourceUrl'>
      <b:include cond='data:this.image' data='{                    image: data:this.image,                    selector: &quot;.header-widget&quot;                  }' name='responsiveImageStyle'/>
      <style type='text/css'>
        .header-widget {
          background-position: <data:blog.locale.languageAlignment/>;
          background-repeat: no-repeat;
        }
      </style>
    </b:if>
  </b:includable>
              <b:includable id='description'>
    <p>
      <data:this.description/>
    </p>
  </b:includable>
              <b:includable id='image'>
      <a class='header-image-wrapper' expr:href='data:blog.homepageUrl'>
        <img expr:alt='data:blog.title.escaped' expr:data-height='data:height' expr:data-width='data:width' expr:src='data:image'/>
      </a>
    </b:includable>
              <b:includable id='title'>
    <h1>
      <b:tag cond='data:view.url != data:blog.homepageUrl' expr:href='data:blog.homepageUrl' name='a'>
        <data:title/>
      </b:tag>
    </h1>
  </b:includable>
            </b:widget>
          </b:section>

        <div class='header-right'>
          <b:section class='right-menu' id='right-menu' maxwidgets='1' name='Header Right Menu' showaddelement='yes'>
            <b:widget id='LinkList72' locked='true' title='Link List' type='LinkList' version='2' visible='true'>
              <b:widget-settings>
                <b:widget-setting name='sorting'>NONE</b:widget-setting>
                <b:widget-setting name='text-1'>Contact</b:widget-setting>
                <b:widget-setting name='link-1'>https://easy-cart-soratemplates.blogspot.com/p/contact-us.html</b:widget-setting>
                <b:widget-setting name='text-0'>About</b:widget-setting>
                <b:widget-setting name='link-0'>https://easy-cart-soratemplates.blogspot.com/p/about.html</b:widget-setting>
              </b:widget-settings>
              <b:includable id='main'>
                <b:include name='content'/>
              </b:includable>
              <b:includable id='content'>
                <ul>
                  <b:loop values='data:links' var='link'>
                    <li><a expr:href='data:link.target'><data:link.name/></a></li>
                  </b:loop>
                </ul>
              </b:includable>
            </b:widget>
          </b:section>
          <div class='sora-cart'>
            <div class='sora-cart-details'>
              <span class='simpleCart_quantity'>0</span>
            </div>
            <div class='sora-cart-description'>
              <div class='simpleCart_items'/>
              <div class='sora-cart-buttons-wrap'>
                <div class='sora-cart-ammount'><span class='sora-cart-subtotal'>SUBTOTAL :</span><span class='simpleCart_total'/></div>
                <div class='sora-cart-buttons'>
                  <a class='simpleCart_empty' href='javascript:;'><span>empty cart</span></a><a class='simpleCart_checkout' href='/p/checkout.html'><span>checkout</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class='header-menu'>
      <div class='mobile-menu'/>
      <div class='container row'>
        <span class='slide-menu-toggle'/>
        <b:section class='main-menu' id='main-menu' maxwidgets='1' name='Main Menu' showaddelement='yes'>
          <b:widget id='LinkList74' locked='true' title='Link List' type='LinkList' version='2' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='text-10'>Video Documentation</b:widget-setting>
              <b:widget-setting name='sorting'>NONE</b:widget-setting>
              <b:widget-setting name='link-1'>#</b:widget-setting>
              <b:widget-setting name='link-2'>#</b:widget-setting>
              <b:widget-setting name='link-0'>/</b:widget-setting>
              <b:widget-setting name='link-11'>https://www.soratemplates.com/2018/10/easy-cart-blogger-templates.html</b:widget-setting>
              <b:widget-setting name='link-10'>https://youtu.be/5GqYyatNctA</b:widget-setting>
              <b:widget-setting name='text-9'>Documentation</b:widget-setting>
              <b:widget-setting name='link-9'>https://www.sorabloggingtips.com/2018/10/how-to-setup-easycart-blogger-template.html</b:widget-setting>
              <b:widget-setting name='text-8'>_Error Page</b:widget-setting>
              <b:widget-setting name='link-7'>https://www.sorabloggingtips.com/2017/01/how-to-add-sitemap-widget-in-blogspot-blogs.html</b:widget-setting>
              <b:widget-setting name='link-8'>https://easy-cart-soratemplates.blogspot.com/soratemplates</b:widget-setting>
              <b:widget-setting name='link-5'>#</b:widget-setting>
              <b:widget-setting name='link-6'>https://easy-cart-soratemplates.blogspot.com/p/post-format-and-page-markup.html</b:widget-setting>
              <b:widget-setting name='link-3'>#</b:widget-setting>
              <b:widget-setting name='link-4'>#</b:widget-setting>
              <b:widget-setting name='text-1'>Features</b:widget-setting>
              <b:widget-setting name='text-0'>Home</b:widget-setting>
              <b:widget-setting name='text-3'>__DropDown 1</b:widget-setting>
              <b:widget-setting name='text-2'>_Multi DropDown</b:widget-setting>
              <b:widget-setting name='text-5'>__DropDown 3</b:widget-setting>
              <b:widget-setting name='text-4'>__DropDown 2</b:widget-setting>
              <b:widget-setting name='text-7'>_SiteMap</b:widget-setting>
              <b:widget-setting name='text-6'>_ShortCodes</b:widget-setting>
              <b:widget-setting name='text-11'>Download This Template</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main'>
              <b:include name='content'/>
            </b:includable>
            <b:includable id='content'>
              <ul id='main-menu-nav' role='menubar'>
                <b:loop values='data:links' var='link'>
                  <li><a expr:href='data:link.target' role='menuitem'><data:link.name/></a></li>
                </b:loop>
              </ul>
            </b:includable>
          </b:widget>
        </b:section>
        <div id='nav-search'>
          <form class='search-form' expr:action='data:blog.searchUrl' role='search'>
            <input autocomplete='off' class='search-input' expr:placeholder='data:messages.searchThisBlog' name='q' type='search' value=''/>
            <span class='hide-search'/>
          </form>
        </div>
        <span class='show-search'/>
      </div>
    </div>

  </div>

  <div class='clearfix'/>

  <b:if cond='data:view.isHomepage'> 
    <!-- Featured Wrapper -->
    <div class='row' id='hot-wrapper'>
      <b:section id='hot-section' maxwidgets='1' name='Hot Offers' showaddelement='yes'>
        <b:widget id='HTML2' locked='false' title='Follow Us' type='HTML' visible='true'>
          <b:widget-settings>
            <b:widget-setting name='content'>women/hot-posts</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <b:include name='widget-title'/>
  <div class='widget-content'>
    <data:content/>
  </div>
</b:includable>
        </b:widget>
      </b:section>
    </div>
    <div class='clearfix'/>
  </b:if>

  <!-- Content Wrapper -->
  <div class='row' id='content-wrapper'>
    <div class='container'>

      <!-- Main Wrapper -->
      <div id='main-wrapper'>

        <b:if cond='data:view.isHomepage'> 
          <b:section class='home-ad' id='home-ad' maxwidgets='1' name='Home Ads' showaddelement='yes'>
             <b:widget id='HTML33' locked='false' title='Advertisement' type='HTML' version='2' visible='true'>
               <b:widget-settings>
                 <b:widget-setting name='content'><![CDATA[<a href='/search/label/women?&max-results=9'><img alt='40% Off' src='https://3.bp.blogspot.com/-UGd1UMlyXX0/W62Oiwl0-_I/AAAAAAAADRo/y7LntcsQJ50gdTmjC_oxDnKUOrkyW5XKgCK4BGAYYCw/s1600/ads.jpg'/></a>]]></b:widget-setting>
               </b:widget-settings>
               <b:includable id='main'>
                <b:include name='widget-title'/>
                <div class='widget-content'>
                  <data:content/>
                </div>
              </b:includable>
             </b:widget>
           </b:section>
        </b:if>

        <b:section class='main' id='main' maxwidgets='1' name='Main Posts' showaddelement='yes'>
          <b:widget id='Blog1' locked='true' title='Blog Posts' type='Blog' version='2' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='commentLabel'>Reviews</b:widget-setting>
              <b:widget-setting name='showShareButtons'>true</b:widget-setting>
              <b:widget-setting name='authorLabel'>by</b:widget-setting>
              <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
              <b:widget-setting name='timestampLabel'>Price:</b:widget-setting>
              <b:widget-setting name='reactionsLabel'>Share This</b:widget-setting>
              <b:widget-setting name='showAuthorProfile'>false</b:widget-setting>
              <b:widget-setting name='style.layout'>1x1</b:widget-setting>
              <b:widget-setting name='showLocation'>false</b:widget-setting>
              <b:widget-setting name='showTimestamp'>true</b:widget-setting>
              <b:widget-setting name='postsPerAd'>1</b:widget-setting>
              <b:widget-setting name='style.bordercolor'>#ffffff</b:widget-setting>
              <b:widget-setting name='backlinksLabel'>Related Products</b:widget-setting>
              <b:widget-setting name='showDateHeader'>false</b:widget-setting>
              <b:widget-setting name='style.textcolor'>#111111</b:widget-setting>
              <b:widget-setting name='showCommentLink'>true</b:widget-setting>
              <b:widget-setting name='style.urlcolor'>#656565</b:widget-setting>
              <b:widget-setting name='showAuthor'>false</b:widget-setting>
              <b:widget-setting name='style.linkcolor'>#34bd5c</b:widget-setting>
              <b:widget-setting name='style.bgcolor'>#ffffff</b:widget-setting>
              <b:widget-setting name='showLabels'>true</b:widget-setting>
              <b:widget-setting name='postLabelsLabel'>Product Tags:</b:widget-setting>
              <b:widget-setting name='showBacklinks'>true</b:widget-setting>
              <b:widget-setting name='showInlineAds'>false</b:widget-setting>
              <b:widget-setting name='showReactions'>true</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main' var='this'>
              <b:include name='searchMessage'/>
              <div class='blog-posts hfeed container'>
                <b:class cond='data:view.isMultipleItems' name='index-post-wrap'/>
                <b:class cond='data:view.isSingleItem' name='item-post-wrap'/>
                <b:tag class='grid-posts' cond='data:view.isMultipleItems' name='div'>
                  <b:loop index='i' values='data:posts' var='post'>
                    <b:include data='post' name='postCommentsAndAd'/>
                  </b:loop>
                </b:tag>
              </div>
              <b:include cond='data:view.isMultipleItems' name='indexBlogPager'/>
              <b:include name='feedLinks'/>
            </b:includable>
            <b:includable id='aboutPostAuthor'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='addComments'>
              <a expr:href='data:post.commentsUrl' expr:onclick='data:post.commentsUrlOnclick'>
                <b:message name='messages.postAComment'/>
              </a>
            </b:includable>
            <b:includable id='backLinks' var='post'>
              <b:comment>Disabled</b:comment>         
            </b:includable>
            <b:includable id='commentAuthorAvatar'>
              <div class='avatar-image-container'>
                <img class='author-avatar' expr:src='data:comment.authorAvatarSrc' height='45' width='45'/>
              </div>
            </b:includable>
            <b:includable id='commentDeleteIcon' var='comment'>
              <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
                <b:if cond='data:showCmtPopup'>
                  <div class='goog-toggle-button'>
                    <div class='goog-inline-block comment-action-icon'/>
                  </div>
                  <b:else/>
                  <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:messages.deleteComment'>
                    <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
                  </a>
                </b:if>
              </span>
            </b:includable>
            <b:includable id='commentForm' var='post'>
              <div class='comment-form'>
                <a name='comment-form'/>
                <b:if cond='data:this.messages.blogComment != &quot;&quot;'>
                  <p><data:this.messages.blogComment/></p>
                </b:if>
                <b:include data='post' name='commentFormIframeSrc'/>
                <iframe allowtransparency='allowtransparency' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight ?: &quot;90px&quot;' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
                <data:post.cmtfpIframe/>
                <script type='text/javascript'>
                  BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
                </script>
              </div>
            </b:includable>
            <b:includable id='commentFormIframeSrc' var='post'>
              <a expr:href='data:post.commentFormIframeSrc + &quot;&amp;skin=contempo&quot;' id='comment-editor-src'/>
            </b:includable>
            <b:includable id='commentItem' var='comment'>
              <div class='comment' expr:id='&quot;c&quot; + data:comment.id'>
                <b:include cond='data:blog.enabledCommentProfileImages' name='commentAuthorAvatar'/>

                <div class='comment-block'>
                  <div class='comment-author'>
                    <b:if cond='data:comment.authorUrl'>
                      <b:message name='messages.authorSaidWithLink'>
                        <b:param expr:value='data:comment.author' name='authorName'/>
                        <b:param expr:value='data:comment.authorUrl' name='authorUrl'/>
                      </b:message>
                      <b:else/>
                      <b:message name='messages.authorSaid'>
                        <b:param expr:value='data:comment.author' name='authorName'/>
                      </b:message>
                    </b:if>
                  </div>
                  <div expr:class='&quot;comment-body&quot; + (data:comment.isDeleted ? &quot; deleted&quot; : &quot;&quot;)'>
                    <data:comment.body/>
                  </div>
                  <div class='comment-footer'>
                    <span class='comment-timestamp'>
                      <a expr:href='data:comment.url' title='comment permalink'>
                        <data:comment.timestamp/>
                      </a>
                      <b:include data='comment' name='commentDeleteIcon'/>
                    </span>
                  </div>
                </div>
              </div>
            </b:includable>
            <b:includable id='commentList' var='comments'>
              <div id='comments-block'>
                <b:loop values='data:comments' var='comment'>
                  <b:include data='comment' name='commentItem'/>
                </b:loop>
              </div>
            </b:includable>
            <b:includable id='commentPicker' var='post'>
              <b:if cond='data:post.commentSource == 1'>
                <b:include data='post' name='iframeComments'/>
                <b:elseif cond='data:post.showThreadedComments'/>
                <b:include data='post' name='threadedComments'/>
                <b:else/>
                <b:include data='post' name='comments'/>
              </b:if>
            </b:includable>
            <b:includable id='comments' var='post'>
              <section expr:class='&quot;comments&quot; + (data:post.embedCommentForm ? &quot; embed&quot; : &quot;&quot;)' expr:data-num-comments='data:post.numberOfComments' id='comments'>
                <a name='comments'/>
                <b:if cond='data:post.allowComments'>

                  <b:include name='commentsTitle'/>

                  <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
                    <b:include cond='data:post.comments' data='post.comments' name='commentList'/>
                  </div>

                  <b:if cond='data:post.commentPagingRequired'>
                    <div class='paging-control-container'>
                      <b:if cond='data:post.hasOlderLinks'>
                        <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
                          <data:messages.oldest/>
                        </a>
                        <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
                          <data:messages.older/>
                        </a>
                      </b:if>

                      <span class='comment-range-text'>
                        <data:post.commentRangeText/>
                      </span>

                      <b:if cond='data:post.hasNewerLinks'>
                        <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
                          <data:messages.newer/>
                        </a>
                        <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
                          <data:messages.newest/>
                        </a>
                      </b:if>
                    </div>
                  </b:if>

                  <div class='footer'>
                    <b:if cond='data:post.embedCommentForm'>
                      <b:if cond='data:post.allowNewComments'>
                        <b:include data='post' name='commentForm'/>
                        <b:else/>
                        <data:post.noNewCommentsText/>
                      </b:if>
                      <b:else/>
                      <b:if cond='data:post.allowComments'>
                        <b:include data='post' name='addComments'/>
                      </b:if>
                    </b:if>
                  </div>
                </b:if>
                <b:if cond='data:showCmtPopup'>
                  <div id='comment-popup'>
                    <iframe allowtransparency='allowtransparency' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                    </iframe>
                  </div>
                </b:if>
              </section>
            </b:includable>
            <b:includable id='commentsTitle'>
              <!-- Post Commments Title -->
              <h3 class='title'><data:post.numberOfComments/> <data:allBylineItems.comments.label/></h3>
            </b:includable>
            <b:includable id='feedLinks'>
              <b:comment>Disabled</b:comment> 
            </b:includable>
            <b:includable id='feedLinksBody' var='links'>
              <b:comment>Disabled</b:comment> 
            </b:includable>
            <b:includable id='footerBylines' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='headerByline' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='homePageLink'>
              <b:comment>Disabled</b:comment> 
            </b:includable>
            <b:includable id='iframeComments' var='post'>
              <b:if cond='data:post.allowIframeComments'>
                <script expr:src='data:post.iframeCommentSrc' type='text/javascript'/>
                <div class='cmt_iframe_holder' expr:data-href='data:post.url.canonical' expr:data-viewtype='data:post.viewType'/>
                <b:if cond='!data:post.embedCommentForm'>
                  <b:include data='post' name='commentsLink'/>
                </b:if>
              </b:if>
            </b:includable>
            <b:includable id='indexBlogPager'>
              <!-- Post Pagination Index -->
              <div class='blog-pager container' id='blog-pager'>
                <b:include cond='data:newerPageUrl' name='previousPageLink'/>
                <b:include cond='data:olderPageUrl' name='nextPageLink'/>
                <b:include cond='data:view.url != data:blog.homepageUrl' name='homePageLink'/>
              </div>
            </b:includable>
            <b:includable id='indexPost' var='post'>
              <!-- Index Post Content -->
              <div class='index-product-inner'>
                <b:include data='post' name='postFeaturedImage'/>
                <div class='product-info'>
                  <b:include data='post' name='postHeader'/>
                  <div class='sora_product_item_price item_price'><span class='sora_product_price meta-price'/></div>
                  <a class='item_add' href='javascript:;'><span class='add_product'><i class='fa fa-cart-plus'/>Add to Cart</span><span class='product_added'><i class='fa fa-check'/>Product Added</span></a>
                </div>
              </div>
            </b:includable>
            <b:includable id='inlineAd' var='post'>
              <b:comment>Disabled</b:comment> 
            </b:includable>
            <b:includable id='itemPost' var='post'>
              <!-- Item Post Content -->
              <b:include data='post' name='postMeta'/>
              <b:include cond='data:view.isPost' data='post' name='postBreadcrumbs'/>
              <b:if cond='data:view.isPost'>
                <div class='product-header'>
                  <div class='col-left'>
                    <div class='post-image-wrap item_image'>
                      <b:if cond='data:post.featuredImage'> 
                        <img class='post-thumb item_thumb' expr:alt='data:post.title' expr:src='data:post.featuredImage resizeImage 680'/>
                        <b:else/>
                        <img class='post-thumb item_thumb' expr:alt='data:post.title' src='https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png'/>
                      </b:if>
                      <span class='product_off'/>
                    </div>
                  </div>
                  <div class='col-right'>
                    <h1 class='post-title item_name'>
                      <data:post.title/>
                    </h1>
                    <div class='sora_product_item_price item_price'><b><data:allBylineItems.timestamp.label/></b><span class='sora_product_price meta-price'/></div>
                    <div class='sora-product-buy-buttons'>
                      <a class='item_add' href='javascript:;'><span class='add_product'><i class='fa fa-cart-plus'/>Add to Cart</span><span class='product_added'><i class='fa fa-check'/>Product Added</span></a>
                      <a class='sora-cart-view' href='/p/cart.html'><i class='fa fa-eye'/>View Cart</a> 
                      <a class='sora-cart-payment' href='/p/checkout.html'><i class='fa fa-credit-card'/>Checkout</a>
                    </div>
                    <b:include data='post' name='postLabels'/>
                    <b:include data='post' name='postShareButtons'/>
                  </div>
                </div>
              </b:if>
              <b:if cond='data:view.isPage'>
                <h1 class='post-title'>
                  <data:post.title/>
                </h1>
              </b:if>
              <b:include data='post' name='postBody'/>
              <b:include cond='data:view.isPost' data='post' name='postFooter'/>
            </b:includable>
            <b:includable id='nextPageLink'>
              <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:messages.olderPosts'>
                <data:messages.olderPosts/>
              </a>
            </b:includable>
            <b:includable id='post' var='post'>
              <!-- Post Index -->
              <b:if cond='data:view.isMultipleItems'>
                <b:include data='post' name='indexPost'/>
              </b:if>
              <!-- Post Item -->
              <b:if cond='data:view.isSingleItem'>
                <b:include data='post' name='itemPost'/>
              </b:if>
            </b:includable>
            <b:includable id='postAuthor' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='postBody' var='post'> 
              <!-- Post Body Entry Content-->
              <b:if cond='data:view.isPost'>
                <div class='post-content'>
                  <b:if cond='data:blog.jumpLinkMessage != &quot;hide&quot;'>
                    <div class='title-wrap'><h3><data:blog.jumpLinkMessage/></h3></div>
                  </b:if>
                  <div class='post-body'>
                    <data:post.body/>
                  </div>
                </div>
                <b:else/>
                <div class='post-content post-body'>
                  <data:post.body/>
                </div>
              </b:if>
            </b:includable>
            <b:includable id='postBodySnippet' var='post'>
              <b:include data='post' name='postBody'/>
            </b:includable>
            <b:includable id='postBreadcrumbs' var='post'>
              <!-- Post Breadcrumbs -->
              <nav id='breadcrumb'><a expr:href='data:blog.homepageUrl'><data:messages.home/></a><b:if cond='data:post.labels'><em class='delimiter'/><a class='b-label' expr:href='data:post.labels.last.url'><data:post.labels.last.name/></a></b:if><em class='delimiter'/><span class='current'><data:post.title/></span></nav>
              <script type='application/ld+json'>
              {
                &quot;@context&quot;: &quot;http://schema.org&quot;,
                &quot;@type&quot;: &quot;BreadcrumbList&quot;,
                &quot;@id&quot;: &quot;#Breadcrumb&quot;,
                &quot;itemListElement&quot;: [{
                  &quot;@type&quot;: &quot;ListItem&quot;,
                  &quot;position&quot;: 1,
                  &quot;item&quot;: {
                    &quot;name&quot;: &quot;<data:messages.home/>&quot;,
                    &quot;@id&quot;: &quot;<data:blog.homepageUrl.jsonEscaped/>&quot;
                  }
                },{
                  &quot;@type&quot;: &quot;ListItem&quot;,
                  &quot;position&quot;: 2,
                  &quot;item&quot;: {
                    &quot;name&quot;: &quot;<b:if cond='data:post.labels'><data:post.labels.last.name/></b:if>&quot;,
                    &quot;@id&quot;: &quot;<data:post.labels.last.url.jsonEscaped/>&quot;
                  }
                },{
                  &quot;@type&quot;: &quot;ListItem&quot;,
                  &quot;position&quot;: 3,
                  &quot;item&quot;: {
                    &quot;name&quot;: &quot;<data:post.title/>&quot;,
                    &quot;@id&quot;: &quot;<data:post.url.jsonEscaped/>&quot;
                  }
                }]
              }
            </script>
            </b:includable>
            <b:includable id='postCategory' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='postCommentsAndAd' var='post'>
              <!-- Post, Comments and Ads -->
              <!-- Post Content Index and Item -->
              <div class='blog-post hentry simpleCart_shelfItem'>
                <b:class cond='data:view.isMultipleItems' name='index-post post-shop-info'/>
                <b:class cond='data:view.isSingleItem' name='item-post'/>
                <b:class cond='data:view.isPost' name='product-post'/>
                <b:attr cond='data:view.isMultipleItems' expr:value='data:post.id' name='data-id'/>
                <b:include data='post' name='post'/>
              </div>
              <!-- Comments -->
              <b:if cond='data:view.isSingleItem'>
                <div class='blog-post-comments'>
                  <b:include data='post' name='threadedCommentsDisqus'/>
                  <b:include data='post' name='commentPicker'/>
                </div>
              </b:if>
            </b:includable>
            <b:includable id='postCommentsLink'>
              <b:if cond='data:view.isMultipleItems'>
                <span class='byline post-comment-link container'>
                  <b:include cond='data:post.commentSource != 1' name='commentsLink'/>
                  <b:include cond='data:post.commentSource == 1' name='commentsLinkIframe'/>
                </span>
              </b:if>
            </b:includable>
            <b:includable id='postFeaturedImage' var='post'>
              <!-- Post Featured Image on Index -->
              <div class='post-image-wrap item_image'>
                <a class='post-image-link' expr:href='data:post.url'>
                  <b:if cond='data:post.featuredImage'> 
                    <img class='post-thumb item_thumb' expr:alt='data:post.title' expr:src='data:post.featuredImage resizeImage 680'/>
                    <b:else/>
                    <img class='post-thumb item_thumb' expr:alt='data:post.title' src='https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png'/>
                  </b:if>
                </a>
                <span class='product_off'/>
              </div>
            </b:includable>
            <b:includable id='postFooter' var='post'>
              <!-- Post Footer Itens -->
              <div class='post-footer'>
                <!-- Post Labels, Reactions, Share, Navigation and Related Posts -->
                <b:include data='post' name='footerBylines'/>
                <b:include cond='data:allBylineItems.icons' data='post' name='postNavigation'/>
                <b:include cond='data:allBylineItems.backlinks' data='post' name='postRelated'/>
              </div>
            </b:includable>
            <b:includable id='postFooterAuthorProfile' var='post'>
              <b:comment>Disabled</b:comment>   
            </b:includable>
            <b:includable id='postHeader' var='post'>
              <b:include data='post' name='postTitle'/>
            </b:includable>
            <b:includable id='postJumpLink' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='postLabels' var='post'>
              <b:if cond='data:allBylineItems.labels'>
                <b:if cond='data:post.labels'>
                  <div class='post-labels'>
                    <span><data:allBylineItems.labels.label/></span>
                    <div class='label-head Label'>
                      <b:loop values='data:post.labels' var='label'>
                        <a class='label-link' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      </b:loop>
                    </div>
                  </div>
                </b:if>
              </b:if>
            </b:includable>
            <b:includable id='postMeta' var='post'>
              <b:include data='post' name='postMetadataJSON'/>
            </b:includable>
            <b:includable id='postNavigation' var='post'>
              <!-- Post Navigation Item -->
              <ul class='post-nav'>
                <li class='post-next'> 
                  <b:if cond='data:newerPageUrl'> 
                    <a class='next-post-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' rel='next'>
                      <div class='post-nav-inner'><span><data:messages.newer/></span><p/></div>
                    </a> 
                    <b:else/> 
                    <a rel='next'><div class='post-nav-inner post-nav-active'><span><data:messages.newer/></span><p><data:post.title/></p></div></a> 
                  </b:if> 
                </li>
                <li class='post-prev'> 
                  <b:if cond='data:olderPageUrl'> 
                    <a class='prev-post-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' rel='previous'>
                      <div class='post-nav-inner'><span><data:messages.older/></span><p/></div>
                    </a> 
                    <b:else/>
                    <a rel='previous'><div class='post-nav-inner post-nav-active'><span><data:messages.older/></span><p><data:post.title/></p></div></a> 
                  </b:if> 
                </li>
              </ul>
            </b:includable>
            <b:includable id='postPagination'>
  <div class='blog-pager container' id='blog-pager'>
    <b:include cond='data:newerPageUrl' name='previousPageLink'/>
    <b:include cond='data:olderPageUrl' name='nextPageLink'/>
    <b:include cond='data:view.url != data:blog.homepageUrl' name='homePageLink'/>
  </div>
</b:includable>
            <b:includable id='postReactions' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='postRelated' var='post'>
              <!-- Related Posts -->
                <div id='related-wrap'>
                  <div class='title-wrap'>
                    <h3><data:allBylineItems.backlinks.label/></h3>
                  </div>
                  <div class='related-ready'>
                    <b:if cond='data:post.labels'>
                      <div class='related-tag' expr:data-label='data:post.labels.first.name'/>
                      <b:else/>
                      <div class='related-tag' data-label='random'/>
                    </b:if>
                  </div> 
                </div>  
            </b:includable>
            <b:includable id='postShareButtons' var='post'>
              <!-- Post ShareButtons -->
              <b:if cond='data:allBylineItems.share'>
                <div class='post-share'>
                  <span class='share-title'><data:allBylineItems.reactions.label/></span>
                  <ul class='share-links social social-color'>
                    <li class='facebook'><a class='facebook' expr:href='&quot;https://www.facebook.com/sharer.php?u=&quot; + data:post.url' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=550, height=650, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow'/></li>
                    <li class='twitter'><a class='twitter' expr:href='&quot;https://twitter.com/share?url=&quot; + data:post.url + &quot;&amp;text=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=550, height=450, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow'/></li>
                    <li class='gplus'><a class='gplus' expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=400, height=500, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow'/></li>
                    <li class='pinterest'><a class='pinterest' expr:href='&quot;https://www.pinterest.com/pin/create/button/?url=&quot; + data:post.url + &quot;&amp;media=&quot; + data:post.featuredImage + &quot;&amp;description=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=735, height=750, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow'/></li>
                    <li class='linkedin'><a class='linkedin' expr:href='&quot;https://www.linkedin.com/shareArticle?url=&quot; + data:post.url' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=950, height=650, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow'/></li>
                    <b:if cond='data:blog.isMobileRequest'>                
                      <li class='whatsapp whatsapp-mobile'><a class='whatsapp' expr:href='&quot;https://api.whatsapp.com/send?text=&quot; + data:post.title + &quot; | &quot; + data:post.url' rel='nofollow' target='_blank'/></li>
                      <b:else/>
                      <li class='whatsapp whatsapp-desktop'><a class='whatsapp' expr:href='&quot;https://web.whatsapp.com/send?text=&quot; + data:post.title + &quot; | &quot; + data:post.url' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=900, height=550, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow'/></li>
                    </b:if>
                  </ul>
                </div>
              </b:if>
            </b:includable>
            <b:includable id='postShortMeta'>
              <b:comment>Disabled</b:comment> 
            </b:includable>
            <b:includable id='postSummary' var='post'>
              <b:comment>Disabled</b:comment> 
            </b:includable>
            <b:includable id='postTimestamp' var='post'>
              <b:comment>Disabled</b:comment>
            </b:includable>
            <b:includable id='postTitle' var='post'>
              <!-- Post Title Index and Item -->
              <b:if cond='data:view.isMultipleItems'>
                <h2 class='post-title item_name'>
                  <a expr:href='data:post.url'><data:post.title/></a>
                </h2>
              </b:if>
            </b:includable>
            <b:includable id='previousPageLink'>
              <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:messages.newerPosts'>
                <data:messages.newerPosts/>
              </a>
            </b:includable>
            <b:includable id='searchMessage'>
              <!-- Search Message -->
              <b:if cond='data:view.search.query'>
                <div class='queryMessage'>
                  <b:if cond='data:posts.empty'>
                    <span class='query-info query-error'/><data:view.search.resultsMessageHtml/><a class='show-more' expr:href='data:blog.homepageUrl'><data:messages.showAll/></a>
                    <b:else/>
                    <span class='query-info query-success'><data:view.search.resultsMessageHtml/></span><a class='show-more' expr:href='data:blog.homepageUrl'><data:messages.showAll/></a>
                  </b:if>
                </div>
              </b:if>
              <b:if cond='data:view.search.label'>
                <div class='queryMessage'>
                  <b:if cond='data:posts.empty'>
                    <span class='query-info query-error'><data:view.search.resultsMessageHtml/></span><a class='show-more' expr:href='data:blog.homepageUrl'><data:messages.showAll/></a>
                    <b:else/>
                    <span class='query-info query-success'><data:view.search.resultsMessageHtml/></span><a class='show-more' expr:href='data:blog.homepageUrl'><data:messages.showAll/></a>
                  </b:if>
                </div>
              </b:if>
              <b:if cond='data:view.isArchive'>
                <div class='queryMessage'>
                  <b:if cond='data:posts.empty'>
                    <span class='query-info query-error'><data:view.archive.rangeMessage/></span><a class='show-more' expr:href='data:blog.homepageUrl'><data:messages.showAll/></a>
                    <b:else/>
                    <span class='query-info query-success'><data:view.archive.rangeMessage/></span><a class='show-more' expr:href='data:blog.homepageUrl'><data:messages.showAll/></a>
                  </b:if>
                </div>
              </b:if>
              <b:if cond='data:view.isError'>
                <div class='errorWrap'>
                  <h3>404</h3>
                  <h4><data:messages.theresNothingHere/></h4>
                  <p><data:navMessage/></p>
                  <a class='homepage' expr:href='data:blog.homepageUrl'><i class='fa fa-home'/> <data:messages.home/></a>
                </div>
              </b:if>
              <b:if cond='data:view.isMultipleItems and data:posts.empty'><div class='queryEmpty'><data:messages.noResultsFound/></div></b:if>
            </b:includable>
            <b:includable id='threadedCommentForm' var='post'>
              <div class='comment-form'>
                <a name='comment-form'/>
                <b:if cond='data:this.messages.blogComment != &quot;&quot;'>
                  <p><data:this.messages.blogComment/></p>
                </b:if>
                <b:include data='post' name='commentFormIframeSrc'/>
                <iframe allowtransparency='allowtransparency' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight ?: &quot;90px&quot;' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
                <data:post.cmtfpIframe/>
                <script type='text/javascript'>
                  BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
                </script>
              </div>
            </b:includable>
            <b:includable id='threadedCommentJs' var='post'>
              <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>
              <b:template-script inline='true' name='threaded_comments'/>
              <script type='text/javascript'>
                blogger.widgets.blog.initThreadedComments(
                  <data:post.commentJso/>,
                  <data:post.commentMsgs/>,
                  <data:post.commentConfig/>);
              </script>
            </b:includable>
            <b:includable id='threadedComments' var='post'>
              <section class='comments threaded' expr:data-embed='data:post.embedCommentForm' expr:data-num-comments='data:post.numberOfComments' id='comments'>
                <a name='comments'/>

                <b:include name='commentsTitle'/>

                <div class='comments-content'>
                  <b:if cond='data:post.embedCommentForm'>
                    <b:include data='post' name='threadedCommentJs'/>
                  </b:if>
                  <div id='comment-holder'>
                    <data:post.commentHtml/>
                  </div>
                </div>

                <p class='comment-footer'>
                  <b:if cond='data:post.allowNewComments'>
                    <b:include data='post' name='threadedCommentForm'/>
                    <b:else/>
                    <data:post.noNewCommentsText/>
                  </b:if>
                </p>

                <b:if cond='data:showCmtPopup'>
                  <div id='comment-popup'>
                    <iframe allowtransparency='allowtransparency' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
                    </iframe>
                  </div>
                </b:if>
              </section>
            </b:includable>
            <b:includable id='threadedCommentsDisqus' var='post'>
              <script type='text/javascript'>
                var disqus_blogger_current_url = &quot;<data:blog.canonicalUrl/>&quot;;
                if (!disqus_blogger_current_url.length) {
                  disqus_blogger_current_url = &quot;<data:blog.url/>&quot;;
                }
                var disqus_blogger_homepage_url = &quot;<data:blog.homepageUrl/>&quot;;
                var disqus_blogger_canonical_homepage_url = &quot;<data:blog.canonicalHomepageUrl/>&quot;;
              </script>
            </b:includable>
          </b:widget>
        </b:section> 
      </div>

      <!-- Sidebar Wrapper -->
      <div id='sidebar-wrapper'>
        <b:section class='sidebar common-widget' id='sidebar1' name='Sidebar Right (A)' showaddelement='yes'/>
        <b:section class='sidebar' id='social-widget' maxwidgets='1' name='Social Widget' showaddelement='yes'>
          <b:widget id='LinkList75' locked='true' title='Social Plugin' type='LinkList' version='2' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='link-7'>#</b:widget-setting>
              <b:widget-setting name='link-5'>#</b:widget-setting>
              <b:widget-setting name='link-6'>#</b:widget-setting>
              <b:widget-setting name='link-3'>#</b:widget-setting>
              <b:widget-setting name='link-4'>#</b:widget-setting>
              <b:widget-setting name='text-1'>twitter</b:widget-setting>
              <b:widget-setting name='text-0'>facebook</b:widget-setting>
              <b:widget-setting name='text-3'>reddit</b:widget-setting>
              <b:widget-setting name='text-2'>gplus</b:widget-setting>
              <b:widget-setting name='text-5'>vk</b:widget-setting>
              <b:widget-setting name='text-4'>pinterest</b:widget-setting>
              <b:widget-setting name='text-7'>youtube</b:widget-setting>
              <b:widget-setting name='text-6'>instagram</b:widget-setting>
              <b:widget-setting name='sorting'>NONE</b:widget-setting>
              <b:widget-setting name='link-1'>#</b:widget-setting>
              <b:widget-setting name='link-2'>#</b:widget-setting>
              <b:widget-setting name='link-0'>http://fb.com/soratemplates</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main'>
  <b:include name='widget-title'/>
  <b:include name='content'/>
</b:includable>
            <b:includable id='content'>
              <div class='widget-content'>
                <ul class='social-counter social social-color'>
                  <b:loop values='data:links' var='link'>
                    <li expr:class='data:link.name'><a expr:href='data:link.target' expr:title='data:link.name' target='_blank'/></li>
                  </b:loop>
                </ul>
              </div>
            </b:includable>
          </b:widget>
        </b:section>
        <b:section class='sidebar common-widget' id='sidebar2' name='Sidebar Right (B)' showaddelement='yes'>
          <b:widget id='FeaturedPost1' locked='false' title='Featured Post' type='FeaturedPost' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='showSnippet'>true</b:widget-setting>
              <b:widget-setting name='showPostTitle'>true</b:widget-setting>
              <b:widget-setting name='postId'>8045283573458612256</b:widget-setting>
              <b:widget-setting name='showFirstImage'>true</b:widget-setting>
              <b:widget-setting name='useMostRecentPost'>false</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <div class='widget-content'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='postContent'/>
        </b:loop>
      </div>
    </b:includable>
            <b:includable id='postContent' var='post'>
      <div class='post post-shop-info' expr:data-id='data:post.id'>
        <div class='post-content'>
          <div class='post-image-wrap'>
            <a class='post-image-link' expr:href='data:post.url'>
              <b:if cond='data:post.featuredImage'>
                <img class='post-thumb' expr:alt='data:post.title' expr:src='data:post.featuredImage resizeImage 680'/>
                <b:else/>
                <img class='post-thumb' expr:alt='data:post.title' src='https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png'/>
              </b:if>
              <span class='post-tag'><data:post.labels.last.name/></span>
            </a>
            <span class='product_off'/>
          </div>
          <div class='product-info'>
            <h2 class='post-title'>
              <a expr:href='data:post.url'><data:post.title/></a>
            </h2>
            <span class='meta-price'/>
          </div>
        </div>
      </div>
    </b:includable>
          </b:widget>
          <b:widget id='HTML6' locked='false' title='Facebook' type='HTML' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='content'><![CDATA[<center><div class="fb-page" data-href="https://www.facebook.com/soratemplates" data-width="360" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></center>]]></b:widget-setting>
            </b:widget-settings>
            <b:includable id='main'>
  <b:include name='widget-title'/>
  <div class='widget-content'>
    <data:content/>
  </div>
</b:includable>
          </b:widget>
          <b:widget id='PopularPosts1' locked='false' title='Popular Posts' type='PopularPosts' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='numItemsToShow'>3</b:widget-setting>
              <b:widget-setting name='showThumbnails'>true</b:widget-setting>
              <b:widget-setting name='showSnippets'>true</b:widget-setting>
              <b:widget-setting name='timeRange'>LAST_MONTH</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <div class='widget-content'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='postContent'/>
        </b:loop>
      </div>
    </b:includable>
            <b:includable id='postContent' var='post'>
      <div class='post post-shop-info' expr:data-id='data:post.id'>
        <div class='post-content'>
          <a class='post-image-link' expr:href='data:post.url'>
            <b:if cond='data:post.featuredImage'>
              <img class='post-thumb' expr:alt='data:post.title' expr:src='data:post.featuredImage resizeImage 680'/>
              <b:else/>
              <img class='post-thumb' expr:alt='data:post.title' src='https://4.bp.blogspot.com/-O3EpVMWcoKw/WxY6-6I4--I/AAAAAAAAB2s/KzC0FqUQtkMdw7VzT6oOR_8vbZO6EJc-ACK4BGAYYCw/w680/nth.png'/>
            </b:if>
          </a>
          <div class='product-info'>
            <h2 class='post-title'>
              <a expr:href='data:post.url'><data:post.title/></a>
            </h2>
            <span class='meta-price'/>
          </div>
        </div>
      </div>
    </b:includable>
          </b:widget>
          <b:widget id='Label3' locked='false' title='Categories' type='Label' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
              <b:widget-setting name='display'>LIST</b:widget-setting>
              <b:widget-setting name='selectedLabelsList'>laptop,mens,smartwatch,women</b:widget-setting>
              <b:widget-setting name='showType'>USER_SELECTED</b:widget-setting>
              <b:widget-setting name='showFreqNumbers'>true</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
            <b:includable id='cloud'>
  <b:loop values='data:labels' var='label'>
    <span class='label-size'>
      <b:class expr:name='&quot;label-size-&quot; + data:label.cssSize'/>
      <a class='label-name' expr:href='data:label.url'>
        <data:label.name/>
        <b:if cond='data:this.showFreqNumbers'>
          <span class='label-count'><data:label.count/></span>
        </b:if>
      </a>
    </span>
  </b:loop>
</b:includable>
            <b:includable id='content'>
      <div class='widget-content'>
        <b:class expr:name='data:this.display + &quot;-label&quot;'/>
        <b:include cond='data:this.display == &quot;list&quot;' name='list'/>
        <b:include cond='data:this.display == &quot;cloud&quot;' name='list'/>
      </div>
    </b:includable>
            <b:includable id='list'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <a class='label-name' expr:href='data:label.url'>
              <data:label.name/>
              <b:if cond='data:this.showFreqNumbers'>
                <span class='label-count'><data:label.count/></span>
              </b:if>
            </a>
          </li>
        </b:loop>
      </ul>
    </b:includable>
          </b:widget>
          <b:widget id='Label4' locked='false' title='Tags' type='Label' visible='true'>
            <b:widget-settings>
              <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
              <b:widget-setting name='display'>CLOUD</b:widget-setting>
              <b:widget-setting name='selectedLabelsList'>kids,laptop,mens,mobile,slider,smartwatch,store,women</b:widget-setting>
              <b:widget-setting name='showType'>USER_SELECTED</b:widget-setting>
              <b:widget-setting name='showFreqNumbers'>false</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
            <b:includable id='cloud'>
  <b:loop values='data:labels' var='label'>
    <span class='label-size'>
      <b:class expr:name='&quot;label-size-&quot; + data:label.cssSize'/>
      <a class='label-name' expr:href='data:label.url'>
        <data:label.name/>
        <b:if cond='data:this.showFreqNumbers'>
          <span class='label-count'><data:label.count/></span>
        </b:if>
      </a>
    </span>
  </b:loop>
</b:includable>
            <b:includable id='content'>
      <div class='widget-content'>
        <b:class expr:name='data:this.display + &quot;-label&quot;'/>
        <b:include cond='data:this.display == &quot;list&quot;' name='list'/>
        <b:include cond='data:this.display == &quot;cloud&quot;' name='list'/>
      </div>
    </b:includable>
            <b:includable id='list'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <a class='label-name' expr:href='data:label.url'>
              <data:label.name/>
              <b:if cond='data:this.showFreqNumbers'>
                <span class='label-count'><data:label.count/></span>
              </b:if>
            </a>
          </li>
        </b:loop>
      </ul>
    </b:includable>
          </b:widget>
        </b:section>
        </div>
      </div>
  </div>

 <div class='clearfix'/>

<!-- Footer Wrapper -->
<div id='footer-wrapper'> 
  <div class='container row'>
    <div class='footer-widgets-wrap'>
      <b:section class='footer common-widget' id='footer-sec1' maxwidgets='3' name='Section (Left)' showaddelement='yes'>
        <b:widget id='HTML4' locked='false' title='Recent in Women' type='HTML' visible='true'>
          <b:widget-settings>
            <b:widget-setting name='content'>3/women/post-list</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <b:include name='widget-title'/>
  <div class='widget-content'>
    <data:content/>
  </div>
</b:includable>
        </b:widget>
      </b:section>
      <b:section class='footer common-widget' id='footer-sec2' maxwidgets='3' name='Section (Center)' showaddelement='yes'>
        <b:widget id='Label1' locked='false' title='Categories' type='Label' visible='true'>
          <b:widget-settings>
            <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
            <b:widget-setting name='display'>LIST</b:widget-setting>
            <b:widget-setting name='selectedLabelsList'>kids,mens,mobile,women</b:widget-setting>
            <b:widget-setting name='showType'>USER_SELECTED</b:widget-setting>
            <b:widget-setting name='showFreqNumbers'>true</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
          <b:includable id='cloud'>
  <b:loop values='data:labels' var='label'>
    <span class='label-size'>
      <b:class expr:name='&quot;label-size-&quot; + data:label.cssSize'/>
      <a class='label-name' expr:href='data:label.url'>
        <data:label.name/>
        <b:if cond='data:this.showFreqNumbers'>
          <span class='label-count'><data:label.count/></span>
        </b:if>
      </a>
    </span>
  </b:loop>
</b:includable>
          <b:includable id='content'>
      <div class='widget-content'>
        <b:class expr:name='data:this.display + &quot;-label&quot;'/>
        <b:include cond='data:this.display == &quot;list&quot;' name='list'/>
        <b:include cond='data:this.display == &quot;cloud&quot;' name='list'/>
      </div>
    </b:includable>
          <b:includable id='list'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <a class='label-name' expr:href='data:label.url'>
              <data:label.name/>
              <b:if cond='data:this.showFreqNumbers'>
                <span class='label-count'><data:label.count/></span>
              </b:if>
            </a>
          </li>
        </b:loop>
      </ul>
    </b:includable>
        </b:widget>
        <b:widget id='FollowByEmail1' locked='false' title='Follow by Email' type='FollowByEmail' visible='true'>
          <b:includable id='main' var='this'>
      <b:include name='widget-title'/>
      <b:include name='content'/>
    </b:includable>
          <b:includable id='content'>
      <div class='widget-content'>
        <span class='before-text'><data:skin.vars.followByEmail/></span>
        <div class='follow-by-email-inner'>
          <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
            <input autocomplete='off' class='follow-by-email-address' expr:placeholder='data:messages.emailAddress' name='email' type='email'/>
            <input class='follow-by-email-submit' expr:value='data:messages.subscribe' type='submit'/>
            <input expr:value='data:feedPath' name='uri' type='hidden'/>
            <input name='loc' type='hidden' value='en_US'/>
          </form>
        </div>
      </div>
    </b:includable>
        </b:widget>
      </b:section>
      <b:section class='footer common-widget' id='footer-sec3' maxwidgets='3' name='Section (Right)' showaddelement='yes'>
        <b:widget id='HTML3' locked='false' title='Recent in Mens' type='HTML' visible='true'>
          <b:widget-settings>
            <b:widget-setting name='content'>3/mens/post-list</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <b:include name='widget-title'/>
  <div class='widget-content'>
    <data:content/>
  </div>
</b:includable>
        </b:widget>
      </b:section>
    </div>
  </div>

<div class='clearfix'/>

<div id='sub-footer-wrapper'>
  <div class='container row'>
    <b:section class='footer-payments' id='footer-payments' maxwidgets='1' name='Credit Cards Icons' showaddelement='yes'>
      <b:widget id='LinkList76' locked='true' title='Link List' type='LinkList' version='2' visible='true'>
        <b:widget-settings>
          <b:widget-setting name='link-5'>#</b:widget-setting>
          <b:widget-setting name='link-3'>#</b:widget-setting>
          <b:widget-setting name='link-4'>#</b:widget-setting>
          <b:widget-setting name='text-1'>visa</b:widget-setting>
          <b:widget-setting name='text-0'>paypal</b:widget-setting>
          <b:widget-setting name='text-3'>discover</b:widget-setting>
          <b:widget-setting name='text-2'>master</b:widget-setting>
          <b:widget-setting name='text-5'>amex</b:widget-setting>
          <b:widget-setting name='text-4'>diners</b:widget-setting>
          <b:widget-setting name='sorting'>NONE</b:widget-setting>
          <b:widget-setting name='link-1'>#</b:widget-setting>
          <b:widget-setting name='link-2'>#</b:widget-setting>
          <b:widget-setting name='link-0'>#</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>
          <b:include name='content'/>
        </b:includable>
        <b:includable id='content'>
          <div class='widget-content'>
            <ul class='payment'>
              <b:loop values='data:links' var='link'>
                <li expr:class='data:link.name'><a expr:href='data:link.target' expr:title='data:link.name'/></li>
              </b:loop>
            </ul>
          </div>
        </b:includable>
      </b:widget>
    </b:section>
    <div class='copyright-area'>Created By <a href='http://soratemplates.com/' id='mycontent' rel='dofollow' title='Free Blogger Templates'>SoraTemplates</a> | Distributed By <a href='https://www.mybloggerthemes.com/' rel='dofollow' target='_blank' style='color:#34BD5C;'>Blogger Themes</a>
    </div>
  </div>
</div>
</div>

  </div>

<!-- Main Scripts -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' type='text/javascript'/>
<script type='text/javascript'>
//<![CDATA[
/*! jquery-simplecart | License MIT */
(function(p,f){var s="string",k=function(e,f){return typeof e===f},e=function(e){return k(e,"undefined")},h=function(e){return k(e,"function")},y=function(e){return"object"===typeof HTMLElement?e instanceof HTMLElement:"object"===typeof e&&1===e.nodeType&&"string"===typeof e.nodeName},C=function(q){function E(a){return b.extend({attr:"",label:"",view:"attr",text:"",className:"",hide:!1},a||{})}function F(){if(!b.isReady){try{f.documentElement.doScroll("left")}catch(a){setTimeout(F,1);return}b.init()}}
var t={MooTools:"$$",Prototype:"$$",jQuery:"*"},n=0,r={},x=q||"simpleCart",z={};q={};q={};var v=p.localStorage,l=p.console||{msgs:[],log:function(a){l.msgs.push(a)}},D={USD:{code:"USD",symbol:"&#36;",name:"US Dollar"},AUD:{code:"AUD",symbol:"&#36;",name:"Australian Dollar"},BRL:{code:"BRL",symbol:"R&#36;",name:"Brazilian Real"},CAD:{code:"CAD",symbol:"&#36;",name:"Canadian Dollar"},CZK:{code:"CZK",symbol:"&nbsp;&#75;&#269;",name:"Czech Koruna",after:!0},DKK:{code:"DKK",symbol:"DKK&nbsp;",name:"Danish Krone"},
EUR:{code:"EUR",symbol:"&euro;",name:"Euro"},HKD:{code:"HKD",symbol:"&#36;",name:"Hong Kong Dollar"},HUF:{code:"HUF",symbol:"&#70;&#116;",name:"Hungarian Forint"},ILS:{code:"ILS",symbol:"&#8362;",name:"Israeli New Sheqel"},JPY:{code:"JPY",symbol:"&yen;",name:"Japanese Yen",accuracy:0},MXN:{code:"MXN",symbol:"&#36;",name:"Mexican Peso"},NOK:{code:"NOK",symbol:"NOK&nbsp;",name:"Norwegian Krone"},NZD:{code:"NZD",symbol:"&#36;",name:"New Zealand Dollar"},PLN:{code:"PLN",symbol:"PLN&nbsp;",name:"Polish Zloty"},
GBP:{code:"GBP",symbol:"&pound;",name:"Pound Sterling"},SGD:{code:"SGD",symbol:"&#36;",name:"Singapore Dollar"},SEK:{code:"SEK",symbol:"SEK&nbsp;",name:"Swedish Krona"},CHF:{code:"CHF",symbol:"CHF&nbsp;",name:"Swiss Franc"},THB:{code:"THB",symbol:"&#3647;",name:"Thai Baht"},BTC:{code:"BTC",symbol:" BTC",name:"Bitcoin",accuracy:4,after:!0}},m={checkout:{type:"PayPal",email:"you@yours.com"},currency:"USD",language:"english-us",cartStyle:"div",cartColumns:[{attr:"name",label:"Name"},{attr:"price",label:"Price",
view:"currency"},{view:"decrement",label:!1},{attr:"quantity",label:"Qty"},{view:"increment",label:!1},{attr:"total",label:"SubTotal",view:"currency"},{view:"remove",text:"Remove",label:!1}],excludeFromCheckout:["thumb"],shippingFlatRate:0,shippingQuantityRate:0,shippingTotalRate:0,shippingCustom:null,taxRate:0,taxShipping:!1,data:{}},b=function(a){if(h(a))return b.ready(a);if(k(a,"object"))return b.extend(m,a)},A,B;b.extend=function(a,d){var c;e(d)&&(d=a,a=b);for(c in d)Object.prototype.hasOwnProperty.call(d,
c)&&(a[c]=d[c]);return a};b.extend({copy:function(a){a=C(a);a.init();return a}});b.extend({isReady:!1,add:function(a,d){var c=new b.Item(a||{}),g=!0,u=!0===d?d:!1;if(!u&&(g=b.trigger("beforeAdd",[c]),!1===g))return!1;(g=b.has(c))?(g.increment(c.quantity()),c=g):r[c.id()]=c;b.update();u||b.trigger("afterAdd",[c,e(g)]);return c},each:function(a,d){var c,g=0,u,e,w;if(h(a))e=a,w=r;else if(h(d))e=d,w=a;else return;for(c in w)if(Object.prototype.hasOwnProperty.call(w,c)){u=e.call(b,w[c],g,c);if(!1===u)break;
g+=1}},find:function(a){var d=[];if(k(r[a],"object"))return r[a];if(k(a,"object"))return b.each(function(c){var g=!0;b.each(a,function(a,b,d){k(a,s)?a.match(/<=.*/)?(a=parseFloat(a.replace("<=","")),c.get(d)&&parseFloat(c.get(d))<=a||(g=!1)):a.match(/</)?(a=parseFloat(a.replace("<","")),c.get(d)&&parseFloat(c.get(d))<a||(g=!1)):a.match(/>=/)?(a=parseFloat(a.replace(">=","")),c.get(d)&&parseFloat(c.get(d))>=a||(g=!1)):a.match(/>/)?(a=parseFloat(a.replace(">","")),c.get(d)&&parseFloat(c.get(d))>a||
(g=!1)):c.get(d)&&c.get(d)===a||(g=!1):c.get(d)&&c.get(d)===a||(g=!1);return g});g&&d.push(c)}),d;e(a)&&b.each(function(a){d.push(a)});return d},items:function(){return this.find()},has:function(a){var d=!1;b.each(function(b){b.equals(a)&&(d=b)});return d},empty:function(){var a={};b.each(function(b){!1===b.remove(!0)&&(a[b.id()]=b)});r=a;b.update()},quantity:function(){var a=0;b.each(function(b){a+=b.quantity()});return a},total:function(){var a=0;b.each(function(b){a+=b.total()});return a},grandTotal:function(){return b.total()+
b.tax()+b.shipping()},update:function(){b.save();b.trigger("update")},init:function(){b.load();b.update();b.ready()},$:function(a){return new b.ELEMENT(a)},$create:function(a){return b.$(f.createElement(a))},setupViewTool:function(){var a,d=p,c;for(c in t)if(Object.prototype.hasOwnProperty.call(t,c)&&p[c]&&(a=t[c].replace("*",c).split("."),(a=a.shift())&&(d=d[a]),"function"===typeof d)){A=d;b.extend(b.ELEMENT._,z[c]);break}},ids:function(){var a=[];b.each(function(b){a.push(b.id())});return a},save:function(){b.trigger("beforeSave");
var a={};b.each(function(d){a[d.id()]=b.extend(d.fields(),d.options())});v.setItem(x+"_items",JSON.stringify(a));b.trigger("afterSave")},load:function(){r={};var a=v.getItem(x+"_items");if(a){try{b.each(JSON.parse(a),function(a){b.add(a,!0)})}catch(d){b.error("Error Loading data: "+d)}b.trigger("load")}},ready:function(a){h(a)?b.isReady?a.call(b):b.bind("ready",a):e(a)&&!b.isReady&&(b.trigger("ready"),b.isReady=!0)},error:function(a){var d="";k(a,s)?d=a:k(a,"object")&&k(a.message,s)&&(d=a.message);
try{l.log("simpleCart(js) Error: "+d)}catch(c){}b.trigger("error",a)}});b.extend({tax:function(){var a=m.taxShipping?b.total()+b.shipping():b.total(),d=b.taxRate()*a;b.each(function(a){a.get("tax")?d+=a.get("tax"):a.get("taxRate")&&(d+=a.get("taxRate")*a.total())});return parseFloat(d)},taxRate:function(){return m.taxRate||0},shipping:function(a){if(h(a))b({shippingCustom:a});else{var d=m.shippingQuantityRate*b.quantity()+m.shippingTotalRate*b.total()+m.shippingFlatRate;h(m.shippingCustom)&&(d+=m.shippingCustom.call(b));
b.each(function(a){d+=parseFloat(a.get("shipping")||0)});return parseFloat(d)}}});B={attr:function(a,b){return a.get(b.attr)||""},currency:function(a,d){return b.toCurrency(a.get(d.attr)||0)},link:function(a,b){return"<a href='"+a.get(b.attr)+"'>"+b.text+"</a>"},decrement:function(a,b){return"<a href='javascript:;' class='"+x+"_decrement'>"+(b.text||"-")+"</a>"},increment:function(a,b){return"<a href='javascript:;' class='"+x+"_increment'>"+(b.text||"+")+"</a>"},image:function(a,b){return"<img src='"+
a.get(b.attr)+"'/>"},input:function(a,b){return"<input type='text' value='"+a.get(b.attr)+"' class='"+x+"_input'/>"},remove:function(a,b){return"<a href='javascript:;' class='"+x+"_remove'>"+(b.text||"X")+"</a>"}};b.extend({writeCart:function(a){var d=m.cartStyle.toLowerCase(),c="table"===d,g=c?"tr":"div",u=c?"th":"div",e=c?"td":"div",w=b.$create(d),d=b.$create(g).addClass("headerRow"),f,h;b.$(a).html(" ").append(w);w.append(d);c=0;for(h=m.cartColumns.length;c<h;c+=1)f=E(m.cartColumns[c]),a="item-"+
(f.attr||f.view||f.label||f.text||"cell")+" "+f.className,f=f.label||"",d.append(b.$create(u).addClass(a).html(f));b.each(function(a,d){b.createCartRow(a,d,g,e,w)});return w},createCartRow:function(a,d,c,g,u){d=b.$create(c).addClass("itemRow row-"+d+" "+(d%2?"even":"odd")).attr("id","cartItem_"+a.id());var e,f,l;u.append(d);u=0;for(c=m.cartColumns.length;u<c;u+=1)e=E(m.cartColumns[u]),f="item-"+(e.attr||(k(e.view,s)?e.view:e.label||e.text||"cell"))+" "+e.className,l=a,l=(h(e.view)?e.view:k(e.view,
s)&&h(B[e.view])?B[e.view]:B.attr).call(b,l,e),f=b.$create(g).addClass(f).html(l),d.append(f);return d}});b.Item=function(a){function d(){k(c.price,s)&&(c.price=parseFloat(c.price.replace(b.currency().decimal,".").replace(/[^0-9\.]+/ig,"")));isNaN(c.price)&&(c.price=0);0>c.price&&(c.price=0);k(c.quantity,s)&&(c.quantity=parseInt(c.quantity.replace(b.currency().delimiter,""),10));isNaN(c.quantity)&&(c.quantity=1);0>=c.quantity&&g.remove()}var c={},g=this;k(a,"object")&&b.extend(c,a);n+=1;for(c.id=
c.id||"SCI-"+n;!e(r[c.id]);)n+=1,c.id="SCI-"+n;g.get=function(a,b){var d=!b;return e(a)?a:h(c[a])?c[a].call(g):e(c[a])?h(g[a])&&d?g[a].call(g):!e(g[a])&&d?g[a]:c[a]:c[a]};g.set=function(a,b){e(a)||(c[a.toLowerCase()]=b,"price"!==a.toLowerCase()&&"quantity"!==a.toLowerCase()||d());return g};g.equals=function(a){for(var b in c)if(Object.prototype.hasOwnProperty.call(c,b)&&"quantity"!==b&&"id"!==b&&a.get(b)!==c[b])return!1;return!0};g.options=function(){var a={};b.each(c,function(d,c,e){var f=!0;b.each(g.reservedFields(),
function(a){a===e&&(f=!1);return f});f&&(a[e]=g.get(e))});return a};d()};b.Item._=b.Item.prototype={increment:function(a){a=parseInt(a||1,10);this.quantity(this.quantity()+a);return 1>this.quantity()?(this.remove(),null):this},decrement:function(a){return this.increment(-parseInt(a||1,10))},remove:function(a){if(!1===b.trigger("beforeRemove",[r[this.id()]]))return!1;delete r[this.id()];a||b.update();return null},reservedFields:function(){return"quantity id item_number price name shipping tax taxRate".split(" ")},
fields:function(){var a={},d=this;b.each(d.reservedFields(),function(b){d.get(b)&&(a[b]=d.get(b))});return a},quantity:function(a){return e(a)?parseInt(this.get("quantity",!0)||1,10):this.set("quantity",a)},price:function(a){return e(a)?parseFloat(this.get("price",!0).toString().replace(b.currency().symbol,"").replace(b.currency().delimiter,"")||1):this.set("price",parseFloat(a.toString().replace(b.currency().symbol,"").replace(b.currency().delimiter,"")))},id:function(){return this.get("id",!1)},
total:function(){return this.quantity()*this.price()}};b.extend({checkout:function(){if("custom"===m.checkout.type.toLowerCase()&&h(m.checkout.fn))m.checkout.fn.call(b,m.checkout);else if(h(b.checkout[m.checkout.type])){var a=b.checkout[m.checkout.type].call(b,m.checkout);a.data&&a.action&&a.method&&!1!==b.trigger("beforeCheckout",[a.data])&&b.generateAndSendForm(a)}else b.error("No Valid Checkout Method Specified")},extendCheckout:function(a){return b.extend(b.checkout,a)},generateAndSendForm:function(a){var d=
b.$create("form");d.attr("style","display:none;");d.attr("action",a.action);d.attr("method",a.method);b.each(a.data,function(a,g,e){d.append(b.$create("input").attr("type","hidden").attr("name",e).val(a))});b.$("body").append(d);d.el.submit();d.remove()}});b.extendCheckout({PayPal:function(a){if(!a.email)return b.error("No email provided for PayPal checkout");var d={cmd:"_cart",upload:"1",currency_code:b.currency().code,business:a.email,rm:"GET"===a.method?"0":"2",tax_cart:(1*b.tax()).toFixed(2),
handling_cart:(1*b.shipping()).toFixed(2),charset:"utf-8"},c=a.sandbox?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr",g="GET"===a.method?"GET":"POST";a.success&&(d["return"]=a.success);a.cancel&&(d.cancel_return=a.cancel);a.notify&&(d.notify_url=a.notify);b.each(function(a,c){var g=c+1,e=a.options(),f=0,h;d["item_name_"+g]=a.get("name");d["quantity_"+g]=a.quantity();d["amount_"+g]=(1*a.price()).toFixed(2);d["item_number_"+g]=a.get("item_number")||g;b.each(e,
function(a,c,e){10>c&&(h=!0,b.each(m.excludeFromCheckout,function(a){a===e&&(h=!1)}),h&&(f+=1,d["on"+c+"_"+g]=e,d["os"+c+"_"+g]=a))});d["option_index_"+c]=Math.min(10,f)});return{action:c,method:g,data:d}},GoogleCheckout:function(a){if(!a.merchantID)return b.error("No merchant id provided for GoogleCheckout");if("USD"!==b.currency().code&&"GBP"!==b.currency().code)return b.error("Google Checkout only accepts USD and GBP");var d={ship_method_name_1:"Shipping",ship_method_price_1:b.shipping(),ship_method_currency_1:b.currency().code,
_charset_:""},c="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/"+a.merchantID;a="GET"===a.method?"GET":"POST";b.each(function(a,c){var e=c+1,f=[],h;d["item_name_"+e]=a.get("name");d["item_quantity_"+e]=a.quantity();d["item_price_"+e]=a.price();d["item_currency_ "+e]=b.currency().code;d["item_tax_rate"+e]=a.get("taxRate")||b.taxRate();b.each(a.options(),function(a,d,c){h=!0;b.each(m.excludeFromCheckout,function(a){a===c&&(h=!1)});h&&f.push(c+": "+a)});d["item_description_"+e]=f.join(", ")});
return{action:c,method:a,data:d}},AmazonPayments:function(a){if(!a.merchant_signature)return b.error("No merchant signature provided for Amazon Payments");if(!a.merchant_id)return b.error("No merchant id provided for Amazon Payments");if(!a.aws_access_key_id)return b.error("No AWS access key id provided for Amazon Payments");var d={aws_access_key_id:a.aws_access_key_id,merchant_signature:a.merchant_signature,currency_code:b.currency().code,tax_rate:b.taxRate(),weight_unit:a.weight_unit||"lb"},c="https://payments"+
(a.sandbox?"-sandbox":"")+".amazon.com/checkout/"+a.merchant_id,g="GET"===a.method?"GET":"POST";b.each(function(c,g){var e=g+1,f=[];d["item_title_"+e]=c.get("name");d["item_quantity_"+e]=c.quantity();d["item_price_"+e]=c.price();d["item_sku_ "+e]=c.get("sku")||c.id();d["item_merchant_id_"+e]=a.merchant_id;c.get("weight")&&(d["item_weight_"+e]=c.get("weight"));m.shippingQuantityRate&&(d["shipping_method_price_per_unit_rate_"+e]=m.shippingQuantityRate);b.each(c.options(),function(a,d,c){var g=!0;b.each(m.excludeFromCheckout,
function(a){a===c&&(g=!1)});g&&"weight"!==c&&"tax"!==c&&f.push(c+": "+a)});d["item_description_"+e]=f.join(", ")});return{action:c,method:g,data:d}},SendForm:function(a){if(!a.url)return b.error("URL required for SendForm Checkout");var d={currency:b.currency().code,shipping:b.shipping(),tax:b.tax(),taxRate:b.taxRate(),itemCount:b.find({}).length},c=a.url,g="GET"===a.method?"GET":"POST";b.each(function(a,c){var g=c+1,e=[],f;d["item_name_"+g]=a.get("name");d["item_quantity_"+g]=a.quantity();d["item_price_"+
g]=a.price();b.each(a.options(),function(a,d,c){f=!0;b.each(m.excludeFromCheckout,function(a){a===c&&(f=!1)});f&&e.push(c+": "+a)});d["item_options_"+g]=e.join(", ")});a.success&&(d["return"]=a.success);a.cancel&&(d.cancel_return=a.cancel);a.extra_data&&(d=b.extend(d,a.extra_data));return{action:c,method:g,data:d}}});q={bind:function(a,d){if(!h(d))return this;this._events||(this._events={});var c=a.split(/ +/);b.each(c,function(a){!0===this._events[a]?d.apply(this):e(this._events[a])?this._events[a]=
[d]:this._events[a].push(d)});return this},trigger:function(a,b){var c=!0,g,f;this._events||(this._events={});if(!e(this._events[a])&&h(this._events[a][0]))for(g=0,f=this._events[a].length;g<f;g+=1)c=this._events[a][g].apply(this,b||[]);return!1===c?!1:!0}};q.on=q.bind;b.extend(q);b.extend(b.Item._,q);q={beforeAdd:null,afterAdd:null,load:null,beforeSave:null,afterSave:null,update:null,ready:null,checkoutSuccess:null,checkoutFail:null,beforeCheckout:null,beforeRemove:null};b(q);b.each(q,function(a,
d,c){b.bind(c,function(){h(m[c])&&m[c].apply(this,arguments)})});b.extend({toCurrency:function(a,d){var c=parseFloat(a),g=d||{},g=b.extend(b.extend({symbol:"$",decimal:".",delimiter:",",accuracy:2,after:!1},b.currency()),g),e=c.toFixed(g.accuracy).split("."),c=e[1],e=e[0],e=b.chunk(e.reverse(),3).join(g.delimiter.reverse()).reverse();return(g.after?"":g.symbol)+e+(c?g.decimal+c:"")+(g.after?g.symbol:"")},chunk:function(a,b){"undefined"===typeof b&&(b=2);return a.match(RegExp(".{1,"+b+"}","g"))||[]}});
String.prototype.reverse=function(){return this.split("").reverse().join("")};b.extend({currency:function(a){if(k(a,s)&&!e(D[a]))m.currency=a;else if(k(a,"object"))D[a.code]=a,m.currency=a.code;else return D[m.currency]}});b.extend({bindOutlets:function(a){b.each(a,function(a,c,e){b.bind("update",function(){b.setOutlet("."+x+"_"+e,a)})})},setOutlet:function(a,d){var c=d.call(b,a);k(c,"object")&&c.el?b.$(a).html(" ").append(c):e(c)||b.$(a).html(c)},bindInputs:function(a){b.each(a,function(a){b.setInput("."+
x+"_"+a.selector,a.event,a.callback)})},setInput:function(a,d,c){b.$(a).live(d,c)}});b.ELEMENT=function(a){this.create(a);this.selector=a||null};b.extend(z,{MooTools:{text:function(a){return this.attr("text",a)},html:function(a){return this.attr("html",a)},val:function(a){return this.attr("value",a)},attr:function(a,b){if(e(b))return this.el[0]&&this.el[0].get(a);this.el.set(a,b);return this},remove:function(){this.el.dispose();return null},addClass:function(a){this.el.addClass(a);return this},removeClass:function(a){this.el.removeClass(a);
return this},append:function(a){this.el.adopt(a.el);return this},each:function(a){h(a)&&b.each(this.el,function(b,c,e){a.call(c,c,b,e)});return this},click:function(a){h(a)?this.each(function(b){b.addEvent("click",function(c){a.call(b,c)})}):e(a)&&this.el.fireEvent("click");return this},live:function(a,d){var c=this.selector;h(d)&&b.$("body").el.addEvent(a+":relay("+c+")",function(a,b){d.call(b,a)})},match:function(a){return this.el.match(a)},parent:function(){return b.$(this.el.getParent())},find:function(a){return b.$(this.el.getElements(a))},
closest:function(a){return b.$(this.el.getParent(a))},descendants:function(){return this.find("*")},tag:function(){return this.el[0].tagName},submit:function(){this.el[0].submit();return this},create:function(a){this.el=A(a)}},Prototype:{text:function(a){if(e(a))return this.el[0].innerHTML;this.each(function(b,c){$(c).update(a)});return this},html:function(a){return this.text(a)},val:function(a){return this.attr("value",a)},attr:function(a,b){if(e(b))return this.el[0].readAttribute(a);this.each(function(c,
e){$(e).writeAttribute(a,b)});return this},append:function(a){this.each(function(b,c){a.el?a.each(function(a,b){$(c).appendChild(b)}):y(a)&&$(c).appendChild(a)});return this},remove:function(){this.each(function(a,b){$(b).remove()});return this},addClass:function(a){this.each(function(b,c){$(c).addClassName(a)});return this},removeClass:function(a){this.each(function(b,c){$(c).removeClassName(a)});return this},each:function(a){h(a)&&b.each(this.el,function(b,c,e){a.call(c,c,b,e)});return this},click:function(a){h(a)?
this.each(function(b,c){$(c).observe("click",function(b){a.call(c,b)})}):e(a)&&this.each(function(a,b){$(b).fire("click")});return this},live:function(a,b){if(h(b)){var c=this.selector;f.observe(a,function(a,e){e===A(a).findElement(c)&&b.call(e,a)})}},parent:function(){return b.$(this.el.up())},find:function(a){return b.$(this.el.getElementsBySelector(a))},closest:function(a){return b.$(this.el.up(a))},descendants:function(){return b.$(this.el.descendants())},tag:function(){return this.el.tagName},
submit:function(){this.el[0].submit()},create:function(a){k(a,s)?this.el=A(a):y(a)&&(this.el=[a])}},jQuery:{passthrough:function(a,b){if(e(b))return this.el[a]();this.el[a](b);return this},text:function(a){return this.passthrough("text",a)},html:function(a){return this.passthrough("html",a)},val:function(a){return this.passthrough("val",a)},append:function(a){this.el.append(a.el||a);return this},attr:function(a,b){if(e(b))return this.el.attr(a);this.el.attr(a,b);return this},remove:function(){this.el.remove();
return this},addClass:function(a){this.el.addClass(a);return this},removeClass:function(a){this.el.removeClass(a);return this},each:function(a){return this.passthrough("each",a)},click:function(a){return this.passthrough("click",a)},live:function(a,b){A(f).delegate(this.selector,a,b);return this},parent:function(){return b.$(this.el.parent())},find:function(a){return b.$(this.el.find(a))},closest:function(a){return b.$(this.el.closest(a))},tag:function(){return this.el[0].tagName},descendants:function(){return b.$(this.el.find("*"))},
submit:function(){return this.el.submit()},create:function(a){this.el=A(a)}}});b.ELEMENT._=b.ELEMENT.prototype;b.ready(b.setupViewTool);b.ready(function(){b.bindOutlets({total:function(){return b.toCurrency(b.total())},quantity:function(){return b.quantity()},items:function(a){b.writeCart(a)},tax:function(){return b.toCurrency(b.tax())},taxRate:function(){return b.taxRate().toFixed()},shipping:function(){return b.toCurrency(b.shipping())},grandTotal:function(){return b.toCurrency(b.grandTotal())}});
b.bindInputs([{selector:"checkout",event:"click",callback:function(){b.checkout()}},{selector:"empty",event:"click",callback:function(){b.empty()}},{selector:"increment",event:"click",callback:function(){b.find(b.$(this).closest(".itemRow").attr("id").split("_")[1]).increment();b.update()}},{selector:"decrement",event:"click",callback:function(){b.find(b.$(this).closest(".itemRow").attr("id").split("_")[1]).decrement();b.update()}},{selector:"remove",event:"click",callback:function(){b.find(b.$(this).closest(".itemRow").attr("id").split("_")[1]).remove()}},
{selector:"input",event:"change",callback:function(){var a=b.$(this),d=a.parent(),c=d.attr("class").split(" ");b.each(c,function(c){c.match(/item-.+/i)&&(c=c.split("-")[1],b.find(d.closest(".itemRow").attr("id").split("_")[1]).set(c,a.val()),b.update())})}},{selector:"shelfItem .item_add",event:"click",callback:function(){var a={};b.$(this).closest("."+x+"_shelfItem").descendants().each(function(d,c){var e=b.$(c);e.attr("class")&&e.attr("class").match(/item_.+/)&&!e.attr("class").match(/item_add/)&&
b.each(e.attr("class").split(" "),function(b){var c,d;if(b.match(/item_.+/)){b=b.split("_")[1];c="";switch(e.tag().toLowerCase()){case "input":case "textarea":case "select":d=e.attr("type");if(!d||("checkbox"===d.toLowerCase()||"radio"===d.toLowerCase())&&e.attr("checked")||"text"===d.toLowerCase()||"number"===d.toLowerCase())c=e.val();break;case "img":c=e.attr("src");break;default:c=e.text()}null!==c&&""!==c&&(a[b.toLowerCase()]=a[b.toLowerCase()]?a[b.toLowerCase()]+", "+c:c)}})});b.add(a)}}])});
f.addEventListener?p.DOMContentLoaded=function(){f.removeEventListener("DOMContentLoaded",DOMContentLoaded,!1);b.init()}:f.attachEvent&&(p.DOMContentLoaded=function(){"complete"===f.readyState&&(f.detachEvent("onreadystatechange",DOMContentLoaded),b.init())});(function(){if("complete"===f.readyState)return setTimeout(b.init,1);if(f.addEventListener)f.addEventListener("DOMContentLoaded",DOMContentLoaded,!1),p.addEventListener("load",b.init,!1);else if(f.attachEvent){f.attachEvent("onreadystatechange",
DOMContentLoaded);p.attachEvent("onload",b.init);var a=!1;try{a=null===p.frameElement}catch(d){}f.documentElement.doScroll&&a&&F()}})();return b};p.simpleCart=C()})(window,document);var JSON;JSON||(JSON={});
(function(){function p(e){return 10>e?"0"+e:e}function f(f){e.lastIndex=0;return e.test(f)?'"'+f.replace(e,function(e){var f=C[e];return"string"===typeof f?f:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+f+'"'}function s(e,k){var t,n,r,p,z=h,v,l=k[e];l&&"object"===typeof l&&"function"===typeof l.toJSON&&(l=l.toJSON(e));"function"===typeof q&&(l=q.call(k,e,l));switch(typeof l){case "string":return f(l);case "number":return isFinite(l)?String(l):"null";case "boolean":case "null":return String(l);
case "object":if(!l)return"null";h+=y;v=[];if("[object Array]"===Object.prototype.toString.apply(l)){p=l.length;for(t=0;t<p;t+=1)v[t]=s(t,l)||"null";r=0===v.length?"[]":h?"[\n"+h+v.join(",\n"+h)+"\n"+z+"]":"["+v.join(",")+"]";h=z;return r}if(q&&"object"===typeof q)for(p=q.length,t=0;t<p;t+=1)"string"===typeof q[t]&&(n=q[t],(r=s(n,l))&&v.push(f(n)+(h?": ":":")+r));else for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(r=s(n,l))&&v.push(f(n)+(h?": ":":")+r);r=0===v.length?"{}":h?"{\n"+h+v.join(",\n"+
h)+"\n"+z+"}":"{"+v.join(",")+"}";h=z;return r}}"function"!==typeof Date.prototype.toJSON&&(Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+p(this.getUTCMonth()+1)+"-"+p(this.getUTCDate())+"T"+p(this.getUTCHours())+":"+p(this.getUTCMinutes())+":"+p(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()});var k=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
e=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,h,y,C={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},q;"function"!==typeof JSON.stringify&&(JSON.stringify=function(e,f,k){var n;y=h="";if("number"===typeof k)for(n=0;n<k;n+=1)y+=" ";else"string"===typeof k&&(y=k);if((q=f)&&"function"!==typeof f&&("object"!==typeof f||"number"!==typeof f.length))throw Error("JSON.stringify");return s("",{"":e})});
"function"!==typeof JSON.parse&&(JSON.parse=function(e,f){function h(e,k){var n,p,l=e[k];if(l&&"object"===typeof l)for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(p=h(l,n),void 0!==p?l[n]=p:delete l[n]);return f.call(e,k,l)}var n;e=String(e);k.lastIndex=0;k.test(e)&&(e=e.replace(k,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\],:{}\s]*$/.test(e.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return n=eval("("+e+")"),"function"===typeof f?h({"":n},""):n;throw new SyntaxError("JSON.parse");})})();
(function(){if(!this.localStorage)if(this.globalStorage)try{this.localStorage=this.globalStorage}catch(p){}else{var f=document.createElement("div");f.style.display="none";document.getElementsByTagName("head")[0].appendChild(f);if(f.addBehavior){f.addBehavior("#default#userdata");var s=this.localStorage={length:0,setItem:function(e,h){f.load("localStorage");e=k(e);f.getAttribute(e)||this.length++;f.setAttribute(e,h);f.save("localStorage")},getItem:function(e){f.load("localStorage");e=k(e);return f.getAttribute(e)},
removeItem:function(e){f.load("localStorage");e=k(e);f.removeAttribute(e);f.save("localStorage");this.length=0},clear:function(){f.load("localStorage");for(var e=0;attr=f.XMLDocument.documentElement.attributes[e++];)f.removeAttribute(attr.name);f.save("localStorage");this.length=0},key:function(e){f.load("localStorage");return f.XMLDocument.documentElement.attributes[e]}},k=function(e){return e.replace(/[^-._0-9A-Za-z\xb7\xc0-\xd6\xd8-\xf6\xf8-\u037d\u37f-\u1fff\u200c-\u200d\u203f\u2040\u2070-\u218f]/g,
"-")};f.load("localStorage");s.length=f.XMLDocument.documentElement.attributes.length}}})();

/*! Theia Sticky Sidebar | v1.7.0 - https://github.com/WeCodePixels/theia-sticky-sidebar */
(function($){$.fn.theiaStickySidebar=function(options){var defaults={'containerSelector':'','additionalMarginTop':0,'additionalMarginBottom':0,'updateSidebarHeight':true,'minWidth':0,'disableOnResponsiveLayouts':true,'sidebarBehavior':'modern','defaultPosition':'relative','namespace':'TSS'};options=$.extend(defaults,options);options.additionalMarginTop=parseInt(options.additionalMarginTop)||0;options.additionalMarginBottom=parseInt(options.additionalMarginBottom)||0;tryInitOrHookIntoEvents(options,this);function tryInitOrHookIntoEvents(options,$that){var success=tryInit(options,$that);if(!success){console.log('TSS: Body width smaller than options.minWidth. Init is delayed.');$(document).on('scroll.'+options.namespace,function(options,$that){return function(evt){var success=tryInit(options,$that);if(success){$(this).unbind(evt)}}}(options,$that));$(window).on('resize.'+options.namespace,function(options,$that){return function(evt){var success=tryInit(options,$that);if(success){$(this).unbind(evt)}}}(options,$that))}}function tryInit(options,$that){if(options.initialized===true){return true}if($('body').width()<options.minWidth){return false}init(options,$that);return true}function init(options,$that){options.initialized=true;var existingStylesheet=$('#theia-sticky-sidebar-stylesheet-'+options.namespace);if(existingStylesheet.length===0){$('head').append($('<style id="theia-sticky-sidebar-stylesheet-'+options.namespace+'">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style>'))}$that.each(function(){var o={};o.sidebar=$(this);o.options=options||{};o.container=$(o.options.containerSelector);if(o.container.length==0){o.container=o.sidebar.parent()}o.sidebar.parents().css('-webkit-transform','none');o.sidebar.css({'position':o.options.defaultPosition,'overflow':'visible','-webkit-box-sizing':'border-box','-moz-box-sizing':'border-box','box-sizing':'border-box'});o.stickySidebar=o.sidebar.find('.theiaStickySidebar');if(o.stickySidebar.length==0){var javaScriptMIMETypes=/(?:text|application)\/(?:x-)?(?:javascript|ecmascript)/i;o.sidebar.find('script').filter(function(index,script){return script.type.length===0||script.type.match(javaScriptMIMETypes)}).remove();o.stickySidebar=$('<div>').addClass('theiaStickySidebar').append(o.sidebar.children());o.sidebar.append(o.stickySidebar)}o.marginBottom=parseInt(o.sidebar.css('margin-bottom'));o.paddingTop=parseInt(o.sidebar.css('padding-top'));o.paddingBottom=parseInt(o.sidebar.css('padding-bottom'));var collapsedTopHeight=o.stickySidebar.offset().top;var collapsedBottomHeight=o.stickySidebar.outerHeight();o.stickySidebar.css('padding-top',1);o.stickySidebar.css('padding-bottom',1);collapsedTopHeight-=o.stickySidebar.offset().top;collapsedBottomHeight=o.stickySidebar.outerHeight()-collapsedBottomHeight-collapsedTopHeight;if(collapsedTopHeight==0){o.stickySidebar.css('padding-top',0);o.stickySidebarPaddingTop=0}else{o.stickySidebarPaddingTop=1}if(collapsedBottomHeight==0){o.stickySidebar.css('padding-bottom',0);o.stickySidebarPaddingBottom=0}else{o.stickySidebarPaddingBottom=1}o.previousScrollTop=null;o.fixedScrollTop=0;resetSidebar();o.onScroll=function(o){if(!o.stickySidebar.is(":visible")){return}if($('body').width()<o.options.minWidth){resetSidebar();return}if(o.options.disableOnResponsiveLayouts){var sidebarWidth=o.sidebar.outerWidth(o.sidebar.css('float')=='none');if(sidebarWidth+50>o.container.width()){resetSidebar();return}}var scrollTop=$(document).scrollTop();var position='static';if(scrollTop>=o.sidebar.offset().top+(o.paddingTop-o.options.additionalMarginTop)){var offsetTop=o.paddingTop+options.additionalMarginTop;var offsetBottom=o.paddingBottom+o.marginBottom+options.additionalMarginBottom;var containerTop=o.sidebar.offset().top;var containerBottom=o.sidebar.offset().top+getClearedHeight(o.container);var windowOffsetTop=0+options.additionalMarginTop;var windowOffsetBottom;var sidebarSmallerThanWindow=(o.stickySidebar.outerHeight()+offsetTop+offsetBottom)<$(window).height();if(sidebarSmallerThanWindow){windowOffsetBottom=windowOffsetTop+o.stickySidebar.outerHeight()}else{windowOffsetBottom=$(window).height()-o.marginBottom-o.paddingBottom-options.additionalMarginBottom}var staticLimitTop=containerTop-scrollTop+o.paddingTop;var staticLimitBottom=containerBottom-scrollTop-o.paddingBottom-o.marginBottom;var top=o.stickySidebar.offset().top-scrollTop;var scrollTopDiff=o.previousScrollTop-scrollTop;if(o.stickySidebar.css('position')=='fixed'){if(o.options.sidebarBehavior=='modern'){top+=scrollTopDiff}}if(o.options.sidebarBehavior=='stick-to-top'){top=options.additionalMarginTop}if(o.options.sidebarBehavior=='stick-to-bottom'){top=windowOffsetBottom-o.stickySidebar.outerHeight()}if(scrollTopDiff>0){top=Math.min(top,windowOffsetTop)}else{top=Math.max(top,windowOffsetBottom-o.stickySidebar.outerHeight())}top=Math.max(top,staticLimitTop);top=Math.min(top,staticLimitBottom-o.stickySidebar.outerHeight());var sidebarSameHeightAsContainer=o.container.height()==o.stickySidebar.outerHeight();if(!sidebarSameHeightAsContainer&&top==windowOffsetTop){position='fixed'}else if(!sidebarSameHeightAsContainer&&top==windowOffsetBottom-o.stickySidebar.outerHeight()){position='fixed'}else if(scrollTop+top-o.sidebar.offset().top-o.paddingTop<=options.additionalMarginTop){position='static'}else{position='absolute'}}if(position=='fixed'){var scrollLeft=$(document).scrollLeft();o.stickySidebar.css({'position':'fixed','width':getWidthForObject(o.stickySidebar)+'px','transform':'translateY('+top+'px)','left':(o.sidebar.offset().left+parseInt(o.sidebar.css('padding-left'))-scrollLeft)+'px','top':'0px'})}else if(position=='absolute'){var css={};if(o.stickySidebar.css('position')!='absolute'){css.position='absolute';css.transform='translateY('+(scrollTop+top-o.sidebar.offset().top-o.stickySidebarPaddingTop-o.stickySidebarPaddingBottom)+'px)';css.top='0px'}css.width=getWidthForObject(o.stickySidebar)+'px';css.left='';o.stickySidebar.css(css)}else if(position=='static'){resetSidebar()}if(position!='static'){if(o.options.updateSidebarHeight==true){o.sidebar.css({'min-height':o.stickySidebar.outerHeight()+o.stickySidebar.offset().top-o.sidebar.offset().top+o.paddingBottom})}}o.previousScrollTop=scrollTop};o.onScroll(o);$(document).on('scroll.'+o.options.namespace,function(o){return function(){o.onScroll(o)}}(o));$(window).on('resize.'+o.options.namespace,function(o){return function(){o.stickySidebar.css({'position':'static'});o.onScroll(o)}}(o));if(typeof ResizeSensor!=='undefined'){new ResizeSensor(o.stickySidebar[0],function(o){return function(){o.onScroll(o)}}(o))}function resetSidebar(){o.fixedScrollTop=0;o.sidebar.css({'min-height':'1px'});o.stickySidebar.css({'position':'static','width':'','transform':'none'})}function getClearedHeight(e){var height=e.height();e.children().each(function(){height=Math.max(height,$(this).height())});return height}})}function getWidthForObject(object){var width;try{width=object[0].getBoundingClientRect().width}catch(err){}if(typeof width==="undefined"){width=object.width()}return width}return this}})(jQuery);

$(document).ready(function(){simpleCart({checkout:{type:paymentOption,email:paypalMail}});simpleCart.currency(currencyOption);});

$(document).ready(function(){simpleCart({cartColumns:[{view:'image',attr:'thumb',label:false},{attr:"name",label:false},{attr:"price",label:false,view:'currency'},{view:"decrement",label:false,text:"<i class='fa fa-minus'></i>"},{attr:"quantity",label:false},{view:"increment",label:false,text:"<i class='fa fa-plus'></i>"},{attr:"total",label:false,view:'currency'},{view:"remove",text:"<i class='fa fa-times'></i>",label:false},]});});
//]]>
</script>

<!-- Theme Functions JS -->
<script type='text/javascript'>
//<![CDATA[
var _3Oz8os= "\x65\x76\x61\x6c\x28\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x70\x2c\x61\x2c\x63\x2c\x6b\x2c\x65\x2c\x64\x29\x7b\x65\x3d\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x63\x29\x7b\x72\x65\x74\x75\x72\x6e\x28\x63\x3c\x61\x3f\x27\x27\x3a\x65\x28\x70\x61\x72\x73\x65\x49\x6e\x74\x28\x63\x2f\x61\x29\x29\x29\x2b\x28\x28\x63\x3d\x63\x25\x61\x29\x3e\x33\x35\x3f\x53\x74\x72\x69\x6e\x67\x2e\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65\x28\x63\x2b\x32\x39\x29\x3a\x63\x2e\x74\x6f\x53\x74\x72\x69\x6e\x67\x28\x33\x36\x29\x29\x7d\x3b\x69\x66\x28\x21\x27\x27\x2e\x72\x65\x70\x6c\x61\x63\x65\x28\x2f\x5e\x2f\x2c\x53\x74\x72\x69\x6e\x67\x29\x29\x7b\x77\x68\x69\x6c\x65\x28\x63\x2d\x2d\x29\x7b\x64\x5b\x65\x28\x63\x29\x5d\x3d\x6b\x5b\x63\x5d\x7c\x7c\x65\x28\x63\x29\x7d\x6b\x3d\x5b\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x65\x29\x7b\x72\x65\x74\x75\x72\x6e\x20\x64\x5b\x65\x5d\x7d\x5d\x3b\x65\x3d\x66\x75\x6e\x63\x74\x69\x6f\x6e\x28\x29\x7b\x72\x65\x74\x75\x72\x6e\x27\x5c\x5c\x77\x2b\x27\x7d\x3b\x63\x3d\x31\x7d\x3b\x77\x68\x69\x6c\x65\x28\x63\x2d\x2d\x29\x7b\x69\x66\x28\x6b\x5b\x63\x5d\x29\x7b\x70\x3d\x70\x2e\x72\x65\x70\x6c\x61\x63\x65\x28\x6e\x65\x77\x20\x52\x65\x67\x45\x78\x70\x28\x27\x5c\x5c\x62\x27\x2b\x65\x28\x63\x29\x2b\x27\x5c\x5c\x62\x27\x2c\x27\x67\x27\x29\x2c\x6b\x5b\x63\x5d\x29\x7d\x7d\x72\x65\x74\x75\x72\x6e\x20\x70\x7d\x28\x27\x39\x47\x28\x36\x78\x28\x70\x2c\x61\x2c\x63\x2c\x6b\x2c\x65\x2c\x64\x29\x7b\x65\x3d\x36\x78\x28\x63\x29\x7b\x36\x79\x28\x63\x3c\x61\x3f\x5c\x27\x5c\x27\x3a\x65\x28\x38\x7a\x28\x63\x2f\x61\x29\x29\x29\x2b\x28\x28\x63\x3d\x63\x25\x61\x29\x3e\x33\x35\x3f\x38\x41\x2e\x38\x42\x28\x63\x2b\x32\x39\x29\x3a\x63\x2e\x38\x43\x28\x33\x36\x29\x29\x7d\x3b\x38\x44\x28\x63\x2d\x2d\x29\x7b\x36\x7a\x28\x6b\x5b\x63\x5d\x29\x7b\x70\x3d\x70\x2e\x38\x45\x28\x38\x46\x20\x38\x79\x28\x5c\x27\x5c\x5c\x5c\x5c\x62\x5c\x27\x2b\x65\x28\x63\x29\x2b\x5c\x27\x5c\x5c\x5c\x5c\x62\x5c\x27\x2c\x5c\x27\x67\x5c\x27\x29\x2c\x6b\x5b\x63\x5d\x29\x7d\x7d\x36\x79\x20\x70\x7d\x28\x5c\x27\x7a\x20\x61\x3d\x5b\x22\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4a\x22\x2c\x22\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x4b\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x45\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x31\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x78\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x32\x47\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x78\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x32\x6b\x5c\x5c\x5c\x5c\x32\x74\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x32\x4b\x5c\x5c\x5c\x5c\x31\x74\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x31\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x78\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x78\x5c\x5c\x5c\x5c\x32\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x32\x6a\x5c\x5c\x5c\x5c\x32\x6a\x5c\x5c\x5c\x5c\x31\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x78\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x78\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x33\x58\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x34\x77\x5c\x5c\x5c\x5c\x31\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x32\x42\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x49\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x68\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x7a\x5c\x5c\x5c\x5c\x31\x43\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4a\x22\x2c\x22\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x32\x4b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x32\x41\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x22\x2c\x22\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x33\x42\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x4a\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x33\x55\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x33\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x33\x55\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x33\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x52\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4a\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x31\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x32\x6b\x5c\x5c\x5c\x5c\x31\x74\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x32\x74\x5c\x5c\x5c\x5c\x31\x74\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x32\x74\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x33\x56\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x33\x73\x5c\x5c\x5c\x5c\x32\x45\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x46\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x33\x73\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x32\x41\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x31\x46\x5c\x5c\x5c\x5c\x33\x46\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x32\x4b\x5c\x5c\x5c\x5c\x34\x79\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x34\x78\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x32\x6a\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x34\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x31\x46\x5c\x5c\x5c\x5c\x32\x6a\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x33\x45\x5c\x5c\x5c\x5c\x32\x6b\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x71\x5c\x5c\x5c\x5c\x31\x67\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x46\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x33\x44\x5c\x5c\x5c\x5c\x32\x6b\x5c\x5c\x5c\x5c\x32\x47\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x31\x63\x5c\x5c\x5c\x5c\x33\x56\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x4b\x5c\x5c\x5c\x5c\x57\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x74\x5c\x5c\x5c\x5c\x31\x74\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x67\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x22\x2c\x22\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x45\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x79\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x45\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x79\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x33\x44\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x45\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x79\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x45\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x79\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x45\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x33\x47\x5c\x5c\x5c\x5c\x31\x79\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x31\x45\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x79\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x32\x42\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x32\x42\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4a\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6d\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x4a\x22\x2c\x22\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x33\x42\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x67\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x46\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x34\x66\x5c\x5c\x5c\x5c\x33\x45\x5c\x5c\x5c\x5c\x31\x66\x22\x2c\x22\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x32\x41\x5c\x5c\x5c\x5c\x79\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x74\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x43\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x7a\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x43\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x43\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x31\x7a\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x43\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x31\x6b\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x4e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x31\x4b\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x33\x78\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x33\x46\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x32\x45\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x31\x7a\x5c\x5c\x5c\x5c\x31\x43\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x4f\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x67\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x48\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x44\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x31\x66\x5c\x5c\x5c\x5c\x33\x47\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x22\x2c\x22\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x42\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x31\x74\x5c\x5c\x5c\x5c\x72\x5c\x5c\x5c\x5c\x41\x5c\x5c\x5c\x5c\x78\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x41\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x22\x2c\x22\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6b\x22\x2c\x22\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x31\x4b\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x52\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x47\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x6b\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x70\x22\x2c\x22\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x73\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x31\x49\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x73\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x31\x61\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x31\x64\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x66\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x75\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6e\x22\x2c\x22\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x31\x4b\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x32\x6d\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x31\x68\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x33\x78\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x22\x2c\x22\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x32\x63\x5c\x5c\x5c\x5c\x6f\x5c\x5c\x5c\x5c\x4d\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x2c\x22\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x4e\x22\x2c\x22\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x4a\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6e\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x79\x5c\x5c\x5c\x5c\x65\x5c\x5c\x5c\x5c\x71\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x63\x22\x2c\x22\x5c\x5c\x5c\x5c\x74\x5c\x5c\x5c\x5c\x77\x5c\x5c\x5c\x5c\x67\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x76\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x6d\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x64\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x69\x5c\x5c\x5c\x5c\x70\x5c\x5c\x5c\x5c\x68\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x6c\x5c\x5c\x5c\x5c\x62\x5c\x5c\x5c\x5c\x6a\x5c\x5c\x5c\x5c\x63\x5c\x5c\x5c\x5c\x64\x22\x5d\x3b\x24\x28\x31\x48\x29\x5b\x61\x5b\x35\x5d\x5d\x28\x46\x28\x29\x7b\x34\x64\x28\x46\x28\x29\x7b\x43\x28\x21\x24\x28\x61\x5b\x31\x5d\x29\x5b\x61\x5b\x30\x5d\x5d\x29\x7b\x32\x76\x5b\x61\x5b\x33\x5d\x5d\x5b\x61\x5b\x32\x5d\x5d\x3d\x61\x5b\x34\x5d\x7d\x7d\x2c\x34\x7a\x29\x7d\x29\x3b\x32\x76\x5b\x61\x5b\x36\x5d\x5d\x3d\x46\x28\x29\x7b\x7a\x20\x31\x42\x3d\x31\x48\x5b\x61\x5b\x38\x5d\x5d\x28\x61\x5b\x37\x5d\x29\x3b\x31\x42\x5b\x61\x5b\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x2c\x61\x5b\x34\x5d\x29\x3b\x31\x42\x5b\x61\x5b\x39\x5d\x5d\x28\x61\x5b\x31\x30\x5d\x2c\x61\x5b\x31\x31\x5d\x29\x3b\x31\x42\x5b\x61\x5b\x39\x5d\x5d\x28\x61\x5b\x31\x32\x5d\x2c\x61\x5b\x31\x33\x5d\x29\x3b\x31\x42\x5b\x61\x5b\x39\x5d\x5d\x28\x61\x5b\x31\x34\x5d\x2c\x61\x5b\x31\x35\x5d\x29\x3b\x31\x42\x5b\x61\x5b\x31\x36\x5d\x5d\x3d\x61\x5b\x31\x37\x5d\x7d\x3b\x24\x28\x46\x28\x29\x7b\x24\x28\x61\x5b\x34\x32\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x31\x72\x3d\x24\x28\x4b\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x30\x5d\x29\x5b\x61\x5b\x31\x39\x5d\x5d\x28\x61\x5b\x31\x38\x5d\x29\x2c\x32\x77\x3d\x31\x72\x5b\x61\x5b\x30\x5d\x5d\x3b\x32\x6f\x28\x7a\x20\x45\x3d\x30\x3b\x45\x3c\x32\x77\x3b\x45\x2b\x2b\x29\x7b\x7a\x20\x31\x4c\x3d\x31\x72\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x45\x29\x2c\x31\x58\x3d\x31\x4c\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x43\x28\x31\x58\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x30\x29\x21\x3d\x3d\x61\x5b\x32\x35\x5d\x29\x7b\x7a\x20\x33\x64\x3d\x31\x72\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x45\x2b\x31\x29\x2c\x33\x62\x3d\x33\x64\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x43\x28\x33\x62\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x30\x29\x3d\x3d\x3d\x61\x5b\x32\x35\x5d\x29\x7b\x7a\x20\x32\x70\x3d\x31\x4c\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x3b\x32\x70\x5b\x61\x5b\x32\x38\x5d\x5d\x28\x61\x5b\x32\x37\x5d\x29\x7d\x7d\x3b\x43\x28\x31\x58\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x30\x29\x3d\x3d\x3d\x61\x5b\x32\x35\x5d\x29\x7b\x31\x4c\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x58\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x61\x5b\x32\x35\x5d\x2c\x61\x5b\x32\x39\x5d\x29\x29\x3b\x31\x4c\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x32\x70\x5b\x61\x5b\x31\x39\x5d\x5d\x28\x61\x5b\x33\x31\x5d\x29\x29\x7d\x7d\x3b\x32\x6f\x28\x7a\x20\x45\x3d\x30\x3b\x45\x3c\x32\x77\x3b\x45\x2b\x2b\x29\x7b\x7a\x20\x31\x47\x3d\x31\x72\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x45\x29\x2c\x31\x5a\x3d\x31\x47\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x43\x28\x31\x5a\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x30\x29\x21\x3d\x3d\x61\x5b\x32\x35\x5d\x29\x7b\x7a\x20\x33\x6b\x3d\x31\x72\x5b\x61\x5b\x32\x32\x5d\x5d\x28\x45\x2b\x31\x29\x2c\x33\x66\x3d\x33\x6b\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x43\x28\x33\x66\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x30\x29\x3d\x3d\x3d\x61\x5b\x32\x35\x5d\x29\x7b\x7a\x20\x32\x51\x3d\x31\x47\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x3b\x32\x51\x5b\x61\x5b\x32\x38\x5d\x5d\x28\x61\x5b\x33\x33\x5d\x29\x7d\x7d\x3b\x43\x28\x31\x5a\x5b\x61\x5b\x32\x34\x5d\x5d\x28\x30\x29\x3d\x3d\x3d\x61\x5b\x32\x35\x5d\x29\x7b\x31\x47\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x5a\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x61\x5b\x32\x35\x5d\x2c\x61\x5b\x32\x39\x5d\x29\x29\x3b\x31\x47\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x32\x51\x5b\x61\x5b\x31\x39\x5d\x5d\x28\x61\x5b\x33\x34\x5d\x29\x29\x7d\x7d\x3b\x24\x28\x61\x5b\x33\x38\x5d\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x61\x5b\x33\x37\x5d\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x33\x35\x5d\x29\x3b\x24\x28\x61\x5b\x34\x30\x5d\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x33\x39\x5d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x35\x5d\x29\x5b\x61\x5b\x34\x34\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x32\x5d\x5d\x28\x61\x5b\x34\x33\x5d\x29\x3b\x24\x28\x61\x5b\x34\x37\x5d\x29\x5b\x61\x5b\x32\x38\x5d\x5d\x28\x61\x5b\x34\x36\x5d\x29\x3b\x24\x28\x61\x5b\x35\x37\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x55\x3d\x44\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x29\x5b\x61\x5b\x34\x38\x5d\x5d\x28\x29\x2c\x49\x3d\x55\x5b\x61\x5b\x35\x30\x5d\x5d\x28\x29\x2c\x5a\x3d\x55\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x51\x3d\x5a\x5b\x30\x5d\x3b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x33\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x2c\x61\x5b\x35\x35\x5d\x2b\x51\x2b\x61\x5b\x35\x36\x5d\x2b\x32\x6c\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x36\x33\x5d\x29\x5b\x61\x5b\x36\x32\x5d\x5d\x28\x61\x5b\x35\x38\x5d\x2c\x46\x28\x29\x7b\x24\x28\x61\x5b\x36\x31\x5d\x29\x5b\x61\x5b\x36\x30\x5d\x5d\x28\x61\x5b\x35\x39\x5d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x41\x5d\x29\x5b\x61\x5b\x36\x32\x5d\x5d\x28\x61\x5b\x35\x38\x5d\x2c\x46\x28\x44\x29\x7b\x43\x28\x24\x28\x4b\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x36\x34\x5d\x5d\x28\x61\x5b\x33\x35\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x36\x35\x5d\x5d\x28\x29\x3b\x43\x28\x21\x24\x28\x4b\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x36\x34\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x5b\x61\x5b\x31\x39\x5d\x5d\x28\x61\x5b\x36\x38\x5d\x29\x5b\x61\x5b\x36\x37\x5d\x5d\x28\x32\x50\x29\x7d\x4c\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x34\x74\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x36\x39\x5d\x29\x5b\x61\x5b\x36\x37\x5d\x5d\x28\x32\x50\x29\x7d\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x34\x73\x5d\x29\x5b\x61\x5b\x36\x32\x5d\x5d\x28\x61\x5b\x35\x38\x5d\x2c\x46\x28\x29\x7b\x24\x28\x61\x5b\x33\x67\x5d\x29\x5b\x61\x5b\x33\x6e\x5d\x5d\x28\x32\x67\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x6d\x5d\x29\x5b\x61\x5b\x34\x76\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x72\x5d\x29\x5b\x61\x5b\x36\x32\x5d\x5d\x28\x61\x5b\x35\x38\x5d\x2c\x46\x28\x29\x7b\x24\x28\x61\x5b\x33\x67\x5d\x29\x5b\x61\x5b\x33\x65\x5d\x5d\x28\x32\x67\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x6d\x5d\x29\x5b\x61\x5b\x34\x70\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x6d\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x33\x6c\x3d\x44\x5b\x61\x5b\x32\x59\x5d\x5d\x28\x61\x5b\x34\x6e\x5d\x29\x3b\x24\x5b\x61\x5b\x32\x65\x5d\x5d\x28\x7b\x32\x62\x3a\x61\x5b\x34\x6f\x5d\x2b\x33\x6c\x2b\x61\x5b\x34\x75\x5d\x2c\x32\x61\x3a\x61\x5b\x32\x66\x5d\x2c\x33\x57\x3a\x61\x5b\x33\x52\x5d\x2c\x31\x56\x3a\x46\x28\x32\x5a\x29\x7b\x7a\x20\x32\x56\x3d\x32\x5a\x5b\x61\x5b\x33\x79\x5d\x5d\x5b\x61\x5b\x32\x44\x5d\x5d\x5b\x61\x5b\x31\x4e\x5d\x5d\x2c\x32\x4c\x3d\x24\x28\x61\x5b\x32\x48\x5d\x29\x5b\x61\x5b\x31\x77\x5d\x5d\x28\x32\x56\x29\x2c\x31\x6a\x3d\x32\x4c\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x46\x5d\x29\x2c\x31\x69\x3d\x32\x4c\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x78\x5d\x29\x3b\x43\x28\x31\x6a\x5b\x61\x5b\x30\x5d\x5d\x3e\x30\x29\x7b\x7a\x20\x54\x3d\x31\x6a\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x2c\x56\x3d\x54\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6e\x3d\x56\x5b\x31\x5d\x3b\x44\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x6f\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x6e\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x7d\x3b\x43\x28\x31\x69\x5b\x61\x5b\x30\x5d\x5d\x3e\x30\x29\x7b\x7a\x20\x54\x3d\x31\x69\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x2c\x56\x3d\x54\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6c\x3d\x56\x5b\x31\x5d\x3b\x44\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x69\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x6c\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x7d\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x70\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x31\x6a\x3d\x44\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x46\x5d\x29\x2c\x31\x69\x3d\x44\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x78\x5d\x29\x3b\x43\x28\x31\x6a\x5b\x61\x5b\x30\x5d\x5d\x3e\x30\x29\x7b\x7a\x20\x54\x3d\x31\x6a\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x2c\x56\x3d\x54\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6e\x3d\x56\x5b\x31\x5d\x3b\x24\x28\x61\x5b\x33\x68\x5d\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x6f\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x6e\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x3b\x31\x6a\x5b\x61\x5b\x31\x57\x5d\x5d\x28\x29\x7d\x3b\x43\x28\x31\x69\x5b\x61\x5b\x30\x5d\x5d\x3e\x30\x29\x7b\x7a\x20\x54\x3d\x31\x69\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x2c\x56\x3d\x54\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6c\x3d\x56\x5b\x31\x5d\x3b\x24\x28\x61\x5b\x33\x68\x5d\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x69\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x6c\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x36\x36\x5d\x29\x3b\x31\x69\x5b\x61\x5b\x31\x57\x5d\x5d\x28\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x34\x42\x5d\x29\x5b\x61\x5b\x35\x38\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x3b\x44\x5b\x61\x5b\x36\x30\x5d\x5d\x28\x61\x5b\x33\x6a\x5d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x70\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x51\x5d\x29\x5b\x61\x5b\x32\x53\x5d\x5d\x28\x29\x3b\x24\x28\x4b\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x34\x68\x5d\x29\x5b\x61\x5b\x36\x36\x5d\x5d\x28\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x59\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x2c\x46\x28\x44\x2c\x53\x29\x7b\x31\x6f\x20\x53\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x53\x2c\x53\x2b\x61\x5b\x35\x36\x5d\x2b\x32\x6c\x29\x7d\x29\x3b\x24\x28\x61\x5b\x33\x5a\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x2c\x46\x28\x44\x2c\x45\x29\x7b\x45\x3d\x45\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x61\x5b\x34\x61\x5d\x2c\x61\x5b\x34\x6b\x5d\x29\x3b\x45\x3d\x45\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x61\x5b\x34\x62\x5d\x2c\x61\x5b\x34\x69\x5d\x29\x3b\x31\x6f\x20\x45\x7d\x29\x3b\x24\x28\x61\x5b\x34\x6a\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x34\x67\x5d\x2c\x61\x5b\x34\x63\x5d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x34\x65\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x33\x61\x3d\x24\x28\x61\x5b\x34\x71\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x29\x2c\x32\x54\x3d\x24\x28\x61\x5b\x34\x4e\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x29\x3b\x24\x5b\x61\x5b\x32\x65\x5d\x5d\x28\x7b\x32\x62\x3a\x33\x61\x2c\x32\x61\x3a\x61\x5b\x32\x66\x5d\x2c\x31\x56\x3a\x46\x28\x33\x63\x29\x7b\x7a\x20\x31\x62\x3d\x24\x28\x33\x63\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x57\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x24\x28\x61\x5b\x35\x58\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x62\x29\x7d\x7d\x29\x3b\x24\x5b\x61\x5b\x32\x65\x5d\x5d\x28\x7b\x32\x62\x3a\x32\x54\x2c\x32\x61\x3a\x61\x5b\x32\x66\x5d\x2c\x31\x56\x3a\x46\x28\x32\x55\x29\x7b\x7a\x20\x31\x62\x3d\x24\x28\x32\x55\x29\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x57\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x24\x28\x61\x5b\x35\x57\x5d\x29\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x31\x62\x29\x7d\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x35\x56\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x49\x3d\x44\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x3b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x54\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x32\x7a\x5d\x5d\x28\x61\x5b\x35\x55\x5d\x29\x7d\x3b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x59\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x32\x7a\x5d\x5d\x28\x61\x5b\x35\x5a\x5d\x29\x7d\x3b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x36\x65\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x32\x7a\x5d\x5d\x28\x61\x5b\x36\x64\x5d\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x36\x63\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x43\x28\x36\x61\x3d\x3d\x33\x7a\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x35\x53\x5d\x5d\x28\x7b\x35\x52\x3a\x33\x30\x2c\x35\x49\x3a\x33\x30\x7d\x29\x7d\x7d\x29\x3b\x24\x28\x61\x5b\x35\x4a\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x3b\x24\x28\x32\x76\x29\x5b\x61\x5b\x36\x32\x5d\x5d\x28\x61\x5b\x35\x48\x5d\x2c\x46\x28\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x35\x47\x5d\x5d\x28\x29\x3e\x3d\x33\x6a\x3f\x44\x5b\x61\x5b\x33\x6e\x5d\x5d\x28\x32\x67\x29\x3a\x44\x5b\x61\x5b\x33\x65\x5d\x5d\x28\x32\x67\x29\x7d\x29\x2c\x44\x5b\x61\x5b\x35\x38\x5d\x5d\x28\x46\x28\x29\x7b\x24\x28\x61\x5b\x35\x45\x5d\x29\x5b\x61\x5b\x35\x46\x5d\x5d\x28\x7b\x34\x43\x3a\x30\x7d\x2c\x35\x4c\x29\x7d\x29\x7d\x29\x3b\x24\x28\x61\x5b\x35\x51\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x32\x79\x3d\x24\x28\x4b\x29\x2c\x55\x3d\x32\x79\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x31\x38\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x29\x5b\x61\x5b\x34\x38\x5d\x5d\x28\x29\x2c\x44\x3d\x32\x79\x2c\x49\x3d\x55\x5b\x61\x5b\x35\x30\x5d\x5d\x28\x29\x2c\x5a\x3d\x55\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x51\x3d\x5a\x5b\x30\x5d\x3b\x31\x55\x28\x44\x2c\x49\x2c\x35\x2c\x51\x29\x7d\x29\x3b\x24\x28\x61\x5b\x35\x4f\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x55\x3d\x44\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x5b\x61\x5b\x34\x38\x5d\x5d\x28\x29\x2c\x49\x3d\x55\x5b\x61\x5b\x35\x30\x5d\x5d\x28\x29\x2c\x5a\x3d\x55\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x51\x3d\x5a\x5b\x30\x5d\x3b\x31\x55\x28\x44\x2c\x49\x2c\x34\x2c\x51\x29\x7d\x29\x3b\x24\x28\x61\x5b\x35\x4d\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x55\x3d\x44\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x5b\x61\x5b\x34\x38\x5d\x5d\x28\x29\x2c\x49\x3d\x55\x5b\x61\x5b\x35\x30\x5d\x5d\x28\x29\x2c\x5a\x3d\x55\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6d\x3d\x5a\x5b\x30\x5d\x2c\x51\x3d\x5a\x5b\x31\x5d\x3b\x31\x55\x28\x44\x2c\x49\x2c\x31\x6d\x2c\x51\x29\x7d\x29\x3b\x24\x28\x61\x5b\x36\x74\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x44\x3d\x24\x28\x4b\x29\x2c\x51\x3d\x44\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x36\x6a\x5d\x29\x5b\x61\x5b\x32\x59\x5d\x5d\x28\x61\x5b\x35\x44\x5d\x29\x3b\x31\x55\x28\x44\x2c\x61\x5b\x32\x69\x5d\x2c\x33\x2c\x51\x29\x7d\x29\x3b\x46\x20\x33\x4b\x28\x50\x2c\x45\x29\x7b\x32\x6f\x28\x7a\x20\x31\x54\x3d\x30\x3b\x31\x54\x3c\x50\x5b\x45\x5d\x5b\x61\x5b\x32\x52\x5d\x5d\x5b\x61\x5b\x30\x5d\x5d\x3b\x31\x54\x2b\x2b\x29\x7b\x43\x28\x50\x5b\x45\x5d\x5b\x61\x5b\x32\x52\x5d\x5d\x5b\x31\x54\x5d\x5b\x61\x5b\x31\x30\x5d\x5d\x3d\x3d\x61\x5b\x34\x52\x5d\x29\x7b\x7a\x20\x59\x3d\x50\x5b\x45\x5d\x5b\x61\x5b\x32\x52\x5d\x5d\x5b\x31\x54\x5d\x5b\x61\x5b\x32\x5d\x5d\x3b\x34\x53\x7d\x7d\x3b\x31\x6f\x20\x59\x7d\x46\x20\x33\x76\x28\x50\x2c\x45\x2c\x59\x29\x7b\x7a\x20\x32\x64\x3d\x50\x5b\x45\x5d\x5b\x61\x5b\x31\x32\x5d\x5d\x5b\x61\x5b\x31\x4e\x5d\x5d\x2c\x31\x73\x3d\x61\x5b\x34\x58\x5d\x2b\x59\x2b\x61\x5b\x31\x53\x5d\x2b\x32\x64\x2b\x61\x5b\x32\x6e\x5d\x3b\x31\x6f\x20\x31\x73\x7d\x46\x20\x33\x75\x28\x50\x2c\x45\x29\x7b\x7a\x20\x32\x64\x3d\x50\x5b\x45\x5d\x5b\x61\x5b\x31\x32\x5d\x5d\x5b\x61\x5b\x31\x4e\x5d\x5d\x2c\x31\x75\x3d\x50\x5b\x45\x5d\x5b\x61\x5b\x32\x44\x5d\x5d\x5b\x61\x5b\x31\x4e\x5d\x5d\x2c\x31\x51\x3d\x24\x28\x61\x5b\x32\x48\x5d\x29\x5b\x61\x5b\x31\x77\x5d\x5d\x28\x31\x75\x29\x3b\x43\x28\x61\x5b\x32\x58\x5d\x35\x61\x20\x50\x5b\x45\x5d\x29\x7b\x7a\x20\x32\x43\x3d\x50\x5b\x45\x5d\x5b\x61\x5b\x32\x58\x5d\x5d\x5b\x61\x5b\x34\x5a\x5d\x5d\x2c\x31\x52\x3d\x32\x43\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x61\x5b\x34\x59\x5d\x2c\x61\x5b\x34\x50\x5d\x29\x3b\x43\x28\x31\x75\x5b\x61\x5b\x33\x54\x5d\x5d\x28\x61\x5b\x34\x48\x5d\x29\x3e\x2d\x31\x29\x7b\x31\x52\x3d\x32\x43\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x61\x5b\x34\x45\x5d\x2c\x61\x5b\x35\x63\x5d\x29\x7d\x7d\x4c\x7b\x43\x28\x31\x75\x5b\x61\x5b\x33\x54\x5d\x5d\x28\x61\x5b\x35\x64\x5d\x29\x3e\x2d\x31\x29\x7b\x31\x52\x3d\x31\x51\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x33\x51\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x4d\x5d\x29\x7d\x4c\x7b\x31\x52\x3d\x35\x76\x7d\x7d\x3b\x7a\x20\x31\x73\x3d\x61\x5b\x35\x75\x5d\x2b\x32\x64\x2b\x61\x5b\x35\x74\x5d\x2b\x31\x52\x2b\x61\x5b\x35\x72\x5d\x3b\x31\x6f\x20\x31\x73\x7d\x46\x20\x33\x72\x28\x50\x2c\x45\x29\x7b\x7a\x20\x31\x75\x3d\x50\x5b\x45\x5d\x5b\x61\x5b\x32\x44\x5d\x5d\x5b\x61\x5b\x31\x4e\x5d\x5d\x2c\x31\x51\x3d\x24\x28\x61\x5b\x32\x48\x5d\x29\x5b\x61\x5b\x31\x77\x5d\x5d\x28\x31\x75\x29\x2c\x32\x73\x3d\x31\x51\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x46\x5d\x29\x2c\x32\x72\x3d\x31\x51\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x32\x78\x5d\x29\x3b\x43\x28\x32\x73\x5b\x61\x5b\x30\x5d\x5d\x3e\x30\x29\x7b\x7a\x20\x54\x3d\x32\x73\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x2c\x56\x3d\x54\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6e\x3d\x56\x5b\x31\x5d\x7d\x3b\x43\x28\x32\x72\x5b\x61\x5b\x30\x5d\x5d\x3e\x30\x29\x7b\x7a\x20\x54\x3d\x32\x72\x5b\x61\x5b\x32\x33\x5d\x5d\x28\x29\x2c\x56\x3d\x54\x5b\x61\x5b\x35\x32\x5d\x5d\x28\x61\x5b\x35\x31\x5d\x29\x2c\x31\x6c\x3d\x56\x5b\x31\x5d\x7d\x3b\x43\x28\x31\x6e\x21\x3d\x32\x4a\x29\x7b\x7a\x20\x32\x75\x3d\x61\x5b\x35\x42\x5d\x2b\x31\x6e\x2b\x61\x5b\x33\x53\x5d\x7d\x4c\x7b\x32\x75\x3d\x61\x5b\x32\x39\x5d\x7d\x3b\x43\x28\x31\x6c\x21\x3d\x32\x4a\x29\x7b\x7a\x20\x32\x49\x3d\x61\x5b\x35\x41\x5d\x2b\x31\x6c\x2b\x61\x5b\x33\x53\x5d\x7d\x4c\x7b\x32\x49\x3d\x61\x5b\x32\x39\x5d\x7d\x3b\x7a\x20\x31\x73\x3d\x5b\x32\x75\x2c\x32\x49\x5d\x3b\x31\x6f\x20\x31\x73\x7d\x46\x20\x31\x55\x28\x44\x2c\x49\x2c\x31\x6d\x2c\x51\x29\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x33\x5d\x29\x7c\x7c\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x31\x50\x5d\x29\x7c\x7c\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x7a\x5d\x29\x7c\x7c\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x32\x4e\x5d\x29\x7c\x7c\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x32\x69\x5d\x29\x29\x7b\x7a\x20\x31\x4a\x3d\x61\x5b\x32\x39\x5d\x3b\x43\x28\x51\x3d\x3d\x61\x5b\x33\x48\x5d\x29\x7b\x31\x4a\x3d\x61\x5b\x35\x79\x5d\x2b\x31\x6d\x7d\x4c\x7b\x43\x28\x51\x3d\x3d\x61\x5b\x32\x71\x5d\x29\x7b\x7a\x20\x33\x4d\x3d\x33\x4f\x5b\x61\x5b\x35\x71\x5d\x5d\x28\x33\x4f\x5b\x61\x5b\x32\x71\x5d\x5d\x28\x29\x2a\x31\x6d\x29\x2b\x31\x3b\x31\x4a\x3d\x61\x5b\x32\x50\x5d\x2b\x31\x6d\x2b\x61\x5b\x35\x70\x5d\x2b\x33\x4d\x2b\x61\x5b\x35\x69\x5d\x7d\x4c\x7b\x31\x4a\x3d\x61\x5b\x35\x68\x5d\x2b\x51\x2b\x61\x5b\x35\x67\x5d\x2b\x31\x6d\x7d\x7d\x3b\x24\x5b\x61\x5b\x32\x65\x5d\x5d\x28\x7b\x32\x62\x3a\x31\x4a\x2c\x32\x61\x3a\x61\x5b\x32\x66\x5d\x2c\x33\x57\x3a\x61\x5b\x33\x52\x5d\x2c\x35\x65\x3a\x46\x28\x29\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x31\x50\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x31\x77\x5d\x5d\x28\x61\x5b\x35\x66\x5d\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x33\x49\x5d\x29\x7d\x7d\x2c\x31\x56\x3a\x46\x28\x33\x77\x29\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x33\x5d\x29\x29\x7b\x7a\x20\x58\x3d\x61\x5b\x35\x6a\x5d\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x31\x50\x5d\x29\x29\x7b\x7a\x20\x58\x3d\x61\x5b\x35\x6b\x5d\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x32\x4e\x5d\x29\x29\x7b\x7a\x20\x58\x3d\x61\x5b\x35\x6f\x5d\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x32\x69\x5d\x29\x29\x7b\x7a\x20\x58\x3d\x61\x5b\x35\x6e\x5d\x7d\x7d\x7d\x7d\x3b\x7a\x20\x32\x4f\x3d\x33\x77\x5b\x61\x5b\x35\x6d\x5d\x5d\x5b\x61\x5b\x33\x79\x5d\x5d\x3b\x43\x28\x32\x4f\x21\x3d\x32\x4a\x29\x7b\x32\x6f\x28\x7a\x20\x45\x3d\x30\x2c\x50\x3d\x32\x4f\x3b\x45\x3c\x50\x5b\x61\x5b\x30\x5d\x5d\x3b\x45\x2b\x2b\x29\x7b\x7a\x20\x59\x3d\x33\x4b\x28\x50\x2c\x45\x29\x2c\x31\x62\x3d\x33\x76\x28\x50\x2c\x45\x2c\x59\x29\x2c\x31\x4f\x3d\x33\x75\x28\x50\x2c\x45\x29\x2c\x31\x65\x3d\x33\x72\x28\x50\x2c\x45\x29\x3b\x7a\x20\x31\x70\x3d\x61\x5b\x32\x39\x5d\x3b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x33\x5d\x29\x29\x7b\x31\x70\x2b\x3d\x61\x5b\x34\x54\x5d\x2b\x45\x2b\x61\x5b\x35\x6c\x5d\x2b\x59\x2b\x61\x5b\x31\x53\x5d\x2b\x31\x4f\x2b\x61\x5b\x32\x6e\x5d\x2b\x31\x65\x5b\x31\x5d\x2b\x61\x5b\x33\x41\x5d\x2b\x31\x62\x2b\x61\x5b\x32\x68\x5d\x2b\x31\x65\x5b\x30\x5d\x2b\x61\x5b\x35\x78\x5d\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x31\x50\x5d\x29\x29\x7b\x31\x70\x2b\x3d\x61\x5b\x35\x77\x5d\x2b\x45\x2b\x61\x5b\x35\x73\x5d\x2b\x59\x2b\x61\x5b\x31\x53\x5d\x2b\x31\x4f\x2b\x61\x5b\x32\x6e\x5d\x2b\x31\x65\x5b\x31\x5d\x2b\x61\x5b\x34\x4c\x5d\x2b\x31\x62\x2b\x61\x5b\x32\x68\x5d\x2b\x31\x65\x5b\x30\x5d\x2b\x61\x5b\x33\x74\x5d\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x32\x4e\x5d\x29\x29\x7b\x31\x70\x2b\x3d\x61\x5b\x34\x4b\x5d\x2b\x45\x2b\x61\x5b\x34\x4d\x5d\x2b\x59\x2b\x61\x5b\x31\x53\x5d\x2b\x31\x4f\x2b\x61\x5b\x34\x4f\x5d\x2b\x31\x62\x2b\x61\x5b\x32\x68\x5d\x2b\x31\x65\x5b\x30\x5d\x2b\x61\x5b\x33\x74\x5d\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x32\x69\x5d\x29\x29\x7b\x31\x70\x2b\x3d\x61\x5b\x34\x4a\x5d\x2b\x45\x2b\x61\x5b\x34\x49\x5d\x2b\x59\x2b\x61\x5b\x31\x53\x5d\x2b\x31\x4f\x2b\x61\x5b\x32\x6e\x5d\x2b\x31\x65\x5b\x31\x5d\x2b\x61\x5b\x33\x41\x5d\x2b\x31\x62\x2b\x61\x5b\x32\x68\x5d\x2b\x31\x65\x5b\x30\x5d\x2b\x61\x5b\x34\x44\x5d\x7d\x7d\x7d\x7d\x3b\x58\x2b\x3d\x31\x70\x7d\x3b\x58\x2b\x3d\x61\x5b\x34\x46\x5d\x7d\x4c\x7b\x58\x3d\x61\x5b\x34\x47\x5d\x7d\x3b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x35\x33\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x34\x51\x5d\x29\x5b\x61\x5b\x32\x38\x5d\x5d\x28\x58\x29\x3b\x44\x5b\x61\x5b\x32\x31\x5d\x5d\x28\x61\x5b\x35\x62\x5d\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x2c\x46\x28\x44\x2c\x53\x29\x7b\x43\x28\x51\x3d\x3d\x61\x5b\x33\x48\x5d\x7c\x7c\x51\x3d\x3d\x61\x5b\x32\x71\x5d\x29\x7b\x53\x3d\x53\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x53\x2c\x61\x5b\x34\x57\x5d\x2b\x32\x6c\x29\x7d\x4c\x7b\x53\x3d\x53\x5b\x61\x5b\x33\x30\x5d\x5d\x28\x53\x2c\x61\x5b\x35\x35\x5d\x2b\x51\x2b\x61\x5b\x35\x36\x5d\x2b\x32\x6c\x29\x7d\x3b\x31\x6f\x20\x53\x7d\x29\x7d\x4c\x7b\x43\x28\x49\x5b\x61\x5b\x35\x34\x5d\x5d\x28\x61\x5b\x31\x50\x5d\x29\x29\x7b\x44\x5b\x61\x5b\x31\x77\x5d\x5d\x28\x58\x29\x5b\x61\x5b\x32\x36\x5d\x5d\x28\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x33\x49\x5d\x29\x7d\x4c\x7b\x44\x5b\x61\x5b\x31\x77\x5d\x5d\x28\x58\x29\x7d\x7d\x7d\x7d\x29\x7d\x7d\x24\x28\x61\x5b\x34\x55\x5d\x29\x5b\x61\x5b\x34\x31\x5d\x5d\x28\x46\x28\x29\x7b\x7a\x20\x31\x41\x3d\x34\x56\x2c\x35\x43\x3d\x35\x4e\x2c\x33\x50\x3d\x61\x5b\x36\x6e\x5d\x2c\x33\x43\x3d\x24\x28\x36\x6f\x29\x5b\x61\x5b\x34\x39\x5d\x5d\x28\x61\x5b\x32\x5d\x29\x2c\x33\x4c\x3d\x61\x5b\x36\x70\x5d\x2b\x33\x43\x2b\x61\x5b\x36\x6d\x5d\x2c\x31\x59\x3d\x61\x5b\x36\x6c\x5d\x2b\x31\x41\x3b\x43\x28\x31\x41\x3d\x3d\x61\x5b\x36\x68\x5d\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x31\x59\x29\x5b\x61\x5b\x36\x36\x5d\x5d\x28\x29\x7d\x4c\x7b\x43\x28\x31\x41\x3d\x3d\x61\x5b\x36\x72\x5d\x29\x7b\x28\x46\x28\x29\x7b\x7a\x20\x31\x4d\x3d\x31\x48\x5b\x61\x5b\x36\x6b\x5d\x5d\x28\x61\x5b\x36\x71\x5d\x29\x3b\x31\x4d\x5b\x61\x5b\x36\x77\x5d\x5d\x3d\x61\x5b\x36\x75\x5d\x3b\x31\x4d\x5b\x61\x5b\x36\x73\x5d\x5d\x3d\x33\x7a\x3b\x31\x4d\x5b\x61\x5b\x32\x4d\x5d\x5d\x3d\x61\x5b\x36\x76\x5d\x2b\x36\x69\x2b\x61\x5b\x36\x66\x5d\x3b\x28\x31\x48\x5b\x61\x5b\x33\x4a\x5d\x5d\x28\x61\x5b\x36\x67\x5d\x29\x5b\x30\x5d\x7c\x7c\x31\x48\x5b\x61\x5b\x33\x4a\x5d\x5d\x28\x61\x5b\x36\x31\x5d\x29\x5b\x30\x5d\x29\x5b\x61\x5b\x35\x50\x5d\x5d\x28\x31\x4d\x29\x7d\x29\x28\x29\x3b\x24\x28\x61\x5b\x33\x71\x5d\x29\x5b\x61\x5b\x32\x53\x5d\x5d\x28\x29\x3b\x24\x28\x4b\x29\x5b\x61\x5b\x32\x38\x5d\x5d\x28\x33\x50\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x31\x59\x29\x5b\x61\x5b\x36\x36\x5d\x5d\x28\x29\x7d\x4c\x7b\x43\x28\x31\x41\x3d\x3d\x61\x5b\x35\x4b\x5d\x29\x7b\x24\x28\x61\x5b\x33\x71\x5d\x29\x5b\x61\x5b\x32\x53\x5d\x5d\x28\x29\x3b\x24\x28\x4b\x29\x5b\x61\x5b\x32\x38\x5d\x5d\x28\x33\x4c\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x31\x59\x29\x5b\x61\x5b\x36\x36\x5d\x5d\x28\x29\x7d\x4c\x7b\x43\x28\x31\x41\x3d\x3d\x61\x5b\x31\x57\x5d\x29\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x31\x57\x5d\x5d\x28\x29\x7d\x4c\x7b\x24\x28\x4b\x29\x5b\x61\x5b\x33\x36\x5d\x5d\x28\x61\x5b\x36\x62\x5d\x29\x5b\x61\x5b\x36\x36\x5d\x5d\x28\x29\x7d\x7d\x7d\x7d\x7d\x29\x7d\x29\x5c\x27\x2c\x36\x32\x2c\x38\x49\x2c\x5c\x27\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x38\x4a\x7c\x38\x4b\x7c\x38\x4c\x7c\x38\x4d\x7c\x38\x4e\x7c\x38\x4f\x7c\x38\x50\x7c\x38\x48\x7c\x38\x77\x7c\x38\x6e\x7c\x38\x76\x7c\x38\x66\x7c\x38\x67\x7c\x38\x68\x7c\x38\x69\x7c\x38\x6a\x7c\x38\x6b\x7c\x38\x6c\x7c\x38\x65\x7c\x38\x6d\x7c\x38\x6f\x7c\x38\x70\x7c\x38\x71\x7c\x38\x72\x7c\x38\x73\x7c\x38\x74\x7c\x38\x75\x7c\x38\x51\x7c\x36\x7a\x7c\x38\x78\x7c\x38\x52\x7c\x36\x78\x7c\x39\x6d\x7c\x39\x6f\x7c\x39\x70\x7c\x39\x71\x7c\x39\x72\x7c\x39\x73\x7c\x39\x74\x7c\x39\x75\x7c\x39\x6e\x7c\x39\x76\x7c\x39\x78\x7c\x39\x79\x7c\x39\x7a\x7c\x39\x41\x7c\x39\x42\x7c\x39\x43\x7c\x39\x44\x7c\x39\x45\x7c\x39\x77\x7c\x39\x6c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x39\x63\x7c\x39\x6b\x7c\x38\x55\x7c\x38\x56\x7c\x38\x57\x7c\x38\x58\x7c\x38\x59\x7c\x38\x5a\x7c\x39\x61\x7c\x38\x54\x7c\x39\x62\x7c\x39\x64\x7c\x39\x65\x7c\x39\x66\x7c\x36\x79\x7c\x39\x67\x7c\x39\x68\x7c\x39\x69\x7c\x38\x63\x7c\x38\x53\x7c\x38\x64\x7c\x37\x49\x7c\x38\x39\x7c\x38\x62\x7c\x36\x56\x7c\x36\x57\x7c\x36\x58\x7c\x36\x59\x7c\x36\x5a\x7c\x37\x61\x7c\x37\x62\x7c\x36\x55\x7c\x37\x63\x7c\x37\x65\x7c\x37\x66\x7c\x37\x67\x7c\x37\x68\x7c\x37\x69\x7c\x37\x6a\x7c\x38\x36\x7c\x37\x6b\x7c\x37\x64\x7c\x37\x6c\x7c\x36\x54\x7c\x36\x4c\x7c\x36\x43\x7c\x36\x44\x7c\x36\x45\x7c\x39\x38\x7c\x36\x46\x7c\x36\x47\x7c\x36\x48\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x36\x42\x7c\x36\x49\x7c\x36\x4b\x7c\x36\x52\x7c\x39\x35\x7c\x38\x34\x7c\x36\x4d\x7c\x36\x4e\x7c\x36\x4f\x7c\x36\x50\x7c\x36\x4a\x7c\x36\x41\x7c\x36\x51\x7c\x37\x6e\x7c\x37\x6d\x7c\x37\x4b\x7c\x37\x4c\x7c\x37\x4d\x7c\x37\x4e\x7c\x37\x4f\x7c\x37\x50\x7c\x37\x51\x7c\x37\x4a\x7c\x39\x32\x7c\x37\x52\x7c\x37\x54\x7c\x37\x55\x7c\x37\x56\x7c\x37\x57\x7c\x38\x37\x7c\x37\x58\x7c\x39\x31\x7c\x37\x59\x7c\x39\x30\x7c\x37\x5a\x7c\x38\x61\x7c\x37\x53\x7c\x37\x48\x7c\x37\x78\x7c\x37\x47\x7c\x37\x70\x7c\x37\x71\x7c\x37\x72\x7c\x37\x73\x7c\x37\x74\x7c\x37\x75\x7c\x37\x76\x7c\x37\x6f\x7c\x37\x77\x7c\x37\x79\x7c\x38\x31\x7c\x37\x7a\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x37\x41\x7c\x37\x42\x7c\x37\x43\x7c\x37\x44\x7c\x37\x38\x7c\x37\x45\x7c\x37\x35\x7c\x39\x37\x7c\x39\x34\x7c\x37\x46\x7c\x39\x46\x7c\x39\x6a\x7c\x37\x33\x7c\x37\x34\x7c\x39\x33\x7c\x39\x39\x7c\x62\x73\x7c\x62\x77\x7c\x62\x78\x7c\x62\x7a\x7c\x62\x41\x7c\x62\x42\x7c\x62\x43\x7c\x62\x45\x7c\x38\x38\x7c\x62\x47\x7c\x62\x79\x7c\x62\x6e\x7c\x62\x65\x7c\x62\x6d\x7c\x62\x36\x7c\x62\x37\x7c\x62\x38\x7c\x62\x39\x7c\x62\x61\x7c\x62\x62\x7c\x62\x63\x7c\x62\x49\x7c\x62\x64\x7c\x62\x66\x7c\x62\x67\x7c\x62\x68\x7c\x62\x69\x7c\x38\x35\x7c\x62\x6a\x7c\x62\x6b\x7c\x62\x6c\x7c\x62\x48\x7c\x62\x6f\x7c\x62\x4a\x7c\x62\x4f\x7c\x62\x5a\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x63\x30\x7c\x63\x31\x7c\x62\x59\x7c\x63\x33\x7c\x63\x34\x7c\x63\x36\x7c\x62\x4b\x7c\x62\x56\x7c\x62\x55\x7c\x62\x54\x7c\x62\x53\x7c\x62\x52\x7c\x39\x36\x7c\x38\x30\x7c\x38\x32\x7c\x37\x37\x7c\x62\x4d\x7c\x37\x39\x7c\x37\x36\x7c\x37\x30\x7c\x38\x33\x7c\x37\x32\x7c\x62\x4c\x7c\x62\x4e\x7c\x62\x50\x7c\x62\x51\x7c\x37\x31\x7c\x62\x57\x7c\x63\x35\x7c\x63\x32\x7c\x62\x58\x7c\x62\x35\x7c\x62\x34\x7c\x61\x6e\x7c\x62\x32\x7c\x61\x34\x7c\x61\x35\x7c\x61\x36\x7c\x61\x37\x7c\x61\x38\x7c\x61\x39\x7c\x61\x61\x7c\x61\x33\x7c\x61\x62\x7c\x61\x64\x7c\x61\x65\x7c\x62\x33\x7c\x61\x66\x7c\x61\x67\x7c\x61\x68\x7c\x61\x69\x7c\x61\x6a\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x61\x6b\x7c\x61\x63\x7c\x61\x31\x7c\x39\x52\x7c\x61\x30\x7c\x39\x4a\x7c\x39\x4b\x7c\x39\x4c\x7c\x39\x4d\x7c\x39\x4e\x7c\x39\x4f\x7c\x39\x50\x7c\x39\x49\x7c\x39\x51\x7c\x39\x53\x7c\x39\x54\x7c\x39\x55\x7c\x39\x56\x7c\x39\x57\x7c\x39\x58\x7c\x39\x59\x7c\x39\x5a\x7c\x39\x48\x7c\x61\x6c\x7c\x61\x32\x7c\x61\x6d\x7c\x61\x49\x7c\x61\x4b\x7c\x61\x4c\x7c\x61\x4d\x7c\x61\x4e\x7c\x61\x4f\x7c\x61\x50\x7c\x61\x51\x7c\x61\x52\x7c\x61\x4a\x7c\x61\x53\x7c\x61\x55\x7c\x61\x56\x7c\x61\x57\x7c\x61\x58\x7c\x61\x59\x7c\x61\x5a\x7c\x62\x30\x7c\x62\x31\x7c\x61\x54\x7c\x61\x48\x7c\x61\x78\x7c\x61\x47\x7c\x61\x70\x7c\x61\x71\x7c\x61\x72\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x61\x73\x7c\x61\x74\x7c\x61\x75\x7c\x61\x76\x7c\x61\x6f\x7c\x61\x77\x7c\x61\x79\x7c\x61\x7a\x7c\x61\x41\x7c\x61\x42\x7c\x61\x43\x7c\x61\x44\x7c\x61\x45\x7c\x61\x46\x7c\x62\x46\x7c\x62\x44\x7c\x62\x70\x7c\x62\x76\x7c\x62\x75\x7c\x62\x74\x7c\x62\x72\x7c\x62\x71\x7c\x38\x47\x5c\x27\x2e\x36\x53\x28\x5c\x27\x7c\x5c\x27\x29\x29\x29\x27\x2c\x36\x32\x2c\x37\x35\x31\x2c\x27\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x66\x75\x6e\x63\x74\x69\x6f\x6e\x7c\x72\x65\x74\x75\x72\x6e\x7c\x69\x66\x7c\x70\x6f\x73\x74\x50\x65\x72\x50\x61\x67\x65\x7c\x74\x79\x70\x65\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x38\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x37\x7c\x73\x75\x63\x63\x65\x73\x73\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x36\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x62\x7c\x75\x72\x6c\x7c\x78\x33\x33\x7c\x78\x32\x43\x7c\x31\x34\x36\x7c\x32\x35\x30\x7c\x31\x38\x35\x7c\x31\x34\x31\x7c\x78\x33\x39\x7c\x78\x34\x32\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x62\x7c\x73\x70\x6c\x69\x74\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x31\x7c\x78\x33\x37\x7c\x78\x37\x44\x7c\x78\x33\x46\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x30\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x7c\x78\x32\x36\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x78\x33\x31\x7c\x78\x37\x42\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x61\x7c\x31\x36\x33\x7c\x64\x6f\x63\x75\x6d\x65\x6e\x74\x7c\x78\x37\x31\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x38\x7c\x78\x34\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x36\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x64\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x66\x7c\x66\x6f\x72\x7c\x31\x34\x37\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x36\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x63\x7c\x31\x37\x30\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x65\x7c\x31\x34\x33\x7c\x31\x30\x32\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x30\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x33\x7c\x31\x31\x37\x7c\x31\x30\x36\x7c\x31\x34\x38\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x66\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x38\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x31\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x37\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x64\x7c\x31\x30\x30\x7c\x31\x36\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x37\x7c\x78\x32\x31\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x39\x7c\x31\x36\x38\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x34\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x33\x7c\x78\x33\x34\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x35\x7c\x77\x69\x6e\x64\x6f\x77\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x34\x7c\x78\x34\x34\x7c\x31\x32\x33\x7c\x78\x34\x46\x7c\x78\x35\x33\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x30\x7c\x78\x34\x36\x7c\x78\x37\x41\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x36\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x75\x6e\x64\x65\x66\x69\x6e\x65\x64\x7c\x78\x33\x42\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x63\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x65\x7c\x78\x32\x46\x7c\x78\x36\x44\x7c\x78\x37\x30\x7c\x78\x36\x34\x7c\x78\x32\x30\x7c\x78\x36\x33\x7c\x78\x37\x35\x7c\x78\x32\x32\x7c\x78\x32\x45\x7c\x78\x36\x45\x7c\x78\x36\x38\x7c\x78\x36\x37\x7c\x78\x36\x32\x7c\x78\x33\x43\x7c\x78\x36\x36\x7c\x76\x61\x72\x7c\x78\x33\x45\x7c\x78\x37\x32\x7c\x78\x32\x44\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x66\x7c\x52\x65\x67\x45\x78\x70\x7c\x70\x61\x72\x73\x65\x49\x6e\x74\x7c\x53\x74\x72\x69\x6e\x67\x7c\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65\x7c\x74\x6f\x53\x74\x72\x69\x6e\x67\x7c\x77\x68\x69\x6c\x65\x7c\x72\x65\x70\x6c\x61\x63\x65\x7c\x6e\x65\x77\x7c\x32\x31\x30\x7c\x78\x36\x46\x7c\x34\x30\x35\x7c\x5f\x30\x78\x62\x39\x66\x30\x7c\x78\x36\x35\x7c\x78\x37\x34\x7c\x78\x37\x33\x7c\x78\x36\x31\x7c\x78\x36\x39\x7c\x78\x36\x43\x7c\x78\x33\x44\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x7c\x78\x33\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x38\x7c\x78\x34\x43\x7c\x78\x34\x33\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x65\x7c\x78\x33\x30\x7c\x78\x35\x46\x7c\x78\x35\x34\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x39\x7c\x78\x33\x32\x7c\x78\x36\x41\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x64\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x35\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x63\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x66\x7c\x78\x34\x39\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x34\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x32\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x32\x7c\x78\x37\x36\x7c\x78\x33\x41\x7c\x78\x37\x37\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x31\x7c\x78\x37\x39\x7c\x74\x68\x69\x73\x7c\x65\x6c\x73\x65\x7c\x78\x32\x33\x7c\x78\x36\x42\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x37\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x39\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x33\x7c\x78\x37\x38\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x65\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x61\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x30\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x31\x62\x7c\x78\x34\x31\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x62\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x63\x7c\x65\x76\x61\x6c\x7c\x31\x38\x37\x7c\x31\x38\x31\x7c\x31\x37\x36\x7c\x31\x37\x34\x7c\x31\x37\x33\x7c\x31\x37\x32\x7c\x31\x37\x37\x7c\x31\x37\x38\x7c\x31\x38\x33\x7c\x31\x38\x30\x7c\x31\x35\x36\x7c\x31\x37\x39\x7c\x31\x37\x31\x7c\x31\x36\x39\x7c\x31\x35\x39\x7c\x31\x38\x38\x7c\x31\x35\x38\x7c\x31\x35\x37\x7c\x6e\x6f\x54\x68\x75\x6d\x62\x6e\x61\x69\x6c\x7c\x62\x65\x66\x6f\x72\x65\x53\x65\x6e\x64\x7c\x31\x35\x35\x7c\x31\x36\x37\x7c\x31\x39\x39\x7c\x31\x39\x34\x7c\x31\x39\x31\x7c\x31\x38\x39\x7c\x31\x39\x32\x7c\x31\x31\x36\x7c\x31\x39\x33\x7c\x31\x35\x31\x7c\x31\x34\x34\x7c\x32\x30\x31\x7c\x62\x72\x65\x61\x6b\x7c\x31\x38\x32\x7c\x63\x6f\x6d\x6d\x65\x6e\x74\x73\x53\x79\x73\x74\x65\x6d\x7c\x32\x30\x30\x7c\x31\x34\x35\x7c\x31\x35\x30\x7c\x31\x34\x39\x7c\x69\x6e\x7c\x31\x38\x36\x7c\x31\x36\x34\x7c\x31\x35\x32\x7c\x31\x32\x36\x7c\x31\x31\x38\x7c\x31\x32\x34\x7c\x31\x32\x35\x7c\x66\x69\x78\x65\x64\x53\x69\x64\x65\x62\x61\x72\x7c\x32\x32\x30\x7c\x31\x33\x30\x7c\x31\x32\x37\x7c\x32\x31\x34\x7c\x31\x32\x38\x7c\x32\x31\x36\x7c\x32\x30\x36\x7c\x64\x69\x73\x71\x75\x73\x53\x68\x6f\x72\x74\x6e\x61\x6d\x65\x7c\x31\x34\x30\x7c\x32\x30\x39\x7c\x32\x30\x35\x7c\x32\x30\x34\x7c\x32\x30\x32\x7c\x31\x31\x39\x7c\x31\x32\x32\x7c\x31\x36\x32\x7c\x31\x33\x35\x7c\x31\x36\x30\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x31\x7c\x31\x33\x39\x7c\x31\x33\x34\x7c\x31\x33\x33\x7c\x31\x33\x32\x7c\x31\x33\x31\x7c\x61\x64\x64\x69\x74\x69\x6f\x6e\x61\x6c\x4d\x61\x72\x67\x69\x6e\x42\x6f\x74\x74\x6f\x6d\x7c\x32\x31\x39\x7c\x31\x32\x31\x7c\x35\x30\x30\x7c\x31\x33\x38\x7c\x64\x69\x73\x71\x75\x73\x5f\x62\x6c\x6f\x67\x67\x65\x72\x5f\x63\x75\x72\x72\x65\x6e\x74\x5f\x75\x72\x6c\x7c\x31\x33\x37\x7c\x32\x31\x35\x7c\x31\x33\x36\x7c\x61\x64\x64\x69\x74\x69\x6f\x6e\x61\x6c\x4d\x61\x72\x67\x69\x6e\x54\x6f\x70\x7c\x31\x32\x39\x7c\x31\x39\x35\x7c\x32\x32\x31\x7c\x31\x39\x38\x7c\x31\x39\x37\x7c\x78\x33\x38\x7c\x78\x35\x30\x7c\x78\x32\x35\x7c\x31\x36\x36\x7c\x31\x37\x35\x7c\x32\x31\x37\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x36\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x39\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x33\x7c\x78\x32\x39\x7c\x4d\x61\x74\x68\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x32\x7c\x31\x30\x33\x7c\x31\x36\x31\x7c\x31\x35\x33\x7c\x78\x32\x38\x7c\x78\x35\x37\x7c\x78\x32\x34\x7c\x64\x61\x74\x61\x54\x79\x70\x65\x7c\x32\x30\x38\x7c\x32\x31\x33\x7c\x32\x31\x31\x7c\x32\x31\x38\x7c\x31\x34\x32\x7c\x32\x31\x32\x7c\x32\x30\x37\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x32\x7c\x78\x35\x36\x7c\x31\x38\x34\x7c\x31\x39\x30\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x64\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x32\x61\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x33\x61\x7c\x32\x30\x33\x7c\x78\x34\x45\x7c\x6c\x6f\x63\x61\x74\x69\x6f\x6e\x7c\x74\x72\x75\x65\x7c\x78\x35\x39\x7c\x5f\x30\x78\x61\x37\x36\x34\x78\x34\x34\x7c\x78\x34\x38\x7c\x31\x31\x32\x7c\x78\x34\x44\x7c\x31\x31\x35\x7c\x78\x34\x42\x7c\x31\x30\x35\x7c\x78\x35\x35\x7c\x33\x30\x30\x30\x7c\x78\x34\x41\x7c\x31\x30\x38\x7c\x31\x31\x34\x7c\x31\x31\x30\x7c\x31\x30\x34\x7c\x31\x30\x31\x7c\x31\x35\x34\x7c\x31\x31\x33\x7c\x31\x31\x31\x7c\x31\x30\x37\x7c\x31\x30\x39\x7c\x31\x39\x36\x7c\x73\x65\x74\x49\x6e\x74\x65\x72\x76\x61\x6c\x7c\x31\x32\x30\x7c\x73\x63\x72\x6f\x6c\x6c\x54\x6f\x70\x7c\x78\x33\x36\x27\x2e\x73\x70\x6c\x69\x74\x28\x27\x7c\x27\x29\x2c\x30\x2c\x7b\x7d\x29\x29\x0a";eval(_3Oz8os);
//]]>
</script>

<script type='text/javascript'>
//<![CDATA[
 if (window['location']['href']['indexOf']('/p/checkout.html') > -1) {
     document['title'] = 'Checkout';
     $('.item-post .post-body')['html']('<div class=\'sora-cart-checkout\'><div class=\"post-custom-title\"><div class=\"custom-title\"><h2>Billing Details<\/h2><\/div><\/div><div class=\'sora-cart-checkout-wrap\'><p class=\'sora-checkout-details\'>Please Enter your Personal Details</p> <div id=\'contact\' class=\'form\'> <form name=\'contact-form\'> <input class=\"contact-form-name\" id=\"ContactForm1_contact-form-name\" name=\"name\" placeholder=\"Name\" size=\"30\" type=\"text\" value=\"\" \/><input class=\"contact-form-email\" id=\"ContactForm1_contact-form-email\" name=\"email\" placeholder=\"Email\" size=\"30\" type=\"text\" value=\"\" \/><textarea class=\"contact-form-email-message\" cols=\"25\" id=\"ContactForm1_contact-form-email-message\" name=\"email-message\" placeholder=\"Phone, Address, Additional Information\" rows=\"5\"><\/textarea><div class=\'sora-checkout-wrap\'> <div class=\'simpleCart_items\'/><div style=\"clear: both;\"\/><div class=\"cart-bot-element\"><div class=\"sora-cart-ammount\"><span class=\"sora-cart-subtotal\">SUBTOTAL :<\/span><span class=\'simpleCart_total\'/><\/div><a class=\'simpleCart_checkout\'href=\'javascript:;\'><input class=\'sora-checkout-bill\' id=\'ContactForm1_contact-form-submit\' type=\'button\' value=\'Proceed To Payment\'></a></div></div><p></p> </form> </div> </div></div><style>div#sidebar-wrapper,.static_page .item-post h1.post-title { display: none!important; }.item #main-wrapper, .statc_page #main-wrapper { width:100%;float:none;max-width: 100%; }</style>');
 };

 if (window['location']['href']['indexOf']('/p/cart.html') > -1) {
     document['title'] = 'My Cart';
     $('.item-post .post-body')['html']('<div class=\'sora-cart-review check\'><div class=\"post-custom-title\"><div class=\"custom-title\"><h2>You have <span class=\'simpleCart_quantity\'/> item(s) in your Cart.<\/h2><\/div><\/div><div class=\'sora-cart-review-wrap\'><div class=\'simpleCart_items\'/><div style=\"clear: both;\"\/><div class=\"cart-bot-element\"><div class=\"sora-cart-ammount\"><span class=\"sora-cart-subtotal\">SUBTOTAL :<\/span><span class=\'simpleCart_total\'/><\/div><a class=\'simpleCart_checkout\' href=\'\/p\/checkout.html\'>Proceed to Checkout</a></div></div></div><style>div#sidebar-wrapper,.static_page .item-post h1.post-title { display: none!important; }.item #main-wrapper, .statc_page #main-wrapper { width:100%;float:none;max-width: 100%; }</style>');
 };
//]]>
</script>

<!-- Pagination Scripts -->
<b:if cond='data:view.isMultipleItems'>
<script type='text/javascript'>
//<![CDATA[
var postResults=postPerPage;
var numOfPages=2;
var pageOf=["Page", "of"];
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('5 K;5 m;5 l;5 w;5 s=1p.9;5 y="/";1d();G 1b(a){5 b=\'\';J=M(W/2);4(J==W-J){W=J*2+1}D=l-J;4(D<1)D=1;j=M(a/n)+1;4(j-1==a/n)j=j-1;E=D+W-1;4(E>j)E=j;b+=\'<C 6="3-1u">\'+17[0]+\' \'+l+\' \'+17[1]+\' \'+j+\'</C>\';5 c=M(l)-1;4(l>1){4(l==2){4(m==\'3\'){b+=\'<a 6="3-7 3-U" 9="\'+y+\'"></a>\'}h{b+=\'<a 6="3-7 3-U" 9="/v/u/\'+w+\'?&i-o=\'+n+\'"></a>\'}}h{4(m==\'3\'){b+=\'<a 6="3-7 3-U" 9="#" z="L(\'+c+\');B x"></a>\'}h{b+=\'<a 6="3-7 3-U" 9="#" z="I(\'+c+\');B x"></a>\'}}}4(D>1){4(m=="3"){b+=\'<a 6="3-7" 9="\'+y+\'">1</a>\'}h{b+=\'<a 6="3-7" 9="/v/u/\'+w+\'?&i-o=\'+n+\'">1</a>\'}}4(D>2){b+=\'<C 6="3-7 3-16">...</C>\'}1a(5 d=D;d<=E;d++){4(l==d){b+=\'<C 6="3-7 3-1v">\'+d+\'</C>\'}h 4(d==1){4(m==\'3\'){b+=\'<a 6="3-7" 9="\'+y+\'">1</a>\'}h{b+=\'<a 6="3-7" 9="/v/u/\'+w+\'?&i-o=\'+n+\'">1</a>\'}}h{4(m==\'3\'){b+=\'<a 6="3-7" 9="#" z="L(\'+d+\');B x">\'+d+\'</a>\'}h{b+=\'<a 6="3-7" 9="#" z="I(\'+d+\');B x">\'+d+\'</a>\'}}}4(E<j-1){b+=\'<C 6="3-7 3-16">...</C>\'}4(E<j){4(m=="3"){b+=\'<a 6="3-7" 9="#" z="L(\'+j+\');B x">\'+j+\'</a>\'}h{b+=\'<a 6="3-7" 9="#" z="I(\'+j+\');B x">\'+j+\'</a>\'}}5 e=M(l)+1;4(l<j){4(m==\'3\'){b+=\'<a 6="3-7 3-15" 9="#" z="L(\'+e+\');B x"></a>\'}h{b+=\'<a 6="3-7 3-15" 9="#" z="I(\'+e+\');B x"></a>\'}}b+=\'\';5 f=A.1s(\'1t\');5 g=A.1r(\'1A-1D\');1a(5 p=0;p<f.O;p++){f[p].1c=b}4(f&&f.O>0){b=\'\'}4(g){g.1c=b}}G 12(a){5 b=a.1f;5 c=M(b.1E$1B.$t,10);1b(c)}G 1d(){5 a=s;4(a.k(\'/v/u/\')!=-1){4(a.k(\'?T-i\')!=-1){w=a.H(a.k(\'/v/u/\')+14,a.k(\'?T-i\'))}h{w=a.H(a.k(\'/v/u/\')+14,a.k(\'?&i\'))}}4(a.k(\'?q=\')==-1&&a.k(\'.1C\')==-1){4(a.k(\'/v/u/\')==-1){m=\'3\';4(s.k(\'#F=\')!=-1){l=s.H(s.k(\'#F=\')+8,s.O)}h{l=1}A.18(\'<r Q=\\\'\'+y+\'P/R/N?i-o=1&X=Y-S-r&V=12\\\'><\\/r>\')}h{m=\'u\';4(a.k(\'&i-o=\')==-1){n=1F}4(s.k(\'#F=\')!=-1){l=s.H(s.k(\'#F=\')+8,s.O)}h{l=1}A.18(\'<r Q="\'+y+\'P/R/N/-/\'+w+\'?X=Y-S-r&V=12&i-o=1" ><\\/r>\')}}}G L(a){Z=(a-1)*n;K=a;5 b=A.1h(\'1q\')[0];5 c=A.1o(\'r\');c.1e=\'1m/1n\';c.1i(\'Q\',y+\'P/R/N?1j-1k=\'+Z+\'&i-o=1&X=Y-S-r&V=13\');b.1l(c)}G I(a){Z=(a-1)*n;K=a;5 b=A.1h(\'1q\')[0];5 c=A.1o(\'r\');c.1e=\'1m/1n\';c.1i(\'Q\',y+\'P/R/N/-/\'+w+\'?1j-1k=\'+Z+\'&i-o=1&X=Y-S-r&V=13\');b.1l(c)}G 13(a){11=a.1f.1x[0];5 b=11.1g.$t.H(0,19)+11.1g.$t.H(1z,1w);5 c=1y(b);4(m==\'3\'){5 d=\'/v?T-i=\'+c+\'&i-o=\'+n+\'#F=\'+K}h{5 d=\'/v/u/\'+w+\'?T-i=\'+c+\'&i-o=\'+n+\'#F=\'+K}1p.9=d}',62,104,'|||page|if|var|class|num||href||||||||else|max|lastPageNo|indexOf|currentPageNo|currentPage|postResults|results|||script|locationUrl||label|search|postLabel|false|home_page|onclick|document|return|span|pageStart|pageEnd|PageNo|function|substring|getLabelPage|pageNumber|noPage|getPage|parseInt|summary|length|feeds|src|posts|in|updated|prev|callback|numOfPages|alt|json|jsonstart||post|dataFeed|findPostDate||next|dots|pageOf|write||for|startPagination|innerHTML|pageCurrentBlogger|type|feed|published|getElementsByTagName|setAttribute|start|index|appendChild|text|javascript|createElement|location|head|getElementById|getElementsByName|pageArea|of|active|29|entry|encodeURIComponent|23|blog|totalResults|html|pager|openSearch|20'.split('|'),0,{}))
//]]>
</script>
</b:if>

<!-- Facebook SDK -->
<script type='text/javascript'>
//<![CDATA[
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//]]>
</script>  
<!-- Overlay and Back To Top --> 
  <div class='back-top' title='Back to Top'/>
</body>
</html>