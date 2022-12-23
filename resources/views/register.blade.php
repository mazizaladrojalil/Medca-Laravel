<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css\style.css') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div class="background">
      <div class="form-container">
        <div class="logo"></div>
        <h3>Register Now</h3>
        <h4>Email</h4>
        <input type="email" name="email" required placeholder="enter your email" />
        <h4>Password</h4>
        <input type="password" name="password" required placeholder="enter your password" />
        <h4>Confirmation Password</h4>
        <input type="password" name="cpassword" required placeholder="confirm your password" />
        <input type="submit" name="submit" value="Register" class="form-btn" />
        <p>Sudah punya akun? <a href="/login"> login </a></p>
      </div>
      <div class="ornament_1"></div>
      <div class="ornament_2"></div>
    </div>
  </body>
</html>

