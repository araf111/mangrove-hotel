<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use Auth;

class InquiryController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //$gate->define('is-super-dashboard', function ($user) {
        //    return $user->hasRole('superAdmin');
        //});

        //$this->middleware(['auth', 'can:manage-dashboard']);
        $this->middleware(['auth']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inquiries.index', ['inquiries' => Inquiry::all()]);
    }

    public function followup(Request $request)
    {
    	$id = $request->input('id');
    	$inquiry = Inquiry::findOrFail($id);

        $inquiry->user_id = Auth::user()->id;
        $inquiry->save();

        return redirect()
                ->route('admin.inquiry')
                ->with('status', 'Inquiry Follow Up successful!');

    }
}
