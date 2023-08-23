<?php
    session_start();
    if(isset($_GET['input'])) {
        $stringLenght = $_GET['input'];
    }
    else {
        $stringLenght = null;
    }
    
    $onlyLetter = isset($_GET['letter']);
    $onlyNumber = isset($_GET['number']);
    $onlySymbol = isset($_GET['symbol']);
    

    function generateRandomString($length, $letters, $numbers, $symbols) {
        $arrayOfResult =[];

        if ($letters == 'on') {
           $arrayOfResult[] = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        if ($numbers == 'on') {
           $arrayOfResult[] = '0123456789';
        }

        if ($symbols == 'on') {
            $arrayOfResult[] = '!@#$%^&*()_-+=?';
        }
        
        $randomCharacters = implode('', $arrayOfResult);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $randomCharacters[rand(0, strlen($randomCharacters) - 1)];
        }
    
         return $randomString;
    }

    $randomPassword = generateRandomString($stringLenght,  $onlyLetter, $onlyNumber, $onlySymbol);

    if($stringLenght) {
        $_SESSION['test'] =  $stringLenght;
        $_SESSION['new_password'] = $randomPassword;
        header('location: ./result.php');
    }