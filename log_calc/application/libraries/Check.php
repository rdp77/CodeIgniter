<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Check
{
    public function Admin($username, $password)
    {
        $user = "admin";
        $pass = "admin";
        if ($username == $user && $password == $pass) {
            return true;
        } else {
            return false;
        }
    }
}
