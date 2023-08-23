<?php
    include 'functions.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>
            Strong Password Generator
        </h1>
    </div>

    <div class="resultcontainer">
        <span>
            No valid parameters entered
        </span>
    </div>

    <div class="formcontainer">
        <form action="" method="GET">
            <label for="lenght">Lunghezza Password:</label>
            <input type="number" min="1" max="20" id="lenght" name="input" required value="">

            <input type="submit" value="Create">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>