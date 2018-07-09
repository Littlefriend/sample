var arr=['鼠',
'牛',
'虎',
'兔',
'龙',
'蛇',
'马',
'羊',
'猴',
'鸡',
'狗',
'猪',];

var p_des="";
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/shengxiao/item'+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/shengxiao/'+i+
            '.png"></div><div class="p-item-info"><p class="p-item-title">'+'生肖酒-'+arr[i]+'</p></div></a></li>';
}

$('.content-list').append(result);

var imageLables="";
for(i=0;i<num;i++){
    imageLables += '<img src="/img/product/shengxiao/big/'+i+'.png" class="item-img">';
}
$('#img').prepend(imageLables);
imageLables="";
for(i=0;i<num;i++){
    imageLables += '<li><img src="/img/product/shengxiao/'+i+'.png"><tt></tt></li>';
}
$('#slide-list').append(imageLables);
var jclass = 'shengxiao';
var imgType='.png';

var detailHtml="";
var detail={'name':'生肖酒','type':'酱香型','vol':'53% vol',};
detailHtml = '<p class="p-name">'+detail.name+'</p><p class="p-sub">'+
    '————红楼梦 金陵十二钗</p><p class="p-des"><span class="p-prop">名称：</span>'+detail.name+
    '</p><p class="p-des"><span class="p-prop">香型：</span>'+detail.type+
    '</p><p class="p-des"><span class="p-prop">酒精度：</span>'+detail.vol+
    '</p><p class="p-des"><span class="p-prop">净含量：</span>'+'500 ml'+
    '</p><p class="p-des"><span class="p-prop">包装：</span>'+'1*6'+'</p>';

$('#p-detail').append(detailHtml);