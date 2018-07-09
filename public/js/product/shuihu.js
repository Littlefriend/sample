var arr=[{'abbr':'sj','name':'宋江'},
{'abbr':'hz','name':'卢俊义'},
{'abbr':'mc','name':'吴用'},
{'abbr':'zf','name':'索超'},
{'abbr':'zy','name':'赵云'},];
var result = "";
var num = arr.length;
for(i=0;i<num;i++){
    result += '<li class="p-item"><a href="/product/shuihu/item'+arr[i].abbr+
            '"><div class="p-item-img"><img class="p-img" src="/img/product/shuihu/'+(i+1)+
            '.jpg"></div><div class="p-item-info"><p class="p-item-title">'+'水浒108将-'+arr[i].name+'</p></div></a></li>';
}

$('.content-list').append(result);