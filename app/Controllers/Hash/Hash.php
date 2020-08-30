<?php

namespace Hash;

class Hash
{
    public static function make($password, $algorithm = PASSWORD_BCRYPT): string
    {
        return password_hash($password, $algorithm, ['cost' => 8]);
    }

    public static function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
