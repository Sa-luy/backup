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
                                        <td>Họ</td>
                                        <td>Tên</td>
                                        <td>Dịa chỉ</td>
                                        <td>Email</td>
                                        <td>Ngày Đặt Hàng</td>
                                        <td>Trạng Thái mua hàng</td>
                                        <td>Đơn hàng Đã mua</td>
                                        <td>Chức Năng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $customer->firstname }}</td>
                                        <td>{{ $customer->lastname }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>...</td>
                                        <td>{{ $customer->status }}</td>
                                        <td>...</td>
                                        <td> <a href="{{ route('customer.edit', $customer->id) }}"
                                                class="btn btn-success">Chỉnh
                                                Sửa</a>
                                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <a href="{{ route('customer.index') }}"><i class="bi bi-backspace-fill"></i>Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
