<form method="POST" action="index.php">
  <div class="form-group">
    <label for="exampleInputUsername">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Masukan Username">
    <small id="password1Help" class="form-text text-muted">Maksimal 20 karakter/small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Retype Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Retype Password">
    <small id="password1Help" class="form-text text-muted">Pastikan password valid</small>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
include('konek.php');
$conn = mysqli_connect('localhost','root','','modul8');
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password1=$_POST['password1'];

	$sql = mysqli_query($conn, "INSERT INTO user (id,username,password) VALUES ('','$username','$password')");

	if (!$sql) {
		echo "gagal";
	}
	else{
		echo "berhasil";
	}

	if (strlen($_POST['username']>20)) {
		echo "Username maksimal 20 karakter";
	}

	if (strlen($_POST['password'])<6) {
		echo "Password minimal 6 karakter";
	}

	if ($_POST['password']!= $_POST['password1']) {
		echo "Pastikan inputan sama dengan password";
	}
}

 ?>