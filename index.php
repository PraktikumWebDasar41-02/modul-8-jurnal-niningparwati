<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword" placeholder="Password">
  </div>

  <div>
    <button type="submit" name="index" class="btn btn-primary">Submit</button>
  </div>

  <div>
    <label>Belum punya username?</label>
    <button type="submit" name="regis" class="btn btn-primary">Register</button>
  </div>
</form>

<?php 

$conn = mysqli_connect('localhost','root','','modul8');
  if (isset($_POST['index'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user!=$username || $pass != $password) {
      echo "Username belum terdaftar";
      header("Location:index.php");
    }
    else{
      header("Location:profile.php");
    }
  }

  if (isset($_POST['regis'])) {
    header("Location:register.php");
  }
 ?>