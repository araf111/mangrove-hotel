<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('file.fileUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        // ============ validation process one =====================
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,pdf,xlx,csv,gif,svg|max:2048',
        ]);
        // ============ validation process one end =====================
        
        // ============ validation process two =====================
        // $validator = Validator::make(
        //     $input, 
        //     [
        //         'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000'
        //     ],[
        //         'images.*.required' => 'Please upload an image',
        //         'images.*.mimes' => 'Only jpeg,png and bmp images are allowed',
        //         'images.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
        //     ]
        // );
       
        // if ($validator->fails()) {
        //     // If fails then return Validation error.. 
        // }
        // ============ validation process two end=====================

        // ============== validation process three =============
        // $this->validate($request, [
        //     'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:2000'
        //   ],[
        //     'images.*.required' => 'Please upload an image only',
        //     'images.*.mimes' => 'Only jpeg, png, jpg and bmp images are allowed',
        //     'images.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',
        // ]);
        // ============== validation process three end=============
  
        // ============ process one ===============
        // $fileName = time().'.'.$request->file->extension();
        // $request->file->move(public_path('uploads'), $fileName);
        // return back()
        // ->with('success','You have successfully upload file.')
        // ->with('file',$fileName);
        // ============ process one end===============

        // ============ process two ===============
        // $path = $request->file('file')->store('uploade');
        // return back()
        //     ->with('success','You have successfully upload file.')
        //     ->with('file',$path);
        // ============ process two end===============

        // ============ process three ===============
        $fileName = time().'.'.$request->file->extension();
        $path = $request->file('file')->storeAs(
            'uploades', $fileName
        );
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
        // ============ process three end===============
   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function multipleFilecreate()
    {
        return view('file.create');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function multipleStore(Request $request)
    {
        // $this->validate($request, [
        //         'filenames' => 'required',
        //         'filenames.*' => 'mimes:doc,pdf,docx,zip'
        // ]);
        if($request->hasfile('filenames'))
         {
             $i = 0;
            foreach($request->file('filenames') as $file)
            {
                $name = time().$i.'.'.$file->extension();
                $file->move(public_path().'/uploads/', $name);  
                $data[] = $name;
                $i++;  
            }
         }
        //  $file= new File();
        //  $file->filenames=json_encode($data);
        //  $file->save();
        return back()->with('success', 'Data Your files has been successfully added');
    }
}