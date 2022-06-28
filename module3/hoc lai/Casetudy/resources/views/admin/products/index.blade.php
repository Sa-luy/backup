@extends('layouts.master')
@section('content')
    {{-- @php
    dd(Auth::user())->toArray();
@endphp --}}
    <br>
    <a href="{{ route('product.create') }}" class="btn btn-primary ">THÊM</a>
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
                <th>Tên Sản Phẩm</th>
                <th>Ngày Sản Xuất</th>
                <th>Hạn Sử dụng</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Mã Danh Mục</th>
                <th>Chi Tiết Sản Phẩm</th>
                <th>Ảnh Thu nhỏ</th>
                <th>Chức năng</th>
            </tr>
            @if (count($products) == 0)
                <p>Chưa có Sản Phẩm </p>
            @else
                @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->id }}</td>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->expiry }}</td>
                        <td class="text-center">{{ $product->manufacture_day }}</td>
                        <td class="text-center">{{ $product->price }}</td>
                        <td class="text-center">{{ $product->amouth }}</td>
                        <td class="text-center">{{ $product->category_id }}</td>
                        <td class="text-center">{{ $product->description }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $product->image) }}" alt=""
                                style="width: 150px">
                        </td>
                        <td class="text-center"><a href="{{ route('product.edit', $product->id) }}"
                                class="btn btn-primary align-middle">Sửa</a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger align-middle" type="submit"
                                    onclick="return confirm('Bạn muốn xóa {{ $product->name }} ?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </thead>
    </table>

@endsection
