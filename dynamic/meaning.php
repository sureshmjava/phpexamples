<?php
    require "connection.php";

    if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $sql="select * from word_dict where id=".$_GET['id'];
    //var_dump($sql);

    $result=mysqli_query($conn,$sql);

    if($result==false){
        echo mysqli_error($conn);
    }else{
        $word_meaning=mysqli_fetch_assoc($result);
    }

}else{
    $word_meaning=null;
}

?>
<?php
    require 'header.php';?>
            <ul>
                <?php if($word_meaning == null):?>
                        <p> Word is not found...! Please check another word..!</p>
                <?php else: ?>
                    <li>
                        <article>
                            <h2><?= $word_meaning['word']?></h2>
                            <p><?= $word_meaning['Meaning']?></p>
                        </article>
                    </li>
                <?php endif; ?>
            </ul>
            <h3><a href="data.php">back</a><h3>
<?php
    require 'footer.php';?>