@extends('layouts.default')

@section('banner')
@include('layouts._banner')
@endsection

@section('content')
<div class="p-content">
    <div class="p-product">
        <div class="p-gallery">
            <div id="wrapper">
                <!--滚动看图-->
                <div id="picSlideWrap" class="clearfix"><br>
                    <div class="imgnav" id="imgnav"> 
                        <div id="img"> 
                            <div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                            <div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                        </div>
                        
                        <div id="content">

                        </div>
                        
                        <div id="cbtn">
                            <i class="picSildeLeft"><img src="/img/ico/picSlideLeft.gif"></i> 
                            <i class="picSildeRight"><img src="/img/ico/picSlideRight.gif"></i> 
                            <div id="cSlideUl">
                                <ul id="slide-list">

                                </ul>
                            </div>
                        </div>         
                    </div>
                </div><!--end滚动看图-->
            </div>
            <div class="p-detail" id="p-detail">
            </div>
        </div>

        <div class="table-box">
            <table class="table">
                <caption>定制类价格单</caption>
                <thead> 
                    <tr> 
                        <th>序号</th> 
                        <th>品名</th> 
                        <th>香型</th> 
                        <th>窖藏</th> 
                        <th>酒精度</th>
                        <th>净含量</th> 
                        <th>计量单位</th>
                        <th>价格</th>    
                    </tr> 
                </thead> 
                <tbody> 
                    <tr> 
                        <th scope="row">1</th> 
                        <td>客户自定</td> 
                        <td>酱香</td> 
                        <td>6年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB350</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">2</th> 
                        <td>客户自定</td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB550</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">3</th> 
                        <td>客户自定</td> 
                        <td>酱香</td> 
                        <td>15年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB880</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">4</th> 
                        <td>客户自定</td> 
                        <td>酱香</td> 
                        <td>20年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB2000</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">5</th> 
                        <td>客户自定</td> 
                        <td>酱香</td> 
                        <td>30年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB4000</td>  
                    </tr> 
                </tbody> 
            </table>

            <table class="table">
                <caption>专题类价格单</caption>
                <thead> 
                    <tr> 
                        <th>序号</th> 
                        <th>品名</th> 
                        <th>香型</th> 
                        <th>窖藏</th> 
                        <th>酒精度</th>
                        <th>净含量</th> 
                        <th>计量单位</th>
                        <th>价格</th>    
                    </tr> 
                </thead> 
                <tbody> 
                    <tr> 
                        <th scope="row">1</th> 
                        <td><a>范大将军签名酒</a></td> 
                        <td>酱香</td> 
                        <td>16年</td> 
                        <td>53%vol</td> 
                        <td>2500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB4999</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">2</th> 
                        <td><a  href="/product/fanda/item">范大将军酒</a></td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB680</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">3</th> 
                        <td><a>申花冠军酒</a></td> 
                        <td>酱香</td> 
                        <td>6年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB398</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">4</th> 
                        <td><a href="/product/shjingjiu/item">上海景酒</a></td> 
                        <td>酱香</td> 
                        <td>6年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB350</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">5</th> 
                        <td><a>旺福贺岁</a></td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>2500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB4999</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">6</th> 
                        <td><a href="/product/shengxiao/item">生肖大全</a></td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>12瓶/箱</td> 
                        <td>RMB12000</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">7</th> 
                        <td><a>鸡有五德</a></td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>5瓶/箱</td> 
                        <td>RMB3000</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">8</th> 
                        <td><a href="/product/sgwuhu/item">三国五虎将</a></td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>5瓶/箱</td> 
                        <td>RMB3000</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">9</th> 
                        <td><a href="/product/shuihu/item">水浒108将大全</a></td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>6瓶/箱*12</td> 
                        <td>RMB65000</td>  
                    </tr> 
                </tbody> 
            </table>

            <table class="table">
                <caption>通用类价格单</caption>
                <thead> 
                    <tr> 
                        <th>序号</th> 
                        <th>品名</th> 
                        <th>香型</th> 
                        <th>窖藏</th> 
                        <th>酒精度</th>
                        <th>净含量</th> 
                        <th>计量单位</th>
                        <th>价格</th>    
                    </tr> 
                </thead> 
                <tbody> 
                    <tr> 
                        <th scope="row">1</th> 
                        <td>余方强大师酒</td> 
                        <td>酱香</td> 
                        <td>6年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB350</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">2</th> 
                        <td>余方强大师酒</td> 
                        <td>酱香</td> 
                        <td>10年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB580</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">3</th> 
                        <td>余方强大师酒</td> 
                        <td>酱香</td> 
                        <td>15年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB900</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">4</th> 
                        <td>余方强大师酒</td> 
                        <td>酱香</td> 
                        <td>20年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB2000</td>  
                    </tr> 
                    <tr> 
                        <th scope="row">5</th> 
                        <td>余方强大师酒</td> 
                        <td>酱香</td> 
                        <td>30年</td> 
                        <td>53%vol</td> 
                        <td>500ml</td>
                        <td>瓶Bottle</td> 
                        <td>RMB4000</td>  
                    </tr> 
                </tbody> 
            </table>
        </div>
    </div>
</div>


@stop