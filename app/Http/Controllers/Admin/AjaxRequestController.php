<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use App\Models\InvestorSharePayment;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Share;
use Illuminate\Support\Facades\Validator;

class AjaxRequestController extends Controller
{
    public function find_shares(Request $request)
    {

        $id =  $request->id;
        $share = Share::where('project_id', $id)->first();

        return response()->json($share);
    }

    public function find_emi_with_shareid(Request $request)
    {

        \DB::connection()->enableQueryLog();
        $id =  $request->id;
        // dd($id);
        $shareEmi = InvestorSharePayment::select(
                'investor_share_payments.*',
            )
            ->where('investor_share_id',$id)
            ->whereNotNull('share_id')
            ->where('status', 'Due')
            ->orderBy('id', 'DESC')
            ->get();
            // dd($shareEmi);
            // $queries = \DB::getQueryLog();
            $allemi = array();
            foreach($shareEmi as $key => $val){
                $allemi[$key]['id'] = $val->id;
                $allemi[$key]['created_emi'] = $val->created_at->toDateString();
            }

            // dd($allemi);

        return response()->json($allemi);
    }

    public function homeSectionUpdate(Request $request){
        $data=$request->input();
        $rules = array();
        if($data['section_type']=='image'){
            $rules = array(
                'file'  => 'required|image'
            );
        }else if( $data['section_type']=='file'){
            $rules = array(
                'file'  => 'required'
            );
        }  else if($data['section_type']=='video'){
            $rules = array(
                'file'  => 'required|mimetypes:video/avi,video/mp4,video/mpeg,video/quicktime'
            );
        }

        if(!isset($data['id']) && sizeof($rules)>0){
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }


       if($image = $request->file('file')){
           $new_name = rand().'_'.time(). '.' . $image->getClientOriginalExtension();
           if($data['section_type']=='image')
           {
               $image->move(public_path('/uploads/img/'), $new_name);
               $output = array(
                   'success' => 'Image uploaded successfully',
                   'imagesrc'=>'/uploads/img/'.$new_name,
                   'outputId'=>$data['id_to_display']
               );
           }else if($data['section_type']=='file')
           {
               $image->move(public_path('/uploads/file/'), $new_name);
               $successMsg="File uploaded successfully";
               if($data['sectionName']=='findajob')
               {
                   $successMsg='Application Sent Successfully';
               }
               $output = array(
                   'success' => $successMsg,
                   'imagesrc'=>'/uploads/file/'.$new_name,
                   'outputId'=>$data['id_to_display']
               );
           }
           else if($data['section_type']=='video')
           {
               $image->move(public_path('/uploads/video/'), $new_name);
               $output = array(
                   'success' => 'Video uploaded successfully',
                   'imagesrc'=>'/uploads/video/'.$new_name,
                   'outputId'=>$data['id_to_display']
               );
           }

           $data['content']=$new_name;
           $dataUpdate['content']=$data['content'];
       }
       else{
           $output = array(
               'success' => 'Content Saved successfully',
           );
       }


       $data['title']=isset($data['title'])? $data['title']:'';
       $data['description']=isset($data['description'])? $data['description']:'';
       $data['email']=isset($data['email'])? $data['email']:'';
       $data['designation']=isset($data['designation'])? $data['designation']:'';

       $homeSection=HomeSection::where('sectionName',$data['sectionName'])
       ->where('content_type',$data['content_type'])
       ->where('section_type',$data['section_type'])
       ->first();
       if(isset($homeSection)&&$homeSection->count()>0){
           if(isset( $data['content'])){
               $homeSection->content=$data['content'];
           }

           $homeSection->sectionName=$data['sectionName'];
           $homeSection->content_type=$data['content_type'];
           $homeSection->title=$data['title'];
           $homeSection->description=$data['description'];
           $homeSection->section_type=$data['section_type'];
           $homeSection->section_type=$data['section_type'];
           $homeSection->parent_section_name=$data['parent_section_name'];
           $homeSection->email=isset($data['email'])?$data['email']:'';
           $homeSection->designation=isset($data['designation'])?$data['designation']:'';
           $homeSection->save();
       }else{
           HomeSection::create($data);
       }


        return response()->json($output);
    }

