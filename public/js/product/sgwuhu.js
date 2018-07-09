var arr=[{'abbr':'gy','name':'关羽'},
{'abbr':'hz','name':'黄忠'},
{'abbr':'mc','name':'马超'},
{'abbr':'zf','name':'张飞'},
{'abbr':'zy','name':'赵云'},];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/sgwuhu/item'+arr[i].abbr+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/sanguo/'+arr[i].abbr+
            '.jpg"></div><div class="p-item-info"><p class="p-item-title">'+'三国五虎将-'+arr[i].name+'</p></div></a></li>';
}

$('.content-list').append(result);