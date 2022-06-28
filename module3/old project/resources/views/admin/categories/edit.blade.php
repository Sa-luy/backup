@extends('layouts.main')
@section('content')
    <br>


    <body>
        <div class="page-wrapper">
            <form action="{{ route('category.update', $id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap mg-t-30">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Sửa Danh Mục</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="form-example-int form-example-st">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" name="name"
                                                    value="{{ $category->name }}">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                @endif

                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                    <div class="form-example-int">
                                        <button class="btn btn-success notika-btn-success">Lưu Thay Đổi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </body>

    <!-- jquery
                                  ============================================ -->
@endsection
