<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$password="";
$username="root";
$con=mysqli_connect($server,$username,$password);
if (!$con) {
    die("Connection failed due to". mysqli_connect_error());
}

$name=$_POST['name'];
$age=$_POST['age'];
$USN=$_POST['USN'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$desc1=$_POST['desc1'];
$sql= "INSERT INTO `trip`.`trip`(`name`, `age`, `USN`, `email`, `gender`, `phone`, `desc1`, `dt`) VALUES ('$name', '$age', '$USN', '$email', '$gender', '$phone', '$desc1', current_timestamp());";
// echo $sql;
if ($con->query($sql)==true) {
    $insert=true;
    // echo"successfully inserted";
}
else {
    echo "ERROR:$sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="bg1.jpg" class="bg" alt="KLE IT, HUBBALLI" <div class="container">
    <h2>
        <center>Welcome to KLE IT trip form</center>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,400;1,900&family=Merriweather:wght@900&display=swap"
            rel="stylesheet">
    </h2>
    <p>Enter your details to confirm your participation in the trip</p>
    <?php
    if($insert==true){
    echo "<p class='Submitmsg'><b>Form submission succesful!</b></p>";
    }
?>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="USN" id="age" placeholder="Enter your USN">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="number" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Enter any other information here"></textarea>


        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
    </form>
    </div>
    <script src="index.js"></script>
    <!-- </body>
INSERT INTO `trip` (`sno`, `name`, `age`, `USN`, `email`, `gender`, `phone`, `desc1`, `dt`) VALUES ('1', 'kiran bakale',
'20', '2KE19IS402', 'KIRANBAKALE@GMAIL.COM', 'male', '73378588853', 'jajaijsissas', current_timestamp()); -->

</html>