<?php
function sing()
{
    $gift = [
        1 => "A partridge in a pear tree.",
        2 => "Two turtle doves, ",
        3 => "Three French hens, ",
        4 => "Four calling birds, ",
        5 => "Five golden rings, ",
        6 => "Six geese a-laying, ",
        7 => "Seven swans a-swimming, ",
        8 => "Eight maids a-milking, ",
        9 => "Nine ladies dancing, ",
        10 => "Ten lords a-leaping, ",
        11 => "Eleven pipers piping, ",
        12 => "Twelve drummers drumming, ",
    ];
    echo "The twelve days of christmas:<br/>";
    $n = 1;
    while ($n <= 12) {
        echo "On the " . $n . " day of Christmas, my true love sent to me: ";
        if ($n == 1) {
            echo $gift[1] . "<br/>";
        } elseif ($n == 2) {
            echo $gift[$n] . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 3) {
            echo $gift[$n] . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 4) {
            echo $gift[$n] . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 5) {
            echo $gift[$n] . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 6) {
            echo $gift[$n] . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 7) {
            echo $gift[$n] . strtolower($gift[6]) . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 8) {
            echo $gift[$n] . strtolower($gift[7]) . strtolower($gift[6]) . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 9) {
            echo $gift[$n] . strtolower($gift[8]) . strtolower($gift[7]) . strtolower($gift[6]) . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 10) {
            echo $gift[$n] . strtolower($gift[9]) . strtolower($gift[8]) . strtolower($gift[7]) . strtolower($gift[6]) . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 11) {
            echo $gift[$n] . strtolower($gift[10]) . strtolower($gift[9]) . strtolower($gift[8]) . strtolower($gift[7]) . strtolower($gift[6]) . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } elseif ($n == 12) {
            echo $gift[$n] . strtolower($gift[11]) . strtolower($gift[10]). strtolower($gift[9]) . strtolower($gift[8]) . strtolower($gift[7]) . strtolower($gift[6]) . strtolower($gift[5]) . strtolower($gift[4]) . strtolower($gift[3]) . strtolower($gift[2]) . "and " . strtolower($gift[1]) . "<br/>";
        } else {
            echo "error!<br/>";
        }
        $n++;
    }
}

echo "
<html>
<head>
<title>BT2201 Task Week 12 PHP Loops</title>
</head>
<body>" . sing() . "
</body>
</html>
";