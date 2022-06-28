    <?php
    function validatePhonrNumber($number)
    {
        $parttern = "/^[0-9]{2}(0[0-9]{9})$/";
        if (preg_match($parttern, $number)) {
            echo "$number perfect";
        } else {
            echo "$number Wrong!!!";
        }
    }
    echo validatePhonrNumber(840947285263) . '<hr>';
    echo validatePhonrNumber(843947285263) . '<hr>';
    echo validatePhonrNumber(80947285263) . '<hr>';
    echo validatePhonrNumber(4094735285263) . '<hr>';
    echo validatePhonrNumber(840947254485263) . '<hr>';
    echo validatePhonrNumber(84094728529874163) . '<hr>';
    echo validatePhonrNumber(8409472852653643) . '<hr>';
    echo validatePhonrNumber(850947285123) . '<hr>';
    ?>