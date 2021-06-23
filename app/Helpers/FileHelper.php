<?php

namespace App\Helpers;
use stdClass;

class FileHelper
{
    public static function saveFiles($files){ 
        $savedFiles = [];
        foreach ($files as $key => $file)
        {
            // Generate a file name with extension
            $fileName = 'file-'.time().$key.'.'.$file->getClientOriginalExtension();
            // Save the file

            $object = new stdClass();
            $object->handle = $file->storeAs('files', $fileName);
            $savedFiles[] = $object;
        }
        return $savedFiles;
    }
    public static function saveFile($file,$path){
               // Generate a file name with extension
            //    $fileName = $file->getClientOriginalName();
            //    // Save the file
   
            //    $object = new stdClass();
            //    $object->handle = $file->storeAs('files', $fileName);
            //    return $object;
            $filename = $file->getClientOriginalName();
            $Path = public_path().$path;
            $file->move($Path, $filename);
             return $path.$filename;
    } 

    
}