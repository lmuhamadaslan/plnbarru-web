<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class LogsheetController extends BaseController
{
    public function k3()
    {
        return view('Admin/Logsheet/k3');
    }

    public function coalHandling()
    {
        return view('Admin/Logsheet/coalHandling');
    }

    public function unit()
    {
        return view('Admin/Logsheet/unit');
    }
}
?>