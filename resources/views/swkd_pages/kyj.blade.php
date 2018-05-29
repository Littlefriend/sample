@extends('layouts.product.swkd')
@section('item_class','开业酒')

@section('items')
<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/business/kyj1.jpg') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/business/kyj2.png') }}">
        </div>
    </a>
</li>

<li class="p-item">
    <a href="">
        <div class="p-item-img">
            <img class="p-img" src="{{ URL::asset('img/product/business/kyj3.png') }}">
        </div>
    </a>
</li>



@stop
