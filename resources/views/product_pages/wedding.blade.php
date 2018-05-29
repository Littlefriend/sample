@extends('layouts.product')

@section('jclass','婚庆喜宴')

@section('items')
<li class="p-item">
    <a href="/product/wedding/hhj">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/hhj1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">好合酒</p>
        </div>

    </a>
</li>

<li class="p-item">
    <a href="/product/wedding/xyj">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/xyj1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">喜宴酒</p>
        </div>

    </a>
</li>

<li class="p-item">
    <a href="/product/wedding/klj">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/klj1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">伉俪酒</p>
        </div>

    </a>
</li>

<li class="p-item">
    <a href="/product/wedding/lyj">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/lyj1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">良缘酒</p>
        </div>

    </a>
</li>

<li class="p-item">
    <a href="/product/wedding/mmj">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/mmj1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">美满酒</p>
        </div>

    </a>
</li>

<li class="p-item">
    <a href="/wedding/txj">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/txj1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">同心酒</p>
        </div>

    </a>
</li>

<li class="p-item">
    <a href="/wedding/qt">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/wedding/qt1.png') }}">
        </div>
        <div class="p-item-info">
            <p class="p-item-title">其他</p>
        </div>

    </a>
</li>
@stop