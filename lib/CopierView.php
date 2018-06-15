<?php

namespace Copier;


class CopierView
{
    public function __construct($get)
    {
    }
    public function presentBody()
    {
        $copier = new Copier();
        $uName = $copier->getCurrUserName();
        $title = <<<HTML
<H1>Welcome $uName</H1>
HTML;
        return $title;
    }
}