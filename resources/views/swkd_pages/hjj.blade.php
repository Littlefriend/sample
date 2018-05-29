@extends('layouts.product.swkd')
@section('item_class','欢聚酒')
@section('items')
<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/business/hjj1.jpg') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/business/hjj2.jpg') }}">
        </div>
    </a>
</li>

@stop
