@extends('master')
@section('content')
<div class="row" style="margin-top:20px">
    <div class="col-sm-8">
    <form action="{{route('add_sp')}}" method="POST" id="form-add" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" style="width:50%">
    <div class="row">
            <div class="col-sm-3"> <label for="">Loại sản phẩm</label></div>
            <div class="col-sm-7"><input type="text" name="id_type" placeholder="Nhập loại sản phẩm"></div>
        </div>

    <div class="row">
        <div class="col-sm-3"> <label for="">Tên sản phẩm</label></div>
        <div class="col-sm-7"><input type="text" name="name" placeholder="Nhập tên sản phẩm"></div>
    </div>

    <div class="row">
            <div class="col-sm-3"> <label for="">Mô tả</label></div>
            <div class="col-sm-7"><input type="text" name="description" placeholder="Nhập môn tả"></div>
        </div>

        <div class="row">
                <div class="col-sm-3">   <label for="">Giá gốc</label></div>
                <div class="col-sm-7">   <input type="float" name="unit_price" placeholder="Nhập giá gốc"></div>
            </div>

            <div class="row">
                    <div class="col-sm-3"> <label for="">Khuyến mãi</label></div>
                    <div class="col-sm-7"> <input type="float" name="promotion_price" placeholder="Nhập giá khuyến mãi(nếu không có thì nhập 0)"></div>
                </div>

                <div class="row">
                        <div class="col-sm-3"><label for="">New</label></div>
                        <div class="col-sm-7"><select name="new">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select></div>
                    </div>

                    <input type="submit" value="Add" class="btn btn-info" style="margin:0 auto;display:block">
</form>
</div>
</div>

@endsection