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

<body>
    <h1>Chỉnh sửa</h1>
    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
        <table class="table">
            @csrf
            @method('PUT')
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="fullname" value="{{ $staff->fullname }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('fullname') }}</p>
                        @endif
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phone"
                            value="{{ $staff->phone }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            <option selected value="{{ $staff->gender }}">{{ $staff->gender }}</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>>
                        </select>
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('gender') }}</p>
                        @endif
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Group ID</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="GroupID"
                            value="{{ $staff->GroupID }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('GroupID') }}</p>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Day Of Birth</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="day_of_birth" value="{{ $staff->day_of_birth }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('day_of_birth') }}</p>
                        @endif
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="email"
                            value="{{ $staff->email }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">CCCD</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="cccd" value="{{ $staff->cccd }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('cccd') }}</p>
                        @endif
                </td>
                <td>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="address"
                            value="{{ $staff->address }}">
                        @if ($errors->any())
                            <p style="color:red">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </td>
            </tr>
            </div>


            <tr>
                <td><button type="submit" class="btn btn-primary">Lưu Lại</button></td>
            </tr>

    </form>
    </table>


</body>

</html>
