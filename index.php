<?php
    include 'functions.php';
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
            Generate your Secure password
        </span>
    </div>

    <div class="formcontainer">
        <form action="" method="GET">
            <div>
                <label class="password" for="lenght">Password length:</label>
                <input type="number" min="1" max="25" id="lenght" name="input"  required>
            </div>
           
            <div class="radios">
                <span class="allow">
                    Allow ripetition for one or more characters
                </span>
                
                <input type="radio" id="radio1" name="ripetition" value="yes"> 
                <label for="radio1">yes</label>

                <input type="radio" id="radio2" name="ripetition" value="no">
                <label for="radio2">no</label>
            </div>

            <div class="checkboxes">
                <div>
                    <input type="checkbox" name="letter" id="check1">
                    <label for="check1">Letters</label>
                </div>
                
                <div>
                    <input type="checkbox" name="number" id="check2">
                    <label for="check2">Numbers</label>
                </div>
               
                <div>
                    <input type="checkbox" name="symbol" id="check3">
                    <label for="check3">Symbols</label>
                </div>
            </div>

            <?php  echo $_SESSION['text'] ?>

            <div class="buttons">
                <input type="submit" value="Create">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>