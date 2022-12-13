<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $x = 1;
        $z = 1;
        $y = $x + $z;

        return view('admin.index')->with([
            'title' => __('site.dashboard'),
            'y' => $y
        ]);
    }
}
