<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link href="../images/LOGO.png" rel="icon">

    <title>Projekt Križan D.O.O.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                  <div style="text-align:center; margin-top:30px;">
                    <a href="" class="logo">
                        <img src="../images/LOGO.png" style="width:100px;" alt="" class="mainLogoImage">
                    </a>
                    <h1 style="text-align:center; color: #208d92">Projekt Križan D.O.O.</h1>
                  </div>
                </nav>
            </div>
        </div>
    </div>
  </header>
  <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "../database.php";
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($user) {
                          /*$inputPassword = 'passexample'; 
                          $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT); 

                           echo $hashedPassword;*/
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php?userId=".$user["id"]);
                    die();
                }else{
                    echo "<div>Password does not match</div>";
                }
            }else{
                echo "<div>Email does not match</div>";
            }
        }
    ?>

    <div class="site-section" style="margin-top: 30px; display: flex; flex-direction: row; align-items: center; justify-content: center;">
      <div class="container">
        <div class="row">

        <div class="col-lg-3" style="display:inline-block;">
        </div>
       
          <div class="col-lg-6" style="display:inline-block;">
          
            <form action="login.php" method="post" class="p-5 bg-white border" >
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email1">Email</label>
                  <input type="email" class="form-control" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Unesite email..." autocomplete="on">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password1">Password</label>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Unesite šifru..." required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" name="login" class="btn btn-primary  py-2 px-4 rounded-0">Login</button>
                </div>
              </div>

  
            </form>
          </div>

        </div>
      </div>
    </div>

  </body>
</html>