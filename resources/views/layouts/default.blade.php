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
        body{background:black;}
        a{outline:none;text-decoration:none;}
        h1{color:#fff;text-align:center;padding:50px 0 30px;}
    </style>
</head>
<body>
<script src="/js/jquery-2.1.4.min.js"></script>
    @include('layouts._header')
    @yield('banner')
	@yield('content')
    @include('layouts._footer')
    @yield('script')
    
</body>
</html>