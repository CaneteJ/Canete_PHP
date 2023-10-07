<DOCTYPE html>
    <html>
        <head></head>
        <tittle></tittle>
        <body>
<?php
$birthYear = 2000;
$birthMonth = 12;
$birthDay = 05;

echo "Your Birthday is";
echo "<br>";
echo $birthYear. "/" . $birthMonth . "/" . $birthDay;

if($birthDay %2 == 0){
    echo "<br>";
    echo "EVEN";
}
else{ 
    echo "<br>";
    echo "ODD";
}
?>
</body>
</html>