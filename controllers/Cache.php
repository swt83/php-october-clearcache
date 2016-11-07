<?php namespace Travis\Janitor\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Cache extends Controller
{
    public $implement = [];

    public $requiredPermissions = [
        'travis.janitor.manage_cache'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Travis.Janitor', 'janitor', 'cache');
    }

    public function index()
    {
    	$this->pageTitle = 'Cache';
    }

    public function clear()
    {
    	// clear
    	\Cache::flush();

    	// return
    	die('Cache successfully cleared.'); // must die to bypass backend crap
    }
}