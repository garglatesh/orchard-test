<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {

    /**
     * 
     * @return type
     * Function to get page for isPalindrome
     */
    public function getCheckIsPalindrome() {
        return view('admin.is-palindrome');
    }

    /**
     * 
     * @param Request $request
     * @return type
     * Function to check string is palindrome or not
     */
    public function postCheckIsPalindrome(Request $request) {
        $data = $request->all();
        $input_string = trim(strtolower($data['inpString']));
        $input_string = preg_replace("/[^a-z0-9.]+/i", "", $input_string);
        if (empty($input_string)) {
            $output = "UNDETERMINED";
        }
        // check logic
        $reverse_string = strrev($input_string);
        if ($input_string == $reverse_string) // compare if  the original word is same as the reverse of the same word
            $output = "TRUE";
        else
            $output = "FALSE";
        return view('admin.is-palindrome', ['output' => $output]);
    }

    /**
     * 
     * @return type
     * Function to get page for is heterogram/isogram or not both
     */
    public function getCheckIsHeterogram() {
        return view('admin.is-heterogram');
    }

    public function postCheckIsHeterogram(Request $request) {
        $data = $request->all();
        $input_string = trim(strtolower($data['inpString']));
        $input_string = preg_replace("/[^a-z0-9.]+/i", "", $input_string);
        if (empty($input_string)) {
            $output = "UNDETERMINED";
        }
        // check logic
        $string_array = str_split($input_string);

        if (count($string_array) == array_unique($string_array)) // compare if  the original word is same as the reverse of the same word
            $output = "HETEROGRAM";
        else {
            foreach ($string_array as $char) {
                if (is_numeric($char)) {
                    return false;
                }
                if (!isset($sequence[$char])) {
                    $sequence[$char] = 1;
                } else {
                    $sequence[$char] ++;
                }
            }
            if (count(array_flip($sequence)) == 1) {
                $output = "ISOGRAM";
            }
            $output = "NOTAGRAM";
        }

        return view('admin.is-heterogram', ['output' => $output]);
    }
    
    public function getTestNumbers(){
        for($i=1;$i<100;$i++){
            if($i%3==0){
              echo "SNAP";  
            }elseif($i%5==0){
                echo "CRACKLE";
            }elseif($i%(3*5)==0){
                echo "POP";
            }else{
                echo $i;
            }
            
      }
     return view('admin.test-numbers');
    }

}
