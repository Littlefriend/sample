
 //获取滚动条高度
 function getScrollTop(){   
    var scrollTop=0;   
    if(document.documentElement&&document.documentElement.scrollTop){   
        scrollTop=document.documentElement.scrollTop;   
    }else if(document.body){   
        scrollTop=document.body.scrollTop;   
    }   
    return scrollTop;   
}   

var offset_sec1 = -800;
$('#section1').hide();
document.onscroll = function(){  
    var scrollLen = getScrollTop();
    // console.log(scrollLen);
    if(scrollLen>100 && scrollLen<1800){
        offset_sec1 = scrollLen/1.5-100-800;
        $('#section1').css({"background-position":"0px "+offset_sec1+"px"});
    }
    if(scrollLen<10){
        $('#section1').hide();
    }else{
        $('#section1').show();
    }
}

$('.flicker-example').flicker({
    dot_navigation: false
});
