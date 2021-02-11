<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use App\Models\Inquiry;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class InquiryController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => [
                'required',
                'string',
            ],
            'mobile' => [
                'required',
                'max:14',
                Rule::unique('inquiries'),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('inquiries'),
            ],
        ]);

        $input = $request->all();
        $token = Str::random(32);
  		$input['download_token'] = $token;

        Inquiry::create($input);

        return response()->json($token, 200);
    }

    public function download($hash)
    {

        $token = Inquiry::where('download_token', $hash)->first();
        if ($token) {
        	$token->download_token = null;
        	$token->save();
            $homeSection=HomeSection::where('parent_section_name','home')->get();

            $generalSectionList=[];
            foreach($homeSection as $key=>$list){
                $generalSectionList[$list->content_type][$list->section_type]=$list->content;
                $generalSectionList[$list->content_type]['status']=$list->status;
                $generalSectionList[$list->content_type]['id']=$list->id;
            }

            $file=$generalSectionList['file']['file']!=''?asset( 'uploads/file/'.$generalSectionList['file']['file']):asset( 'backend/img/default/no-image.png');

            return Response()->download(public_path().'/uploads/file/'.$generalSectionList['file']['file']);
        } else {

            return abort(404);
        }
}
}
