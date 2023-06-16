<?php 
    session_start();

    include("config.php");
    include("assets/php/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password']; // Retrieve confirm password from form data

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && $password === $confirm_password) // Check if password and confirm password match
        {

            //save to database
            $user_id = random_num(1);
            $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')"; // Update query to exclude confirm password field

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        } else if ($password !== $confirm_password) { // If password and confirm password do not match
            echo "<script>alert('Password and confirm password do not match')</script>";
        } else {
            echo "<script>alert('Please fill in all the fields')</script>";
        }
    }


    class Config
    {
        private $DBHOST = 'localhost';
        private $DBUSER = 'root';
        private $DBPASS = '';
        private $DBNAME = 'fecth_crud_app';
    
        protected $conn = null;
    
        public function __construct()
        {
            $dsn = 'mysql:host=' . $this->DBHOST . ';dbname=' . $this->DBNAME;
    
            try {
                $this->conn = new PDO($dsn, $this->DBUSER, $this->DBPASS);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die('Error: ' . $e->getMessage());
            }
        }
    }
    



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Sign-up</title>
</head>

<body>
    <div class="container">
        <!-- Sign up Form start -->
        <div class="row justify-content-center wrapper" id="register-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card justify-content-center rounded-right myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Welcome back!</h1>
                        <hr class="my-3 bg-light myHr">
                        <p class="text-center font-weight-bolder text-light lead">To keep connected with us please log
                            in your personal info.</p>
                        <button class="btn btn-outline-light btn-lg align-self-center
                           font-weight-bolder mt-4 myLinkBtn" id="login-link"><a href="login.php"
                                style="text-decoration:none;color:white;"> Sign in</a></button>
                    </div>
                    <div class="card rounded-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">Create Account</h1>
                        <hr class="my-3">
                        <form method="post" class="px-3" id="register-form" onsubmit="Form()">
                            <div id="regAlert"></div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"> <i class="far fa-user fa-lg"></i>
                                    </span>
                                </div>
                                <input type="text" name="user_name" id="username" class="form-control rounded-0"
                                    placeholder="Username" autocomplete="off">
                            </div>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class=" form-control rounded-0"
                                    placeholder="Password" minlength="5" autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text rounded-0" id="show-password"
                                        onclick="togglePassword('password')">
                                        <i class="fas fa-eye fa-lg"></i>
                                    </span>
                                </div>
                            </div>
                            <p id="message" class="text-center"></p>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="confirm_password" id="cpassword"
                                    class=" form-control rounded-0" placeholder="Confirm Password" minlength="5"
                                    autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text rounded-0" id="show-cpassword"
                                        onclick="togglePassword('cpassword')">
                                        <i class="fas fa-eye fa-lg"></i>
                                    </span>
                                </div>
                            </div>
                            <p id="message" class="text-center"></p>

                            <div class="form-group ">
                                <input type="submit" value="Sign Up" id="registers-btn"
                                    class="btn btn-primary btn-lg w-100 btn-block myBtn">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!-- Sign up Form End -->
    </div>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/font-awesome.js"></script>
    <script src="assets/js/main.js"></script>
</body>+
</html>