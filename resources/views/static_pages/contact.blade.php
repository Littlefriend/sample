@extends('layouts.default')

@section('subtitle','-联系我们')
@section('content')

<div class="p-wrapper">
    <div class="p-content">
        <div class="p-header-box">
            <div class="p-title-icon"></div>
            <div class="p-title">
              <p id="p-title">联系我们</p>
              <p id="p-subtitle">Contact Us</p>
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
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
    </div>

    <hr>
</div>
@stop