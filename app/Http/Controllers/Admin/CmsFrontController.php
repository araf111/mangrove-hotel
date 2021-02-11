<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class CmsFrontController extends Controller
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

    public function createHomesection(){

        $homeSection=HomeSection::where('parent_section_name','home')->get();
        $tomorrowsCallSection=$homeSection->where('sectionName','tomorrowsCall')->sortBy('id');
        $socialSection=$homeSection->where('sectionName','social')->sortBy('id');

        $generaSectionList=[];
        foreach($homeSection as $key=>$list){
            $generaSectionList[$list->content_type][$list->section_type]=$list->content;
            $generaSectionList[$list->content_type]['status']=$list->status;
            $generaSectionList[$list->content_type]['id']=$list->id;
        }
        $socialSectionList=[];
        foreach($socialSection as $key=>$item){
            $socialSectionList[$item->content_type][$item->section_type]=$item->content;
            $socialSectionList[$item->content_type]['id']=$item->id;
        }
        return view('admin.cmsfront.create_home_section',
        [
            'home_section'=>$homeSection,
            'generaSectionList'=>$generaSectionList,
            'tomorrowsCallSection'=>$tomorrowsCallSection,
            'socialSectionList'=>$socialSectionList,
        ]);
    }

    public function createOverview(){
        $overviewSection=HomeSection::where('parent_section_name','overview')->get();
        $overviewSectionList=[];
        foreach($overviewSection as $key=>$list){
            $overviewSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $overviewSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $overviewSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $overviewSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }

        return view('admin.cmsfront.overview',[
            'overviewSectionList'=>$overviewSectionList
            ]
        );
    }

    public function modernLiving(){

        $modernLivingSection=HomeSection::where('parent_section_name','modernliving')->get();
        $modernLivingList=[];
        foreach($modernLivingSection as $key=>$list){
            $modernLivingList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $modernLivingList[$list->sectionName][$list->content_type]['status']=$list->status;
            $modernLivingList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        //dd($modernLivingList);

        return view('admin.cmsfront.modernliving',[
                'modernLivingList'=>$modernLivingList
            ]
        );

    }

    public function galleryList(){

        $gallerySection=HomeSection::where('parent_section_name','gallery')
            ->where('content_type','gallery')
            ->get();

        $gallerySectionListData=HomeSection::where('parent_section_name','gallery')->get();
        $gallerySectionList=[];
        foreach($gallerySectionListData as $key=>$list){
            $gallerySectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $gallerySectionList[$list->sectionName][$list->content_type]['description']=$list->content;
            $gallerySectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $gallerySectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        return view('admin.cmsfront.galleryList',[
                'galleryList'=>$gallerySection,
                'gallerySectionList'=>$gallerySectionList
            ]
        );
    }

    public function gallery(){
        $galleryList=HomeSection::where('parent_section_name','gallery')->get();
        return view('admin.cmsfront.gallery',[
                'galleryCount'=>isset($galleryList)?$galleryList->count()+1:1
            ]
        );
    }

    public function removeGallery($id){
        $gallery=HomeSection::where('id',$id)->first();
        $gallery->delete();

        return redirect('admin/cms/gallery/list')->with('flash_message', 'gallery removed!');
    }



    public function map(){
        return view('admin.cmsfront.map');
    }

    public function login(){

        $loginSection=HomeSection::where('parent_section_name','login')->get();
        $loginSectionList=[];
        foreach($loginSection as $key=>$list){
            $loginSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $loginSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $loginSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $loginSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        return view('admin.cmsfront.login',[
                'loginSectionList'=>$loginSectionList
            ]
        );
    }

    public function aboutUs(){

        $aboutUsSection=HomeSection::where('parent_section_name','aboutUs')->get();
        $aboutUsSectionList=[];
        foreach($aboutUsSection as $key=>$list){
            $aboutUsSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $aboutUsSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $aboutUsSectionList[$list->sectionName][$list->content_type]['title']=$list->title;
            $aboutUsSectionList[$list->sectionName][$list->content_type]['email']=$list->email;
            $aboutUsSectionList[$list->sectionName][$list->content_type]['designation']=$list->designation;
            $aboutUsSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $aboutUsSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        return view('admin.cmsfront.aboutus',[
                'gallerySectionList'=>$aboutUsSectionList
            ]
        );
    }


    public function findJobs(){

        $findaJobSection=HomeSection::where('parent_section_name','findajob')->get();
        $findaJobSectionList=[];
        foreach($findaJobSection as $key=>$list){
            $findaJobSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $findaJobSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $findaJobSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $findaJobSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
            $findaJobSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        return view('admin.cmsfront.findajobs',[
                'findaJobSectionList'=>$findaJobSection
            ]
        );
    }

    public function publicationList(){

        $gallerySection=HomeSection::where('parent_section_name','publication')
            ->where('content_type','publication')
            ->get();

        $gallerySectionListData=HomeSection::where('parent_section_name','publicationBlog')->get();
//        $gallerySectionList=[];
//        foreach($gallerySectionListData as $key=>$list){
//            $gallerySectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
//            $gallerySectionList[$list->sectionName][$list->content_type]['description']=$list->content;
//            $gallerySectionList[$list->sectionName][$list->content_type]['status']=$list->status;
//            $gallerySectionList[$list->sectionName][$list->content_type]['id']=$list->id;
//        }
        return view('admin.cmsfront.publicationsList',[
                'galleryList'=>$gallerySectionListData,
                'gallerySectionList'=>$gallerySection
            ]
        );
    }

    public function publications(){
        $galleryList=HomeSection::where('parent_section_name','publicationBlog')->get();
        return view('admin.cmsfront.publication',[
                'galleryCount'=>isset($galleryList)?$galleryList->count()+1:1
            ]
        );
    }

    public function removePublications($id){
        $gallery=HomeSection::where('id',$id)->first();
        $gallery->delete();

        return redirect('admin/cms/publications')->with('flash_message', 'publication removed!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
