<?php 
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: admin_login_form.php");


}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>

        <style>
            .container{
                display:flex;
                justify-content:space-between ;
                align-items: center;
            }
        </style>
    </head>
    <body>

        <div class="container">
        <h1>WELCOME TO ADMIN PANEL <?php echo $_SESSION['AdminLoginId'] ?></h1>

            <form method="POST">
                <button name="logout">LOG OUT</button>

            </form>


    </div>

    <?php 

    if(isset($_POST['logout'])){

        session_destroy();
        header("location: admin_login_form.php");
    }

    ?>
        
    </body>
</html>
