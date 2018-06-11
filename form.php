<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calc</title>
    <meta charset="utf-8"></meta>
</head>
<body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "phpform";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['terms'])){
    if($_GET['calctype']=='advanced'){
        if(empty($_GET["value_a"]) && empty($_GET["value_b"])){
            echo "<div>No values entered!</div>";
            echo "<a href='form.html'>Back to main page</a>";
        }if(empty($_GET["value_a"]) && $_GET["value_a"]!=0){
            echo "<div>A is really empty</div>";
            echo "<a href='form.html'>Back to main page</a>";
        }else{
            if($_GET["value_b"]==0){
                $a=$_GET["value_a"];
                $b=$_GET["value_b"];
                $sum=$a+$b;
                $dif=$a-$b;
                $mul=$a*$b;
                echo $a."+".$b."=".$sum.".<br>".$a."-".$b."=".$dif.".<br>".$a."*".$b."=".$mul.".<br>";
                echo "<a href='form.html'>Back to main page</a>";
            }else if($_GET["value_b"]!=0){
                $a=$_GET["value_a"];
                $b=$_GET["value_b"];
                $sum=$a+$b;
                $dif=$a-$b;
                $mul=$a*$b;
                $div=$a/$b;
                echo $a."+".$b."=".$sum.".<br>".$a."-".$b."=".$dif.".<br>".$a."*".$b."=".$mul.".<br>".$a."/".$b."=".$div.".<br>";
                echo "<a href='form.html'>Back to main page</a>";
            }
        }
    }if($_GET['calctype']=='basic'){
        if(empty($_GET["value_a"]) && empty($_GET["value_b"])){
            echo "<div>No values entered!</div>";
            echo "<a href='form.html'>Back to main page</a>";
        }if(empty($_GET["value_a"]) || empty($_GET["value_b"])){
            echo "<div>One value is missing!</div>";
            echo "<a href='form.html'>Back to main page</a>";
        }else{
                $a=$_GET["value_a"];
                $b=$_GET["value_b"];
                $sum=$a+$b;
                $dif=$a-$b;
                echo $a."+".$b."=".$sum."<br>".$a."-".$b."=".$dif."<br><a href='form.html'>Back to main page</a>"; 
        }
    }
}else{
    echo "<div>You must agree with terms and conditions!</div><a href='form.html'>Back to main page</a>";
}
?>
</body>
</html>