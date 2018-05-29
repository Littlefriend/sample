@extends('layouts.default')

@section('content')

<div class="c-container" id="home-slider">
    <div class="J_banner J_banner1">
        <ul class="img">
            <li><a href=""><img src="{{ URL::asset('img/home/slide1.jpg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ URL::asset('img/home/slide2.jpg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ URL::asset('img/home/slide3.jpg') }}" alt=""></a></li>
        </ul>
        <ul class="pointer"></ul>
        <a class="cut prev"><</a>
        <a class="cut next">></a>
    </div>
</div>

@section('script')

<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/js/Myapi.js"></script>
<script type="text/javascript">
    var slider = $('home-slider');
    var banner = new Myapi();
    banner.JSON.lagout($('.J_banner1'),2000,0);
    slider.display="block";
    
</script>

@stop