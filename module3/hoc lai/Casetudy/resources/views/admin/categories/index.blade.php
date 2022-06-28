@extends('layouts.master');
@section('content')
    <h1>Danh mục Sản Phẩm</h1>

    <a href="{{ route('category.create') }}" class="btn btn-primary ">THÊM</a>
    @if (Session::has('success'))
        <p class="text-success">
            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
        </p>
    @endif
    <table class="table table-striped table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">số lượng sản phẩm</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td class="text-center">{{ $category->name }}</td>
                    <td class="text-center">{{ $category->products->count() }}</td>
                    <td><a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary align-middle">Sửa</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger align-middle" type="submit" onclick="return confirm('Bạn muốn xóa {{$category->name}} ?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
