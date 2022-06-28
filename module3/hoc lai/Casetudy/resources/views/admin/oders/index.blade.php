{{-- @php
foreach ($oders as $oder)
dd($oder->users->name);


@endphp --}}
@extends('layouts.master')
@section('content')

<h1>Danh Sách đơn hàng</h1>
<a href="{{ route('oder.create') }}" class="btn btn-primary ">THÊM</a>
<h1>Danh Sách Sản Phẩm</h1>
@if (Session::has('success'))
    <p class="text-success">
        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
    </p>
@endif
<table class="table table-success align-middle table-striped-columns ">
    {{-- <table class="table table-striped table-hover align-middle"> --}}
    <thead>
        <tr>
            <th>#</th>
            <th>Người mua</th>
            <th>Số điện Thoại</th>
            <th>Địa chỉ giao hàng</th>
            <th>Ngày Giao hàng</th>
            <th>Ghi chú</th>
            <th>Trạng Thái</th>
            <th>Tổng Tiền</th>
           
            <th>Chức năng</th>
        </tr>
        @if (count($oders) == 0)
            <p>Chưa có Sản Phẩm </p>
        @else
            @foreach ($oders as $oder)
                <tr>
                    <td class="text-center">{{ $oder->id }}</td>
                    <td class="text-center">{{ $oder->users->name }}</td>
                    <td class="text-center">{{ $oder->phone }}</td>
                    <td class="text-center">{{ $oder->delivery_address }}</td>
                    <td class="text-center">{{ $oder->delivery }}</td>
                    <td class="text-center">{{ $oder->note }}</td>
                    <td class="text-center">{{ $oder->status }}</td>
                    <td class="text-center">{{ $oder->total_money }}</td>

                  
                    <td class="text-center">
                        <a href="{{ route('oder.show', $oder->id) }}"
                            class="btn btn-primary align-middle">Xem</a>
                            <a href="{{ route('oder.edit', $oder->id) }}"
                                class="btn btn-primary align-middle">Sửa</a>
                        <form action="{{ route('oder.destroy', $oder->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger align-middle" type="submit"
                                onclick="return confirm('Bạn muốn xóa {{ $oder->name }} ?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </thead>
</table>

@endsection
