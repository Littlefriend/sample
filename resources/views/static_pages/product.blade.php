@extends('layouts.product')


@section('banner-title','产品中心')
@section('banner-subtitle','Product Center')

@section('items')
<ul class="content-list" id={{$abbr}}>
</ul>

@endsection

@section('script')
<script src="/js/product/{{$abbr}}.js"></script>
<script>
    var url = window.location.href;
    var filters = document.getElementsByClassName('p-filter');
    var link='';
    for(var i=0; i<filters.length; i++){
        link = filters[i].getAttribute("href");
        if(url.indexOf(link) != -1){
            filters[i].classList.add("filter-on");
        }else{
            filters[i].classList.remove("filter-on");
        }
    }
</script>
@endsection