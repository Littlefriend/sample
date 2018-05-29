@extends('layouts.default')

@section('content')
<div class="p-wrapper">
    <div class="p-content">
        <div class="p-header-box">
            <div class="p-title-icon">
            </div>        
            <div class="p-title">
                <p id="p-title">@yield('jclass')</p>
                <p id="p-subtitle">@yield('classInfo')</p>
            </div>
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