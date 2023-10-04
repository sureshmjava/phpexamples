<?php

    $serverName="localhost";
    $userName="sureshblog";
    $password="suresh@123";
    $databaseName="blog";

    $conn=mysqli_connect($serverName,$userName,$password,$databaseName);

    if(mysqli_connect_error()){
        echo "connection is not established";
        exit();
    }
    
    $sql="select * from test_purpose";

    $result=mysqli_query($conn,$sql);

    if($result==false){
        echo mysqli_error($conn);
    }else{
        $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

   

?>
<html>
    <head>
        <title> My Blog</title>
    </head>
    <body>
        <header>
            <center><h1>My Blog</h1></center>
        </header>
        <main>
            <ul>
                <?php foreach ($data as $value):?>
                    <li>
                        <article>
                            <h2><?= $value['name']?></h2>
                            <h2><?= $value['addr']?></h2>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        </main>
    </body>
</html>