<?php
    require "connection.php";

    $sql="select * from word_dict";

    $result=mysqli_query($conn,$sql);

    if($result == false){
        echo mysqli_error($conn);
    }
    else{
        $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
    } 

?>
<?php
    require 'header.php';
    ?>
            <?php if(empty($data)):?>
                <h2>No Words Found.... Please try Again...!</h2>
            <?php else:?>
            <ul>
                <?php foreach ($data as $value):?>
                    <li>
                        <article>
                            <h2><a href="meaning.php?id=<?= $value['id'];?>">
                            <?= $value['word'];?></a></h2>
                            <p><?= $value['Meaning'];?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
<?php require 'footer.php' ; ?>