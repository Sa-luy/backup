@extends('layouts.main')
@section('content')
    <style>
        .table .btn-success,
        .btn-danger {
            float: left;
            margin-right: 5px
        }

    </style>

    <body>

        <br>
        <div class="page-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="{{ route('customer.update', $id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-example-wrap mg-t-30" style="background-color: aquamarine">
                            <div class="cmp-tb-hd">
                                <h2>Chỉnh Sửa khách hàng </h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="nk-label">Họ</label>
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{ $customer->firstname }}"
                                                name="firstname">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="nk-label">Tên</label>
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{ $customer->lastname }}"
                                                name="lastname">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="nk-label">Email</label>
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{ $customer->email }}"
                                                name=" email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="nk-label">Address</label>
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-house"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" value="{{ $customer->address }}"
                                                name="address">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label for="" name="satus" class="nk-label">Trạng Thái</label>
                                    <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-edit"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <select data-live-search="true" name="status" class="form-control">
                                                <option name="status" value="{{ $customer->status }}">
                                                    {{ $customer->status }}</option>
                                                <option name="status" value="NORMAN">NORMAN</option>
                                                <option name="status" value="VIP">VIP</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <center>
                                <div>
                                    <button style=" background-color: rgb(17, 195, 226) ; border-radius: 10px">Lưu
                                        Lại</button>
                                </div>
                            </center>
                        </div>

                    </form>
                </div>

            </div>


        </div>
    @endsection
