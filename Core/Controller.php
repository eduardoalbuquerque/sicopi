<?php


namespace Core;


class Controller
{
    protected function loadView(string $view, array $viewData=array()):void
    {
        extract($viewData);
        require "Public/Views/{$view}.php";
    }

    protected  function loadTemplate(string $view,array $viewData=array())
    {
        extract($viewData);
        require "Public/Views/template.php";
    }

    protected function loadViewInTemplate(string $view, array $viewData=array())
    {
        extract($viewData);
        require "Public/Views/{$view}.php";
    }

    protected  function loadTemplateSystem(string $view, array  $viewData=array())
    {
        extract($viewData);
        require "Public/Views/templateSystem.php";
    }
}