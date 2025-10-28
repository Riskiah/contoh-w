<?php
// cek apakah tombol submit sudah tekan atau belum
if ( isset($_POST["submit"]) ) {
  //cek username & password
  if( $_POST["username"] == "unknowname" && $_POST["password"] == "Seblak@2023" ) {
// jika benar, rederict ke halaman utama
    header("Location: form.html");
    exit;
  } else {
// jika salah, tampilkan pesan kesalahan 
    $error = true;
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
 <style>
       * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #23242a;
}

.box {
  position: relative;
  width: 380px;
  height: 420px;
  background: #1c1c1c;
  border-radius: 8px;
}

.box form {
  position: absolute;
  inset: 4px;
  background: #222;
  padding: 50px 40px;
  border-radius: 8px;
  z-index: 2;
  display: flex;
  flex-direction: column;
}

.box form h2 {
  color: #fff;
  font-weight: 500;
  text-align: center;
  letter-spacing :0.1em;
}

.box form .inputBox {
  position: relative;
  width: 300px;
  margin-top: 35px;
}

.box form .inputBox input {
  position: relative;
  width: 100%;
  padding: 20px 10px 10px;
  background: transparent;
  outline: none;
  border: none;
  box-shadow: none;
  color: #23242a;
  font-size: 1em;
  letter-spacing: 0.05;
  transition: 0.5s;
  z-index: 10;
}

.box form .inputBox span {
  position: absolute;
  left: 0;
  padding: 20px 10px 10px;
  pointer-events: none;
  color: #8f8f8f;
  font-size: 1em;
  letter-spacing: 0.05em;
  transition: 0.5s;
}

.box form .inputBox input:valid ~ span,
.box form .inputBox input:focus ~ span {
  color: #fff;
  font-size: 0.75em;
  transform: translateY(-34px);
}

.box form .inputBox i {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  border-radius: 4px;
  overflow: hidden;
  transition: 0.5s;
  pointer-events: none;
 }

.box form .inputBox input:valid ~ i,
.box form .inputBox input:focus ~ i {
  height: 44px;
}

.btn3 {
  border: none;
  outline: none;
  padding: 9px 25px;
  background: #fff;
  cursor: pointer;
  font-size: 0.9em;
  border-radius: 9px;
  font-weight: 600;
  width: 100;
  margin-top: 10px;
}

.btn3:hover {
  background-color: grey;
}

</style>
  </head>
  <body>
  <div class="box">
    <form action="" method="post">
      <h2>LOGIN</h2>
      <div class="inputBox">
        <input type="text" name="username" required="required"/>
        <span>Username</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" name="password" required="required"/>
        <span>Password</span>
        <i></i>
      </div> <br>
      <button class="btn3" type="submit" name="submit">LOGIN</button> <br>
      <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;"> username / password salah! <br> Masukan: <br> Username: unknowname <br> Password: Seblak@2023</p>
      <?php endif; ?>
    </form>
  </div>
  </body>
</html>
