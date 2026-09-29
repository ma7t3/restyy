<?php

namespace ma7t3\Restyy;

class App {
    private $env;

    public function __construct() {
        $this->env = new \ma7t3\DotEnv(getcwd() . '/.env');
        $GLOBALS['env'] = $this->env;
    }
}
