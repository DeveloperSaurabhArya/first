<?php

function random_password($n = 8)
{
         $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*(){}*-/+';

        // Shuffle the characters
        $shuffled = str_shuffle($characters);

        // Select the first 8 characters as the password
        $password = substr($shuffled, 0, $n);

        // Print the password
        return $password;
}

function check_number($n) //Function of Check Even or Odd Number
{

        if(  intval($n%2) == 0 )
        {
                print('Number is even');
        }

        else{
                print('Number is Odd');
        }

}


?>