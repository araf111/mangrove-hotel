<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(GateContract $gate)
    {

        //$gate->define('is-super-dashboard', function ($user) {
        //    return $user->hasRole('superAdmin');
        //});

        //$this->middleware(['auth', 'can:manage-dashboard']);
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profileView()
    {
        return view('admin.profile_view');
    }

    public function investorList()
    {
        return view('admin.investor_list');
    }
}
