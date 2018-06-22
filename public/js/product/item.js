var bigImgSrc = '/img/product/'+jclass+'/big/';
$(document).ready(function(){
var length=$("#img img").length;
var i=1;
var imgDistance = 63;

//关键函数：通过控制i ，来显示图片
function showImg(i){
    $("#img img")
        .eq(i).stop(true,true).fadeIn(800)
        .siblings("img").hide();
        $("#cbtn li")
        .eq(i).addClass("hov")
        .siblings().removeClass("hov");
    $('.zoomImg').attr('src', bigImgSrc+i+imgType);
    if(arr[i]){
        $('.p-sub').html('——'+arr[i]);  
    }else{
        $('.p-sub').html('——背面');  
    }
}

function slideNext(){
    if(index >= 0 && index < length-1) {
            ++index;
            showImg(index);
    }else{
        showImg(0);
        index=0;
        aniPx=(length-7)*imgDistance+'px'; //所有图片数 - 可见图片数 * 每张的距离 = 最后一张滚动到第一张的距离
        $("#cSlideUl ul").animate({ "left": "+="+aniPx },200);
        i=1;
        return false;
    }
    if(i<0 || i>length-7) {return false;}						  
            $("#cSlideUl ul").animate({ "left": "-="+imgDistance },200)
            i++;
}
    
function slideFront(){
    if(index >= 1 ) {
            --index;
            showImg(index);
    }
    if(i<2 || i>length+5) {return false;}
            $("#cSlideUl ul").animate({ "left": "+="+imgDistance },200)
            i--;
}	
$("#img img").eq(0).show();
$("#cbtn li").eq(0).addClass("hov");
$("#cbtn tt").each(function(e){
    var str=(e+1)+"";
    $(this).html(str)
})

$(".picSildeRight,#next").click(function(){
        slideNext();
    })
$(".picSildeLeft,#front").click(function(){
        slideFront();
    })
$("#cbtn li").click(function(){
    index  =  $("#cbtn li").index(this);
    showImg(index);
});	
$("#next,#front").hover(function(){
    $(this).children("a").fadeIn();
},function(){
    $(this).children("a").fadeOut();
});

showImg(indextest);
console.log("indextest"+indextest);
$('.zoomImg').attr('src', bigImgSrc+indextest+imgType);
console.log("setup"+indextest);
});