@extends('layouts.item')

@section('jclass','好合酒')

@section('items')
<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/hhj1.png') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/hhj2.png') }}">
        </div>
    </a>
</li>

@stop
