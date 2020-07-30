<?php
session_start();
class Myclass
{

    // public function setproperty($newval){
    // $this->name
    // }

    public function validatePassword($pass, $conpass)
    {
        if (!isset($pass)) {
            $_SESSION['alert'] = "password field empty";
        } elseif (!isset($conpass)) {
            $_SESSION['alert'] = "confirm password field empty";
        } elseif ($pass != $conpass) {
            $_SESSION['alert'] = "password mismatch";
        } else {

            return $a = "1";
        }
    }

    public function hashPassword($pass)
    {
        // this is where we are to work on. This particular function need to be strong bro


        // hashing with md5
        $first_hash = md5($pass);
        $scramble_hash = "";
        $hash_length = strlen($first_hash) - 1;
        // turing the Md5 hash backward. eg Joshua - auhsoj to make it more secure fot password dictionary to get
        for ($i = $hash_length; $i >= 0; $i--) {
            $scramble_hash = $scramble_hash . $first_hash[$i];
            // echo$i;
        }


        // did the same here but with sha1
        $second_hash = sha1($scramble_hash);
        $hash_length = strlen($second_hash) - 1;
        for ($i = $hash_length; $i >= 0; $i--) {
            //concertinated the md5 password with this newly hashed sha1 password but is it still backward.
            $scramble_hash = $scramble_hash . $second_hash[$i];
        }


        $third_hash = crypt($scramble_hash, 's$1');
        $hash_length = strlen($third_hash) - 1;
        $rev_third_hash = "";
        for ($i = $hash_length; $i >= 0; $i--) {
            $scramble_hash = $scramble_hash . $third_hash[$i];
            $rev_third_hash = $rev_third_hash . $third_hash[$i];
        }

        $forth_hash = crypt($scramble_hash, '%@');
        $hash_length = strlen($forth_hash) - 1;
        $rev_forth_hash = "";
        for ($i = $hash_length; $i >= 0; $i--) {
            $scramble_hash = $scramble_hash . $forth_hash[$i];
            $rev_forth_hash = $rev_forth_hash . $forth_hash[$i];
        }

        $fifth_hash = sha1($scramble_hash);
        $hash_length = strlen($fifth_hash) - 1;
        for ($i = $hash_length; $i >= 0; $i--) {
            $scramble_hash = $scramble_hash . $fifth_hash[$i];
        }
        return $final_hash = "$9M#2.%" . $rev_forth_hash . $fifth_hash . $rev_third_hash . "</br>";
        // echo strlen($final_hash) . "</br>";
    }
}
