<!DOCTYPE html>
<html>
<head>
	<title>大师酒坊@yield('subtitle')</title>
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js"></script>
	    <style type="text/css" media="screen">
        @charset "utf-8";
        *{margin: 0;padding: 0;}
        img{border:0;display:block;}
        ol, ul ,li{list-style: none;}
        body{background:#FFF;}
        a{outline:none;text-decoration:none;}
        .pointer{height:4px;position:absolute;bottom:0px;}
        .pointer li{width:42px;height:1px;background:#5a5a5a;float:left;margin:0 5px;cursor: pointer;}
        .pointer li.now{height:4px;background:#c8c8c8;}
        .cut{background:#bdbdbd;position:absolute;font-family:'宋体';color:#fff;text-align:center;cursor:pointer;opacity:0.2;}
        .J_banner{max-width:100%;position:relative;overflow:hidden;margin:0 auto 10px;}
        .J_banner .img{width:2000px;overflow:hidden;position:absolute;top:0;left:0;}
        .J_banner .img li{float:left;position:relative;}
        .J_banner1 .pointer{width:100px;height:15px;position:absolute;bottom:16px;left:50%;}
        .J_banner1 .pointer li{width:15px;height:15px;background:#d0d0d0;border-radius:50%;margin:0 5px;float:left;}
        .J_banner1 .pointer li.now{background:#fff;}
        .J_banner .cut{width:34px;height:58px;left:20px;font-size:18px;line-height:58px;}
        .J_banner .cut.next{left:auto;right:20px;}
        h1{color:#fff;text-align:center;padding:50px 0 30px;}
    </style>
</head>
<body>
	@include('layouts._header')
	@yield('content')
	@include('layouts._footer')
</body>
</html>