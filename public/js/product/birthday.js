var arr=[{'abbr':'brj','name':'百日酒'},
{'abbr':'myj','name':'满月酒'},
{'abbr':'srj','name':'生日酒'},
{'abbr':'zshj','name':'祝寿酒'},
{'abbr':'qt','name':'其他'},];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/birthday/item/'+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/birthday/'+arr[i].abbr+'1'+
            '.png"></div><div class="p-item-info"><p class="p-item-title">'+arr[i].name+'</p></div></a></li>';
}

$('.content-list').append(result);

var imageLables="";
var imgType='.png';
var jclass = "birthday";
num = 16;
for(i=0;i<num;i++){
    imageLables += '<img src="/img/product/birthday/big/'+i+imgType+'" class="item-img">';
}
$('#img').prepend(imageLables);
imageLables="";
for(i=0;i<num;i++){
    imageLables += '<li><img src="/img/product/birthday/'+i+imgType+'"><tt></tt></li>';
}
$('#slide-list').append(imageLables);

var detailHtml="";
var detail={'name':'生日庆贺','type':'酱香型','vol':'53% vol',};
detailHtml = '<p class="p-name">'+detail.name+'</p><p class="p-sub">'+
    '————</p><p class="p-des"><span class="p-prop">名称：</span>'+detail.name+
    '</p><p class="p-des"><span class="p-prop">香型：</span>'+detail.type+
    '</p><p class="p-des"><span class="p-prop">酒精度：</span>'+detail.vol+
    '</p><p class="p-des"><span class="p-prop">净含量：</span>'+'500 ml'+
    '</p><p class="p-des"><span class="p-prop">包装：</span>'+'1*6'+'</p>';

$('#p-detail').append(detailHtml);