@extends('master')
@section('content')
<div class="row" style="margin-top:20px">
    <div class="col-sm-8">
    <form action="{{route('update_sp',$update_product->id)}}" method="POST" id="form-add">
    @csrf
    {{-- <input type="file" name="file" style="width:50%"> --}}
    <div class="row">
        <div class="col-sm-3"><label for="">Hình ảnh minh họa</label></div>
    <div class="col-sm-7"><img src="{{url('/image/product/'.$update_product->image)}}" alt=""></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><label for="">Tên sản phẩm</label></div>
    <div class="col-sm-7"><input type="text" name="name" placeholder="" value="{{$update_product->name}}"></div>
    </div>

    <div class="row">
            <div class="col-sm-3"><label for="">Mô tả</label></div>
    <div class="col-sm-7"><input type="text" name="description" value="{{$update_product->description}}"></div>
        </div>

        <div class="row">
                <div class="col-sm-3"><label for="">Giá gốc</label></div>
        <div class="col-sm-7"><input type="float" name="unit_price" value="{{$update_product->unit_price}}"></div>
            </div>

            <div class="row">
                    <div class="col-sm-3"><label for="">Khuyến mãi</label></div>
                    <div class="col-sm-7"><input type="float" name="promotion_price" value="{{$update_product->promotion_price}}"></div>
                </div>

                <div class="row">
                        <div class="col-sm-3"><label for="">New</label></div>
                        <div class="col-sm-7"><select name="new">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select></div>
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary">
</form>
</div>
</div>

@endsection