@extends('layouts.main')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product.create') }}"><button
                                class="btn btn-success notika-btn-success">Thêm</button></a>
                        <center>
                            <h4 class="card-title">Danh Mục Sản Phẩm</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên SP</th>
                                        <th>Ma SP</th>
                                        <th>Chức năng</th>

                                    </tr>
                                </thead>
                                @foreach ($products as $key => $product)
                                    <tbody>
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->category_id }}</td>
                                            <td>
                                                <a href="{{ route('product.show', $product->id) }}"
                                                    class="btn btn-success">xem</a>
                                                <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-success">Chỉnh
                                                    Sửa</a>
                                                <form action="{{ route('product.destroy', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
