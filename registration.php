<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body {
            background-color: rgba(246, 192, 127, 0.883);
            background-image: url("bg.jpg");
            background-size: cover;

        }

        .main {
            background-image: url("yo.jpg");
            background-size: cover;
            background-color: rgb(82, 206, 240);
            margin: 50px 0px 0px 350px;
            border: 5px solid gray;
            width: 500px;
            padding: 20px 0px 20px 10px;
            justify-content: center;
            border-radius: 20px;
            transform: scale(1.10);


        }

        .main:hover {
            transform: scale(1.10);
        }

        label {
            text-align: left;
            width: 150px;
            display: block;
            float: left;
            clear: right;
            font-size: 18;
        }

        input {
            border: 1px;
            background-color: rgba(207, 200, 200, 0.774);
            border-radius: 8px;
            display: inline;
            clear: right;
        }

        label {
            color: red;
            font-weight: 700;
        }

        .nav {
            width: 100%;
            height: 60px;
            background-color: rgb(240, 177, 75);
            color: aqua;


        }

        a {
            margin: 10px;
        }

        .batch,
        .drop {
            border-radius: 20px;

        }
    </style>
</head>

<body>
    <nav class="nav">
        <a href="home.php" class="btn btn-success">HOME</a>
        <a href="fatch.php" class="btn btn-primary">Students</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>

    </nav>


    <div class="main">
        <form action="" method="post">
            <label>NAME:</label>

            <input type="text" name="name" placeholder="candidate name"><br><br>
            <label>CITY:</label><input type="text" name="address" placeholder="city"><br><br>
            <label>Mobile:</label><input type="text" name="mobile" placeholder="phone number"><br><br>
            <label>Roll No:</label><input type="text" name="roll_no" placeholder="roll no"><br><br>
            <label>State:</label><input type="text" name="state" placeholder="state name"><br><br>
            <label>Pincode:</label><input type="text" name="pincode" placeholder="pincode"><br><br>
            <select name="batch" class="batch" required>
                <option selected disabled hidden>Choose Batch</option>
                <option value="php">PHP</option>
                <option value="jawascript">JavaScript</option>
                <option value=".net">.Net</option>
                <optio value="android">Android</option>
            </select><br><br>





            <input type="submit" name="submit">

        </form>
    </div>
    </div>

</body>

</html>



<?php
session_start();
include 'db.php';
if (!isset($_SESSION['LOGIN'])) {
    header("location:home.php");
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $add = $_POST['address'];
    $mobile = $_POST['mobile'];
    $roll = $_POST['roll_no'];
    $state = $_POST['state'];
    $pin = $_POST['pincode'];
    $batch = $_POST['batch'];

    $sql = "INSERT INTO php(Name,Address,mobile,roll_no,State,pincode,batch) VALUES('$name','$add',$mobile,$roll,'$state',$pin,'$batch')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        ?>
        <script>alert("student added");</script>

        <?php

    }

}

?>