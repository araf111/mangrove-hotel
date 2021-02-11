<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Share;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where(['active'=>1])->orderBy('id','asc')->paginate(10);
       
        $shares = Share::with(['project'])->paginate(10); 

        return view('admin.settings.share.index',compact(['projects','shares']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::where(['active'=>1])->orderBy('id','asc')->paginate(10);
       
        $shares = Share::with(['project'])->paginate(10); 

        return view('admin.settings.share.create',compact(['projects','shares']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_id'        =>'required',
            'grand_total'       =>'required',
            'booking_amount'    =>'required',
            'installment_amount'=>'required',
            'installment_number'=>'required',
            'continue'          =>'required',
        ]);

        $total_shares = Share::where('project_id', $request->project_id)->count();
        
        if($total_shares > 0){

            Share::where('project_id',$request->project_id)
                ->update(['continue'=>0]);

            $input = $request->all();
            
            $share = Share::create($input);

            
            return redirect()
                    ->route('admin.shares.index')
                    ->with('status', 'Share created successful!');
        }else{

            $input = $request->all();
            
            Share::create($input);

            return redirect()
                    ->route('admin.shares.index')
                    ->with('status', 'Share created successful!');
        }    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.settings.share.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $share = Share::findOrFail($id);
        return view('admin.settings.share.edit', [
            'projects' => Project::all(), 
            'shares' => Share::all(),
            'share' => $share,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $share = Share::findOrFail($id);

        $request->validate([
            'project_id'        =>'required',
            'grand_total'       =>'required,numeric',
            'booking_amount'    =>'required,numeric',
            'installment_amount'=>'required,numeric',
            'installment_number'=>'required,numeric',
            'continue'          =>'required',
        ]);

        $total_shares = Share::where('project_id', $request->project_id)->count();
                            

        if($total_shares==1){
        
            $input = $request->all();

            $share->fill($input)->save();

            return redirect()
                    ->route('admin.shares.index')
                    ->with('status', 'Share updated successfully!');
        }else{

            Share::where('project_id',$request->project_id)
                ->where('id','<>',$id)
                ->update(['continue'=>0]);

            $input = $request->all();

            $share->fill($input)->save();

            return redirect()
                    ->route('admin.shares.index')
                    ->with('status', 'Share updated successfully!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share=Share::find($id);
        $share->delete();
        //Project::whereId(['project_id',$id])->firrst();
        Session::flash('warning','Your Share was successfully Deleted!');
        return redirect()->back();
    }
}
