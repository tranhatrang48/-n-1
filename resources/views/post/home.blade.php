@extends('main')
@section('content')
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer" >
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                            
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                            <img src="{{url('/image/slide/banner2.jpg')}}" alt="" style="width:100%;height:600px">
                                  </div>
                                  {{-- luôn phải để 1 item ở trạng thái active , trong foreach sẽ lấy tất cả slide trong db
                                  trừ ảnh đã đc active ở trên để k bị trùng lặp --}}
                            
                                  {{-- còn nếu đặt item active trên ở trong foreach thì tất cả các ảnh trong slide sẽ đc active ra --}}
                                @foreach($slide as $sl)
                                  <div class="item">
                                    <img src="{{url('/image/slide/'.$sl->image)}}" alt="" style="width:100%;height:600px">
                                  </div> 
                                  @endforeach
                                </div>
                            
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>

                    {{-- <div class="banner" >
                        <ul>
                            @foreach($slide as $sl)
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" 
                                    data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" 
                                    data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" 
                                        src="{{url('/image/slide/'.$sl->image)}}" data-src="{{url('/image/slide/'.$sl->image)}}" 
                                        style=" background-color: rgba(0, 0, 0, 0); 
                                                background-repeat: no-repeat; background-image: {{url('/image/slide/'.$sl->image)}}; 
                                                background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
    
                <div class="tp-bannertimer"></div>
            </div>
        </div>
                    <!--slider-->
        
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h4>New Product</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">Tìm thấy {{count($count_new_product)}} sản phẩm</p>
                                    <div class="clearfix"></div>
                                </div>
    
                                <div class="row">
                                    @foreach($new_product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                                @if($new->promotion_price != 0)
                                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                                @endif
                                            <div class="single-item-header">
                                                <a href="/product"><img src="{{url('/image/product/'.$new->image)}}" alt="" height="250px"></a>
                                            </div>
                                            <div class="single-item-body">
                                            <p class="single-item-title">{{$new->name}}</p>
                                                <p class="single-item-price">
                                                    @if($new->promotion_price==0)
                                                <span>{{number_format($new->unit_price)}} đồng</span>
                                                @else
                                                <span>{{number_format($new->unit_price-$new->promotion_price)}} đồng</span>
                                                @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="/product/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>
                            <div class="row">{{$new_product->links()}}</div>
                            </div> <!-- .beta-products-list -->
    
                            <div class="space50">&nbsp;</div>
    
                            <div class="beta-products-list">
                                <h4>Sale Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">Tìm thấy {{count($sale_product)}} sản phẩm</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($sale_product as $sale)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                                @if($sale->promotion_price != 0)
                                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                                @endif
                                            <div class="single-item-header">
                                                <a href="/product"><img src="{{url('/image/product/'.$sale->image)}}" alt="" height="250px"></a>
                                            </div>
                                            <div class="single-item-body">
                                            <p class="single-item-title">{{$sale->name}}</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="/shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="/product">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                </div>
                            <div class="row">{{$sale_product->links()}}</div>
                                <div class="space40">&nbsp;</div>
                                {{-- <div class="row">
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="/product"><img src="{{url('/image/asset/products/1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="/shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="/product">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
    
                                            <div class="single-item-header">
                                                <a href="/product"><img src="{{url('/image/asset/products/2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">$34.55</span>
                                                    <span class="flash-sale">$33.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="/shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="/product">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="/product"><img src="{{url('/image/asset/products/3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="/shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="/product">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="/product"><img src="{{url('/image/asset/products/3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Sample Woman Top</p>
                                                <p class="single-item-price">
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="/shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="/product">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->
    
    
                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div>
        @endsection