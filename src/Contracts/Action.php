<?php
namespace agoalofalife\bpm\Contracts;


interface Action
{
    /**
     * @return array url -> string , http_type -> string
     */
    public function getData();
}