@extends('layouts.item')

@section('link_subtitle','产品中心')
@section('banner-title',' > 产品详情')
@section('banner-subtitle','Product Detail')

@section('script')
<script src="/js/product/{{$abbr}}.js"></script>
<script>
    $(document).ready(function(){
			$('#img').zoom();		 
        });
        var indextest={{$index}};
</script>
<script src="/js/jquery.zoom.min.js"></script>
<script src="/js/product/item.js"></script>
@endsection