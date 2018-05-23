@extends('layouts.default')

@section('subtitle','产品介绍')

@section('content')
<div class="p-wrapper">
<div class="p-content">
<div class="p-header-box">
	<div class="p-title-icon"></div>
	<div class="p-title">
		<p id="p-title">产品展示</p>
		<p id="p-subtitle">专营定制酒</p>
	</div>
</div>
<div class="title-divider"></div>
<div class="p-buttons">
	<button class="p-filter">全部</button>
	<button class="p-filter">商务款待</button>
	<button class="p-filter">婚庆喜宴</button>
	<button class="p-filter">生日庆贺</button>
	<button class="p-filter">文化专题</button>
</div>
<div class="p-item-list">
	<div class="wrapper">
		<ul class="content-list">
			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product1.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">迎宾酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product2.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">慰问酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product1.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">迎宾酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product2.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">慰问酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>


			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product2.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">慰问酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product1.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">迎宾酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product2.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">慰问酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product1.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">迎宾酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product2.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">慰问酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>

			<li class="p-item">
				<a href="">
					<div class="p-item-img">
						<img class="p-img" src="{{ URL::asset('img/product/product1.png') }}">
					</div>
					<div class="p-item-info">
						<p class="p-item-title">迎宾酒</p>
						<p class="p-item-subtitle">酱香型30</p>
					</div>

				</a>
			</li>



		</ul>

	</div>
</div>
</div>
</div>


@stop

