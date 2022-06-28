<!-- <-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Population</title>
    </head> -->
<?php include './Layout/header.php' ?>



<body>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Salse</h6>
                <a href="http://localhost/module2/CASETUDY2/index.php?controller=population&action=index">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <!-- 
                    <tr class="text-dark">
                        <th scope="col">STT</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">Số Hộ Khẩu</th> -->
                    <!-- <th scope="col">giới Tính</th> -->
                    <!-- <th scope="col">Số CCCD</th> -->
                    <!-- <th scope="col">Mã chủ hộ</th> -->
                    <!-- <th scope="col">Địa chỉ</th> -->
                    <!-- <th scope="col">Chức Năng</th> -->
                    <!-- </tr> -->




                    <thead>
                        <tr class="text-dark">
                            <th scope="col">STT</th>
                            <th scope="col">Họ</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ngày Sinh</th>
                            <th scope="col">giới Tính</th>
                            <th scope="col">Số CCCD</th>
                            <th scope="col">Liên Hệ</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><?= $obj->id ?></td>
                            <td><?= $obj->fistname ?></td>
                            <td><?= $obj->lastname ?></td>
                            <td><?= $obj->day_of_birth ?></td>
                            <td><?= $obj->gender ?></td>
                            <td><?= $obj->cccd ?></td>
                            <td><?= $obj->phone ?></td>
                            <td><?= $obj->address ?></td>

                            <td> <a href="index.php?controller=population&action=edit&id=<?= $obj->id ?>">Sửa |</a><a
                                    href="index.php?controller=population&action=delete&id=<?= $obj->id ?>">Xóa</a>
                            </td>
                        </tr>
                    </tbody>


                </table>
                <a href="index.php?controller=population&action=indexlimit"><i class="bi bi-skip-backward-fill"></i></a>
</body>
<?php include './Layout/footer.php' ?>

</html>