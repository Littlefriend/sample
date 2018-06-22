var arr=['林黛玉',
'薛宝钗',
'贾元春',
'贾探春',
'史湘云',
'妙玉',
'贾迎春',
'贾惜春',
'王熙凤',
'巧姐',
'李纨',
'秦可卿',];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/jinchai/item/'+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/jinchai/'+i+
            '.jpg"></div><div class="p-item-info"><p class="p-item-title">'+'金钗-'+arr[i]+'</p></div></a></li>';
}

$('.content-list').append(result);

$('#jinchai').addClass('filter-on');

var imageLables="";
num+=1;
for(i=0;i<num;i++){
    imageLables += '<img src="/img/product/jinchai/big/'+i+'.jpg" class="item-img">';
}
$('#img').prepend(imageLables);
imageLables="";
for(i=0;i<num;i++){
    imageLables += '<li><img src="/img/product/jinchai/'+i+'.jpg"><tt></tt></li>';
}
$('#slide-list').append(imageLables);
var jclass='jinchai';
var imgType='.jpg';

var detailHtml="";
var detail={'name':'金钗酒','type':'酱香型','vol':'53% vol',};
detailHtml = '<p class="p-name">'+detail.name+'</p><p class="p-sub">'+
    '————红楼梦 金陵十二钗</p><p class="p-des"><span class="p-prop">名称：</span>'+detail.name+
    '</p><p class="p-des"><span class="p-prop">香型：</span>'+detail.type+
    '</p><p class="p-des"><span class="p-prop">酒精度：</span>'+detail.vol+
    '</p><p class="p-des"><span class="p-prop">净含量：</span>'+'500 ml'+
    '</p><p class="p-des"><span class="p-prop">包装：</span>'+'1*6'+'</p>';

$('#p-detail').append(detailHtml);
