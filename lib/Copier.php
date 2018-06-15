<?php


namespace Copier;


class Copier
{
    public function __construct()
    {
    }

    /** Get the current login user name
     * @return current user name
     */
    public function getCurrUserName()
    {
        $pwd = exec("pwd");
        return explode('/',$pwd)[2];
    }
}