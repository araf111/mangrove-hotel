<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class ManageFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        $footerSection=HomeSection::where('parent_section_name','footer')->get();
        $footerSectionList=[];
        foreach($footerSection as $key=>$list){
            $footerSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $footerSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $footerSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $footerSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        return view('admin.footer.create',[
                'footerSectionList'=>$footerSectionList
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
