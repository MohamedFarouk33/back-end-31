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

$select = "SELECT * FROM courses";
$allData = mysqli_query($connect, $select);
$counter = 0;

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $delete = "DELETE FROM courses where id  =$id";
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
            <h6 class="mt-3"> List All courses

                <a class="float-end btn btn-info" href="./create co.php">Create</a>
            </h6>
            <table id="myTable" class="table mt-5">
                <tr>
                    <th>id</th>
                    <th> course_name</th>
                    <th>instractor_name </th>
                    <th colspan="2">Action</th>
                </tr>
                <?php foreach ($allData as $item): ?>
                    <tr>
                        <th> <?= $item['id']  ?> </th>
                        <th> <?= $item['course_name']  ?> </th>
                        <th> <?= $item['instractor_name']  ?> </th>
                        <th> <a href="courses a.php?delete=<?= $item['id'] ?>"><i class="text-danger fa-solid fa-trash-can"></i></a> </th>
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