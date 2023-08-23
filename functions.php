<?php
    session_start();
    
    $stringLenght = $_GET['input'];
    $onlyLetter = $_GET['letter'];
    $onlyNumber = $_GET['number'];
    $onlySymbol = $_GET['symbol'];
    

    function generateRandomString($length, $letters, $numbers, $symbols) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-+=?';
        $letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number = '0123456789';
        $symbol = '!@#$%^&*()_-+=?';
        $randomString = substr(str_shuffle($characters), 0, $length);
        
        if($letters == 'on' && $numbers == 'on' && $symbols == 'on') {
            $randomString = substr(str_shuffle($characters), 0, $length);
        }

        if ($letters == 'on') {
            $randomString = substr(str_shuffle($letter), 0, $length);
        }

        if ($numbers == 'on') {
            $randomString = substr(str_shuffle($number), 0, $length);
        }

        if ($symbols == 'on') {
            $randomString = substr(str_shuffle($symbol), 0, $length);
        }
        return $randomString;
    }

    $randomPassword = generateRandomString($stringLenght,  $onlyLetter, $onlyNumber, $onlySymbol);

    if(isset($stringLenght)) {
        $_SESSION['test'] =  $stringLenght;
        $_SESSION['test2'] =  $onlyLetter;
        $_SESSION['new_password'] = $randomPassword;
        header('location: ./result.php');
    }