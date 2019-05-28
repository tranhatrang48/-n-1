@extends('main')
@section('content')

<div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Tìm kiếm</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($product as $new)
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
                                            <span>{{number_format($new->unit_price)}} đồng</span>
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
                        {{-- <div class="row">{{$new_product->links()}}</div> --}}
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        {{-- <div class="beta-products-list">
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
                        <div class="row">{{$sale_product->links()}}</div> --}}
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
                              
                            </div> --}}
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div>

@endsection