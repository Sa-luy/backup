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
    <?php foreach( $rows as $key => $row ):?>
    <tr>
        <td><?= $row->id; ?></td>
        <td><?= $row->title; ?></td>
        <td><?= number_format($row->price); ?></td>
    </tr>
    <?php endforeach;?>
   
</table>