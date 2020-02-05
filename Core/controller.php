<?php


namespace Core;


class Controller
{
    protected function loadView(string $view):void
    {
        require "Public/Views/{$view}".EXT;
    }
}