<?php 
    session_start();
    $_SESSION['hits'] = $_SESSION['hits'] + 1;
    $_SESSION['nome'] = 'Pedro';
?>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
            echo 'Esta página foi visualizada ' . $_SESSION['hits'] .' vezes.';
        ?> 
    </body>
</html>