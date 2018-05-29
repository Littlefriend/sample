@extends('layouts.default')

@section('subtitle','关于')
@section('content')

<div class="p-wrapper wrapper-about">
    <div class="p-content">
        <div class="p-header-box">
            <div class="p-title-icon"></div>
            <div class="p-title">
              <p id="p-title">关于我们</p>
              <p id="p-subtitle">About Us</p>
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

<div class="container">
      <!-- Example row of columns -->

    <div class="row">
        <div class="col-md-4">
            <h2>大师酒</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>
        <div class="col-md-4">
            <h2>大师酒</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>
        <div class="col-md-4">
            <h2>大师酒</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
    </div>

    <hr>
</div>
@stop