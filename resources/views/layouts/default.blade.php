<!DOCTYPE html>
<html>
<head>
    <title>大师酒坊@yield('subtitle')</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/flickerplate.css" />
    <link rel="shortcut icon" href="/img/favicon.ico" />
    <script src="/js/app.js"></script>
    <script src="/js/modernizr-custom-v2.7.1.min.js"></script>
    <script src="/js/jquery-finger-v0.1.0.min.js"></script>
    <script src="/js/flickerplate.min.js"></script>
    <style type="text/css" media="screen">
        @charset "utf-8";
        *{margin: 0;padding: 0;}
        img{border:0;display:block;}
        ol, ul ,li{list-style: none;}
        body{background:black;}
        a{outline:none;text-decoration:none;}
        h1{color:#fff;text-align:center;padding:50px 0 30px;}
    </style>
    <script>
        $(function(){
            function activeNav(){
                var url = document.location.href;
                var navs = document.getElementsByClassName("nav-item");
                for(var i = 0; i < navs.length; i++){
                    var aLink = navs[i].getAttribute("href");
                    if(url.indexOf(aLink) != -1){
                        navs[i].classList.add("active-item");
                    }else{
                        navs[i].classList.remove("active-item");
                    }
                };
            };
            activeNav();
        });
    </script>
</head>
<body>
    @include('layouts._header')
    @yield('banner')
	@yield('content')
    @include('layouts._footer')
    @yield('script')
    
</body>
</html>