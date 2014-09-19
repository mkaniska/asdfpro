<?php 

        function encryptData($data) {
            $encription = base64_encode($data['email'].'#'.$data['id']);
            return $encription;
        }

        function decryptData($string) {
            $out_string = base64_decode($string);
            $actual_string = explode("#",$out_string);
            $data['email'] = $actual_string[0];
            $data['id'] = $actual_string[1];
            return $data;
        }

        //Alphanumeric and any exception chars (if mentioned) are allowed.
        function alphanumericValidation($alphaNumericStr,$exceptionVal="") {
            $alphaNumericStr = str_replace(" ","",$alphaNumericStr);
            if(!preg_match('/^[A-Za-z0-9'.$exceptionVal.']+$/',$alphaNumericStr)) {
               return false;
            } else {
               return true;
            }
        }

?>