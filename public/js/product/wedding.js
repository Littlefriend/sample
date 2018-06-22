var arr=[{'abbr':'hhj','name':'好合酒'},
{'abbr':'klj','name':'伉俪酒'},
{'abbr':'mmj','name':'美满酒'},
{'abbr':'txj','name':'同心酒'},
{'abbr':'lyj','name':'良缘酒'},
{'abbr':'xyj','name':'喜宴酒'},
{'abbr':'qt','name':'其他'},];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/business/'+arr[i].abbr+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/wedding/'+arr[i].abbr+'1'+
            '.png"></div><div class="p-item-info"><p class="p-item-title">'+arr[i].name+'</p></div></a></li>';
}

$('.content-list').append(result);

$('#wedding').addClass('filter-on');