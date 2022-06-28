<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Population</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</head>

<body>
    <div>
        <h1>Populations</h1>
        <table class="table">
            <thead>
                <tr class="table">
                    <td>STT</td>
                    <td>Họ</td>
                    <td>Tên</td>
                    <td>Ngày Sinh</td>
                </tr>
            </thead>
            {{-- @@foreach ($collection as $item) --}}
            <td>1</td>
            <td>Le kim</td>
            <td>chon</td>
            <td>10-01-1999</td>
            <td>
                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a& </td>

                    {{-- @endforeach --}}
                    <tbody>

                    </tbody>
        </table>

    </div>
</body>

</html>
