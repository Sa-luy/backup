<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo "* ";
    }
    echo '<br>';
}
echo '<br>';
echo '<br>';

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i <= $j) {
            echo " * ";
        }
    }
    echo '<br>';
}
echo '<br>';
echo '<br>';

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i >= $j) {
            echo "* ";
        }
    }
    echo '<br>';
}
echo '<br>';
echo '<br>';
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= 1; $j--) {
        if ($i >= $j) {
            echo "* ";
        }
        if ($i < $j) {
            echo "&nbsp;&nbsp; ";
        }
    }
    echo '<br>';
}