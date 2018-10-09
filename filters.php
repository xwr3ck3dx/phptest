<?php
    if(filter_has_var(INPUT_POST,'submit')){
        // $email = $_POST['data'];
        // $age = $_POST['data2'];
        // if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
        //     echo "Success";
        // }
        // else{
        //     echo "Invalid Email";
        // }
        // if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        //     echo "Success";
        // }
        // else{
        //     echo "Invalid Email";
        // }
        // var_dump(filter_var($email,FILTER_SANITIZE_EMAIL));

        $filters = array(
            $user => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords"
            ),
            $data => FILTER_VALIDATE_EMAIL,
            "data2" => array(
                "filter"=>FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 10,
                    "max_range" => 80
                )
            )
        );
        print_r(filter_input_array(INPUT_POST,$filters));
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
</head>
<body>

        <form class="container" style="margin-top:30px" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <label for="user">Name</label>
                <input type="text" class="form-control" name="user" placeholder="Data">
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="text" class="form-control" name="data" placeholder="Data">
            </div>
            <div class="form-group">
                <label for="data2">Data2</label>
                <input type="text" class="form-control" name="data2" placeholder="Data2">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        
</body>
</html>