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

    /**
     * Create dir and copy the file
     * @param $id student id
     * @param $proj project name
     */
    public function copyFile($id,$proj){
        $dirCmd = "mkdir -p ./477copy/$id/$proj";
        $command = "\cp -rf  ~$id/classweb/$proj/* ./477copy/$id/$proj";
    }
}