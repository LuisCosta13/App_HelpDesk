<?php 

    //unset() for deleting only some variables

    //Global way
    session_destroy();
    header('Location: index.php');

?>