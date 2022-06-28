@extends('layouts.main')
@section('content')
    <style>
        form {
            margin-left: 200px;
        }
    </style>
    <br>
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap mg-t-30" style="background-color: rgb(240, 244, 243)">
                    <div class="cmp-tb-hd cmp-int-hd">
                    </div>

                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                <h2>Thêm Sản Phẩm Mới</h2>
                                <strong> Name:</strong> <br>
                                <input type="text" placeholder="tên sản phẩm" name="product_name"
                                    value="{{ old('name') }}">
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('product_name') }}</p>
                                @endif
                                <br>
                                <strong>USES :</strong> <br>
                                <input type="text" placeholder="cách dùng" name="uses" value="{{ old('uses') }}">
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('uses') }}</p>
                                @endif
                                <br>
                                <strong>Price:</strong> <br>
                                <input type="number" placeholder="Giá" name="price" value="{{ old('price') }}">
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('price') }}</p>
                                @endif
                                <br>
                                <strong>Manufacture Day :</strong> <br>
                                <input type="date" placeholder="ngày sản xuất" name="manufacture_day">
                                <br>
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('manufacture_day') }}</p>
                                @endif
                                <strong>Expiry:</strong> <br>
                                <input type="date" placeholder="hạn sử dụng" name="expiry">
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('expiry') }}</p>
                                @endif
                                <br>
                                <strong>CategoryID :</strong> <br>
                                <input type="number" placeholder="mã loại sản phẩm"
                                    name="category_id"value="{{ old('category_id') }}"><br>
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('category_id') }}</p>
                                @endif







                                <div class="form-example-int">
                                    <button class="btn btn-success notika-btn-success">Thêm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
