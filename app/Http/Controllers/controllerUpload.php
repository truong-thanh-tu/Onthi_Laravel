<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\DemoImage;
class controllerUpload extends Controller
{
    public function upload_show(){
        return view('Upload.UploadFile');
    }
    public  function upload_handling(Request $request){
       if ($request->hasFile('myFile')){
          $file = $request->myFile;
          $file->move('Image',$file->getClientOriginalName());
          $newimage = new DemoImage();
          $newimage->image = $file->getClientOriginalName();
          $newimage->save();
          echo "Thanh Cong";
       }
       else{
           echo "Không có file";
       }
    }
}
