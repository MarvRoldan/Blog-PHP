<?php 
    include './includes/Articles.Class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-PHP</title>
</head>
<body>
    <h1>Blog-PHP</h1>
    <?php
        $articles = new Articles( dirname(__FILE__) . '/data/articles.json' );
        
        $articles->output();
    ?>
</body>
</html>