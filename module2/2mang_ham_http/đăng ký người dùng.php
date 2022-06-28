<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .error {
        color: #FF0000;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: solid 1px #ccc;
    }

    form {
        width: 450px;
    }
    </style>
</head>

<body>
    <?php

    function loadRegistrations($fileName)
    {
        $jsonData = file_get_contents($fileName);
        return json_decode($jsonData, true);
    }

    function saveDataJSON($fileName, $name, $email, $password)
    {
        try {
            $contact = [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];
            // chuyển đổi dữ liệu json thành mảng
            $arrData = loadRegistrations($fileName);
            // Đẩy dữ liệu người dùng vào mảng
            array_push($arrData, $contact);
            // Chuyển đổi mảng đã cập nhật thành JSON
            $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
            // ghi dữ liệu json vào tệp data.json
            file_put_contents($fileName, $jsonData);
            echo "Lưu dữ liệu thành công!";
        } catch (Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
        }
    }

    $nameErr = null;
    $emailErr = null;
    $passwordErr = null;
    $name = null;
    $email = null;
    $password = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $hasError = false;

        if (empty($name)) {
            $nameErr = "Tên đăng nhập không được để trống!";
            $hasError = true;
        }

        if (empty($email)) {
            $emailErr = "Email không được để trống!";
            $hasError = true;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
                $hasError = true;
            }
        }

        if (empty($password)) {
            $passwordErr = " Password không được để trống!";
            $hasError = true;
        }

        if (!$hasError) {
            saveDataJSON("data.json", $name, $email, $password);
            $name = null;
            $email = null;
            $password = null;
        }
    }

    ?>

    <h2>Đăng ký</h2>
    <form method="post">
        <fieldset>
            <legend>Thông tin</legend>
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Password: <input type="text" name="password" value="<?php echo $password; ?>">
            <span class="error">*<?php echo $passwordErr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Đăng ký">
            <p><span class="error">* Phần bắt buộc phải nhập</span></p>
        </fieldset>
    </form>

    <?php
    $registrations = loadRegistrations('data.json');

    ?>
    <h2>Danh sách đăng ký</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php
        // if (count($registrations) > 0)
        foreach ($registrations as $registration) :  ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['password']; ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>