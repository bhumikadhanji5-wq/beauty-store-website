<?php 
  include('db_connect.php'); 
  include('header.php'); 

  // Agar user form submit karega
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Password security ke liye hash kiya hai

      // Database mein insert karne ki query
      $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
      
      if (mysqli_query($conn, $sql)) {
          echo "<div class='alert alert-success mt-3'>Registration Successful! Ab aap <a href='login.php'>Login</a> kar sakte hain.</div>";
      } else {
          echo "<div class='alert alert-danger mt-3'>Error: " . mysqli_error($conn) . "</div>";
      }
  }
?>

<div class="container mt-5">
    <h2 class="text-center" style="font-family: serif;">Create Your Account</h2>
    <form method="POST" class="col-md-6 mx-auto mt-4">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" id="regPassword" class="form-control" required>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" onclick="showRegPassword()">
    <label class="form-check-label">Show Password</label>
</div>
        <button type="submit" class="btn btn-dark w-100">Register</button>
    </form>
</div>
<script>
function showRegPassword() {
  var x = document.getElementById("regPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php include('footer.php'); ?>