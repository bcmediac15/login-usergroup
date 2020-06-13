<?php
/*
    CONTOH FORM LOGIN DENGAN MULTI GROUP USER BY MADE ARTHA JUNI 2020
*/
session_start();
if(isset($_POST["txuser"])){
    $u = $_POST["txuser"];
    $p = $_POST["txpwd"];
    echo $u;
    $cnn =mysqli_connect("localhost","stiki","web1","multiuser");
    if($cnn){
        //sql ini sangat rentan dengan tindak sql inject jangan diinplementasikan pada web release
        //hati-hati dengan sql inject!!!
        $sql = "SELECT tg.pagedefault FROM tb_user tu INNER JOIN tb_group tg ON tu.idgroup=tg.idgroup WHERE tu.username='$u' AND tu.password='$p';";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h = mysqli_fetch_array($hsl);
            $_SESSION["GROUP_USER"] = $h["pagedefault"];
            
        }

    }
}
if(isset($_SESSION["GROUP_USER"])){
    header("location: pages.php");
}
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Form</title>
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4">

                <div class="alert alert-primary" role="alert">
                    This is a primary alert—check it out!
                </div>
                
                <h3>Login Form</h3>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="txuser">User Name</label>
                        <input type="text" class="form-control" id="txuser" name="txuser">
                    </div>
                    <div class="">
                        <label for="txpwd">Password</label>
                    </div>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" id="txpwd" name="txpwd">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <input type="checkbox" onclick="showpwd()">
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>



            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(e){
            $(".alert").hide();
        }); 
    </script>
    <script>
        function showpwd() {
            var x = document.getElementById("txpwd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
  </body>
</html>