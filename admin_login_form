<?php 
require("Connection.php");

?>
<html>

<head>

    <title> ADMIN LOGIN </title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        body {
            background-image: linear-gradient(94.3deg, rgba(26, 33, 64, 1) 10.9%, rgba(81, 84, 115, 1) 87.1%);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            color: white;
        }
        
        header .header {
            background-color: #fff;
            height: 45px;
        }
        
        header a img {
            width: 134px;
            margin-top: 4px;
        }
        
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        
        .login-page .form .login {
            margin-top: -31px;
            margin-bottom: 26px;
        }
        
        .form {
            align-items: center;
            border-radius: 15px;
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            width: 300px;
            margin: 0 auto 100px;
            padding: 51px;
            height: 300px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 14px;
        }
        
        .form button {
            border-radius: 10px;
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background-color: #328f8a;
            background-image: linear-gradient(45deg, #9bf8f4, #392d69);
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        
        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .container {
            align-items: center;
            position: relative;
            z-index: 1;
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <body>
        <div class="login-page">
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3 style="color:black">ADMIN LOGIN</h3>
                        <p style="color:black">Please enter your credentials to login.</p>
                    </div>
                </div>
                <form class="login-form" method="POST">
                    <input type="text" placeholder="username" name="AdminName" required />
                    <input type="password" placeholder="password" name="AdminPass" required  />
                    <button type="submit" name="Submit">Login</button>
                </form>
            </div>
        </div>

        <?php 

        if(isset($_POST['Submit']))
        {

            $query = "SELECT * FROM `login_admin` WHERE `Admin_Name`= '$_POST[AdminName]' AND `Admin_Password`= '$_POST[AdminPass]'";
            
            $results=mysqli_query($con,$query);

            if(mysqli_num_rows($results)==1){
                session_start();
                $_SESSION['AdminLoginId']=$_POST['AdminName'];
                header("location: admin_panel.php");

                //  echo"<script>alert('COREECT PASSWORD!!!');</script>";

            }
            else{
                echo"<script>alert('INCORRECT PASSWORD!!!');</script>";
            }
            

        }


        ?>




    </body>
</body>

</html>
