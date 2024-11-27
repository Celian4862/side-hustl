  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="/CSS/styleLogin.css">
  <script src="/js/script.js" defer></script>
</head>
<body>
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fname">First Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">Last Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <div class="links">
      <p>Already Have Account?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 'email_exists') {
          echo "<p style='color: red; text-align: center;'>Email Address Already Exists!</p>";
        } elseif ($_GET['error'] == 'invalid_credentials') {
          echo "<p style='color: red; text-align: center;'>Invalid email or password.</p>";
        }
      }
    ?>
    <form method="post" action="login.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <div class="links">
      <p>Don't have an account yet?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>