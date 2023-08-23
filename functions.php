<?php
    session_start();

    if(isset($_GET['input'])) {
        $stringLenght = $_GET['input'];
    }
    else {
        $stringLenght = null;
    }

    if(isset($_GET['ripetition'])) {
        $notDuplicate = $_GET['ripetition'];
    }
    else {
        $notDuplicate = null;
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

   
    if($stringLenght && $randomPassword != false) {
        $_SESSION['new_password'] = $randomPassword;
        header('location: ./result.php');
        $_GET['input'] = null;

        $vediamo = $_GET['ripetition'];
        $_SESSION['test'] = $vediamo;
    }

    if ($randomPassword == false) {
        $message = "Select at least one of the options: Letters, Numbers or Symbols.";
        $_SESSION['text'] = $message;
    }