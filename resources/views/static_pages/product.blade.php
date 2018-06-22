@extends('layouts.product')


@section('banner-title','产品中心')
@section('banner-subtitle','Product Center')

@section('items')
<ul class="content-list" id={{$abbr}}>
</ul>

@endsection

@section('script')
<script src="/js/product/{{$abbr}}.js"></script>
@endsection