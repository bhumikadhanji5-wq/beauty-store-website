<?php 
  session_start(); // Session start karna zaroori hai
  include('db_connect.php'); 
  include('header.php'); 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Database mein email dhundo
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          
          // Password check karna (Security ke liye)
          if (password_verify($password, $row['password'])) {
              $_SESSION['user_id'] = $row['id'];
              $_SESSION['user_name'] = $row['name'];
              header("Location: index.php"); // Login hone ke baad homepage pe bhejo
          } else {
              echo "<div class='alert alert-danger mt-3'>Invalid Password!</div>";
          }
      } else {
          echo "<div class='alert alert-danger mt-3'>User not found!</div>";
      }
  }
?>

<div class="container mt-5">
    <h2 class="text-center" style="font-family: serif;">Login to Your Account</h2>
    <form method="POST" class="col-md-6 mx-auto mt-4">
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
<input type="password" name="password" id="passwordField" class="form-control" required>
<div class="form-check mt-2">
    <input type="checkbox" class="form-check-input" onclick="showPassword()">
    <label class="form-check-label">Show Password</label>
</div>
    
        <button type="submit" class="btn btn-dark w-100">Login</button>
    </form>
</div>
<script>
function showPassword() {
  var x = document.getElementById("passwordField");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php include('footer.php'); ?>