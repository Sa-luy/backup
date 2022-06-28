<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<style>
    #action {
        display: flex;
    }
</style>

<body>
    <h1>Thi Modul3</h1>
    <div class="mb-3">
        <a href="{{ route('staff.create') }}"><button type="button" class="btn btn-primary">Thêm Mới</button></a>
        <table class="table" style="background-color: beige">


            <form method="GET" action="">
                @csrf
                <div class="row g-3 align-items-center" id="action">
                    <div class="col-auto">
                        <label class="col-form-label">Seach</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" aria-describedby="passwordHelpInline" name="search"
                            placeholder="nhập nội dung tìm kiếm">
                        <button type="submit" class="btn btn-secondary">Tìm</button>
                    </div>
                </div>
            </form>
    </div>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">fullname</th>
            <th scope="col">Gernder</th>
            <th scope="col">Phone</th>
            <th scope="col">Group ID</th>
            <th>Manager</th>

        </tr>
    </thead>
    <tbody>

        {{-- <tr>
            <td>
                <p>không có dữ liệu hiển thị</p>
            </td>
        </tr> --}}

        @foreach ($staffs as $key => $staff)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $staff->fullname }}</td>
                <td>{{ $staff->gender }}</td>
                <td>{{ $staff->phone }}</td>
                <td>{{ $staff->GroupID }}</td>

                <td id="action">
                    <a href="{{ route('staff.edit', $staff->id) }}"><button type="button"
                            class="btn btn-warning">Edit</button>
                    </a>
                    <form action="{{ route('staff.destroy', $staff->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Xóa {{ $staff->fullname }} ?')"
                            type="submit">Xóa</button>
                    </form>
                </td>
                <td>-

                </td>
            </tr>
        @endforeach

    </tbody>
    </table>


</body>

</html>
