<html>
<head>
</head>
<body>
<?php 
echo "Hello World";echo "</br>";
$wann1="Global Scope";
$wan2=10;
$wany="Wani";
$name="Joseph";
$name1="John";
$wan=14;
$mun=$wan+$wan2;
echo "This is $name $wany $name1";
echo"</br>";
echo"He is ". $mun;
echo"</br>";
function mun(){
 Global $wann1;
    $wann1="Local Scope";
echo $wann1;
echo "</br>";
$munn=$GLOBALS['wan']+$GLOBALS['wan2'];
echo $munn;
echo "</br>";
}
mun();
echo $wann1;

?>
</body>
</html>