<?php
    
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

//    $sql =<<<EOF
//       CREATE TABLE COMPANY
//       (ID INT PRIMARY KEY     NOT NULL,
//       NAME           TEXT    NOT NULL,
//       AGE            INT     NOT NULL,
//       ADDRESS        CHAR(50),
//       SALARY         REAL);
// EOF;
        // $ret = $db->exec($sql);
        // if(!$ret){
        //     echo $db->lastErrorMsg();
        // } else {
        //     echo "Table created successfully\n";
        // }
        // $db->close();


// $sql =<<<EOF
// INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
// VALUES (1, 'Paul', 32, 'California', 20000.00 );

// INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
// VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

// INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
// VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

// INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
// VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
// EOF;
// $ret = $db->exec($sql);
// if(!$ret) {
//    echo $db->lastErrorMsg();
// } else {
//    echo "Records created successfully\n";
// }
// $db->close();


//     $sql =<<<EOF
//     SELECT * from COMPANY;
// EOF;

//     $ret = $db->query($sql);
//     while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
//     echo "ID = ". $row['ID'] . "\n";
//     echo "NAME = ". $row['NAME'] ."\n";
//     echo "ADDRESS = ". $row['ADDRESS'] ."\n";
//     echo "SALARY = ".$row['SALARY'] ."\n\n";
//     }
//     echo "Operation done successfully\n";
//     $db->close();


// $sql =<<<EOF
//     CREATE TABLE INFO
//     (NAME TEXT NOT NULL,
//      EMAIL TEXT NOT NULL);
// EOF;
    
    if(isset($_POST['submit'])){
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $sql =<<<EOF
    INSERT INTO INFO VALUES( '$name','$email');
EOF;
    $ret= $db->query($sql);
    if($ret){
            echo $db->lastErrorMsg();
        } else {
            echo "TABLE CREATED\n";
        }
        // $db->close();
    }


// $sql =<<<EOF
//     INSERT INTO INFO VALUES( 'RAM','ram@ram.com');
// EOF;

$sql =<<<EOF
    SELECT * FROM INFO;
EOF;
// $sql =<<<EOF
//     DELETE FROM INFO;
// EOF;
    $ret= $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        // echo "ID = ". $row['ID'] . "\n";
        echo "NAME = ". $row['NAME'] ."\n";
        echo "EMAIL = ". $row['EMAIL'] ."\n";
        // echo "SALARY = ".$row['SALARY'] ."\n\n";
    }
    echo "Operation done successfully\n";
    $db->close();
    // if($ret){
    //     echo $db->lastErrorMsg();
    // } else {
    //     echo "TABLE CREATED\n";
    // }
    // $db->close();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>