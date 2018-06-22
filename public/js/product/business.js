var arr=[{'abbr':'ybj','name':'迎宾酒'},
{'abbr':'wwj','name':'慰问酒'},
{'abbr':'kyj','name':'开业酒'},
{'abbr':'hjj','name':'欢聚酒'},
{'abbr':'qt','name':'其他'},];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/business/'+arr[i].abbr+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/business/'+arr[i].abbr+
            '.jpg"></div><div class="p-item-info"><p class="p-item-title">'+arr[i].name+'</p></div></a></li>';
}

$('.content-list').append(result);
$('#business').addClass('filter-on');

var imageLables="";
for(i=0;i<num;i++){
    imageLables += '<img src="/img/product/business/big/'+i+'.jpg" class="item-img">';
}