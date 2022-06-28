@extends('layouts.main')
@section('content')
    <style>
        .table .btn-success,
        .btn-danger {
            float: left;
            margin-right: 5px
        }
    </style>
    <br>
    <div class="page-wrapper">
        <center>
            <h1>Danh sách Khách Hàng</h1>
        </center>

        <a href="{{ route('customer.create') }}"><button class="btn btn-success notika-btn-success">Thêm</button></a>

        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>STT</th>
                                        <th>Họ</th>
                                        <th>Tên</th>
                                        <th>email</th>
                                        <th>Trạng Thái</th>
                                        <th>Chức Năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->id }}</td>
                                            <td>{{ $customer->firstname }}</td>
                                            <td>{{ $customer->lastname }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->status }}</td>
                                            <td>
                                                <a href="{{ route('customer.show', $customer->id) }}"
                                                    class="btn btn-success">xem</a>
                                                <a href="{{ route('customer.edit', $customer->id) }}"
                                                    class="btn btn-success">Chỉnh
                                                    Sửa</a>
                                                <form action="{{ route('customer.destroy', $customer->id) }}"
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
                            {{-- <a href="{{ view('admin.admin') }}">Quay Lại Trang Quản lí</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
