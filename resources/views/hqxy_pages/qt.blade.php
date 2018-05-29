@extends('layouts.item')

@section('jclass','其他')

@section('items')
<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/mmj1.png') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/mmj2.png') }}">
        </div>
    </a>
</li>

@stop
