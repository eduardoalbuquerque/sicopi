<?php
declare(strict_types=1);

namespace Core;


class Core
{
    private string $controller = 'Home';
    private string  $action = "index";
    private array $parameter = [];
    private array $url = [];

    public function run()
    {
        if ($_GET)  {
            $this->url = explode('/',$_GET['url']);
            foreach ($this->url as $key => $value) {
                $this->controller=($key==0?$value:$this->controller);
                $this->action = ($key==1?$value:$this->action);
                if($key>=2){
                    $this->parameter[] = $value;
                }
            }
        }
        if (!file_exists('Controllers/'.$this->controller.'Controller.php')) {
            $this->controller = 'notFound';
            $this->action = 'index';
        }
        $this->controller = 'Controllers\\'.$this->controller.'Controller';
        $c = new $this->controller();
        call_user_func_array(array($c,$this->action),$this->parameter);
    }

}