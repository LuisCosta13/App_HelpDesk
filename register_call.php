<?php 

    session_start();
    /* Passing Variables */

    $file = fopen('file.hd', 'a');

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $text =$_SESSION['id'] . "-" . $title . "-" . $category . "-" . $description . PHP_EOL;

    fwrite($file,$text);

    fclose($file);

    header('Location: open_call.php?success=true');
?>