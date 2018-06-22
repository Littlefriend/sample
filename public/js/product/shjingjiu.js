$('.content-list').html="";
var arr=['豫园湖心亭',
'豫园玉玲珑',
'豫园卷雨楼',
'豫园大假山',
'新华路街景',
'新天地会馆',
'外白渡桥',
'浦江两岸',
'南京路步行街',
'淮海路街景',
'淮海中路席宅',
'新天地休闲街',
'大江东去 ',
'浦东新韵',
'百柯争流',
'浦江金湾',
'魔都夜色',
'今昔同辉',
'江上寻梦',
'外滩晨钟'];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/shjingjiu/item/'+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/shjingjiu/'+i+
            '.png"></div><div class="p-item-info"><p class="p-item-title">'+arr[i]+'</p></div></a></li>';
}

$('.content-list').append(result);

$('#shjingjiu').addClass('filter-on');
var jclass='shjingjiu';
var imgType='.png';
var imageLables="";
for(i=0;i<num;i++){
    imageLables += '<img src="/img/product/'+jclass+'/big/'+i+imgType+'" class="item-img">';
}
$('#img').prepend(imageLables);
imageLables="";
for(i=0;i<num;i++){
    imageLables += '<li><img src="/img/product/'+jclass+'/'+i+imgType+'"><tt></tt></li>';
}
$('#slide-list').append(imageLables);

var detailHtml="";
var detail={'name':'上海景酒','type':'酱香型','vol':'53% vol',};
detailHtml = '<p class="p-name">'+detail.name+'</p><p class="p-sub">'+
    '</p><p class="p-des"><span class="p-prop">名称：</span>'+detail.name+
    '</p><p class="p-des"><span class="p-prop">香型：</span>'+detail.type+
    '</p><p class="p-des"><span class="p-prop">酒精度：</span>'+detail.vol+
    '</p><p class="p-des"><span class="p-prop">净含量：</span>'+'500 ml'+
    '</p><p class="p-des"><span class="p-prop">包装：</span>'+'1*6'+'</p>';

$('#p-detail').append(detailHtml);