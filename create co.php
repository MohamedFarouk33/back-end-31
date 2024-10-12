<?php
include_once './vendor/env.php';
include_once './vendor/functions.php';
include_once './shared/head.php' ;


if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $select = "SELECT * FROM courses";
    $data =  mysqli_query($connect, $select);

        $insert = "INSERT INTO courses VALUES (NULL ,'$name','$email')";
        $i = mysqli_query($connect, $insert);
        redirect("courses a.php");
    
}
$sql = "SELECT name FROM users where parent_id = 3";  // Query to fetch only the names
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">


<body>



    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Create User</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data">
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Course Name</label>
                                            <input type="text" name="name" class="form-control" id="yourName" required>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <label for="instructor">Choose an Instructor:</label>
                                        <select name="email" id="instructor">
                                        <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option  value='" . $row['name'] . "'>" . $row['name'] . "</option>";
    }
} else {
    echo "<option>No instructors found</option>";
}

                                        ?>
                                        </select>



                                        

                                        
                                        <div class="col-12">
                                            <button name="register" class="btn btn-primary w-100" type="submit">Create Course</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <?php
    include_once './shared/script.php';
    ?>

</body>

</html>