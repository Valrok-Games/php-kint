<?php
namespace Valrok\PhpKint;

class Bootstrap {

    public function __construct() {
        new Functions\HelperFunction();
    }
}