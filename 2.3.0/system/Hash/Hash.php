<?php

namespace System\Hash;

class Hash
{
    public static function make($password)
    {
        if ($password != null) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            return $hash;
        }
        return false;
    }
    public static function check($password, $hash)
    {
        if ($password != null && $hash != null) {
            $verify = password_verify($password, $hash);
            return $verify;
        }
        return false;
    }
}
