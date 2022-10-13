<?php

namespace App\Controllers;

use Database\DBConnection;

abstract class Controller
{

    protected $db;


    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    protected function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        include_once VIEWS . $path . '.php';

        $content = ob_get_clean();

        require_once VIEWS . 'layout.php';
       /* 
       if ($params) {            
            require VIEWS . 'layout2.php';
                }
        else {            
            require VIEWS . 'layout.php';        
        } 
        */

        return $content;

    }

    public function adminView(string $path, array $params = null)
    {
        ob_start();

        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

        include_once VIEWS . $path . '.php';

        $content = ob_get_clean();

        require_once VIEWS . 'admin/layout.php';

        return $content;
    }

    protected function getDB()
    {
        return $this->db;
    }

}
