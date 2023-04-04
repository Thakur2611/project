<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        body {
            background-color: wheat;
        }

        .nav {
            background-color: rgb(9, 8, 8);
            width: 150px;
            height: 100vh;
            color: aqua;


        }

        a {
            margin-top: 50px;
        }

        .main {
            position: relative;
        }

        .login {
            margin: 100px 0px 0px 50px;
        }

        .log {
            width: 950px;
            height: 500px;
            position: absolute;
            left: 300px;
            top: 100px;
            display: flex;
            border: 2px solid gray;
            background-color: white;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <div class="main">
        <nav class="nav flex-column">
            <a class="nav-link active" href="registration.php">ADD STUDENTS</a>
            <a class="nav-link primary" href="fatch.php">SEE STUDENTS</a>
            <a class="nav-link" href="signup.php">SignUp</a>
            <a class="nav-link " href="logout.php">Logout</a>
        </nav>
        <div class="log">
            <div class="login">
                <form action="home.php" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" id="iemail">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <span id="email"></span>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="pass" id="ipass">
                    </div>
                    <span id="password"></span>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label class="form-check-label">Check me out</label>
                    </div>
                    <button type="submit" value="login" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="signimg.webp" class="img-fluid" alt="Sample image">

            </div>

        </div>
    </div>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = md5($_POST["pass"]);
        $sql = "SELECT * FROM signup WHERE email='$email' and pass='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            $_SESSION["LOGIN"] = 'yes';
            header("location: registration.php");
        } else {
            ?>
            <script>alert("Invalid Login");</script>
            <?php
        }
    }
    ?>

    <!-- <script> -->
        <!-- let password = document.getElementById('iemail').value; -->
        <!-- let email = document.getElementById('ipass').value; -->
       
    <!-- </script> -->
</body>

</html>