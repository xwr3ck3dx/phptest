<?php

    require("config/config.php");
    require("config/db.php");

    $query = "SELECT * FROM posts";
        
    $results = mysqli_query($conn,$query);

    $posts =mysqli_fetch_all($results,MYSQLI_ASSOC);
    // var_dump($posts);
    mysqli_free_result($results);
    mysqli_close($conn);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>POSTS</h1>
    <?php foreach($posts as $post): ?>
    <div>
        <h2><?php echo $post['title'];?></h2>
        <h4><?php echo $post['body'];?></h4>
        <p><?php echo $post['author']." at ".$post['created_at'];?></p>
        <a href="post.php?id=<?php echo $post['ID']?>">Read more</a>
    </div>
    <?php endforeach; ?>
</body>
</html>