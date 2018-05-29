@extends('layouts.item')

@section('jclass','良缘酒')

@section('items')
<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/lyj1.png') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/lyj2.png') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/lyj3.png') }}">
        </div>
    </a>
</li>

@stop
