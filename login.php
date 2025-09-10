
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- custom css -->
    <link rel="stylesheet" href="./styles/login.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
     <div class="container">
          <div class="form-box active" id="login-form">
               <form action="./php/login_register.php" method="post">
                   <h2>Login</h2>
                   <input type="email" name="email" placeholder="Email" required>
                   <input type="password" name="password" placeholder="Password" required>
                   <button type="submit" name="login">Login</button>
                   <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
               </form>
          </div>

          <div class="form-box" id="register-form">
               <form action="./php/login_register.php" method="post">
                   <h2>Register</h2>
                   <input type="text" name="name" placeholder="Name" required>
                   <input type="email" name="email" placeholder="Email" required>
                   <input type="password" name="password" placeholder="Password" required>
                   <select name="role" id="" required>
                      <option value="">--Select Role--</option>
                      <option value="">user</option>
                      <option value="">admin</option>
                      <option value="">hr</option>
                      <option value="">delivery man</option>
                   </select>
                   <button type="submit" name="register">Register</button>
                   <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
               </form>
          </div>
     </div>
    <script src="./scripts/login.js"></script>
</body>

</html>