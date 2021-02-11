<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homeSection=HomeSection::where('parent_section_name','home')->get();
        $tomorrowsCallSection=$homeSection->where('sectionName','tomorrowsCall')->sortBy('id');
        $socialSection=$homeSection->where('sectionName','social')->sortBy('id');
        $overviewSection=HomeSection::where('parent_section_name','overview')->get();

        $generalSectionList=[];
        foreach($homeSection as $key=>$list){
            $generalSectionList[$list->content_type][$list->section_type]=$list->content;
            $generalSectionList[$list->content_type]['status']=$list->status;
            $generalSectionList[$list->content_type]['id']=$list->id;
        }
        $socialSectionList=[];
        foreach($socialSection as $key=>$item){
            $socialSectionList[$item->content_type][$item->section_type]=$item->content;
            $socialSectionList[$item->content_type]['id']=$item->id;
        }

        $overviewSectionList=[];
        foreach($overviewSection as $key=>$list){
            $overviewSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $overviewSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $overviewSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $overviewSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }

        $modernLivingSection=HomeSection::where('parent_section_name','modernliving')->get();
        $modernLivingList=[];
        foreach($modernLivingSection as $key=>$list){
            $modernLivingList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $modernLivingList[$list->sectionName][$list->content_type]['status']=$list->status;
            $modernLivingList[$list->sectionName][$list->content_type]['id']=$list->id;
        }

        $loginSection=HomeSection::where('parent_section_name','login')->get();
        $loginSectionList=[];
        foreach($loginSection as $key=>$list){
            $loginSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $loginSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $loginSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }

        $footerSection=HomeSection::where('parent_section_name','footer')->get();
        $footerSectionList=[];
        foreach($footerSection as $key=>$list){
            $footerSectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $footerSectionList[$list->sectionName][$list->content_type]['description']=$list->description;
            $footerSectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $footerSectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }

        $galleryList=HomeSection::where('parent_section_name','gallery')
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

        return view('front.home',
            [
                'home_section'=>$homeSection,
                'generalSectionList'=>$generalSectionList,
                'tomorrowsCallSection'=>$tomorrowsCallSection,
                'socialSectionList'=>$socialSectionList,
                'overviewSectionList'=>$overviewSectionList,
                'modernLivingList'=>$modernLivingList,
                'loginSectionList'=>$loginSectionList,
                'footerSectionList'=>$footerSectionList,
                'galleryList'=>$galleryList,
                'gallerySectionList'=>$gallerySectionList

            ]);
    }

    public function about()
    {

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
        return view('front.about',[
                'gallerySectionList'=>$aboutUsSectionList
            ]
        );
    }

    public function findajob()
    {
        return view('front.findajob');
    }

    public function publication()
    {

        $gallerySectionListData=HomeSection::where('parent_section_name','publicationBlog')->get();

        $gallerySection=HomeSection::where('parent_section_name','publication')
            ->get();

        $gallerySectionList=[];
        foreach($gallerySection as $key=>$list){
            $gallerySectionList[$list->sectionName][$list->content_type][$list->section_type]=$list->content;
            $gallerySectionList[$list->sectionName][$list->content_type]['description']=$list->content;
            $gallerySectionList[$list->sectionName][$list->content_type]['status']=$list->status;
            $gallerySectionList[$list->sectionName][$list->content_type]['id']=$list->id;
        }
        return view('front.publication',[
            'galleryList'=>$gallerySectionListData,
            'gallerySectionList'=>$gallerySectionList
        ]);
    }
    public function publicationDetails($id)
    {
        $publicationDetails=HomeSection::where('id',$id)->first();
        $gallerySectionListData=HomeSection::where('parent_section_name','publicationBlog')->orderBy('id','desc')->take(3)->get();
        return view('front.publicationDetails',
            [
                'publicationDetails'=>$publicationDetails,
                'gallerySectionListData'=>$gallerySectionListData,

            ]
        );
    }
    public function instruction()
    {
        return view('front.Instruction');
    }

    public function policy()
    {
        return view('front.policy');
    }
}
