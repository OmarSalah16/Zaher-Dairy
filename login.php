<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="login">
      <div class="login-triangle"></div>

      <h2 class="login-header">Log in</h2>

      <form class="login-container">
        <p><input type="email" placeholder="Email"></p>
        <p><input type="password" placeholder="Password"></p>
        <p><input type="submit" value="Log in"></p>
        <p style="text-align:center;">Don't have an account?</p>
        <a href="signup.php" style="margin-left:140px;"><u>Sign Up Here</u></a>
      </form>

    </div>
  </body>
</html>

<style media="screen">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

  body {
  background: #a3d2ca;
  font-family: 'Open Sans', sans-serif;
  }

  .login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
  margin-top:10%;
  }

  /* Reset top and bottom margins from certain elements */
  .login-header,
  .login p {
  margin-top: 0;
  margin-bottom: 0;
  }

  /* The triangle form is achieved by a CSS hack */
  .login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #f05945;
  }

  .login-header {
  background: #f05945;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  }

  .login-container {
  background: #ebebeb;
  padding: 12px;
  }

  /* Every row inside .login-container is defined with p tags */
  .login p {
  padding: 12px;
  }

  .login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
  }

  .login input[type="email"],
  .login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
  }

  /* Text fields' focus effect */
  .login input[type="email"]:focus,
  .login input[type="password"]:focus {
  border-color: #888;
  }

  .login input[type="submit"] {
  background: #f05945;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
  }

  .login input[type="submit"]:hover {
  background: #17c;
  }

  /* Buttons' focus effect */
  .login input[type="submit"]:focus {
  border-color: #05a;
  }
</style>
