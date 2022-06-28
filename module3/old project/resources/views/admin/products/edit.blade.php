@extends('layouts.main')
@section('content')
    <style>
        .table .btn-success,
        .btn-danger {
            float: left;
            margin-right: 5px
        }
    </style>
    <div class="page-wrapper">
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product.update', $id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>use</th>
                                            <th>Price</th>
                                            <th>HSD</th>
                                            <th>NXS</th>
                                            <th>Category_ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="name" value="{{ $product->product_name }}" >
                                            </td>
                                            <td><input type="text" name="uses" value="{{ $product->uses }}"></td>
                                            <td><input type="number" name="price" value="{{ $product->price }}"></td>
                                            <td><input type="text" name="expiry" value="{{ $product->expiry }}"></td>
                                            <td><input type="text" name="manufacture_day"
                                                    value="{{ $product->manufacture_day }}"></td>
                                            <td><input type="text" name="category_id"
                                                    value="{{ $product->category_id }}">
                                            </td>
                                            <td>...</td>
                                            {{-- <td> <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-success">Chỉnh
                                                Sửa</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Xóa</button>
                                            </form>
                                        </td> --}}
                                        </tr>

                                        <tr>
                                            <td><button
                                                    style=" background-color: rgb(17, 195, 226) ; border-radius: 10px">Lưu
                                                    Lại</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </form>
                    </div>
                    <button onclick="history.go(-2)">Go Back </button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
