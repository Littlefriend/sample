@extends('layouts.default')

@section('subtitle','商务款待')

@section('content')
<div class="p-wrapper">
<div class="float-info">
		<div class="info-title">商务款待</div>
	</div>
	<div class="p-content">
		<div class="p-header-box">
			<div class="p-title-icon"></div>
			<div class="p-title">
				<p id="p-title"><a href="/product">产品中心 </a> > 商务款待 ></p>
				<p id="p-subtitle">@yield('item_class')</p>
			</div>
		</div>
		<div class="title-divider"></div>
		<div class="p-buttons">
			<a href="/product/business/hjj"><button class="p-filter">欢聚酒</button><a>
			<a href="/product/business/kyj"><button class="p-filter">开业酒</button><a>
			<a href="/product/business/wwj"><button class="p-filter">慰问酒</button><a>
			<a href="/product/business/ybj"><button class="p-filter">迎宾酒</button><a>
            <a href="/product/business/qt"><button class="p-filter">其他</button><a>
		</div>
		<div class="p-item-list">
			<div class="wrapper">
				<ul class="content-list">
				@yield('items')
				</ul>

			</div>
		</div>
	</div>
</div>


@stop

