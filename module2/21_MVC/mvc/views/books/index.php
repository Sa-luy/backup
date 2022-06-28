<?php 
            // echo '<pre>';
            // print_r( $rows);
            // die();
?>
<table border="1">
    <tr>
        <td>Ma</td>
        <td>TEN</td>
        <td>GIA</td>
    </tr>
    <?php foreach( $books as $key => $book ):?>
    <tr>
        <td><?= $book->book_id; ?></td>
        <td><?= $book->book_name; ?></td>
        <td><?= number_format($book->gia); ?></td>
    </tr>
    <?php endforeach;?>

</table>