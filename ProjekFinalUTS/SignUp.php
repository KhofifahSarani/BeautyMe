<?php
session_start();
if (isset($_SESSION["sigup"])) {
   header("Location: BeautyMe.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SignUp Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $Username= $_POST["Username"];
           $Password = $_POST["Password"];
           $Repeat_Password = $_POST["Repeat_Password"];
           
           $passwordHash = password_hash($Password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($Username) OR empty($Password) OR empty($Repeat_Password)) {
            array_push($errors,"All fields are required");
           }
           if (strlen($Password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($Password!==$Repeat_Password) {
            array_push($errors,"Password does not match");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            require_once "config.php";
            $sql = "INSERT INTO signup (Username, Password, Repeat_Password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($koneksi);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss", $Username, $passwordHash, $Repeat_Password);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
         }

        ?>
        <form action="SignUp.php" method="post">
            <div class="form-group">
                <input type="Username" class="form-control" name="Username" placeholder="Username:">
            </div>
            <div class="form-group">
                <input type="Password" class="form-control" name="Password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="Password" class="form-control" name="Repeat_Password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="Login.php">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>