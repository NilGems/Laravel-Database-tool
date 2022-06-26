<?php

namespace Nilgems\Datatools\Http\Controllers;

use Illuminate\Routing\Controller;

class PhpMyAdminController extends Controller
{
    public function __invoke() {
        return include datatool_root_path('tools' . DIRECTORY_SEPARATOR . 'phpmyadmin' . DIRECTORY_SEPARATOR . 'index.php');
    }
}