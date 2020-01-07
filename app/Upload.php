<?php

namespace App;
use File;  
class Upload  {  
   private $uploadDir;  
   private $uploadFolder;  
   public function __construct()  
   {  
     $this->uploadDir = public_path('uploads');  
     $this->uploadFolder = 'uploads/';  
   }  
   // Upload file  
   public function uploadPhoto($request,$name)  
   { 
     $imageFileName = null; 
     //dd($request->hasFile($name));
     if ($request->hasFile($name))  
     {  
       $originalFileName = $request->file($name)->getClientOriginalName();  
       $extensionFileName = $request->file($name)->getClientOriginalExtension();  
       $imageFileName = $this->createUniqueFileName($originalFileName, $extensionFileName);  
       $request->file($name)->move($this->uploadDir, $imageFileName);  
       //dd("RUN");
     }  
     return $imageFileName;  
     //dd($imageFileName);
   }  
   // Upload file catalog
  
   // Xoa file  
   public function removePhoto($originalFileName)  
   {  
     if ($this->isExistedFile($originalFileName)) File::delete($this->uploadFolder. $originalFileName);  
   }  
   // Lay filename cua file khong chua phan dinh dang file  
   private function getFileNamewithoutExtension($originalFileName, $extensionFileName)  
   {  
     return substr($originalFileName, 0, strlen($originalFileName) - (strlen($extensionFileName) + 1));  
   }  
   //Kiem tra file ton tai hay khong  
   private function isExistedFile($originalFileName)  
   {  
     return File::exists($this->uploadDir. '/' . $originalFileName);  
   }  
   //Tao ra file name khong trung voi cac file khac  
   private function createUniqueFileName($originalFileName, $extensionFileName)  
   {  
     $fileName = '';  
     if ($this->isExistedFile($originalFileName))  
     {  
       $fileNamewithoutExtension = $this->getFileNamewithoutExtension($originalFileName, $extensionFileName);  
       $fileName = $fileNamewithoutExtension. uniqid('_'). '.'. $extensionFileName;  
     }  
     else $fileName = $originalFileName;  
     return $fileName;  
   }  
 }  