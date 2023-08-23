<?php
    
    $stringLenght = $_GET['input'];

    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-+=?';
        $randomString = substr(str_shuffle($characters), 0, $length);
        return $randomString;
    }

    $randomPassword = generateRandomString($stringLenght);