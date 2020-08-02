<?php

namespace Hash;

class Hash
{
    public static function make($password, $algorithm = PASSWORD_BCRYPT): string
    {
        $hashed_password = password_hash($password, $algorithm, ['cost' => 8]);

        return $hashed_password;
    }
}
