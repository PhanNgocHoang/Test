<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
<?php 
   include_once "Connect.php";
   $name = $_POST["Name"];
   $course = $_POST["cbCourse"];
   $date = $_POST["date"];
   $gender = $_POST["gender"];
   $hav = "";
   if (isset($_POST["book"])) {
   	$hav .= "Book";
   }
   if (isset($_POST["car"])) {
   	$hav .= " Car";
   }
   if(isset($_POST["book"]) && isset($_POST["car"]) )
   {
        $hav = "Book & Car";
   }
   $sql = "INSERT INTO `registercourse`(`id`, `studentname`, `course`, `dob`, `gender`, `fav`) VALUES ('','$name','$course','$date','$gender','$hav')";
   if ($connect->query($sql) === TRUE) {
     echo "Thêm dữ liệu thành công";
 } else {
     echo "Error: " . $sql . "<br>" . $connect->error;
 }
 ?>
 	<h2 style="margin: 25%">Thank you <?php echo $name . " , date: " . $date . ", Gender: " . $gender . " , Fav: ". $hav ; ?>
 	for registering <?php echo $course; ?></h2>
 	<a href="bai1.php" style="font-size: 30px">Back</a>
</body>
</html>