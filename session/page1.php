<?php
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['name']= $_POST['name'];
        echo $_SESSION['name'];
        header("Location:http://mentorlearnphp.com/session/page2.php");
    }else{
        echo "Failed";
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name = "name" placeholder="Username">
        <input type="text" name = "email" placeholder = "Email">
        <input type="submit" name ="submit">
    </form>
</body>
</html>