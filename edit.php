<!DOCTYPE html>
<html lang="en">
<?php include_once './shared/head.php';

auth();

?>

<body>
  <?php 
  include_once './shared/header.php';
  include_once './shared/aside.php';
  include_once './vendor/env.php';
include_once './vendor/functions.php';
$select="SELECT * FROM users" ;
$alldata=mysqli_query($connect,$select) ;
if(isset($_GET['edit'])){
    $id=$_GET['edit']; 
}
if(isset($_POST['send'])){
    $name=$_POST['name'] ;
    $email=$_POST['email'] ;
$edit="UPDATE `users` SET name='$name',email='$email' WHERE id=$id" ; 
mysqli_query($connect,$edit);

}


  ?>

<div class="container col-6" >
    <div class="card" >
        <div class="d-flex flex-column justify-content-end" style="height: 35vh;" >
        <h6>Edit Users
                <a class="float-end btn btn-info" href="./users.php">Back</a>
            </h6>
            <form method="post">
                <div class="form-group" >
                    <label for="">New users name  </label>
                    <input type="text" class="form-control" name="name" >

                </div>
                <div class="form-group">
                    <label for="">New users email  </label>
                    <input type="email" class="form-control" name="email">
                </div>
            
                <div class="d-grid">
                    <button class="btn btn-info w-50 mx-auto"name="send" >Submit</button>
                </div>
</form>
        </div>
    </div>
</div>


  <?php include_once './shared/footer.php';
  include_once './shared/script.php';
  ?>

</body>

</html>