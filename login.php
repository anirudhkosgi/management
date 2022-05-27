<?php 
require_once("./config.php");
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
 // $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: test.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php include("./includes/scripts.php"); ?>
</head>
<body>
<?php include("./includes/navbar.php"); ?>

<div class="d-flex justify-content-center mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <form action="" method="POST">
      <h4>Log In </h4>

      <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#">Doctor</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#">Patient</a>
     </li>
    </ul>



    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals">
        <form action="file/doctor.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Doctor Email</label>
          <input type="email" name="hemail" placeholder=" Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Doctor Password</label>
          <input type="password" name="hpassword" placeholder=" Password" class="form-control mb-4">
          <input type="submit" name="hlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="file/patient.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Patient Email</label>
          <input type="email" name="remail" placeholder=" Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Patient Password</label>
          <input type="password" name="rpassword" placeholder="Password" class="form-control mb-4">
          <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>





  <small id="emailHelp" class="form-text text-muted">Not Registered Yet ? <a href="./registration.php">Click Here</a></small>
</form>
  </div>
</div>
</div>



<?php include("./includes/footer.php") ?>

    
</body>
</html>