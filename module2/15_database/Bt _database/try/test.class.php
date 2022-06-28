<?php
class Test extends DB
{

    public function getUsers()
    {

        $sql = "SELECT * FROM loai_sachs";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo "          <tr>
            <td>" . $row['book_id'] . "</td>
            <td>" . $row['book_name'] . "</td>
            <td>" . $row['nha_xuat_ban'] . "</td>
            <td>" . $row['tac_gia'] . "</td>
            <td>" . $row['nam_xuat_ban'] . "</td>
            <td>" . $row['gia'] . "</td>
            <td> null </td>
        </tr>";
        }
    }
}