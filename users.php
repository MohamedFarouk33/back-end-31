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

$select = "SELECT * FROM users";
$allData = mysqli_query($connect, $select);
$counter = 0;

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $delete = "DELETE FROM users where id  =$id";
  $d = mysqli_query($connect, $delete);
  $allData = mysqli_query($connect, $select);
  
}
  ?>

<div class="container col-7 mt-3">
    <div class="card">
        <form method="post" action="./search.php">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <input type="text" id="myInput" name="searchValue" placeholder="Customer Name" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                </div>
            </div>
        </form>
        <div class="card-body">
            <h6 class="mt-3"> List All Users

                <a class="float-end btn btn-info" href="./create.php">Create</a>
            </h6>
            <table id="myTable" class="table mt-5">
                <tr>
                    <th>Number#</th>
                    <th> Name</th>
                    <th>Email </th>
                    <th>parent_id</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php foreach ($allData as $item): ?>
                    <tr>
                    <th> <?= ++$counter  ?> </th>
                        <th> <?= $item['name']  ?> </th>
                        <th> <?= $item['email']  ?> </th>
                        <th> <?= $item['parent_id']  ?> </th>
                        <th> <a href="./edit.php?edit=<?= $item['id'] ?>"><i class="text-info fa-solid fa-pen-to-square"></i></a> </th>
                        <th> <a href="users.php?delete=<?= $item['id'] ?>"><i class="text-danger fa-solid fa-trash-can"></i></a> </th>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
  


  <?php include_once './shared/footer.php';
  include_once './shared/script.php';
  ?>

</body>

</html>