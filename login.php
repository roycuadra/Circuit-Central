<?php
//Log in start
session_start();

include("config.php");
include("assets/php/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 10";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: admin.php");
                    die;
                }
            }
        }

        echo "<script>alert('Wrong username or password')</script>";
    } else {
        echo "<script>alert('Please put username and password')</script>";
    }
}
//Log in end
?>
  <?php include 'header.php'; ?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Log-IN</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" />
  
    <style>





@media (max-width:500px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }


}
      .header{
   background-color:var(--red);
   position: sticky;
   top:0; left:0;
   z-index: 1000; 
   outline:none;

}

.header .flex{
  text-decoration:none;
   display: flex;
   align-items: center;
   padding:1.5rem 2rem;
   max-width: 1200px;
   margin:0 auto;
   height:70px;

}

.header .flex .logo{
   margin-right: auto;
   font-size: 2.5rem;
   color:var(--white);
}

.header .flex .navbar a{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .navbar a:hover{
   color:yellow;
}

.header .flex .cart{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .cart:hover{
   color:yellow;
}

.header .flex .cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: var(--white);
   color:var(--blue);
   font-size: 2rem;
}
      .login-card {
        margin-top: 50px;
        margin-bottom:500px;
      }

      @media (min-width: 576px) {
        .login-card {
          margin-top: 150px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8  col-lg-4 col-10">
          <div class="login-card">
            <h2 class="text-center">Login</h2>
            <h3 class="text-center">Enter your credentials</h3>
            <form method="post" class="login-form" >
              <div class="form-group">
                <input
                  spellcheck="false"
                  class="form-control"
                  type="text"
                  placeholder="Username" name="user_name"
                />
              </div>
              <div class="form-group">
                <div class="password">
                  <input
                    spellcheck="false"
                    class="form-control"
                    id="password"
                    type="password"
                    placeholder="Password" name="password"
                  />
                  <button
                    class="toggle"
                    type="button"
                    onclick="togglePassword(this)"
                  ></button>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="js/script.js"></script>
<script src="assets/js/font-awesome.js"></script>
  </body>
</html>
