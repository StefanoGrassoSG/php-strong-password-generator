<?php
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
            The Generated Password is: <?php echo $_SESSION['test'] ?>
        </h1>
        <div class="result"> 
            <?php  echo $_SESSION['new_password'] ?>
        </div>

        <form action="index.php">
            <input type="submit" value="Back">
        </form>
    </body>
</html>