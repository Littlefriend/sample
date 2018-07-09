var arr=[
    '6年',
    '10年',
    '15年',
    '20年',
    '30年',
    
];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/dashi/item/'+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/dashi/'+i+
            '.jpg"></div><div class="p-item-info"><p class="p-item-title">'+'大师酒-'+arr[i]+'</p></div></a></li>';
}

$('.content-list').append(result);

$('#dashi').addClass('filter-on');

var imageLables="";
num*=2;
for(i=0;i<num;i++){
    imageLables += '<img src="/img/product/dashi/big/'+i+'.jpg" class="item-img">';
}
$('#img').prepend(imageLables);
imageLables="";
for(i=0;i<num;i++){
    imageLables += '<li><img src="/img/product/dashi/'+i+'.jpg"><tt></tt></li>';
}
$('#slide-list').append(imageLables);
var jclass='dashi';
var imgType='.jpg';

var detailHtml="";
var detail={'name':'大师酒','type':'酱香型','vol':'53% vol',};
detailHtml = '<p class="p-name">'+detail.name+'</p><p class="p-sub">'+
    '————大师酒 通用型</p><p class="p-des"><span class="p-prop">名称：</span>'+detail.name+
    '</p><p class="p-des"><span class="p-prop">香型：</span>'+detail.type+
    '</p><p class="p-des"><span class="p-prop">酒精度：</span>'+detail.vol+
    '</p><p class="p-des"><span class="p-prop">净含量：</span>'+'500 ml'+
    '</p><p class="p-des"><span class="p-prop">包装：</span>'+'1*6'+'</p>';

$('#p-detail').append(detailHtml);
