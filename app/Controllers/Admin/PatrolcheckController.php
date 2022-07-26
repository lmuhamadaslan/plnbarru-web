<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PatrolcheckController extends BaseController
{
    // function patrol check k3
    public function k3()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/patrolcheckK3');
    }

    public function emergencyDiesel()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/emergencyDiesel');
    }

    public function fireFighting()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/fireFighting');
    }

    public function hydrantIndoor()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/hydrantIndoor');
    }

    public function hydrantOutdoor()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/hydrantOutdoor');
    }

    public function isiPatrol1()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/isianPatrol1');
    }
    public function isiPatrol2()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/isianPatrol2');
    }
    public function isiPatrol3()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/isianPatrol3');
    }
    public function isiPatrol4()
    {
        return view('Admin/Patrolcheck/PatrolcheckK3/isianPatrol4');
    }

    // function patrol coal handling
    public function coalHandling()
    {
        return view('Admin/Patrolcheck/PatrolcheckCoalHandling/patrolcheckcoalHandling');
    }

    public function unit()
    {
        return view('Admin/Patrolcheck/PatrolcheckUnit/patrolcheckunit');
    }
}
?>