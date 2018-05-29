@extends('layouts.default')

@section('subtitle','产品介绍')

@section('content')
<div class="p-header">
	<div class="p-header-box">
		<div class="p-title-icon"></div>
		<div class="p-title">
			<p id="p-title">产品中心</p>
			<p id="p-subtitle">@yield('jclass')</p>
		</div>
	</div>
</div>

<div class="p-daohang">
    <div class="p-filters">
		<div class="p-buttons">
			<span>定制类： </span>
			<a href="/product/business" class="p-filter">商务款待</a>
			<a href="/product/wedding" class="p-filter">婚庆喜宴</a>
			<a href="/product/birthday" class="p-filter">生日庆贺</a>
			<a href="/product/price" class="p-filter">价格单</a>
		</div>
		<hr>
		<div class="p-buttons">
			<span>专题类： </span>
			<a href="/product/business" class="p-filter">上海景酒</a>
			<a href="/product/wedding" class="p-filter">范大将军酒</a>
			<a href="/product/birthday" class="p-filter">生肖大全</a>
			<a href="/product/culture" class="p-filter">水浒108</a>
			<a href="/product/price" class="p-filter">三国五虎</a>
			<a href="/product/price" class="p-filter">红楼梦金钗</a>
		</div>
		<hr>
		<div class="p-buttons">
			<span>通用类： </span>
			<a href="/product/wedding" class="p-filter">大师酒6年</a>
			<a href="/product/birthday" class="p-filter">大师酒10年</a>
			<a href="/product/culture" class="p-filter">大师酒15年</a>
			<a href="/product/price" class="p-filter">大师酒20年</a>
			<a href="/product/price" class="p-filter">大师酒30年</a>
		</div>
	</div>
</div>

<div class="p-content">
	<div class="p-item-list">
		<div class="wrapper">
			@yield('items')

		</div>
	</div>
</div>



@stop

