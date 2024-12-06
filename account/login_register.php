<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>GoClean</title>
</head>

<body>
  <div class="container">
    <!-- forms  -->
    <div class="forms-container">
      <div class="signin-signup">

        <!-- Sign In -->
        <form action="" class="sign-in-form" method="post" autocomplete="off" id="loginForm">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="usernamein" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="passwordin" placeholder="Password" />
          </div>
          <input type="submit" name="login" value="Login" class="btn solid" />
          <?php
          if (isset($_SESSION['error'])) {
            echo "<p id='errorMessage' style='color: red;'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
          }
          ?>
        </form>

        <!-- Sign up -->
        <form action="#" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="usernameup" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="emailup" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="passwordup" placeholder="Password" />
          </div>
          <input type="submit" name="signup" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <!-- content -->
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Baru disini ?</h3>
          <p> Daftar sekarang dan rasakan layanan laundry tanpa ribet langsung dari genggamanmu! </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="assets/img/undraw_maker_launch_re_rq81.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Salah satu dari kami ?</h3>
          <p> Masuk untuk mengelola pesanan dan melacak cucianmu dengan mudah! </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="assets/img/undraw_winter_designer_a-2-m7.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <!-- script js -->
  <script src="assets/js/app.js"></script>
  <script>
    setTimeout(function() {
      var errorMessage = document.getElementById("errorMessage");
      if (errorMessage) {
        errorMessage.style.display = "none";
      }
    }, 5000);
  </script>
</body>
</html>
