@extends('layouts.product')

@section('items')
<ul class="content-list">
	<li class="p-item">
		<a href="/product/business/ybj">
				<div class="p-item-img">
					<img class="p-img" src="{{ URL::asset('img/product/business/ybj.jpg') }}">
				</div>
			<div class="p-item-info">
				<p class="p-item-title">迎宾酒</p>
			</div>

		</a>
	</li>

	<li class="p-item">
		<a href="/product/business/wwj">
			<div class="p-item-img">
				<img class="p-img" src="{{ URL::asset('img/product/business/wwj.jpg') }}">
			</div>
			<div class="p-item-info">
				<p class="p-item-title">慰问酒</p>
			</div>

		</a>
	</li>

	<li class="p-item">
		<a href="/product/business/kyj">
			<div class="p-item-img">
				<img class="p-img" src="{{ URL::asset('img/product/business/kyj.jpg') }}">
			</div>
			<div class="p-item-info">
				<p class="p-item-title">开业酒</p>
			</div>

		</a>
	</li>

	<li class="p-item">
		<a href="/product/business/hjj">
			<div class="p-item-img">
				<img class="p-img" src="{{ URL::asset('img/product/business/hjj.jpg') }}">
			</div>
			<div class="p-item-info">
				<p class="p-item-title">欢聚酒</p>
			</div>

		</a>
	</li>

	<li class="p-item">
		<a href="/product/business/hpj">
			<div class="p-item-img">
				<img class="p-img" src="{{ URL::asset('img/product/business/hpj.jpg') }}">
			</div>
			<div class="p-item-info">
				<p class="p-item-title">其他</p>
			</div>

		</a>
	</li>
</ul>
<div class="clearfloat"></div>


@stop

