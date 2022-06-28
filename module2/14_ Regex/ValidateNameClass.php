<?php
function valiname($name)
{
    $parttern = '/^C|^A|^P[0-9]{4}(G|H|I|K|L|M)/';
    if (preg_match($parttern, $name)) {
        echo "$name hop le";
    } else {
        echo "$name khong hop le";
    }
}
echo valiname('C0318G') . '<br>';
echo valiname('P0323A') . '<br>';
echo valiname('M0318G') . '<br>';