    public function homeTextUpdate(Request $request){

        $data=$request->input();

        if($data['contentType']=='social'){
            $rules = array(
                'facebookContent'  =>  ['nullable', 'url'],
                'linkdlnContent'  =>  ['nullable', 'url'],
                'youtubeContent'  =>  ['nullable', 'url']
            );
        }

        if($data['contentType']=='tomorrowsCall'){
            $rules = array(
                'tomorrowText'  => 'required'
            );
        }
        if($data['contentType']!='address') {
            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }
        $data['description']=isset($data['title'])? $data['title']:'';
        if($data['contentType']=='social'){

            if(isset($data['facebookContent'])){
                $data['content']=trim($data['facebookContent']);
                $data['content_type']='facebook_link';
                $data['status']=isset($data['facebookContent_status'])?$data['facebookContent_status']:false;
                $data['title']=isset($data['title'])? $data['title']:'';


                if(isset($data['facebookContent_id'])){
                    HomeSection::where('id',$data['facebookContent_id'])->update($data);
                }else{
                    HomeSection::create($data);
                }
            }


            if(isset($data['linkdlnContent'])){
                $data['content']=trim($data['linkdlnContent']);
                $data['content_type']='linkdln_link';
                $data['status']=isset($data['linkdlnContent_status'])?$data['linkdlnContent_status']:false;
                $data['title']=isset($data['title'])? $data['title']:'';

                if(isset($data['linkdlnContent_id'])){
                    HomeSection::where('id',$data['linkdlnContent_id'])->update($data);
                }else{
                    HomeSection::create($data);
                }
            }

            if(isset($data['youtubeContent'])){
                $data['content']=trim($data['youtubeContent']);
                $data['content_type']='youtube_link';
                $data['status']=isset($data['youtubeContent_status'])?$data['youtubeContent_status']:false;
                $data['title']=isset($data['title'])? $data['title']:'';

                if(isset($data['youtubeContent_id'])){
                    HomeSection::where('id',$data['youtubeContent_id'])->update($data);
                }else{
                    HomeSection::create($data);
                }
            }

        }

        if($data['contentType']=='tomorrowsCall'){
            $tomorrowData['parent_section_name']=trim($data['parent_section_name']);
            $tomorrowData['content_type']=trim($data['contentType']);
            $tomorrowData['sectionName']=trim($data['sectionName']);
            $tomorrowData['section_type']=trim($data['section_type']);
            $tomorrowData['content']=trim($data['tomorrowText']);
            $tomorrowData['title']=isset($data['title'])? $data['title']:'';
            $tomorrowData['description']=isset($data['description'])? $data['description']:'';

                if(isset($data['tomorrowText_id'])){
                    HomeSection::where('id',$data['tomorrowText_id'])->update($tomorrowData);
                }else{
                    HomeSection::create($tomorrowData);
                }

        }

        if($data['contentType']=='address'){

            $addressData['parent_section_name']=trim($data['parent_section_name']);
            $addressData['sectionName']=trim($data['sectionName']);
            $addressData['section_type']=trim($data['section_type']);

            $addressData['title']=isset($data['title'])? $data['title']:'';
            $addressData['description']=isset($data['description'])? $data['description']:'';



            $corporateAddress=HomeSection::where('sectionName',$data['sectionName'])
                ->where('content_type','address')
                ->where('section_type',$data['section_type'])
                ->first();


            $addressData['content']=trim($data['content']);
            $addressData['content_type']='address';
            if(isset($corporateAddress)&&$corporateAddress->count()>0){
                $corporateAddress->content=$addressData['content'];
                $corporateAddress->save();
                }else{
                HomeSection::create($addressData);
            }


            $corporateAddressPhone1=HomeSection::where('sectionName',$data['sectionName'])
                ->where('content_type','corporateAddress_phone1')
                ->where('section_type',$data['section_type'])
                ->first();

            $addressData['content']=trim($data['corporateAddress_phone1']);
            $addressData['content_type']='corporateAddress_phone1';
            if(isset($corporateAddressPhone1)&&$corporateAddressPhone1->count()>0){
                $corporateAddressPhone1->content=$addressData['content'];
                $corporateAddressPhone1->save();
            }else{
                HomeSection::create($addressData);
            }

            $corporateAddressPhone2=HomeSection::where('sectionName',$data['sectionName'])
                ->where('content_type','corporateAddress_phone2')
                ->where('section_type',$data['section_type'])
                ->first();

            $addressData['content']=trim($data['corporateAddress_phone2']);
            $addressData['content_type']='corporateAddress_phone2';
            if(isset($corporateAddressPhone2)&&$corporateAddressPhone2->count()>0){
                $corporateAddressPhone2->content=$addressData['content'];
                $corporateAddressPhone2->save();
            }else{
                HomeSection::create($addressData);
            }

            $corporateAddressEmail=HomeSection::where('sectionName',$data['sectionName'])
                ->where('content_type','corporateAddress_email')
                ->where('section_type',$data['section_type'])
                ->first();

            $addressData['content']=trim($data['corporateAddress_email']);
            $addressData['content_type']='corporateAddress_email';
            if(isset($corporateAddressEmail)&&$corporateAddressEmail->count()>0){
                $corporateAddressEmail->content=$addressData['content'];
                $corporateAddressEmail->save();
            }else{
                HomeSection::create($addressData);
            }

        }

        $output = array(
            'success' => 'Content saved successfully',
        );

        return response()->json($output);
    }

}
