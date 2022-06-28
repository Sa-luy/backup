@extends('layouts.master');
@section('content')
<style>
    .form-select{
        padding: 8;
    margin: 0px !important;
    }
</style>
    <h1>Sửa Đổi Dơn đặt hàng  </h1>
    <form action="{{ route('oder.update', $oder->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="{{$oder->phone}}">
                        @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('users_id')}}</div>
                        @endif
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Người mua</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="users_id">
                            <option  value="" selected>Open this select menu</option>
                            @foreach ($users as $user)
                                
                            <option value="{{$user->id}}">{{$user->name }}</option>
                            @endforeach
                            <
                          </select>
                        {{-- <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_id"> --}}
                        {{-- @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('category_id')}}</div>
                        @endif --}}
                        @error('users_id')
                        <div style="color: red" class="form-text">{{$errors->first('users_id')}}</div>
                            @enderror
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa chỉ Giao Hàng</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="delivery_address" value="{{$oder->delivery_address}}">
                        @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('delivery_address')}}</div>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngày Giao Hàng</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="delivery" value="{{$oder->delivery}}">
                        @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('delivery')}}</div>
                        @endif
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ghi chú</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="note" value="{{$oder->note}}">
                        @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('note')}}</div>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Trạng Thái</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="{{$oder->status}}">
                        @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('status')}}</div>
                        @endif
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tổng Tiền</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="total_money" value="{{$oder->total_money}}">
                        @if($errors->any())
                        <div style="color: red" class="form-text">{{$errors->first('total_money')}}</div>
                        @endif
                    </div>
                </td>
            </tr>
        </table>
     


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
