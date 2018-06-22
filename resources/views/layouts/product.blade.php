@extends('layouts.default')

@section('subtitle','产品中心')

@section('banner')
@include('layouts._banner')
@endsection

@section('content')

@include('layouts._daohang')

<div class="p-content">
	@yield('items')
</div>

@endsection

