<?php namespace div\DivCms\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ContactNumber extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'div.general' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('div.DivCms', 'main-cms', 'contact-number-item');
    }
}
