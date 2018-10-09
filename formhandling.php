<?php 
    $nameErr = $addressErr = $emailErr= "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["username"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["username"]);
        }
        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                $emailErr ="Email Invalid";
            } 
        } 
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?> " method="POST" class="container" style="margin-top:20px">
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" name="username" placeholder="Enter email" require>
            <span class="nameErr" style="color:red"><?php echo $nameErr;?></span>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="email" require>
            <span class="emailErr" style="color:red"><?php echo $emailErr ?></span>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="address" require>
            <span class="addressErr"></span>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="formhandling.php?username=Sam&address=">Sam </a>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>