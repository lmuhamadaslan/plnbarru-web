<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PatrolcheckController extends BaseController
{
    public function k3()
    {
        return view('Admin/Patrolcheck/k3');
    }

    public function coalHandling()
    {
        return view('Admin/Patrolcheck/coalHandling');
    }

    public function unit()
    {
        return view('Admin/Patrolcheck/unit');
    }
}
?>