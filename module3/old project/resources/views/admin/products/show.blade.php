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
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->uses }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->expiry }}</td>
                                        <td>{{ $product->manufacture_day }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>...</td>
                                        <td> <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-success">Chỉnh
                                                Sửa</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
