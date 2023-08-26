<?php
    session_start();

    if(isset($_GET['input']) && is_numeric($_GET['input'])) {
        $stringLenght = intval($_GET['input']);
    }
    else {
        $stringLenght = null;
    }

    if(isset($_GET['ripetition'])) {
        $notDuplicate = $_GET['ripetition'];
    }
    else {
        $notDuplicate = false;
    }


    $onlyLetter = isset($_GET['letter']);
    $onlyNumber = isset($_GET['number']);
    $onlySymbol = isset($_GET['symbol']);
    $arrayOfCharacters =[];

    function generateRandomString($array, $dupli, $length, $letters, $numbers, $symbols) {
        $array = [];
        
        if ($letters == 'on') {
            $array[] = 'abcdefghijklmnopqrstuvwxyz';
        }
        
        if ($numbers == 'on') {
            $array[] = '0123456789';
        }
        
        if ($symbols == 'on') {
            $array[] = '!@#$%^&*()_-+=?';
        }
        
        if (count($array) > 0) {
            $randomString = '';
            $pool = implode('', $array);
    
            for ($i = 0; $i < $length; $i++) {
                $index = rand(0, strlen($pool) - 1);
                $randomCharacterSet = $pool[$index];
                $randomString .= $randomCharacterSet;
                if ($dupli == 'no') {
                    $pool = substr_replace($pool, '', $index, 1);
                }
            }
        
            return $randomString;
        } else {
            return false;
        }
    }
    


    $randomPassword = generateRandomString($arrayOfCharacters,  $notDuplicate, $stringLenght,  $onlyLetter, $onlyNumber, $onlySymbol);
    $notSelected = false;
    $notRadioSelected = false;
    if($stringLenght && $randomPassword != false && $notSelected == false && $notDuplicate != false) {
        $_SESSION['new_password'] = $randomPassword;
        header('location: ./result.php');
    }

    if((isset($_GET['input'])) && ($onlyLetter == false && $onlyNumber == false && $onlySymbol == false)) {
        $notSelected = true;
    }

    if((isset($_GET['input'])) && ($notDuplicate == false)) {
        $notRadioSelected = true;
    }