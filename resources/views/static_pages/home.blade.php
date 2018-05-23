@extends('layouts.default')

@section('content')

 
    <div class="J_banner J_banner2">
        <ul class="img">
            <li><a href=""><img src="{{ URL::asset('img/home/slide1.jpg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ URL::asset('img/home/slide2.jpg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ URL::asset('img/home/slide3.jpg') }}" alt=""></a></li>
        </ul>
        <ul class="pointer"></ul>
        <a class="cut prev"><</a>
        <a class="cut next">></a>
    </div>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="/js/Myapi.js"></script>
    <script type="text/javascript">
      var banner = new Myapi();
      banner.JSON.lagout($('.J_banner2'),2000,10);
    </script>
@stop