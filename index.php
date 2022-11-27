<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eccomerce website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
     $conn = mysqli_connect("localhost","root","","tra");
     $email="";
     $firstn="";
     $lastn="";
     $phone="";
     $emailo="";
     $password="";
     if(isset($_POST['email'])){
        $email = $_POST['email'];
     }
     if(isset($_POST['firstn'])){
        $firstn = $_POST['firstn'];
     }
     if(isset($_POST['lastn'])){
        $lastn = $_POST['lastn'];
     }
     if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
     }
     if(isset($_POST['create'])){ 
        $insert = "INSERT INTO ta VALUES('$email','$firstn','$lastn','$phone')";
        $q = mysqli_query($conn,$insert);
        $select="SELECT * from ta";
        $s = mysqli_query($conn,$select);
     }
     if(isset($_POST['emailo'])){
        $emailo = $_POST['emailo'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    if(isset($_POST['login'])){
        $insert2 = "INSERT INTO login values('$emailo','$password')";
        $qs = mysqli_query($conn,$insert2);
        header("location:index.php");
    }
    ?>
    <div class="btn-links">
        <button class="first-btn">sign up</button>
        <button class="second-btn">log in</button>
    </div>
    <div class="container-diagram">
        <form  method="POST">
            <input type="email" placeholder="please enter your email" name="email">
            <br>
            <input type="email" placeholder="please enter your first name" name="firstn">
            <br>
            <input type="email" placeholder="please enter your last name" name="lastn">
            <br>
            <input type="phone" placeholder="please enter your phone number" name="phone">
            <br>
            <button class="create-acount" name="create">
                create
            </button>
        </form>
    </div>
    <div class="container-active">
        <form action="index.php" method="POST">
            <input type="email" placeholder="please enter your email" name="emailo">
            <br>
            <input type="password" placeholder="Enter your password" name="password">
            <br>
            <button class="create-login" name="login">
                log in
            </button>
        </form>
    </div>
</body>
<script>
    $(document).ready(function(){
     $(".first-btn").click(function(){
        $(".container-diagram").slideToggle();
     })
     $('.create-acount').click(function(){
            $(".container-diagram").slideToggle();
        })
        $(".second-btn").click(function(){
            $(".container-active").slideToggle();
        })
        $(".create-login").click(function(){
            $(".container-active").slideUp();
        })
    })
</script>
</html>