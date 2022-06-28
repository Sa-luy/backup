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

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Add new Task
                </div>
                <form class="text-left">
                    <div class="form-group">
                        <label for="inputTitle">Task title</label>
                        <input type="text" class="form-control" id="inputTitle" name="inputTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Task content</label>
                        <textarea class="form-control" id="inputContent" name="inputContent" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDueDate">Due Date</label>
                        <input type="date" class="form-control" id="inputDueDate" name="inputDueDate" required>
                    </div>
                    <div class="form-group">
                        <label for="inputFileName">File Name</label>
                        <input type="text" class="form-control" id="inputFileName" name="inputFileName">
                        <input type="file" class="form-control-file" id="inputFile" name="inputFile">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Về Trang chủ</button>
                
            </div>
        </div>
    </body>

</html>
