@extends('layouts.default')

@section('content')
<div class="p-wrapper">
    <div class="p-content">
        <div class="p-header-box">
            <div class="p-title-icon">
            </div>        
            <div class="p-title">
                <p id="p-title">迎宾酒</p>
                <p id="p-subtitle">some description</p>
            </div>
        </div>
        <div class="p-item-list">
			<div class="wrapper">
				<ul class="content-list">
					<li class="p-item">
						<a href="/item">
							<div class="p-item-img">
								<img class="p-img" src="{{ URL::asset('img/product/business/ybj1.jpg') }}">
							</div>
						</a>
					</li>

					<li class="p-item">
						<a href="">
							<div class="p-item-img">
								<img class="p-img" src="{{ URL::asset('img/product/business/ybj2.jpg') }}">
							</div>
						</a>
					</li>
                    
				</ul>
			</div>
		</div>
    </div>
</div>

@stop