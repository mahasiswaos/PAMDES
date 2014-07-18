<?php

namespace App\Controllers;
use View;
use App\Controllers\AdminController;

/**
 * Description of MenuController
 *
 * @author ajis
 */
class MenuController extends AdminController {
   public function index() {
        
        return View::make('menu.index');
    }

}
