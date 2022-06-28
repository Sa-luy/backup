<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php include './Layout/header.php' ?>

<body>
    <fieldset>
        <div>
            <form action="" method="post">
                <label for="i">Tìm theo tên :</label>
                <input class="form-control border-0" type="search" placeholder="Search" name="name">

                <button class="btn btn-sm btn-primary type=" submit">Tìm</button>
            </form>
        </div>
    </fieldset>
    <?php ?>
    <!-- Hiển thị dât báse -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Salse</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th>STT</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Ngày Sinh</th>
                            <th>giới Tính</th>

                            <th>Chức Năng</th>
                        </tr>
                        <?php if (isset($objs)) foreach ($objs as $row) : ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->fistname ?></td>
                            <td><?= $row->lastname ?></td>
                            <td><?= $row->day_of_birth ?></td>
                            <td><?= $row->gender ?></td>
                            <!-- <td><?= $row->cccd ?></td> -->
                            <!-- <td><?= $row->id_roof ?></td> -->
                            <!-- <td><?= $row->address ?></td> -->
                            <td> <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=show&id=<?= $row->id ?>">Chi Tiết</a>
                                <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=delete&id=<?= $row->id ?>">Xóa</a>
                                <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=edit&id=<?= $row->id ?>">Sửa</a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
            </fieldset>
            <div>
                <a href="index.php?controller=population&action=index"><i class="bi bi-skip-backward-fill"></i></a>
            </div>
</body>


</html>