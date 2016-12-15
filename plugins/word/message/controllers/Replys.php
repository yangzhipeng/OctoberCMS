<?php namespace word\Message\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Replys extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'word.message.manage_word' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('word.Message', '回复', 'Words');
    }
}