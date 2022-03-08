<?php
    $insert = false;
    if(isset($_POST['name']))
{
    //set connections variables
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to " . 
        mysqli_connect_error());
    }
    //echo"Success connecting to the db";

    //collect post variables

    $name =  isset($_POST['name']) ? $_POST['name'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
    $sql = "INSERT INTO trip.trip ( `name`, `age`, `gender`, `email`, `phone`, `desc`) 
    VALUES ( '$name', '$age', '$gender', '$email', '$phone','$desc'); ";
     //echo $sql;
     
     if($con->query($sql) == true){
         echo "successfully inserted";
     }
     else{
         echo "ERROR: $sql <br> $con->error";
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
    <title>Welcome to travel form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="punetrip.jpg" alt="pune">
    <div class="container">
        <h1> Welcome to pune travel form</h1>
        <p> Enter your details  and submit this form to confirm your participation in the trip</p>
        <p class="Submitmsg"> Thanks for submitting your form.We are happy to see you joining for the pune trip</p>
        
        <form action="index2.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your information here"> </textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
     
</body>
</html>