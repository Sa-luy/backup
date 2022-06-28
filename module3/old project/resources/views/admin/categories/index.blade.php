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
                        <a href="{{ route('category.create') }}"><button
                                class="btn btn-success notika-btn-success">Thêm</button></a>
                        <center>
                            <h4 class="card-title">Danh Mục Sản Phẩm</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Danh mục</th>
                                        <th>Chức năng</th>

                                    </tr>
                                </thead>
                                @foreach ($categories as $category)
                                    <tbody>
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('category.show', $category->id) }}"
                                                    class="btn btn-success">xem</a>
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-success">Chỉnh
                                                    Sửa</a>
                                                <form action="{{ route('category.destroy', $category->id) }}"
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
