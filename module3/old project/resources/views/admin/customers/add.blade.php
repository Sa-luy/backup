@extends('layouts.main')
@section('content')

    <body>
        <!--[if lt IE 8]>
                                                                                                                                                                                                        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                                            <![endif]-->
        <!-- Start Header Top Area -->
        <br>
        <div class="page-wrapper">
            <div class="row">
                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <div class="form-example-wrap mg-t-30" style="background-color: rgb(228, 239, 246)">
                        <div class="cmp-tb-hd">
                            <h2>Thêm mới khách hàng </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="nk-label">Họ</label>
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="firstname"
                                            value="{{ old('firstname') }}">
                                        @if ($errors->any())
                                            <p style="color:red">{{ $errors->first('firstname') }}</p>
                                        @endif
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
                                        <input type="text" class="form-control" name="lastname">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('firstname') }}</p>
                                    @endif
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
                                        <input type="email" class="form-control" name=" email">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('email') }}</p>
                                    @endif
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
                                        <input type="text" class="form-control" name="address">
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('address') }}</p>
                                    @endif
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
                                            <option value="" class="nk-label">Chọn</option>
                                            <option name="status" value="NORMAN">NORMAN</option>
                                            <option name="status" value="VIP">VIP</option>

                                        </select>
                                        @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('status') }}</p>
                                    @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <center>
                            <div>
                                <button style=" background-color: rgb(17, 195, 226) ; border-radius: 10px">Thêm</button>
                            </div>
                        </center>
                    </div>

                </form>
            </div>

        </div>
        </div>



    </body>
@endsection
