<?php
require_once '../../../model/Config.php';

require_once  Config::getDirName() . '/app/config/autoload.php';

use Hash\Hash;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = Hash::make($password);
    // $verify_password = Hash::verify($password, $hashed_password);

    $query = "SELECT email FROM user_details WHERE email = %s";

    $user = DB::query($query, $email, $password);

    if (count($user) > 0) {
        $query = "SELECT hash FROM user_details WHERE email = %s";

        $hash_result = DB::query($query, $email, $password);
        $user_db_hash = $hash_result[0]['hash'];

        if (Hash::verify($password, $user_db_hash) == 1) {
            echo json_encode([
                'responseCode' => $messages['login']['success']['code'],
                'responseMessage' => $messages['login']['success']['message']
            ]);
        }
    } else {
        echo json_encode([
            'responseCode' => $messages['login']['error']['code'],
            'responseMessage' => $messages['login']['error']['message']
        ]);
    }
}
