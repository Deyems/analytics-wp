<?php
namespace App\Validators;

class Validation{
    
    public static function isAnyFieldEmpty(array $requiredData){
        foreach($requiredData as $item){
            if(!$item) return false;
        }
        return true;
    }

    public static function checkPassword(string $str1, string $str2){
        return ($str1 === $str2) ? true : false;
    }

    public static function validateEmail(string $email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validateNonRequiredField(string $field){
        return htmlspecialchars($field);
    }

}