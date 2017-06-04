<?php
namespace App\Backend\Admin\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('backend.admin.dashboard');
    }
}
