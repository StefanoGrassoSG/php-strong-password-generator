<?php
    session_start();
    include 'functions.php'

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <h1>
            La Password Generata è:
        </h1>
        <div>
            <?php echo $_SESSION['new_password'] ?>
        </div>

        <form action="index.php">
            <input type="submit" value="Back">
        </form>
    </body>
</html>