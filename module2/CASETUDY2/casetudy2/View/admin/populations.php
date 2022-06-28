<?php include './Layout/header.php'; ?>
<style>
table {
    background-color: #9ce7b7;
    border-radius: 10px;
}
</style>

<body>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Bảng</h6>
                <a href="index.php?controller=population&action=index">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">STT</th>
                            <th scope="col">Họ</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ngày Sinh</th>
                            <th scope="col">giới Tính</th>

                            <th scope="col">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($obj as $row) : ?>

                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->fistname ?></td>
                            <td><?= $row->lastname ?></td>
                            <td><?= $row->day_of_birth ?></td>
                            <td><?= $row->gender ?></td>
                            <td> <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=show&id=<?= $row->id ?>">Chi
                                    Tiết</a>
                                <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=edit&id=<?= $row->id ?>">Sửa</a>
                                <a class="btn btn-sm btn-primary"
                                    href="index.php?controller=population&action=delete&id=<?= $row->id ?>"
                                    onclick="confirm('Xóa người này!!!')">Xóa</a>

                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div>
        <a href=" index.php?controller=population&action=index"><i class="bi bi-skip-backward-fill"></i></a>
    </div>
</body>
<?php include './Layout/footer.php'
?>