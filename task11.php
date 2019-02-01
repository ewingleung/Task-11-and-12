<?php
function introduction($name,$profession,$hometown,$type,$object){
    echo "Hello, my name is ".$name." and I study ".$profession.".
I come from ".$hometown." and my favourite ".$type." is ".$object.".";
}

echo "
<html>
<head>
<title>BT2201 Task Week 11 PHP Variables</title>
</head>
<body>
".introduction("Leung","Business Administration","Shenzhen, Guangdong，China","car","BMW")."
</body>
</html>
";