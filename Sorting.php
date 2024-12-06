<html>
<body>
<?php
$flowers=array("Sunflower","Rose","Dahlia");
 sort($flowers);
 $length=count($flowers);
 echo"<br><b>1)Sort Flowers in ascending order</b><br><br>";
for($x=0;$x<$length;$x++)
{
echo $flowers[$x]."<br>";
}

$flowers=array("Sunflower","Rose","Dahlia");
rsort($flowers);
$length=count($flowers);
echo "<br><b>2)Sort flowers in descending order</b><br><br>";
for($x=0;$x<$length;$x++)
{
echo $flowers[$x]."<br>";
}


$flowers=array("one"=>"Sunflowers","two"=>"Rose","three"=>"Dahlia");
asort($flowers);
echo "<br><b>3)Sort an assosciative array in ascending order, according to the value </b><br><br>";
foreach($flowers as $x=>$x_value)
{
 echo "key=".$x.",value=".$x_value."<br>";
}

$flowers=array("one"=>"Sunflowers","two"=>"Rose","three"=>"Dahlia");
ksort($flowers);
echo "<br><b>4)Sort an assosciative array in descending order, according to the key </b><br><br>";
foreach($flowers as $x=>$x_value)
{
 echo "key=".$x.",value=".$x_value."<br>";
}

$flowers=array("one"=>"Sunflowers","two"=>"Rose","three"=>"Dahlia");
arsort($flowers);
echo "<br><b>5)Sort an assosciative array in descending order, according to the value </b><br><br>";
foreach($flowers as $x=>$x_value)
{
 echo "key=".$x.",value=".$x_value."<br>";
}

$flowers=array("one"=>"Sunflowers","two"=>"Rose","three"=>"Dahlia");
krsort($flowers);
echo "<br><b>6)Sort an assosciative array in descending order, according to the key </b><br><br>";
foreach($flowers as $x=>$x_value)
{
 echo "key=".$x.",value=".$x_value."<br>";
}

?>
</body>
</html>