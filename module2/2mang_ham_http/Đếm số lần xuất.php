<?php
$string = "jhtdfcmhgftj tdytdkdk,rlr,yf,f.ruedtdhgfaf,";
$count = 0;
for ($i = 1; $i < strlen($string); $i++) {
    if ($string[$i] == 'c') {
        $count++;
    }
}
echo $count . '|||<br>';
echo strlen($string);