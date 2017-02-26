<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachementRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use App\Category;
use App\Post;

class AttachementController extends Controller {


  public function store(AttachementRequest $request){

       $file= $request->file('name');
         if($file )
          {
            $fileName = uniqid(). '.' . strtolower($file->getClientOriginalExtension());
            $path = public_path('uploads/attachements/' . $fileName);
            Image::make($file)->resize(300, 200)->save($path);

          }
          return response()->json([
             'url' => 'http://localhost/BlogMVC-Laravel/public/uploads/attachements/'.$fileName
             ]);
  }
}
