<?php

namespace Controller;

use Core\Core;
use Psr\Container\ContainerInterface;

class MainController extends Core
{
    private $auth;
    private $tmp;
    private $http;

    protected function http()
    {
        if(is_null($this->http)) $this->http = $this->container->get('http');

        return $this->http;
    }

    protected function tmp()
    {
        if(is_null($this->tmp)) $this->tmp = $this->container->get('tmp');

        return $this->tmp;
    }
}