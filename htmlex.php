<?php 
$articles=[
    [
        "title" => "First One",
        "content" => "this is first article"
    ],
    [
        "title" => "Second One",
        "content" => "this is Second article"
    ],
    [
        "title" => "Third One",
        "content" => "this is Third article"
    ]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> This is our website</title>
    </head>
    <body>
        <header>
            <h1>My WebSite</h1>
        </header>
        <main>
            <ul>
                <?php foreach($articles as $art):?>
                    <li>
                        <article>
                            <h2><?= $art["title"];?></h2>
                            <p><?= $art["content"];?> </p>
                        </article>
                    </li>
                    <?php endforeach;?>
            </ul>
        </main>
    </body>
</html>