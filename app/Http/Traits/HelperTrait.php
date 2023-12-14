<?php

namespace App\Http\Traits;

use App\Models\Industry;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

Trait HelperTrait
{
    public $insertMsg = ' تم إنشاء العنصر بنجاح';
    public $updateMsg = 'تم تحديث العنصر بنجاح';
    public $deleteMsg = 'تم حذف العنصر بنجاح';
    public $error = 'هناك خطأ ما...';

    public $paginate = 20;


    //Success Response
    public function successResponse($message = '',$data = [],$statusCode = Response::HTTP_OK)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    //Error Response
    public function errorResponse($message = '')
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ]);
    }




    //Main Upload File Method
    public function uploadFileTrait($request, $fileInputName, $moveTo)
    {
        $file = $request->file($fileInputName);
        $fileUploaded='Image_'.rand(1,99999999999).'.'.$file->getClientOriginalExtension();
        $file->move($moveTo, $fileUploaded);
        return $fileUploaded;
    }

    //Full image path
    public function image_full_path($image)
    {
        return asset('/uploads/'. $image);
    }

    //Delete File
    public function delete_file_before_delete_item($path)
    {
        $path = public_path($path);
        if (file_exists($path)) {
            File::delete($path);
        }
    }




}

