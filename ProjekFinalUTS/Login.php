<?php
session_start();
if (isset($_SESSION["signup"])) {
   header("Location: BeautyMe.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["Login"])) {
           $Username = $_POST["Username"];
           $Password = $_POST["Password"];
            require_once "config.php";
            $sql = "SELECT * FROM signup WHERE Username = '$Username'";
            $result = mysqli_query($koneksi, $sql);
            $signup = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($signup) {
                if (password_verify($password, $signup["Password"])) {
                    session_start();
                    $_SESSION["signup"] = "yes";
                    header("Location: BeautyMe.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Username does not match</div>";
            }
        }
        ?>
      <form action="Login.php" method="post">
        <div class="form-group">
            <input type="Username" placeholder="Enter Username:" name="Username" class="form-control">
        </div>
        <div class="form-group">
            <input type="Password" placeholder="Enter Password:" name="Password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="Submit" value="Login" name="Login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="SignUp.php">Register Here</a></p></div>
    </div>
</body>
</html>