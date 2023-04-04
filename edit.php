<?php 
    include 'db.php';
    $id = $_GET['id'];
    $sql = "Select * from php where s_no = '$id'";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background-color: rgba(246, 192, 127, 0.883);
        }
        .main{
            background-color: rgb(82, 206, 240);
            margin: 90px 0px 0px 200px;
            border: 5px solid gray;
            width: 500px;
            padding:0px 0px 20px 100px;
            justify-content: center;
            border-radius:20px;
            transform: scale(1.10);

        }
        input{
            border: 1px;
            background-color: rgba(207, 200, 200, 0.774);
            border-radius: 8px;
        }
        hr{
            height: 5px;
            color:red;
        }
    </style>
</head>
<body>
<div class="card-header">
        <h3 class="text-center"><u>UPDATE</u></h3>
        
    </div>
    
    <div class="main">
        <?php 
        while($data = mysqli_fetch_assoc($result))
        {
        ?>

        <form action="edit.php" method="post">
        <input type="hidden" name="id" value = "<?php echo $data['s_no'];?>"><br><br>
           NAME:<input type="text" name="name" placeholder="candidate name" value = "<?php echo $data['Name'];?>"><br><br>
            ADDRESS:<input type="text" name="address" placeholder="city" value = "<?php echo $data['Address'];?>"><br><br>
            MOBILE:<input type="text" name="mobile" placeholder="phone number" value = "<?php echo $data['mobile'];?>"><br><br>
            ROLL NO:<input type="text" name="roll_no" placeholder="roll no" value = "<?php echo $data['roll_no'];?>"><br><br>
            STATE:<input type="text" name="state" placeholder="state name" value = "<?php echo $data['State'];?>"><br><br>
            PINCODE:<input type="text" name="pincode" placeholder="pincode" value = "<?php echo $data['pincode'];?>"><br><br>
            Batch:<input type="text" name="batch" placeholder="batch" value = "<?php echo $data['batch'];?>"><br><br>
            <hr>
            <input type="submit" name="submit" value="update" >
        </form>
        <?php } ?>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
      $id = $_POST['id'];
      $name=$_POST['name'];
      $add=$_POST['address'];
      $mobile=$_POST['mobile'];
      $roll=$_POST['roll_no'];
      $state=$_POST['state'];
      $pin=$_POST['pincode'];
      $batch=$_POST['batch'];
      $sql="update php set Name='$name', Address='$add',mobile='$mobile',roll_no='$roll',State='$state',pincode='$pin',batch='$batch' where s_no='$id'";
      $result=mysqli_query($conn,$sql);
      if($result){
          header("location:fatch.php");
      }
    }
    
    ?>
    
</body>
</html>