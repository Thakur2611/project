
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        a{
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="card-header">
        <h3 class="text-center">All Records</h3>
        
    </div>
    <h4><a href="registration.php" class="btn btn-success">Add Data</a><a href="home.php" class="btn btn-success">HOME</a></h4>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="#" method="POST">
    <input  type="search" placeholder="Filter" aria-label="Search" name="limit">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
  </form>
  <a href="fatch.php" class="btn btn-success">All Data</a>
</nav>
    <table class = "table table-dark">

        <tr>
            <td>S_no</td>
            <td>Name</td>
            <td>Address</td>
            <td>Mobile</td>
            <td>Roll_No</td>
            <td>State</td>
            <td>Pin_Code</td>
            <td>Batch</td>
            <td>Action</td> 
        </tr>
    
        <?php


if(isset($_POST['submit']))
{
$limit=$_POST['limit'];   
include('db.php');
$sql="select * from php where roll_no = $limit";
$result=mysqli_query($conn,$sql);
if($result)
{
    $no = 1;
    while($row=mysqli_fetch_assoc($result)){ $id=$row['s_no']?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Address'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['roll_no'];?></td>
            <td><?php echo $row['State'];?></td>
            <td><?php echo $row['pincode'];?></td>
            <td><?php echo $row['batch'];?></td>
            <td> <a href="edit.php?id=<?php echo $id;?>"  class = "btn btn-primary">Edit</a><a href="delete.php?id=<?php echo $id;?>" class = "btn btn-danger">Delete</a>            
        </tr>
<?php
    }

}
}

?>

</table> 
 



        
    
</body>
</html>




