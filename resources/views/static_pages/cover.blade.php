<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="/js/app.js"></script>
        <style type="text/css">

body {
    background-color: #0A152B;
    text-align: center;
}
body,td,th {
    color: #999;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 12px;
}
a:link {
    color: #999;
    text-decoration: none;
}
a:visited {
    text-decoration: none;
    color: #999;
}
a:hover {
    text-decoration: underline;
}
a:active {
    text-decoration: none;
}
</style>
<style type="text/css" media="screen"></style>
    </head>
    <body>
        <div><br/></div>
        <div>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1244" height="700" id="myFlashContent" visibl>
                <param name="movie" value="{{ URL::asset('media/cover.swf') }}">
                <param name="quality" value="high">
                <param name="vmode" value="opaque">
                <param name="swfversion" value="11.0.0.0">
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="{{ URL::asset('media/cover.swf') }}" width="1244" height="700">
                    <param name="movie" value="{{ URL::asset('media/cover.swf') }}">
                    <param name="quality" value="high">
                    <param name="vmode" value="opaque">
                    <param name="swfversion" value="11.0.0.0">
                <!--<![endif]-->
                    <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player">
                    </a>
                <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
        <script>
            function hasFlash() {

                var swf;
                if (navigator.userAgent.indexOf("MSIE") > 0) {
                    try {
                        var swf = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
                        //alert('已安装flash插件');
                    }
                    catch (e) {
                        //alert('没有安装flash插件');
                        window.location.href="/home";
                    }
                }
                if (navigator.userAgent.indexOf("Firefox") > 0 || navigator.userAgent.indexOf("Chrome") > 0) {
                    swf = navigator.plugins["Shockwave Flash"];
                    if (swf) {
                        //alert('已安装flash插件');
                    }else{
                        //alert('没有安装flash插件');
                        window.location.href="/home";
                    }
                }
            }

            hasFlash();
        </script>
    </body>
</html>