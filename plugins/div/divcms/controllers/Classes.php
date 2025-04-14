<?php namespace div\DivCms\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Classes extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'div.general' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('div.DivCms', 'main-cms', 'classes');
    }
}
