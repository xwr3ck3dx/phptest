<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
</head>
<body>
<div class="container">
     <form style="margin-top:30px" action="">
        <h1>Give Input:</h1>
        Input: <input type="text" class="form-control" onkeyup="showsuggestion(this.value)">
    </form>
    <h2>Suggestions:</h2>
    <span id="output"></span>
</div>
<script>
    function showsuggestion(str){
        if(str.length == 0){
            document.getElementById("output").innerHTML == "";
            return;
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("output").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","return.php?q="+str,true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>