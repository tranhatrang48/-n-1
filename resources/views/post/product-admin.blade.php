@extends('master')
@section('content')

<div class="row"> 
    <div class="col-sm-4">
       <a href="/add_product" class="btn btn-primary">Thêm sản phẩm</a>
    </div>
    </div>
<div class="row">
    <div class="col-sm-9">
    <h3>Danh sách sản phẩm</h3>
    <table class="tb">
        <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá gốc</th>
             <th>Giá khuyến mãi</th>
             <th>Mô tả</th>
             <th>Sửa</th>
             <th>Xóa</th>
        </tr>
        @foreach($product as $p)
        <tr>
        <td><img src="{{url('/image/product/'.$p->image)}}" alt=""></td>
        <td>{{$p->name}}</td>
        <td>{{$p->unit_price}}</td>
        <td>{{$p->promotion_price}}</td>
        <td>{{$p->description}}</td>
        <td><a href="/update_product/{{$p->id}}">Update</a></td>
        <td><a href="/delete_product/{{$p->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    {{-- <p>Tên sản phẩm:</p>
    <p>Hình ảnh minh họa:</p>
    <p>Giá:</p> --}}
    </div>
</div>
</div>
@endsection