@extends('layouts.main')
@section('content')

    <body>
        <br>
        <div class="page-wrapper">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap mg-t-30" style="background-color: rgb(240, 244, 243)">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Thêm Danh Mục Sản Phẩm</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="form-example-int form-example-st">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" name="name"
                                                    placeholder="Tên Danh Mục">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                @endif

                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                    <div class="form-example-int">
                                        <button class="btn btn-success notika-btn-success">Thêm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
@endsection
