<?php

class PageController
{
    public function __construct () {
        echo '__construct method called from PageController<br>';
    }

    public function about ($test = "kikiriki")
    {
        echo 'I\'m about method in PageController with ' . $test . ' parameter.';
    }

    public function index () {
        echo 'I\'m index method in PageController';
    }
}