<?php


namespace App\Http\Misc;


class Decision
{
    protected bool $decided;
    protected $state;
    protected Menu $menu;

    public function __construct($state, Menu $menu)
    {

    }

}
